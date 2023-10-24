<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraObjectFilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_object_files')->delete();
        
        \DB::table('lara_object_files')->insert(array (
            0 => 
            array (
                'id' => 1,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 2,
                'title' => '20230317151642-test.pdf',
                'filename' => '20230317151642-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-03-17',
                'created_at' => '2023-03-17 15:16:45',
                'updated_at' => '2023-03-17 15:16:45',
            ),
            1 => 
            array (
                'id' => 2,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 1,
                'title' => '20230317151658-test.pdf',
                'filename' => '20230317151658-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-03-17',
                'created_at' => '2023-03-17 15:17:00',
                'updated_at' => '2023-03-17 15:17:00',
            ),
            2 => 
            array (
                'id' => 3,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 3,
                'title' => '20230317151711-test.pdf',
                'filename' => '20230317151711-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-03-17',
                'created_at' => '2023-03-17 15:17:13',
                'updated_at' => '2023-03-17 15:17:13',
            ),
            3 => 
            array (
                'id' => 4,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 6,
                'title' => '20230317151723-test.pdf',
                'filename' => '20230317151723-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-03-17',
                'created_at' => '2023-03-17 15:17:25',
                'updated_at' => '2023-03-17 15:17:25',
            ),
            4 => 
            array (
                'id' => 5,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 8,
                'title' => '20230317151811-test.pdf',
                'filename' => '20230317151811-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-03-17',
                'created_at' => '2023-03-17 15:18:15',
                'updated_at' => '2023-03-17 15:18:15',
            ),
            5 => 
            array (
                'id' => 6,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 7,
                'title' => '20230317151824-test.pdf',
                'filename' => '20230317151824-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-03-17',
                'created_at' => '2023-03-17 15:18:27',
                'updated_at' => '2023-03-17 15:18:27',
            ),
            6 => 
            array (
                'id' => 10,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 261,
                'title' => '20230418165018-test.pdf',
                'filename' => '20230418165018-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-04-18',
                'created_at' => '2023-04-18 16:50:21',
                'updated_at' => '2023-04-18 16:56:34',
            ),
            7 => 
            array (
                'id' => 11,
                'entity_type' => 'Eve\\Models\\City',
                'entity_id' => 1,
                'title' => '20230511203253-test.pdf',
                'filename' => '20230511203253-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-05-11',
                'created_at' => '2023-05-11 20:32:58',
                'updated_at' => '2023-05-11 20:32:58',
            ),
            8 => 
            array (
                'id' => 12,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 16,
                'title' => '20230821111518-test.pdf',
                'filename' => '20230821111518-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-08-21',
                'created_at' => '2023-08-21 11:15:20',
                'updated_at' => '2023-08-21 11:15:20',
            ),
            9 => 
            array (
                'id' => 13,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 446,
                'title' => '20230922111526-test.pdf',
                'filename' => '20230922111526-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-09-22',
                'created_at' => '2023-09-22 11:15:29',
                'updated_at' => '2023-09-22 11:15:29',
            ),
            10 => 
            array (
                'id' => 14,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1072,
                'title' => '20230927160402-test.pdf',
                'filename' => '20230927160402-test.pdf',
                'mimetype' => 'application/pdf',
                'docdate' => '2023-09-27',
                'created_at' => '2023-09-27 16:04:04',
                'updated_at' => '2023-09-27 16:04:04',
            ),
        ));
        
        
    }
}