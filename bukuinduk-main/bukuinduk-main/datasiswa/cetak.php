<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';

if(isset($_POST['cetak'])){
    $alumni = $_POST['alumni'];
}
$siswa = query("SELECT * from siswa WHERE alumni = $alumni");


$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Siswa SMAN 1 Ungaran</h1>
    <table border="1" cellpading="10" cellspacing="0">

            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alumni</th>
            </tr>';
            $i = 1;
            foreach($siswa as $row) {
              $html .= '<tr>
                  <td>'. $i .'</td>
                  <td>'. $row["nama"] .'</td>
                  <td>'. $row["nis"] .'</td>
                  <td>'. $row["tempat_lahir"] .'</td>
                  <td>'. $row["tanggal_lahir"] .'</td>
                  <td>'. $row["alumni"] .'</td>
              </tr>';
              $i++;
            }
            

$html .=       '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>