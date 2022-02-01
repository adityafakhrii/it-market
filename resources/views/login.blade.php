<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{asset('component/fa/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('component/style_login.css')}}">
	<link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
</head>
<body>

	<div class="form">
		<form action="{{url('login')}}" method="POST">
			@csrf
			<h2>Login</h2>
			<p>Dan temukan kejutannya!</p>
			<div class="input">
				<i class="fas fa-at" aria-hidden="true"></i></i>
				<input type="email" id="email" name="email" required="">
				<label for="email">Email</label>
			</div>
			<div class="input">
				<i class="fa fa-unlock" aria-hidden="true"></i>
				<input type="password" id="password" name="password" required="">
				<label for="password">Password</label>
			</div>
			<div class="input">
				<input type="submit" name="submit" value="Masuk">
			</div>
				
			<h3>Belum punya akun? <span><a href="{{url('register')}}">Daftar</a></span> atau <a href="{{url('/')}}">Kembali</a></h3>
		</form>
		<div class="session">
				@if(Session::has('fail'))
					<h2>Login Gagal</h2>
					<p>Email/Password salah...</p>
				@elseif(Session::has('succes'))
					<h2>Daftar Berhasil !</h2>
					<p> Silahkan Login</p>
				@endif
		</div>
	</div>
	
	
</body>
</html>