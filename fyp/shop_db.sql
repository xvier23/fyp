-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 06:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `ord_date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`, `ord_date`, `status`) VALUES
(2, 'tim', '123', '123@gmail.com', 'cash on delivery', 'abc building', 'abc street', 'Shatin', 'NT', 'Hong Kong SAR', 0, 'Starter_box3 (1) , Starter_box2 (1)', '198', '2023-04-13', 2),
(3, 'linken', '1234125', '12352@gmail.com', 'credit cart', 'abc building', 'abc street', 'Shatin', 'NT', 'Hong Kong SAR', 123456, 'Card_1 (3) , Starter_box2 (1) , Card_3 (1) ', '895', '2023-04-13', 1),
(4, 'dickson', '2180000', 'dickson@gmail.com', 'paypal', 'bsd building', 'ching shan', 'ACD City', 'Shibas', 'Kappa Country', 999000, 'Starter_box3 (1) , Starter_box2 (1) , Starter_box1 (1) ', '297', '2023-04-17', 1),
(5, 'Fanta', '90011902', 'fanta@gmail.com', 'credit cart', 'Libas 2', 'queens park', 'Kansas ', 'lindas', 'Hogwards', 123654, 'Starter_box3 (1) , Starter_box2 (1) , Starter_box1 (1) , Card_3 (2) , Card_2 (1) , Card_1 (3) ', '1491', '2023-04-20', 1),
(6, 'turtle', '68930836', 'blastoise@gmail.com', 'credit cart', 'Turtle Building', 'turtle street', 'turtleland', 'turtle state', 'Turtle Land', 122345, 'Starter_box3 (1) ', '99', '2023-04-21', 1),
(7, 'doinb', '91919191', 'doinbcowb@gmail.com', 'paypal', 'Big B Mansion F1', 'Moneky Road', 'Shang Hai', 'Shang Hai', 'China', 129876, 'Card_1 (1) ', '199', '2023-04-24', 1),
(8, 'Ant', '12332102', 'ant@gmail.com', 'cash on delivery', 'death star', 'city', 'liyue habrar', 'zhongli', 'liyue', 123544, 'Starter_box1 (1) , Starter_box2 (1) , Starter_box3 (1) ', '297', '2023-04-28', 1),
(9, 'doinb', '91919191', 'doinbcowb@gmail.com', 'credit cart', 'Money Town', 'Money Road', 'Money City', 'Money Land', 'Money Counrty', 129876, 'Starter_box1 (1) ', '99', '2023-04-29', 1),
(10, 'doinb', '91919191', 'doinbcowb@gmail.com', 'cash on delivery', 'Doinb Road', 'Doinb Road', 'Shang Hai', 'Shang Hai', 'China', 129876, 'Starter_box1 (10) ', '990', '2023-04-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(3, 'Starter_box1', 99, 'demo1.jpg'),
(4, 'Starter_box2', 99, 'demo2.jpg'),
(10, 'Starter_box3', 99, 'demo7.jpg'),
(11, 'Card_1', 199, 'demo4.jpg'),
(12, 'Card_2', 199, 'demo6.jpg'),
(13, 'Card_3', 199, 'demo3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `type`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '$2y$10$qgG9QRnww7qRcjskLRCMROGEdMfg9SlECkyhGtWedU92WtJiyLHGO', 'admin\r\n'),
(5, 'jeff', 'jeff@gmail.com', 'jeff11', '$2y$10$DUYQUuH7ZTCAUn4vjD9vAetY1/c8GIHJWpQtr1YC7s3.UYmyQK61e', ''),
(6, 'Anthony Ant', 'antt@gmail.ccom', 'ant12', '$2y$10$ywZo1t6JhAyFRGEXFh6czubDMBPDAl/DGLIj75yB5rQ6N6YaUnHsy', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
