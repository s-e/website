<?php

/*
|--------------------------------------------------------------------------
| Shared View Variables
|--------------------------------------------------------------------------
*/

View::share('title', 'Welcome!');
View::share('description', 'The Laravel PHP Framework.');
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

Route::get('/docs/{topic?}', array(
    'as'    => 'docs',
    'uses'  => 'DocumentationController@showTopic',
));
