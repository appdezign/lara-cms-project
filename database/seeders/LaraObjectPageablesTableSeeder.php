<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraObjectPageablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_object_pageables')->delete();
        
        \DB::table('lara_object_pageables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 1,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 1,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 1,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 1,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 4,
            ),
            4 => 
            array (
                'id' => 11,
                'page_id' => 16,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 591,
            ),
            5 => 
            array (
                'id' => 12,
                'page_id' => 19,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 592,
            ),
            6 => 
            array (
                'id' => 14,
                'page_id' => 16,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 594,
            ),
            7 => 
            array (
                'id' => 15,
                'page_id' => 16,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 595,
            ),
            8 => 
            array (
                'id' => 16,
                'page_id' => 1090,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 594,
            ),
            9 => 
            array (
                'id' => 18,
                'page_id' => 1090,
                'entity_type' => 'Lara\\Common\\Models\\Larawidget',
                'entity_id' => 595,
            ),
        ));
        
        
    }
}