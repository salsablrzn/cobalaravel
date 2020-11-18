<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('transaksi/Pos/pos');

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Nota_ID=(DB::table('sales')->max('Nota_ID'));
        $customer=DB::table('customer')->get();
        $user=DB::table('user')->get();
        $product=DB::table('product')->get();
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
        return view ('transaksi/Pos/pos',['product'=>$product, 'Nota_ID' =>  $Nota_ID, 'customer' => $customer, 'user' => $user]);

        //
    }
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
            'Customer_ID'  => $request->customerid,
            'User_ID' => $request->userid,
            'Nota_Date'=> $request->notadate,
            'Total_Payment'=> $request->totalpayment
        ]);
            $Nota_ID=(DB::table('sales')->max('Nota_ID'));
            foreach ($request['id'] as $key) {
            DB::table('sales_detail')->insert([
            'Nota_ID'   => $Nota_ID,
            'Product_ID'  => $key,
            'Quantity' => $request['qty'][$key],
            'Selling_Price'=> $request['harga'][$key],
            'Discount'=> $request['discount'][$key],
            'Total_price'=> $request['subtotal'][$key]
            ]);
            }

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
        $sales=DB::table('sales')
        ->join('customer','sales.Customer_ID','=','customer.Customer_ID')
        ->join('user','sales.User_ID','=','user.User_ID')
        ->select('sales.*','customer.First_Name','customer.Last_Name','user.First_Name as UFirst_Name','user.Last_Name as ULast_Name')
       ->where('Nota_ID', $id)
       ->first();

        $salesdetail=DB::table('sales_detail')
        ->join('product','sales_detail.Product_ID','=','product.Product_ID')
        ->select('sales_detail.*','product.Product_Name')
       ->where('Nota_ID', $id)
       ->get();
        //
       return view("transaksi/Pos/invoice",['sales'=>$sales, 'sales_detail'=>$salesdetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales=DB::table('sales')
       ->where('Nota_ID', $id)
       ->first();
        $salesdetail=DB::table('sales_detail')
        ->join('product','sales_detail.Product_ID','=','product.Product_ID')
        ->select('sales_detail.*','product.Product_Name')
       ->where('Nota_ID', $id)
       ->get();

       $customer=DB::table('customer')
       ->get();

       $user=DB::table('user')
       ->get();

       $product=DB::table('product')
       ->get();
        //
       return view("transaksi/Pos/update",['product'=> $product,'sales'=>$sales, 'sales_detail'=>$salesdetail, 'customer'=>$customer, 'user'=>$user]);
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
        DB::table('sales')->where('Nota_ID',$request->notaid)
        ->update([
            'Nota_ID'   => $request->notaid,
            'Customer_ID'  => $request->customerid,
            'User_ID' => $request->userid,
            'Nota_Date'=> $request->notadate,
            'Total_Payment'=> $request->totalpayment
        ]);
        DB::table('sales_detail')->where('Nota_ID', $request->notaid)->delete();

            foreach ($request['id'] as $key) {
            DB::table('sales_detail')->insert([
            'Nota_ID'   => $request['notaid'],
            'Product_ID'  => $key,
            'Quantity' => $request['qty'][$key],
            'Selling_Price'=> $request['harga'][$key],
            'Discount'=> $request['discount'][$key],
            'Total_price'=> $request['subtotal'][$key]
            ]);
            }

            return redirect('SalesIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        return view ('transaksi/Pos/destroy');
        //
    }
}