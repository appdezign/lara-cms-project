<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraMenuMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_menu_menus')->delete();
        
        \DB::table('lara_menu_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Main',
                'slug' => 'main',
                'slug_lock' => 1,
                'created_at' => '2017-11-26 12:50:34',
                'updated_at' => '2023-05-10 11:45:06',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Footer',
                'slug' => 'footer',
                'slug_lock' => 0,
                'created_at' => '2017-11-26 12:50:48',
                'updated_at' => '2023-05-10 11:45:10',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Top',
                'slug' => 'top',
                'slug_lock' => 0,
                'created_at' => '2020-11-03 10:52:00',
                'updated_at' => '2023-02-10 12:04:15',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}