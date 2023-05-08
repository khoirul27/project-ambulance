-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 03.44
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambulance`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(5, 'aziz', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `waktu_upload` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `isi` text NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `isi`, `foto_berita`, `judul`, `waktu`) VALUES
(46, '<p>Tegal - Jumlah korban kecelakaan bus pariwisata yang terguling masuk jurang di kawasan wisata Guci, Kabupaten Tegal, Jawa Tengah, sebanyak 37 orang. Satu korban diantaranya meninggal dunia. Sedangkan korban lainnya luka ringan hingga berat.<br>Ditemui wartawan di lokasi kejadian petak 49M1 RPH Guci, Minggu (7/5/2023) sore, Kapolres Tegal AKBP Mochammad Sajarod Zakun menyebut korban kecelakaan itu sejumlah 37 orang. Rinciannya, 1 korban meninggal, 1 korban luka berat, dan 35 korban luka ringan.<br><br>Korban meninggal dunia atas nama Maja bin Hasyim (65) dari Tangerang Selatan. Korban tersebut sempat mendapatkan perawatan di Puskesmas Bumijawa.<br><br>Sajarod mengatakan, kecelakaan berawal saat kernet menghidupkan bus wisata yang sedang diparkir itu untuk memanasi mesinnya. Kemudian, sebanyak 37 penumpang naik ke bus. Sementara itu, kernet dan sopir masih berada di luar bus. Mereka disebut sedang berkoordinasi dengan panitia rombongan.<br><br>Baca artikel detikjateng, \"Bus Masuk Jurang di Guci Tegal, Polisi Ungkap Total Korban 37 Orang\" selengkapnya&nbsp;<a href=\"https://www.detik.com/jateng/berita/d-6708543/bus-masuk-jurang-di-guci-tegal-polisi-ungkap-total-korban-37-orang\">https://www.detik.com/jateng/berita/d-6708543/bus-masuk-jurang-di-guci-tegal-polisi-ungkap-total-korban-37-orang</a>.<br><br>Download Apps Detikcom Sekarang <a href=\"https://apps.detik.com/detik/\">https://apps.detik.com/detik/</a></p>', '20230508073417.jpg', 'Bus Masuk Jurang di Guci Tegal, Polisi Ungkap Tota', '2023-05-08 07:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ambulance`
--

CREATE TABLE `data_ambulance` (
  `id_ambulance` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `foto_ambulance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ambulance`
--

INSERT INTO `data_ambulance` (`id_ambulance`, `nama`, `alamat`, `no_tlp`, `foto_ambulance`) VALUES
(45, 'pp', 'karanganyar', 988817817, '20230508023745.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `kasus` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `no_tlp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` int(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_tlp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama`, `nik`, `password`, `no_tlp`) VALUES
(15, '', 8039, 'd41d8cd98f00b204e980', 0),
(16, '', 0, '827ccb0eea8a706c4c34', 0),
(17, 'khoirul', 8039, 'c4ca4238a0b923820dcc', 988817817),
(18, 'khoirul', 8039, 'c4ca4238a0b923820dcc', 988817817);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `data_ambulance`
--
ALTER TABLE `data_ambulance`
  ADD PRIMARY KEY (`id_ambulance`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `data_ambulance`
--
ALTER TABLE `data_ambulance`
  MODIFY `id_ambulance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
