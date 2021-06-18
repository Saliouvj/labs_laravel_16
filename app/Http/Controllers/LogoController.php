<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Logo;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{

     // EDIT Logo

     public function edit(Logo $logo) {

        return view('admin.logos.logoEdit', compact('logo'));
    }

    // UPDATE Logo

    public function update(Request $request, Logo $logo) {

        request()->validate([
            "name" => ["required"],
        ]);

        $request->file('name')->storePublicly('img/', 'public');
        $logo->name = $request->file('name')->hashName();

        $logo->save();

        return redirect()->route('adminGeneral')->with('success', 'Modifications enregistrées');
    }
  
}
