<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraAuthUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('lara_auth_users')->delete();

        \DB::table('lara_auth_users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'type' => 'api',
                'is_admin' => 0,
                'name' => 'API',
                'firstname' => '',
                'middlename' => '',
                'lastname' => '',
                'username' => NULL,
                'email' => '',
                'password' => '',
                'user_language' => NULL,
                'is_loggedin' => 0,
                'last_login' => NULL,
                'api_token' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => NULL,
                'created_at' => '2024-11-01 11:00:00',
                'updated_at' => '2024-11-01 11:00:00',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'type' => 'web',
                'is_admin' => 1,
                'name' => 'Firmaq Beheer',
                'firstname' => 'Firmaq',
                'middlename' => NULL,
                'lastname' => 'Beheer',
                'username' => 'admin',
                'email' => 'beheer@firmaq.nl',
                'password' => '',
                'user_language' => 'nl',
                'is_loggedin' => 1,
                'last_login' => '2024-11-01 11:00:00',
                'api_token' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-11-01 11:00:00',
                'created_at' => '2024-11-01 11:00:00',
                'updated_at' => '2024-11-01 11:00:00',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'type' => 'web',
                'is_admin' => 0,
                'name' => 'Firmaq Helpdesk',
                'firstname' => 'Firmaq',
                'middlename' => NULL,
                'lastname' => 'Helpdesk',
                'username' => 'helpdesk',
                'email' => 'helpdesk@firmaq.nl',
                'password' => '',
                'user_language' => 'nl',
                'is_loggedin' => 0,
                'last_login' => '2024-11-01 11:00:00',
                'api_token' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-11-01 11:00:00',
                'created_at' => '2024-11-01 11:00:00',
                'updated_at' => '2024-11-01 11:00:00',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));


    }
}