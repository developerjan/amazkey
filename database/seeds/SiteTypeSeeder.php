<?php

use Illuminate\Database\Seeder;

class SiteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = DB::table('wp_sitetypes');
	    $table->truncate();
	    $table->insert([
		    [
		        'type_name' => 'Personal',
                'icon' => 'fa-user',
                'default_blocks' => json_encode(
                    [
                        'About',
                        'Awards',
                        'Blog',
                        'Call to Action',
                        'Checklist',
                        'Clients',
                        'Contact',
                        'Crypto',
                        'Education',
                        'FAQ',
                        'Feedback',
                        'Footer',
                        'Gallery',
                        'Header',
                        'Hero Block',
                        'Hobbies',
                        'Languages',
                        'Numbers',
                        'Portfolio',
                        'Profile',
                        'Services',
                        'Skills',
                        'Social Media',
                        'Work Experience',
                    ]
                )
            ],

		    [
		        'type_name' => 'Business Site',
                'icon' => 'fa-building-o',
                'default_blocks' => json_encode(
                    [
                        'About',
                        'Awards',
                        'Blog',
                        'Call to Action',
                        'Clients',
                        'Contact',
                        'FAQ',
                        'Feedback',
                        'Footer',
                        'Gallery',
                        'Header',
                        'Hero Block',
                        'Numbers',
                        'Portfolio',
                        'Services',
                        'Social Media',
                        'Features',
                        'Team',
                        'Newsletter',
                        'Logos',
                    ]
                )
            ],
		    [
		        'type_name' => 'App Site',
                'icon' => 'fa-android',
                'default_blocks' => json_encode(
                    [
                        'About',
                        'Awards',
                        'Blog',
                        'Call to Action',
                        'Checklist',
                        'Contact',
                        'FAQ',
                        'Feedback',
                        'Footer',
                        'Gallery',
                        'Header',
                        'Hero Block',
                        'Numbers',
                        'Social Media',
                        'Features',
                        'Team',
                        'Newsletter',
                        'Pricing',
                    ]
                )
            ],
		    [
		        'type_name' => 'Landing Page',
                'icon' => 'fa-list-alt',
                'default_blocks' => json_encode(
                    [
                        'About',
                        'Call to Action',
                        'Checklist',
                        'Clients',
                        'Contact',
                        'FAQ',
                        'Feedback',
                        'Footer',
                        'Gallery',
                        'Header',
                        'Hero Block',
                        'Numbers',
                        'Portfolio',
                        'Services',
                        'Social Media',
                        'Features',
                        'Team',
                        'Newsletter',
                        'Pricing',
                    ]
                )
            ]
	    ]);
    }
}
