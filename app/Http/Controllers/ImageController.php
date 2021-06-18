<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    // CREATE Service

    public function create() {

        $images = Image::all();
        return view('admin.images.imageCreate', compact('images'));
    }

    // STORE Image

    public function store(Request $request) {

        request()->validate([
            "name" => ["required"],
        ]);

        $image = new Image();

        $request->file('name')->storePublicly('img/', 'public');
        $image->name = $request->file('name')->hashName();

        $image->active = 0;

        $image->save();

        return redirect()->route('adminCarousel')->with('success', "L'image a bien été ajoutée");
    }

    // EDIT Image

    public function edit(Image $image) {

        return view('admin.images.imageEdit', compact('image'));
    }

    // UPDATE Image

    public function update(Request $request, Image $image) {

        request()->validate([
            "name" => ["required"],
        ]);

        $request->file('name')->storePublicly('img/', 'public');
        $image->name = $request->file('name')->hashName();

        $image->save();

        return redirect()->route('adminCarousel')->with('success', 'Modifications enregistrées');
    }

    // DELETE Image

    public function destroy(Image $image) {

        $image->delete();
        return redirect()->route('adminCarousel')->with('success', 'La photo "' . $image->name . '" a bien été supprimée');
    }

    // FIRST Image

    public function firstImage(Image $image) {

        $pictures = Image::all();
        foreach ($pictures as $picture) {
            $picture->active = 0;
            $picture->save();
        }

        $image->active = 1;
        $image->save();

        return redirect()->route('adminCarousel')->with('success', "L'image est maintenant la première à apparaître dans le carousel");
    }
}
