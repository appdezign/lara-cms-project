<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraAuthPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_auth_password_resets')->delete();
        
        \DB::table('lara_auth_password_resets')->insert(array (
            0 => 
            array (
                'email' => 's.hoeksma@outlook.com',
                'token' => '$2y$10$NSOkwNhNJ61utH4mCF45luply3wQPlv6JqAS8yDkzdy6vVrs5FfH2',
                'created_at' => '2021-06-26 19:09:56',
            ),
        ));
        
        
    }
}