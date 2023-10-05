<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSysSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call(LaraSysDashboardTableSeeder::class);
		$this->call(LaraSysJobsTableSeeder::class);
		$this->call(LaraSysLanguagesTableSeeder::class);
		$this->call(LaraSysSettingsTableSeeder::class);
		$this->call(LaraSysTranslationsTableSeeder::class);
		$this->call(LaraSysUploadsTableSeeder::class);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
