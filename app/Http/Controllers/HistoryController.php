<?php

namespace App\Http\Controllers;

use App\CallRecord;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HistoryController extends Controller
{
    public function get_data_history(Request $request){
        $status_name = '';
        // $status_judul = '';
        // $status_kategori = '';
        if($request->name != null){
            $status_name = $request->name;
            $call = DB::table('customer_detail as cd')
                    ->join('call_record','cd.phone','=','call_record.incoming_number')
                    ->select('cd.name', 'cd.phone', 'call_record.outgoing_number', 'call_record.duration', 'call_record.dialed_on')
                    ->where('cd.name','like','%'.$status_name.'%')
                    ->get();
        }else{
            $call = null;
        }

        return DataTables::of($call)
        ->editColumn('duration', function($call){
            $btn = "$call->duration (second)";
            return $btn;
        })
        ->editColumn('dialed_on', function($call){
            
            $btn = Carbon::parse($call->dialed_on)->isoFormat('YYYY Do MMMM');
            return $btn;
        })
        ->addColumn('name_outgoing', function($call){
            $btn = Customer::where('phone','=',$call->outgoing_number)->first();
            return $btn->name;
        })
        ->rawColumns(['duration','name_outgoing','dialed_on'])
        ->make(true);
    }
    public function index(){
        return view('pages.dashboard.history.index');
    }
}
