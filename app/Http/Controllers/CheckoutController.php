<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\DetailPembelian;
use Session;
use Auth;
use App\barang;



class CheckoutController extends Controller
{
    public function index(){
    	return view('checkout');
    }

    public function bayar(){
    	$keranjang = null;
        if(Session::has('keranjang')){
            $keranjang = Session::get('keranjang');
        }
    	$check = Pembelian::where('status','pending')->where('id_a',Auth::user()->id)->first();
    	if($check){
    		return view('bayar');
    	}
        
    	$pembelian = new Pembelian();
    	$pembelian->id_a = Auth::user()->id;
    	$pembelian->status = "pending";
    	$pembelian->no_resi = substr(rand(),0,20);
    	if($pembelian->save()){
    		foreach($keranjang as $value){
    			$data = new DetailPembelian();
    			$data->id_barang = $value['id_barang'];
    			$data->qty = $value['jumlah'];
    			$data->id_pembelian = $pembelian->id_pembelian;
    			$data->save();
    		}
    	}
    	Session::forget('keranjang');
    	return view('bayar');
    }




    public function upload(Request $request){
    	$id = $request->get('id_a');
    	if($request->hasFile('upload')){
    	}
    		$foto = $request->file('upload');
    		$filename = $foto->getClientOriginalName();
    		$foto->move(public_path()."/images/",$filename);
    		$pembelian = Pembelian::find($request->id_p);
    		$pembelian->img_url = "images/".$filename;
    		$pembelian->save();
    	return redirect('bayar');
    }


    public function change(Request $request){
    	$pembelian = Pembelian::find($request->get('id_p'));
    	$pembelian->status = "sending";
    	$pembelian->save();

    	$barang = barang::all();
    	$detail = DetailPembelian::where('id_pembelian',$pembelian->id_pembelian)->get();
    	foreach($detail as $d){
    		foreach($barang as $b){
    			if($d->id_barang == $b->id_barang){
    				$b->sisa = $b->sisa - $d->qty;
    				$b->save();
    			}
    		}
    	}
    	return redirect('home')->with('terkirim',"Barang Sudah dikirim");
    }





    public function status(){
        return view('status_pembelian');
    }

    public function riwayat(){
            return view('riwayat_pembelian');
        }

    public function konfir(Request $request,$id){
        $pembelian = Pembelian::find($id);
        $pembelian->status = "sent";
        $pembelian->save();
        return redirect('home')->with('terkirim',"Barang Sudah diterima");
    }

    
    public function detailbeli(Request $request,$nores){
        $pembelian = Pembelian::where('no_resi',$nores)->first();
        $idp = $pembelian->id_pembelian;
        return view('detail_pembelian')->with('id',$idp);
    }
}
