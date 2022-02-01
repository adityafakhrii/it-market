<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Barang</title>
    <link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
  </head>
  <body>
    <div style="margin-left: 100px;" class="edit_barang">
      <h2>Edit Barang</h2><br/>
      <form method="POST" action="{{action('BarangController@update', $id_barang)}}">
        @csrf
        @method('PATCH')
        <div class="input_barang">
            <label for="nama">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama" value="{{$barang->nama_barang}}">
        </div>
        <div class="input_barang">
            <label for="merk">Merk Barang</label>
            <input type="text" name="merk_barang" id="merk" value="{{$barang->merk_barang}}">
        </div>
        <div class="input_barang">
            <label for="warna">Warna</label>
            <input type="text" name="warna" id="warna" value="{{$barang->warna}}">
        </div>
        <div class="input_barang">
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" value="{{$barang->harga}}">
        </div>
        <div class="input_barang">
            <label for="jumlah">Jumlah Stok</label>
            <input type="text" name="jumlah_stok" id="jumlah" value="{{$barang->jumlah_stok}}">
        </div>
        <div class="input_barang">
            <label for="sisa">Sisa</label>
            <input type="text" name="sisa" id="sisa" value="{{$barang->sisa}}">
        </div>
            <button type="submit">Submit</button>

            <a href="{{url('barang')}}">Kembali</a>
    
      </form>
    </div>
  </body>
</html>