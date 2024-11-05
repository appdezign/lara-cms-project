<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraAuthRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_auth_roles')->delete();
        
        \DB::table('lara_auth_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'administrator',
                'title' => 'Administrator',
                'level' => 100,
                'scope' => NULL,
                'has_backend_access' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-07-05 12:06:47',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'webmaster',
                'title' => 'Webmaster',
                'level' => 90,
                'scope' => NULL,
                'has_backend_access' => 1,
                'created_at' => NULL,
                'updated_at' => '2024-10-25 13:56:37',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'editor',
                'title' => 'Editor',
                'level' => 50,
                'scope' => NULL,
                'has_backend_access' => 1,
                'created_at' => NULL,
                'updated_at' => '2024-10-25 13:55:22',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'member',
                'title' => 'Member',
                'level' => 10,
                'scope' => NULL,
                'has_backend_access' => 0,
                'created_at' => '2018-05-31 10:55:14',
                'updated_at' => '2021-04-26 14:11:02',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}