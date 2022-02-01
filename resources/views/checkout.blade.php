<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>
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
	<div class="container">
		<h4> Checkout Belanja </h4>

		<div class="result"></div>
		<table border="1">
			<tbody>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Merk</th>
					<th>Warna</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Ongkir</th>
					<th>Total</th>
				</tr>
				<?php $no = 0;?>
				@foreach(Session::get('keranjang') as $b)
				<tr>
				<?php $no++ ?>
					<td>{{$no}}</td>
					<td>{{$b['nama_barang']}}</td>
					<td>{{$b['merk_barang']}}</td>
					<td>{{$b['warna']}}</td>
					<td>Rp.{{$b['harga']}},-</td>
					<td>{{$b['jumlah']}}</td>
					<td>10000</td>
					<td>{{($b['harga']*$b['jumlah'])}}</td>		
				</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<a  class="tombol" href="{{url('home')}}">Kembali</a>

		<table>
			<tbody>
				<tr>
					<th>Total Bayar</th>
				</tr>
				<tr>
					<?php $harga = 0;?>
					@foreach(Session::get('keranjang') as $b)
						<?php $harga = $harga + ($b['harga']*$b['jumlah']);?>
					@endforeach
					<td>{{$harga}}</td>
				</tr>

			</tbody>
		</table>

		<a  class="tombol" href="{{url('bayar')}}">Bayar</a>

	</div>
		<div class="footer2">
			<p>Copyright &copy Aditya Fakhri Riansyah</p>
	</div>
</body>
</html><td></td>