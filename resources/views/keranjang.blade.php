<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Keranjang</title>
	<link rel="stylesheet" href="{{asset('component/fa/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('component/style_nav.css')}}">
	<link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
</head>
<body>
<div class="nav_keranjang">
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



	<?php
		use App\barang;
	?>

	@if(Session::has('keranjang'))
	
	@foreach(Session::get('keranjang') as $b)
	<?php $barang = barang::find($b['id_barang']);?>
	<div class="keranjang">
		<div class="gambar">
			<img src="{{asset($barang->img_url_barang)}}" alt="">
				<div class="nama_barang">
					<h3>{{$b['nama_barang']}}</h3>
					<table>
							<th class="min" height="30" width="30"><a href="{{action('KeranjangController@remove',$b['id_barang'])}}">-</a></th>
							<th class="jumlah" width="60">{{$b['jumlah']}}</th>
							<th width="30"><a href="{{action('KeranjangController@addkeranjang',$b['id_barang'])}}">+</a></th>
					</table>
					<div class="harga">
						<h4>Harga Rp.{{$b['harga']}},-</h4>
					</div>
				</div>
		</div>
	</div>
	@endforeach

	<div class="aksi">
		<h2>Pembayaran</h2>
		<a class="tombol" href="{{url('home')}}">Kembali</a>
		<a class="tombol" href="{{url('clear')}}">Hapus Keranjang</a>
		<a class="tombol" href="{{url('checkout')}}">Checkout</a>
	</div>

	@else
	<div class="empty">
		<p>Tidak ada barang di keranjang</p>
		<a class="tombol" href="{{url('home')}}">Kembali</a>
	</div>
	@endif

	<div class="footer2">
			<p>Copyright &copy Aditya Fakhri Riansyah</p>
	</div>

</body>
</html>