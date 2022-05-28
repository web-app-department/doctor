<?php

namespace App\Http\Controllers;

use App\Category;
use App\Doctor;
use App\JobCircular;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function foo\func;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::latest()->limit(5)->get();
        $footercategories = Category::latest()->limit(5)->get();
//        $toppost = Post::latest()->approved()->published()->take(1)->get();
//        $footerposts = Post::latest()->approved()->published()->take(2)->get();
        $posts = Post::latest()->approved()->published()->take(6)->get();

       
        $job=JobCircular::where('status','1')->latest()->limit(6)->get();
        $doctor=Doctor::latest()->limit(6)->get();
        return view('welcome',compact('categories','posts','footercategories','job','doctor'));
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        $categories = Category::latest()->limit(4)->get();
        return view('about',compact('categories'));
    }
    public function privacy_policy(){
        return view('privacy_policy');
    }
    public function faq(){
        return view('faq');
    }
    public function terms_and_condition(){
        return view('terms_and_condition');
    }
}
