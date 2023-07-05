<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }


    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->year = $request->year;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
