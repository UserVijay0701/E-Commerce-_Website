-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2020 at 01:28 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user_behaviour`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `ptype` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `count` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `product`, `ptype`, `brand`, `model`, `price`, `quantity`, `image`, `uname`, `count`, `rdate`) VALUES
(1, 'mobile', 'electronic', 'redmi', 'note 8', '13000', 92, 'banner.jpg', 'rose', '17', '29-10-2020'),
(2, 'watch', 'electronic', 'TaTa', 'A1', '1500', 41, 'photo.jpg', 'rose', '17', '29-10-2020'),
(3, 'shirt', 'sdsd', 'TaTa', 'sfsdf', '1000', 47, 'cloudbackup.png', 'mickey', '1', '30-10-2020'),
(4, 'saree', 'saree', 'saree', '1521', '250', 497, 'download.png', 'mickey', '3', '02-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `utype` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`utype`, `username`, `password`) VALUES
('admin', 'admin', 'admin'),
('aggregator', 'aggregator', '1234'),
('authority', 'authority', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `analyst_reg`
--

CREATE TABLE `analyst_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` int(11) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analyst_reg`
--

INSERT INTO `analyst_reg` (`id`, `name`, `contact`, `email`, `otp`, `rdate`) VALUES
(1, 'cherry', 9785675675, 'karunchandru99@gmail.com', 49010, ''),
(2, 'cherry', 9785675675, 'karunchandru99@gmail.com', 83932, '29-10-20'),
(3, 'cherry', 9785675675, 'karunchandru99@gmail.com', 64687, '29-10-20'),
(4, 'mickey', 9785675675, 'karunchandru99@gmail.com', 80422, '30-10-20'),
(5, 'mickey', 9785675675, 'karunchandru99@gmail.com', 97654, '30-10-20'),
(6, 'yoga', 9785675675, 'karunchandru99@gmail.com', 17365, '02-11-20'),
(7, 'rose', 7485961230, 'rose@gmail.com', 15220, '02-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `accno` int(11) NOT NULL,
  `card` int(11) NOT NULL,
  `vdate` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `uname`, `accno`, `card`, `vdate`, `rdate`) VALUES
(1, 'cherry', 2232, 2222, '2020-10-29', '29-10-2020'),
(2, 'cherry', 2232, 2222, '2020-10-29', '29-10-2020'),
(3, 'cherry', 2232, 2222, '2020-10-29', '29-10-2020'),
(4, 'cherry', 2232, 2222, '2020-10-29', '29-10-2020'),
(5, 'cherry', 2232, 2222, '2020-10-29', '29-10-2020'),
(6, 'cherry', 2147483647, 2147483647, '2020-10-29', '29-10-2020'),
(7, 'mickey', 2147483647, 2147483647, '2020-10-16', '30-10-2020'),
(8, 'mickey', 2147483647, 2147483647, '2020-10-16', '30-10-2020'),
(9, 'mickey', 2147483647, 2147483647, '2020-10-30', '30-10-2020'),
(10, 'cherry', 545453, 84535334, '2020-10-30', '30-10-2020'),
(11, 'mickey', 2147483647, 2147483647, '2020-11-02', '02-11-2020'),
(12, 'rose', 2147483647, 84535334, '2020-11-12', '02-11-2020'),
(13, 'mickey', 545453, 2147483647, '2020-11-02', '02-11-2020'),
(14, 'mickey', 2232, 2147483647, '2020-11-03', '02-11-2020'),
(15, 'mickey', 2147483647, 2147483647, '2020-11-04', '02-11-2020'),
(16, 'mickey', 2147483647, 2147483647, '2020-11-03', '02-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `ptype` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tot_amount` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `uname`, `product`, `ptype`, `model`, `price`, `quantity`, `tot_amount`, `image`, `rdate`) VALUES
(4, 'cherry', 'mobile', 'electronic', 'note 8', 13000, 3, 26000, 'banner.jpg', '29-10-2020'),
(5, 'cherry', 'mobile', 'electronic', 'note 8', 13000, 1, 26000, 'banner.jpg', '29-10-2020'),
(6, 'cherry', 'mobile', 'electronic', 'note 8', 13000, 97, 39000, 'banner.jpg', '29-10-2020'),
(7, 'mickey', 'watch', 'electronic', 'A1', 1500, 47, 4500, 'photo.jpg', '30-10-2020'),
(8, 'mickey', 'watch', 'electronic', 'A1', 1500, 44, 4500, 'photo.jpg', '30-10-2020'),
(9, 'mickey', 'watch', 'electronic', 'A1', 1500, 43, 1500, 'photo.jpg', '30-10-2020'),
(10, 'cherry', 'shirt', 'sdsd', 'sfsdf', 1000, 48, 2000, 'cloudbackup.png', '30-10-2020'),
(11, 'mickey', 'shirt', 'sdsd', 'sfsdf', 1000, 47, 1000, 'cloudbackup.png', '02-11-2020'),
(12, 'rose', 'saree', 'saree', '1521', 250, 499, 250, 'download.png', '02-11-2020'),
(13, 'mickey', 'mobile', 'electronic', 'note 8', 13000, 95, 26000, 'banner.jpg', '02-11-2020'),
(14, 'mickey', 'saree', 'saree', '1521', 250, 497, 500, 'download.png', '02-11-2020'),
(15, 'mickey', 'mobile', 'electronic', 'note 8', 13000, 92, 39000, 'banner.jpg', '02-11-2020'),
(16, 'mickey', 'watch', 'electronic', 'A1', 1500, 41, 3000, 'photo.jpg', '02-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `contact`, `email`, `gender`, `age`, `address`, `uname`, `pass`, `rdate`) VALUES
(1, 'cherry', 9785675675, 'yogha@gmail.com', 'radiobutton', 20, '1/2,trichy,600018', 'cherry', '1234', '29-10-20'),
(2, 'mickey', 9785675675, 'yogha@gmail.com', 'radiobutton', 32, '1/2,trichy,600018', 'mickey', '1234', '30-10-20'),
(3, 'rose', 7894561230, 'rose@gmail.com', 'radiobutton', 24, 'trichy', 'rose', '123', '02-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `search_count`
--

CREATE TABLE `search_count` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `public_key` varchar(100) NOT NULL,
  `private_key` varchar(100) NOT NULL,
  `encrypted` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_count`
--

INSERT INTO `search_count` (`id`, `uname`, `product`, `public_key`, `private_key`, `encrypted`, `status`) VALUES
(1, 'mickey', 'watch', '532c28d5', '412dd75b', '\Z\0\n', '1'),
(2, 'cherry', 'shirt', 'd2974c96', 'dc96b3f3', '	', '1'),
(3, 'mickey', 'shirt', 'c9507f53', '8a6e79c9', '	', '1'),
(4, 'rose', 'saree', '3a4bc565', 'a4835306', '\0', '1'),
(5, 'mickey', 'mobile', 'd41d8cd9', '8f00b204', '\0\0:', '1'),
(6, 'mickey', 'saree', 'd41d8cd9', '8f00b204', '\0', '1'),
(7, 'mickey', 'mobile', 'd41d8cd9', '8f00b204', '\0\0:', '1'),
(8, 'mickey', 'watch', 'd41d8cd9', '8f00b204', '\Z\0\n', '1');
