<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Riwayat Pembelian</title>
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

	<h2>Riwayat Pembelian</h2>
	<table border="1">
		<tbody>
			<tr>
				<td>No. Resi</td>
				<td>Total Harga</td>
				<td>Status</td>
				<td>Tgl Beli</td>
				<td>Detail Pembelian</td>
			</tr>
			<?php
				use App\Pembelian;
				use App\DetailPembelian;
				use App\barang;
				$pembelian = Pembelian::where('id_a',Auth::user()->id)->get();
			?>
				@foreach($pembelian as $p)
				<?php 	$harga = 0;
						$detail = DetailPembelian::where('id_pembelian',$p->id_pembelian)->get();

						foreach($detail as $d){
							$b = barang::find($d->id_barang);
							$b_h = $b->harga;
							$harga = $harga + ($b_h * $d->qty);  
						}
						$harga = $harga + 10000;?>
				<tr>
					<td>{{$p->no_resi}}</td>
					<td>{{$harga}}</td>
					<td>{{$p->status}}</td>
					<td>{{$p->created_at}}</td>
					<td><a href="{{action('CheckoutController@detailbeli',$p->no_resi)}}">Detail</a></td>
				</tr>
				@endforeach	
		</tbody>
	</table>
	<a  class="tombol_riwayat" href="{{url('home')}}">Kembali</a>
</div>

	<div class="footer2">
			<p>Copyright &copy Aditya Fakhri Riansyah</p>
	</div>
</body>
</html>