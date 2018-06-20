<?php

use Illuminate\Database\Seeder;
use App\Pages;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        if (pages::count()  == 0){
            pages::create([
                'name' => 'home',
                'alias' => 'home',
                'images' => '1600x1000.jpg',
                'text' => '<h2>Hello! i\'m</h2><h1>Martin Luther<h1><p>WEB DESIGN | DIGITAL MARKETING | UX DESIGN | WEB DEVELOPMENT | MOBILE APPS</p>',
            ]);
            pages::create([
                'name' => 'home',
                'alias' => 'home',
                'images' => '1600x1000.jpg',
                'text' => '<h2>Hello! i\'m</h2><h1>Martin Luther<h1><p>WEB DESIGN | DIGITAL MARKETING | UX DESIGN | WEB DEVELOPMENT | MOBILE APPS</p>',
            ]);

            pages::create([
                'name' => 'about',
                'alias' => 'about',
                'images' => '550x500.jpg',
                'text' => '<h3>Hello! i\'m Martin Luther</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><br><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>',
            ]);

        }
    }
}
