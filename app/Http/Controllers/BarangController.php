<?php

namespace App\Http\Controllers;
use App\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::all();
        return view('barang')->with("barang",$barang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $barang = new barang();
    $img_path = "";
    if($request->hasFile('img_url_barang')){
        $foto = $request->file('img_url_barang');
        $filename = $foto->getClientOriginalName();
        $foto->move(public_path()."/images/",$filename);
        $img_path = "images/".$filename;
    }
    $barang->nama_barang = $request->get('nama_barang');
    $barang->merk_barang = $request->get('merk_barang');
    $barang->warna = $request->get('warna');
    $barang->harga = $request->get('harga');
    $barang->jumlah_stok = $request->get('jumlah_stok');
    $barang->sisa = $request->get('sisa');
    $barang->img_url_barang = $img_path;
    $barang->save();

    return redirect('barang')->with('sukses','Barang telah ditambahkan');
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







    public function edit($id_barang)
    {
        $barang = barang::find($id_barang);
        return view('edit_barang',compact('barang','id_barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barang)
    {
        $barang= barang::find($id_barang);
        $barang->nama_barang = $request->get('nama_barang');
        $barang->merk_barang = $request->get('merk_barang');
        $barang->warna = $request->get('warna');
        $barang->harga = $request->get('harga');
        $barang->jumlah_stok = $request->get('jumlah_stok');
        $barang->sisa = $request->get('sisa');
        $barang->save();
        return redirect('barang');
    }

    public function destroy($id_barang)
    {
        $barang = barang::find($id_barang);
        $barang->delete();
        return redirect('barang')->with('sukses','Employee Has Been Deleted');
    }
}
