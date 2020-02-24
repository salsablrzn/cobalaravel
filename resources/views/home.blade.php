<!-- gunakan template master -->
@extends('master')
<!-- Bagian Judul -->
<!-- jika isi bagian / section sedikit, dapat ditulis seperti ini -->
@section('judul', 'Halaman Home')
<!-- isi konten -->
<!-- jika isi section panjang, maka penulisan dilakukan seperti ini -->
@section('konten')
 <p>Ini adalah halaman home</p>
 <p>Halaman ini dipanggil dengan menggunakan template, asik ya???</p>
 @endsection
