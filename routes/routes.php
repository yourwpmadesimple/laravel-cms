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

Route::get('/insert', function() {
    DB::insert('insert into posts(title, content) values(?, ?)', 
        ["React JS", "The future of webdesign"],
        ["PHP", "One of the best languages around"]
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