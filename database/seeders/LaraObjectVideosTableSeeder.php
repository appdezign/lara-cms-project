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
            3 => 
            array (
                'id' => 5,
                'entity_type' => 'Eve\\Models\\Video',
                'entity_id' => 1,
                'title' => 'New York City #1',
                'youtubecode' => 'hEO09YiGF6k',
                'featured' => 1,
                'created_at' => '2023-10-11 11:07:31',
                'updated_at' => '2023-10-11 11:07:41',
            ),
            4 => 
            array (
                'id' => 6,
                'entity_type' => 'Eve\\Models\\Video',
                'entity_id' => 2,
                'title' => 'New York City #2',
                'youtubecode' => 'GVKmDg-XLJs',
                'featured' => 1,
                'created_at' => '2023-10-11 11:07:52',
                'updated_at' => '2023-10-11 11:08:01',
            ),
            5 => 
            array (
                'id' => 7,
                'entity_type' => 'Eve\\Models\\Video',
                'entity_id' => 3,
                'title' => 'New York City #3',
                'youtubecode' => '3RFYO9ECWQM',
                'featured' => 1,
                'created_at' => '2023-10-11 11:08:10',
                'updated_at' => '2023-10-11 11:08:22',
            ),
        ));
        
        
    }
}