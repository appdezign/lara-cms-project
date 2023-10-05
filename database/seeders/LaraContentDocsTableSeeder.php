<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentDocsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_docs')->delete();
        
        \DB::table('lara_content_docs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Lorem ipsum dolor sit amet 1',
                'slug' => 'lorem-ipsum-dolor-sit-amet-1',
                'slug_lock' => 0,
                'lead' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tortor turpis. Phasellus id tempus sapien. Mauris egestas, magna id cursus mollis, felis sapien aliquet libero, eu accumsan velit nibh id urna. Phasellus sed fermentum mauris. Phasellus tristique libero vel augue condimentum tempus.',
                'created_at' => '2019-08-11 13:43:50',
                'updated_at' => '2023-03-17 15:17:03',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 1,
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
                'title' => 'Lorem ipsum dolor sit amet 2',
                'slug' => 'lorem-ipsum-dolor-sit-amet-2',
                'slug_lock' => 0,
                'lead' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tortor turpis. Phasellus id tempus sapien. Mauris egestas, magna id cursus mollis, felis sapien aliquet libero, eu accumsan velit nibh id urna. Phasellus sed fermentum mauris. Phasellus tristique libero vel augue condimentum tempus.',
                'created_at' => '2019-08-11 13:45:48',
                'updated_at' => '2023-09-20 11:18:44',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2019-08-11 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Lorem ipsum dolor sit amet 3',
                'slug' => 'lorem-ipsum-dolor-sit-amet-3',
                'slug_lock' => 0,
                'lead' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tortor turpis. Phasellus id tempus sapien. Mauris egestas, magna id cursus mollis, felis sapien aliquet libero, eu accumsan velit nibh id urna. Phasellus sed fermentum mauris. Phasellus tristique libero vel augue condimentum tempus.',
                'created_at' => '2021-03-30 16:26:49',
                'updated_at' => '2023-03-17 15:17:14',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-02-21 12:33:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Test for File Archive and Trash',
                'slug' => 'test-for-file-archive-and-trash',
                'slug_lock' => 0,
                'lead' => '',
                'created_at' => '2023-02-21 14:47:20',
                'updated_at' => '2023-02-21 14:48:16',
                'deleted_at' => '2023-02-21 14:48:16',
                'publish' => 0,
                'publish_hide' => 0,
                'publish_from' => '2023-02-21 14:47:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'test',
                'slug' => 'test',
                'slug_lock' => 0,
                'lead' => '',
                'created_at' => '2023-02-21 14:49:14',
                'updated_at' => '2023-03-17 14:34:26',
                'deleted_at' => '2023-03-17 14:34:26',
                'publish' => 0,
                'publish_hide' => 0,
                'publish_from' => '2023-02-21 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Lorem ipsum dolor sit amet 4',
                'slug' => 'lorem-ipsum-dolor-sit-amet-4',
                'slug_lock' => 0,
                'lead' => '',
                'created_at' => '2023-03-17 15:14:48',
                'updated_at' => '2023-03-17 15:17:27',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-17 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Lorem ipsum dolor sit amet 5',
                'slug' => 'lorem-ipsum-dolor-sit-amet-5',
                'slug_lock' => 0,
                'lead' => '',
                'created_at' => '2023-03-17 15:17:45',
                'updated_at' => '2023-03-17 15:18:28',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-17 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Lorem ipsum dolor sit amet 6',
                'slug' => 'lorem-ipsum-dolor-sit-amet-6',
                'slug_lock' => 0,
                'lead' => '',
                'created_at' => '2023-03-17 15:18:05',
                'updated_at' => '2023-03-17 15:18:40',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-17 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}