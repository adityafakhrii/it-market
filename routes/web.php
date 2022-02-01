<?php
use App\barang;
use App\topik;
Route::get('/', function () {
    if (!Auth::check()) {
		return view('index');
	}
	else{
		return redirect('home');
	}
});
Route::get('login',function(){
	if (!Auth::check()) {
		return view('login');
	}
	else{
		return redirect('topik');
	}
});


Route::post('login',"LoginController@login");
Route::get('home',function(){

        $barang = barang::all();
		return view('home')->with("barang",$barang);
});
Route::get('clear',function(){
	Session::forget('keranjang');
	return redirect('keranjang');
});
Route::get('logout',function(){
	Auth::logout();
	Session::forget('keranjang');
	return redirect('/');
});



Route::resource('barang','BarangController');
Route::get('tambah_barang' ,"BarangController@create");
Route::get('barang/edit/{id}',"BarangController@edit");

Route::get('keranjang',function(){
		return view('keranjang');
});
Route::get('keranjang/add/{id}',"KeranjangController@add");
Route::get('keranjang/addkeranjang/{id}',"KeranjangController@addkeranjang");
Route::get('keranjang/remove/{id}',"KeranjangController@remove");
Route::get('home/search',"KeranjangController@search");

Route::get('checkout',"CheckoutController@index");
Route::get('bayar',"CheckoutController@bayar");
Route::post('upload',"CheckoutController@upload");

Route::post('change',"CheckoutController@change");


Route::get('status',"CheckoutController@status");
Route::get('riwayat',"CheckoutController@riwayat");
Route::get('detail/{id}',"CheckoutController@detailbeli");
Route::get('konfirb/{id}',"CheckoutController@konfir");
Route::resource('register', 'UserController');
Route::get('register',"UserController@create");


Route::resource('topik','TopikController');
Route::get('tambah_topik','TopikController@create');
Route::get('topik/edit/{id_topik}',"TopikController@edit");
Route::get('topik/hapus/{id_topik}',"TopikController@destroy");
