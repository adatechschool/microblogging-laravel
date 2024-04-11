<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    public function create()
    {
        $posts = Post::all();
        return view('feed', compact('posts'));
    }
}