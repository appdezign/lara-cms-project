<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseEntitySeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call(LaraEntEntityGroupsTableSeeder::class);

		$this->call(LaraEntEntitiesTableSeeder::class);

		$this->call(LaraEntEntityObjectRelationsTableSeeder::class);
		$this->call(LaraEntEntityColumnsTableSeeder::class);
		$this->call(LaraEntEntityPanelsTableSeeder::class);

		$this->call(LaraEntEntityCustomColumnsTableSeeder::class);
		$this->call(LaraEntEntityRelationsTableSeeder::class);
		$this->call(LaraEntEntityViewsTableSeeder::class);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
