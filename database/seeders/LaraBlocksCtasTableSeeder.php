<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraBlocksCtasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_blocks_ctas')->delete();
        
        \DB::table('lara_blocks_ctas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Are you ready to enjoy?',
                'overlaytransp' => '40',
                'overlaycolor' => 'black',
                'type' => 'parallax',
                'hook' => 'homeparallax1',
                'linkurl' => '#',
                'linktext' => 'view portfolio',
                'slug' => 'are-you-ready-to-enjoy',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2017-12-18 14:47:36',
                'updated_at' => '2023-03-13 11:34:30',
                'deleted_at' => '2023-03-13 11:34:30',
                'publish' => 0,
                'publish_from' => '2019-07-02 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Be Creative With Lara5',
                'overlaytransp' => '60',
                'overlaycolor' => 'brand',
                'type' => 'parallax',
                'hook' => 'homeparallax2',
                'linkurl' => '#',
                'linktext' => 'Get Lara5',
                'slug' => 'be-creative-with-lara5',
                'slug_lock' => 0,
                'body' => '',
                'created_at' => '2017-12-18 14:56:07',
                'updated_at' => '2023-03-13 11:34:33',
                'deleted_at' => '2023-03-13 11:34:33',
                'publish' => 0,
                'publish_from' => '2019-08-12 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 97,
                'user_id' => 2,
                'language_parent' => 1,
                'language' => 'en',
                'title' => '[EN] Are you ready to enjoy?',
                'overlaytransp' => '40',
                'overlaycolor' => 'black',
                'type' => 'parallax',
                'hook' => 'homeparalax1',
                'linkurl' => '#',
                'linktext' => 'view portfolio',
                'slug' => 'en-are-you-ready-to-enjoy',
                'slug_lock' => 0,
                'body' => '[EN] ',
                'created_at' => '2019-07-21 14:30:12',
                'updated_at' => '2019-07-21 14:30:12',
                'deleted_at' => NULL,
                'publish' => 0,
                'publish_from' => '2019-07-02 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            3 => 
            array (
                'id' => 98,
                'user_id' => 2,
                'language_parent' => 2,
                'language' => 'en',
                'title' => '[EN] Be Creative With Lara5',
                'overlaytransp' => '60',
                'overlaycolor' => 'brand',
                'type' => 'parallax',
                'hook' => 'homeparalax2',
                'linkurl' => '#',
                'linktext' => 'Get Lara5',
                'slug' => 'en-be-creative-with-lara5',
                'slug_lock' => 0,
                'body' => '[EN] ',
                'created_at' => '2019-07-21 14:30:12',
                'updated_at' => '2019-07-21 14:30:12',
                'deleted_at' => NULL,
                'publish' => 0,
                'publish_from' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            4 => 
            array (
                'id' => 99,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Get in Touch',
                'overlaytransp' => '',
                'overlaycolor' => 'black',
                'type' => 'solid',
                'hook' => 'contact',
                'linkurl' => '',
                'linktext' => '',
                'slug' => 'get-in-touch',
                'slug_lock' => 0,
                'body' => 'Have a project in mind? To request a quote contact us directly or fill out the form and let us know how we can help.',
                'created_at' => '2023-03-13 11:35:49',
                'updated_at' => '2023-09-20 13:26:36',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-13 11:34:48',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            5 => 
            array (
                'id' => 100,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Don\'t Want to Miss Anything?',
                'overlaytransp' => '',
                'overlaycolor' => 'black',
                'type' => 'solid',
                'hook' => 'newsletter',
                'linkurl' => '',
                'linktext' => '',
                'slug' => 'don-t-want-to-miss-anything',
                'slug_lock' => 0,
                'body' => 'Sign up for Newsletters',
                'created_at' => '2023-03-13 12:24:27',
                'updated_at' => '2023-09-20 13:26:38',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-13 12:24:14',
                'locked_at' => '2023-09-20 13:26:38',
                'locked_by' => 2,
            ),
        ));
        
        
    }
}