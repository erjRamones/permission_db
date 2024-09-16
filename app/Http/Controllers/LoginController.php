<?php

namespace App\Http\Controllers;

use App\Models\User_Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function index(){
        return view ('login');
    }

    public function authenticate(Request $request){
        
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->passes()){

            if(Auth::attempt([
                'email' => $request->email, 
                'password'=> $request->password ])){
                    return redirect()->route('roles.create');
                }else{
                    return redirect()->route('acc.index')->with('error','Either email or password is incorrect.');
                }
        }else{
            return redirect()->route('acc.index')->withInput()->withErrors($validator);
        }

    }
}