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
            'twitter' => 'saintscommlagos',
            'play_store' => 'org.livingwordmedia.saintcommunityc',
            'facebook' => 'saintscommunity.net',
            'youtube' => 'UCnWoDxbbcGFk8Y0-d-qPYEw',
            'instagram' => 'saintscommunitychurchofficial',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
