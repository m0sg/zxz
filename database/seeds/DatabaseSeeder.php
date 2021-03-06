<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(WorksTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
//        $this->call(PostTableSeeder::class);
        $this->call(SocialsTableSeeder::class);





    }
}
