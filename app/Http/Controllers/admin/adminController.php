<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leads\leads;

class adminController extends Controller
{
    //
    function index(){
        $data['leads'] = leads::orderBy('created_at', 'desc')->get();
        $data['total_leads'] = leads::count();
        return view('admin.index')->with($data);
    }
}
