<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Subscription;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function get_data_customer(){
        $customer = Customer::all();
        return DataTables::of($customer)
        ->addColumn('action', function($customer){
            $btn = '<a href="'.route('admin.edit',$customer->id).'" class=""><i class="far fa-edit"></i></a> |';
			$btn = $btn.'<a href="'.route('admin.delete',$customer->id).'" class=""><i class="far fa-trash-alt"></i></a>';

            return $btn;
        })
        ->addColumn('subs', function($customer){
            if($customer->subscription_id == null){
                $btn = 'Tidak Ada';
            }else{
                $btn = $customer->subs->plan;
            }
            return $btn;
        })
        ->rawColumns(['subs','action'])
        ->make(true);
    }

    public function index(){
        return view('pages.dashboard.index');
    }

    public function create(){
        $subs = Subscription::all();
        return view('pages.dashboard.create',compact('subs'));
    }
    
    public function store(Request $request){
        $customer = Customer::create($request->all());

        toast('Customer success created','success')->autoClose(3000);
        return redirect()->route('admin.index');
    }
    
    public function edit($id){
        $customer = Customer::find($id);
        $subs = Subscription::all();
        return view('pages.dashboard.edit',compact('subs','customer'));
    }
    
    public function update(Request $request, $id){
        $customer = Customer::find($id);
        $customer->update($request->all());
        toast('Customer success updated','success')->autoClose(3000);
        return redirect()->route('admin.index');
    }
    
    public function delete($id){
        $customer = Customer::find($id);
        $customer->delete();
        toast('Customer success deleted','success')->autoClose(3000);
        return redirect()->back();
    }
}
