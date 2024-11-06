<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraFormContactformsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_form_contactforms')->delete();
        
        \DB::table('lara_form_contactforms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Jenny Wilson',
                'telephone' => '0123456789',
                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum pharetra ipsum, porta tempus purus eleifend quis. Nullam eget lorem in purus fermentum eleifend. Proin et vehicula sem. Aliquam facilisis varius turpis. Mauris ut justo pharetra, malesuada tellus nec, feugiat enim. ',
                'email' => 'jenny.wilson@gmail.com',
                'name' => 'Jenny Wilson',
                'created_at' => '2023-06-28 11:36:22',
                'updated_at' => '2023-06-28 11:36:22',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'ipaddress' => '123.234.345.456',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Ralph Edwards',
                'telephone' => '0123456789',
                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum pharetra ipsum, porta tempus purus eleifend quis. Nullam eget lorem in purus fermentum eleifend. Proin et vehicula sem. Aliquam facilisis varius turpis. Mauris ut justo pharetra, malesuada tellus nec, feugiat enim. ',
                'email' => 'ralph.edwards@gmail.com',
                'name' => 'Ralph Edwards',
                'created_at' => '2023-06-28 11:36:22',
                'updated_at' => '2023-06-28 11:36:22',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'ipaddress' => '123.234.345.456',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Jane Cooper',
                'telephone' => '0123456789',
                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum pharetra ipsum, porta tempus purus eleifend quis. Nullam eget lorem in purus fermentum eleifend. Proin et vehicula sem. Aliquam facilisis varius turpis. Mauris ut justo pharetra, malesuada tellus nec, feugiat enim. ',
                'email' => 'jane.cooper@gmail.com',
                'name' => 'Jane Cooper',
                'created_at' => '2023-06-28 11:36:22',
                'updated_at' => '2023-06-28 11:36:22',
                'deleted_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'ipaddress' => '123.234.345.456',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Darrell Steward',
                'telephone' => '0123456789',
                'comment' => '[spam] - This is a terrible spam message, full of suspicious links',
                'email' => 'darrell046987@gmail.com',
                'name' => 'Darrell Steward',
                'created_at' => '2023-06-28 11:36:22',
                'updated_at' => '2023-06-28 11:36:22',
                'deleted_at' => '2023-09-21 10:24:49',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'ipaddress' => '123.234.345.456',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Sybrand Hoeksma',
                'telephone' => '0651392621',
                'comment' => 'test',
                'email' => 's.hoeksma@firmaq.nl',
                'name' => 'Sybrand Hoeksma',
                'created_at' => '2024-10-23 15:44:20',
                'updated_at' => '2024-10-25 15:33:06',
                'deleted_at' => '2024-10-25 15:33:06',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'ipaddress' => '127.0.0.1',
            ),
        ));
        
        
    }
}