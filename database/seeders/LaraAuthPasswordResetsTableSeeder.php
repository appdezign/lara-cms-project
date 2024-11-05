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
            1 => 
            array (
                'email' => 'beheer@firmaq.nl',
                'token' => '$2y$10$voUSagSLWrrsp.N3wW6vxepyoIzq/fSE424pmbBBhUk7qdCe48x0q',
                'created_at' => '2024-09-23 15:36:08',
            ),
        ));
        
        
    }
}