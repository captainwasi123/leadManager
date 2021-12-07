<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leads\source;
use App\Models\leads\remarks;
use App\Models\leads\leads;
use App\Models\leads\categories;
use Auth;

class leadsController extends Controller
{
    //
    function index(){
        $data['leads'] = leads::orderBy('created_at', 'desc')->get();
        // $data['leads'] = leads::where('status', 1)->orderBy('created_at', 'desc')->get();
        $data['total_leads'] = leads::count();
        return view('admin.leads.index')->with($data);
    }

    function pendingLead(){
        $data['leads'] = leads::where('status', 1)->orderBy('created_at', 'desc')->paginate(25);
        return view('admin.leads.pending')->with($data);
    }
    function markLead($id){
        $id = base64_decode($id);
        $data = leads::find($id);
        $data->status = '2';
        $data->marked_by = Auth::id();
        $data->save();

        return redirect()->back()->with('success', 'Lead Marked!');
    }

    function markedLead(){
        $data['leads'] = leads::where('status', 2)->orderBy('created_at', 'desc')->paginate(25);
        return view('admin.leads.marked')->with($data);
    }

    function filterLead()
     {
                $data['status'] = '1';
                $data['data'] = array();
                $data['categories'] = categories::orderBy('name')->get();
                $data['source'] = source::orderBy('source')->get();
                // $data['status'] = leads::orderBy('status')->get();
                return view('admin.leads.filter')->with($data);
     }

    function filterLeadSubmit(Request $request)
            {
                $search = $request->all();
                $from = date('Y-m-d 00:00:01', strtotime($search['fromdate']));
                $to = date('Y-m-d 23:59:59', strtotime($search['todate']));
                //dd($from, $to);
                $data['categories'] = categories::orderBy('name')->get();
                $data['source'] = source::orderBy('source')->get();
                // $data['status'] = leads::orderBy('status')->get();

                $data['data'] = leads::when(!empty($search['fullname']), function($q) use ($search){
                                    return $q->where('name', 'LIKE', '%'.$search['fullname'].'%'); 
                                })
                                ->when(!empty($search['mobile']), function($q) use ($search){
                                    return $q->where('mobile', 'LIKE', '%'.$search['mobile'].'%'); 
                                })
                                ->when(!empty($search['email']), function($q) use ($search){
                                    return $q->where('email', 'LIKE', '%'.$search['email'].'%'); 
                                })
                                ->when(!empty($search['category_id']), function($q) use ($search){
                                    return $q->where('category_id',$search['category_id']); 
                                })
                                ->when(!empty($search['source_id']), function($q) use ($search){
                                    return $q->where('source_id',$search['source_id']); 
                                })
                                ->when(!empty($search['status']), function($q) use ($search){
                                    return $q->where('status',$search['status']); 
                                })
                                ->where('created_at', '>=', $from)
                                ->where('created_at', '<=', $to)
                                ->get();
                $data['search'] = $search;
                return view('admin.leads.filter')->with($data);
                // return view('usertable');
            }        

    function add(){
        $data['source'] = source::all();
        $data['categories'] = categories::orderBy('name')->get();

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
