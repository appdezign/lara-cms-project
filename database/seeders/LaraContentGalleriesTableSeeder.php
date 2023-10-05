<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentGalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_galleries')->delete();
        
        \DB::table('lara_content_galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Team at work',
                'slug' => 'team-at-work',
                'slug_lock' => 0,
                'created_at' => '2019-08-11 18:40:28',
                'updated_at' => '2023-08-24 14:58:02',
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
                'title' => 'New tech',
                'slug' => 'new-tech',
                'slug_lock' => 0,
                'created_at' => '2023-08-24 14:49:33',
                'updated_at' => '2023-08-24 14:58:30',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-08-24 14:49:11',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}