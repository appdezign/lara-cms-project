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
                'api_token' => 'O1tWONE28rTNQfC6E2LnZZ4MgSooWhwZ',
                'remember_token' => NULL,
                'email_verified_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
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
                'last_login' => '2024-11-05 16:57:00',
                'api_token' => '12345',
                'remember_token' => 'THfVSspfdgevuZfDNoJ3RU02QtlydUmjyXAsktpAHnpRhKxOReHG3jKzTSIr',
                'email_verified_at' => '2021-01-01 12:00:00',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2024-11-05 16:57:00',
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
                'last_login' => '2023-07-05 12:50:43',
                'api_token' => '',
                'remember_token' => NULL,
                'email_verified_at' => '2021-01-01 12:00:00',
                'created_at' => NULL,
                'updated_at' => '2024-07-02 15:40:41',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));


    }
}