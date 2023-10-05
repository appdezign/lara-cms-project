<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentPortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_portfolios')->delete();
        
        \DB::table('lara_content_portfolios')->insert(array (
            0 => 
            array (
                'id' => 393,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Brand 1',
                'url' => '#',
                'slug' => 'brand-1',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2023-03-10 18:37:14',
                'updated_at' => '2023-05-11 15:58:57',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-10 18:37:09',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 1,
            ),
            1 => 
            array (
                'id' => 394,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Brand 2',
                'url' => '#',
                'slug' => 'brand-2',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2023-03-10 18:38:21',
                'updated_at' => '2023-05-11 15:59:07',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-10 18:38:17',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 2,
            ),
            2 => 
            array (
                'id' => 395,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Brand 3',
                'url' => '#',
                'slug' => 'brand-3',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2023-03-10 18:46:39',
                'updated_at' => '2023-05-11 15:59:16',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-10 18:46:33',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 3,
            ),
            3 => 
            array (
                'id' => 396,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Brand 4',
                'url' => '#',
                'slug' => 'brand-4',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2023-03-11 12:08:36',
                'updated_at' => '2023-05-11 15:59:25',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-11 12:08:31',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 4,
            ),
            4 => 
            array (
                'id' => 397,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Brand 5',
                'url' => '#',
                'slug' => 'brand-5',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2023-03-11 12:10:17',
                'updated_at' => '2023-05-11 15:59:33',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-11 12:10:08',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 5,
            ),
            5 => 
            array (
                'id' => 398,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Brand 6',
                'url' => '#',
                'slug' => 'brand-6',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2023-03-11 12:12:14',
                'updated_at' => '2023-05-11 15:59:46',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-11 12:12:05',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 6,
            ),
            6 => 
            array (
                'id' => 399,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Brand 7',
                'url' => '#',
                'slug' => 'brand-7',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2023-03-11 13:54:47',
                'updated_at' => '2023-05-11 15:59:57',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-11 13:54:38',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 7,
            ),
        ));
        
        
    }
}