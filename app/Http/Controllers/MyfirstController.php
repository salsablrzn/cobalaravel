<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyfirstController extends Controller
{
	public function index(){
		return view('webtest');
	}

	public function nama()
	{
		$nama = "Jendral Suharto";
		return view('showname', ['nama' => $nama]);
	}

	public function matkul()
	{
		$nama = "Udin Sarudin";
		$mk = ["Alpro", "Matdas","Pemprograman Web", "Jaringan Komputer"];
		return view('matakuliah', ['nama' => $nama, 'matkul' => $mk]);
	}

	public function getNameFromUrl($nama)
	{
		return view('showname', ['nama' => $nama]);
	}

	public function formulir()
	{
		return view('formulir');
	}

	public function proses(Request $req)
	{
		$nama = $req->input('nama');
		$alamat = $req->input('alamat');
		return "Nama : ".$nama." dan Alamat : ".$alamat;
	}

	public function home()
	{
		return view('home');
	}

	public function tentang()
	{
		return view('tentang');
	}
}