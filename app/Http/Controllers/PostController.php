<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "ini single post",
            "active" => "posts",
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