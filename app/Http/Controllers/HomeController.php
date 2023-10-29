<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\carbon;
use App\Models\{Category,Tag};

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('active','=',1)
        ->where('featured','=',0)
        ->whereDate('published_at','<',Carbon::now())
        ->orderBy('published_at','desc')
        ->paginate(10);

        $featuredPosts = Post::where('featured','=',1)
        ->whereDate('published_at','<',Carbon::now())
        ->where('active','=',1)
        ->orderBy('published_at','desc')
        ->take(6)
        ->get();

        $recentPosts = Post::where('active','=',1)
        ->where('featured','=',1)
        ->whereDate('published_at','<',Carbon::now())
        ->orderBy('published_at','desc')
        ->skip(6)
        ->take(5)
        ->get();

        $categories = Category::where('active','=',1)
        ->orderBy('created_at','desc')
        ->paginate(10);

        $tags = Tag::where('active','=',1)
        ->orderBy('created_at','desc')
        ->paginate(10);

        return view('home',compact('posts','featuredPosts','recentPosts','categories','tags'));
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function postDetails($slug)
    {
        $post = Post::where('active','=',1)
        ->where('slug','=',$slug)
        ->first();
        return view('pages.post-details',compact('post'));
    }
}
