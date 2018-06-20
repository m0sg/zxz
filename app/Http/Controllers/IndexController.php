<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pages;
use App\Education;
use App\Post;
use App\Reviews;
use App\Services;
use App\Works;
use App\Socials;

class IndexController extends Controller
{
    public function execute(Request $request)
    {

        $pages = pages::all();
        $works = works::all();
        $educations = education::all();
        $posts = post::all();
        $reviews = reviews::all();
        $services = services::all();
        $socials = socials::all();


        $menu = array();
        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'alias' => $page->alias);
            array_push($menu, $item);
        }

        $item = array('title' => 'Услуги', 'alias' => 'services');
        array_push($menu, $item);

        $item = array('title' => 'Резюме', 'alias' => 'resume');
        array_push($menu, $item);

        $item = array('title' => 'Блог', 'alias' => 'blog');
        array_push($menu, $item);

        $item = array('title' => 'Контакты', 'alias' => 'contact');
        array_push($menu, $item);

//        dd($menu);
        return view('site.index', array(

            'menu' => $menu,
            'pages' => $pages,
            'services' => $services,
            'works' => $works,
            'educations' => $educations,
            'posts' => $posts,
            'reviews' => $reviews,
            'socials' => $socials,
        ));
    }
}
