<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{asset('component/fa/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('component/style_login.css')}}">
    <link rel="icon" type="image/png" href="{{asset('component/img/logo.png')}}">
</head>
<body>

    <div class="form_daftar">
        <form action="{{action('UserController@store')}}" method="POST">
            @csrf
            <h2>Daftar</h2>
            <p>Dan temukan kejutannya!</p>
            <div class="input">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" id="name" name="name" required="">
                <label for="name">Nama Lengkap</label>
            </div>
            <div class="input">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" id="provinsi" name="provinsi" required="">
                <label for="provinsi">Provinsi</label>
            </div>
            <div class="input">
                <i class="far fa-address-card"></i>
                <input type="text" id="alamat" name="alamat" required="">
                <label for="alamat">Alamat Lengkap</label>
            </div>
            <div class="input">
                <i class="fas fa-mobile-alt"></i>
                <input type="text" id="no_hp" name="no_hp" required="">
                <label for="no_hp">No. Handphone</label>
            </div>
            <div class="input">
                <i class="fas fa-at" aria-hidden="true"></i>
                <input type="email" id="email" name="email" required="">
                <label for="email">Email</label>
            </div>
            <div class="input">
                <i class="fa fa-unlock" aria-hidden="true"></i>
                <input type="password" id="password" name="password" required="">
                <label for="password">Password</label>
            </div>
            <div class="input">
                <input type="submit" name="submit" value="Daftar">
            </div>
            
            <h3>Sudah punya akun? <span><a href="{{url('login')}}">Masuk</a></span> atau <a href="{{url('/')}}">Kembali</a></h3>
        </form>
    </div>
    <div class="session">
                @if(Session::has('fail'))
                    <h2>Login Gagal</h2>
                    <p>Email/Password salah...</p>
                @elseif(Session::has('succes'))
                    <h2>Daftar Berhasil !</h2>
                    <p> Silahkan Login</p>
                @endif
        </div>
    
</body>
</html>