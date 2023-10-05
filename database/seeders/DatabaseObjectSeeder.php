<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseObjectSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call(LaraObjectImagesTableSeeder::class);
		$this->call(LaraObjectFilesTableSeeder::class);
		$this->call(LaraObjectVideosTableSeeder::class);

		$this->call(LaraObjectLayoutTableSeeder::class);

		$this->call(LaraObjectSeoTableSeeder::class);
		$this->call(LaraObjectSyncTableSeeder::class);

		$this->call(LaraMenuMenuItemsTableSeeder::class);
		$this->call(LaraMenuMenusTableSeeder::class);

		$this->call(LaraObjectRelatedTableSeeder::class);
		$this->call(LaraObjectTaggablesTableSeeder::class);
		$this->call(LaraObjectTagsTableSeeder::class);
		$this->call(LaraObjectTaxonomiesTableSeeder::class);
		$this->call(LaraObjectPageablesTableSeeder::class);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
