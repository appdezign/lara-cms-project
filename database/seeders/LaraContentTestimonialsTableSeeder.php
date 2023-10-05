<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentTestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_testimonials')->delete();
        
        \DB::table('lara_content_testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Darrell Steward',
                'stars' => '5',
                'quoteshort' => 'Cool and experienced team to develop your web application',
                'role' => 'Co-founder of Lorem Company',
                'slug' => 'darrell-steward-1',
                'slug_lock' => 0,
                'lead' => '<p>Dolor, a eget elementum, integer nulla volutpat, nunc, sit. Quam iaculis varius mauris magna sem. Egestas sed sed suscipit dolor faucibus dui imperdiet at eget. Tincidunt imperdiet quis hendrerit aliquam feugiat neque cras sed. Dictum quam integer volutpat tellus, faucibus platea. Pulvinar turpis proin faucibus at mauris. Sagittis gravida vitae porta enim, nulla arcu fermentum massa volutpat pretium.</p>',
                'created_at' => '2020-06-25 10:06:06',
                'updated_at' => '2023-03-13 10:19:23',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2020-06-25 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Annette Black',
                'stars' => '4',
                'quoteshort' => 'Efficient and Innovative: Our Experience with Silicon.',
                'role' => 'Strategic Advisor at Company LLC',
                'slug' => 'annette-black',
                'slug_lock' => 0,
                'lead' => '<p>Vero minima sequi adipisci architecto dolorum, error animi delectus dicta perferendis! A, exercitationem soluta quam reprehenderit rem animi amet eligendi voluptates consequatur ipsam pariatur necessitatibus laboriosam in illo eos molestias ex explicabo eaque assumenda voluptatibus ducimus consectetur perferendis! Architecto molestias, rerum reprehenderit amet sunt natus fuga blanditiis suscipit.</p>',
                'created_at' => '2023-03-11 13:20:03',
                'updated_at' => '2023-03-13 10:15:53',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-11 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'John MacIntosh',
                'stars' => '5',
                'quoteshort' => 'Exceptional Service and Quality Results.',
                'role' => 'Founder & CEO, Uber',
                'slug' => 'john-macintosh',
                'slug_lock' => 0,
                'lead' => '<p>In quas adipisci assumenda voluptas eveniet obcaecati est quis sapiente voluptatum iste porro blanditiis debitis ut beatae, fugit quidem fugiat eum molestias? Dolore magni harum officia tempore eos sapiente. Voluptatibus pariatur omnis libero unde quasi optio, tenetur reprehenderit tempore necessitatibus harum mollitia qui. Maxime, quas tempore. Sunt quaerat porro facere blanditiis voluptatibus.</p>',
                'created_at' => '2023-03-11 13:24:45',
                'updated_at' => '2023-03-13 10:17:41',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-11 13:26:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Annette Black',
                'stars' => '1',
                'quoteshort' => '',
                'role' => 'Strategic Advisor at Company LLC',
                'slug' => 'annette-black-1',
                'slug_lock' => 0,
                'lead' => '<p>Mi semper risus ultricies orci pulvinar in at enim orci. Quis facilisis nunc pellentesque in ullamcorper sit. Lorem blandit arcu sapien, senectus libero, amet dapibus cursus quam. Eget pellentesque eu purus volutpat adipiscing malesuada. Purus nisi, tortor vel lacus.</p>',
                'created_at' => '2023-03-13 09:35:21',
                'updated_at' => '2023-03-13 09:42:23',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-13 09:42:20',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Ralph Edwards',
                'stars' => '1',
                'quoteshort' => '',
                'role' => 'Head of Marketing at Lorem Ltd.',
                'slug' => 'ralph-edwards',
                'slug_lock' => 0,
                'lead' => '<p>Vestibulum nunc lectus auctor quis. Natoque lectus tortor lacus, eu. Nunc feugiat nisl maecenas nulla hac morbi. Vitae, donec facilisis sed nunc netus. Venenatis posuere faucibus enim est. Vel dignissim morbi blandit morbi tellus. Arcu ullamcorper quis enim.</p>',
                'created_at' => '2023-03-13 09:47:23',
                'updated_at' => '2023-03-13 09:48:45',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-13 09:47:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Darrell Steward',
                'stars' => '1',
                'quoteshort' => '',
                'role' => 'Project Manager at Ipsum Ltd.',
                'slug' => 'darrell-steward',
                'slug_lock' => 0,
                'lead' => '<p>Ac at sed sit senectus massa. Massa ante amet ultrices magna porta tempor. Aliquet diam in et magna ultricies mi at. Lectus enim, vel enim egestas nam pellentesque et leo. Elit mi faucibus laoreet aliquam pellentesque sed aliquet integer massa. Orci leo tortor ornare.</p>',
                'created_at' => '2023-03-13 10:11:46',
                'updated_at' => '2023-03-13 10:13:42',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_hide' => 0,
                'publish_from' => '2023-03-13 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
                'position' => 6,
            ),
        ));
        
        
    }
}