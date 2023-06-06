<?php 
session_start();
require 'functions.php';

if(isset($_COOKIE['idolo']) && isset($_COOKIE['key'])){
    $idolo = $_COOKIE['idolo'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE
        id = $idolo");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])) {
        $_SESSION['login']= true;
    }

}

if(isset($_SESSION["login"])){
    header("Location: siswa.php");
    exit;
}


if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE 
        username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])); {

            $_SESSION["login"] = true;

            if(isset($_POST['remember'])) {

                setcookie('idolo', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }


            header("Location: siswa.php");
            exit;
        }

    }

    $error =  true;

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="shortcut icon" href="img/icons.png" type = "image/x-icon"/>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>

<h1>Login Buku Induk SMA NEGERI 1 UNGARAN</h1>

<?php if(isset($error)) :?>
    <p style="color:red ; font-style: italic;"  >username / password salah !</p>
	<?php endif; ?>
 <div class="kotak_login">
 <img src="img/avatar1.png" class="avatar">
    <div id="title">
        <p class="tulisan_login">Silahkan login</p>
        <div class="underline-title"></div>
    </div>

<form action="" method="post">

    
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">

            <label for="password">Password :</label>
            <input type="password" name="password" id="password">

            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
        
            <button type="submit" name="login">Login</button>
    

</form>
 </div>
</body>
</html>