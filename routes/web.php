<?php

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '5.8');
}

if (! defined('SHOW_VAPOR')) {
    define('SHOW_VAPOR', random_int(1, 2) === 1);
}

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');

Route::get('partners', 'PartnersController@index');
Route::get('partner/{partner}', 'PartnersController@show');

Route::get('/', function () {
    // return view('marketing');
    // dd(App\User::inRandomOrder()->first()->id);
});

Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/save', 'PostController@store')->name('post.store');
Route::resource('article', 'ArticleController');