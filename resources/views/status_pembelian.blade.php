<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Status</title>
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


	<?php 
		use App\Pembelian;
		use App\DetailPembelian;
		use App\barang;
	?>
	@auth	
	<?php
		$pembelian = Pembelian::where('id_a',Auth::user()->id)->where('status','pending')->orWhere('status','sending')->first();
		if($pembelian){
			$detail = DetailPembelian::where('id_pembelian',$pembelian->id_pembelian)->get();
	?>

		<div class="container_status">
			<h2>Status Pembelian</h2>
			<table border="1">
				<tbody>
					<tr>
						<td>IMG</td>
						<td>Nama</td>
						<td>Status</td>
						<td>Jumlah Barang</td>
						<td>Total Harga Barang</td>
					</tr>
					@foreach($detail as $p)
					<?php $barang = barang::find($p->id_barang);?>
					<tr>
						<td><img src="{{asset($barang->img_url_barang)}}" width="150" height="150"></td>
						<td>{{$barang->nama_barang}}</td>
						<td>{{$pembelian->status}}</td>
						<td>{{$p->qty}}</td>
						<td>{{($p->qty * $barang->harga)}}</td>
					</tr>
				</tbody>
			@endforeach
			</table>
			@if($pembelian->status != "sending")
				<h2>Total Bayar</h2>
				<p> +Ongkir Rp.10000,- </p>
				<?php $harga = 0;
							$detail = DetailPembelian::where('id_pembelian',$pembelian->id_pembelian)->get();
							foreach($detail as $d){
								$b = barang::find($d->id_barang);
								$b_h = $b->harga;
								$harga = $harga + ($b_h * $d->qty);  
							}
							$harga = $harga + 10000;
						?>
						<h4>Rp.{{$harga}},- </h4>

				<h2>No Rekening</h2>
				<p>9000024082019 a/n Aditya Fakhri</p>
				<a href="{{url('bayar')}}">Bayar</a>
			@else
				<h3 style="margin-bottom: -7px;">Konfirmasi Barang</h3>
				<a class="tombol" href="{{action('CheckoutController@konfir',$pembelian->id_pembelian)}}">Barang sudah diterima!</a>
			@endif
			<?php
			}
			else{
			?>
				<div class="tidak_pesanan">
					<h3>Tidak ada pesanan</h3>
					<a class="tombol" href="{{url('home')}}">Kembali</a>
				</div>
			<?php
			}
			?>
			@endauth
			@guest
				<?php return redirect('home');?>
			@endguest
		</div>

</body>
		<div class="footer2">
			<p>Copyright &copy Aditya Fakhri Riansyah</p>
	</div>
</html>