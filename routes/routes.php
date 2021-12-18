<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Post;

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

/*
|--------------------------------------------------------------------------
|Database Raw SQL Queries
|--------------------------------------------------------------------------
|
*/

/** Inserting Data to the Database **/

// Route::get('/create', function() {
//     DB::insert('insert into posts(title, content)
//     values
//         ("React JS", "A JavaScript library for building user interfaces"),
//         ("PHP", "PHP is a popular general-purpose scripting language that is especially suited to web development."),
//         ("Laravel", "Laravel is a web application framework with expressive, elegant syntax.")'
//     );
// });

// /** Reading Data from the Database **/
// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id > 0');
//     foreach($results as $post){
//         echo "<h1>$post->title</h1>
//         <hr/>
//         <p>$post->content</p>";
//     }
// });

// /** Updating Data in the Database **/
// Route::get('/update', function() {
//     $update = DB::update('update posts set title = "Laravel" where id = ?', [1]);
//     return $update;
// });

// /** Deleting Data from the Database **/
// Route::get('/delete', function() {
//     $delete = DB::delete('delete from posts where id > 0');
//     return $delete;
// });

/*
|--------------------------------------------------------------------------
|ELOQUENT ORM (Object Relational Model)
|--------------------------------------------------------------------------
*/

Route::get('eloquent/read', function() {
    // Retrieve information from the database
    header('Content-Type: application/json');
    $posts = Post::all();

    foreach($posts as $post) {
        echo '<pre>';
        echo json_encode(json_decode($post), JSON_PRETTY_PRINT);
        echo '</pre>';
    }
});


Route::get('eloquent/find', function(){
    $posts = Post::find(1);

    return $posts;
});

/*
|--------------------------------------------------------------------------
|ELOQUENT - READING / FINDING WITH RESTRAINTS
|--------------------------------------------------------------------------
*/

Route::get('eloquent/findwhere', function() {
    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
    echo '<pre>';
    echo json_encode(json_decode($posts), JSON_PRETTY_PRINT);
    echo '</pre>';
});