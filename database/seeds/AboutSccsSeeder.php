<?php

use Illuminate\Database\Seeder;

class AboutSccsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_sccs_bodies')->insert([
            'title' => 'About Us',
            'body' => 'The Saints Community Church is a Church Ministry.',
            'about_btn_title' => 'GET TO KNOW US ',
            'contact_btn_title' => 'CONNECT WITH THE GROUP ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
