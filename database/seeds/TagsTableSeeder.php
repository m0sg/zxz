<?php

use Illuminate\Database\Seeder;
use App\Tags;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (tags::count()  == 0){
            tags::create([
                'name' => 'тег 1',
            ]);
            tags::create([
                'name' => 'тег 2',
            ]);
            tags::create([
                'name' => 'тег 3',
            ]);
            tags::create([
                'name' => 'тег 4',
            ]);
            tags::create([
                'name' => 'тег 5',
            ]);
            tags::create([
                'name' => 'тег 6',
            ]);
        }
    }
}
