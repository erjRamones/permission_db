<?php

namespace App\Http\Controllers;

use App\Models\User_Account;

class UserController2 extends Controller
{

    public function index()
    {
        $users = User_Account::orderBy('first_name', 'ASC')->get();

        return view('user',[
            'users' =>$users
        ]);
    }
    public function edit(){
        
    }
}