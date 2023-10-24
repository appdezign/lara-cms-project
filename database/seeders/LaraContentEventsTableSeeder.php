<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_events')->delete();
        
        \DB::table('lara_content_events')->insert(array (
            0 => 
            array (
                'id' => 2,
                'location_id' => 3,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Laracon US',
                'endtime' => '23:00:00',
                'enddate' => '2024-05-01',
                'starttime' => '11:00:00',
                'startdate' => '2024-05-01',
                'slug' => 'laracon-us',
                'slug_lock' => 0,
                'lead' => '<p>Duis mollis, enim a malesuada rhoncus, lorem est volutpat magna, quis venenatis nunc nunc eu lectus. Vestibulum quis condimentum risus. Phasellus eget venenatis risus, non condimentum ex.</p>',
                'body' => '<p>Duis mollis, enim a malesuada rhoncus, lorem est volutpat magna, quis venenatis nunc nunc eu lectus. Vestibulum quis condimentum risus. Nunc et enim ac nunc posuere porttitor. Phasellus eget venenatis risus, non condimentum ex. Integer non lorem sit amet enim commodo eleifend vitae ut purus. Mauris sapien mauris, mattis quis fringilla vel, pharetra et est. Mauris et accumsan quam.</p>
<p>Nunc congue volutpat dui et mattis. Sed porta leo nunc. Donec posuere accumsan ipsum, et suscipit dui elementum eu. Donec auctor, sapien vitae sodales pharetra, elit enim efficitur arcu, quis cursus mauris lacus non augue. Maecenas iaculis mi id aliquam tristique. Mauris quis rutrum justo. Phasellus mattis tortor nunc, ac rutrum massa efficitur sit amet. Nulla iaculis nunc posuere, eleifend erat rutrum, pharetra magna. Sed pharetra nunc velit, at consequat erat consectetur eget. Aenean molestie pellentesque ultricies. Praesent erat ante, finibus et iaculis eget, imperdiet quis enim. Duis ultrices sapien ac nunc molestie ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'created_at' => '2018-03-23 14:20:08',
                'updated_at' => '2023-10-14 17:15:35',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2018-03-23 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'location_id' => 3,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Laracon EU',
                'endtime' => '23:00:00',
                'enddate' => '2024-08-01',
                'starttime' => '11:00:00',
                'startdate' => '2024-08-01',
                'slug' => 'laracon-eu',
                'slug_lock' => 0,
                'lead' => '<p>Maecenas ut hendrerit mauris. Suspendisse vehicula turpis eget eleifend varius. Donec scelerisque ex ligula, iaculis elementum dolor convallis a. Nam volutpat euismod varius.&nbsp;</p>',
                'body' => '<p>Maecenas ut hendrerit mauris. Suspendisse vehicula turpis eget eleifend varius. Donec scelerisque ex ligula, iaculis elementum dolor convallis a. Nam volutpat euismod varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus ligula sem, interdum rhoncus urna in, finibus sodales lorem. Maecenas sit amet metus lacus. Fusce semper nec eros vitae efficitur.</p>
<p>Nunc congue volutpat dui et mattis. Sed porta leo nunc. Donec posuere accumsan ipsum, et suscipit dui elementum eu. Donec auctor, sapien vitae sodales pharetra, elit enim efficitur arcu, quis cursus mauris lacus non augue. Maecenas iaculis mi id aliquam tristique. Mauris quis rutrum justo. Phasellus mattis tortor nunc, ac rutrum massa efficitur sit amet. Nulla iaculis nunc posuere, eleifend erat rutrum, pharetra magna. Sed pharetra nunc velit, at consequat erat consectetur eget. Aenean molestie pellentesque ultricies. Praesent erat ante, finibus et iaculis eget, imperdiet quis enim. Duis ultrices sapien ac nunc molestie ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'created_at' => '2018-03-23 14:43:00',
                'updated_at' => '2023-04-25 15:24:37',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2017-08-01 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 98,
                'location_id' => 3,
                'user_id' => 2,
                'language_parent' => 2,
                'language' => 'en',
                'title' => '[EN] Sneekweek 2020',
                'endtime' => '18:00:00',
                'enddate' => '2020-08-13',
                'starttime' => '20:00:00',
                'startdate' => '2020-08-07',
                'slug' => 'en-sneekweek-2020',
                'slug_lock' => 0,
                'lead' => NULL,
                'body' => '[EN] ',
                'created_at' => '2019-07-21 14:30:12',
                'updated_at' => '2019-07-21 14:30:12',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2018-03-23 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            3 => 
            array (
                'id' => 99,
                'location_id' => 3,
                'user_id' => 2,
                'language_parent' => 3,
                'language' => 'en',
                'title' => '[EN] Sneekweek 2019',
                'endtime' => '17:00:00',
                'enddate' => '2019-08-08',
                'starttime' => '10:00:00',
                'startdate' => '2019-08-02',
                'slug' => 'en-sneekweek-2019',
                'slug_lock' => 0,
                'lead' => NULL,
                'body' => '[EN] ',
                'created_at' => '2019-07-21 14:30:12',
                'updated_at' => '2019-07-21 14:30:12',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2017-08-01 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            4 => 
            array (
                'id' => 100,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Test',
                'endtime' => '22:00:00',
                'enddate' => '2023-06-01',
                'starttime' => '20:00:00',
                'startdate' => '2023-06-01',
                'slug' => 'test',
                'slug_lock' => 0,
                'lead' => '',
                'body' => '',
                'created_at' => '2023-04-18 10:05:45',
                'updated_at' => '2023-05-08 19:18:42',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-04-18 10:06:13',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}