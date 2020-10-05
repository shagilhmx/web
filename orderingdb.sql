-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 07:00 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderingdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pdtdetail` ()  SELECT * FROM product$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(30) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `Password`) VALUES
('ajay', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `cupons`
--

CREATE TABLE `cupons` (
  `cupon` varchar(50) NOT NULL,
  `discount` float NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cupons`
--

INSERT INTO `cupons` (`cupon`, `discount`, `discription`) VALUES
('cupon1', 5, ''),
('cupon2', 6, ''),
('c1', 7, 'hello'),
('c2', 67, 'nm'),
('c2', 67, 'nm');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `userid` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`userid`, `stars`, `comments`) VALUES
(1, 5, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `userid` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `adreess` varchar(40) NOT NULL,
  `city` varchar(45) NOT NULL,
  `pincode` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `totalcost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`userid`, `name`, `adreess`, `city`, `pincode`, `mobile`, `totalcost`) VALUES
(1, 'ajit', 'channasandra', 'banglore', 566001, 2147483647, 480),
(1, 'ajit', 'mg road', 'banglore', 577522, 2147483647, 180);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `cost` int(11) NOT NULL,
  `productimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `cost`, `productimage`) VALUES
(2, 'lays', 40, 'books_image/4a5b2dbfe824bfc6a6a76dd365fe994eis.jpg'),
(3, 'vegburger', 60, 'books_image/1cef3a45ffd9f144df642f2691f82689vegb.jpg'),
(4, 'chesse biscuts', 75, 'books_image/1fb50002e2ea682cb327f8fe54ca0d64img10a.jpg'),
(5, 'bread', 30, 'books_image/affbac7302abc46b39fd69c8f6d997fc7f2142d195d6447b9560009b069ee925.jpg'),
(6, 'pizza cake', 45, 'books_image/f618c71497e6adf8c657311d56b76b50pizza cake.jpg'),
(7, 'egg puffs', 18, 'books_image/d031c375eb1de8b54b1c201cc80b2370c9f8609f5af9c71e4208b74e3fe97716Egg-Puffs.jpg'),
(8, 'heart shape venilla pastery', 800, 'books_image/c8d002383ed0f593dbf8cf92b4e4e79dpnpcks004_4.jpg'),
(9, 'cheesenuts', 78, 'books_image/e8d6a7f81207403f5a9a7a311806ce3cimg6.jpg'),
(11, 'cake venilla', 500, 'books_image/82f389fb6927aee910f2afd023d08262cake1.jpg'),
(34, 'pastery', 800, 'books_image/4ca137ba9b3ff1113543fd6a8836dad0cake3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_time`
--

CREATE TABLE `trigger_time` (
  `userid` int(11) NOT NULL,
  `exec_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_time`
--

INSERT INTO `trigger_time` (`userid`, `exec_time`) VALUES
(1, '2017-12-03 20:20:15'),
(2, '2017-12-03 20:21:33'),
(3, '2017-12-03 20:22:42'),
(4, '2017-12-03 20:25:12'),
(5, '2017-12-03 20:26:23'),
(6, '2017-12-03 20:28:57'),
(7, '2017-12-03 20:30:58'),
(8, '2017-12-03 20:34:16'),
(89, '2017-12-04 10:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cust_name` varchar(30) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cust_name`, `cust_id`, `username`, `password`, `address`, `phone`, `email`) VALUES
('ajit', 1, 'ajit', 1234, 'ghandhi nagar', 0, 'ajit@gmail.com'),
('karthik', 2, 'kar', 1234, 'vasavi colony', 2147483647, 'karthik@gmail.com'),
('sufin', 3, 'sufin', 1234, 'sirsi', 2147483647, 'sufin@gmail.com'),
('tejus', 4, 'teju', 1234, 'banglore', 2147483647, 'tejus@gmail.com'),
('bhavana', 5, 'bhav', 1234, 'mulbhagil', 2147483647, 'bhavana@gmail.com'),
('shiny', 6, 'shiny', 1234, 'karwar', 543672890, 'shiny@gmail.com'),
('chandan', 7, 'chan', 1234, 'raichur', 2147483647, 'chandan@gmail.com'),
('sampreet', 8, 'sum', 1234, 'yelpur', 987654321, 'sum@gmail,com'),
('hjuyg', 89, 'ram', 1234, 'mg road', 98776543, 'ram@gmail.com');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `user_trig` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO trigger_time(userid,exec_time) VALUES(NEW.cust_id,NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cust_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`cust_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
