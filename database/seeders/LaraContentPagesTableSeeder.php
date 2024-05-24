<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraContentPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_content_pages')->delete();
        
        \DB::table('lara_content_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Home page',
                'template' => 'standard',
                'ishome' => 1,
                'menuroute' => '/',
                'slug' => 'home-page',
                'slug_lock' => 0,
                'lead' => NULL,
                'body' => '<p>Erat pharetra sed at fringilla etiam nullam platea fringilla. Gravida sodales sit mauris amet massa justo. Egestas ipsum amet tortor hendrerit amet phasellus adipiscing. Eget porta posuere pellentesque sed commodo gravida dignissim dignissim iaculis. Elementum nibh duis at in.</p>',
                'created_at' => '2017-09-02 12:00:00',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2019-02-28 00:00:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 101,
            ),
            1 => 
            array (
                'id' => 16,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'About our Company',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => '/about',
                'slug' => 'about',
                'slug_lock' => 0,
                'lead' => NULL,
                'body' => '<p>[kolom_1van2]</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae iaculis nunc, vitae commodo magna. Donec ac libero mi. Maecenas lacinia quam ullamcorper nisl eleifend, id bibendum justo cursus. Pellentesque lorem elit, pharetra at nisi nec, molestie venenatis velit. In euismod pretium mauris id tincidunt. Nunc ullamcorper dapibus arcu. Fusce sit amet lectus hendrerit, dapibus felis sit amet, aliquam sapien. Cras luctus orci vitae purus faucibus, ac sodales nibh cursus.&nbsp;</p>
<p>[/kolom_1van2]</p>
<p>[kolom_2van2]</p>
<p>Nunc sodales finibus turpis vitae semper. Nam tempus porta neque a molestie. Morbi nunc risus, pretium non lorem at, imperdiet volutpat sapien. Quisque eget mauris dolor. Sed a nulla sed dui euismod mollis. Aenean non nisi nec odio aliquet viverra. Etiam pulvinar sed lectus vitae bibendum. Aenean tincidunt quam leo, eu blandit metus fermentum eget. Vestibulum tincidunt eget justo vitae pulvinar. Ut commodo gravida feugiat.</p>
<p>[/kolom_2van2]</p>',
                'created_at' => '2017-11-10 11:44:07',
                'updated_at' => '2024-03-02 17:14:02',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2019-08-13 00:00:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 102,
            ),
            2 => 
            array (
                'id' => 19,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Meet Our Team',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'team-index-module-nl',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eleifend eleifend. Nam consectetur enim massa, non hendrerit nulla maximus quis. Nam dictum, nunc eu viverra semper, ante nibh gravida ante, sit amet lobortis diam lectus vel arcu. Nullam mollis justo quis euismod sollicitudin. Aliquam et ante ut nunc facilisis ultrices eleifend vel justo. Vestibulum aliquam, mi ac condimentum placerat, magna ex tristique mauris, ut porta dui enim ut massa. Nunc et tortor ac augue tincidunt scelerisque eget id ante. In in metus in neque porta elementum et ullamcorper enim.</p>',
                'created_at' => '2017-11-10 11:47:23',
                'updated_at' => '2024-04-19 11:18:37',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-16 00:00:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8009,
            ),
            3 => 
            array (
                'id' => 32,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Blog',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => '',
                'slug' => 'blog-index-module-nl',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet erat est. Nulla maximus est eget lorem ultrices, eget vulputate ipsum blandit. Proin dapibus tortor ligula, sit amet facilisis risus facilisis aliquet. Fusce pharetra ipsum quis aliquam pretium.</p>',
                'created_at' => '2017-11-26 17:50:09',
                'updated_at' => '2024-03-02 17:56:17',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-13 15:43:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8001,
            ),
            4 => 
            array (
                'id' => 38,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Contact form Inquiry',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'contactform-email-nl',
                'slug_lock' => 1,
                'lead' => '',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum feugiat sem, pharetra maximus justo interdum non. Vestibulum pharetra tempus eros. Aliquam porttitor interdum metus, sed eleifend felis venenatis sit amet. Morbi ac erat velit.&nbsp;</p>',
                'created_at' => '2018-01-21 16:46:08',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-08-22 00:00:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'email',
                'position' => 9001,
            ),
            5 => 
            array (
                'id' => 53,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Upcoming Events',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'event-index-module-nl',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque ex sed turpis suscipit cursus. Nullam aliquam sem eu elit aliquet varius. Nulla rhoncus eleifend dui eget condimentum. Donec rhoncus leo dui, sed pretium diam vehicula vitae. Donec nisi purus, aliquam nec luctus id, blandit eu orci.</p>',
                'created_at' => '2018-03-23 14:27:45',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-16 12:08:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8005,
            ),
            6 => 
            array (
                'id' => 59,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Our Services',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'service-index-module-nl',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ac imperdiet ante. Vivamus rhoncus velit venenatis ante placerat pulvinar. Quisque in enim nunc. Integer rhoncus pellentesque dui sed fringilla. Mauris efficitur mauris non rhoncus volutpat. Nunc id mi ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed pulvinar magna eget leo semper tempor.</p>
<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sagittis metus eget arcu cursus vestibulum. In eget ante ac arcu egestas rutrum ut vitae ipsum. Morbi suscipit eu magna in ornare. Integer vitae enim porttitor, semper est vel, interdum lacus. Proin aliquet maximus tincidunt. Donec id sapien vel eros porttitor congue. Aliquam fermentum libero eu enim luctus, at pharetra turpis cursus. Sed purus odio, varius vel ipsum in, pretium lobortis nisi. Vestibulum condimentum, elit et volutpat ornare, lectus est consectetur lorem, non feugiat felis lectus at elit.</p>',
                'created_at' => '2018-11-29 16:29:52',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2019-08-18 00:00:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8008,
            ),
            7 => 
            array (
                'id' => 1059,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Contact',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'contactform-form-module-nl',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '<h2 class="h4 mb-24">Development</h2>
<ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
<li class="pb-1 mb-2">
<div class="row">
<div class="col-1 px-0"><i class="fad fa-lg fa-map-marker-alt text-primary me-8"><!-- icon --></i></div>
<div class="col-11">Schipholweg 66, 2035 LB, Haarlem</div>
</div>
</li>
<li class="pb-1 mb-2">
<div class="row">
<div class="col-1 px-0"><i class="fad fa-phone text-primary"><!-- icon --></i></div>
<div class="col-11">085 2006261</div>
</div>
</li>
<li class="pb-1 mb-2">
<div class="row">
<div class="col-1 px-0"><i class="fad fa-clock text-primary"><!-- icon --></i></div>
<div class="col-11"><strong class="text-nav">Mon - Fri</strong>: 9:00 - 17:00</div>
</div>
</li>
</ul>
<h2 class="h4 mt-24 mb-24">Sales &amp; Support</h2>
<ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
<li class="pb-1 mb-2">
<div class="row">
<div class="col-1 px-0"><i class="fad fa-lg fa-map-marker-alt text-primary me-8"><!-- icon --></i></div>
<div class="col-11">Yme Kuiperweg 24, 8448 RT, Heerenveen</div>
</div>
</li>
<li class="pb-1 mb-2">
<div class="row">
<div class="col-1 px-0"><i class="fad fa-phone text-primary"><!-- icon --></i></div>
<div class="col-11">085 2006261</div>
</div>
</li>
<li class="pb-1 mb-2">
<div class="row">
<div class="col-1 px-0"><i class="fad fa-clock text-primary"><!-- icon --></i></div>
<div class="col-11"><strong class="text-nav">Mon - Fri</strong>: 9:00 - 17:00</div>
</div>
</li>
</ul>',
                'created_at' => '2019-08-09 12:45:30',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2019-08-09 12:45:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8003,
            ),
            8 => 
            array (
                'id' => 1061,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Downloads',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'doc-index-module-nl',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '',
                'created_at' => '2019-08-11 13:43:26',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2019-08-11 13:45:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8004,
            ),
            9 => 
            array (
                'id' => 1063,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Our Photo Album',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'gallery-index-module-nl',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '',
                'created_at' => '2019-08-11 18:44:36',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2019-08-11 18:45:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8007,
            ),
            10 => 
            array (
                'id' => 1065,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Our Videos',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'video-index-module-nl',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '',
                'created_at' => '2019-08-11 21:04:06',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2019-08-11 21:05:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8013,
            ),
            11 => 
            array (
                'id' => 1071,
                'user_id' => 2,
                'language_parent' => 1,
                'language' => 'en',
                'title' => '[EN] homepage',
                'template' => NULL,
                'ishome' => 1,
                'menuroute' => '/',
                'slug' => 'en-homepage',
                'slug_lock' => 0,
                'lead' => NULL,
                'body' => '',
                'created_at' => '2020-03-09 14:34:01',
                'updated_at' => '2023-10-13 16:21:08',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2020-03-09 14:34:01',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 101,
            ),
            12 => 
            array (
                'id' => 1072,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Privacy',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => '/privacy',
                'slug' => 'privacy',
                'slug_lock' => 1,
                'lead' => NULL,
                'body' => '<p>Op onze school gaan wij zorgvuldig om met de privacy van onze leerlingen. De praktische invulling is vastgelegd in het privacyreglement dat Ambion Holding voor al haar scholen heeft opgesteld. Het privacyreglement wordt met instemming van de GMR vastgesteld.</p>
<p>Op <a href="https://www.ambionholding.nl/nl/over-ambion-1/privacy" target="_blank" rel="noopener">www.ambionholding.nl</a> kunt u dit beleid na vaststelling terugvinden. Ondertussen neemt de school waar mogelijk al praktische maatregelen om de privacy van de leerlingen en medewerkers te waarborgen.</p>
<p>Mocht u in de tussentijd vragen of opmerkingen hebben, dan kunt u dit met de directeur bespreken. Eventueel wordt uw vraag of opmerking in samenwerking met de functionaris gegevensbescherming in behandeling genomen.</p>
<p>Functionaris gegevensbescherming<br />Ieder schoolbestuur is verplicht een functionaris gegevensbescherming aan te stellen. Voor onze stichting is dit Ferenc Jacobs. U kunt hem bereiken via <a href="mailto:privacy@ambion.nl">privacy@ambion.nl</a>.</p>
<hr />',
                'created_at' => '2020-03-14 16:28:56',
                'updated_at' => '2024-03-28 13:04:43',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2020-03-14 16:30:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 114,
            ),
            13 => 
            array (
                'id' => 1074,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Oops',
                'template' => NULL,
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => '404',
                'slug_lock' => 0,
                'lead' => NULL,
                'body' => '',
                'created_at' => '2020-08-04 16:14:37',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => NULL,
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 9002,
            ),
            14 => 
            array (
                'id' => 1084,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Services',
                'template' => NULL,
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'services',
                'slug_lock' => 0,
                'lead' => '',
                'body' => '',
                'created_at' => '2023-03-16 14:58:26',
                'updated_at' => '2023-03-16 15:04:56',
                'deleted_at' => '2023-03-16 15:04:56',
                'publish' => 1,
                'publish_from' => '2023-03-16 14:58:26',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 0,
            ),
            15 => 
            array (
                'id' => 1085,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Classic form',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'classicform-form-module-nl',
                'slug_lock' => 1,
                'lead' => '',
                'body' => '',
                'created_at' => '2023-03-19 17:08:55',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-19 17:08:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8002,
            ),
            16 => 
            array (
                'id' => 1086,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Thank you',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => '/classic-form/thank-you',
                'slug' => 'classic-form-thank-you',
                'slug_lock' => 0,
                'lead' => '',
                'body' => '',
                'created_at' => '2023-03-19 17:09:38',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-19 17:09:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 113,
            ),
            17 => 
            array (
                'id' => 1087,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Classicform Email Title',
                'template' => NULL,
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'classicform-email-nl',
                'slug_lock' => 1,
                'lead' => '',
                'body' => '',
                'created_at' => '2023-03-19 20:42:25',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-03-19 20:42:25',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'email',
                'position' => 9003,
            ),
            18 => 
            array (
                'id' => 1090,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Classic',
                'template' => 'standard',
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'classic',
                'slug_lock' => 0,
                'lead' => '',
                'body' => '<p>[kolom_1van2]</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae iaculis nunc, vitae commodo magna. Donec ac libero mi. Maecenas lacinia quam ullamcorper nisl eleifend, id bibendum justo cursus. Pellentesque lorem elit, pharetra at nisi nec, molestie venenatis velit. In euismod pretium mauris id tincidunt. Nunc ullamcorper dapibus arcu. Fusce sit amet lectus hendrerit, dapibus felis sit amet, aliquam sapien. Cras luctus orci vitae purus faucibus, ac sodales nibh cursus.&nbsp;</p>
<p>[/kolom_1van2]</p>
<p>[kolom_2van2]</p>
<p>Nunc sodales finibus turpis vitae semper. Nam tempus porta neque a molestie. Morbi nunc risus, pretium non lorem at, imperdiet volutpat sapien. Quisque eget mauris dolor. Sed a nulla sed dui euismod mollis. Aenean non nisi nec odio aliquet viverra. Etiam pulvinar sed lectus vitae bibendum. Aenean tincidunt quam leo, eu blandit metus fermentum eget. Vestibulum tincidunt eget justo vitae pulvinar. Ut commodo gravida feugiat.</p>
<p>[/kolom_2van2]</p>
<p>&nbsp;</p>',
                'created_at' => '2023-03-23 14:12:40',
                'updated_at' => '2023-05-11 11:02:03',
                'deleted_at' => '2023-05-11 11:02:03',
                'publish' => 1,
                'publish_from' => '2023-03-23 14:12:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 0,
            ),
            19 => 
            array (
                'id' => 1096,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'User Profile Module Page',
                'template' => NULL,
                'ishome' => 0,
                'menuroute' => NULL,
                'slug' => 'user-profile-module-nl',
                'slug_lock' => 1,
                'lead' => '',
                'body' => '',
                'created_at' => '2023-10-13 20:42:44',
                'updated_at' => '2023-10-17 15:34:20',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2023-10-13 20:42:44',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'module',
                'position' => 8012,
            ),
            20 => 
            array (
                'id' => 1097,
                'user_id' => 2,
                'language_parent' => NULL,
                'language' => 'nl',
                'title' => 'Featured test',
                'template' => 'featured_left_responsive',
                'ishome' => 0,
                'menuroute' => '',
                'slug' => 'featured-test',
                'slug_lock' => 0,
                'lead' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel felis eget mi varius pellentesque. Suspendisse potenti. In vehicula ac nulla in condimentum. Sed bibendum, lectus id venenatis luctus, ante nisi elementum nulla, at commodo arcu arcu ut leo. Nunc cursus vehicula finibus. Mauris accumsan ante id aliquet placerat.</p>
<p>Mauris iaculis purus lacus, eu pulvinar lectus sollicitudin id. Suspendisse a venenatis orci, at consequat dui. Vestibulum purus neque, posuere sit amet enim eget, accumsan elementum tellus. In venenatis volutpat malesuada. Integer congue felis sed nulla vulputate ultrices a accumsan ex. Vivamus fermentum, sapien ac dignissim suscipit, est magna ullamcorper quam, eu laoreet leo urna et felis.</p>',
                'body' => '<p>&nbsp;</p>
<p>Vestibulum id arcu tincidunt, pellentesque velit ut, luctus sapien. Phasellus maximus est nisl, nec luctus quam efficitur porta. Morbi fermentum, turpis eu ultricies pretium, velit mauris semper dui, non bibendum nunc nunc dictum metus. Curabitur accumsan viverra sem elementum tincidunt. Donec gravida, neque nec venenatis mollis, leo eros dapibus nulla, nec scelerisque leo urna sed metus. Nulla facilisi. Cras nec elit et mauris aliquam consequat. Sed dignissim, enim mollis finibus faucibus, elit nunc tincidunt lacus, nec pellentesque felis nibh vel felis. Donec vel tempor neque, ac vehicula risus. Fusce id malesuada justo. Etiam ac venenatis augue.</p>
<p>Sed eget nisi lorem. Nam vel egestas nisl, congue placerat ante. Integer vitae hendrerit lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam ligula lectus, maximus eu lorem sed, venenatis hendrerit tortor. Fusce commodo, neque eget rhoncus fringilla, ex massa venenatis velit, non ultricies dolor purus nec nulla. Proin posuere viverra finibus. Vivamus cursus magna ac commodo ultricies. Donec pharetra, dolor in dignissim ultrices, nunc velit efficitur nibh, quis sodales orci mauris in risus. Morbi lorem quam, eleifend ac mi vitae, aliquet pellentesque elit. Nullam dui enim, eleifend in est a, aliquam scelerisque elit. In posuere rutrum rutrum. Sed vitae est sed est viverra mollis. Ut sollicitudin metus augue, a malesuada quam suscipit ac. Donec sollicitudin congue risus eget pellentesque.</p>',
                'created_at' => '2024-05-23 15:46:29',
                'updated_at' => '2024-05-23 16:05:13',
                'deleted_at' => NULL,
                'publish' => 1,
                'publish_from' => '2024-05-23 00:00:00',
                'show_in_app' => 0,
                'locked_at' => NULL,
                'locked_by' => NULL,
                'cgroup' => 'page',
                'position' => 9004,
            ),
        ));
        
        
    }
}