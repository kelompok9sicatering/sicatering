-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2022 pada 09.34
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_catering`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id_customer` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pilihan_menu` enum('Paket 1','Paket 2','Paket 3') NOT NULL,
  `keterangan` enum('Sudah Bayar','Belum Bayar') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat`, `no_hp`, `pilihan_menu`, `keterangan`) VALUES
(1, 'nursucinong', 'jl.sawo', '813621945', 'Paket 1', 'Sudah Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lp_penjualan`
--

CREATE TABLE IF NOT EXISTS `lp_penjualan` (
  `nama_menu` varchar(255) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah_pesanan` varchar(50) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_diambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_catering`
--

CREATE TABLE IF NOT EXISTS `menu_catering` (
  `kode_menu` varchar(255) NOT NULL,
  `nama_menu` varchar(25) NOT NULL,
  `lauk` varchar(100) NOT NULL,
  `sayuran` varchar(50) NOT NULL,
  `buah` varchar(50) NOT NULL,
  `snack` varchar(25) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_catering`
--

INSERT INTO `menu_catering` (`kode_menu`, `nama_menu`, `lauk`, `sayuran`, `buah`, `snack`, `harga`) VALUES
('P01', 'Paket 1', 'Ayam', 'Kangkung', 'Jeruk', 'Puding', 'Rp. 35000'),
('P02', 'Paket 2', 'Ikan', 'Capcai', 'Semangka', 'Kue', 'Rp. 20000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('Kelompok9', '827ccb0eea8a706c4c34a16891f84e7b', 'kelompok9@gmail.com', 'Kelompok 9', 3, 'Admin Kelompok 9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `lp_penjualan`
--
ALTER TABLE `lp_penjualan`
 ADD UNIQUE KEY `nama_menu` (`nama_menu`);

--
-- Indexes for table `menu_catering`
--
ALTER TABLE `menu_catering`
 ADD UNIQUE KEY `kode_menu` (`kode_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
