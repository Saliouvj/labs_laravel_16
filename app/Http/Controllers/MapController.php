<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
     // EDIT Map

     public function edit(Map $map) {

        return view('admin.maps.mapEdit', compact('map'));
    }

    // UPDATE Map

    public function update(Request $request, Map $map) {

        request()->validate([
            "location" => ["required"],
        ]);

        $map->location = $request->location;
        $map->save();

        return redirect()->route('adminContact')->with('success', 'Modifications enregistrées');
    }
}
