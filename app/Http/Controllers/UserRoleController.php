<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function index() {
        $users = User::where('id', '>', 2)->where('validate', 1)->get();
        return view('admin.pages.user-role', compact('users'));
    }

    public function edit(User $id) {
        $user = $id;
        $roles = Role::where('id', '>', 2)->get();
        return view('admin.user-role.userRoleEdit', compact('user', 'roles'));
    }

    public function update(User $id, Request $request) {
        $user = $id;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('adminUserRole')->with('success', "Rôle de l'utilisateur mis à jour");
    }
}
