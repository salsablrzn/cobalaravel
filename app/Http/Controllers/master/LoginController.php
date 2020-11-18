<?php

namespace App\Http\Controllers\Master;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\user;

class LoginController extends Controller
{
    //
	public function index(){
		return view('master/Login/login');
	}
	
	public function proses(Request $req){
		$email = $req->Email;
		$pass = $req->Password;
		$data = user::where('Email',$email)->first();
        if($data){
           if($data->Password == $pass ) {
                Session::put('login', TRUE);
                if($data->Jabatan == '0'){
                    Session::put('admin', TRUE);
                }
                if($data->Jabatan == '1'){
                    Session::put('kasir', TRUE);
                }
                return redirect('admin');

            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah !');
            
        }
	}

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert-success','Anda sudah logout');
    }

}
