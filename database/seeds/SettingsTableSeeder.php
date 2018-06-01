<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => 'Laravels Blog',
        	'address' => 'California',
        	'contact_number' => ' 909343082',
        	'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
