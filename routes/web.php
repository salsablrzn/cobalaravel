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
	if(!Session::get('login')){
		return redirect('login');
	}
	else{
    return view('admin/body');
}
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

//-------------------Tambahan-------------------
// Route::get('/', function () {
//     return view('master/Login/login');
// });

// Route::get('/login', 'AuthController@login')->name('login');
// Route::post('/postlogin', 'AuthController@postlogin');
// Route::get('/register', 'RegisterController@register');
// Route::get('/logout', 'AuthController@logout');

// Route::get('/','Master\LoginController@index');
Route::get('login','Master\LoginController@index');
Route::post('proses','Master\LoginController@proses');
Route::get('logout','Master\LoginController@logout');

Route::get('regist','Master\RegistController@index');
Route::post('RegistStore','Master\RegistController@store');

Route::get('invoicePDF/{id}','Transaksi\SalesController@cetak_pdf');

//-------------------Tambahan-------------------

Route::get('CategoriesIndex', 'Master\CategoriesController@index');
Route::get('CategoriesCreate', 'Master\CategoriesController@create');
Route::post('CategoriesStore', 'Master\CategoriesController@store');
Route::get('CategoriesEdit{id}', 'Master\CategoriesController@edit');
Route::post('CategoriesUpdate', 'Master\CategoriesController@update');
Route::get('CategoriesDestroy/{id}', 'Master\CategoriesController@destroy');

Route::get('CustomerIndex', 'Master\CustomerController@index');
Route::get('CustomerCreate', 'Master\CustomerController@create');
Route::post('CustomerStore', 'Master\CustomerController@store');
Route::get('CustomerEdit{id}', 'Master\CustomerController@edit');
Route::post('CustomerUpdate', 'Master\CustomerController@update');
Route::get('CustomerDestroy/{id}', 'Master\CustomerController@destroy');

Route::get('ProductIndex', 'Master\ProductController@index');
Route::get('ProductCreate', 'Master\ProductController@create');
Route::post('ProductStore', 'Master\ProductController@store');
Route::get('ProductEdit{id}', 'Master\ProductController@edit');
Route::post('ProductUpdate', 'Master\ProductController@update');
Route::get('ProductDestroy/{id}', 'Master\ProductController@destroy');

Route::get('UserIndex', 'Master\UserController@index');
Route::get('UserCreate', 'Master\UserController@create');
Route::post('UserStore', 'Master\UserController@store');
Route::get('UserEdit{id}', 'Master\UserController@edit');
Route::post('UserUpdate', 'Master\UserController@update');
Route::get('UserDestroy/{id}', 'Master\UserController@destroy');

Route::get('SalesIndex', 'Transaksi\SalesController@index');
Route::get('SalesCreate', 'Transaksi\SalesController@create');
Route::get('SalesEdit', 'Transaksi\SalesController@edit');
Route::get('SalesDestroy', 'Transaksi\SalesController@destroy');

Route::post('SalesStore', 'Transaksi\PosController@store');

Route::get('SalesDetailIndex', 'Transaksi\SalesDetailController@index');
Route::get('SalesDetailCreate', 'Transaksi\SalesDetailController@create');
Route::get('SalesDetailEdit', 'Transaksi\SalesDetailController@edit');
Route::get('SalesDetailDestroy', 'Transaksi\SalesDetailController@destroy');

Route::get('PosCreate', 'Transaksi\PosController@create');
Route::get('PosIndex', 'Transaksi\PosController@index');
Route::get('PosEdit{id}', 'Transaksi\PosController@edit');
Route::get('PosInvoice{id}', 'Transaksi\PosController@show');
Route::post('SalesUpdate', 'Transaksi\PosController@update');
Route::get('PosDestroy', 'Transaksi\PosController@destroy');
