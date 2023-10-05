<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Lara\Common\Models\Entity;

class DatabaseContentSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$tablenames = config('lara-common.database');

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		// Page
		$entities = Entity::whereHas('egroup', function ($query) {
			$query->where('key', 'page');
		})->get();

		foreach ($entities as $entity) {



			$prefix = $entity->egroup->key . '_prefix';

			$tablename = $tablenames['entity'][$prefix] . str_plural($entity->entity_key);

			$classname = ucfirst(camel_case($tablename . '_table_seeder'));

			$this->call('Database\\Seeders\\' . $classname);

		}

		// Blocks
		$entities = Entity::whereHas('egroup', function ($query) {
			$query->where('key', 'block');
		})->get();

		foreach ($entities as $entity) {

			$prefix = $entity->egroup->key . '_prefix';

			$tablename = $tablenames['entity'][$prefix] . str_plural($entity->entity_key);

			$classname = ucfirst(camel_case($tablename . '_table_seeder'));

			$this->call('Database\\Seeders\\' . $classname);

		}

		// Content
		$entities = Entity::whereHas('egroup', function ($query) {
			$query->where('key', 'entity');
		})->get();

		foreach ($entities as $entity) {

			$prefix = $entity->egroup->key . '_prefix';

			$tablename = $tablenames['entity'][$prefix] . str_plural($entity->entity_key);

			$classname = ucfirst(camel_case($tablename . '_table_seeder'));

			$this->call('Database\\Seeders\\' . $classname);

		}

		// Forms
		$entities = Entity::whereHas('egroup', function ($query) {
			$query->where('key', 'form');
		})->get();

		foreach ($entities as $entity) {

			$prefix = $entity->egroup->key . '_prefix';

			$tablename = $tablenames['entity'][$prefix] . str_plural($entity->entity_key);

			$classname = ucfirst(camel_case($tablename . '_table_seeder'));

			$this->call('Database\\Seeders\\' . $classname);

		}

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
