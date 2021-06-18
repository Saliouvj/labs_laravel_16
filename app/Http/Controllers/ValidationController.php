<?php

namespace App\Http\Controllers;

use App\Mail\NewPostSender;
use App\Mail\ValidateUserSender;
use App\Models\Comment;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use App\Models\TagPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ValidationController extends Controller
{
    public function index()
    {
        // $users = User::where('validate', 0)->get();
        $roles = Role::all();
        // $commentaires = Comment::all();
        $commentaires = Comment::where('validate', 0)->get();
        $articles = Post::where('validate', 0)->where('trash', 0)->get();
        $users = User::where('validate', 0)->get();
        // $articles = Article::all();
        
        return view('admin.pages.validate', compact('roles','commentaires','articles', 'users'));
    }

    public function updateUser(User $id)
    {
        $user = $id;
        $user->validate = 1;
        $user->save();

        Mail::to($user->email)->send(new ValidateUserSender($user));

        return redirect()->back()->with('success', 'Membre validé');
    }

    public function updateCommentaire(Comment $id)
    {
        $commentaire = $id;
        $commentaire->validate = 1;
        $commentaire->save();
        return redirect()->back()->with('success', 'Commentaire validé');
    }

    public function deleteUser(User $id)
    {
        $user = $id;
        $user->delete();
        return redirect()->back()->with('success', 'User supprimé');
    }

    public function deleteComment(Comment $id)
    {
        $commentaire = $id;
        $commentaire->delete();
        return redirect()->back()->with('success', 'Commentaire supprimé');
    }

    public function updateArticle(Post $id)
    {
        $post = $id;
        $post->validate = 1;
        $post->save();

        $newsmembers = Newsletter::all();
        foreach ($newsmembers as $newsmember) {
            Mail::to($newsmember->email)->send(new NewPostSender($newsmember));
        }

        return redirect()->back()->with('success', 'Article validé');
    }

}
