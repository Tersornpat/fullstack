-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 06:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pts`
--

-- --------------------------------------------------------

--
-- Table structure for table `pts_employee`
--

CREATE TABLE `pts_employee` (
  `E_ID` int(11) NOT NULL,
  `E_Username` varchar(20) NOT NULL,
  `E_Password` varchar(20) NOT NULL,
  `E_Name` varchar(20) NOT NULL,
  `E_Surname` varchar(20) NOT NULL,
  `E_Role` varchar(10) NOT NULL,
  `E_Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pts_employee`
--

INSERT INTO `pts_employee` (`E_ID`, `E_Username`, `E_Password`, `E_Name`, `E_Surname`, `E_Role`, `E_Address`) VALUES
(101, 'admin', '1', 'John', 'Admin', 'admin', 'amhome'),
(102, 'user', '1', 'James', 'User', 'user', 'ushome'),
(103, 'user2', '2', 'lerbronc', 'jame', 'user', 'amasd'),
(104, 'user3', '3', 'we', 'qw', 'user', 'ushome'),
(105, 'user4', '4', 'jim', 'we', 'user', 'amasd');

-- --------------------------------------------------------

--
-- Table structure for table `pts_order`
--

CREATE TABLE `pts_order` (
  `Order_ID` int(11) NOT NULL,
  `E_ID` int(11) DEFAULT NULL,
  `Order_Date` datetime DEFAULT NULL,
  `Order_Price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pts_order`
--

INSERT INTO `pts_order` (`Order_ID`, `E_ID`, `Order_Date`, `Order_Price`) VALUES
(302, 102, '2023-02-09 00:00:00', 1210),
(303, 102, '2023-02-09 00:00:00', 2300),
(304, 102, '2023-02-09 00:00:00', 3590),
(305, 102, '2023-02-09 00:00:00', 2120),
(306, 104, '2023-02-09 00:00:00', 18560),
(307, 104, '2023-02-09 23:48:05', 9830),
(308, 102, '2023-02-10 20:38:35', 30),
(309, 102, '2023-02-10 20:39:48', 3800),
(310, 102, '2023-02-10 20:40:00', 4600),
(311, 102, '2023-02-10 21:44:30', 1300),
(312, 102, '2023-02-10 23:22:37', 40640),
(313, 102, '2023-02-10 23:35:54', 100),
(314, 102, '2023-02-10 23:41:42', 1300),
(315, 102, '2023-02-11 11:13:25', 6420),
(316, 102, '2023-02-11 11:15:46', 550),
(317, 104, '2023-02-11 11:21:24', 2920),
(318, 105, '2023-02-11 11:21:50', 57990);

-- --------------------------------------------------------

--
-- Table structure for table `pts_orderdetail`
--

CREATE TABLE `pts_orderdetail` (
  `ID` int(11) NOT NULL,
  `Order_ID` int(11) DEFAULT NULL,
  `Stock_ID` int(11) DEFAULT NULL,
  `Stock_Name` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Priceperunit` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Update_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pts_orderdetail`
--

INSERT INTO `pts_orderdetail` (`ID`, `Order_ID`, `Stock_ID`, `Stock_Name`, `Price`, `Priceperunit`, `Amount`, `Update_Date`) VALUES
(1, 302, 202, 'Microsoft Corporation', 660, 20, 33, '2023-02-09 00:00:00'),
(2, 302, 205, 'Alphabet Inc', 200, 50, 4, '2023-02-09 00:00:00'),
(3, 302, 207, 'Facebook, Inc', 350, 70, 5, '2023-02-09 00:00:00'),
(4, 303, 201, 'Apple Inc', 550, 10, 55, '2023-02-09 00:00:00'),
(5, 303, 203, 'Amazon.com, Inc', 600, 30, 20, '2023-02-09 00:00:00'),
(6, 303, 205, 'Alphabet Inc', 250, 50, 5, '2023-02-09 00:00:00'),
(7, 303, 206, 'Berkshire Hathaway Inc', 900, 60, 15, '2023-02-09 00:00:00'),
(8, 304, 204, 'Tesla, Inc', 1360, 40, 34, '2023-02-09 00:00:00'),
(9, 304, 206, 'Berkshire Hathaway Inc', 540, 60, 9, '2023-02-09 00:00:00'),
(10, 304, 207, 'Facebook, Inc', 350, 70, 5, '2023-02-09 00:00:00'),
(11, 304, 209, 'Procter & Gamble Co', 540, 90, 6, '2023-02-09 00:00:00'),
(12, 304, 210, 'Vanguard Total Stock Market ETF', 800, 100, 8, '2023-02-09 00:00:00'),
(13, 305, 201, 'Apple Inc', 20, 10, 2, '2023-02-09 00:00:00'),
(14, 305, 202, 'Microsoft Corporation', 100, 20, 5, '2023-02-09 00:00:00'),
(15, 305, 204, 'Tesla, Inc', 80, 40, 2, '2023-02-09 00:00:00'),
(16, 305, 207, 'Facebook, Inc', 840, 70, 12, '2023-02-09 00:00:00'),
(17, 305, 209, 'Procter & Gamble Co', 1080, 90, 12, '2023-02-09 00:00:00'),
(18, 306, 202, 'Microsoft Corporation', 840, 20, 42, '2023-02-09 00:00:00'),
(19, 306, 204, 'Tesla, Inc', 12000, 40, 300, '2023-02-09 00:00:00'),
(20, 306, 206, 'Berkshire Hathaway Inc', 240, 60, 4, '2023-02-09 00:00:00'),
(21, 306, 207, 'Facebook, Inc', 1610, 70, 23, '2023-02-09 00:00:00'),
(22, 306, 209, 'Procter & Gamble Co', 3870, 90, 43, '2023-02-09 00:00:00'),
(23, 307, 201, 'Apple Inc', 340, 10, 34, '2023-02-09 23:48:05'),
(24, 307, 204, 'Tesla, Inc', 2120, 40, 53, '2023-02-09 23:48:05'),
(25, 307, 205, 'Alphabet Inc', 2750, 50, 55, '2023-02-09 23:48:05'),
(26, 307, 207, 'Facebook, Inc', 4620, 70, 66, '2023-02-09 23:48:05'),
(27, 308, 201, 'Apple Inc', 30, 10, 3, '2023-02-10 20:38:35'),
(28, 309, 202, 'Microsoft Corporation', 400, 20, 20, '2023-02-10 20:39:48'),
(29, 309, 204, 'Tesla, Inc', 1600, 40, 40, '2023-02-10 20:39:48'),
(30, 309, 206, 'Berkshire Hathaway Inc', 1800, 60, 30, '2023-02-10 20:39:48'),
(31, 310, 207, 'Facebook, Inc', 2100, 70, 30, '2023-02-10 20:40:00'),
(32, 310, 208, 'Johnson & Johnson', 1600, 80, 20, '2023-02-10 20:40:00'),
(33, 310, 209, 'Procter & Gamble Co', 900, 90, 10, '2023-02-10 20:40:00'),
(34, 311, 201, 'Apple Inc', 230, 10, 23, '2023-02-10 21:44:30'),
(35, 311, 203, 'Amazon.com, Inc', 120, 30, 4, '2023-02-10 21:44:30'),
(36, 311, 207, 'Facebook, Inc', 350, 70, 5, '2023-02-10 21:44:30'),
(37, 311, 210, 'Vanguard Total Stock Market ETF', 600, 100, 6, '2023-02-10 21:44:30'),
(38, 312, 201, 'Apple Inc', 100, 10, 10, '2023-02-10 23:22:37'),
(39, 312, 202, 'Microsoft Corporation', 200, 20, 10, '2023-02-10 23:22:37'),
(40, 312, 203, 'Amazon.com, Inc', 300, 30, 10, '2023-02-10 23:22:37'),
(41, 312, 204, 'Tesla, Inc', 4040, 40, 101, '2023-02-10 23:22:37'),
(42, 312, 206, 'Berkshire Hathaway Inc', 36000, 60, 600, '2023-02-10 23:22:37'),
(43, 313, 201, 'Apple Inc', 100, 10, 10, '2023-02-10 23:35:54'),
(44, 314, 201, 'Apple Inc', 230, 10, 23, '2023-02-10 23:41:42'),
(45, 314, 203, 'Amazon.com, Inc', 120, 30, 4, '2023-02-10 23:41:42'),
(46, 314, 207, 'Facebook, Inc', 350, 70, 5, '2023-02-10 23:41:42'),
(47, 314, 210, 'Vanguard Total Stock Market ETF', 600, 100, 6, '2023-02-10 23:41:42'),
(48, 315, 207, 'Facebook, Inc', 1610, 70, 23, '2023-02-11 11:13:25'),
(49, 315, 208, 'Johnson & Johnson', 1840, 80, 23, '2023-02-11 11:13:25'),
(50, 315, 209, 'Procter & Gamble Co', 2970, 90, 33, '2023-02-11 11:13:25'),
(51, 316, 201, 'Apple Inc', 10, 10, 1, '2023-02-11 11:15:46'),
(52, 316, 202, 'Microsoft Corporation', 20, 20, 1, '2023-02-11 11:15:46'),
(53, 316, 203, 'Amazon.com, Inc', 30, 30, 1, '2023-02-11 11:15:46'),
(54, 316, 204, 'Tesla, Inc', 40, 40, 1, '2023-02-11 11:15:46'),
(55, 316, 205, 'Alphabet Inc', 50, 50, 1, '2023-02-11 11:15:46'),
(56, 316, 206, 'Berkshire Hathaway Inc', 60, 60, 1, '2023-02-11 11:15:46'),
(57, 316, 207, 'Facebook, Inc', 70, 70, 1, '2023-02-11 11:15:46'),
(58, 316, 208, 'Johnson & Johnson', 80, 80, 1, '2023-02-11 11:15:46'),
(59, 316, 209, 'Procter & Gamble Co', 90, 90, 1, '2023-02-11 11:15:46'),
(60, 316, 210, 'Vanguard Total Stock Market ETF', 100, 100, 1, '2023-02-11 11:15:46'),
(61, 317, 201, 'Apple Inc', 110, 10, 11, '2023-02-11 11:21:24'),
(62, 317, 202, 'Microsoft Corporation', 460, 20, 23, '2023-02-11 11:21:24'),
(63, 317, 203, 'Amazon.com, Inc', 990, 30, 33, '2023-02-11 11:21:24'),
(64, 317, 204, 'Tesla, Inc', 1360, 40, 34, '2023-02-11 11:21:24'),
(65, 318, 201, 'Apple Inc', 230, 10, 23, '2023-02-11 11:21:50'),
(66, 318, 202, 'Microsoft Corporation', 460, 20, 23, '2023-02-11 11:21:50'),
(67, 318, 203, 'Amazon.com, Inc', 1320, 30, 44, '2023-02-11 11:21:50'),
(68, 318, 204, 'Tesla, Inc', 22200, 40, 555, '2023-02-11 11:21:50'),
(69, 318, 205, 'Alphabet Inc', 2700, 50, 54, '2023-02-11 11:21:50'),
(70, 318, 207, 'Facebook, Inc', 31080, 70, 444, '2023-02-11 11:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `pts_stock`
--

CREATE TABLE `pts_stock` (
  `Stock_ID` int(11) NOT NULL,
  `Stock_Name` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Priceperunit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pts_stock`
--

INSERT INTO `pts_stock` (`Stock_ID`, `Stock_Name`, `Quantity`, `Priceperunit`) VALUES
(201, 'Apple Inc', 99, 10),
(202, 'Microsoft Corporation', 277, 20),
(203, 'Amazon.com, Inc', 634, 30),
(204, 'Tesla, Inc', 880, 40),
(205, 'Alphabet Inc', 1381, 50),
(206, 'Berkshire Hathaway Inc', 41, 60),
(207, 'Facebook, Inc', 1381, 70),
(208, 'Johnson & Johnson', 356, 80),
(209, 'Procter & Gamble Co', 955, 90),
(210, 'Vanguard Total Stock Market ETF', 649, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pts_employee`
--
ALTER TABLE `pts_employee`
  ADD PRIMARY KEY (`E_ID`),
  ADD UNIQUE KEY `E_Username` (`E_Username`);

--
-- Indexes for table `pts_order`
--
ALTER TABLE `pts_order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `E_ID` (`E_ID`);

--
-- Indexes for table `pts_orderdetail`
--
ALTER TABLE `pts_orderdetail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Order_ID` (`Order_ID`),
  ADD KEY `Stock_ID` (`Stock_ID`);

--
-- Indexes for table `pts_stock`
--
ALTER TABLE `pts_stock`
  ADD PRIMARY KEY (`Stock_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pts_employee`
--
ALTER TABLE `pts_employee`
  MODIFY `E_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `pts_orderdetail`
--
ALTER TABLE `pts_orderdetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pts_order`
--
ALTER TABLE `pts_order`
  ADD CONSTRAINT `pts_order_ibfk_1` FOREIGN KEY (`E_ID`) REFERENCES `pts_employee` (`E_ID`);

--
-- Constraints for table `pts_orderdetail`
--
ALTER TABLE `pts_orderdetail`
  ADD CONSTRAINT `pts_orderdetail_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `pts_order` (`Order_ID`),
  ADD CONSTRAINT `pts_orderdetail_ibfk_2` FOREIGN KEY (`Stock_ID`) REFERENCES `pts_stock` (`Stock_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
