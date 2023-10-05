<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraObjectRelatedTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_object_related')->delete();
        
        \DB::table('lara_object_related')->insert(array (
            0 => 
            array (
                'id' => 1,
                'entity_key' => 'facilty',
                'object_id' => 1,
                'related_entity_key' => 'page',
                'related_model_class' => 'Lara\\Common\\Models\\Page',
                'related_object_id' => 16,
            ),
            1 => 
            array (
                'id' => 2,
                'entity_key' => 'facilty',
                'object_id' => 1,
                'related_entity_key' => 'blog',
                'related_model_class' => 'Eve\\Models\\Blog',
                'related_object_id' => 265,
            ),
            2 => 
            array (
                'id' => 3,
                'entity_key' => 'blog',
                'object_id' => 261,
                'related_entity_key' => 'page',
                'related_model_class' => 'Lara\\Common\\Models\\Page',
                'related_object_id' => 16,
            ),
            3 => 
            array (
                'id' => 4,
                'entity_key' => 'city',
                'object_id' => 1,
                'related_entity_key' => 'page',
                'related_model_class' => 'Lara\\Common\\Models\\Page',
                'related_object_id' => 16,
            ),
            4 => 
            array (
                'id' => 5,
                'entity_key' => 'city',
                'object_id' => 1,
                'related_entity_key' => 'blog',
                'related_model_class' => 'Eve\\Models\\Blog',
                'related_object_id' => 261,
            ),
            5 => 
            array (
                'id' => 6,
                'entity_key' => 'page',
                'object_id' => 16,
                'related_entity_key' => 'menuitem',
                'related_model_class' => 'Lara\\Common\\Models\\Menuitem',
                'related_object_id' => 51,
            ),
            6 => 
            array (
                'id' => 7,
                'entity_key' => 'page',
                'object_id' => 16,
                'related_entity_key' => 'menuitem',
                'related_model_class' => 'Lara\\Common\\Models\\Menuitem',
                'related_object_id' => 8,
            ),
            7 => 
            array (
                'id' => 8,
                'entity_key' => 'page',
                'object_id' => 16,
                'related_entity_key' => 'page',
                'related_model_class' => 'Lara\\Common\\Models\\Page',
                'related_object_id' => 1072,
            ),
            8 => 
            array (
                'id' => 9,
                'entity_key' => 'team',
                'object_id' => 446,
                'related_entity_key' => 'page',
                'related_model_class' => 'Lara\\Common\\Models\\Page',
                'related_object_id' => 16,
            ),
            9 => 
            array (
                'id' => 10,
                'entity_key' => 'team',
                'object_id' => 446,
                'related_entity_key' => 'menuitem',
                'related_model_class' => 'Lara\\Common\\Models\\Menuitem',
                'related_object_id' => 8,
            ),
        ));
        
        
    }
}