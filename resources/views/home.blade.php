<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="{{asset('component/style_home.css')}}">
	<link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
	<link rel="stylesheet" href="{{asset('component/fa/css/all.css')}}">
</head>
<body>

<div class="nav">
	<h2><a href="{{url('/')}}">IT-Market.co</a></h2>

	<ul>
		@auth
		<li><a class="link" href="{{url('status')}}">Status Pembelian</a></li>
		<li><a class="link" href="{{url('riwayat')}}">Riwayat Pembelian</a></li>
		@endauth

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

	<?php $no = 0;?>
	@foreach($barang as $b)

<div class="container">
	<div class="produk">
		<div class="gambar">
			<img src="{{asset($b->img_url_barang)}}" alt="">
		</div>

		<div class="detail">
			<h2> {{$b['nama_barang']}}</h2>
			<h3>Rp.{{$b['harga']}},-</h3>
			@if($b['sisa'] > 0)
			<div class="share"><a href="#"><i class="fas fa-share-alt"></i></a></div>
			
			<div class="ready">
				
					<h2>Ready Stock</h2>
					<h3> Sisa {{$b['sisa']}}</h3>
					<a href="{{action('KeranjangController@add',$b['id_barang'])}}">Tambah keranjang</a>
				@else
					<h2>Out Of Stock</h2>

					<h3> Sisa {{$b['sisa']}}</h3>
					<a class="outstok" href="{{action('KeranjangController@add',$b['id_barang'])}}" disabled>Tambah keranjang</a>
				@endif
			</div>
		</div>
	</div>	
</div>
		@endforeach		



		<div class="footer2">
			<p>Copyright &copy Aditya Fakhri Riansyah</p>
		</div>

</body>
</html>