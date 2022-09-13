<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Auth;

class CustomerController extends Controller
{
    //
    public function create( $id)
    { 
        $model = Crypt::decrypt($id);
        return view('frontend.create',compact('model')); 
    }
    public function store(Request $request)
    {
        $this->validate(
            $request,
                [
                    'name' => 'required',
                ],
                [
                    'name.required' => 'Customer category is required!!',
                ]
            );
        $customer = Customer::create($request->all());
        return redirect()->back()
        ->withSuccess(['Customer Created succesfully!']);
        // return redirect()->route('customer.index',$customer->id)
        // ->with('status','Customer Created Successfully');
          
    }
}
