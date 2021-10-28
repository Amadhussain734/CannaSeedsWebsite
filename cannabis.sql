-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 02:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cannabis`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `subtittle` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `button` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bestsellerscategory`
--

CREATE TABLE `bestsellerscategory` (
  `category_id` int(10) NOT NULL,
  `product_name` text NOT NULL,
  `image` text NOT NULL,
  `price` int(10) NOT NULL,
  `product_reviews` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestsellerscategory`
--

INSERT INTO `bestsellerscategory` (`category_id`, `product_name`, `image`, `price`, `product_reviews`) VALUES
(0, '', '', 0, ''),
(4, 'FEMISNISED SEEDS Gorilla FROM', 'http://localhost:7882/amad/html/images/stars1.png,http://localhost:7882/amad/html/images/bestseller1.jpg,', 12, '183 customer reviews'),
(5, 'FEMINISED SEEDS Amneshia Kush FROM', 'http://localhost:7882/amad/html/images/stars1.png,http://localhost:7882/amad/html/images/bestseller2.jpg,', 12, '183 customer reviews'),
(6, 'FEMINISED SEEDS Quick Critical Plus+ FROM', 'http://localhost:7882/amad/html/images/stars1.png,http://localhost:7882/amad/html/images/bestseller3.jpg', 11, '241 customer reviews');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `image`, `name`) VALUES
(1, 'http://localhost/amad/html/images/category1.jpg', 'INDOOR GROWING CANNABIS SEEDS'),
(2, 'http://localhost/amad/html/images/category2.jpg', 'OUTDOOR GROWING CANNABIS SEEDS'),
(3, 'http://localhost/amad/html/images/category3.jpg', 'CUP WINNING CANNABIS SEEDS');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `Full Name` text NOT NULL,
  `Select Country` text NOT NULL,
  `Contact No.` text NOT NULL,
  `Email Address` text NOT NULL,
  `Comments/Suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`Full Name`, `Select Country`, `Contact No.`, `Email Address`, `Comments/Suggestions`) VALUES
('Amad Hussain', 'Pakistan', '03337741635', 'amadmughal100@gmail.com', 'Canna seeds provide seeds of better quality'),
('Hasam Hafeez', 'Pakistan', '03131319559', 'hassamhafeez05@gmail.com', 'Canna seeds provide seeds of better quality');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryservices`
--

CREATE TABLE `deliveryservices` (
  `type_id` int(11) NOT NULL,
  `imageURL` text NOT NULL,
  `typeName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryservices`
--

INSERT INTO `deliveryservices` (`type_id`, `imageURL`, `typeName`) VALUES
(0, '', ''),
(1, 'http://localhost:7882/amad/html/images/visa.jpghttp://localhost:7882/amad/html/images/bitcoin.jpg', 'PAYMENT METHODS:'),
(2, 'http://localhost:7882/amad/html/images/thawte-secured_by.jpg', 'SECURED BY:'),
(3, 'http://localhost:7882/amad/html/images/ups.jpghttp://localhost:7882/amad/html/images/correos.jpghttp://localhost:7882/amad/html/images/GLS.jpg', 'DELIVERY COMPANIES:');

-- --------------------------------------------------------

--
-- Table structure for table `email subscription`
--

CREATE TABLE `email subscription` (
  `Email ID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email subscription`
--

INSERT INTO `email subscription` (`Email ID`) VALUES
('fa17bsse0090@maju.edu.pk'),
('admin@google.com'),
('hassamhafeez05@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `popularcategory`
--

CREATE TABLE `popularcategory` (
  `category_id` int(10) NOT NULL,
  `productName` text NOT NULL,
  `image_path` text NOT NULL,
  `product_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popularcategory`
--

INSERT INTO `popularcategory` (`category_id`, `productName`, `image_path`, `product_price`) VALUES
(7, 'Super Skunk Automated  Canna Seeds', 'http://localhost:7882/amad/html/images/50-percent.png,http://localhost:7882/amad/html/images/award-label.png,http://localhost:7882/amad/html/images/popular1.jpg,http://localhost:7882/amad/html/images/hearts.jpg,http://localhost:7882/amad/html/images/stars1.png', '11.00€'),
(8, 'Super Skunk Automated  Canna Seeds', 'http://localhost:7882/amad/html/images/50-percent.png,http://localhost:7882/amad/html/images/award-label.png,http://localhost:7882/amad/html/images/popular2.jpg,http://localhost:7882/amad/html/images/hearts.jpg,http://localhost:7882/amad/html/images/stars1.png', '8.50€'),
(9, 'Super Skunk Automated  Canna Seeds', 'http://localhost:7882/amad/html/images/50-percent.png,http://localhost:7882/amad/html/images/award-label.png,http://localhost:7882/amad/html/images/popular3.jpg,http://localhost:7882/amad/html/images/hearts.jpg,http://localhost:7882/amad/html/images/stars1.png', '7.50€');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `checked_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `email`, `password`, `status`, `checked_on`) VALUES
(1, 'amadmughal100@gmail.com', 'steve245', 1, '2021-01-17 12:39:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bestsellerscategory`
--
ALTER TABLE `bestsellerscategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `deliveryservices`
--
ALTER TABLE `deliveryservices`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `popularcategory`
--
ALTER TABLE `popularcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
