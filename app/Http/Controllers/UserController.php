<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Job;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // CREATE User

    public function create() {

        $users = User::all();
        return view('admin.users.userCreate', compact('users'));
    }

    // STORE User 

    public function store(Request $request) {

        request()->validate([
            "firstname" => ["required"],
            "name" => ["required"],
            "age" => ["required"],
            "photo" => ["required"],
            "description" => ["required"],
            "email" => ["required", "email"],
            "genre_id" => ["required"],
            "job_id" => ["required"],
        ]);

        $user = new User();

        $request->file('photo')->storePublicly('img/', 'public');
        $user->photo = $request->file('photo')->hashName();

        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->description = $request->description;
        $user->email = $request->email;
        $user->genre_id = $request->genre_id;
        $user->role_id = 4;
        $user->job_id = $request->job_id;
        $user->save();

        return redirect()->route('dashboard')->with('success', $request->title . ' a bien été créé');
    }

    // EDIT User

    public function edit(User $user) {
        $users = User::all();
        $genres = Genre::all();
        $jobs = Job::all();
        return view('admin.users.userEdit', compact('user', 'users', 'genres', 'jobs'));
    }

    // UPDATE User

    public function update(User $user, Request $request) {

        request()->validate([
            "firstname" => ["required"],
            "name" => ["required"],
            "age" => ["required", "numeric"],
            "photo" => ["required"],
            "description" => ["required"],
            "email" => ["required", "email"],
            "genre_id" => ["required"],
            "job_id" => ["required"],
        ]);

        $request->file('photo')->storePublicly('img/', 'public');
        $user->photo = $request->file('photo')->hashName();

        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->description = $request->description;
        $user->email = $request->email;

        $user->genre_id = $request->genre_id;
        
        if ($user->role_id == 1) {
            $user->role_id == 1;
        } else if ($user->role_id == 2) {
            $user->role_id == 2;
        } else if ($user->role_id == 3) {
            $user->role_id == 3;
        } else if ($user->role_id == 4) {
            $user->role_id == 4;
        }

        $user->job_id = $request->job_id;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Vos modifications ont bien été enregistrées');
    }

    // DELETE

    public function destroy(User $user) {

        $user->delete();
        return redirect()->route('adminUsers')->with('success', 'Utilisateur supprimé');
    }
}
