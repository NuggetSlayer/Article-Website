<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // View
    public function index()
    {
        $data = [
            'article' => Blog::count(),
            'user' => User::count(),
        ];
        return view('admin.index', $data);
    }


    public function ListArticle()
    {
        $posts = Blog::with('user')->paginate(3);
        return view('admin.articles', compact('posts'));
    }


    public function Add(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'tumbnail' => 'required',
            'content' => 'required',
        ]);
        $slug = Str::slug($request->title);
        $uniqueSlug = $slug . '-' . uniqid();
        $user = 1;
        Blog::create([
            'title' => $request->title,
            'slug' => $uniqueSlug,
            'image' => $request->file('tumbnail')->store('image', 'public'),
            'content' => $request->content,
            'user_id' => $user,
        ]);
        return redirect()->route('List-Article')->with('success', 'Article Successfully Added');
    }


    public function Edit($slug)
    {
        $post = Blog::where('slug', $slug)->first();
        return view('admin.form', compact('post'));
    }


    public function Update(Request $request, $slug)
    {
        $post = Blog::where('slug', $slug)->first();
        if ($request->method() == 'PUT') {

            $validated = $request->validate([
                'title' => 'required|max:100',
                'content' => 'required',
            ]);

            if ($request->hasFile('tumbnail')) {
                Storage::delete($post->image);
                $newImage = $request->file('tumbnail')->store('image', 'public');
                $post->image = $newImage;
            }

            $slug = Str::slug($request->title);
            $uniqueSlug = $slug . '-' . uniqid();
            $user = 1;

            Blog::where('slug', $request->slug)->update([
                'title' => $request->title,
                'slug' => $uniqueSlug,
                'image' => $post->image,
                'content' => $request->content,
                'user_id' => $user,
            ]);
            return redirect()->route('List-Article')->with('success', 'Article Successfully Updated');
        }
    }

    public function Delete($slug){
        $data = Blog::where('slug',$slug)->first();
        if ($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('List-Article')->with('success', 'Article Successfully Deleted');
    }
}
