<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraObjectVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_object_videos')->delete();
        
        \DB::table('lara_object_videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 16,
                'title' => 'About us',
                'youtubecode' => 'OQQ4a4Os6cE',
                'featured' => 1,
                'created_at' => '2023-03-12 17:06:35',
                'updated_at' => '2023-03-13 11:51:12',
            ),
            1 => 
            array (
                'id' => 3,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 264,
                'title' => 'Test video',
                'youtubecode' => 'LFxOaDeJmXk',
                'featured' => 1,
                'created_at' => '2023-05-09 14:24:01',
                'updated_at' => '2023-05-09 14:24:01',
            ),
            2 => 
            array (
                'id' => 4,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 446,
                'title' => 'Our New York Office',
                'youtubecode' => 'TJM17SzdPlc',
                'featured' => 1,
                'created_at' => '2023-09-22 11:24:22',
                'updated_at' => '2023-09-22 11:24:22',
            ),
        ));
        
        
    }
}