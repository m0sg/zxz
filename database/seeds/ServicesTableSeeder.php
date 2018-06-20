<?php

use Illuminate\Database\Seeder;
use App\Services;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (services::count()  == 0){
            services::create([
                'name' => 'Android ',
                'icon' => 'fa-android',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
            ]);

            services::create([
                'name' => 'Apple IOS  ',
                'icon' => 'fa-apple',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
            ]);
            services::create([
                'name' => 'Design ',
                'icon' => 'fa-dropbox',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
            ]);

        }
    }
}
