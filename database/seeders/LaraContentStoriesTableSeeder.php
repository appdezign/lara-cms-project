<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentStoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_stories')->delete();
        
        \DB::table('lara_content_stories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Lorem ipsum',
                'youtubecode' => '',
                'role' => '',
                'slug' => 'lorem-ipsum',
                'slug_lock' => 0,
                'lead' => '',
                'body' => '',
                'created_at' => '2020-06-17 16:36:57',
                'updated_at' => '2020-06-17 16:37:45',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2020-06-17 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 1,
            ),
        ));
        
        
    }
}