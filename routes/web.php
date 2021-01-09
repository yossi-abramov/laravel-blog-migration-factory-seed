<?php

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
    // Test if DB is connected
    try{
        $db_connection = DB::connection()->getPdo();
    }catch(Exception $e){
        return 'No DB connection found.';
    }

    try{
        $posts = App\Models\Post::all();
    }catch(Exception $e){
        return "Please add posts to DB by running: <br>
         php artisan migrate <br>
         php artisan db:seed";
    }

    if(count($posts) === 0){
        return 'Please add posts to DB.';
    }

    return view('welcome', ['posts' => $posts]);
});

Route::get('/blog/{slug}', function (Request $request, $slug) {

    $post = App\Models\Post::where('slug', $slug)->firstOrFail();
    return view('post', ['post' => $post]);

})->name('blog');
