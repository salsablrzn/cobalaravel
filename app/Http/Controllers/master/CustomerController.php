<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
        $customer=DB::table('customer')->get();
       // dump($customer);
        return view("master/Customer/index",['customer'=>$customer]);
        //
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("master/Customer/create");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('customer')->insert([
            'Customer_ID'=> $request->customerid,
            'First_Name' => $request->firstname,
            'Last_Name'  => $request->lastname,
            'Phone'      => $request->phone,
            'Email'      => $request->email,
            'Street'     => $request->street,
            'City'       => $request->city,
            'State'      => $request->state,
            'Zip_Code'   => $request->zipcode,
            'Status'     => $request->status

        ]);
        return redirect('CustomerIndex');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=DB::table('customer')
       ->where('Customer_ID', $id)
       ->first();
        //
       return view("master/Customer/edit",['customer'=>$customer]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         DB::table('customer')
            ->where('Customer_ID',$request->customerid)
            ->update([
            'Customer_ID'=> $request->customerid,
            'First_Name' => $request->firstname,
            'Last_Name'  => $request->lastname,
            'Phone'      => $request->phone,
            'Email'      => $request->email,
            'Street'     => $request->street,
            'City'       => $request->city,
            'State'      => $request->state,
            'Zip_Code'   => $request->zipcode,
            'Status'     => $request->status

            ]); 
        //
            return redirect('CustomerIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('customer')
            ->where('Customer_ID', $id)
            ->delete();     
        return redirect('CustomerIndex');
    }
}
