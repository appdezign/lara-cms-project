<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use Lara\Admin\Http\Traits\LaraAdminHelpers;
use Lara\Admin\Http\Traits\LaraAnalytics;
use Lara\Admin\Http\Traits\LaraSync;
use Lara\Admin\Http\Traits\Cfs;

use Eve\Http\Traits\GoogleSitemap;

class Kernel extends ConsoleKernel
{

	use LaraAdminHelpers;
	use LaraAnalytics;
	use LaraSync;
	use Cfs;
	use GoogleSitemap;


	/**
	 * Define the application's command schedule.
	 */
	protected function schedule(Schedule $schedule): void
	{

		$minutes = config('lara.scheduler_id');

		$schedule->call(function () {
			$this->syncCloudFlareStream();
		})->everyFiveMinutes();

		$schedule->call(function () {
			// $this->purgeCloudFlareStream(true);
			$this->purgeCloudFlareStream(false);
		})->dailyAt('01:00');

		$schedule->call(function () {
			$this->refreshAnalytics();
		})->cron($minutes . ' */4 * * *'); // use ->everyMinute() for testing;

		$schedule->call(function () {
			$this->syncContentFromRemoteApi();
		})->hourlyAt($minutes);

		$schedule->call(function () {
			$this->checkForOrphans();
		})->dailyAt('01:' . $minutes);

		$schedule->call(function () {
			$this->checkAllImagePositions();
		})->dailyAt('02:' . $minutes);

		$schedule->call(function () {
			$this->purgeSpam();
		})->dailyAt('03:' . $minutes);

		$schedule->call(function () {
			$this->generateGoogleSitemap();
		})->dailyAt('04:' . $minutes);

	}

	/**
	 * Register the commands for the application.
	 */
    protected function commands(): void
	{
		$this->load(__DIR__ . '/Commands');

		require base_path('routes/console.php');
	}
}
