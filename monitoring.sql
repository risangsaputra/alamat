-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mei 2016 pada 15.12
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`, `gambar`, `level`) VALUES
(3, 'Risang Suryadi Saputra', 'risang.pro@gmail.com', 'risangsaputra', 'ec492e87ee4dbdc5c2ab777c87c91da6', 'macbeth_vegan_white_lg_1.jpg', 1),
(6, 'lol', 'lol.pro@gmail.com', 'kol', '36f82cdece0077d1ffd373d85c5e705d', 'avatar5.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `router`
--

CREATE TABLE `router` (
  `id_router` int(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `lat` varchar(200) NOT NULL,
  `lng` varchar(200) NOT NULL,
  `cabang` varchar(200) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `router`
--

INSERT INTO `router` (`id_router`, `lokasi`, `lat`, `lng`, `cabang`, `ip`, `keterangan`) VALUES
(5, 'Jakarta, Indonesia', '-6.1744651', '106.82274499999994', '-6.1744651, 106.82274499999994', '192.168.10.2', 'jakarta'),
(6, 'Bandung, Bandung City, West Java, Indonesia', '-6.9174639', '107.61912280000001', '-6.1744651, 106.82274499999994', '192.168.1.1', 'jakarta'),
(18, 'Malang, Malang City, East Java, Indonesia', '-7.966620399999998', '112.63263210000002', '-6.1744651, 106.82274499999994', '192.168.1.3', 'jakarta'),
(23, 'Medan, Medan City, Sumatra du Nord, IndonÃ©sie', '3.5951956', '98.67222270000002', '-6.9174639, 107.61912280000001', '192.168.5.2', 'medan'),
(25, 'Ambon, Kota Ambon, Moluques, IndonÃ©sie', '-3.6553932', '128.19077229999994', '-6.1744651, 106.82274499999994', '192.168.1.4', 'ambon'),
(26, 'Bima, West Nusa Tenggara, IndonÃ©sie', '-8.481359399999999', '118.78975579999997', '-6.1744651, 106.82274499999994', '192.168.1.14', 'router bima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `router`
--
ALTER TABLE `router`
  ADD PRIMARY KEY (`id_router`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `router`
--
ALTER TABLE `router`
  MODIFY `id_router` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
