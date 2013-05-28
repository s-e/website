<?php

/*
|--------------------------------------------------------------------------
| Shared View Variables
|--------------------------------------------------------------------------
*/

View::share('title', 'Welcome!');
View::share('description', 'Laravel, the elegant PHP framework for web artisans. Start enjoying development again.');
View::share('analytics', Config::get('site.ga'));

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', array(
    'as'    => 'home',
    'uses'  => 'HomeController@showHome',
));

Route::get('four', array(
    'as'    => 'home',
    'uses'  => 'HomeController@showHome',
));

Route::get('/docs/{topic?}', array(
    'as'    => 'docs',
    'uses'  => 'DocumentationController@showTopic',
));

App::missing(function($exception)
{
    return Response::view('four', array(), 404);
});
