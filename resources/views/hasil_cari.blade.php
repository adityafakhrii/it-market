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
	<h2><a href="{{url('home')}}">IT-Market.co</a></h2>

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




	@if(Session::has('terkirim'))
		<h2>{{Session::get('terkirim')}}</h2>
	@endif

	<?php $no = 0;?>
	@foreach($data_pencarian as $b)
	<div class="produk">
		<div class="gambar">
			<img src="{{asset($b->img_url_barang)}}" alt="">
		</div>

		<div class="detail">
			<h2>{{$b['nama_barang']}}</h2>
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
	
		@endforeach

	<div class="footer">
		<div class="footer1">
			<div class="subfooter">
				<div class="isi">
					<img class="office" src="{{asset('component/img/office.png')}}" alt="kantor.jpg">
					<h2>Kantor</h2>
					<br>
					<p>Perumahan Cipoho Indah,
					Jl. Pelabuhan II, RT.01/RW.06,
					Cikondang, Kec. Citamiang,
					Kota Sukabumi, Jawa Barat 43141</p>
				</div>
			</div>
			<div class="subfooter">
				<div class="isi">
					<img class="ceo" src="{{asset('component/img/ceo.png')}}" alt="ceo.jpg">
					<h2>Pengembang</h2>
					<br>
					<p>Aditya Fakhri Riansyah, lahir di 
					Sukabumi, Jawa Barat. Merupakan 
				pendiri sekaligus pengembang IT-Market.co</p>
				</div>
			</div>
			<div class="subfooter">
				<div class="isi">
					<img class="about" src="{{asset('component/img/about.png')}}" alt="about.jpg">
					<h2>Tentang</h2>
					<br>
					<p>IT-Market.co merupakan online shop 
					karya anak bangsa asal sukabumi, 
					jawa barat. Menyediakan berbagai 
					macam kebutuhan komputer.</p>
				</div>
			</div>
			<div class="ikuti">			
				<h3 class="ikuti">Ikuti Kami </h3>
				<div class="img_icon">
					<a href="http://twitter.com"><i class="fab fa-twitter"></i></a>
					<a href="http://facebookcom"><i class="fab fa-facebook-f"></i></a>
					<a href="https://plus.google.com/discover"><i class="fab fa-google-plus-g"></i></a>

					<a class="atas" href="#">Kembali Ke Atas <i class="fas fa-arrow-circle-up"></i></a>
				</div>
			</div>
		</div>

		<div class="footer2">
			<p>Copyright &copy Aditya Fakhri Riansyah</p>
		</div>
	</div>
</body>
</html>