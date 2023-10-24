<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraEntEntityObjectRelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_ent_entity_object_relations')->delete();
        
        \DB::table('lara_ent_entity_object_relations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'entity_id' => 1,
                'has_seo' => 1,
                'has_opengraph' => 1,
                'has_layout' => 1,
                'has_related' => 1,
                'is_relatable' => 1,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 1,
                'has_images' => 1,
                'has_videos' => 1,
                'has_videofiles' => 1,
                'has_files' => 1,
                'max_images' => 24,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 24,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            1 => 
            array (
                'id' => 2,
                'entity_id' => 2,
                'has_seo' => 1,
                'has_opengraph' => 1,
                'has_layout' => 0,
                'has_related' => 1,
                'is_relatable' => 1,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 1,
                'has_videofiles' => 1,
                'has_files' => 1,
                'max_images' => 24,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 24,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            2 => 
            array (
                'id' => 3,
                'entity_id' => 3,
                'has_seo' => 1,
                'has_opengraph' => 1,
                'has_layout' => 0,
                'has_related' => 1,
                'is_relatable' => 1,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 1,
                'has_videofiles' => 0,
                'has_files' => 1,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            3 => 
            array (
                'id' => 10,
                'entity_id' => 17,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 24,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            4 => 
            array (
                'id' => 11,
                'entity_id' => 18,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            5 => 
            array (
                'id' => 13,
                'entity_id' => 20,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => 'home',
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            6 => 
            array (
                'id' => 18,
                'entity_id' => 27,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            7 => 
            array (
                'id' => 19,
                'entity_id' => 29,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            8 => 
            array (
                'id' => 21,
                'entity_id' => 31,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            9 => 
            array (
                'id' => 22,
                'entity_id' => 34,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            10 => 
            array (
                'id' => 29,
                'entity_id' => 41,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            11 => 
            array (
                'id' => 30,
                'entity_id' => 42,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 24,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            12 => 
            array (
                'id' => 31,
                'entity_id' => 43,
                'has_seo' => 1,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 1,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            13 => 
            array (
                'id' => 32,
                'entity_id' => 44,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 1,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 1,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            14 => 
            array (
                'id' => 41,
                'entity_id' => 55,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            15 => 
            array (
                'id' => 42,
                'entity_id' => 56,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            16 => 
            array (
                'id' => 43,
                'entity_id' => 57,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            17 => 
            array (
                'id' => 44,
                'entity_id' => 58,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            18 => 
            array (
                'id' => 46,
                'entity_id' => 60,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            19 => 
            array (
                'id' => 47,
                'entity_id' => 61,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            20 => 
            array (
                'id' => 48,
                'entity_id' => 62,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            21 => 
            array (
                'id' => 49,
                'entity_id' => 63,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            22 => 
            array (
                'id' => 50,
                'entity_id' => 64,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            23 => 
            array (
                'id' => 51,
                'entity_id' => 65,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            24 => 
            array (
                'id' => 52,
                'entity_id' => 66,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 8,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            25 => 
            array (
                'id' => 53,
                'entity_id' => 67,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => NULL,
                'disk_videos' => NULL,
                'disk_files' => NULL,
            ),
            26 => 
            array (
                'id' => 54,
                'entity_id' => 68,
                'has_seo' => 1,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            27 => 
            array (
                'id' => 55,
                'entity_id' => 69,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 0,
                'tag_default' => '',
                'has_sync' => 0,
                'has_images' => 0,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            28 => 
            array (
                'id' => 56,
                'entity_id' => 70,
                'has_seo' => 1,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 1,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 24,
                'max_videos' => 1,
                'max_videofiles' => 0,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            29 => 
            array (
                'id' => 57,
                'entity_id' => 71,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            30 => 
            array (
                'id' => 71,
                'entity_id' => 85,
                'has_seo' => 1,
                'has_opengraph' => 1,
                'has_layout' => 1,
                'has_related' => 1,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 1,
                'has_videofiles' => 0,
                'has_files' => 1,
                'max_images' => 20,
                'max_videos' => 20,
                'max_videofiles' => 1,
                'max_files' => 20,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
            31 => 
            array (
                'id' => 72,
                'entity_id' => 86,
                'has_seo' => 0,
                'has_opengraph' => 0,
                'has_layout' => 0,
                'has_related' => 0,
                'is_relatable' => 0,
                'has_tags' => 1,
                'tag_default' => NULL,
                'has_sync' => 0,
                'has_images' => 1,
                'has_videos' => 0,
                'has_videofiles' => 0,
                'has_files' => 0,
                'max_images' => 1,
                'max_videos' => 1,
                'max_videofiles' => 1,
                'max_files' => 1,
                'disk_images' => 'localdisk',
                'disk_videos' => 'localdisk',
                'disk_files' => 'localdisk',
            ),
        ));
        
        
    }
}