<?php

namespace App\Http\Controllers;

use App\Models\Bigtitle;
use Illuminate\Http\Request;

class BigTitleController extends Controller
{
    public function update(Request $request, Bigtitle $bigtitle) {

        request()->validate([
            "title" => ["required"],
            "phrase" => ["required"],
        ]);

        $bigtitle->title = $request->title;
        $bigtitle->phrase = $request->phrase;
        $bigtitle->save();

        return redirect()->back()->with('success', 'Slogan actualisé');
    }
}
