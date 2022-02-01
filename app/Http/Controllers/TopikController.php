<?php

namespace App\Http\Controllers;
use App\Topik;
use Illuminate\Http\Request;

class TopikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topik = Topik::all();
        return view('topik')->with("topik", $topik);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_topik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topik = new Topik();
        $topik->nama_topik = $request->get('nama_topik');
        $topik->harga= $request->get('harga');
        $topik->nama_pengajar= $request->get('harga');
        $topik->save();

        return redirect('topik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_topik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_topik)
    {
        $topik = topik::find($id_topik);
        return view('edit_topik',compact('topik','id_topik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_topik)
    {
        $topik = topik::find($id_topik);
        $topik->nama_topik = $request->get('nama_topik');
        $topik->harga = $request->get('harga');
        $topik->nama_pengajar = $request->get('nama_pengajar');
        $topik->save();

        return redirect('topik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_topik)
    {
        $topik = topik::find($id_topik);
        $topik->delete();
        return redirect('topik')->with('sukses','Telah Dihapus');
    }
}
