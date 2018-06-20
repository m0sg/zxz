<?php

use Illuminate\Database\Seeder;
use App\Education;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (education::count()  == 0){
            education::create([
                'name' => 'UNIVERSITY',
                'date' => 'OCT 2010 - JUNE 2013',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
            ]);
            education::create([
                'name' => 'DESIGN AND ART',
                'date' => 'OCT 2013 - JUNE 2015',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
            ]);
        }
    }
}
