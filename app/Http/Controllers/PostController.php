<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        // $posts = Post::latest();
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('posts', [
            'title' => 'Postingan' . $title,
            'active'=> 'blog',
            'selected'=> 'blog',
            // 'posts' => Post::all(),
            'posts' => Post::latest()->filters(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            'title'=> 'Single Post',
            'active'=> 'blog',
            'post' => $post,
            ]);
    }
    public function category(Category $category){
        return view('posts', [
            'title'=> $category->name,
            'posts'=> $category->posts,
            'active'=> 'category',
        ]);
    }

    public function categories(){
        return view('categories', [
            'title'=> 'categories',
            'active'=> 'categories',
            'selected'=> 'categories',
            'categories'=> Category::all(),
        ]);
    }
    public function user(User $user){
        return view('posts', [
            'title'=> $user->name,
            'active'=> 'blog',
            'posts'=> $user->posts,
        ]);
    }


}
