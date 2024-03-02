<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraSysHeadertagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_sys_headertags')->delete();
        
        \DB::table('lara_sys_headertags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Page Show',
                'cgroup' => 'module',
                'templatefile_id' => 1,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-02-29 19:20:07',
                'updated_at' => '2024-03-01 11:26:37',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
            'title' => 'Text Swiperslide (Text widget)',
                'cgroup' => 'textwidget',
                'templatefile_id' => 2,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:07',
                'updated_at' => '2024-02-29 19:20:07',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
            'title' => 'Cases (Slider widget)',
                'cgroup' => 'sliderwidget',
                'templatefile_id' => 3,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:07',
                'updated_at' => '2024-02-29 19:20:07',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
            'title' => 'Home Service (Entity widget)',
                'cgroup' => 'entitywidget',
                'templatefile_id' => 4,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:07',
                'updated_at' => '2024-02-29 19:20:07',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
            'title' => 'Home Testimonial (Entity widget)',
                'cgroup' => 'entitywidget',
                'templatefile_id' => 5,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
            'title' => 'Home Portfolio (Entity widget)',
                'cgroup' => 'entitywidget',
                'templatefile_id' => 6,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
            'title' => 'Home Blog (Entity widget)',
                'cgroup' => 'entitywidget',
                'templatefile_id' => 7,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
            'title' => 'Home (Slider widget)',
                'cgroup' => 'sliderwidget',
                'templatefile_id' => 8,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
            'title' => 'Text Footer (Text widget)',
                'cgroup' => 'textwidget',
                'templatefile_id' => 9,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
            'title' => 'Text Footerlinks (Text widget)',
                'cgroup' => 'textwidget',
                'templatefile_id' => 10,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:08',
                'updated_at' => '2024-02-29 19:20:08',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
            'title' => 'About Testimonial (Lara widget)',
                'cgroup' => 'larawidget',
                'templatefile_id' => 11,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:17',
                'updated_at' => '2024-02-29 19:20:17',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
            'title' => 'Default Team (Lara widget)',
                'cgroup' => 'larawidget',
                'templatefile_id' => 12,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:17',
                'updated_at' => '2024-02-29 19:20:17',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
            'title' => 'Text About Social (Text widget)',
                'cgroup' => 'textwidget',
                'templatefile_id' => 13,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:17',
                'updated_at' => '2024-02-29 19:20:17',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
            'title' => 'Contact (Cta widget)',
                'cgroup' => 'ctawidget',
                'templatefile_id' => 14,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:18',
                'updated_at' => '2024-02-29 19:20:18',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Team Index',
                'cgroup' => 'module',
                'templatefile_id' => 15,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-02-29 19:20:19',
                'updated_at' => '2024-02-29 19:20:19',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
            'title' => 'Team Blog (Lara widget)',
                'cgroup' => 'larawidget',
                'templatefile_id' => 16,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:19',
                'updated_at' => '2024-02-29 19:20:19',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
            'title' => 'Newsletter (Cta widget)',
                'cgroup' => 'ctawidget',
                'templatefile_id' => 17,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-02-29 19:20:19',
                'updated_at' => '2024-02-29 19:20:19',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Service Index',
                'cgroup' => 'module',
                'templatefile_id' => 18,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-02-29 19:20:21',
                'updated_at' => '2024-02-29 19:20:21',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Blog Index',
                'cgroup' => 'module',
                'templatefile_id' => 19,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-02-29 19:20:26',
                'updated_at' => '2024-02-29 19:20:26',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Event Index',
                'cgroup' => 'module',
                'templatefile_id' => 20,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-02-29 19:20:31',
                'updated_at' => '2024-02-29 19:20:31',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Contactform Form',
                'cgroup' => 'module',
                'templatefile_id' => 21,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-02-29 19:20:33',
                'updated_at' => '2024-02-29 19:20:33',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Service Show',
                'cgroup' => 'module',
                'templatefile_id' => 22,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-02-29 19:20:40',
                'updated_at' => '2024-02-29 19:20:40',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Blog Show',
                'cgroup' => 'module',
                'templatefile_id' => 23,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-02-29 19:20:44',
                'updated_at' => '2024-02-29 19:20:44',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Search Form',
                'cgroup' => 'module',
                'templatefile_id' => 24,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-03-02 16:29:53',
                'updated_at' => '2024-03-02 16:29:53',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Search Result',
                'cgroup' => 'module',
                'templatefile_id' => 25,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-03-02 16:31:09',
                'updated_at' => '2024-03-02 16:31:09',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Page ',
                'cgroup' => 'module',
                'templatefile_id' => 26,
                'title_tag' => 'h1',
                'subtitle_tag' => 'h2',
                'list_tag' => 'h3',
                'created_at' => '2024-03-02 17:07:35',
                'updated_at' => '2024-03-02 17:07:35',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
            'title' => 'Text Footer Socials (Text widget)',
                'cgroup' => 'textwidget',
                'templatefile_id' => 27,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-03-02 17:19:53',
                'updated_at' => '2024-03-02 17:19:53',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
            'title' => 'Text Footer Contact (Text widget)',
                'cgroup' => 'textwidget',
                'templatefile_id' => 28,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-03-02 17:24:10',
                'updated_at' => '2024-03-02 17:24:10',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
            'title' => 'Text Footer Links (Text widget)',
                'cgroup' => 'textwidget',
                'templatefile_id' => 29,
                'title_tag' => 'h2',
                'subtitle_tag' => 'h3',
                'list_tag' => 'h4',
                'created_at' => '2024-03-02 17:35:14',
                'updated_at' => '2024-03-02 17:35:14',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}