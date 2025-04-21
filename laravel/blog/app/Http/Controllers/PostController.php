<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', ['posts' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->published_at = now();
        $post->is_active = true;

        $post->save();
        return redirect('/post');
    }

    public function show($post)
    {
        $post = Post::find($post);
        return view('posts.show', ['post' => $post]);
    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $post)
    {
        $post = Post::find($post);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->updated_at = now();

        $post->save();

        return redirect('/post/' . $post->id . '/edit');
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect('/post');
    }
}
