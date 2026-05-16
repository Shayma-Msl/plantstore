-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2024 at 09:47 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `number`, `email`, `message`) VALUES
(12, 15, 'mariem', '54766782', 'mariem.laarifi@gmail.com', 'good job keep going the site is soo pretty you are so smart \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(4, 13, 'vbn', 7412568, 'fghj@dfghj.fgh', 'cash on delivery', 'dgfhgjhkj, gfhgjhk, dgfhgjhkj - 852', ', MONSTERA DELICIOSA (1) , Peperomia RAINDROP (1) ', 78, '01-May-2024', 'completed'),
(5, 13, 'fghgjhkj', 8541, 'dgfhgjh@fghj.fgh', 'paypal', 'dgfhgjhkjlk, kjuhygtred, dgfhgjhkjlk - 841255', ', MONSTERA DELICIOSA (1) ', 59, '01-May-2024', 'completed'),
(6, 15, 'mariem', 54766782, 'mariem.laarifi@gmail.com', 'credit card', 'montfleury, tunis, tunisia - 1089', ', MONSTERA DELICIOSA (1) , Peperomia RIPPLE RED (1) ', 78, '02-May-2024', 'completed'),
(7, 13, 'shayma', 5558889, 'mselmichaima122@gmail.com', 'credit card', 'jasmin, ariana, tunisia - 12363', ', Calla Lily purple (1) , Bloomin Bundle (2) , Aloe Vera (1) ', 107, '03-May-2024', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descr`, `price`, `image`) VALUES
(34, 'Calla Lily purple', '', 25, 'Blooming Bundle Calla Lily Purple.webp'),
(32, 'Aloe Vera', '', 12, 'Aloe Vera.webp'),
(33, 'Bloomin Bundle', '', 35, 'Blooming Bundle Calla Lily Pink.webp'),
(26, 'MONSTERA DELICIOSA', '', 59, '4_MONSTERA_DELICIOSA_1_592x592.webp'),
(25, 'Peperomia RAINDROP', '', 19, '4_PEPEROMIA_RAINDROP_1_68c540b9-7f1a-46c1-9ba4-562e8c81eeaf_592x592.webp'),
(24, 'Peperomia RIPPLE RED', '', 19, '4_PEPEROMIA_RIPPLE.RED_592x592.webp'),
(27, 'Palm PARLOR', '', 79, '3_PALM_PARLOR_1_592x592.webp'),
(28, 'Golden POTHOS', '', 15, '1-Pothos-Golden-6_10_5dd9a1d3-f96e-4d21-81d3-8e9a8d5b5207_592x592.webp'),
(29, 'Maidenhair Fern', '', 35, 'image_png285531995_592x592.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(8, 'shayma mselmi', 'mselmichaima122@gmail.com', '86d93b21520860f06761eff169196464', 'admin'),
(12, 'mariem', 'mariem@maaref.yahoo', '984987cea0751a4a055ef0999c19ed6d', 'admin'),
(15, 'mariem', 'mariem.laarifi@gmail.com', 'eb10edf053207c106599b170bd045a93', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
