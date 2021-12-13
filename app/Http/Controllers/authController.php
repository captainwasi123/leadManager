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
                return redirect('admin');
            }elseif(Auth::user()->role_id == '2'){
                return redirect('agent1');
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


    public function logout(){
        Auth::logout();
        
             return redirect('/signin');

=======
    function logout(){
        Auth::logout();
        return redirect('/signin');
>>>>>>> e5e44fac7d7b9fadba02c99e811a7c89bc1bbc72
    }
}
