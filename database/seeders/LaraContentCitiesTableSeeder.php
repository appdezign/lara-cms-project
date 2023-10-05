<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_cities')->delete();
        
        \DB::table('lara_content_cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Lorem ipsum',
                'mycustom' => 'my custom',
                'myselectone2one' => 'option3',
                'myselectone' => 'option2',
                'myboolean' => 1,
                'mydecimal4' => '4.5678',
                'mydecimal2' => '1.23',
                'myintunsigned' => 456,
                'myinteger' => 123,
                'mytime' => '20:30:00',
                'mydate' => '2023-05-11',
                'mydatetime' => '2023-05-11 20:30:00',
                'myemail' => 'beheer@firmaq.nl',
                'mymcemin' => '<p>my mcemin</p>',
                'mymcefull' => '<p>my mcefull</p>',
                'mytext' => 'my text',
                'mystring' => 'my string',
                'slug' => 'lorem-ipsum',
                'slug_lock' => 0,
                'lead' => '<p>lead</p>',
                'body' => '<p>body</p>',
                'created_at' => '2023-05-11 20:30:52',
                'updated_at' => '2023-05-12 11:48:51',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-05-11 20:30:00',
                'publish_to' => '2023-05-31 12:00:00',
                'show_in_app' => 0,
                'locked_at' => '2023-05-12 11:48:51',
                'locked_by' => 2,
                'position' => 1,
            ),
        ));
        
        
    }
}