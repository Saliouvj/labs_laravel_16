<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // EDIT Video

    public function edit(Video $video) {

        return view('admin.videos.videoEdit', compact('video'));
    }

    // UPDATE Video

    public function update(Request $request, Video $video) {

        request()->validate([
            "link" => ["required"],
        ]);

        $video->link = $request->link;
        $video->save();

        return redirect()->route('adminDiscover')->with('success', 'Modifications enregistrées');
    }
}
