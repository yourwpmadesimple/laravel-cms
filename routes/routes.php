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

/** Inserting Data to the Database **/

Route::get('/create', function() {
    DB::insert('insert into posts(title, content)
    values
        ("React JS", "A JavaScript library for building user interfaces"),
        ("PHP", "PHP is a popular general-purpose scripting language that is especially suited to web development."),
        ("Laravel", "Laravel is a web application framework with expressive, elegant syntax.")'
    );
});

/** Reading Data from the Database **/
Route::get('/read', function(){
    $results = DB::select('select * from posts where id > 0');
    foreach($results as $post){
        echo "<h1>$post->title</h1>
        <hr/>
        <p>$post->content</p>";
    }
});

/** Updating Data in the Database **/
Route::get('/update', function() {
    $update = DB::update('update posts set title = "Laravel" where id = ?', [1]);
    return $update;
});

/** Deleting Data from the Database **/
Route::get('/delete', function() {
    $delete = DB::delete('delete from posts where id > 0');
    return $delete;
});