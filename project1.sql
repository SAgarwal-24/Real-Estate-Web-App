-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 11:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) NOT NULL,
  `s_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `img4` varchar(100) NOT NULL,
  `img5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `prop_id` int(10) NOT NULL,
  `uid` int(11) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `prop_price` float NOT NULL,
  `bed` int(50) NOT NULL,
  `bath` int(50) NOT NULL,
  `prop_size` float NOT NULL,
  `location` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `prop_status` varchar(4) NOT NULL,
  `year` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`prop_id`, `uid`, `owner`, `mobile_no`, `email_id`, `prop_price`, `bed`, `bath`, `prop_size`, `location`, `state`, `city`, `pincode`, `prop_status`, `year`) VALUES
(1, 0, 'ram roy', '9878024256', 'jay@gmail.com', 89.626, 0, 0, 5252.2, 'advani house,gandhinagar,gujrat', 'gujrat', 'gandhinagar', 0, '', 0),
(2, 8, 'Ankul', '9878024259', 'Ankul@gmail.com', 5842, 0, 0, 45000, 'Valmiki Nagar ,Buxar,Bihar,India', 'Bihar', 'Buxar', 0, '', 0),
(10, 3, 'jay', '9878024259', 'jay@gmail.com', 2345, 0, 0, 234, 'advani house,gandhinagar,gujrat', 'gujrat', 'gandhinagar', 34299, '1', 0),
(18, 3, 'Sidhant Singh', '6969696969', 'asss@gmail.com', 555, 0, 0, 234, 'drink,goa', 'goa', 'goa', 34299, '2', 0),
(19, 3, 'jayanta', '8878024256', 'jayant@gmail.com', 8999, 0, 0, 4590, 'gulab chawk house,orissa', 'orissa', 'ori', 34200, '1', 0),
(22, 3, 'jayanta', '8878024256', 'jayant@gmail.com', 8999, 0, 0, 4590, 'gulab chawk house,orissa', 'orissa', 'ori', 34200, '1', 0),
(26, 3, 'Shivaji', '9878024288', 's@gmail.com', 7899, 0, 0, 78886, 'shivaji house,nasik,mah', 'mah', 'nasik', 34299, 'Sell', 0),
(28, 8, 'Anu', '9878024477', 'Anu@gmail.com', 56899, 0, 0, 6788, 'Valmiki Nagar ,jammu,India', 'jammu', 'jammu', 344005, 'Sell', 0),
(29, 8, 'Anu', '9878024477', 'Anu@gmail.com', 56899, 0, 0, 6788, 'Valmiki Nagar ,jammu,India', 'jammu', 'jammu', 344005, 'Sell', 0),
(30, 8, 'Anu', '9878024477', 'Anu@gmail.com', 56899, 0, 0, 6788, 'Valmiki Nagar ,jammu,India', 'jammu', 'jammu', 344005, 'Sell', 0),
(31, 8, 'Monty', '987654321', 'm@gmail.com', 569903, 0, 0, 2345, 'lalwani house,renukut,up', 'up', 'renukut', 34798, 'Sell', 0),
(35, 8, 'Hanuman', '9878024444', 'jay@gmail.com', 34563, 0, 0, 3292, 'Hanuman house,gandhinagar,gujrat', 'gujrat', 'gandhinagar', 34299, 'Rent', 0),
(36, 8, 'mayank', '9878024258', 'R@gmail.com', 8939, 0, 0, 83829, 'mayank house,gandhinagar,gujrat', 'gujrat', 'gandhinagar', 34298, 'Sell', 0),
(38, 4, 'lokesh', '9878024244', 'l@gmail.com', 4857, 0, 0, 1223, 'goahouse,goa', 'goa', 'suray', 34299, 'Sell', 0),
(39, 4, 'lokesh', '9878024259', 'l@gmail.com', 2344, 0, 0, 234, 'l house,l,guj', 'sri', 'guj', 34299, 'Rent', 0),
(40, 4, 'lok', '9878024444', 'L@gmail.com', 345, 0, 0, 6263, 'Telgu house,ooty,Telangana', 'Telangana', 'ooty', 34297, 'Rent', 0),
(41, 4, 'lokesh', '9878024256', 'L@gmail.com', 342, 0, 0, 1233, 'Telgu house,ooty,Telangana 2', 'Telangana', 'ooty', 34297, 'Sell', 0),
(42, 0, 'uvytgvcg', '9462151616', 'njdjkk', 5555, 4, 5, 5, 'dgvum', 'dnjj', 'dhhju', 55555, 'djjj', 4555),
(43, 4, 'uvytgvcg', '5555', 'njdjkk', 5666, 4, 5, 5, 'sskk', 'dnjj', 'sklll', 34299, 'wjjk', 5666),
(44, 4, 'smaple', '555', 'njdjkk', 44, 7, 7, 5, 'cfhbhb', 'dnjj', 'mmmm', 34299, 'nmmm', 5666);

-- --------------------------------------------------------

--
-- Table structure for table `seller_informtion`
--

CREATE TABLE `seller_informtion` (
  `seller_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_informtion`
--

INSERT INTO `seller_informtion` (`seller_id`, `username`, `password`) VALUES
(1, 'sam', '123');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `s_id` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `state_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `email`, `contact`, `address`, `state`, `country`, `city`, `pincode`, `password`, `confirm`) VALUES
(1, 'Mohit Singhal', 'Mohit@gmail.com', 2147483647, 'Singhal House,Sawai Madhopur,Rajasthan', 'Rajasthan', 'India', 'Sawai Madhopur', 322001, 'Sawai Madhopur', 'Sawai Madhopur'),
(2, 'Raman', 'R@gmail.com', 2147483647, 'lalwani house,gandhinagar,gujrat', 'gujrat', 'India', 'gandhinagar', 34298, 'a@134', 'a@134'),
(3, 'jay', 'jay@gmail.com', 2147483647, 'advani house,gandhinagar,gujrat', 'gujrat', 'India', 'gandhinagar', 34299, 'j@123', 'j@123'),
(4, 'Lokesh', 'L@gmail.com', 2147483647, 'Telgu house,ooty,Telangana', 'Telangana', 'India', 'ooty', 34297, '12', '12'),
(7, 'Anshu', 'Anshu@gmail.com', 2147483647, 'Valmiki Nagar ,Buxar,Bihar,India', 'Bihar', 'India', 'Buxar', 344004, 'Anshu', 'Anshu'),
(8, 'Anu', 'Anu@gmail.com', 987654321, 'Valmiki Nagar ,Buxar,Bihar,India', 'Bihar', 'India', 'Buxar', 344005, 'anu', 'anu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `pro_state` (`s_id`,`pid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`),
  ADD KEY `pro_id` (`pid`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`prop_id`),
  ADD KEY `uid` (`uid`) USING BTREE;

--
-- Indexes for table `seller_informtion`
--
ALTER TABLE `seller_informtion`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `pro_id` (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `prop_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `seller_informtion`
--
ALTER TABLE `seller_informtion`
  MODIFY `seller_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
