<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        request()->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "comment" => ["required"],
        ]);

        $comment = new Comment();
        
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;

        $comment->dateDay = date("d");
        $comment->dateMonth = date("M");
        $comment->dateYear = date("Y");
        $comment->validate = 0;
        
        $comment->post_id = $id;
        
        $comment->save();
        return back()->with('success', 'Votre commentaire a été envoyé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Comment $id)
    {
        $comment = $id;
        $comment->validate = 1;
        $comment->save();
        return redirect()->back()->with('success', 'Commentaire validé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
