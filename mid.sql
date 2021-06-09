-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2021 pada 18.33
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mid11825`
--

CREATE TABLE `mid11825` (
  `name` varchar(20) NOT NULL,
  `membership` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mid11825`
--

INSERT INTO `mid11825` (`name`, `membership`, `email`, `phone`, `address`, `dob`, `gender`) VALUES
('rizkis', 'gold', 'abidardiansyah1@gmail.com', '088232912416', 'Gembongan rt 003/004 kec. Sigaluh', '2021-06-24', 'Pilih jeni'),
('rizki ard', 'gold', 'sitiasanah76@gmail.com', '088232912416', 'Gembongan rt 003/004 kec. Sigaluh', '2021-06-16', 'Laki-laki');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
