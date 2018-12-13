<?php

use Illuminate\Database\Seeder;

class SiteBlocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('wp_site_blocks');
        $table->truncate();
        $table->insert([
            ['name' => 'About', 'wp_name' => 'about', 'icon' => ''],
            ['name' => 'Awards', 'wp_name' => 'awards', 'icon' => 'fa-trophy'],
            ['name' => 'Blog', 'wp_name' => 'blog', 'icon' => 'fa-blogger-b'],
            ['name' => 'Call to Action', 'wp_name' => 'cta', 'icon' => 'fa-phone'],
            ['name' => 'Checklist', 'wp_name' => 'checklist', 'icon' => 'fa-th-list'],
            ['name' => 'Clients', 'wp_name' => 'clients', 'icon' => 'fa-users'],
            ['name' => 'Contact', 'wp_name' => 'contact', 'icon' => 'fa-phone-square'],
            ['name' => 'Crypto', 'wp_name' => 'crypto', 'icon' => ''],
            ['name' => 'Education', 'wp_name' => 'education', 'icon' => 'fa-graduation-cap'],
            ['name' => 'FAQ', 'wp_name' => 'faq', 'icon' => ''],
            ['name' => 'Features', 'wp_name' => 'features', 'icon' => ''],
            ['name' => 'Feedback', 'wp_name' => 'feedback', 'icon' => 'fa-comments'],
            ['name' => 'Footer', 'wp_name' => 'footer', 'icon' => ''],
            ['name' => 'Gallery', 'wp_name' => 'gallery', 'icon' => 'fa-images'],
            ['name' => 'Header', 'wp_name' => 'header', 'icon' => 'fa-heading'],
            ['name' => 'Hero Block', 'wp_name' => 'hero', 'icon' => ''],
            ['name' => 'Hobbies', 'wp_name' => 'hobbies', 'icon' => ''],
            ['name' => 'Languages', 'wp_name' => 'languages', 'icon' => 'fa-language'],
            ['name' => 'Logos', 'wp_name' => 'logos', 'icon' => ''],
            ['name' => 'Numbers', 'wp_name' => 'numbers', 'icon' => 'fa-sort-numeric-desc'],
            ['name' => 'Portfolio', 'wp_name' => 'portfolio', 'icon' => 'fa-briefcase'],
            ['name' => 'Pricing', 'wp_name' => 'pricing', 'icon' => 'fa-dollar'],
            ['name' => 'Profile', 'wp_name' => 'profile', 'icon' => 'fa-user'],
            ['name' => 'Services', 'wp_name' => 'services', 'icon' => 'fa-amazon'],
            ['name' => 'Skills', 'wp_name' => 'skills', 'icon' => 'fa-check-square'],
            ['name' => 'Social media', 'wp_name' => 'socialmedia', 'icon' => 'fa-facebook-official'],
            ['name' => 'Sample page', 'wp_name' => 'sample-page', 'icon' => 'fa-file-alt'],
            ['name' => 'Team', 'wp_name' => 'team', 'icon' => 'fa-users'],
            ['name' => 'Newsletter', 'wp_name' => 'newsletter', 'icon' => 'fa-newspaper-o'],
            ['name' => 'Work', 'wp_name' => 'work', 'icon' => 'fa-building'],
        ]);
    }
}
