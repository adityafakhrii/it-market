<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\barang;
use Session;



class KeranjangController extends Controller
{

   public function add(Request $request,$id_barang){
   if(!Auth::check()){
    return redirect('login');
    }
   else{
        $barang = barang::find($id_barang);
        $arrai = [];
            if (Session::has('keranjang')){
                $arrai = Session::get('keranjang');
                $exists = false;
                $i=0;
                    foreach ($arrai as $value) {
                        if ($value['id_barang'] == $id_barang) {
                            $arrai[$i]['jumlah']++;
                            $exists=true;
                        }
                        $i++;
                    }
                    if(!$exists){
                        $data = $barang->toArray();
                        $data['jumlah'] = 1;
                        array_push($arrai, $data);
                    }
                }
            else{
                $data=$barang->toArray();
                $data['jumlah']=1;
                array_push($arrai, $data);
            }
            Session::put('keranjang',$arrai);
            return redirect('home');
            }
        }
    

    public function remove(Request $request,$id_barang){
    if(!Auth::check()){
        return redirect('login');
    }
    else{
        $barang = barang::find($id_barang);
        $arr = [];

            if(Session::has('keranjang')){
                $arr = Session::get('keranjang');
                $i = 0;
                foreach ($arr as $value) {
                    if(array_key_exists($i, $arr)){
                        if(in_array($id_barang, $value)){
                            if ($arr[$i]['jumlah']==1) {
                                unset($arr[$i]);
                            }
                            else{
                                $arr[$i]['jumlah']--;
                            }
                        }
                    }
                    $i++;
                }
                $array_baru = [];
                foreach ($arr as $value) {
                    array_push($array_baru, $value);
                }
                $arr = $array_baru;
            Session::put('keranjang',$arr);
            }
        return redirect('keranjang');
        }
   }



   public function search(Request $request){
    $barang = barang::all();

    $search = $request->get('cari');
    $data_pencarian = null;
    if (is_numeric($search)){
        $data_pencarian=barang::where('harga','like','%'.$search.'%')->orderBy('id_barang')->paginate(999);
    }
    else{
        $data_pencarian=barang::where('nama_barang','like','%'.$search.'%')->orderBy('id_barang')->paginate(999);
    }
    return view('hasil_cari',compact('data_pencarian'));
   }



   public function addkeranjang(Request $request,$id_barang){
        $arr = Session::get('keranjang');
        $i = 0;
        foreach($arr as $r){
            if($r['id_barang'] == $id_barang){
                $arr[$i]['jumlah']++;
            }
            $i++;
        }
        Session::put('keranjang',$arr);
        return redirect('keranjang');
   }
}


