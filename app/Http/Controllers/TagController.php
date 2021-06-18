<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\TagPost;
use Illuminate\Http\Request;

class TagController extends Controller
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
        return view ('admin.tag.tagCreate');
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
            "name" => ["required"],
        ]);

        $tag = new Tag();

        $tag->name = $request->name;
        $tag->save();

        return redirect()->route('adminTagCategory')->with('success', 'Le tag "' . $request->name . '" a été enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.tagEdit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        request()->validate([
            "name" => ["required"],
        ]);

        $tag->name = $request->name;
        $tag->save();

        return redirect()->route('adminTagCategory')->with('success', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tagposts = TagPost::where('tag_id', $tag->id)->get();
        foreach ($tagposts as $tagpost) {
            $tagpost->delete();
        }

        $tag->delete();
        return redirect()->route('adminTagCategory')->with('success', 'Le tag "' . $tag->name . '" a bien été supprimé');
    }
}
