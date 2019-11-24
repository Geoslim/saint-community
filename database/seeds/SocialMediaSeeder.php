<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_medias')->insert([
            'twitter' => 'saint-twitter',
            'play_store' => 'saint-playstore',
            'facebook' => 'saint-facebook',
            'youtube' => 'saint-youtube',
            'instagram' => 'saint-instagram',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
