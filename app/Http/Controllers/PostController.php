<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Tag;
use App\Models\TagPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.postCreate', compact('posts', 'categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "title" => ["required"],
            "text" => ["required"],
            "image" => ["required"],
            "category_id" => ["required"],
        ]);

        $post = new Post();

        $request->file('image')->storePublicly('img/', 'public');
        $post->image = $request->file('image')->hashName();

        $post->title = $request->title;
        $post->text = $request->text;
        
        $post->dateDay = date("d");
        $post->dateMonth = date("M");
        $post->dateyear = date("Y");
        $post->user_id = Auth::User()->id;
        $post->category_id = $request->category_id;

        if (Auth::user()->role_id == 1) {
            $post->validate = 1;
        } else {
            $post->validate = 0;
        }

        $post->trash = 0;

        $post->save();

        foreach ($request->input('taglist') as $value) {

            $tag = new TagPost();
            $tag->post_id = $post->id;
            $tag->tag_id = $value;
            $tag->save();
        }

        if (Auth::user()->role_id == 1) {
            return redirect()->route('adminBlog')->with('success', 'Votre article "' . $request->title . '" a bien été enregistré');
        } else {
            return redirect()->route('adminBlog')->with('success', 'Votre article "' . $request->title . '" a bien été envoyé et est attente de validation');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('editUser', $post);
        $tags = Tag::all();
        $categories = Category::all();
        $tagposts = TagPost::all()->where('post_id', $post->id);
        return view('admin.posts.postEdit', compact('post', 'tags', 'categories', 'tagposts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate([
            "title" => ["required"],
            "text" => ["required"],
            "image" => ["required"],
            "category_id" => ["required"],
        ]);

        $request->file('image')->storePublicly('img/', 'public');
        $post->image = $request->file('image')->hashName();

        $post->title = $request->title;
        $post->text = $request->text;
        
        $post->dateDay = date("d");
        $post->dateMonth = date("M");
        $post->dateyear = date("Y");
        $post->user_id = Auth::User()->id;
        $post->category_id = $request->category_id;
        $post->validate = 0;

        $post->save();

        DB::table('tagposts')->where('post_id', $post->id)->delete();

        foreach ($request->input('taglist') as $value) {

            $tag = new TagPost();
            $tag->post_id = $post->id;
            $tag->tag_id = $value;
            $tag->save();
        }
        
        return redirect()->route('adminBlog')->with('success', 'Modifications enregistrées, en attente de validation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('adminBlog')->with('success', 'Le post "' . $post->title . '" a bien été supprimé');;
    }
}
