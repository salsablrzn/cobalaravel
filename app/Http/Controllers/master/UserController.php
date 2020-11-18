<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //  $user=DB::table('user')->get();
       // // dump($user);
       //  return view("master/User/index",['user'=>$user]);
        //
         if(!Session::get('login')){
            return redirect('login');
        }
        else{
        $user = user::all();
        return view("master/User/index",['user'=>$user]);
    }
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("master/User/create");
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
        user::create([
            'User_ID'       => $request->userid,
            'First_Name'    => $request->firstname,
            'Last_Name'     => $request->lastname,
            'Email'         => $request->email,
            'Phone'         => $request->phone,
            'Password'      => $request->password,
            'Job_Status'    => $request->jobstatus,
            'Jabatan'       => $request->jabatan
        ]);
        return redirect('UserIndex');
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
        $user=user::where('User_ID',$id)->get();
        //
       return view("master/User/edit",['user'=>$user]);
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
         $user=user::where('User_ID',$request->userid)
            ->update([ 
            'First_Name'    => $request->firstname,
            'Last_Name'     => $request->lastname,
            'Email'         => $request->email,
            'Phone'         => $request->phone,
            'Password'      => $request->password,
            'Job_Status'    => $request->jobstatus,
            'Jabatan'       => $request->jabatan
            ]);  
        //
            return redirect('UserIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('user')
            ->where('User_ID', $id)
            ->delete();     
        return redirect('UserIndex');
        //
    }
}
