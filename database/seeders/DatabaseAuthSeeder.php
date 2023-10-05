<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseAuthSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call(LaraAuthUsersTableSeeder::class);

		$this->call(LaraAuthAbilitiesTableSeeder::class);
		$this->call(LaraAuthHasAbilitiesTableSeeder::class);
		$this->call(LaraAuthHasRolesTableSeeder::class);
		$this->call(LaraAuthPasswordResetsTableSeeder::class);
		$this->call(LaraAuthRolesTableSeeder::class);


		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
