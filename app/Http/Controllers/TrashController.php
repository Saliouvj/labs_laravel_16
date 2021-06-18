<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\TagPost;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index() {
        $articles = Post::where('trash', 1)->get();
        return view('admin.pages.trash', compact('articles'));
    }

    public function recupArticle(Post $id) {
        $post = $id;
        $post->trash = 0;
        $post->save();
        return redirect()->back()->with('success', 'Article récupéré');
    }

    public function deleteArticle(Post $id)
    {
        $post = $id;

        $tagposts = TagPost::where('post_id', $post->id)->get();
        foreach ($tagposts as $tagpost) {
            $tagpost->delete();
        }

        $comments = Comment::where('post_id', $post->id)->get();
        foreach ($comments as $comment) {
            $comment->delete();
        }
        
        $post->delete();

        return redirect()->back()->with('success', 'Article supprimé');
    }

    public function trashArticle(Post $id)
    {
        $post = $id;
        $post->trash = 1;
        $post->save();
        return redirect()->back()->with('success', 'Article déplacé dans la corbeille');
    }
}
