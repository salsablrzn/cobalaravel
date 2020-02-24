<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('hi', function () {
    return "Hi, lagi belajar laravel ni yee....";
});

Route::get('myView', function () {
    return view('webtest');
});

Route::get('ID/{id}', function ($id) {
    echo 'ID Anda : '.$id;
});

Route::get('viewcontroll', 'MyfirstController@index');

Route::get('tampilnama', 'MyfirstController@nama');

Route::get('matkul', 'MyfirstController@matkul');

Route::get('getname/{nama}', 'MyfirstController@getNameFromUrl');

Route::get('formulir', 'MyfirstController@formulir');
Route::post('formulir/proses', 'MyfirstController@proses');

Route::get('home', 'MyfirstController@home');
Route::get('tentang', 'MyfirstController@tentang');

Route::get('admin', function () {
    return view('admin/admin');
});

Route::get('header', function () {
    return view('admin/header');
});

Route::get('footer', function () {
    return view('admin/footer');
});

Route::get('sidebar', function () {
    return view('admin/sidebar');
});

Route::get('master/index', 'master\CategoriesController@index');
Route::get('master/create', 'master\CategoriesController@create');
Route::get('master/edit', 'master\CategoriesController@edit');
Route::get('master/destroy', 'master\CategoriesController@destroy');

Route::get('master/index1', 'master\CustomerController@index');
Route::get('master/create1', 'master\CustomerController@create');
Route::get('master/edit1', 'master\CustomerController@edit');
Route::get('master/destroy1', 'master\CustomerController@destroy');

Route::get('master/index2', 'master\ProductController@index');
Route::get('master/create2', 'master\ProductController@create');
Route::get('master/edit2', 'master\ProductController@edit');
Route::get('master/destroy2', 'master\ProductController@destroy');

Route::get('master/index3', 'master\UserController@index');
Route::get('master/create3', 'master\UserController@create');
Route::get('master/edit3', 'master\UserController@edit');
Route::get('master/destroy3', 'master\UserController@destroy');

Route::get('Transaksi/index4', 'Transaksi\SalesController@index');
Route::get('Transaksi/create4', 'Transaksi\SalesController@create');
Route::get('Transaksi/edit4', 'Transaksi\SalesController@edit');
Route::get('Transaksi/destroy4', 'Transaksi\SalesController@destroy');

Route::get('Transaksi/index5', 'Transaksi\SalesDetailController@index');
Route::get('Transaksi/create5', 'Transaksi\SalesDetailController@create');
Route::get('Transaksi/edit5', 'Transaksi\SalesDetailController@edit');
Route::get('Transaksi/destroy5', 'Transaksi\SalesDetailController@destroy');