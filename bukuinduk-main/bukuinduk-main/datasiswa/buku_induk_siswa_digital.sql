-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 03.38
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_induk_siswa_digital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` text NOT NULL,
  `nisn` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `status_dalam_keluarga` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `diterima_di_sekolah_ini_kelas` varchar(100) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `skhun` varchar(100) NOT NULL,
  `ortu` varchar(100) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `telepon_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `mutasi` varchar(100) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `foto`, `nama`, `nis`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `gender`, `agama`, `anak_ke`, `status_dalam_keluarga`, `alamat`, `telepon`, `diterima_di_sekolah_ini_kelas`, `sekolah_asal`, `ijazah`, `skhun`, `ortu`, `alamat_ortu`, `pekerjaan_ortu`, `nama_wali`, `alamat_wali`, `telepon_wali`, `pekerjaan_wali`, `mutasi`, `tahun_masuk`, `alumni`) VALUES
(4, '632c6e2bc67d0.jpg', 'Adam Nugraha  Rois Buana', '12345', '9993750493', 'Ungaran', '1999-02-27', 'Laki-Laki', 'Islam', 1, 'Anak Kandung', 'Jl.Leyangan Indah 9 No. 87 Rt.02 Rw.10 Leyangan, Kec. Ungaran Timur. Kab. Semarang', '-', 'X', 'SMPN 3 Ungaran', '-', '-', 'Toyibi', 'Jl.Leyangan Indah 9 No. 87 Rt.02 Rw.10 Leyangan, Kec. Ungaran Timur. Kab. Semarang', 'Karyawan Swasta', '-', '-', '-', '-', '-', 2014, 2017),
(9, '633053df4844e.jpg', 'A. Chintya Pramesthi', '21456', '8561', 'Ungaran', '1987-07-06', 'Perempuan', 'Katholik', 2, 'Anak Kandung', 'Rejosari Ungaran', '0246925561', 'X', 'SMPN N 1 Ungaran', '-', '2003', 'Fx. Supardiman', 'Kenangan Baru No.25 Rejosari Ungaran', 'PNS', '-', '-', '-', '-', '-', 2003, 2006),
(10, '6332448e44baf.jpg', 'Titrin Yualiningrum', '', '116700', 'Kab. Magelang', '1997-06-27', 'Perempuan', 'Islam', 3, 'Anak Kandung', 'Kenangkan Rt/Rw 06/07 Kec. Bergas', '085741463817', 'X', 'SMPN N 1 Bergas', '2012', '2012', 'Slamet', 'Kenangkan Rt/Rw 06/07 Kec. Bergas', 'Buruh', '-', '-', '-', '', '-', 2012, 2015),
(11, '633246d9c83f8.jpg', 'Togar Maruli Purba', '', '116701', 'Kab. Semarang', '1997-09-13', 'Laki-Laki', 'Kristen', 2, 'Anak Kandung', 'Jl. Moch Yamin 6 Ungaran', '0246923627', 'X', 'SMPN Mardirahayu', '2012', '2012', 'Nicolas Hariadi Purba', 'Jl. Moch Yamin 6 Ungaran', 'Wiraswasta', '-', '-', '-', '-', '-', 2012, 2015);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'kesiswaan', '$2y$10$1FxQFfhEJw6MgWeihLVSm.gZcohI4/cCY/TVtoImk9UnXKUr0o1Vy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
