<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;


class RegistController extends Controller
{
    
    
    public function index()
    {
       return view('master/Login/regist');
    }

   
    public function store(Request $request)
    {
         User::create([
            'User_ID'       => $request->userid,
            'First_Name'    => $request->firstname,
            'Last_Name'     => $request->lastname,
            'Email'         => $request->email,
            'Phone'         => $request->phone,
            'Password'      => $request->password,
            'Job_Status'    => $request->jobstatus,
            'Jabatan'       => $request->jabatan    

        ]);
    return redirect('login');
}
    }