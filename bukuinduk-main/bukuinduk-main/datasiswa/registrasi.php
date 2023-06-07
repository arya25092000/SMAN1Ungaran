<?php
require 'functions.php';

if( isset($_POST["register"])){

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('admin baru berhasil ditambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn);
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <link rel="shortcut icon" href="img/icons.png" type = "image/x-icon"/>
    <link rel="stylesheet" href="css/stylereg.css">
</head>
<body>

<h1>Halaman Registrasi Akun</h1>
<div class="kotak_registrasi">
<img src="img/avatar1.png" class="avatar">
<div id="title">
        <p class="tulisan_registrasi">Registrasi</p>
        <div class="underline-title"></div>
    </div>
<form action="" method="post">

 
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
    
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
     
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password"2>
        
            <button type="submit" name="register">Register!</button>
            
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
   


</form>
</div>
</body>
</html>