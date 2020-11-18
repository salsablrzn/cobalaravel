<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use PDF;

class SalesController extends Controller
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
        $sales=DB::table('sales')->get();
       // dump($user);
        return view("transaksi/Sales/index",['sales'=>$sales]);
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
        return view("transaksi/Sales/create");
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
        DB::table('sales')->insert([
            'Nota_ID'   => $request->notaid,
            'Customer_ID' => $request->customerid,
            'User_ID'  => $request->userid,
            'Nota_Date' => $request->notadate,
            'Total_Payment' => $request->totalpayment,

        ]);
        return redirect('SalesIndex');
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
        $user=DB::table('sales')
       ->where('Nota_ID', $id)
       ->first();
        //
       return view("transaksi/Sales/edit",['sales'=>$sales]);
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
         DB::table('sales')
            ->where('Nota_ID', $request->notaid)
            ->update([ 
            'Nota ID'   => $request->notaid,
            'Customer ID' => $request->customerid,
            'User ID'  => $request->userid,
            'Nota Date' => $request->notadate,
            'Total Payment' => $request->totalpayment,
            ]);  
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('sales')
            ->where('Nota_ID', $id)
            ->delete();     
        return redirect('SalesIndex');
        //
    }

    public function cetak_pdf($id)
    {
        $user=DB::table('user')->get();
        $customer=DB::table('customer')->get();
        $category=DB::table('category')->get();
        $product=DB::table('product')->get();
        $sales=DB::table('sales',$id)->get();
        $salesdetail=DB::table('sales_detail')->get();
        $notaid= $id;
        $pdf=PDF::loadview('transaksi/Sales/invoice_pdf',['id'=>$notaid,'sales'=>$sales,'salesdetail'=>$salesdetail,'product'=>$product, 'user'=>$user,'customer'=>$customer],)->setPaper('a4');
        return $pdf->stream('invoice-pdf');
    }
}
