-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2022 at 10:30 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appletech_webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin1@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `categoryImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `categoryName`, `categoryImg`) VALUES
(1, 'Watches', 'appleWatch-2019.jpg'),
(2, 'Iphones', 'Iphone12Mini64GB.pic2.jpg'),
(3, 'MacBooks', 'macbook-pro2021Pic2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categorydetails`
--

CREATE TABLE `categorydetails` (
  `productID` int(10) NOT NULL,
  `categoryID` int(10) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorydetails`
--

INSERT INTO `categorydetails` (`productID`, `categoryID`, `categoryName`, `image`) VALUES
(3, 1, 'Watches', 'appleWatch-2019.jpg'),
(4, 1, 'Watches', 'appleWatch-2020.jpg'),
(5, 1, 'Watches', 'appleWatch-2021.jpg'),
(6, 3, 'MacBooks', 'macbook-pro2019pic1.jpg'),
(7, 3, 'MacBooks', 'macbook-air-m1-2020.pic1.jpg'),
(8, 3, 'MacBooks', 'macbook-pro2021Pic1.jpg'),
(9, 2, 'Iphones', 'Iphone11.128GB.pic1.jpg'),
(10, 2, 'Iphones', 'Iphone12Mini64GB.pic1.jpeg'),
(11, 2, 'Iphones', 'Iphone13ProMaxPic1.256GB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `ID` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`ID`, `email`, `name`) VALUES
(1, 'ali.bami@medieinstitutet.com', 'ali'),
(2, 'email2@gmail.com', 'john'),
(3, 'email3@gmail.com', 'nilesh'),
(4, 'email4@gmail.com', 'heena'),
(5, 'email5@gmail.com', 'news letter 5'),
(6, 'email6@gmail.com', 'news letter 6'),
(7, 'email7@gmail.com', 'news letter 7'),
(8, 'ali.bami@gmail.com', 'ali'),
(10, 'asd', 'asd'),
(11, 'hej@me.com', 'asd'),
(12, 'jacob@hotmail.com', 'asd'),
(13, 'jako@hotmail.com', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `orderSum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderID`, `productID`, `qty`, `orderSum`) VALUES
(3, 3, 10, 12000),
(4, 4, 2, 1000),
(5, 5, 13, 10000),
(6, 6, 24, 11000),
(7, 7, 5, 9000),
(8, 8, 6, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(10) NOT NULL,
  `shippingID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `orderSum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `shippingID`, `customerID`, `orderSum`) VALUES
(3, 1, 1, 12000),
(4, 2, 2, 1000),
(5, 3, 3, 10000),
(6, 4, 4, 11000),
(7, 5, 5, 9000),
(8, 6, 6, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `unitPrice` int(11) NOT NULL,
  `unitsInStock` int(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `productName`, `unitPrice`, `unitsInStock`, `image`) VALUES
(3, 'appleWatch2019', 3500, 315, 'appleWatch-2019.jpg'),
(4, 'appleWatch2020', 4000, 325, 'appleWatch-2020.jpg'),
(5, 'AppleWatch2021', 5000, 124, 'appleWatch-2021.jpg'),
(6, 'macbook-pro2019', 13000, 143, 'macbook-pro2019pic1.jpg'),
(7, 'macbook-air-m1-2020', 16000, 123, 'macbook-air-m1-2020.pic1.jpg'),
(8, 'macbook-pro2021', 40000, 122, 'macbook-pro2021Pic1.jpg'),
(9, 'Iphone11.128GB', 4000, 322, 'Iphone11.128GB.pic1.jpg'),
(10, 'Iphone12Mini64GB', 6000, 155, 'Iphone12Mini64GB.pic1.jpeg'),
(11, 'Iphone13ProMax256GB', 11000, 90, 'Iphone13ProMaxPic1.256GB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `ID` int(10) NOT NULL,
  `shippingName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`ID`, `shippingName`) VALUES
(1, 'Bring'),
(2, 'DHL');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`) VALUES
(1, 'Ali ', 'Bami ', 'Male', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Ali ', 'Bami ', 'Male', 'test@admin.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'medieinstitutet', 'medie', 'Female', 'mediei@medieinstitutet.se', 'f1b07ef6650149e8ef5b9dfded531b45'),
(5, 'jacob', 'hoggen', 'Male', 'hog.gen@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'jacob', 'hoggen', 'Male', 'hog.gen@hotmail.com', '05b972dcf28374406d13e879724bfe3b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categorydetails`
--
ALTER TABLE `categorydetails`
  ADD PRIMARY KEY (`productID`,`categoryID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderID`,`productID`) USING BTREE,
  ADD KEY `productID` (`productID`),
  ADD KEY `orderID` (`orderID`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `shippingID` (`shippingID`) USING BTREE,
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorydetails`
--
ALTER TABLE `categorydetails`
  ADD CONSTRAINT `categorydetails1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`ID`),
  ADD CONSTRAINT `categorydetails2` FOREIGN KEY (`productID`) REFERENCES `product` (`ID`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail2` FOREIGN KEY (`productID`) REFERENCES `product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
