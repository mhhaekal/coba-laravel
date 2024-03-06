<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "ini single post",
            "post" => $post
        ]);
    }
}

// Post::create([
//     'title' => 'Judul Pertama',
//     'category_id' => 1,
//     'slug'=>'judul-pertama',
//     'excerpt'=>'lorem ipsum pertama',
//     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo minima quia, aliquid harum aut deleniti nostrum suscipit ex sunt! Quia?</p>'
// ])
// Post::create([
//     'title' => 'Judul Kedua',
//     'category_id' => 2,
//     'slug'=>'judul-kedua',
//     'excerpt'=>'lorem ipsum kedua',
//     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo minima quia, aliquid harum aut deleniti nostrum suscipit ex sunt! Quia?</p>'
// ])
// Post::create([
//     'title' => 'Judul Ketiga',
//     'category_id' => 3,
//     'slug'=>'judul-ketiga',
//     'excerpt'=>'lorem ipsum ketiga',
//     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo minima quia, aliquid harum aut deleniti nostrum suscipit ex sunt! Quia?</p>'
// ])

// Category::create([
//     'name' => 'Personal',
//     'slug'=>'personal'
// ])