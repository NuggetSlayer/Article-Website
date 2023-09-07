<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class Landing extends Controller
{
    public function Index()
    {
        $data = Blog::latest()->take(5)->get();
        return view('landing.blog', compact('data'));
    }
    public function Detail($slug)
    {
        $data = Blog::where('slug', $slug)->first();
        return view('Landing.detail', compact('data'));
    }
}
