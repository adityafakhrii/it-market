<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bayar</title>
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

	<table>
		<tr>
			<th>Konfirmasi Pembelian</th>
		</tr>
		<tr>
			<td>
			<?php
				use App\Pembelian;
				use App\DetailPembelian;
				use App\barang;
					$p = Pembelian::where('status','pending')->where('id_a',Auth::user()->id)->first();
					if($p->img_url = null && $p->img_url = ""){
			?>
							<img src="{{URL::asset($p->img_url)}}" width="500">
							<form action="{{action('CheckoutController@change')}}" method="POST">
							@csrf
								<input type="hidden" name="id_p" value="
								<?php
									if($p){
										echo $p->id_pembelian;
									}
								?>
								">
								<input type="submit" value="Kirim Barang!">
							</form>
			<?php 
				}	
			?>		
			</td>
		</tr>
	</table>


			<table>
			<tbody>
				<tr>
					<th>Detail Pembayaran</th>
				</tr>
				<tr>
					<td>+ Ongkir Rp.10000,-</td>
				</tr>
			</tbody>
		</table>

		<table>
			<tbody>
				<tr>
					<th>Total Bayar</th>
				</tr>
				<tr>
					<?php 
						$harga = 0;
						$pembelian = Pembelian::where('id_a',Auth::user()->id)->where('status','pending')->first();
						$detail = DetailPembelian::where('id_pembelian',$pembelian->id_pembelian)->get();
						foreach($detail as $d){
							$b = barang::find($d->id_barang);
							$b_h = $b->harga;
							$harga = $harga + ($b_h * $d->qty);  
						}
						$harga = $harga + 10000;
					?>
					<td>Rp.{{$harga}},- </td>
				</tr>

			</tbody>
		</table>
</div>


</body>
</html>