-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 15, 2022 at 12:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `altamash`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `fullname` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`fullname`, `email`, `street`, `city`, `state`, `zip`) VALUES
('ROLEX', 'AMASH789@GMAIL.COM', 'NIZAM GANJ', 'ABAD', 'MAHARAS', 4310),
('ROLEX', 'AMASH789@GMAIL.COM', 'NIZAM GANJ', 'ABAD', 'MAHARAS', 4310),
('rado', 'SKALTAMASH789@GMAIL.COM', 'NIZAM GANJ', 'ABAD', 'MAHARASHTRA', 431001),
('Melody', 'SKALTAMASH789@GMAIL.COM', 'NIZAM GANJ', 'ABAD', 'MAHARASHTRA', 431001),
('Melody', 'SKALTAMASH789@GMAIL.COM', 'NIZAM GANJ', 'ABAD', 'MAHARASHTRA', 431001),
('Melody', 'SKALTAMASH789@GMAIL.COM', 'NIZAM GANJ', 'ABAD', 'MAHARASHTRA', 431001),
('Melody', 'SKALTAMASH789@GMAIL.COM', 'NIZAM GANJ', 'ABAD', 'MAHARASHTRA', 431001),
('ROLEX', 'SKALTAMASH789@GMAIL.COM', 'NIZAM GANJ', 'ABAD', 'MAHARASHTRA', 431);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('altamash', '123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_name`, `name`, `price`, `image`) VALUES
(1, 'Rolex', 'Rolex Gold', 80000, 'ro4.jpg'),
(2, 'Rolex', 'Rolex NXTGEN', 75000, 'ro3.jpg'),
(3, 'Rolex', 'Rolex Royal', 85000, 'Ro7.jpg'),
(4, 'Rolex', 'Rolex Optimum', 90000, 'ro1.jpg'),
(11, 'Fastrack', 'Smart watch', 45000, 'f1.jpg'),
(12, 'Fastrack', 'Classy ', 25000, 'f (4).jpg'),
(13, 'Fastrack', 'Weirdo', 35000, 'f(3).jpg'),
(14, 'Fastrack', ' Zigzag', 20000, 'f11.jpg'),
(21, 'RADO', 'Matrix', 60000, 'rd12.jpg'),
(22, 'RADO', ' Blacky Bold', 70000, 'rd11.jpg'),
(23, 'RADO', 'Trilogy', 55000, 'rd.jpg'),
(24, 'RADO', 'Platinum', 69000, 'rd5.jpg'),
(41, 'SONATA', 'Marry gold', 250, 'so1.jpg'),
(42, 'SONATA', 'Lady pink', 500, 'so2.jpg'),
(43, 'SONATA', 'Sky Lips', 299, 'so3.jpg'),
(44, 'SONATA', 'FREE', 0, 'so4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `clientno` varchar(4) NOT NULL,
  `branchno` varchar(4) DEFAULT NULL,
  `staffno` varchar(4) DEFAULT NULL,
  `datejoined` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`clientno`, `branchno`, `staffno`, `datejoined`) VALUES
('CR56', 'B003', 'SG37', '2013-04-11'),
('CR62', 'B007', 'SA9', '2013-03-07'),
('CR74', 'B003', 'SG37', '2013-11-16'),
('CR76', 'B005', 'SL41', '2013-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `mobileno`, `address`) VALUES
('umair', '12345', 12345, 'Roshan gate'),
('altu', '123', 12345366, 'Roshan gate'),
('Uday bhai', '777777', 97662200, 'ghar pe'),
('Uday bhai', '777777', 97662200, 'ghar pe'),
('FAIZAN', '123456', 12345366, 'ghar pe'),
('altu', '123', 12345, 'ghar pe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`clientno`),
  ADD KEY `branchno` (`branchno`),
  ADD KEY `staffno` (`staffno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
