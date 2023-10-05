<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraSysUploadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_sys_uploads')->delete();
        
        \DB::table('lara_sys_uploads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'entity_type' => 'Eve\\Models\\Post',
                'object_id' => 0,
                'token' => 'QzmxamANPKfCXG13Zmnkvjd2IZBV57fYv7q2CTRx',
                'dz_session_id' => '20211007141903',
                'filename' => '20211007141927-haarlem-sky.jpg',
                'filetype' => 'image',
                'mimetype' => 'image/jpeg',
                'created_at' => '2021-10-07 14:19:27',
                'updated_at' => '2021-10-07 14:19:27',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'entity_type' => 'Eve\\Models\\Blog',
                'object_id' => 3,
                'token' => 'XUPjaehlE86eaW3lNbW5z5Mw25EcpFakKcO0T9pd',
                'dz_session_id' => '20230207125459',
                'filename' => '20230207125504-test.mp4',
                'filetype' => 'videofile',
                'mimetype' => 'video/mp4',
                'created_at' => '2023-02-07 12:55:04',
                'updated_at' => '2023-02-07 12:55:04',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'entity_type' => 'Eve\\Models\\Blog',
                'object_id' => 261,
                'token' => 'l2KdUzOP0LYrgcxLWlEiWQUo3KGwSjSKXQA1aSb2',
                'dz_session_id' => '20230509105111',
                'filename' => '20230509110526-olympia-hilversum.jpg',
                'filetype' => 'image',
                'mimetype' => 'image/jpeg',
                'created_at' => '2023-05-09 11:05:26',
                'updated_at' => '2023-05-09 11:05:26',
            ),
        ));
        
        
    }
}