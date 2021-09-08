<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leads\source;
use App\Models\leads\remarks;
use App\Models\leads\leads;

class leadsController extends Controller
{
    //
    function index(){
        $data['leads'] = leads::orderBy('created_at', 'desc')->get();
        $data['total_leads'] = leads::count();
        return view('admin.leads.index')->with($data);
    }

    function add(){
        $data['source'] = source::all();
        $data['total_leads'] = leads::count();

        return view('admin.leads.add')->with($data);
    }

    function addSubmit(Request $request){
        $data = $request->all();
        leads::addLead($data);
        
        return redirect()->back()->with('success', 'Lead Updated.');
    }

    function details($id){
        $id = base64_decode($id);
        $data = leads::find($id);

        return view('admin.leads.response.details', ['data' => $data]);
    }
}
