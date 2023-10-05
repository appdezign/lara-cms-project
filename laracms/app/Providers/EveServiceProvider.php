<?php

namespace Eve\Providers;

use Illuminate\Support\ServiceProvider;

class EveServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the module services.
	 *
	 * @return void
	 */
	public function boot()
	{

		// Publish Translations
		$this->publishes([
			__DIR__ . '/../Resources/Lang' => resource_path('lang/vendor/lara-eve'),
		], 'lara');
		$this->loadTranslationsFrom(__DIR__ . '/../Resources/Lang', 'lara-eve');

		// Views
		$this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'lara-eve');
	}

	/**
	 * Register the module services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->register(RouteServiceProvider::class);
	}
}
