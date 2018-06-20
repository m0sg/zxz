<?php

use Illuminate\Database\Seeder;
use App\Works;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Works::count()  == 0){
            Works::create([
                'name' => 'APPLE ',
                'date' => 'OCT 2015 - JUNE 2016',
                'text' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..",
            ]);

            Works::create([
                'name' => 'GOOGLE ',
                'date' => 'OCT 2016 - JUNE 2017',
                'text' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..",
            ]);

        }
    }
}
