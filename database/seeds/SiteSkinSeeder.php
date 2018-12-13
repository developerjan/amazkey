<?php

use Illuminate\Database\Seeder;

class SiteSkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = DB::table('wp_siteskins');
	    $table->truncate();
	    $table->insert([
		    // site type - Personal
		    [
		    	'site_type_id' => 1,
			    'name' => 'Musician',
			    'icon' => 'fa-music',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 1,
			    'name' => 'Actor',
			    'icon' => 'fa-film',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 1,
			    'name' => 'Politician',
			    'icon' => 'fa-suitcase',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 1,
			    'name' => 'Teacher',
			    'icon' => 'fa-book',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 1,
			    'name' => 'Developer',
			    'icon' => 'fa-laptop',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 1,
			    'name' => 'Lawyer',
			    'icon' => 'fa-university',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 1,
			    'name' => 'Architect',
			    'icon' => 'fa-pencil',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 1,
			    'name' => 'Sportsman',
			    'icon' => 'fa-soccer-ball-o',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 1,
			    'name' => 'Other',
			    'icon' => 'fa-user',
			    'style' => ''
		    ],

		    // site type - Business Site
		    [
			    'site_type_id' => 2,
			    'name' => 'BPO',
			    'icon' => 'fa-building-o',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 2,
			    'name' => 'Real Estate',
			    'icon' => 'fa-building',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 2,
			    'name' => 'Software',
			    'icon' => 'fa-connectdevelop',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 2,
			    'name' => 'Offline Business',
			    'icon' => 'fa-handshake-o',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 2,
			    'name' => 'Online Business',
			    'icon' => 'fa-globe',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 2,
			    'name' => 'Other',
			    'icon' => 'fa-user',
			    'style' => ''
		    ],

		    // site type - App Site
		    [
			    'site_type_id' => 3,
			    'name' => 'iPhone App',
			    'icon' => 'fa-apple',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 3,
			    'name' => 'Android App',
			    'icon' => 'fa-android',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 3,
			    'name' => 'Desktop App',
			    'icon' => 'fa-desktop',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 3,
			    'name' => 'Web App',
			    'icon' => 'fa-edge',
			    'style' => ''
		    ],

		    // site type - Landing Page
		    [
			    'site_type_id' => 4,
			    'name' => 'Coming Soon',
			    'icon' => 'fa-calendar-check-o',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 4,
			    'name' => 'Single Product',
			    'icon' => 'fa-cube',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 4,
			    'name' => 'Introduction',
			    'icon' => 'fa-arrow-circle-up',
			    'style' => ''
		    ],
		    [
			    'site_type_id' => 4,
			    'name' => 'Newsletter',
			    'icon' => 'fa-list-alt',
			    'style' => ''
		    ]
	    ]);
    }
}
