-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2023 pada 05.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(4) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `jkel` varchar(10) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Kota` varchar(20) DEFAULT NULL,
  `Pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `Nama`, `jkel`, `Email`, `Alamat`, `Kota`, `Pesan`) VALUES
(1, 'ahsa', 'L', 'users@admin.com', 'Jl. Kapas 1/7 Rt01/Rw02, Gambiran Utara, Gambiran', 'Jombang', 'oke'),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(13) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `id_mahasiswa`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`) VALUES
('TI102132', 1, 'NURIS AKBAR', 'L', 'TEKNIK INFORMATIKA', 'BANDA ACEH'),
('TI102133', 2, 'MUHAMMAD HAFIDZ MUZAKI', 'L', 'TEKNIK ELEKTRO', 'BANDUNG'),
('TI102134', 3, 'DESI HANDAYANI', 'P', 'REKAMEDIS', 'CIMAHI'),
('4', 4, 'ahsa', 'L', 'TEKNIK INFORMATIKA', 'Jombang'),
('', 5, '', '', '', ''),
('', 6, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `tanggalPengisian` date NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `jenisPendaftaran` varchar(15) NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `noPesertaUjian` varchar(20) NOT NULL,
  `paud` varchar(5) NOT NULL,
  `tk` varchar(5) NOT NULL,
  `noSKHUN` int(16) DEFAULT NULL,
  `noIjazah` int(16) NOT NULL,
  `hobi` varchar(25) NOT NULL,
  `citaCita` varchar(50) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `tempatLahir` varchar(50) DEFAULT NULL,
  `tanggalLahir` date NOT NULL,
  `agama` varchar(25) NOT NULL,
  `muridBerkebutuhan` varchar(50) NOT NULL,
  `alamatJalan` varchar(100) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `dusun` varchar(50) DEFAULT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kodePos` varchar(5) NOT NULL,
  `tempatTinggal` varchar(25) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `bantuan` varchar(5) NOT NULL,
  `noBantuan` varchar(50) DEFAULT NULL,
  `Kewarganegaraan` varchar(50) NOT NULL,
  `namaAyah` varchar(100) NOT NULL,
  `lahirAyah` int(4) NOT NULL,
  `pendidikanAyah` varchar(50) NOT NULL,
  `pekerjaanAyah` varchar(50) NOT NULL,
  `penghasilanAyah` varchar(50) NOT NULL,
  `kebutuhanAyah` varchar(50) NOT NULL,
  `namaIbu` varchar(100) NOT NULL,
  `lahirIbu` int(4) NOT NULL,
  `pendidikanIbu` varchar(50) NOT NULL,
  `pekerjaanIbu` varchar(50) NOT NULL,
  `penghasilanIbu` varchar(50) NOT NULL,
  `kebutuhanIbu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`tanggalPengisian`, `NIS`, `jenisPendaftaran`, `tanggalMasuk`, `noPesertaUjian`, `paud`, `tk`, `noSKHUN`, `noIjazah`, `hobi`, `citaCita`, `namaLengkap`, `jenisKelamin`, `NISN`, `NIK`, `tempatLahir`, `tanggalLahir`, `agama`, `muridBerkebutuhan`, `alamatJalan`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kodePos`, `tempatTinggal`, `transportasi`, `hp`, `telp`, `email`, `bantuan`, `noBantuan`, `Kewarganegaraan`, `namaAyah`, `lahirAyah`, `pendidikanAyah`, `pekerjaanAyah`, `penghasilanAyah`, `kebutuhanAyah`, `namaIbu`, `lahirIbu`, `pendidikanIbu`, `pekerjaanIbu`, `penghasilanIbu`, `kebutuhanIbu`) VALUES
('2023-05-15', '220001', 'Siswa Baru', '2023-08-09', '1234567890', 'Ya', 'Ya', 2147483647, 2147483647, 'Olah Raga', 'Lainnya', 'Syauqillah Hadie Ahsana', 'Laki-laki', '1234567890', '1234567890123456', 'Jombang', '2003-08-09', 'Islam', 'Tidak', 'Jl. Kapas 1/7 ', '01', '02', 'Gambiran Utara', 'Gambiran', 'Mojoagung', '61482', 'Kos', 'Kendaraan Pribadi', '0878-6494-0209', '0878-6494-0209', 'syauqillah0908@gmail.com', 'Tidak', '', 'Indonesia', 'Nurhadi Bahri', 1969, 'S2', 'Wiraswasta', '5 juta - 20 juta', 'Tidak', 'Rini Mustikawati', 1968, 'D4/S1', 'Tidak Bekerja', 'Kurang dari 500.000', 'Tidak'),
('2023-05-15', '230001', 'Siswa Baru', '2023-08-09', '0987654321', 'Ya', 'Ya', 2147483647, 2147483647, 'Olah Raga', 'TNI/POLRI', 'Maulana Bryan Syahputra', 'Laki-laki', '1234567654', '124564231345', 'Surabaya', '2003-05-14', 'Islam', 'Tidak', 'Jl. Kenanga', '01', '02', 'Rungkut haji', 'Kamboja', 'Gunung Anyar', '61211', 'Bersama orang tua', 'Kendaraan Pribadi', '0897667853', '0897667853', 'mbry@gmail.com', 'Tidak', '', 'Indonesia', 'Bambang Susanto', 1976, 'S3', 'Wiraswasta', 'lebih dari 20 juta', 'Tidak', 'Lina Nurul Cahaya', 1977, 'D4/S1', 'Tidak Bekerja', 'Kurang dari 500.000', 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `barang`) VALUES
(1, 'Redmi Note 7'),
(2, 'Samsung M20'),
(3, 'Realme 3'),
(4, 'Iphone X');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_covid`
--

CREATE TABLE `tb_covid` (
  `id` int(3) NOT NULL,
  `country` varchar(25) NOT NULL,
  `cases` int(25) DEFAULT NULL,
  `deaths` int(25) DEFAULT NULL,
  `recovered` int(25) DEFAULT NULL,
  `activeCases` int(25) DEFAULT NULL,
  `tests` int(25) DEFAULT NULL,
  `population` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_covid`
--

INSERT INTO `tb_covid` (`id`, `country`, `cases`, `deaths`, `recovered`, `activeCases`, `tests`, `population`) VALUES
(1, 'India', 44986461, 531832, 44446514, 8115, 929430169, 1406631776),
(2, 'Japan', 33802572, 74694, 0, 0, 100414883, 125584838),
(3, 'S.Korea', 31548083, 34687, 31198069, 315327, 15804065, 51329899),
(4, 'Turkey', 17232066, 102174, 0, 0, 162743369, 85561976),
(5, 'Vietnam', 11602738, 43203, 10635065, 924470, 85826548, 98953541),
(6, 'Taiwan', 10239998, 19005, 10220993, 0, 30742304, 23888595),
(7, 'Iran', 7611224, 146236, 7364870, 100118, 56596583, 86022837),
(8, 'Indonesia', 6802090, 161674, 6625209, 15207, 114158919, 279134505),
(9, 'Malaysia', 5088009, 37046, 5029873, 21090, 68352292, 33181072),
(10, 'Israel', 4824551, 12509, 4798473, 13569, 41373264, 9326000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_penjualan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_barang`, `jumlah`, `tgl_penjualan`) VALUES
(1, 1, 5, '2019-01-11'),
(2, 3, 3, '2019-01-04'),
(3, 2, 4, '2019-02-11'),
(4, 2, 3, '2019-03-09'),
(5, 3, 4, '2019-04-10'),
(6, 4, 1, '2019-05-11'),
(7, 1, 2, '2019-05-05'),
(8, 4, 7, '2019-06-09'),
(9, 3, 2, '2019-06-11'),
(10, 2, 5, '2019-07-11'),
(11, 1, 2, '2019-07-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sandi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `sandi`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$PjNN/0TjocEzf2RvbFMXBeaEu6VGETsZHXFhKrAeIws/fsis8zrku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usersadu`
--

CREATE TABLE `usersadu` (
  `username` varchar(50) NOT NULL,
  `passwords` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `NPM` varchar(50) NOT NULL,
  `ProgramStudi` varchar(50) NOT NULL,
  `aduan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `usersadu`
--

INSERT INTO `usersadu` (`username`, `passwords`, `email`, `namaLengkap`, `NPM`, `ProgramStudi`, `aduan`) VALUES
('Ahsa', 'ahsa', 'syauqillah@gmail.com', 'Syauqillah Hadie Ahsana', '21082010042', 'Sistem Informasi', 'Wifi Lemot'),
('ari', 'rftgh', 'ari@gmail.com', 'vybnjn', '4567', 'Sains Data', 'gvbhbj'),
('Syauqi', 'syauqi', 'syauqi@gmail.com', 'Syauqillah Ahsa', '21082010042', 'Sistem Informasi', 'WC Mampet');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`NIS`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usersadu`
--
ALTER TABLE `usersadu`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
