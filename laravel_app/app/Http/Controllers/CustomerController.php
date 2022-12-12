<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function create(){
        $url=url('/customer');
        $title='Customer Registration';
        $data=compact('url','title');
        return view('customer')->with($data);
    }

    public function store(Request $req){
        $customer=new Customer;
        $customer->name=$req['name'];
        $customer->email=$req['email'];
        $customer->gender=$req['gender'];
        $customer->state=$req['state'];
        $customer->country=$req['country'];
        $customer->address=$req['address'];
        $customer->dob=$req['dob'];
        $customer->password=md5($req['password']);
        $customer->save();

        return redirect('customer');

    }

    public function view(Request $req){
        $search=$req['search'] ?? "";
        if(($search!="")){
            $customers=Customer::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        }else{
            $customers=Customer::paginate(15);
        }
        $data=compact('customers','search');
        return view('customer-view')->with($data);

    }
    public function trash(){
        $customers=Customer::onlyTrashed()->get();
        $data=compact('customers');
        return view('customer-trash')->with($data);

    }
    public function delete($id){

        $customer=Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer');

    }
    public function forceDelete($id){

        $customer=Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->forceDelete();
        }
        return redirect()->back();

    }
    public function restore($id){

        $customer=Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->restore();
        }
        return redirect('customer');

    }

    public function edit( $id){
        $customer=Customer::find($id);
        if(!is_null($customer)){
            $url=url('/customer/update').'/'.$id;
            $title='Update Customer';
            $data=compact('customer','url','title');
            return view('customer')->with($data);

        }else{
            return redirect('customer');
        }

    }
    public function update($id,Request $req){
        $customer=Customer::find($id);
        $customer->name=$req['name'];
        $customer->email=$req['email'];
        $customer->gender=$req['gender'];
        $customer->address=$req['address'];
        $customer->state=$req['state'];
        $customer->country=$req['country'];
        $customer->dob=$req['dob'];
        $customer->save();
        return redirect('customer');


    }

    //
}
