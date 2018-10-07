-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2018 pada 14.07
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `formmahasiswa`
--

CREATE TABLE `formmahasiswa` (
  `NIM` int(10) NOT NULL,
  `NAMA` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Komentar` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `JenisKelamin` varchar(15) NOT NULL,
  `ProgramStudi` varchar(30) NOT NULL,
  `Fakultas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formmahasiswa`
--

INSERT INTO `formmahasiswa` (`NIM`, `NAMA`, `Email`, `Komentar`, `Tanggal`, `JenisKelamin`, `ProgramStudi`, `Fakultas`) VALUES

(231241, 'qweqwwrqer', 'rizkirahardiputra@gmail.com', 'qerqrqer', '2018-10-10', 'laki- laki', 'D3 Sistem Informasi Akuntansi', 'FIT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
