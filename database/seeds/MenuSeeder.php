<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'home' => 'Home',
            'about_us' => 'About scc',
            'locations' => 'locations',
            'media' => 'media',
            'partnership' => 'partnership',
            'events' => 'events',
            'contact' => 'contact us',
        ]);
    }
}
