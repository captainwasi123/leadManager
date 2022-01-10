<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leads\leads;
use Carbon\Carbon;

class adminController extends Controller
{
    //
    function index(){
        // $data['leads'] = leads::orderBy('created_at', 'desc')->get();
        $data['leads'] = leads::where('status', 1)->whereMonth('created_at', Carbon::now()->month)->get();
        $data['fresh_leads'] = leads::where('status', 1)->count();
        $data['total_leads'] = leads::count();
        $data['total_pending_leads'] = leads::where('status', 2)->count();
        $data['total_marked_leads'] = leads::where('status', 3)->count();
        return view('admin.index')->with($data);
    }
}
