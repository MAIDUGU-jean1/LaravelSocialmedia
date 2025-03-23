<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;



class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:20248',
        ]);

        $imagePath = null;
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('posts', 'public');
        }

        Post::create([
            'user_id' => auth()->id(),
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Post created successfully!');
    }

    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        // if($posts->isEmpty()) {
        //     dd('error', 'No posts found.');
        // }
        return view('users.index', compact('posts'));
    }


    public function destroy(Post $post)
    {
        if ($post->user_id === auth()->id()) {
            $post->delete();
            return back()->with('success', 'Post deleted successfully.');
        }
        return back()->with('error', 'You are not authorized to delete this post.');
    }
    //
}
