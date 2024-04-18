-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 11:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `Qte` text NOT NULL,
  `Prix` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `libelle`, `Qte`, `Prix`) VALUES
(4, 'Product 4', '6', '8.99'),
(5, 'Product 5', '300', '25.99'),
(6, 'Product 6', '50', '5.99'),
(7, 'Product 7', '20', '18.99'),
(8, 'Product 8', '0', '22.99'),
(17, 'Prodcuit 12', '140', '120');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `password`, `role`) VALUES
(1, 'Yassine ', 'Yassine@gmail.com', '123', 'client'),
(2, 'Jaafar', 'Jaafar@gmail.com', '123', 'admin'),
(3, 'JohnDoe', 'johndoe@example.com', 'password123', 'client'),
(4, 'JaneSmith', 'janesmith@example.com', 'securepassword', 'client'),
(5, 'AliceWonderland', 'alice@example.com', 'wonderland123', 'client'),
(6, 'BobBuilder', 'bob@example.com', 'builder456', 'client'),
(7, 'EmilyJones', 'emilyjones@example.com', 'password123', 'client'),
(8, 'DavidBrown', 'david@example.com', 'brown789', 'client'),
(9, 'SarahWilson', 'sarah@example.com', 'wilson123', 'client'),
(10, 'MichaelDavis', 'michael@example.com', 'davis456', 'client'),
(11, 'EmmaRoberts', 'emma@example.com', 'roberts789', 'client'),
(12, 'ChristopherLee', 'chris@example.com', 'lee123', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
