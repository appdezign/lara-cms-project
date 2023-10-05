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
                'youtubecode' => 'hEO09YiGF6k',
                'slug' => 'new-york-city-1',
                'slug_lock' => 0,
                'created_at' => '2019-08-11 20:32:49',
                'updated_at' => '2023-09-18 11:56:25',
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
                'youtubecode' => 'GVKmDg-XLJs',
                'slug' => 'new-york-city-2',
                'slug_lock' => 0,
                'created_at' => '2023-09-18 11:46:21',
                'updated_at' => '2023-09-18 12:07:50',
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
                'youtubecode' => '3RFYO9ECWQM',
                'slug' => 'new-york-city-3',
                'slug_lock' => 0,
                'created_at' => '2023-09-18 11:46:48',
                'updated_at' => '2023-09-18 11:46:49',
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