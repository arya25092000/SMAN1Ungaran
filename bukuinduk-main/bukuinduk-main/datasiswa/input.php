<?php 
session_start();

if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';
if( isset($_POST["submit"])){


    if( input($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diinput!');
                document.location.href = 'siswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diinput!');
                document.location.href = 'siswa.php';
            </script>";
    }

    



}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Input data siswa</title>
    <link rel="shortcut icon" href="img/icons.png" type = "image/x-icon"/>
    <link rel="stylesheet" href="css/styleinput.css">
</head>
<body>

    <h1> Input data siswa</h1>

    <div class="kotak_input">
    <form action="" method="post" enctype="multipart/form-data">
        
    <div class="input-field-border-bottom">
        
            
                <label for="foto">Foto : </label>
                <input type="file" name="foto" id="foto">
            
            
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            
            
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis">
            
            
                <label for="nisn">NISN : </label>
                <input type="text" name="nisn" id="nisn">
            
            
                <label for="tempat_lahir">Tempat Lahir : </label>
                <input type="text" name="tempat_lahir" id="tempat_lahir">
            
            
                <label for="tanggal_lahir">Tanggal Lahir : </label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir">
            
            
                <label for="gender">Jenis Kelamin : </label>
                <input type="text" name="gender" id="gender">
            
            
                <label for="agama">Agama : </label>
                <input type="text" name="agama" id="agama">
            
            
                <label for="anak_ke">Anak ke : </label>
                <input type="text" name="anak_ke" id="anak_ke">
            
            
                <label for="status_dalam_keluarga">Status dalam Keluarga : </label>
                <input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga">
            
            
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat">
        
            
                <label for="telepon">Telepon : </label>
                <input type="text" name="telepon" id="telepon">
            
            
                <label for="diterima_di_sekolah_ini_kelas">Diterima di sekolah ini kelas : </label>
                <input type="text" name="diterima_di_sekolah_ini_kelas" id="diterima_di_sekolah_ini_kelas">
            
            
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" id="sekolah_asal">
            
            
                <label for="ijazah">Ijazah: </label>
                <input type="text" name="ijazah" id="ijazah">
            
            
                <label for="skhun">SKHUN: </label>
                <input type="text" name="skhun" id="skhun">
            
            
                <label for="ortu">Orang Tua: </label>
                <input type="text" name="ortu" id="ortu">
        
            
                <label for="alamat_ortu">Alamat Orang Tua: </label>
                <input type="text" name="alamat_ortu" id="alamat_ortu">
            
            
                <label for="pekerjaan_ortu">Pekerjaan Orang Tua: </label>
                <input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu">
            
            
                <label for="nama_wali">Nama Wali: </label>
                <input type="text" name="nama_wali" id="nama_wali">
            
            
                <label for="alamat_wali">Alamat Wali : </label>
                <input type="text" name="alamat_wali" id="alamat_wali">
            
            
                <label for="telepon_wali">Telepon Wali: </label>
                <input type="text" name="telepon_wali" id="telepon_wali">
            
            
                <label for="pekerjaan_wali">Pekerjaan Wali: </label>
                <input type="text" name="pekerjaan_wali" id="pekerjaan_wali">
            
            
                <label for="mutasi">Mutasi: </label>
                <input type="text" name="mutasi" id="mutasi">
            
            
                <label for="tahun_masuk">Tahun Masuk: </label>
                <input type="text" name="tahun_masuk" id="tahun_masuk">
            
            
                <label for="alumni">Alumni: </label>
                <input type="text" name="alumni" id="alumni">
            
            
                <button type="submit" name="submit"> Masukkan Data!</button>
            
            
        

    </div>
    </form>
    </div>

</body>
</html>