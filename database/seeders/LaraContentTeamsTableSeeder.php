<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentTeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_teams')->delete();
        
        \DB::table('lara_content_teams')->insert(array (
            0 => 
            array (
                'id' => 446,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Wilson',
                'linkedin' => 'JennyWilson15387',
                'twitter' => 'JennyWilson15387',
                'facebook' => 'JennyWilson15387',
                'email' => 'jenny.wilson@laracorp.com',
                'middlename' => '',
                'firstname' => 'Jenny',
                'role' => 'Co-Founder & CEO',
                'slug' => 'jenny-wilson',
                'slug_lock' => 0,
                'body' => '<p>Suspendisse felis nulla, sollicitudin ut maximus ac, convallis nec ipsum. Fusce ac purus porttitor, dignissim nisi quis, volutpat risus. Etiam aliquam urna sem. Sed dignissim nisi ac dolor dapibus euismod.</p>',
                'created_at' => '2023-03-12 17:38:28',
                'updated_at' => '2023-10-13 16:11:31',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-12 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 18,
            ),
            1 => 
            array (
                'id' => 447,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Edwards',
                'linkedin' => '#',
                'twitter' => '#',
                'facebook' => '#',
                'email' => '',
                'middlename' => '',
                'firstname' => 'Ralph',
                'role' => 'Co-Founder',
                'slug' => 'edwards',
                'slug_lock' => 0,
                'body' => '<p>Suspendisse felis nulla, sollicitudin ut maximus ac, convallis nec ipsum. Fusce ac purus porttitor, dignissim nisi quis, volutpat risus. Etiam aliquam urna sem. Sed dignissim nisi ac dolor dapibus euismod.</p>',
                'created_at' => '2023-03-12 17:40:19',
                'updated_at' => '2023-09-22 11:11:00',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-12 17:40:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 19,
            ),
            2 => 
            array (
                'id' => 448,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Williamson',
                'linkedin' => '#',
                'twitter' => '#',
                'facebook' => '#',
                'email' => '',
                'middlename' => '',
                'firstname' => 'Cameron',
                'role' => 'Creative Director',
                'slug' => 'williamson',
                'slug_lock' => 0,
                'body' => '<p>Suspendisse felis nulla, sollicitudin ut maximus ac, convallis nec ipsum. Fusce ac purus porttitor, dignissim nisi quis, volutpat risus. Etiam aliquam urna sem. Sed dignissim nisi ac dolor dapibus euismod.</p>',
                'created_at' => '2023-03-12 17:41:06',
                'updated_at' => '2023-09-22 11:11:19',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-12 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 20,
            ),
            3 => 
            array (
                'id' => 449,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Bell',
                'linkedin' => '#',
                'twitter' => '#',
                'facebook' => '#',
                'email' => '',
                'middlename' => '',
                'firstname' => 'Jerome',
                'role' => 'Marketing Director',
                'slug' => 'bell',
                'slug_lock' => 0,
                'body' => '<p>Suspendisse felis nulla, sollicitudin ut maximus ac, convallis nec ipsum. Fusce ac purus porttitor, dignissim nisi quis, volutpat risus. Etiam aliquam urna sem. Sed dignissim nisi ac dolor dapibus euismod.</p>',
                'created_at' => '2023-03-12 17:41:50',
                'updated_at' => '2023-09-22 11:11:30',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-12 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 21,
            ),
            4 => 
            array (
                'id' => 450,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'McKinney',
                'linkedin' => '#',
                'twitter' => '#',
                'facebook' => '#',
                'email' => '',
                'middlename' => '',
                'firstname' => 'Marvin',
                'role' => 'Lead Designer',
                'slug' => 'mckinney',
                'slug_lock' => 0,
                'body' => '<p>Suspendisse felis nulla, sollicitudin ut maximus ac, convallis nec ipsum. Fusce ac purus porttitor, dignissim nisi quis, volutpat risus. Etiam aliquam urna sem. Sed dignissim nisi ac dolor dapibus euismod.</p>',
                'created_at' => '2023-03-12 17:42:54',
                'updated_at' => '2023-09-22 11:11:41',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-12 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 22,
            ),
            5 => 
            array (
                'id' => 451,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Howard',
                'linkedin' => 'v',
                'twitter' => '#',
                'facebook' => '#',
                'email' => '',
                'middlename' => '',
                'firstname' => 'Esther',
                'role' => 'Motion Designer',
                'slug' => 'howard',
                'slug_lock' => 0,
                'body' => '<p>Suspendisse felis nulla, sollicitudin ut maximus ac, convallis nec ipsum. Fusce ac purus porttitor, dignissim nisi quis, volutpat risus. Etiam aliquam urna sem. Sed dignissim nisi ac dolor dapibus euismod.</p>',
                'created_at' => '2023-03-12 17:43:57',
                'updated_at' => '2023-09-22 11:12:03',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-12 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 23,
            ),
            6 => 
            array (
                'id' => 452,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Steward',
                'linkedin' => '#',
                'twitter' => '#',
                'facebook' => '#',
                'email' => '',
                'middlename' => '',
                'firstname' => 'Darrell',
                'role' => 'Lead Developer',
                'slug' => 'steward',
                'slug_lock' => 0,
                'body' => '<p>Suspendisse felis nulla, sollicitudin ut maximus ac, convallis nec ipsum. Fusce ac purus porttitor, dignissim nisi quis, volutpat risus. Etiam aliquam urna sem. Sed dignissim nisi ac dolor dapibus euismod.</p>',
                'created_at' => '2023-03-12 17:44:40',
                'updated_at' => '2023-09-22 11:12:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-12 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 24,
            ),
            7 => 
            array (
                'id' => 453,
                'location_id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Cooper',
                'linkedin' => '#',
                'twitter' => '#',
                'facebook' => '#',
                'email' => '',
                'middlename' => '',
                'firstname' => 'Jane',
                'role' => 'Senior Project Manager',
                'slug' => 'cooper',
                'slug_lock' => 0,
                'body' => '<p>Suspendisse felis nulla, sollicitudin ut maximus ac, convallis nec ipsum. Fusce ac purus porttitor, dignissim nisi quis, volutpat risus. Etiam aliquam urna sem. Sed dignissim nisi ac dolor dapibus euismod.</p>',
                'created_at' => '2023-03-12 17:46:29',
                'updated_at' => '2023-09-22 11:13:19',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-12 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 25,
            ),
        ));
        
        
    }
}