<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //  $product=DB::table('product')->get();
       // // dump($product);
       //  return view("master/Product/index",['product'=>$product]);
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
        $product = product::all();
        return view("master/Product/index",['product'=>$product]);
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
        $category=DB::table('category')->get();
        return view("master/Product/create",['category'=>$category]);
        //
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
         DB::table('category')->get();
         Product::create([
            'Product_ID'   => $request->productid,
            'Category_ID'  => $request->categoriesid,
            'Product_Name' => $request->productname,
            'Product_Price'=> $request->productprice,
            'Product_Stock'=> $request->productstock,
            'Explanation'  => $request->explanation,
            'Status'       => $request->status

        ]);
        return redirect('ProductIndex');
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
       //  $product=DB::table('product')
       // ->where('Product_ID', $id)
       // ->first();
       // $category=DB::table('category')->get();
       //  //
       // return view("master/Product/edit",['product'=>$product, 'category'=>$category ]);
        //
        $category=DB::table('category')->get();
        $product=product::where('Product_ID',$id)->get();
        //
       return view("master/Product/edit",['product'=>$product, 'Category'=>$category ]);
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
         DB::table('category')->get();
         Product::where('Product_ID',$request->productid)
         ->update([
            'Category_ID'  => $request->categoriesid,
            'Product_Name' => $request->productname,
            'Product_Price'=> $request->productprice,
            'Product_Stock'=> $request->productstock,
            'Explanation'  => $request->explanation,
            'Status'       => $request->status
            ]);  
        //
            return redirect('ProductIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('product')
            ->where('Product_ID', $id)
            ->delete();     
        return redirect('ProductIndex');
        //
    }
}
