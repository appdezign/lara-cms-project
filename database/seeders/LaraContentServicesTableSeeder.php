<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_services')->delete();
        
        \DB::table('lara_content_services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Product Design',
                'slug' => 'product-design',
                'slug_lock' => 0,
                'lead' => '<p>Nullam semper enim quis vulputate mollis. Donec ultrices elementum mauris, ac porttitor mi cursus eget. Vestibulum gravida risus et lacus finibus tincidunt. Vivamus dui ante, pharetra eu blandit ac, vulputate et diam eu faucibus.</p>',
                'body' => '<ul class="list-unstyled d-flex flex-wrap mt-md-n16 mt-n8 ms-md-n24 ms-n16 mb-0 pb-lg-24 pb-md-8 fw-bold">
<li class="mt-md-16 mt-8 ms-md-24 ms-16">UX/UI</li>
<li class="mt-md-16 mt-8 ms-md-24 ms-16">Interactive design</li>
<li class="mt-md-16 mt-8 ms-md-24 ms-16">Motion design</li>
</ul>',
                'created_at' => '2023-03-11 14:12:32',
                'updated_at' => '2023-03-20 16:13:23',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-11 14:15:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Web Development',
                'slug' => 'web-development',
                'slug_lock' => 0,
                'lead' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in arcu ligula. Vestibulum euismod interdum risus eu interdum. Vivamus suscipit mauris at erat ultricies, vitae placerat nulla feugiat. Integer venenatis blandit efficitur.</p>',
                'body' => '<ul class="list-unstyled d-flex flex-wrap mt-md-n16 mt-n8 ms-md-n24 ms-n16 mb-0 pb-lg-24 pb-md-8 fw-bold">
<li class="mt-md-16 mt-8 ms-md-24 ms-16">Bootstrap 5</li>
<li class="mt-md-16 mt-8 ms-md-24 ms-16">Responsive</li>
<li class="mt-md-16 mt-8 ms-md-24 ms-16">ES6 Modules</li>
</ul>',
                'created_at' => '2023-03-11 14:18:50',
                'updated_at' => '2023-03-20 16:13:37',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-11 00:00:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Software Testing',
                'slug' => 'software-testing',
                'slug_lock' => 0,
                'lead' => '<p>Phasellus posuere leo vitae quam faucibus cursus. Phasellus eu ex ultrices, facilisis ex at, aliquet felis. Cras id rutrum ante. Curabitur suscipit diam a facilisis laoreet. Duis id elit imperdiet eros vestibulum molestie. Nulla pellentesque justo enim,</p>',
                'body' => '<div class="d-flex flex-wrap text-nowrap mb-24">
<div class="me-24 pe-16">
<h5 class="h2 mb-4">85+</h5>
<span class="text-body">Tested projects</span></div>
<div class="me-24 pe-16">
<h5 class="h2 mb-4">200+</h5>
<span class="text-body">Happy clients</span></div>
</div>',
                'created_at' => '2023-03-11 14:21:26',
                'updated_at' => '2023-03-20 16:13:46',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-11 14:27:00',
                'locked_at' => NULL,
                'locked_by' => NULL,
            ),
        ));
        
        
    }
}