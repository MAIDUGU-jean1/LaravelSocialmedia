<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{

    
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:20248',
        ]);
    
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('posts', 'public');
        }
    
        Post::create([
            'user_id' => auth()->id(),
            'content' => $request->content,
            'file' => $filePath, 
        ]);

       
        //dd($created_at);
        return back()->with('success', 'Post created successfully!');
    }
    
    public function index()
    {
        $posts = Post::with('user')->latest()->get();

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
