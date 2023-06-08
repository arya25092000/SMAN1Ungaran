<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];


if(isset($_POST["submit"])) {

    if(ubah($_POST) > 0) {
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

    <div class="kotak_input">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
        <input type="hidden" name="fotoLama" value="<?= $siswa["foto"]; ?>">
    <div class="input-field-border-bottom">
        
            
                <label for="foto">Foto : </label><br>
                <img src="img/<?= $siswa['foto']; ?>" width="128"><br>
                <input type="file" name="foto" id="foto">
            
            
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                value="<?= $siswa["nama"]; ?>">
            
            
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis"
                value="<?= $siswa["nis"]; ?>">
            
            
                <label for="nisn">NISN : </label>
                <input type="text" name="nisn" id="nisn"
                value="<?= $siswa["nisn"]; ?>">
            
            
                <label for="tempat_lahir">Tempat Lahir : </label>
                <input type="text" name="tempat_lahir" id="tempat_lahir"
                value="<?= $siswa["tempat_lahir"]; ?>">
            
            
                <label for="tanggal_lahir">Tanggal Lahir : </label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                value="<?= $siswa["tanggal_lahir"]; ?>">
            
            
                <label for="gender">Jenis Kelamin : </label>
                <input type="text" name="gender" id="gender"
                value="<?= $siswa["gender"]; ?>">
            
            
                <label for="agama">Agama : </label>
                <input type="text" name="agama" id="agama"
                value="<?= $siswa["agama"]; ?>">
            
            
                <label for="anak_ke">Anak ke : </label>
                <input type="text" name="anak_ke" id="anak_ke"
                value="<?= $siswa["anak_ke"]; ?>">
            
            
                <label for="status_dalam_keluarga">Status dalam Keluarga : </label>
                <input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga"
                value="<?= $siswa["status_dalam_keluarga"]; ?>">
            
            
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat"
                value="<?= $siswa["alamat"]; ?>">
        
            
                <label for="telepon">Telepon : </label>
                <input type="text" name="telepon" id="telepon"
                value="<?= $siswa["telepon"]; ?>">
            
            
                <label for="diterima_di_sekolah_ini_kelas">Diterima di sekolah ini kelas : </label>
                <input type="text" name="diterima_di_sekolah_ini_kelas" id="diterima_di_sekolah_ini_kelas"
                value="<?= $siswa["diterima_di_sekolah_ini_kelas"]; ?>">
            
            
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" id="sekolah_asal"
                value="<?= $siswa["sekolah_asal"]; ?>">
            
            
                <label for="ijazah">Ijazah: </label>
                <input type="text" name="ijazah" id="ijazah"
                value="<?= $siswa["ijazah"]; ?>">
            
            
                <label for="skhun">SKHUN: </label>
                <input type="text" name="skhun" id="skhun"
                value="<?= $siswa["skhun"]; ?>">
            
            
                <label for="ortu">Orang Tua: </label>
                <input type="text" name="ortu" id="ortu"
                value="<?= $siswa["ortu"]; ?>">
        
            
                <label for="alamat_ortu">Alamat Orang Tua: </label>
                <input type="text" name="alamat_ortu" id="alamat_ortu"
                value="<?= $siswa["alamat_ortu"]; ?>">
            
            
                <label for="pekerjaan_ortu">Pekerjaan Orang Tua: </label>
                <input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu"
                value="<?= $siswa["pekerjaan_ortu"]; ?>">
            
            
                <label for="nama_wali">Nama Wali: </label>
                <input type="text" name="nama_wali" id="nama_wali"
                value="<?= $siswa["nama_wali"]; ?>">
            
            
                <label for="alamat_wali">Alamat Wali : </label>
                <input type="text" name="alamat_wali" id="alamat_wali"
                value="<?= $siswa["alamat_wali"]; ?>">
            
            
                <label for="telepon_wali">Telepon Wali: </label>
                <input type="text" name="telepon_wali" id="telepon_wali"
                value="<?= $siswa["telepon_wali"]; ?>">
            
            
                <label for="pekerjaan_wali">Pekerjaan Wali: </label>
                <input type="text" name="pekerjaan_wali" id="pekerjaan_wali"
                value="<?= $siswa["pekerjaan_wali"]; ?>">
            
            
                <label for="mutasi">Mutasi: </label>
                <input type="text" name="mutasi" id="mutasi"
                value="<?= $siswa["mutasi"]; ?>">
            
            
                <label for="tahun_masuk">Tahun Masuk: </label>
                <input type="text" name="tahun_masuk" id="tahun_masuk"
                value="<?= $siswa["tahun_masuk"]; ?>">
            
            
                <label for="alumni">Alumni: </label>
                <input type="text" name="alumni" id="alumni"
                value="<?= $siswa["alumni"]; ?>">
            
            
                <button type="submit" name="submit"> Update Data!</button>
            
            
        

    </div>
    </form>
    </div>

</body>
</html>