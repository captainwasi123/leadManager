<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class authController extends Controller
{
    //
    function index(){
        if(Auth::check()){
            if(Auth::user()->role_id == '1'){
                return redirect(route('admin.dashboard'));
            }
        }else{
            return redirect('/signin');
        }
    }


    function signin(){

        return view('login');
    }
    function signinSubmit(Request $request){
        $data = $request->all();
        if(Auth::attempt(['username' => $data['username'], 'password' => $data['password'], 'status' => '1'])){
            return redirect('/');
        }else{
            return redirect()->back()->with('error', 'Authentication Failed.');
        }
    }
}
