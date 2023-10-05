<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraSysLanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_sys_languages')->delete();
        
        \DB::table('lara_sys_languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'nl',
                'name' => 'Nederlands',
                'default' => 1,
                'publish' => 1,
                'position' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'en',
                'name' => 'English',
                'default' => 0,
                'publish' => 1,
                'position' => 2,
            ),
        ));
        
        
    }
}