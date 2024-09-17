<?php

namespace App\Http\Controllers;

use App\Models\User_Account;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Spatie\Permission\Models\Role;

class UserController2 extends Controller 
{
 
    public function index()
    {
        $users = User_Account::orderBy('id', 'ASC')->get();

        return view('user',[
            'users' =>$users
        ]);
    }

    public function edit(string $id){
        $users = User_Account::findOrFail($id);
        $roles = Role::orderBy('name', 'ASC')->get();
        $hasRoles = $users->roles->pluck('id');


        return view('assignUser',[
            'users' =>$users,
            'roles' =>$roles,
            'hasRoles' => $hasRoles
        ]);
    }

    public function update(Request $request, string $id){
        $users = User_Account::findOrFail($id);

        $users->first_name = $request->first_name;
        $users->email = $request->email;
        $users->save();

        $users->syncRoles($request->role);

        return redirect()->route('user.index');
    }
}