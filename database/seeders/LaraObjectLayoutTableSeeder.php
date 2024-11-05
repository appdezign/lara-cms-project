<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraObjectLayoutTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_object_layout')->delete();
        
        \DB::table('lara_object_layout')->insert(array (
            0 => 
            array (
                'id' => 90,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1063,
                'layout_key' => 'content',
                'layout_value' => 'boxed_default_col_10',
                'created_at' => '2023-03-17 13:35:44',
                'updated_at' => '2023-03-17 13:35:44',
            ),
            1 => 
            array (
                'id' => 182,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 19,
                'layout_key' => 'content',
                'layout_value' => 'boxed_default_col_10',
                'created_at' => '2023-08-21 19:04:07',
                'updated_at' => '2023-08-21 19:04:07',
            ),
            2 => 
            array (
                'id' => 204,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 38,
                'layout_key' => 'header',
                'layout_value' => NULL,
                'created_at' => '2023-08-22 09:41:35',
                'updated_at' => '2023-08-22 09:41:35',
            ),
            3 => 
            array (
                'id' => 205,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 38,
                'layout_key' => 'hero',
                'layout_value' => NULL,
                'created_at' => '2023-08-22 09:41:35',
                'updated_at' => '2023-08-22 09:41:35',
            ),
            4 => 
            array (
                'id' => 206,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 38,
                'layout_key' => 'pagetitle',
                'layout_value' => NULL,
                'created_at' => '2023-08-22 09:41:35',
                'updated_at' => '2023-08-22 09:41:35',
            ),
            5 => 
            array (
                'id' => 207,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 38,
                'layout_key' => 'content',
                'layout_value' => NULL,
                'created_at' => '2023-08-22 09:41:35',
                'updated_at' => '2023-08-22 09:41:35',
            ),
            6 => 
            array (
                'id' => 208,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 38,
                'layout_key' => 'share',
                'layout_value' => NULL,
                'created_at' => '2023-08-22 09:41:35',
                'updated_at' => '2023-08-22 09:41:35',
            ),
            7 => 
            array (
                'id' => 209,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 38,
                'layout_key' => 'cta',
                'layout_value' => NULL,
                'created_at' => '2023-08-22 09:41:35',
                'updated_at' => '2023-08-22 09:41:35',
            ),
            8 => 
            array (
                'id' => 210,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 38,
                'layout_key' => 'footer',
                'layout_value' => NULL,
                'created_at' => '2023-08-22 09:41:35',
                'updated_at' => '2023-08-22 09:41:35',
            ),
            9 => 
            array (
                'id' => 232,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 16,
                'layout_key' => 'content',
                'layout_value' => 'boxed_default_col_10',
                'created_at' => '2024-03-02 17:11:01',
                'updated_at' => '2024-03-02 17:11:01',
            ),
            10 => 
            array (
                'id' => 233,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 16,
                'layout_key' => 'cta',
                'layout_value' => 'contact',
                'created_at' => '2024-03-02 17:11:01',
                'updated_at' => '2024-03-02 17:11:01',
            ),
            11 => 
            array (
                'id' => 237,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1,
                'layout_key' => 'hero',
                'layout_value' => 'hero_slider_100',
                'created_at' => '2024-10-23 15:44:57',
                'updated_at' => '2024-10-23 15:44:57',
            ),
            12 => 
            array (
                'id' => 238,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1,
                'layout_key' => 'content',
                'layout_value' => 'full_width',
                'created_at' => '2024-10-23 15:44:57',
                'updated_at' => '2024-10-23 15:44:57',
            ),
            13 => 
            array (
                'id' => 239,
                'entity_type' => 'Lara\\Common\\Models\\Page',
                'entity_id' => 1,
                'layout_key' => 'cta',
                'layout_value' => 'hidden',
                'created_at' => '2024-10-23 15:44:57',
                'updated_at' => '2024-10-23 15:44:57',
            ),
        ));
        
        
    }
}