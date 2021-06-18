<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    // EDIT Title

    public function edit(Title $title) {

        return view('admin.titles.titleEdit', compact('title'));
    }

    // UPDATE Title

    public function update(Request $request, Title $title) {

        request()->validate([
            "name" => ["required"],
        ]);

        $title->name = $request->name;
        $title->save();

        return redirect()->back()->with('success', 'Modifications enregistrées');
    }
}
