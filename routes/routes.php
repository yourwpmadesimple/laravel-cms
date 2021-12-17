<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function() {
    DB::insert('insert into posts(title, content) values(?, ?)', ["Wayne", "Laravel is the best thing that has happened to PHP"]);
});

Route::get('/contact', 'PostsController@contact');

Route::get('post/{id}', 'PostsController@show_post');

Route::get('/user', 'PostsController@user');