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
                'password' => '$2y$10$RkSDHUMfhuGRjU.wZOMFZuMEcFUxWnn4B5tKT2L8iPdN83w0SMVT.',
                'user_language' => 'nl',
                'is_loggedin' => 1,
                'last_login' => '2024-01-03 15:55:28',
                'api_token' => '12345',
                'remember_token' => NULL,
                'email_verified_at' => '2021-01-01 12:00:00',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2024-01-03 15:55:28',
                'deleted_at' => NULL,
                'locked_at' => '2023-10-14 17:14:34',
                'locked_by' => 2,
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
                'password' => '$2y$10$qz0d1P/He5ODbMKhhqz7/.lEPqRTbqrlcGEvPN9SCot4szlsNIrTO',
                'user_language' => 'nl',
                'is_loggedin' => 0,
                'last_login' => '2023-07-05 12:50:43',
                'api_token' => '',
                'remember_token' => NULL,
                'email_verified_at' => '2021-01-01 12:00:00',
                'created_at' => NULL,
                'updated_at' => '2023-09-21 11:47:35',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'web',
                'is_admin' => 0,
                'name' => 'Front User',
                'firstname' => 'Front',
                'middlename' => NULL,
                'lastname' => 'User',
                'username' => 'frontuser',
                'email' => 'front@laracms.nl',
                'password' => '$2y$10$7tZNPQ8x61AnbJrJS5BRJOSPIZ832GRpBatb45E/glO3Fw0SEdMgu',
                'user_language' => 'nl',
                'is_loggedin' => 0,
                'last_login' => '2032-06-16 12:24:58',
                'api_token' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2021-01-01 12:00:00',
                'created_at' => '2018-05-31 12:24:29',
                'updated_at' => '2023-07-05 12:49:40',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'type' => 'web',
                'is_admin' => 0,
                'name' => 'guest',
                'firstname' => 'guest',
                'middlename' => NULL,
                'lastname' => 'guest',
                'username' => 'guest',
                'email' => 'guest@laracms.nl',
                'password' => '$2y$10$2iZY48rqOZ9kTG3E2ogBR.n4zyKExn0E9Zf5MqCbJxAvCIoEpTxh.',
                'user_language' => 'nl',
                'is_loggedin' => 0,
                'last_login' => NULL,
                'api_token' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2021-01-01 12:00:00',
                'created_at' => '2021-04-26 14:28:33',
                'updated_at' => '2021-04-26 14:28:33',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            5 => 
            array (
                'id' => 16,
                'type' => 'web',
                'is_admin' => 0,
                'name' => 'Jack Daniels',
                'firstname' => 'Jack',
                'middlename' => NULL,
                'lastname' => 'Daniels',
                'username' => 'jack',
                'email' => 's.hoeksma@outlook.com',
                'password' => '$2y$10$Mjw4tmIbQOv8gfxEAqUNWuoNfsVKr4AvDnw/mBegJ6Ngn3eLA8OGa',
                'user_language' => 'nl',
                'is_loggedin' => 0,
                'last_login' => '2021-06-28 16:11:07',
                'api_token' => NULL,
                'remember_token' => '589FGDHwgrd9dQNX8ETyKe1eYOPBW0HnGTeDCA4V7nqZjGC8B2lSueysVsDs',
                'email_verified_at' => '2021-01-01 12:00:00',
                'created_at' => '2021-06-25 13:10:09',
                'updated_at' => '2023-07-05 12:09:23',
                'deleted_at' => '2023-07-05 12:09:23',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}