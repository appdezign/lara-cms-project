<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraAuthHasRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_auth_has_roles')->delete();
        
        \DB::table('lara_auth_has_roles')->insert(array (
            0 => 
            array (
                'role_id' => 4,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 6,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            1 => 
            array (
                'role_id' => 4,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 7,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            2 => 
            array (
                'role_id' => 4,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 12,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            3 => 
            array (
                'role_id' => 4,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 13,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            4 => 
            array (
                'role_id' => 4,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 14,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            5 => 
            array (
                'role_id' => 4,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 15,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            6 => 
            array (
                'role_id' => 4,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 16,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            7 => 
            array (
                'role_id' => 4,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 4,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            8 => 
            array (
                'role_id' => 1,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 2,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            9 => 
            array (
                'role_id' => 2,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 3,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            10 => 
            array (
                'role_id' => 2,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 18,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
            11 => 
            array (
                'role_id' => 2,
                'entity_type' => 'Lara\\Common\\Models\\User',
                'entity_id' => 19,
                'restricted_to_id' => NULL,
                'restricted_to_type' => NULL,
                'scope' => NULL,
            ),
        ));
        
        
    }
}