<!DOCTYPE html>
<html>
<head>
    <!-- Pengaturan karakter dan judul halaman -->
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Gaya CSS internal untuk halaman login -->
    <style type="text/css">
        /* Font dasar seluruh halaman */
        body {
            font-family: sans-serif;
        }
        /* Gaya judul halaman */
        h2 {
            text-align: center;
            color: salmon;
            font-weight: bolder;
        }
        /* Kotak pembungkus form login */
        .form-login {
            border: 2px solid skyblue;
            width: 30%;
            border-radius: 30px;
            box-shadow: 5px 8px 3px 2px navy;
        }
        /* Gaya kolom input email dan password */
        .input {
            width: 80%;
            height: 40px;
            border-radius: 20px;
            font-size: 15px;
            color: darkgray;
            padding: 2px;
        }
        /* Gaya tombol submit login */
        .tombol {
            width: 50%;
            height: 50px;
            border-radius: 20px;
            background-color: lightsalmon;
            color: white;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <!-- Judul form login -->
    <h2 class="judul">Login Users</h2>
    <!-- Menengahkan form secara horizontal -->
    <center>
        <!-- Form pengiriman data login ke route /login -->
        <form method="POST" action="/login">
            <!-- Token keamanan CSRF Laravel -->
            @csrf
            <div class="form-login">
                <!-- Input email pengguna -->
                <p><input type="text" class="input" name="email" placeholder="Masukan Email"></p>
                <!-- Input password pengguna -->
                <p><input type="password" class="input" name="password" placeholder="Password Anda"></p>
                <!-- Tombol kirim data login -->
                <p><button class="tombol" type="submit">LOGIN</button></p>
            </div>
        </form>
    </center>
</body>
</html>