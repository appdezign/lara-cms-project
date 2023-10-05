<?php

namespace Eve\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

use Lara\Admin\Http\Traits\LaraAdminHelpers;
use Lara\Admin\Http\Traits\LaraAnalytics;
use Lara\Admin\Http\Traits\LaraSync;


class ScheduleServiceProvider extends ServiceProvider
{

	use LaraAdminHelpers;
	use LaraAnalytics;
	use LaraSync;

	/**
	 * Bootstrap the module services.
	 *
	 * @return void
	 */
	public function boot()
	{

		$this->app->booted(function () {

			$schedule = $this->app->make(Schedule::class);

			$minutes = config('lara.scheduler_id');

			$schedule->call(function () {

				$this->refreshAnalytics();

			})->cron($minutes . ' */4 * * *'); // use ->everyMinute() for testing;

			$schedule->call(function () {

				$this->syncContentFromRemoteApi();

			})->hourlyAt($minutes);

			$schedule->call(function () {

				$this->checkForOrphans();

			})->dailyAt('01:'.$minutes);

		});

	}

	/**
	 * Register the module services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
