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
            }elseif(Auth::user()->role_id == '2'){
                return redirect(route('agent1.dashboard'));
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

<<<<<<< HEAD
    function logout(){
        Auth::logout();
        return redirect('/signin');
=======
    public function logout(){
        Auth::logout();
        
             return redirect('/signin');
>>>>>>> ca55d1c71ac5f4d685f3246a3bbdf7db09b02cd0
    }
}
