<?php

use Illuminate\Database\Seeder;
use App\Socials;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (socials::count()  == 0){
            socials::create([
                'icon' => 'fa fa-facebook',
                'social_link' => '#',
            ]);
            socials::create([
                'icon' => 'fa fa-twitter',
                'social_link' => '#',
                ]);
            socials::create([
                'icon' => 'fa fa-instagram',
                'social_link' => '#',
                ]);
            socials::create([
                'icon' => 'fa fa-youtube-play',
                'social_link' => '#',
                ]);
            socials::create([
                'icon' => 'fa fa-pinterest',
                'social_link' => '#',
                ]);

        }
    }
}
