<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraMenuMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_menu_menu_items')->delete();
        
        \DB::table('lara_menu_menu_items')->insert(array (
            0 => 
            array (
                'id' => 2,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Home',
                'slug' => 'home',
                'type' => 'page',
                'tag_id' => NULL,
                'route' => NULL,
                'routename' => 'special.home.show',
                'route_has_auth' => 0,
                'entity_id' => 1,
                'entity_view_id' => 101,
                'object_id' => 1,
                'url' => NULL,
                'locked_by_admin' => 1,
                'created_at' => '2017-08-26 14:02:09',
                'updated_at' => '2023-03-23 14:12:52',
                'publish' => 1,
                'parent_id' => NULL,
                'lft' => 1,
                'rgt' => 32,
                'depth' => 0,
            ),
            1 => 
            array (
                'id' => 4,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'About',
                'slug' => 'about',
                'type' => 'page',
                'tag_id' => NULL,
                'route' => 'about',
                'routename' => 'entity.page.show.16',
                'route_has_auth' => 0,
                'entity_id' => 1,
                'entity_view_id' => 101,
                'object_id' => 16,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2017-08-26 14:02:09',
                'updated_at' => '2019-08-18 16:59:38',
                'publish' => 1,
                'parent_id' => 2,
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
            ),
            2 => 
            array (
                'id' => 7,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Media',
                'slug' => 'media',
                'type' => 'parent',
                'tag_id' => NULL,
                'route' => 'media',
                'routename' => NULL,
                'route_has_auth' => 0,
                'entity_id' => NULL,
                'entity_view_id' => NULL,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2017-08-26 14:02:09',
                'updated_at' => '2023-09-27 16:16:39',
                'publish' => 1,
                'parent_id' => 2,
                'lft' => 12,
                'rgt' => 21,
                'depth' => 1,
            ),
            3 => 
            array (
                'id' => 8,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Blog',
                'slug' => 'blog',
                'type' => 'entity',
                'tag_id' => NULL,
                'route' => 'blog',
                'routename' => 'entitytag.blog.index',
                'route_has_auth' => 0,
                'entity_id' => 2,
                'entity_view_id' => 201,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2017-08-26 14:02:10',
                'updated_at' => '2023-03-16 14:59:11',
                'publish' => 1,
                'parent_id' => 2,
                'lft' => 8,
                'rgt' => 9,
                'depth' => 1,
            ),
            4 => 
            array (
                'id' => 10,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Contact',
                'slug' => 'contact',
                'type' => 'form',
                'tag_id' => NULL,
                'route' => 'contact',
                'routename' => 'form.contactform.form',
                'route_has_auth' => 0,
                'entity_id' => 34,
                'entity_view_id' => 309,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2017-08-26 14:02:10',
                'updated_at' => '2023-09-27 16:16:39',
                'publish' => 1,
                'parent_id' => 2,
                'lft' => 22,
                'rgt' => 23,
                'depth' => 1,
            ),
            5 => 
            array (
                'id' => 24,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Team',
                'slug' => 'team',
                'type' => 'entity',
                'tag_id' => NULL,
                'route' => 'team',
                'routename' => 'entitytag.team.index',
                'route_has_auth' => 0,
                'entity_id' => 3,
                'entity_view_id' => 301,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2018-02-15 14:16:35',
                'updated_at' => '2023-03-16 14:59:11',
                'publish' => 1,
                'parent_id' => 2,
                'lft' => 4,
                'rgt' => 5,
                'depth' => 1,
            ),
            6 => 
            array (
                'id' => 29,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Events',
                'slug' => 'events',
                'type' => 'entity',
                'tag_id' => NULL,
                'route' => 'events',
                'routename' => 'entitytag.event.index',
                'route_has_auth' => 0,
                'entity_id' => 17,
                'entity_view_id' => 307,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2018-03-23 15:27:45',
                'updated_at' => '2023-04-25 15:57:09',
                'publish' => 1,
                'parent_id' => 2,
                'lft' => 10,
                'rgt' => 11,
                'depth' => 1,
            ),
            7 => 
            array (
                'id' => 33,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Downloads',
                'slug' => 'downloads',
                'type' => 'entity',
                'tag_id' => NULL,
                'route' => 'media/downloads',
                'routename' => 'entitytag.doc.index',
                'route_has_auth' => 1,
                'entity_id' => 44,
                'entity_view_id' => 320,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2019-08-11 13:43:13',
                'updated_at' => '2023-03-22 20:57:26',
                'publish' => 1,
                'parent_id' => 7,
                'lft' => 17,
                'rgt' => 18,
                'depth' => 2,
            ),
            8 => 
            array (
                'id' => 34,
                'language' => 'nl',
                'menu_id' => 2,
                'title' => 'Footer',
                'slug' => 'footer',
                'type' => 'root',
                'tag_id' => NULL,
                'route' => NULL,
                'routename' => NULL,
                'route_has_auth' => 0,
                'entity_id' => NULL,
                'entity_view_id' => NULL,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2019-08-11 13:43:13',
                'updated_at' => '2019-08-11 13:43:13',
                'publish' => 1,
                'parent_id' => NULL,
                'lft' => 1,
                'rgt' => 2,
                'depth' => NULL,
            ),
            9 => 
            array (
                'id' => 35,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Fotoalbum',
                'slug' => 'fotoalbum',
                'type' => 'entity',
                'tag_id' => NULL,
                'route' => 'media/fotoalbum',
                'routename' => 'entitytag.gallery.index',
                'route_has_auth' => 0,
                'entity_id' => 42,
                'entity_view_id' => 316,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2019-08-11 18:44:12',
                'updated_at' => '2023-03-16 14:59:11',
                'publish' => 1,
                'parent_id' => 7,
                'lft' => 13,
                'rgt' => 14,
                'depth' => 2,
            ),
            10 => 
            array (
                'id' => 36,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Video',
                'slug' => 'video',
                'type' => 'entity',
                'tag_id' => NULL,
                'route' => 'media/video',
                'routename' => 'entitytag.video.index',
                'route_has_auth' => 0,
                'entity_id' => 43,
                'entity_view_id' => 318,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2019-08-11 21:03:49',
                'updated_at' => '2023-03-16 14:59:11',
                'publish' => 1,
                'parent_id' => 7,
                'lft' => 15,
                'rgt' => 16,
                'depth' => 2,
            ),
            11 => 
            array (
                'id' => 43,
                'language' => 'en',
                'menu_id' => 1,
                'title' => '[EN] homepage',
                'slug' => 'homepage-homepage-en',
                'type' => 'page',
                'tag_id' => NULL,
                'route' => NULL,
                'routename' => 'special.home.show',
                'route_has_auth' => 0,
                'entity_id' => 1,
                'entity_view_id' => 101,
                'object_id' => 1071,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2020-03-09 14:34:01',
                'updated_at' => '2020-03-09 14:34:01',
                'publish' => 1,
                'parent_id' => NULL,
                'lft' => 1,
                'rgt' => 4,
                'depth' => NULL,
            ),
            12 => 
            array (
                'id' => 44,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Privacy',
                'slug' => 'privacy',
                'type' => 'page',
                'tag_id' => NULL,
                'route' => 'privacy',
                'routename' => 'entity.page.show.1072',
                'route_has_auth' => 0,
                'entity_id' => 1,
                'entity_view_id' => 101,
                'object_id' => 1072,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2020-03-14 16:28:56',
                'updated_at' => '2023-09-27 16:16:39',
                'publish' => 0,
                'parent_id' => 2,
                'lft' => 28,
                'rgt' => 29,
                'depth' => 1,
            ),
            13 => 
            array (
                'id' => 46,
                'language' => 'nl',
                'menu_id' => 3,
                'title' => 'Top',
                'slug' => 'top-1',
                'type' => 'root',
                'tag_id' => NULL,
                'route' => NULL,
                'routename' => NULL,
                'route_has_auth' => 0,
                'entity_id' => NULL,
                'entity_view_id' => NULL,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2020-12-23 14:04:38',
                'updated_at' => '2020-12-23 14:04:38',
                'publish' => 1,
                'parent_id' => NULL,
                'lft' => 1,
                'rgt' => 4,
                'depth' => NULL,
            ),
            14 => 
            array (
                'id' => 48,
                'language' => 'en',
                'menu_id' => 1,
                'title' => 'About',
                'slug' => 'about-1',
                'type' => 'page',
                'tag_id' => NULL,
                'route' => 'about-1',
                'routename' => 'entity.page.show.1078',
                'route_has_auth' => 0,
                'entity_id' => 1,
                'entity_view_id' => 101,
                'object_id' => 1078,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2021-06-22 14:55:22',
                'updated_at' => '2021-06-22 14:55:22',
                'publish' => 0,
                'parent_id' => 43,
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
            ),
            15 => 
            array (
                'id' => 49,
                'language' => 'en',
                'menu_id' => 2,
                'title' => 'Footer',
                'slug' => 'footer-1',
                'type' => 'root',
                'tag_id' => NULL,
                'route' => NULL,
                'routename' => NULL,
                'route_has_auth' => 0,
                'entity_id' => NULL,
                'entity_view_id' => NULL,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2021-06-22 14:55:22',
                'updated_at' => '2021-06-22 14:55:22',
                'publish' => 1,
                'parent_id' => NULL,
                'lft' => 1,
                'rgt' => 2,
                'depth' => NULL,
            ),
            16 => 
            array (
                'id' => 50,
                'language' => 'en',
                'menu_id' => 3,
                'title' => 'Top',
                'slug' => 'top-1',
                'type' => 'root',
                'tag_id' => NULL,
                'route' => NULL,
                'routename' => NULL,
                'route_has_auth' => 0,
                'entity_id' => NULL,
                'entity_view_id' => NULL,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2021-06-22 14:55:22',
                'updated_at' => '2021-06-22 14:55:22',
                'publish' => 1,
                'parent_id' => NULL,
                'lft' => 1,
                'rgt' => 2,
                'depth' => NULL,
            ),
            17 => 
            array (
                'id' => 51,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Services',
                'slug' => 'services',
                'type' => 'entity',
                'tag_id' => NULL,
                'route' => 'services',
                'routename' => 'entitytag.service.index',
                'route_has_auth' => 0,
                'entity_id' => 86,
                'entity_view_id' => 333,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2023-03-16 14:58:26',
                'updated_at' => '2023-03-20 16:08:37',
                'publish' => 1,
                'parent_id' => 2,
                'lft' => 6,
                'rgt' => 7,
                'depth' => 1,
            ),
            18 => 
            array (
                'id' => 52,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Classic form',
                'slug' => 'classic-form',
                'type' => 'form',
                'tag_id' => NULL,
                'route' => 'classic-form',
                'routename' => 'form.classicform.form',
                'route_has_auth' => 0,
                'entity_id' => 69,
                'entity_view_id' => 322,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2023-03-19 17:08:55',
                'updated_at' => '2023-09-27 16:16:39',
                'publish' => 0,
                'parent_id' => 2,
                'lft' => 24,
                'rgt' => 27,
                'depth' => 1,
            ),
            19 => 
            array (
                'id' => 53,
                'language' => 'nl',
                'menu_id' => 1,
                'title' => 'Thank you',
                'slug' => 'thank-you',
                'type' => 'page',
                'tag_id' => NULL,
                'route' => 'classic-form/thank-you',
                'routename' => 'entity.page.show.1086',
                'route_has_auth' => 0,
                'entity_id' => 1,
                'entity_view_id' => 101,
                'object_id' => 1086,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2023-03-19 17:09:38',
                'updated_at' => '2023-09-27 16:16:39',
                'publish' => 0,
                'parent_id' => 52,
                'lft' => 25,
                'rgt' => 26,
                'depth' => 2,
            ),
            20 => 
            array (
                'id' => 54,
                'language' => 'nl',
                'menu_id' => 3,
                'title' => 'Contact',
                'slug' => 'contact-1',
                'type' => 'form',
                'tag_id' => NULL,
                'route' => 'contact-1',
                'routename' => 'form.contactform.form',
                'route_has_auth' => 0,
                'entity_id' => 34,
                'entity_view_id' => 309,
                'object_id' => NULL,
                'url' => NULL,
                'locked_by_admin' => 0,
                'created_at' => '2023-03-23 11:41:54',
                'updated_at' => '2023-03-23 12:02:54',
                'publish' => 1,
                'parent_id' => 46,
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
            ),
        ));
        
        
    }
}