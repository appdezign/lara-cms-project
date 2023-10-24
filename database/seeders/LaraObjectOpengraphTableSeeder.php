<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraObjectOpengraphTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_object_opengraph')->delete();
        
        \DB::table('lara_object_opengraph')->insert(array (
            0 => 
            array (
                'id' => 1,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 261,
                'og_title' => 'Five Effective Landing Page Examples',
                'og_description' => 'Tellus sagittis dolor pellentesque vel porttitor magna aliquet arcu. Interdum risus mauris pulvinar et vel. Morbi tellus, scelerisque vel metus. Scelerisque arcu egestas ac commodo, ac nibh. Pretium ac elit sed nulla nec.',
                'og_image' => '20230313115647-01.jpg',
                'created_at' => '2023-04-08 12:57:17',
                'updated_at' => '2023-05-11 17:09:28',
            ),
            1 => 
            array (
                'id' => 3,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230310181133-istock-519363909.jpg',
                'created_at' => '2023-04-19 11:01:52',
                'updated_at' => '2023-04-19 11:01:52',
            ),
            2 => 
            array (
                'id' => 4,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 264,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230313134719-06.jpg',
                'created_at' => '2023-04-25 15:39:50',
                'updated_at' => '2023-04-25 15:39:50',
            ),
            3 => 
            array (
                'id' => 5,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 16,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '',
                'created_at' => '2023-04-26 17:25:44',
                'updated_at' => '2023-04-26 17:25:54',
            ),
            4 => 
            array (
                'id' => 6,
                'entity_type' => 'Eve\\Models\\City',
                'entity_id' => 1,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '',
                'created_at' => '2023-05-11 20:30:56',
                'updated_at' => '2023-05-11 20:30:56',
            ),
            5 => 
            array (
                'id' => 7,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 19,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '',
                'created_at' => '2023-08-21 18:27:31',
                'updated_at' => '2023-08-21 18:27:31',
            ),
            6 => 
            array (
                'id' => 8,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 38,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '',
                'created_at' => '2023-08-22 09:36:20',
                'updated_at' => '2023-08-22 09:36:20',
            ),
            7 => 
            array (
                'id' => 9,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1061,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '',
                'created_at' => '2023-09-20 10:30:38',
                'updated_at' => '2023-09-20 10:30:38',
            ),
            8 => 
            array (
                'id' => 10,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 446,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230312173930-01.jpg',
                'created_at' => '2023-09-22 11:04:44',
                'updated_at' => '2023-09-22 11:04:44',
            ),
            9 => 
            array (
                'id' => 11,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 447,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230312174043-02.jpg',
                'created_at' => '2023-09-22 11:10:34',
                'updated_at' => '2023-09-22 11:10:34',
            ),
            10 => 
            array (
                'id' => 12,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 448,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230312174129-03.jpg',
                'created_at' => '2023-09-22 11:11:18',
                'updated_at' => '2023-09-22 11:11:18',
            ),
            11 => 
            array (
                'id' => 13,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 449,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230312174212-04.jpg',
                'created_at' => '2023-09-22 11:11:29',
                'updated_at' => '2023-09-22 11:11:29',
            ),
            12 => 
            array (
                'id' => 14,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 450,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230312174320-05.jpg',
                'created_at' => '2023-09-22 11:11:40',
                'updated_at' => '2023-09-22 11:11:40',
            ),
            13 => 
            array (
                'id' => 15,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 451,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230312174406-06.jpg',
                'created_at' => '2023-09-22 11:12:02',
                'updated_at' => '2023-09-22 11:12:02',
            ),
            14 => 
            array (
                'id' => 16,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 452,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230312174451-07.jpg',
                'created_at' => '2023-09-22 11:12:12',
                'updated_at' => '2023-09-22 11:12:12',
            ),
            15 => 
            array (
                'id' => 17,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 453,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '20230312174642-08.jpg',
                'created_at' => '2023-09-22 11:13:17',
                'updated_at' => '2023-09-22 11:13:17',
            ),
            16 => 
            array (
                'id' => 18,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1094,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '',
                'created_at' => '2023-09-27 15:14:42',
                'updated_at' => '2023-09-27 15:14:42',
            ),
            17 => 
            array (
                'id' => 19,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1072,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '',
                'created_at' => '2023-09-27 16:03:47',
                'updated_at' => '2023-09-27 16:03:47',
            ),
            18 => 
            array (
                'id' => 20,
                'entity_type' => 'Eve\\Models\\Tezt',
                'entity_id' => 1,
                'og_title' => '',
                'og_description' => '',
                'og_image' => '',
                'created_at' => '2023-09-27 16:14:03',
                'updated_at' => '2023-09-27 16:14:03',
            ),
        ));
        
        
    }
}