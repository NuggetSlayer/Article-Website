<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function Index(Request $request)
    {
        if ($request->input('search')) {
            $data = Blog::where('title', 'like', '%' . $request->input('search') . '%')->with('user')->paginate(3);
        } else {
            $data = Blog::with('user')->paginate(3);
        }
        return view('landing.blog', compact('data'));
    }
    public function Detail($slug)
    {
        $data = Blog::where('slug', $slug)->first();
        return view('Landing.detail', compact('data'));
    }
}
