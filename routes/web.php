<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/posts', function () {
    $post =[ 1,2,3,4,5 ]; // 塞假資料
    return view('posts.list' ,['posts' => $post]); 
    // post.list為顯示頁的檔名 , posts為需要帶入的資料變數名稱
    // 如果所以view層收到的變數名稱為posts
});

Route::get('/posts/{id}', function ($id) {
    return view('posts.show');
});
