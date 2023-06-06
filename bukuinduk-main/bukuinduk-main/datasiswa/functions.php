<?php // koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "buku_induk_siswa_digital");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function input($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $nisn = htmlspecialchars($data["nisn"]);
    $tempatlahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
    $gender = htmlspecialchars($data["gender"]);
    $agama = htmlspecialchars($data["agama"]);
    $anakke = htmlspecialchars($data["anak_ke"]);
    $status = htmlspecialchars($data["status_dalam_keluarga"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $diterima = htmlspecialchars($data["diterima_di_sekolah_ini_kelas"]);
    $sekolahasal = htmlspecialchars($data["sekolah_asal"]);
    $ijazah = htmlspecialchars($data["ijazah"]);
    $skhun = htmlspecialchars($data["skhun"]);
    $ortu = htmlspecialchars($data["ortu"]);
    $alamatortu = htmlspecialchars($data["alamat_ortu"]);
    $pekerjaanortu = htmlspecialchars($data["pekerjaan_ortu"]);
    $namawali = htmlspecialchars($data["nama_wali"]);
    $alamatwali = htmlspecialchars($data["alamat_wali"]);
    $teleponwali = htmlspecialchars($data["telepon_wali"]);
    $pekerjaanwali = htmlspecialchars($data["pekerjaan_wali"]);
    $mutasi = htmlspecialchars($data["mutasi"]);
    $tahunmasuk = htmlspecialchars($data["tahun_masuk"]);
    $alumni = htmlspecialchars($data["alumni"]);

    $foto = upload();
    if (!$foto ) {
        return false;
    }

    $query = "INSERT INTO siswa 
                VALUES
               ('', '$foto', '$nama', '$nis', '$nisn', '$tempatlahir', '$tanggallahir',
                 '$gender', '$agama', '$anakke', '$status', '$alamat',
                 '$telepon', '$diterima', '$sekolahasal', '$ijazah', '$skhun',
                 '$ortu', '$alamatortu', '$pekerjaanortu', '$namawali', '$alamatwali',
                 '$teleponwali', '$pekerjaanwali', '$mutasi', '$tahunmasuk', '$alumni')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if ($error === 4){
        echo "<script>
                alert('pilih gambar terlebih dahulu!')        
              </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
                alert('yang upload bukan gambar!')        
              </script>";
        return false;
    }

    if( $ukuranFile > 1000000) {
        "<script>
            alert('ukuran gambar terlalu besar!')        
         </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;




}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $fotoLama = htmlspecialchars($data["fotoLama"]);
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $nisn = htmlspecialchars($data["nisn"]);
    $tempatlahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
    $gender = htmlspecialchars($data["gender"]);
    $agama = htmlspecialchars($data["agama"]);
    $anakke = htmlspecialchars($data["anak_ke"]);
    $status = htmlspecialchars($data["status_dalam_keluarga"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $diterima = htmlspecialchars($data["diterima_di_sekolah_ini_kelas"]);
    $sekolahasal = htmlspecialchars($data["sekolah_asal"]);
    $ijazah = htmlspecialchars($data["ijazah"]);
    $skhun = htmlspecialchars($data["skhun"]);
    $ortu = htmlspecialchars($data["ortu"]);
    $alamatortu = htmlspecialchars($data["alamat_ortu"]);
    $pekerjaanortu = htmlspecialchars($data["pekerjaan_ortu"]);
    $namawali = htmlspecialchars($data["nama_wali"]);
    $alamatwali = htmlspecialchars($data["alamat_wali"]);
    $teleponwali = htmlspecialchars($data["telepon_wali"]);
    $pekerjaanwali = htmlspecialchars($data["pekerjaan_wali"]);
    $mutasi = htmlspecialchars($data["mutasi"]);
    $tahunmasuk = htmlspecialchars($data["tahun_masuk"]);
    $alumni = htmlspecialchars($data["alumni"]);

    if( $_FILES['foto']['error'] === 4) {
        $foto = $fotoLama;
    } else {
        $foto = upload();
    }

  $query = "UPDATE siswa SET
                foto = '$foto',
                nama = '$nama',
                nis = '$nis',
                nisn = '$nisn',
                tempat_lahir = '$tempatlahir',
                tanggal_lahir = '$tanggallahir',
                gender = '$gender',
                agama = '$agama',
                anak_ke = '$anakke',
                status_dalam_keluarga = '$status',
                alamat = '$alamat',
                telepon = '$telepon',
                diterima_di_sekolah_ini_kelas = '$diterima',
                sekolah_asal = '$sekolahasal',
                ijazah = '$ijazah',
                skhun = '$skhun',
                ortu = '$ortu',
                alamat_ortu = '$alamatortu',
                pekerjaan_ortu = '$pekerjaanortu',
                nama_wali = '$namawali',
                alamat_wali = '$alamatwali',
                telepon_wali = '$teleponwali',
                pekerjaan_wali = '$pekerjaanwali',
                mutasi = '$mutasi',
                tahun_masuk = '$tahunmasuk',
                alumni = '$alumni'
               WHERE id = $id
                ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

    
}

function cari($keyword){
    $query = "SELECT * FROM siswa 
                WHERE
                nama LIKE '%$keyword%' OR
                nisn LIKE '%$keyword%'
                ";
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE
        username = '$username'");
    if( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username yang dipilih telah terdaftar!')
              </script>";
        return false;
    }

    
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password') ");


    return mysqli_affected_rows($conn);

}

?>