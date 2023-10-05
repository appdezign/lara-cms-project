<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentLocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_locations')->delete();
        
        \DB::table('lara_content_locations')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Marathon Music Works',
                'longitude' => '-86.79707840',
                'latitude' => '36.16409770',
                'geolocation' => 'auto',
                'country' => 'United States',
                'city' => 'Nashville, TN',
                'pcode' => '37203',
                'address' => '1402 Clinton St',
                'slug' => 'marathon-music-works-nashville-tn',
                'slug_lock' => 0,
                'created_at' => '2017-10-02 15:57:59',
                'updated_at' => '2023-03-16 12:47:17',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2017-10-02 15:55:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 => 
            array (
                'id' => 222,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'NDSM Loods',
                'longitude' => '4.89561200',
                'latitude' => '52.40185750',
                'geolocation' => 'auto',
                'country' => 'Nederland',
                'city' => 'Amsterdam',
                'pcode' => '1033 WC',
                'address' => 'NDSM-Plein 85',
                'slug' => 'ndsm-loods',
                'slug_lock' => 0,
                'created_at' => NULL,
                'updated_at' => '2023-03-16 12:44:58',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2017-10-02 16:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 223,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Firmaq West HQ',
                'longitude' => '4.65418400',
                'latitude' => '52.37008840',
                'geolocation' => 'auto',
                'country' => 'Netherlands',
                'city' => 'Haarlem',
                'pcode' => '2035 LB',
                'address' => 'Schipholweg 66',
                'slug' => 'firmaq-west-hq',
                'slug_lock' => 0,
                'created_at' => '2018-03-24 16:48:20',
                'updated_at' => '2023-09-22 10:55:33',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2018-03-24 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            3 => 
            array (
                'id' => 224,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Firmaq Noord HQ',
                'longitude' => '5.94465530',
                'latitude' => '52.96272830',
                'geolocation' => 'auto',
                'country' => 'Nederland',
                'city' => 'Heerenveen',
                'pcode' => '8448RT',
                'address' => 'Yme Kuiperweg 24',
                'slug' => 'firmaq-noord-hq',
                'slug_lock' => 0,
                'created_at' => '2023-09-22 10:53:01',
                'updated_at' => '2023-09-22 10:55:39',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-09-22 10:52:22',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}