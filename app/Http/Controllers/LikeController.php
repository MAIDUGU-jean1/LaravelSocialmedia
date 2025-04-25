<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class LikeController extends Controller
{
    public function likePost(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);

        $existingLike = Like::where('user_id', auth()->id())->where('post_id', $postId)->first();

        if ($existingLike) {
    
            $existingLike->delete();
            return response()->json(['message' => 'Post unliked', 'liked' => false, 'likes_count' => $post->likes()->count()]);
        }

   
        Like::create([
            'user_id' => auth()->id(),
            'post_id' => $postId,
        ]);

        return response()->json(['message' => 'Post liked', 'liked' => true, 'likes_count' => $post->likes()->count()]);
    }
    //
}
