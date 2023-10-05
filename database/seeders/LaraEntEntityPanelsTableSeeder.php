<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraEntEntityPanelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_ent_entity_panels')->delete();
        
        \DB::table('lara_ent_entity_panels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'entity_id' => 1,
                'has_search' => 1,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'entity_id' => 2,
                'has_search' => 1,
                'has_batch' => 1,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 1,
                'has_tiny_lead' => 1,
                'has_tiny_body' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'entity_id' => 3,
                'has_search' => 1,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 1,
            ),
            3 => 
            array (
                'id' => 10,
                'entity_id' => 17,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 1,
                'has_tiny_lead' => 1,
                'has_tiny_body' => 1,
            ),
            4 => 
            array (
                'id' => 11,
                'entity_id' => 18,
                'has_search' => 1,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            5 => 
            array (
                'id' => 13,
                'entity_id' => 20,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            6 => 
            array (
                'id' => 18,
                'entity_id' => 27,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 1,
            ),
            7 => 
            array (
                'id' => 19,
                'entity_id' => 29,
                'has_search' => 1,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            8 => 
            array (
                'id' => 21,
                'entity_id' => 31,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            9 => 
            array (
                'id' => 22,
                'entity_id' => 34,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            10 => 
            array (
                'id' => 29,
                'entity_id' => 41,
                'has_search' => 1,
                'has_batch' => 1,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            11 => 
            array (
                'id' => 30,
                'entity_id' => 42,
                'has_search' => 1,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            12 => 
            array (
                'id' => 31,
                'entity_id' => 43,
                'has_search' => 1,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            13 => 
            array (
                'id' => 32,
                'entity_id' => 44,
                'has_search' => 1,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            14 => 
            array (
                'id' => 41,
                'entity_id' => 55,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            15 => 
            array (
                'id' => 42,
                'entity_id' => 56,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            16 => 
            array (
                'id' => 43,
                'entity_id' => 57,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            17 => 
            array (
                'id' => 44,
                'entity_id' => 58,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            18 => 
            array (
                'id' => 46,
                'entity_id' => 60,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            19 => 
            array (
                'id' => 47,
                'entity_id' => 61,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            20 => 
            array (
                'id' => 48,
                'entity_id' => 62,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            21 => 
            array (
                'id' => 49,
                'entity_id' => 63,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            22 => 
            array (
                'id' => 50,
                'entity_id' => 64,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            23 => 
            array (
                'id' => 51,
                'entity_id' => 65,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            24 => 
            array (
                'id' => 52,
                'entity_id' => 66,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 1,
            ),
            25 => 
            array (
                'id' => 53,
                'entity_id' => 67,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            26 => 
            array (
                'id' => 54,
                'entity_id' => 68,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 1,
            ),
            27 => 
            array (
                'id' => 55,
                'entity_id' => 69,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 0,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 0,
            ),
            28 => 
            array (
                'id' => 56,
                'entity_id' => 70,
                'has_search' => 1,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 1,
                'has_tiny_lead' => 0,
                'has_tiny_body' => 1,
            ),
            29 => 
            array (
                'id' => 57,
                'entity_id' => 71,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 1,
                'has_tiny_lead' => 1,
                'has_tiny_body' => 0,
            ),
            30 => 
            array (
                'id' => 71,
                'entity_id' => 85,
                'has_search' => 1,
                'has_batch' => 1,
                'has_filters' => 0,
                'show_author' => 1,
                'show_status' => 1,
                'has_tiny_lead' => 1,
                'has_tiny_body' => 1,
            ),
            31 => 
            array (
                'id' => 72,
                'entity_id' => 86,
                'has_search' => 0,
                'has_batch' => 0,
                'has_filters' => 0,
                'show_author' => 0,
                'show_status' => 1,
                'has_tiny_lead' => 1,
                'has_tiny_body' => 1,
            ),
        ));
        
        
    }
}