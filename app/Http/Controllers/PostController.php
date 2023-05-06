<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function admin()
    {
        $posts = Post::all();
        return view('posts.admin' , [ 'posts' => $posts ]);//管理頁面給一個文章列表
    }

    public function index()
    {
        // 撈文章
        $posts = Post::all();

        return view('posts.index' , ['post' => $posts]); //veiw 在posts資料夾下的index.blade.php 把值傳進去
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->fill($request->all());//把從create.blase.php收到的資料填入post存入$post
        // $post->user_id = Auth::id(); //取得USER ID
        $post->save();//存入資料庫

        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('posts.showByAdmin' , ['post' => $post]);
    }
}
