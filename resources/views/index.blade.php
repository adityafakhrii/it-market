<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IT-Market.co</title>
	<link rel="stylesheet" href="{{asset('component/fa/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('component/style_index.css')}}">
	<link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
</head>
<body>

	<div class="body_head">
		<div class="header">

			<div class="top">
				<div class="topleft">

					<a class="twitter" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
					<a class="fb" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
					<a class="gplus" href="https://plus.google.com"><i class="fab fa-google-plus-g"></i></a>
				</div>

				<div class="topright">
					<i class="fas fa-search"></i>
					<a href="{{url('login')}}">Masuk</a>
					<a href="{{url('register')}}">Daftar</a>
				</div>
			</div>

			<div class="title">
				<h2>IT-Market.co</h2>
			</div>
				
				<div class="nav">
					<ul>
						<li><a href="#">Beranda</a></li>
						<li><a href="#pro">Produk Pilihan</a></li>
						<li><a href="#service">Layanan</a></li>
						<li><a href="#panduan">Panduan Belanja</a></li>
						<li><a href="#information">Info</a></li>
					</ul>
				</div>
				
			<div class="welcome">
				<h1>SELAMAT DATANG</h1>
				@if(Session::has('logout'))
					<h1>Logout Berhasil</h1>
				@endif
				<p>Your IT Solutions !</p>
				<!-- <input type="button" onclick="location.href='http://google.com';" value="Belanja Sekarang!"> -->
				<a href="{{url('home')}}" class="link">Belanja Sekarang</a>
				<div class="scroll">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
	
		<div id="pro">				
			 <div class="pro">
					<h2>Produk Pilihan</h2>
					<p>Berbagai kebutuhan IT dalam satu website</p>
				</div>
			<div class="produk">

				<div class="gambar">
					<img src="{{asset('component/img/pro.png')}}" alt="">
				</div>

				<div class="detail">
					<h2>Gaming Headphone</h2>
					<h3>Rp.300000,-</h3>
					<div class="share"><a href="#"><i class="fas fa-share-alt"></i></a></div>
					
					<div class="ready">
							<h2>Ready Stock</h2>
							<h3> Sisa 84</h3>
							<a href="">Tambah keranjang</a>
					</div>
				</div>
			</div>
			<div class="produk">

				<div class="gambar">
					<img src="{{asset('component/img/pro.png')}}" alt="">
				</div>

				<div class="detail">
					<h2>Gaming Headphone</h2>
					<h3>Rp.300000,-</h3>
					<div class="share"><a href="#"><i class="fas fa-share-alt"></i></a></div>
					
					<div class="ready">
							<h2>Ready Stock</h2>
							<h3> Sisa 84</h3>
							<a href="">Tambah keranjang</a>
					</div>
				</div>
			</div>
			<div class="produk">

				<div class="gambar">
					<img src="{{asset('component/img/pro.png')}}" alt="">
				</div>

				<div class="detail">
					<h2>Gaming Headphone</h2>
					<h3>Rp.300000,-</h3>
					<div class="share"><a href="#"><i class="fas fa-share-alt"></i></a></div>
					
					<div class="ready">
							<h2>Ready Stock</h2>
							<h3> Sisa 84</h3>
							<a href="">Tambah keranjang</a>
					</div>
				</div>
			</div>
			<div class="produk">

				<div class="gambar">
					<img src="{{asset('component/img/pro.png')}}" alt="">
				</div>

				<div class="detail">
					<h2>Gaming Headphone</h2>
					<h3>Rp.300000,-</h3>
					<div class="share"><a href="#"><i class="fas fa-share-alt"></i></a></div>
					
					<div class="ready">
							<h2>Ready Stock</h2>
							<h3> Sisa 84</h3>
							<a href="">Tambah keranjang</a>
					</div>
				</div>
			</div>
		</div>




		<div id="service">
			<div class="layanan">
				<h2>Layanan</h2>
				<p>Pelayanan yang terbaik untuk anda</p>
			</div>
			<div class="box_layanan">
				<div class="icon_layanan"><img class="ongkos" src="{{asset('component/img/shipping.png')}}" alt=""></div>
				<div class="content">
					<h3>Gratis Ongkos Kirim</h3><br>
					<p>Kami memberikan layanan subsidi 
					gratis ongkos kirim hingga Rp. 50.000,- 
					untuk memuaskan konsumen</p>
				</div>
			</div>
			<div class="box_layanan">
				<div class="icon_layanan"><img class="pengiriman" src="{{asset('component/img/rocket.png')}}" alt=""></div>
				<div class="content">
					<h3>Kecepatan Pengiriman</h3><br>
					<p>Kecepatan pengiriman dan pelayanan 
					dengan respon yang cepat, 
					kami selalu siap sedia untuk anda</p>
				</div>
			</div>
			<div class="box_layanan">
				<div class="icon_layanan"><img class="promo" src="{{asset('component/img/discount.png')}}" alt=""></div>
				<div class="content">
					<h3>Promo Menarik</h3><br>
					<p>Dapatkan promo menarik setiap harinya 
					hanya di LavaShop.id,
					potongan harga hingga 90%</p>
				</div>
			</div>
		</div>

		<div id="panduan">
			<div class="judul_pan">
				<h2>Panduan Belanja</h2>
				<p>Kami mengutamakan kemudahan belanja anda</p>
			</div>
			<div class="box_panduan">
					<i class="fas fa-quote-left fa2" aria-hidden="true"></i>
				<div class="teks">
					<i class="fas fa-quote-right fa1" aria-hidden="true"></i>
					<div>
						<h1>Pilih Produk</h1>
						<p>Pilih jutaan produk yang anda ingkinkan. Anda akan dialihkan ke keranjang.</p>
					</div>				
				</div>
			</div>
			<div class="box_panduan">
					<i class="fas fa-quote-left fa2" aria-hidden="true"></i>
				<div class="teks">
					<i class="fas fa-quote-right fa1" aria-hidden="true"></i>
					<div>
						<h1>Checkout</h1>
						<p>Lakukan checkout, pilih metode pembayaran dan bayar sesuai total harga</p>
					</div>				
				</div>
			</div>
			<div class="box_panduan">
					<i class="fas fa-quote-left fa2" aria-hidden="true"></i>
				<div class="teks">
					<i class="fas fa-quote-right fa1" aria-hidden="true"></i>
					<div>
						<h1>Upload</h1>
						<p>Upload bukti pembayaran anda dan tunggu konfirmasi admin. Pembayaran selesai dan produk akan dikirimkan.</p>
					</div>				
				</div>
			</div>
		</div>

		<div id="information">
			<div class="info">
				<h2>Info</h2>
				<p>Hubungi kami dan tetap terhubung</p>
			</div>

			<div class="box_info">
				<div class="icon_info"><img class="twitter" src="{{asset('component/img/twitter.png')}}" alt=""></div>
				<div class="details"><h3>@Lava_Shop.id</h3></div>
			</div>
			
			<div class="box_info">
				<div class="icon_info"><img class="fb" src="{{asset('component/img/fb.png')}}" alt=""></div>
				<div class="details"><h3>Lava Shop ID</h3></div>
			</div>

			<div class="box_info">
				<div class="icon_info"><img class="gplus" src="{{asset('component/img/gplus.png')}}" alt=""></div>
				<div class="details"><h3>Lava Shop ID</h3></div>
			</div>

			<div class="box_info">
				<div class="icon_info"><img class="mail" src="{{asset('component/img/mail.png')}}" alt=""></div>
				<div class="details"><h3>lavashop@yahoo.co.id</h3></div>
			</div>
			
			<div class="box_info">
				<div class="icon_info"><img class="phone" src="{{asset('component/img/phone.png')}}" alt=""></div>
				<div class="details"><h3>(022) 14061</h3></div>
			</div>

			<div class="box_info">
				<div class="icon_info"><img class="message" src="{{asset('component/img/message.png')}}" alt=""></div>
				<div class="details"><h3>+628 95324105731</h3></div>
			</div>
		</div>

	</div>
	
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