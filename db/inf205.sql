-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 09:32 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inf205`
--

-- --------------------------------------------------------

--
-- Table structure for table `catproducts`
--

CREATE TABLE `catproducts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='danh mục sản phẩm';

--
-- Dumping data for table `catproducts`
--

INSERT INTO `catproducts` (`id`, `name`, `content`, `images`) VALUES
(1, 'Iphone', 'danh má»¥c ai phÃ´n ', NULL),
(6, 'Ipad', 'Danh má»¥c ipad', NULL),
(7, 'Apple watch', 'danh má»¥c apple watch', NULL),
(8, 'Nokia', 'Danh má»¥c Nokia', NULL),
(9, 'Samsung', 'danh má»¥c samsung 1', NULL),
(10, 'demo', 'demo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custommers`
--

CREATE TABLE `custommers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='bang khách hàng';

--
-- Dumping data for table `custommers`
--

INSERT INTO `custommers` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'nguyen van cuong', 'cuongnvph02906@fpt.edu.vn', 1686193254, 'hÃ  ná»™i');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `count_product` int(11) DEFAULT NULL,
  `orders_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `name`, `count_product`, `orders_id`, `products_id`) VALUES
(1, 'Ä‘Æ¡n hÃ ng chi tiáº¿t 1', 999, 8, 3),
(2, 'Ä‘Æ¡n hÃ ng chi tiáº¿t 2', 1000000, 8, 3),
(3, 'name', 69, 8, 3),
(4, 'ten', 69, 8, 3),
(5, 'ten', 69, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `custommers_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='bảng hoá đơn';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `custommers_id`, `name`) VALUES
(8, 1, 'hoa don 2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'trường id',
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `price` int(11) DEFAULT NULL,
  `catproducts_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='bảng sản phẩm';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `content`, `price`, `catproducts_id`) VALUES
(3, 'demo san pham so 1 1100', 'noi dung san pháº©m sá»‘ 11100', 2147483647, 9),
(4, 'demo san pham', 'content san pham', 500000, 6),
(5, 'demo sp', 'demo sp', 2147483647, 10),
(6, 'Ä‘Æ¡n hÃ ng 113', '112', 333, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catproducts`
--
ALTER TABLE `catproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custommers`
--
ALTER TABLE `custommers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_custommers` (`custommers_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_catproducts` (`catproducts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catproducts`
--
ALTER TABLE `catproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `custommers`
--
ALTER TABLE `custommers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'trường id', AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_custommers` FOREIGN KEY (`custommers_id`) REFERENCES `custommers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_catproducts` FOREIGN KEY (`catproducts_id`) REFERENCES `catproducts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
