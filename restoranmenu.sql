-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 04:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoranmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama_menu` varchar(25) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `menu_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `jenis`, `nama_menu`, `harga`, `deskripsi`, `menu_image`) VALUES
(4, 'Food', 'Kimchi', 20000, 'Kol dan sayuran diremas dengan bumbu pedas Korea, menciptakan hidangan fermentasi yang kaya rasa.', 'Kimchi.webp'),
(5, 'Food', 'Kongnamul Muchim', 25000, 'Kecambah kedelai direbus dan dicampur dengan bumbu tradisional Korea, menciptakan hidangan segar dan renyah.', 'Kongnamul Muchim.webp'),
(8, 'Food', 'Bibimyeon', 17500, 'Mie dicampur dengan berbagai bahan dan saus pedas, menciptakan hidangan segar dengan rasa yang menggugah selera.', 'bibimmyeon002.webp'),
(9, 'Food', 'Oi Muchim', 10000, 'Mentimun segar diiris tipis dan dicampur dengan bumbu Korea, menciptakan hidangan segar dan gurih', 'oi-muchim.webp'),
(10, 'Food', 'Sigeumchi Namul', 22000, 'Daun bayam direbus dan dicampur dengan bumbu Korea, menghasilkan hidangan sayuran lembut dan gurih.', 'cah-kangkung.webp'),
(12, 'Food', 'Daenjang Jigae', 21500, 'Sup Korea dengan pasta kedelai fermentasi, tahu, daging, bawang, wortel, dan zucchini. Gurih, pedas, cocok di hari-hari sejuk', 'daenjang jiggae.webp'),
(13, 'Food', 'Sundubu Jigae', 25000, 'Sup pedas Korea dengan tahu sutra lembut, udang, kerang, dan sayuran. Kuah pedas dengan kelembutan tahu.\r\n', 'sundubujigae.webp'),
(14, 'Food', 'Kimchi Jigae', 25000, 'Sup pedas Korea dengan kimchi, daging, jamur, dan tahu. Pedas, asam, dan gurih dari kimchi.', 'kimchi-jiggae.webp'),
(15, 'Food', 'Tangsuyuk', 25000, 'Hidangan Tionghoa-Korea, potongan daging goreng dengan tepung, disajikan dengan saus manis asam.', 'Tangsuyuk.webp'),
(16, 'Food', 'Jjampong', 30000, 'Mie kuah pedas Korea dengan seafood dan sayuran. Pedas, kaya rasa, dengan udang, kerang, dan cumi-cumi.', 'jjampong.webp'),
(17, 'Drink', 'Soju', 130000, 'Minuman beralkohol Korea dengan rasa halus dan khas, sering dianggap sebagai minuman nasional Korea.', 'Soju.webp'),
(19, 'Drink', 'Corn Tea', 10000, 'Minuman herbal dari biji jagung panggang, memberikan rasa ringan dan manis alami, kaya akan antioksidan dan serat.', 'corn-tea.webp'),
(20, 'Drink', 'Lemon Tea', 8000, 'Minuman hangat dengan air panas, madu, dan irisan lemon segar. Manis dari madu seimbang dengan keasaman lemon.', 'lemon tea.webp'),
(21, 'Drink', 'Dalgona Coffee', 15000, 'Minuman kopi Korea dengan campuran kopi instan, gula, dan air panas, disajikan di atas susu dingin.', 'Dalgona coffee.webp'),
(23, 'Dessert', 'Hwachae', 15000, 'Minuman Korea segar dengan campuran buah-buahan, bunga, dan es.', 'hwachae.webp'),
(24, 'Dessert', 'Pat Bingsu', 12500, 'Makanan penutup Korea, es serut dengan kacang merah, buah, es krim, dan sirup.', 'pat bingsu.webp'),
(25, 'Dessert', 'Songpyeon', 9000, 'Kue tradisional Korea berisi ketan dengan isian kacang merah, wijen, atau madu.\r\n', 'Songpyeon.webp'),
(26, 'Dessert', 'Hotteok', 11000, 'Pancake Korea manis berisi gula, kacang, dan kayu manis, digoreng.\r\n', 'hotteok.webp'),
(27, 'Dessert', 'Bungeo Ppang', 13000, 'Roti ikan manis Korea dengan isian pasta kacang merah, krim, atau coklat.', 'bungeo ppang.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `birthdate`, `gender`, `role`) VALUES
(1, 'Alfonsus', 'Jason', 'alfonsusjason01@gmail.com', '$2y$10$YfrEpzpPsEjNYBNrZt7/ZueRVQsgYEEb7p8ljssdhCfD.hDUB0I1m', '2005-01-05', 'Laki-Laki', 1),
(2, 'Alfonsus', 'Christian', 'alfonsusjason05@gmail.com', '$2y$10$GttEDcE4WAvS1iTMrJuGKOFEkJkNFcuGuQbPe.m8ET1Tqta8nPlOa', '2023-10-22', 'Laki-Laki', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
