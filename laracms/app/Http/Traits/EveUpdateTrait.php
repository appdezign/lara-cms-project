<?php

namespace Eve\Http\Traits;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

use Lara\Common\Models\Setting;
use Lara\Common\Models\Entity;
use Lara\Common\Models\Entitygroup;
use Lara\Common\Models\Translation;

use Eve\Models\Video;

trait EveUpdateTrait
{

	private function checkForEveUpdates($process = false)
	{

		// current Eve version
		$databaseVersion = $this->getEveVersionFromSettings();

		$updates = array();

		if ($databaseVersion) {

			// new Eve version
			$laraVersion = config('lara-eve.lara_eve_version');

			$builds = config('lara-eve.lara_eve_builds');

			foreach ($builds as $build) {
				if (version_compare($build, $databaseVersion, '>') && version_compare($build, $laraVersion, '<=')) {
					$updates[] = $build;
				}
			}

			if ($process) {

				if (!empty($updates)) {

					/* ~~~~~~~~~~~~ UPDATES ~~~~~~~~~~~~ */

					if (in_array('1.0.2', $updates)) {

						$this->fixSyncUrl();

						$this->setEveSetting('system', 'lara_eve_version', '1.0.2');

					}

					if (in_array('1.0.3', $updates)) {

						$this->fixRedirects();

						$this->setEveSetting('system', 'lara_eve_version', '1.0.3');

					}

					if (in_array('1.0.4', $updates)) {

						$this->fixAttachments();

						$this->setEveSetting('system', 'lara_eve_version', '1.0.4');

					}

					if (in_array('1.0.5', $updates)) {

						$this->addFieldToContactform();

						$this->setEveSetting('system', 'lara_eve_version', '1.0.5');

					}

					if (in_array('2.1.2', $updates)) {

						$this->updateVideoFields();

						$this->setEveSetting('system', 'lara_eve_version', '2.1.2');

					}

					// Post-update actions
					$this->eveClearCache();

					return redirect()->route('admin.dashboard.index', ['eveversion' => end($updates)])->send();

				}

			}

		}

		return $updates;

	}

	private function updateVideoFields(): bool
	{
		$entity = Entity::where('entity_key', 'video')->first();
		if ($entity) {
			// update video relation
			$entity->objectrelations->update([
				'has_videos' => 1,
			]);

			// hide custom video field
			$customVideoField = $entity->customcolumns->where('fieldname', 'youtubecode')->first();
			if($customVideoField) {
				$customVideoField->fieldstate = 'hidden';
				$customVideoField->save();
			}
		}

		$objects = Video::get();
		foreach ($objects as $object) {
			if(property_exists($object,'youtubecode' )) {
				$ytcode = $object->youtubecode;
				if (!empty($ytcode)) {
					// purge
					$object->videos()->delete();
					// create new video
					$object->videos()->create([
						'title'       => $object->title,
						'youtubecode' => $ytcode,
						'featured'    => 1,
					]);
				}
			}
		}

		return true;
	}

	private function addFieldToContactform()
	{

		// add field to entity
		$entity = Entity::where('entity_key', 'contactform')->first();
		if ($entity) {
			$check = $entity->customcolumns()->where('fieldname', 'telephone')->first();
			if (!$check) {
				// add field
				$entity->customcolumns()->create([
					'fieldtitle' => 'Telephone',
					'fieldname'  => 'telephone',
					'fieldtype'  => 'string',
					'fieldhook'  => 'default',
					'fielddata'  => '',
					'fieldstate' => 'enabled',
				]);
			}
		}

		// add translations
		$this->checkTranslationItem('nl', 'lara-front', 'contactform', 'formfield', 'telephone', 'Telefoon', true);
		$this->checkTranslationItem('en', 'lara-front', 'contactform', 'formfield', 'telephone', 'Telephone', true);

		$this->checkTranslationItem('nl', 'lara-front', 'contactform', 'formfield', 'comment', 'Opmerking', true);
		$this->checkTranslationItem('en', 'lara-front', 'contactform', 'formfield', 'comment', 'Comment', true);

		$this->exportTranslationsToFile(['lara-front']);

	}

	private function fixAttachments()
	{

		$this->setEntityMediaSettings('page', 1, 24, 1, 1, 1, 24);
		$this->setEntityMediaSettings('blog', 1, 24, 1, 1, 1, 24);

		return true;

	}

	private function setEntityMediaSettings($entity_key, $has_images, $max_images, $has_videos, $max_videos, $has_files, $max_files)
	{

		// get entity
		$entity = Entity::where('entity_key', $entity_key)->first();

		if ($entity) {

			$pageObjectRelations = $entity->objectrelations;

			$pageObjectRelations->has_images = $has_images;
			$pageObjectRelations->max_images = $max_images;
			$pageObjectRelations->has_videos = $has_videos;
			$pageObjectRelations->max_videos = $max_videos;
			$pageObjectRelations->has_files = $has_files;
			$pageObjectRelations->max_files = $max_files;

			$pageObjectRelations->save();

			return true;

		} else {

			return false;

		}

	}

	private function fixRedirects()
	{

		$entity = Entity::where('entity_key', 'redirect')->first();

		if (empty($entity)) {
			$menuGroup = Entitygroup::where('key', 'menu')->first();
			if ($menuGroup) {
				$entity = Entity::create([
					'group_id'           => $menuGroup->id,
					'title'              => 'Redirects',
					'entity_model_class' => 'Lara\\Common\\Models\\Redirect',
					'entity_key'         => 'redirect',
					'entity_controller'  => 'RedirectsController',
					'resource_routes'    => 1,
					'has_front_auth'     => 0,
					'menu_parent'        => 'menu',
					'menu_position'      => 155,
				]);
			}
		}

		if (empty($entity->columns)) {
			$entity->columns()->create([
				'sort_field' => 'id',
				'sort_order' => 'asc',
			]);
		}

		if (empty($entity->objectrelations)) {
			$entity->objectrelations()->create([
				'max_images' => 1,
				'max_videos' => 1,
				'max_files'  => 1,
			]);
		}

		if (empty($entity->panels)) {
			$entity->panels()->create([]);
		}

		return true;

	}

	private function fixSyncUrl()
	{
		DB::table('lara_object_sync')->update([
			'remote_url' => config('lara-eve.remote_api_sync_url'),
		]);
	}

	private function getEveVersionFromSettings()
	{

		// current version
		$currentBuild = Setting::where('cgroup', 'system')->where('key', 'lara_eve_version')->first();

		if ($currentBuild) {

			return $currentBuild->value;

		} else {

			$laraVersion = config('lara-eve.lara_eve_version');

			if ($laraVersion) {

				$currentBuild = Setting::create([
					'title'  => 'Eve Version',
					'cgroup' => 'system',
					'key'    => 'lara_eve_version',
					'value'  => $laraVersion,
				]);

				return $currentBuild->value;

			} else {

				return null;

			}

		}

	}

	private function setEveSetting($cgroup, $key, $value)
	{

		$modelClass = \Lara\Common\Models\Setting::class;

		// get record
		$object = $modelClass::where('cgroup', $cgroup)
			->where('key', $key)
			->first();

		if ($object) {

			$object->value = $value;
			$object->save();

		} else {

			$modelClass::create([
				'title'  => $key,
				'cgroup' => $cgroup,
				'key'    => $key,
				'value'  => $value,
			]);

		}

	}

	private function checkTranslationItem($language, $module, $cgroup, $tag, $key, $value, $force = false)
	{

		$trans = Translation::where('language', $language)
			->where('module', $module)
			->where('cgroup', $cgroup)
			->where('tag', $tag)
			->where('key', $key)
			->first();

		$change = false;

		if ($trans) {

			// check value
			if ($trans->value != $value) {
				if (substr($trans->value, 0, 1) == '_' || $force) {
					$trans->value = $value;
					$trans->save();
					$change = true;
				}
			}

		} else {

			Translation::create([
				'language' => $language,
				'module'   => $module,
				'cgroup'   => $cgroup,
				'tag'      => $tag,
				'key'      => $key,
				'value'    => $value,
			]);

			$change = true;

		}

		return $change;

	}

	private function eveClearCache()
	{

		Artisan::call('cache:clear');
		Artisan::call('config:clear');
		Artisan::call('view:clear');

	}

}