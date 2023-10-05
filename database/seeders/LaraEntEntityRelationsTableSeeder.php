<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraEntEntityRelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_ent_entity_relations')->delete();
        
        \DB::table('lara_ent_entity_relations')->insert(array (
            0 => 
            array (
                'id' => 42,
                'entity_id' => 17,
                'type' => 'belongsTo',
                'related_entity_id' => 18,
                'foreign_key' => 'location_id',
                'is_filter' => 1,
            ),
            1 => 
            array (
                'id' => 43,
                'entity_id' => 18,
                'type' => 'hasMany',
                'related_entity_id' => 17,
                'foreign_key' => 'location_id',
                'is_filter' => 0,
            ),
            2 => 
            array (
                'id' => 44,
                'entity_id' => 85,
                'type' => 'hasMany',
                'related_entity_id' => 41,
                'foreign_key' => 'city_id',
                'is_filter' => 0,
            ),
            3 => 
            array (
                'id' => 45,
                'entity_id' => 41,
                'type' => 'belongsTo',
                'related_entity_id' => 85,
                'foreign_key' => 'city_id',
                'is_filter' => 0,
            ),
            4 => 
            array (
                'id' => 46,
                'entity_id' => 18,
                'type' => 'hasMany',
                'related_entity_id' => 3,
                'foreign_key' => 'location_id',
                'is_filter' => 0,
            ),
            5 => 
            array (
                'id' => 47,
                'entity_id' => 3,
                'type' => 'belongsTo',
                'related_entity_id' => 18,
                'foreign_key' => 'location_id',
                'is_filter' => 0,
            ),
        ));
        
        
    }
}