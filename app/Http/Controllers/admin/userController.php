<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    //
    function index(){
        $data = User::all();

        return view('admin.users.index', ['data' => $data]);
    }

    function add(){

        return view('admin.users.add');
    }

    function addSubmit(Request $request){
        $validated = $request->validate([
            'username' => 'required|unique:tbl_users_info|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
        $data = $request->all();
        User::addUser($data);
        dd($data);
    }
}
