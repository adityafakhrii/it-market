<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Barang</title>
    <link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
  </head>
  <body>

    <div style="margin-left: 100px;" class="tambah_barang">
      <h2>Tambah Barang</h2><br/>
      <form method="post" action="{{url('barang')}}" enctype="multipart/form-data">
        @csrf
        <div class="input_barang">
            <label for="img_url_barang"></label>
            <input type="file" name="img_url_barang" id="img_url_barang">
        </div>
        <div class="input_barang">
            <label for="nama">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama">
        </div>
        <div class="input_barang">
            <label for="merk">Merk Barang</label>
            <input type="text" name="merk_barang" id="merk">
        </div>
        <div class="input_barang">
            <label for="warna">Warna</label>
            <input type="text" name="warna" id="warna">
        </div>
        <div class="input_barang">
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga">
        </div>
        <div class="input_barang">
            <label for="jumlah">Jumlah Stok</label>
            <input type="text" name="jumlah_stok" id="jumlah">
        </div>
        <div class="input_barang">
            <label for="sisa">Sisa</label>
            <input type="text" name="sisa" id="sisa">
        </div>
            <button type="submit">Submit</button>
            <a href="{{'barang'}}">Kembali</a>
    
      </form>
    </div>
  </body>
</html>