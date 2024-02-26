<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_videos')->delete();
        
        \DB::table('lara_content_videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'New York City #1',
                'slug' => 'new-york-city-1',
                'slug_lock' => 0,
                'created_at' => '2019-08-11 20:32:49',
                'updated_at' => '2024-01-18 14:20:01',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2019-08-11 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'New York City #2',
                'slug' => 'new-york-city-2',
                'slug_lock' => 0,
                'created_at' => '2023-09-18 11:46:21',
                'updated_at' => '2023-10-11 11:08:03',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-09-18 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'New York City #3',
                'slug' => 'new-york-city-3',
                'slug_lock' => 0,
                'created_at' => '2023-09-18 11:46:48',
                'updated_at' => '2023-10-11 11:08:23',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-09-18 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}