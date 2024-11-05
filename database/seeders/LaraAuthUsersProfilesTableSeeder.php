<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraAuthUsersProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_auth_users_profiles')->delete();
        
        \DB::table('lara_auth_users_profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'dark_mode' => 0,
                'created_at' => '2023-04-14 14:03:37',
                'updated_at' => '2024-07-02 15:31:18',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'dark_mode' => 0,
                'created_at' => '2023-04-19 10:54:56',
                'updated_at' => '2024-07-02 15:40:40',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'dark_mode' => 0,
                'created_at' => '2023-07-05 12:49:21',
                'updated_at' => '2023-07-05 12:49:39',
            ),
            3 => 
            array (
                'id' => 6,
                'user_id' => 19,
                'dark_mode' => 0,
                'created_at' => '2024-10-25 13:54:08',
                'updated_at' => '2024-10-25 13:57:15',
            ),
        ));
        
        
    }
}