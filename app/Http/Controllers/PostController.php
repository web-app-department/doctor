<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->approved()->published()->paginate(9);
        return view('posts',compact('posts'));
    }

    public function postview($slug)
    {

        $post = Post::where('slug',$slug)->approved()->published()->first();

        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }
        $posts = Post::latest()->approved()->published()->take(4)->get();
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        $categories = Category::latest()->limit(5)->get();
        $alltag = tag::latest()->limit(10)->get();
        $socialShare = \Share::page(

            $post->url, $post->title,
        )
            ->facebook()
            ->twitter()
            ->reddit()
            ->linkedin()
            ->whatsapp()
            ->telegram();
        return view('postview',compact('post','randomposts',
            'posts','categories','alltag','socialShare'));

    }

    public function details($slug)
    {
        
        $post = Post::where('slug',$slug)->approved()->published()->first();

        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }
        $posts = Post::latest()->approved()->published()->take(4)->get();
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        $categories = Category::latest()->limit(5)->get();
        $alltag = tag::latest()->limit(10)->get();
        $socialShare = \Share::page(

            $post->url, $post->title,
        )
            ->facebook()
            ->twitter()
            ->reddit()
            ->linkedin()
            ->whatsapp()
            ->telegram();
        return view('postview',compact('post','randomposts',
            'posts','categories','alltag','socialShare'));

    }

    public function postByCategory($slug)
    {
        $post = Post::where('slug',$slug)->approved()->published()->first();
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        $category = Category::where('slug',$slug)->first();
        $postss = $category->posts()->approved()->published()->paginate(10);
        $posts = Post::latest()->approved()->published()->take(4)->get();
        $categories = Category::latest()->limit(5)->get();
        $alltag = tag::latest()->limit(10)->get();
        return view('category',compact('category','postss',
            'randomposts','post','categories','posts','alltag'));
    }

    public function postByTag($slug)
    {
        $post = Post::where('slug',$slug)->approved()->published()->first();
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        $tag = Tag::where('slug',$slug)->first();
        $postss = $tag->posts()->approved()->published()->paginate(10);
        $posts = Post::latest()->approved()->published()->take(4)->get();
        $categories = Category::latest()->limit(5)->get();
        $alltag = tag::latest()->limit(10)->get();
        return view('tag',compact('tag','postss',
            'post','categories','randomposts','posts','alltag'));
    }
}
