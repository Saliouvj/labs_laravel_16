<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Icon;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
     // EDIT Feature

     public function edit(Feature $feature) {
        $icons = Icon::all();
        return view('admin.features.featureEdit', compact('feature', 'icons'));
    }

    // UPDATE Feature

    public function update(Request $request, Feature $feature) {

        request()->validate([
            "title" => ["required"],
            "text" => ["required"],
            "icon_id" => ["required"],
        ]);

        $feature->title = $request->title;
        $feature->text = $request->text;
        $feature->icon_id = $request->icon_id;
        $feature->save();

        return redirect()->route('adminFeatures')->with('success', 'La feature "' . $request->title . '" a bien été modifiée');
    }
}
