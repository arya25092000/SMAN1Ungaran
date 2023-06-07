<?php 
session_start();

if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];


if( isset($_POST["submit"])){

    if( ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diupdate!');
                document.location.href = 'siswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diupdate!');
                document.location.href = 'siswa.php';
            </script>";
    }

    

   



}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update data siswa</title>
    <link rel="shortcut icon" href="img/icons.png" type = "image/x-icon"/>
    <link rel="stylesheet" href="css/styleinput.css">
</head>
<body>
    <h1> Update data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
        <input type="hidden" name="fotoLama" value="<?= $siswa["foto"]; ?>">
        <ul>
            <li>
                <label for="foto">Foto : </label> <br>
                <img src="img/<?= $siswa['foto']; ?>" width="48"> <br>
                <input type="file" name="foto" id="foto">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                value="<?= $siswa["nama"]; ?>">
            </li>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis"
                value="<?= $siswa["nis"]; ?>">
            </li>
            <li>
                <label for="nisn">NISN : </label>
                <input type="text" name="nisn" id="nisn"
                value="<?= $siswa["nisn"]; ?>">
            </li>
            <li>
                <label for="tempat_lahir">Tempat Lahir : </label>
                <input type="text" name="tempat_lahir" id="tempat_lahir"
                value="<?= $siswa["tempat_lahir"]; ?>">
            </li>
            <li>
                <label for="tanggal_lahir">Tanggal Lahir : </label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                value="<?= $siswa["tanggal_lahir"]; ?>">
            </li>
            <li>
                <label for="gender">Jenis Kelamin : </label>
                <input name="gender" type="radio" value="<?= $siswa["gender"]; ?>" />Pria
                <input name="gender" type="radio" value="<?= $siswa["gender"]; ?>" />Wanita
                
            </li>
            <li>
                <label for="agama">Agama : </label>
                <input type="text" name="agama" id="agama"
                value="<?= $siswa["agama"]; ?>">
            </li>
            <li>
                <label for="anak_ke">Anak ke : </label>
                <input type="text" name="anak_ke" id="anak_ke"
                value="<?= $siswa["anak_ke"]; ?>">
            </li>
            <li>
                <label for="status_dalam_keluarga">Status dalam Keluarga : </label>
                <input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga"
                value="<?= $siswa["status_dalam_keluarga"]; ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat"
                value="<?= $siswa["alamat"]; ?>">
            </li>
            <li>
                <label for="telepon">Telepon : </label>
                <input type="text" name="telepon" id="telepon"
                value="<?= $siswa["telepon"]; ?>">
            </li>
            <li>
                <label for="diterima_di_sekolah_ini_kelas">Diterima di sekolah ini kelas : </label>
                <input type="text" name="diterima_di_sekolah_ini_kelas" id="diterima_di_sekolah_ini_kelas"
                value="<?= $siswa["diterima_di_sekolah_ini_kelas"]; ?>">
            </li>
            <li>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" id="sekolah_asal"
                value="<?= $siswa["sekolah_asal"]; ?>">
            </li>
            <li>
                <label for="ijazah">Ijazah: </label>
                <input type="text" name="ijazah" id="ijazah"
                value="<?= $siswa["ijazah"]; ?>">

            </li>
            <li>
                <label for="skhun">SKHUN: </label>
                <input type="text" name="skhun" id="skhun"
                value="<?= $siswa["skhun"]; ?>">
            </li>
            <li>
                <label for="ortu">Orang Tua: </label>
                <input type="text" name="ortu" id="ortu"
                value="<?= $siswa["ortu"]; ?>">
            </li>
            <li>
                <label for="alamat_ortu">Alamat Orang Tua: </label>
                <input type="text" name="alamat_ortu" id="alamat_ortu"
                value="<?= $siswa["alamat_ortu"]; ?>">
            </li>
            <li>
                <label for="pekerjaan_ortu">Pekerjaan Orang Tua: </label>
                <input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu"
                value="<?= $siswa["pekerjaan_ortu"]; ?>">
            </li>
            <li>
                <label for="nama_wali">Nama Wali: </label>
                <input type="text" name="nama_wali" id="nama_wali"
                value="<?= $siswa["nama_wali"]; ?>">
            </li>
            <li>
                <label for="alamat_wali">Alamat Wali : </label>
                <input type="text" name="alamat_wali" id="alamat_wali"
                value="<?= $siswa["alamat_wali"]; ?>">
            </li>
            <li>
                <label for="telepon_wali">Telepon Wali: </label>
                <input type="text" name="telepon_wali" id="telepon_wali"
                value="<?= $siswa["telepon_wali"]; ?>">
            </li>
            <li>
                <label for="pekerjaan_wali">Pekerjaan Wali: </label>
                <input type="text" name="pekerjaan_wali" id="pekerjaan_wali"
                value="<?= $siswa["pekerjaan_wali"]; ?>">
            </li>
            <li>
                <label for="mutasi">Mutasi: </label>
                <input type="text" name="mutasi" id="mutasi"
                value="<?= $siswa["mutasi"]; ?>">
            </li>
            <li>
                <label for="tahun_masuk">Tahun Masuk: </label>
                <input type="text" name="tahun_masuk" id="tahun_masuk"
                value="<?= $siswa["tahun_masuk"]; ?>">
            </li>
            <li>
                <label for="alumni">Alumni: </label>
                <input type="text" name="alumni" id="alumni"
                value="<?= $siswa["alumni"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit"> Update Data!</button>
            </li>
            
        </ul>


    </form>

</body>
</html>