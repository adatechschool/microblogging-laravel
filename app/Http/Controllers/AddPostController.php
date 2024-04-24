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

    public function store(Request $request)
    {
        $validatedData = $request -> validate([
            'post_content' => 'required_without:url_img',
            'url_img' => 'required_without:post_content',
        ]);

        // Création d'un nouveau post
        $post = new Post;
        $post->post_content = $validatedData['post_content'] ?? null;
        $post->url_img = $validatedData['url_img'] ?? null;
        $post->author_id = auth()->id();

        $post->save();
        return redirect('http://127.0.0.1:8000/feed');

    }
}