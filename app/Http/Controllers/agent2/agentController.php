<?php

namespace App\Http\Controllers\agent2;

use App\Http\Controllers\Controller;
use App\Models\leads\leads;
use Auth;
use Illuminate\Http\Request;
use App\Models\leads\source;
use App\Models\leads\remarks;
use App\Models\leads\categories;
use Carbon\Carbon;

class agentController extends Controller
{
    public function index(){

        $data['leads'] = leads::where('status', 1)->whereMonth('created_at', Carbon::now()->month)->get();
        $data['total_leads'] = leads::count();
        $data['total_pending_leads'] = leads::where('status', 1)->count();
        $data['total_marked_leads'] = leads::where('marked_by', Auth::id())->where('status', 2)->count();

        return view('agent2.index')->with($data);
    }
}
