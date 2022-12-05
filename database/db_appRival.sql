-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2022 pada 14.21
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rival`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(11) NOT NULL,
  `id_labor` int(11) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id_alat`, `id_labor`, `nama_alat`, `jumlah`) VALUES
(2, 303, 'DVD Player (jenis 1)', 1),
(3, 303, 'General Digital TV (jenis 1)', 1),
(4, 303, 'Handycam (jenis 1)', 1),
(5, 303, 'Kursi Cyan', 27),
(6, 303, 'Kursi Dosen(jenis 1)', 2),
(7, 303, 'Kursi Mahasiswa Tanpa Lengan', 1),
(8, 303, 'Kursi Merah', 4),
(9, 303, 'Kursi Relaksasi (BK)', 1),
(10, 303, 'Lemari Kaca', 3),
(11, 303, 'Lemari Kaca (model 2)', 1),
(12, 303, 'Lemari Locker Besi (jenis 1)', 2),
(13, 303, 'Lemari Locker Kayu (jenis 1)', 2),
(14, 303, 'Lemari/Rak TV (jenis kayu)', 1),
(15, 303, 'Meja Bundar Bimbingan Kelompok (jenis 1)', 1),
(16, 303, 'Meja Dosen (type 5)', 1),
(17, 303, 'Meja Konferensi (type 1)', 1),
(18, 303, 'Meja Mahasiswa Type 1 (jenis 1)', 12),
(19, 303, 'Papan Tulis dengan penyangga (jenis 3) kecil', 1),
(20, 303, 'PC/Komputer ASUS', 11),
(21, 303, 'Rak kayu meja (kecil)', 2),
(22, 303, 'Sound system 4', 1),
(23, 303, 'Sofa (jenis 1)', 1),
(24, 303, 'Tape recorder (jenis 1)', 1),
(25, 303, 'Televisi (jenis 1)', 1),
(26, 303, 'UPS ICA', 4),
(27, 303, 'Vacum cleaner (jenis 1)', 1),
(28, 303, 'Wireless Tape (jenis 1)', 2),
(29, 232, 'Kursi mahasiswa dengan lengan', 43),
(30, 232, 'Kursi merah', 1),
(31, 232, 'Meja mahasiswa type 1 (jenis 1)', 1),
(32, 232, 'Papan Tulis dengan penyangga (jenis 1)', 1),
(33, 232, 'PC HP jenis 2', 1),
(34, 232, 'Projector', 1),
(35, 232, 'sound system', 1),
(36, 413, 'Hub', 1),
(37, 413, 'Kursi merah', 41),
(38, 413, 'Meja dosen', 1),
(39, 413, 'Meja Mahasiswa Type 1 (jenis 2)', 41),
(40, 413, 'Papan tulis gantung', 1),
(41, 413, 'PC All in One Lenovo', 40),
(42, 413, 'Projector', 1),
(43, 281, 'Kursi Mahasiswa dengan Lengan', 15),
(44, 281, 'Kursi merah', 2),
(45, 281, 'Meja dosen', 1),
(46, 281, 'Meja Mahasiswa Type 1 (jenis 1)', 1),
(47, 281, 'Papan Tulis dengan penyangga (jenis 1)', 1),
(48, 281, 'PC Lenovo', 1),
(49, 281, 'Projector 3', 1),
(50, 281, 'Sound system 2', 1),
(51, 281, 'Tripod', 1),
(52, 390, 'Hub', 1),
(53, 390, 'Kursi Merah', 41),
(54, 390, 'Meja dosen', 1),
(55, 390, 'Meja Mahasiswa Type 1 (jenis 1)', 1),
(56, 390, 'Meja Mahasiswa Type 1 (jenis 2)', 40),
(57, 390, 'Papan Tulis dengan penyangga (jenis 1)', 1),
(58, 390, 'PC Lenovo', 41),
(59, 390, 'Projector', 1),
(60, 390, 'Sound system', 1),
(61, 361, 'Kursi Cyan', 9),
(62, 361, 'Kursi Mahasiswa Tanpa Lengan', 4),
(63, 361, 'Lemari Kaca', 1),
(64, 361, 'Meja dengan sekat', 1),
(65, 361, 'Meja dosen', 1),
(66, 361, 'Meja Mahasiswa Type 1 (jenis 1)', 2),
(67, 361, 'Meja Mahasiswa Type 2 (dengan mika putih)', 9),
(68, 361, 'Papan tulis gantung', 1),
(69, 361, 'PC All in One HP', 2),
(70, 361, 'PC All in One Lenovo', 5),
(71, 361, 'Rak kayu', 1),
(72, 158, 'Hub', 1),
(73, 158, 'Kursi Merah', 41),
(74, 158, 'Meja dosen', 1),
(75, 158, 'Meja Mahasiswa Type 2 (dengan mika putih)', 5),
(76, 158, 'Meja mahasiswa type 3(dengan mika putih)', 10),
(77, 158, 'Papan tulis gantung', 1),
(78, 158, 'PC All in One HP', 40),
(79, 158, 'PC Lenovo', 1),
(80, 158, 'Projector', 1),
(81, 166, 'Hub', 1),
(82, 166, 'Kursi Merah', 41),
(83, 166, 'Layer projector (type gantung)', 1),
(84, 166, 'Meja dosen', 1),
(85, 166, 'Meja Mahasiswa Type 1 (jenis 1)', 1),
(86, 166, 'Meja Mahasiswa Type 2 (dengan mika putih)', 5),
(87, 166, 'Meja mahasiswa type 3(dengan mika putih)', 10),
(88, 166, 'Papan Tulis dengan penyangga (jenis 1)', 1),
(89, 166, 'PC Lenovo', 41),
(90, 166, 'Projector', 1),
(91, 310, 'Hub', 1),
(92, 310, 'Kursi Merah', 41),
(93, 310, 'Layer projector (type gantung)', 1),
(94, 310, 'Meja dosen (type 3)', 1),
(95, 310, 'Meja Mahasiswa Type 2 (dengan mika putih)', 5),
(96, 310, 'Meja mahasiswa type 3(dengan mika putih)', 10),
(97, 310, 'Papan Tulis dengan penyangga (jenis 1)', 1),
(98, 310, 'PC All in One HP', 25),
(99, 310, 'PC All in One Lenovo', 15),
(100, 310, 'Projector 2', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_labor`
--

CREATE TABLE `data_labor` (
  `id_labor` int(11) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_labor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_labor`
--

INSERT INTO `data_labor` (`id_labor`, `ruangan`, `id_alat`, `data_created`, `status_labor`) VALUES
(2, '2.A Labor Bimbingan Dan Konseling', 303, '2022-01-24 07:33:09', 0),
(3, '2.B Labor Bahasa Konvensional', 232, '2022-01-24 07:38:27', 0),
(4, '2.C Labor Komputer Umum', 413, '2022-01-24 07:40:49', 1),
(5, '2.D Labor Microteaching', 281, '2022-01-24 07:42:58', 0),
(6, '3.A Labor Bahasa', 390, '2022-01-24 07:44:36', 0),
(7, '3.B Labor Perakitan dan Jaringan', 361, '2022-01-24 07:46:52', 0),
(8, '3.C Labor Multimedia dan Editing', 158, '2022-01-24 07:48:44', 0),
(9, '3.D Labor Pemograman Komputer', 166, '2022-01-24 07:50:22', 0),
(10, '3.E Labor Komputer Umum 1', 310, '2022-01-24 07:52:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `nidn`, `jenis_kelamin`, `hp`, `data_created`) VALUES
(32, 'Gusnita Darmawati', '1012058802', 'Perempuan', '082284196355', '2022-02-10 03:55:01'),
(36, 'Yulifda Elin Yuspita', '2022129102', 'Perempuan', '082284196355', '2022-02-10 04:03:37'),
(60, 'liza efrizanti ', '1012058802', 'Perempuan', '082284196355', '2022-02-24 03:25:31'),
(72, 'Hari Antoni Musril, M.Kom', '198309072009121005', 'Laki-Laki', '08126769772', '2022-01-24 07:56:33'),
(77, 'Jasmienti, M.Pd', '197504012009122001', 'Perempuan', '085263077178', '2022-01-24 07:57:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakaian`
--

CREATE TABLE `pemakaian` (
  `id` int(11) NOT NULL,
  `id_labor` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `pemakaian_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `waktu` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL,
  `btn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemakaian`
--

INSERT INTO `pemakaian` (`id`, `id_labor`, `id_dosen`, `pemakaian_created`, `waktu`, `keterangan`, `status`, `btn`) VALUES
(1, 5, 77, '2022-01-24 07:59:37', '', 'Peralatan Lengkap<br>', 1, 1),
(2, 5, 77, '2022-01-24 08:00:22', '', '<p>Peralatan aman dan lengkap<br></p>', 2, 1),
(3, 4, 72, '2022-01-27 03:23:23', '', '<p>Ada dua komputer tidak bisa hidup<br></p>', 1, 1),
(4, 4, 72, '2022-01-27 03:24:25', '', '<p>ada tiga komputer rusak<br></p>', 2, 1),
(5, 5, 77, '2022-01-31 02:01:43', '', '<p>aman sentosa<br></p>', 1, 1),
(6, 5, 77, '2022-02-01 08:28:02', '', '<p>aman sentosa&nbsp; mantpp<br></p>', 2, 1),
(7, 7, 72, '2022-02-01 08:30:15', '', '<p>okk<br></p>', 1, 1),
(8, 7, 72, '2022-02-01 08:30:38', '', '<p>okk<br></p>', 2, 1),
(9, 10, 72, '2022-02-01 08:46:01', '', '<p>good<br></p>', 1, 1),
(10, 10, 72, '2022-02-01 08:46:10', '', '<p>aman<br></p>', 2, 1),
(11, 9, 36, '2022-02-10 04:11:48', '', '<p>Lengkap</p>', 1, 1),
(12, 9, 36, '2022-02-10 04:14:41', '', '<p>Lengkap</p>', 2, 1),
(13, 4, 60, '2022-02-24 03:26:19', '', '<p>Satu Komputer Rusak</p>', 1, 1),
(14, 4, 77, '2022-02-24 03:39:49', '', '<p>3 komputer rusak</p>', 2, 1),
(15, 4, 32, '2022-11-25 08:20:55', '15:25 - 15:22', '<p>kjk</p>', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`, `data_created`, `hp`) VALUES
(1, 'Administrator', 'admin', '25d55ad283aa400af464c76d713c07ad', 1, '2022-01-16 05:44:12', '0'),
(32, 'Gusnita Darmawati', 'Gusnita', '25d55ad283aa400af464c76d713c07ad', 2, '2022-02-10 03:55:01', '0'),
(36, 'Yulifda Elin Yuspita', 'Elin', '3fc0a7acf087f549ac2b266baf94b8b1', 2, '2022-02-10 04:03:38', '0'),
(60, 'liza efrizanti ', 'liza', 'fcea920f7412b5da7be0cf42b8c93759', 2, '2022-02-24 03:25:32', ''),
(72, 'Hari Antoni Musril, M.Kom', 'bapakhariantoni', 'fcea920f7412b5da7be0cf42b8c93759', 2, '2022-01-24 07:56:33', '0'),
(77, 'Jasmienti, M.Pd', 'jasmienti', 'fcea920f7412b5da7be0cf42b8c93759', 2, '2022-01-24 07:57:58', '0'),
(103, 'rivalfauzi', 'rivalfauzi', 'fcea920f7412b5da7be0cf42b8c93759', 1, '2022-02-21 09:27:06', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indeks untuk tabel `data_labor`
--
ALTER TABLE `data_labor`
  ADD PRIMARY KEY (`id_labor`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `pemakaian`
--
ALTER TABLE `pemakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `data_labor`
--
ALTER TABLE `data_labor`
  MODIFY `id_labor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `pemakaian`
--
ALTER TABLE `pemakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
