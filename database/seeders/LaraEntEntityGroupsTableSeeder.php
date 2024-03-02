<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraEntEntityGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_ent_entity_groups')->delete();
        
        \DB::table('lara_ent_entity_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Page',
                'key' => 'page',
                'path' => 'Lara',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 1,
                'group_has_filters' => 1,
                'group_has_panels' => 1,
                'group_has_media' => 1,
                'group_has_customcolumns' => 1,
                'group_has_relations' => 1,
                'group_has_views' => 1,
                'group_has_widgets' => 0,
                'group_has_sortable' => 1,
                'group_has_managedtable' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-10-24 13:13:03',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Blocks',
                'key' => 'block',
                'path' => 'Lara',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 1,
                'group_has_filters' => 1,
                'group_has_panels' => 1,
                'group_has_media' => 1,
                'group_has_customcolumns' => 1,
                'group_has_relations' => 0,
                'group_has_views' => 0,
                'group_has_widgets' => 0,
                'group_has_sortable' => 1,
                'group_has_managedtable' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-05-10 10:08:26',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Menu',
                'key' => 'menu',
                'path' => 'Lara',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 0,
                'group_has_filters' => 0,
                'group_has_panels' => 0,
                'group_has_media' => 0,
                'group_has_customcolumns' => 0,
                'group_has_relations' => 0,
                'group_has_views' => 0,
                'group_has_widgets' => 0,
                'group_has_sortable' => 0,
                'group_has_managedtable' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Tag',
                'key' => 'tag',
                'path' => 'Lara',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 1,
                'group_has_filters' => 0,
                'group_has_panels' => 1,
                'group_has_media' => 1,
                'group_has_customcolumns' => 1,
                'group_has_relations' => 0,
                'group_has_views' => 0,
                'group_has_widgets' => 0,
                'group_has_sortable' => 0,
                'group_has_managedtable' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Auth',
                'key' => 'auth',
                'path' => 'Lara',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 0,
                'group_has_filters' => 0,
                'group_has_panels' => 0,
                'group_has_media' => 0,
                'group_has_customcolumns' => 0,
                'group_has_relations' => 0,
                'group_has_views' => 0,
                'group_has_widgets' => 0,
                'group_has_sortable' => 0,
                'group_has_managedtable' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Builder',
                'key' => 'builder',
                'path' => 'Lara',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 0,
                'group_has_filters' => 0,
                'group_has_panels' => 0,
                'group_has_media' => 0,
                'group_has_customcolumns' => 0,
                'group_has_relations' => 0,
                'group_has_views' => 0,
                'group_has_widgets' => 0,
                'group_has_sortable' => 1,
                'group_has_managedtable' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Tools',
                'key' => 'tools',
                'path' => 'Lara',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 0,
                'group_has_filters' => 1,
                'group_has_panels' => 0,
                'group_has_media' => 0,
                'group_has_customcolumns' => 0,
                'group_has_relations' => 0,
                'group_has_views' => 0,
                'group_has_widgets' => 0,
                'group_has_sortable' => 1,
                'group_has_managedtable' => 0,
                'created_at' => NULL,
                'updated_at' => '2019-07-17 13:16:42',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Form',
                'key' => 'form',
                'path' => 'Eve',
                'group_has_columns' => 0,
                'group_has_objectrelations' => 0,
                'group_has_filters' => 0,
                'group_has_panels' => 0,
                'group_has_media' => 0,
                'group_has_customcolumns' => 1,
                'group_has_relations' => 1,
                'group_has_views' => 1,
                'group_has_widgets' => 0,
                'group_has_sortable' => 0,
                'group_has_managedtable' => 1,
                'created_at' => NULL,
                'updated_at' => '2018-01-29 17:11:03',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Entity',
                'key' => 'entity',
                'path' => 'Eve',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 1,
                'group_has_filters' => 1,
                'group_has_panels' => 1,
                'group_has_media' => 1,
                'group_has_customcolumns' => 1,
                'group_has_relations' => 1,
                'group_has_views' => 1,
                'group_has_widgets' => 0,
                'group_has_sortable' => 1,
                'group_has_managedtable' => 1,
                'created_at' => '2018-07-02 14:44:27',
                'updated_at' => '2018-07-02 14:44:27',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'SEO',
                'key' => 'seo',
                'path' => 'Lara',
                'group_has_columns' => 1,
                'group_has_objectrelations' => 0,
                'group_has_filters' => 1,
                'group_has_panels' => 0,
                'group_has_media' => 0,
                'group_has_customcolumns' => 0,
                'group_has_relations' => 0,
                'group_has_views' => 0,
                'group_has_widgets' => 0,
                'group_has_sortable' => 1,
                'group_has_managedtable' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 10,
            ),
        ));
        
        
    }
}