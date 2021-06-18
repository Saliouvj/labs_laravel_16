<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // CREATE Service

    public function create() {

        $icons = Icon::all();
        $services = Service::all();
        return view('admin.services.serviceCreate', compact('icons', 'services'));
    }

    // STORE Service 

    public function store(Request $request) {

        request()->validate([
            "icon" => ["required"],
            "title" => ["required"],
            "text" => ["required"],
        ]);

        $service = new Service();
        $service->icon_id = $request->icon;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();

        return redirect()->route('adminServices')->with('success', '"' . $request->title . '" a bien été créé');
    }

    // EDIT Service

    public function edit(Service $service) {

        $icons = Icon::all();
        return view('admin.services.serviceEdit', compact('service', 'icons'));
    }

    // UPDATE Service

    public function update(Request $request, Service $service) {

        request()->validate([
            "icon_id" => ["required"],
            "title" => ["required"],
            "text" => ["required"],
        ]);

        $service->icon_id = $request->icon_id;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();

        return redirect()->route('adminServices')->with('success', 'Le service "' . $request->title . '" a bien été modifié');
    }

    // DELETE

    public function destroy(Service $service) {

        $service->delete();
        return redirect()->route('adminServices')->with('success', 'Le service "' . $service->title . '" a bien été supprimé');
    }
}
