<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::match(['get', 'post'], '/','IndexController@execute');
Route::get('/page/{alias}','PageController@execute');
Route::auth();


Route::group(['prefix'=>'admin','middleware'=>'auth'], function() {
    //admin
    Route::get('/',function(){

    });

    //admin/pages
    Route::group(['prefix'=>'pages'],function () {

        //admin/pages
        Route::get('/', 'PagesController@execute' );

        //admin/pages/add
        Route::match(['get','post'], '/add', 'PagesAddController@execute');

        //admin/pages/edit/2
        Route::match(['get','post','delete'], '/edit/{page}', 'PagesEditController@execute');

    });

    //admin/post
    Route::group(['prefix'=>'post'],function () {

        //admin/post
        Route::get('/', 'PostController@execute' );

        //admin/post/add
        Route::match(['get','post'], '/add', 'PostAddController@execute');

        //admin/post/edit/2
        Route::match(['get','post','delete'], '/edit/{post}', 'PostEditController@execute');

    });

    //admin/services
    Route::group(['prefix'=>'services'],function () {

        //admin/services
        Route::get('/', 'ServicesController@execute' );

        //admin/services/add
        Route::match(['get','post'], '/add', 'ServicesAddController@execute');

        //admin/services/edit/2
        Route::match(['get','post','delete'], '/edit/{service}', 'ServicesEditController@execute');

    });

});
