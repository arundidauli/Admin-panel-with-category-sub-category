-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2021 at 02:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM'),
(2, 'dscfsf', 'adad', '2021-06-15 09:56:54', ''),
(3, 'sadmin', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-15 09:57:45', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `cat_pic` varchar(100) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`, `cat_pic`, `creationDate`) VALUES
(5, 'Test1', 'a.jpeg', '2021-06-15 10:33:34'),
(6, 'Test2', 'attachment.png', '2021-06-15 10:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(11) NOT NULL,
  `subcategory` varchar(11) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `productprice` int(11) DEFAULT NULL,
  `productdescription` longtext DEFAULT NULL,
  `productimage` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_cat_id` int(11) NOT NULL,
  `cat_id` varchar(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `subcategory_name` varchar(255) DEFAULT NULL,
  `sub_cat_pic` varchar(100) NOT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_cat_id`, `cat_id`, `category_name`, `subcategory_name`, `sub_cat_pic`, `creationDate`) VALUES
(2, '', '5', 'test1demo', 'a.jpeg', '2021-06-15 10:41:25'),
(3, '', '5', 'test1demo1', 'a.jpeg', '2021-06-15 10:42:02'),
(4, '', '6', 'test2demo', 'a.jpeg', '2021-06-15 10:42:20'),
(5, '', '6', 'test2demo', 'a.jpeg', '2021-06-15 10:44:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
