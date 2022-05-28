<?php

namespace App\Http\Controllers;

use App\JobCircular;
use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->search;
        $job = JobCircular::where('title','LIKE',"%$query%")->paginate(9);
        return view('search',compact('job','query'));
    }
}
