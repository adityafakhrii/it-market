<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barang</title>
	<link rel="stylesheet" href="{{asset('component/style_barang_admin.css')}}">
	<link rel="stylesheet" href="{{asset('component/fa/css/all.css')}}">
	<link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
</head>
<body>
<div class="nav">
	<h2><a href="{{url('barang')}}">IT-Market.co</a></h2>

	<ul>

		<li><a href="{{url('barang')}}">Barang</a></li>
		<li><a href="{{url('konfirmasi_admin')}}">Konfirmasi Pembelian</a></li>
		<li>
			<form class="cari" action="{{action('KeranjangController@search')}}">
				<input type="text" placeholder="cari" name='cari'>
				<input type="submit" value="Cari">
			</form>
		</li>
	</ul>
	
</div>


	<div class="table_barang">
	<a href="{{'tambah_barang'}}">Tambah</a>
	<br><br>
		<table border="1">
			<tbody>
				<tr>
					<th>No</th>
					<th>ID</th>
					<td>Gambar</td>
					<th>Nama</th>
					<th>Merk</th>
					<th>Warna</th>
					<th>Harga</th>
					<th>Jumlah Stok</th>
					<th>Sisa</th>
					<th colspan="2">Aksi</th>
				</tr>
				<?php $no = 0;?>
				@foreach($barang as $b)
				<tr>
				<?php $no++ ?>
					<td>{{$no}}</td>
					<td>{{$b['id_barang']}}</td>
					<td><img src="{{asset($b['img_url_barang'])}}" width="100" alt=""></td>
					<td>{{$b['nama_barang']}}</td>
					<td>{{$b['merk_barang']}}</td>
					<td>{{$b['warna']}}</td>
					<td>Rp.{{$b['harga']}},-</td>
					<td>{{$b['jumlah_stok']}}</td>
					<td>{{$b['sisa']}}</td>
					<td><a href="{{action('BarangController@edit',$b['id_barang'])}}">Edit</a></td>
					<td>
			          	<form action="{{action('BarangController@destroy', $b['id_barang'])}}" method="post">
			            @csrf
			            <input name="_method" type="hidden" value="DELETE">
			            <button type="submit">Delete</button>
			          	</form>
		       		</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	
</body>
</html>