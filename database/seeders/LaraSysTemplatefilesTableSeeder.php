<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraSysTemplatefilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_sys_templatefiles')->delete();
        
        \DB::table('lara_sys_templatefiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'template_file' => 'page_show',
                'type' => 'module',
                'created_at' => '2024-02-29 19:20:07',
                'updated_at' => '2024-02-29 19:20:07',
            ),
            1 => 
            array (
                'id' => 2,
                'template_file' => 'text_swiperslide',
                'type' => 'textwidget',
                'created_at' => '2024-02-29 19:20:07',
                'updated_at' => '2024-02-29 19:20:07',
            ),
            2 => 
            array (
                'id' => 3,
                'template_file' => 'cases',
                'type' => 'sliderwidget',
                'created_at' => '2024-02-29 19:20:07',
                'updated_at' => '2024-02-29 19:20:07',
            ),
            3 => 
            array (
                'id' => 4,
                'template_file' => 'home_service',
                'type' => 'entitywidget',
                'created_at' => '2024-02-29 19:20:07',
                'updated_at' => '2024-02-29 19:20:07',
            ),
            4 => 
            array (
                'id' => 5,
                'template_file' => 'home_testimonial',
                'type' => 'entitywidget',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
            ),
            5 => 
            array (
                'id' => 6,
                'template_file' => 'home_portfolio',
                'type' => 'entitywidget',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
            ),
            6 => 
            array (
                'id' => 7,
                'template_file' => 'home_blog',
                'type' => 'entitywidget',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
            ),
            7 => 
            array (
                'id' => 8,
                'template_file' => 'home',
                'type' => 'sliderwidget',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
            ),
            8 => 
            array (
                'id' => 9,
                'template_file' => 'text_footer',
                'type' => 'textwidget',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
            ),
            9 => 
            array (
                'id' => 10,
                'template_file' => 'text_footerlinks',
                'type' => 'textwidget',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
            ),
            10 => 
            array (
                'id' => 11,
                'template_file' => 'about_testimonial',
                'type' => 'larawidget',
                'created_at' => '2024-02-29 19:20:17',
                'updated_at' => '2024-02-29 19:20:17',
            ),
            11 => 
            array (
                'id' => 12,
                'template_file' => 'default_team',
                'type' => 'larawidget',
                'created_at' => '2024-02-29 19:20:17',
                'updated_at' => '2024-02-29 19:20:17',
            ),
            12 => 
            array (
                'id' => 13,
                'template_file' => 'text_about_social',
                'type' => 'textwidget',
                'created_at' => '2024-02-29 19:20:17',
                'updated_at' => '2024-02-29 19:20:17',
            ),
            13 => 
            array (
                'id' => 14,
                'template_file' => 'contact',
                'type' => 'ctawidget',
                'created_at' => '2024-02-29 19:20:18',
                'updated_at' => '2024-02-29 19:20:18',
            ),
            14 => 
            array (
                'id' => 15,
                'template_file' => 'team_index',
                'type' => 'module',
                'created_at' => '2024-02-29 19:20:19',
                'updated_at' => '2024-02-29 19:20:19',
            ),
            15 => 
            array (
                'id' => 16,
                'template_file' => 'team_blog',
                'type' => 'larawidget',
                'created_at' => '2024-02-29 19:20:19',
                'updated_at' => '2024-02-29 19:20:19',
            ),
            16 => 
            array (
                'id' => 17,
                'template_file' => 'newsletter',
                'type' => 'ctawidget',
                'created_at' => '2024-02-29 19:20:19',
                'updated_at' => '2024-02-29 19:20:19',
            ),
            17 => 
            array (
                'id' => 18,
                'template_file' => 'service_index',
                'type' => 'module',
                'created_at' => '2024-02-29 19:20:21',
                'updated_at' => '2024-02-29 19:20:21',
            ),
            18 => 
            array (
                'id' => 19,
                'template_file' => 'blog_index',
                'type' => 'module',
                'created_at' => '2024-02-29 19:20:26',
                'updated_at' => '2024-02-29 19:20:26',
            ),
            19 => 
            array (
                'id' => 20,
                'template_file' => 'event_index',
                'type' => 'module',
                'created_at' => '2024-02-29 19:20:31',
                'updated_at' => '2024-02-29 19:20:31',
            ),
            20 => 
            array (
                'id' => 21,
                'template_file' => 'contactform_form',
                'type' => 'module',
                'created_at' => '2024-02-29 19:20:33',
                'updated_at' => '2024-02-29 19:20:33',
            ),
            21 => 
            array (
                'id' => 22,
                'template_file' => 'service_show',
                'type' => 'module',
                'created_at' => '2024-02-29 19:20:40',
                'updated_at' => '2024-02-29 19:20:40',
            ),
            22 => 
            array (
                'id' => 23,
                'template_file' => 'blog_show',
                'type' => 'module',
                'created_at' => '2024-02-29 19:20:44',
                'updated_at' => '2024-02-29 19:20:44',
            ),
            23 => 
            array (
                'id' => 24,
                'template_file' => 'search_form',
                'type' => 'module',
                'created_at' => '2024-03-02 16:29:53',
                'updated_at' => '2024-03-02 16:29:53',
            ),
            24 => 
            array (
                'id' => 25,
                'template_file' => 'search_result',
                'type' => 'module',
                'created_at' => '2024-03-02 16:31:09',
                'updated_at' => '2024-03-02 16:31:09',
            ),
            25 => 
            array (
                'id' => 26,
                'template_file' => 'page_',
                'type' => 'module',
                'created_at' => '2024-03-02 17:07:35',
                'updated_at' => '2024-03-02 17:07:35',
            ),
            26 => 
            array (
                'id' => 27,
                'template_file' => 'text_footer_socials',
                'type' => 'textwidget',
                'created_at' => '2024-03-02 17:19:53',
                'updated_at' => '2024-03-02 17:19:53',
            ),
            27 => 
            array (
                'id' => 28,
                'template_file' => 'text_footer_contact',
                'type' => 'textwidget',
                'created_at' => '2024-03-02 17:24:10',
                'updated_at' => '2024-03-02 17:24:10',
            ),
            28 => 
            array (
                'id' => 29,
                'template_file' => 'text_footer_links',
                'type' => 'textwidget',
                'created_at' => '2024-03-02 17:35:14',
                'updated_at' => '2024-03-02 17:35:14',
            ),
            29 => 
            array (
                'id' => 31,
                'template_file' => 'user_loginform',
                'type' => 'module',
                'created_at' => '2024-03-03 14:17:07',
                'updated_at' => '2024-03-03 14:17:07',
            ),
            30 => 
            array (
                'id' => 32,
                'template_file' => 'user_profile',
                'type' => 'module',
                'created_at' => '2024-03-03 14:25:21',
                'updated_at' => '2024-03-03 14:25:21',
            ),
            31 => 
            array (
                'id' => 33,
                'template_file' => 'doc_index',
                'type' => 'module',
                'created_at' => '2024-03-06 15:41:29',
                'updated_at' => '2024-03-06 15:41:29',
            ),
            32 => 
            array (
                'id' => 34,
                'template_file' => 'doc_show',
                'type' => 'module',
                'created_at' => '2024-03-06 15:41:32',
                'updated_at' => '2024-03-06 15:41:32',
            ),
            33 => 
            array (
                'id' => 35,
                'template_file' => 'event_show',
                'type' => 'module',
                'created_at' => '2024-03-06 15:42:04',
                'updated_at' => '2024-03-06 15:42:04',
            ),
            34 => 
            array (
                'id' => 36,
                'template_file' => 'gallery_index',
                'type' => 'module',
                'created_at' => '2024-03-06 15:42:34',
                'updated_at' => '2024-03-06 15:42:34',
            ),
            35 => 
            array (
                'id' => 37,
                'template_file' => 'gallery_show',
                'type' => 'module',
                'created_at' => '2024-03-06 15:42:37',
                'updated_at' => '2024-03-06 15:42:37',
            ),
            36 => 
            array (
                'id' => 38,
                'template_file' => 'team_show',
                'type' => 'module',
                'created_at' => '2024-03-06 15:43:33',
                'updated_at' => '2024-03-06 15:43:33',
            ),
        ));
        
        
    }
}