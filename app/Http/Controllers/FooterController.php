<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    // EDIT Footer

    public function edit(Footer $footer) {

        return view('admin.footers.footerEdit', compact('footer'));
    }

    // UPDATE Footer

    public function update(Request $request, Footer $footer) {

        request()->validate([
            "year" => ["required", "numeric"],
            "copyright" => ["required"],
            "designby" => ["required"],
            "person" => ["required"],
        ]);

        $footer->year = $request->year;
        $footer->copyright = $request->copyright;
        $footer->designby = $request->designby;
        $footer->person = $request->person;
        $footer->save();

        return redirect()->route('adminGeneral')->with('success', 'Modifications enregistrées');
    }
}
