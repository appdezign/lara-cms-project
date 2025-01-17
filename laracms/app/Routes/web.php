<?php

use Illuminate\Support\Facades\App;

use Spatie\Honeypot\ProtectAgainstSpam;

use Lara\Common\Models\Menuitem;
use Lara\Common\Models\Entity;
use Lara\Common\Models\Tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

if (!App::runningInConsole() && !config('lara.needs_setup')) {


	// get User Theme without HttpCache
	Route::get('user/profile/theme', 'Front\Special\ThemeController@show')->name('front.usertheme');

	// quick cache clear
	Route::get('cc', 'Front\Special\CacheController@process')->name('special.cache.clear');

	// external uptime monitoring
	Route::get('uptime', '\Eve\Http\Controllers\Front\Special\UptimeController@show')
		->name('special.uptime.show');

	// Front Profile
	Route::get('user/profile', 'Front\Auth\ProfileController@form')->name('special.user.profile')->middleware('auth');
	Route::patch('user/profile', 'Front\Auth\ProfileController@process')->name('special.user.saveprofile')->middleware('auth');

	// ADMIN Entity Routes
	$adminprefix = config('lara.adminprefix');
	Route::group(['prefix' => $adminprefix, 'middleware' => ['web', 'auth', 'lara2fa', 'force2fa', 'backend', 'userLocale']], function () {

		// Entity routes
		$entities = Lara\Common\Models\Entity::entityGroupIsOneOf(['entity', 'form'])
			->where('resource_routes', 1)
			->get();

		$alias_routes = config('lara-common.routes.has_alias');

		foreach ($entities as $entity) {

			$ekey = $entity->entity_key;
			$ecntr = $entity->entity_controller;
			$prfx = 'Admin\\' . ucfirst($entity->egroup->key);

			Route::get($ekey . '/{id}/unlock', $prfx . '\\' . $ecntr . '@unlock')->name('admin.' . $ekey . '.unlock');
			Route::post($ekey . '/reorder', $prfx . '\\' . $ecntr . '@savereorder')->name('admin.' . $ekey . '.savereorder');
			Route::post($ekey . '/batch', $prfx . '\\' . $ecntr . '@batch')->name('admin.' . $ekey . '.batch');
			Route::get($ekey . '/reorder', $prfx . '\\' . $ecntr . '@reorder')->name('admin.' . $ekey . '.reorder');

			// resource routes always last, to avoid conflicts
			Route::resource($ekey, $prfx . '\\' . $ecntr, ['as' => 'admin', 'parameters' => [$ekey => 'id']]);

			// check alias
			if (!empty($alias_routes) && array_key_exists($ekey, $alias_routes)) {

				foreach ($alias_routes[$ekey] as $alias) {

					$akey = $alias['aliaskey'];

					Route::get($akey . '/{id}/unlock', $prfx . '\\' . $ecntr . '@unlock')->name('admin.' . $akey . '.unlock');
					Route::post($akey . '/reorder', $prfx . '\\' . $ecntr . '@savereorder')->name('admin.' . $akey . '.savereorder');
					Route::post($akey . '/batch', $prfx . '\\' . $ecntr . '@batch')->name('admin.' . $akey . '.batch');
					Route::get($akey . '/reorder', $prfx . '\\' . $ecntr . '@reorder')->name('admin.' . $akey . '.reorder');
					Route::resource($akey, $prfx . '\\' . $ecntr, ['as' => 'admin', 'parameters' => [$akey => 'id']]);

				}

			}

		}

		// 404
		// Route::get('/{route}', 'Error\ErrorController@show')->name('admin.error.show.404');

	});

	// API Entity Routes
	Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

		Route::group(['prefix' => 'api', 'middleware' => 'auth:api'], function () {

			$entities = Entity::EntityGroupIs('entity')->get();
			foreach ($entities as $entity) {

				$apkey = $entity->entity_key;

				$controllerClass = 'Eve\\Http\\Controllers\\Front\\Api\\' . $entity->getEntityController();

				if (class_exists($controllerClass)) {
					Route::resource($apkey, 'Front\\Api\\' . $entity->getEntityController(), ['as' => 'api', 'parameters' => [$apkey => 'id']])->only(['index', 'show']);
				}

			}

		});

	});

	// FRONT Entity Routes

	if (config('lara.has_frontend')) {

		Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['web', 'httpcache', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'dateLocale']], function () {

			$entity_prefix = 'entity';
			$entity_tag_prefix = 'entitytag';

			$locale = LaravelLocalization::getCurrentLocale();

			// get home
			$rootMenuItem = Menuitem::langIs($locale)
				->menuSlugIs('main')
				->whereNull('parent_id')
				->with('entity')
				->first();

			if ($rootMenuItem) {

				/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (start) ~~~~~~~~~~~~ */
				$specialMiddleware = array();
				if ((isset($rootMenuItem->entity) && $rootMenuItem->entity->hasFrontAuth()) == 1 || $rootMenuItem->route_has_auth) {
					$specialMiddleware[] = 'auth';
				}
				if (config('app.env') == 'production' && config('httpcache.enabled')) {
					$specialMiddleware[] = 'ttl:' . config('lara.httpcache_ttl');
				}
				/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (end) ~~~~~~~~~~~~ */

				// Home
				Route::get('/', 'Front\Page\HomeController@show')->name('special.home.show')->middleware($specialMiddleware);

			}

			if (config('lara.dynamic_routes') == true) {

				/**
				 * Get all Pages from the MENU
				 * and create named routes for single page objects.
				 */
				$menuPages = Menuitem::langIs($locale)
					->typeIs('page')
					->with('entity')
					->with('entityview')
					->get();

				foreach ($menuPages as $menuPage) {
					if (!empty($menuPage->route)) {

						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (start) ~~~~~~~~~~~~ */
						$menuPageMiddleware = array();
						if ($menuPage->entity->hasFrontAuth() == 1 || $menuPage->route_has_auth) {
							$menuPageMiddleware[] = 'auth';
						}
						if (config('app.env') == 'production' && config('httpcache.enabled')) {
							$menuPageMiddleware[] = 'ttl:' . config('lara.httpcache_ttl');
						}
						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (end) ~~~~~~~~~~~~ */

						$Ctrlr = 'Front\Page\\' . $menuPage->entity->getEntityController();

						Route::get($menuPage->route, $Ctrlr . '@' . $menuPage->entityview->method)
							->name($menuPage->routename)->middleware($menuPageMiddleware);
					}
				}

				/**
				 * Get all entities from the MENU
				 * and create named routes for lists and single objects
				 */
				$menuItems = Menuitem::langIs($locale)
					->typeIs('entity')
					->with('entity')
					->with('entityview')
					->get();

				foreach ($menuItems as $menuItem) {

					// entities and forms only
					if (in_array($menuItem->entity->egroup->key, ['entity', 'form'])) {

						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (start) ~~~~~~~~~~~~ */
						$menuItemMiddleware = array();
						if ($menuItem->entity->hasFrontAuth() == 1 || $menuItem->route_has_auth) {
							$menuItemMiddleware[] = 'auth';
						}
						if (config('app.env') == 'production' && config('httpcache.enabled')) {
							$menuItemMiddleware[] = 'ttl:' . config('lara.httpcache_ttl');
						}
						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (end) ~~~~~~~~~~~~ */

						$Ctrlr = 'Front\\Entity\\' . $menuItem->entity->entity_controller;

						if ($menuItem->entity->objectrelations->has_tags == 1) {

							if(empty($menuItem->tag_id)) {

								// SEO Routes for tags
								Route::get($menuItem->route, $Ctrlr . '@' . $menuItem->entityview->method)
									->name($menuItem->routename)->middleware($menuItemMiddleware);

								// RSS Feed
								Route::get($menuItem->route . '/feed', $Ctrlr . '@feed')
									->name($entity_tag_prefix . '.' . $menuItem->entity->entity_key . '.feed')->middleware($menuItemMiddleware);
								Route::get($menuItem->route . '/feed/{type}', $Ctrlr . '@feed')
									->name($entity_tag_prefix . '.' . $menuItem->entity->entity_key . '.feed')->middleware($menuItemMiddleware);

								// add .html to object slug, so we can distinguish between an object slug and a (sub)cat slug.
								Route::get($menuItem->route . '/{slug}.html', $Ctrlr . '@show')
									->name($menuItem->routename . '.show')->middleware($menuItemMiddleware);

								$tags = Tag::entityIs($menuItem->entity->entity_key)->whereNotNull('route')->get();

								foreach ($tags as $tag) {

									$tagslug = str_replace('.', '/', $tag->route);

									Route::get($menuItem->route . '/' . $tagslug, $Ctrlr . '@' . $menuItem->entityview->method)
										->name($entity_tag_prefix . '.' . $menuItem->entity->entity_key . '.' . $tag->route . '.' . $menuItem->entityview->method)->middleware($menuItemMiddleware);

									// RSS Feed (filtered by tag)
									Route::get($menuItem->route . '/' . $tagslug . '/feed', $Ctrlr . '@feed')
										->name($entity_tag_prefix . '.' . $menuItem->entity->entity_key . '.' . $tag->route . '.feed')->middleware($menuItemMiddleware);
									Route::get($menuItem->route . '/' . $tagslug . '/feed/{type}', $Ctrlr . '@feed')
										->name($entity_tag_prefix . '.' . $menuItem->entity->entity_key . '.' . $tag->route . '.feed')->middleware($menuItemMiddleware);

									Route::get($menuItem->route . '/' . $tagslug . '/{slug}.html', $Ctrlr . '@show')
										->name($entity_tag_prefix . '.' . $menuItem->entity->entity_key . '.' . $tag->route . '.' . $menuItem->entityview->method . '.show')->middleware($menuItemMiddleware);

								}

							} else {

								// entity with a tag (no show method, no tags)
								Route::get($menuItem->route, $Ctrlr . '@' . $menuItem->entityview->method)
									->name($menuItem->routename)->middleware($menuItemMiddleware);

								// RSS Feed
								Route::get($menuItem->route . '/feed', $Ctrlr . '@feed')
									->name($entity_tag_prefix . '.' . $menuItem->entity->entity_key . '.feed')->middleware($menuItemMiddleware);
								Route::get($menuItem->route . '/feed/{type}', $Ctrlr . '@feed')
									->name($entity_tag_prefix . '.' . $menuItem->entity->entity_key . '.feed')->middleware($menuItemMiddleware);

							}

						} else {

							Route::get($menuItem->route, $Ctrlr . '@' . $menuItem->entityview->method)
								->name($menuItem->routename)->middleware($menuItemMiddleware);

							// RSS Feed
							Route::get($menuItem->route . '/feed', $Ctrlr . '@feed')
								->name($entity_prefix . '.' . $menuItem->entity->entity_key . '.feed')->middleware($menuItemMiddleware);
							Route::get($menuItem->route . '/feed/{type}', $Ctrlr . '@feed')
								->name($entity_prefix . '.' . $menuItem->entity->entity_key . '.feed')->middleware($menuItemMiddleware);

							Route::get($menuItem->route . '/{slug}', $Ctrlr . '@show')
								->name($menuItem->routename . '.show')->middleware($menuItemMiddleware);

						}
					}
				}

				/**
				 * Get all FORMS from the MENU
				 * and create named routes
				 */
				$menuForms = Menuitem::langIs($locale)
					->typeIs('form')
					->with('entity')
					->with('entityview')
					->get();

				foreach ($menuForms as $menuForm) {

					// exclude CUSTOM entities
					if ($menuForm->entity->egroup->key != 'entity') {

						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (start) ~~~~~~~~~~~~ */
						$menuFormMiddleware = array();
						if ($menuForm->entity->hasFrontAuth() == 1 || $menuForm->route_has_auth) {
							$menuFormMiddleware[] = 'auth';
						}
						if (config('app.env') == 'production' && config('lara.httpcache_on_forms')) {
							$menuFormMiddleware[] = 'ttl:' . config('lara.httpcache_ttl');
						}
						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (end) ~~~~~~~~~~~~ */

						$Ctrlr = 'Front\\Form\\' . $menuForm->entity->entity_controller;

						Route::get($menuForm->route, $Ctrlr . '@' . $menuForm->entityview->method)
							->name($menuForm->routename)->middleware($menuFormMiddleware);

						// create route for regular POST without AJAX
						Route::post($menuForm->route, $Ctrlr . '@process')
							->name('form.' . $menuForm->entity->entity_key . '.process')
							->middleware([ProtectAgainstSpam::class, 'throttle:10,86400']); // patch 6.2.23
					}

				}

				Route::group(['prefix' => 'ajax'], function () use ($menuForms) {

					foreach ($menuForms as $menuForm) {

						// exclude CUSTOM entities
						if ($menuForm->entity->egroup->key != 'entity') {

							$Ctrlr = 'Front\\Form\\' . $menuForm->entity->entity_controller;

							// Add AJAX route
							Route::get($menuForm->entity->entity_key, $Ctrlr . '@redirect')->name('ajax.' . $menuForm->entity->entity_key . '.redirect');
							Route::post($menuForm->entity->entity_key, $Ctrlr . '@process')
								->name('ajax.' . $menuForm->entity->entity_key . '.process')
								->middleware([ProtectAgainstSpam::class, 'throttle:10,86400']); // patch 6.2.23
						}

					}

				});

				/**
				 * Fixed Urls structure (fallback)
				 *
				 * Using a fixed prefix, we can reach all entities and entity objects
				 * without using the user-defined menu
				 */
				Route::group(['prefix' => 'content'], function () {

					// These prefixes are used for the route NAMES, and NOT the URI path
					$content_prefix = 'content';
					$content_tag_prefix = 'contenttag';

					// Page Routes

					$entities = Entity::entityGroupIs('page')->get();
					foreach ($entities as $entity) {

						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (start) ~~~~~~~~~~~~ */
						$entityMiddleware = array();
						if ($entity->hasFrontAuth() == 1) {
							$entityMiddleware[] = 'auth';
						}
						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (end) ~~~~~~~~~~~~ */

						$Ctrlr = 'Front\Page\\' . $entity->getEntityController();
						Route::get($entity->entity_key . '/{id}', $Ctrlr . '@show')
							->name($content_prefix . '.' . $entity->entity_key . '.show')->middleware($entityMiddleware);

					}

					// Entity Routes
					$entities = Entity::entityGroupIs('entity')->get();

					foreach ($entities as $entity) {

						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (start) ~~~~~~~~~~~~ */
						$entityMiddleware = array();
						if ($entity->hasFrontAuth() == 1) {
							$entityMiddleware[] = 'auth';
						}
						/* ~~~~~~~~~~~~ DYNAMIC ROUTE MIDDLEWARE (end) ~~~~~~~~~~~~ */

						$Ctrlr = 'Front\\Entity\\' . $entity->entity_controller;

						if ($entity->objectrelations->has_tags == 1) {

							Route::get($entity->entity_key, $Ctrlr . '@index')
								->name($content_tag_prefix . '.' . $entity->entity_key . '.index')->middleware($entityMiddleware);

							// add .html to slug, so we can distinguish between an object slug and a (sub)cat slug.
							Route::get($entity->entity_key . '/{id}.html', $Ctrlr . '@show')
								->name($content_tag_prefix . '.' . $entity->entity_key . '.index.show')->middleware($entityMiddleware);

							$tags = Tag::entityIs($entity->entity_key)->whereNotNull('route')->get();

							foreach ($tags as $tag) {

								$tagroutename = str_replace('/', '.', $tag->route);

								Route::get($entity->entity_key . '/' . $tag->route, $Ctrlr . '@index')
									->name($content_tag_prefix . '.' . $entity->entity_key . '.' . $tagroutename . '.index')->middleware($entityMiddleware);
								Route::get($entity->entity_key . '/' . $tag->route . '/{id}.html', $Ctrlr . '@show')
									->name($content_tag_prefix . '.' . $entity->entity_key . '.' . $tagroutename . '.index.show')->middleware($entityMiddleware);

							}

						} else {

							Route::get($entity->entity_key, $Ctrlr . '@index')
								->name($content_prefix . '.' . $entity->entity_key . '.index')->middleware($entityMiddleware);
							Route::get($entity->entity_key . '/{id}', $Ctrlr . '@show')
								->name($content_prefix . '.' . $entity->entity_key . '.index.show')->middleware($entityMiddleware);

						}

					}

				});

				// 404
				Route::get('/{any}', '\Eve\Http\Controllers\Front\Error\AppErrorController@show')->where('any', '.*')->name('error.show.404');

			}

		});

	}

}



