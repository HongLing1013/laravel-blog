<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts/admin' , [ PostController::class, 'admin'] ); //管理頁面
Route::get('/posts/show/{post}' , [ PostController::class, 'show'] ); //文章呈現頁面

// CRUD
Route::post('/posts' , [ PostController::class, 'store'] ); //Create
Route::get('/posts/{post}' , [ PostController::class, 'show'] ); //Read
Route::get('/posts/{post}' , [ PostController::class, 'update'] ); //Update
Route::delete('/posts/{post}' , [ PostController::class, 'destroy'] ); //Delete

// 3 routing: create / edit / list
Route::get('/posts/create' , [ PostController::class, 'create'] ); //Create
Route::get('/posts/{post}/edit',[ PostController::class, 'edit'] ); //Update
Route::get('/posts', [ PostController::class, 'index'] ); //Read // laravel 8.1的寫法
// Route::get('/posts', 'PostController@index'); //Read // laravel 舊的寫法


// Route::get('/posts', function () {
//     $post =[ 1,2,3,4,5 ]; // 塞假資料
//     return view('posts.list' ,['posts' => $post]); 
//     // post.list為顯示頁的檔名 , posts為需要帶入的資料變數名稱
//     // 如果所以view層收到的變數名稱為posts
// });

// Route::get('/posts/{id}', function ($id) {
//     return view('posts.show');
// });
