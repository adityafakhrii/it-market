<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Pembelian</title>
	<link rel="stylesheet" href="{{asset('component/fa/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('component/style_nav.css')}}">
	<link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
</head>
<body>
<div class="nav">
	<h2><a href="{{url('home')}}">IT-Market.co</a></h2>

	<ul>

		<li><a class="link" href="{{url('status')}}">Status Pembelian</a></li>
		<li><a class="link" href="{{url('riwayat')}}">Riwayat Pembelian</a></li>
		<li>
			<form class="cari" action="{{action('KeranjangController@search')}}">
				<input type="text" placeholder="Apa yang anda cari?" name='cari'>
				<input type="submit" value="Cari">
			</form>
		</li>
		<li><a href="{{url('keranjang')}}"><i class="fas fa-shopping-cart"></i></a></li>
		@auth	
			<li><a href="{{url('logout')}}"><i class="fas fa-sign-out-alt"></i></a></li>
		@endauth
	</ul>
	
</div>


<div class="container_detail">
	<?php
		use App\barang;
		use App\DetailPembelian;
		$detail = DetailPembelian::where('id_pembelian',$id)->get();
	?>
	<h2>Detail Pembelian</h2>
	<table border="1">
		<tbody>
			<tr>
				<td>Gambar</td>
				<td>Nama</td>
				<td>Jumlah Barang</td>
				<td>Total Harga Barang</td>
			</tr>
			@foreach($detail as $p)
			<?php $barang = barang::find($p->id_barang);?>
			<tr>
				<td><img src="{{asset($barang->img_url_barang)}}" width="150" ></td>
				<td>{{$barang->nama_barang}}</td>
				<td>{{$p->qty}}</td>
				<td>{{($p->qty * $barang->harga)}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="detail_pemb">
		<a class="tombol" href="{{url('riwayat')}}">Kembali</a>
		<a class="tombol" href="{{url('home')}}">Ke Halaman Utama</a>
	</div>
</div>
	
	<div class="footer2">
			<p>Copyright &copy Aditya Fakhri Riansyah</p>
	</div>
</body>
</html>