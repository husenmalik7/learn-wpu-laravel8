<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PegawaiController;
use App\Models\Post;
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

/*
Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "ujang",
        "email" => "brudin@gmail.com",
        "address" => "bandung",
        "image" => "orange.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Route::get('posts/{post}', [PostController::class, 'show']); //use id default
Route::get('posts/{post:slug}', [PostController::class, 'show']); //use slug (where slug = ?)

