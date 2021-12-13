<?php

namespace App\Http\Controllers\agent1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leads\leads;
use Auth;

class agentController extends Controller
{
    //
    function index(){
        $data['leads'] = leads::orderBy('created_at', 'desc')->get();
        $data['total_leads'] = leads::count();
        return view('agent1.index')->with($data);
    }
}
