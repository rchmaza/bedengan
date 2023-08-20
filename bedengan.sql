-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 06:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedengan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL DEFAULT 1,
  `start_date` date NOT NULL DEFAULT curdate(),
  `end_date` date NOT NULL DEFAULT curdate(),
  `user_id` int(11) NOT NULL,
  `ground_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `day`, `start_date`, `end_date`, `user_id`, `ground_id`) VALUES
(1, 5, '2023-08-21', '2023-08-25', 1, 1),
(2, 3, '2023-08-21', '2023-08-23', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ground`
--

CREATE TABLE `ground` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ground`
--

INSERT INTO `ground` (`id`, `name`, `price`, `description`) VALUES
(1, 'Ground A', '150000', NULL),
(2, 'Ground B', '150000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ground_image`
--

CREATE TABLE `ground_image` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `is_cover` tinyint(1) NOT NULL DEFAULT 1,
  `ground_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ground_image`
--

INSERT INTO `ground_image` (`id`, `filename`, `is_cover`, `ground_id`) VALUES
(1, 'A1.jpg', 1, 1),
(2, 'A2.jpg', 0, 1),
(3, 'A3.jpg', 0, 1),
(4, 'B1.jpg', 1, 2),
(5, 'B2.jpg', 0, 2),
(6, 'B3.jpg', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL DEFAULT 0,
  `status` enum('inactive','active','done','cancel') NOT NULL DEFAULT 'inactive',
  `order_date` date NOT NULL DEFAULT curdate(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT 0,
  `start_date` date NOT NULL DEFAULT curdate(),
  `end_date` date NOT NULL DEFAULT curdate(),
  `ground_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `phone`, `is_admin`) VALUES
(1, 'admin', 'admin', '123', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_ground_id_fk` (`ground_id`),
  ADD KEY `cart_user_id_fk` (`user_id`);

--
-- Indexes for table `ground`
--
ALTER TABLE `ground`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ground_image`
--
ALTER TABLE `ground_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ground_image_ground_id_fk` (`ground_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_id_fk` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_ground_id_fk` (`ground_id`),
  ADD KEY `order_detail_order_id_fk` (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ground`
--
ALTER TABLE `ground`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ground_image`
--
ALTER TABLE `ground_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ground_id_fk` FOREIGN KEY (`ground_id`) REFERENCES `ground` (`id`),
  ADD CONSTRAINT `cart_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `ground_image`
--
ALTER TABLE `ground_image`
  ADD CONSTRAINT `ground_image_ground_id_fk` FOREIGN KEY (`ground_id`) REFERENCES `ground` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ground_id_fk` FOREIGN KEY (`ground_id`) REFERENCES `ground` (`id`),
  ADD CONSTRAINT `order_detail_order_id_fk` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
