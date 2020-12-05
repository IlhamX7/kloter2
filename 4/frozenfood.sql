-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2020 pada 12.46
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frozenfood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `photos` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `nutrisi` varchar(200) NOT NULL,
  `serving_size` varchar(100) NOT NULL,
  `id_distributor` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `photos`, `deskripsi`, `nutrisi`, `serving_size`, `id_distributor`) VALUES
(1, 'Chiken Nugget Animal', 'animal.png', 'So Good Chicken Nugget ANIMAL sajian yang menggugah selera , diolah dari daging dada ayam pilihan, dan bumbu Pizza yang khas, dibalut dengan breadcrumb yang renyah.', 'Lemak Total 16 g / 23 %, Protein 14 g / 24 %, Karbohidrat 39 g / 12 % dan Natrium / Sodium 420 mg / 28 %', '100 g', 'PT.Indofood'),
(3, 'Chicken Nugget Premium', '5fcb6337a7ec9.png', 'Produk istimewa So Good Chicken Nugget Premium dengan kandungan daging dada ayam yang banyak, bumbu yang berkualitas, memiliki tekstur yang lembut, aroma yang menggugah selera, serta dibalut dengan breadcrumb yang renyah, semakin menambah kenikmatan rasanya.', 'Lemak Total 12 g / 18 %, Protein 17 g / 28 %, Karbohidrat 13 g / 4 %, dan Natrium / Sodium 660 mg / 44 %', '100 g', 'PT.Mejik'),
(4, 'Fish Nugget', '5fcb647d85a80.png', 'Rasakan kelezatan So Good Fish Nugget Original, dibuat dari daging ikan tilapia dan bumbu spesial berkualitas menghasilkan tekstur yang lembut, aroma menggugah selera, serta dibalut breadcrumb renyah. So Good Fish Nugget Original sajian kaya protein yang lezat dan sehat.', 'Lemak Total 6 g / 9 %, Protein 11 g / 18 %, Karbohidrat 22 g / 7 %, dan Natrium / Sodium 560 mg / 37 %', '100 g', 'PT. Radif Gans');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
