-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 06:42 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_browsing`
--

CREATE TABLE IF NOT EXISTS `tbl_browsing` (
`id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `likedcar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cars`
--

CREATE TABLE IF NOT EXISTS `tbl_cars` (
`c_id` int(20) NOT NULL,
  `c_name` varchar(90) NOT NULL,
  `description` longtext NOT NULL,
  `rating` int(5) NOT NULL,
  `price` int(11) NOT NULL,
  `fuel_type` varchar(60) NOT NULL,
  `batter_life` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cars`
--

INSERT INTO `tbl_cars` (`c_id`, `c_name`, `description`, `rating`, `price`, `fuel_type`, `batter_life`, `image`) VALUES
(1, 'Toyota RAV4 Hybrid', 'Small crossovers are hot sellers right now, and the Toyota RAV4 Hybrid brings green-car fuel efficiency to this popular segment. It offers poised ride quality and a spacious cabin, and it has an EPA rating of 32 mpg combined city/highway.', 3, 29970, 'Gasoline', 5, 'toyota 2074.jpg'),
(9, 'Chevrolet Malibu Hybrid', ' Chevrolet Malibu Hybrid serves up a roomy cabin and crisp acceleration. This midsize sedan is a stylish choice in its segment, and its sleek, modern exterior commands attention. The Malibu Hybrid achieves combined city/highway mileage of 46 mpg. It seems to be most affordable car in low budget.', 3, 29990, 'Gasoline', 5, '2017-chevrolet-malibu-hybrid.jpg'),
(10, 'Hyundai Sonata Hybrid', 'With base models starting at just $26,835, the Hyundai Sonata Hybrid delivers the value that has made the brand a favorite with car shoppers. This midsize sedan provides a generously sized cabin and an abundance of standard features, and it gets up to 42 mpg combined city/highway at the pump.', 4, 26460, 'Gasoline', 5, 'Sonata.jpg'),
(11, 'Toyota Prius', 'The Toyota Prius deserves credit for taking hybrid technology to a broader, more mainstream audience. this hatchback doles out a spacious cabin, loads of cargo capacity and standard driver-assistive safety equipment such as forward collision mitigation and lane-departure warning. You also get class-leading fuel economy, and the Prius achieves mileage of up to 56 mpg combined city/highway.', 4, 25550, 'Gasoline', 6, 'prius.jpg'),
(12, 'Hyundai Sonata Hybrid', 'Hyundai Sonata Hybrid delivers the value that has made the brand a favorite with car shoppers. This midsize sedan provides a generously sized cabin and an abundance of standard features, and it gets up to 42 mpg combined city/highway at the pump.', 4, 26845, 'Gasoline', 4, 'sonata.jpg'),
(13, 'Mitsubishi i-MiEV', 'The Mitsubishi i-MiEV isn''t the most practical electric car on the market. Its 59-mile range trails the pack, and this diminutive hatchback is tight on cargo capacity and low on refinement. Still, its tiny footprint makes it a nimble city car, and with base models. it leaves other EVs in the dust when it comes to affordability. This is most affordable car than other for middle class families. These type of cars can reduce environment.', 5, 23865, 'Electric', 6, 'mitsubishi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum`
--

CREATE TABLE IF NOT EXISTS `tbl_forum` (
`id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `msg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forum`
--

INSERT INTO `tbl_forum` (`id`, `u_id`, `message`, `msg_date`) VALUES
(6, 16, 'E benz is good one.', '2018-01-11 02:32:32'),
(7, 18, 'good', '2018-01-11 02:34:17'),
(12, 16, 'E - 8 Benz is best car. Guys i suggest you all.', '2018-01-12 02:40:41'),
(20, 20, 'good one', '2018-01-15 07:50:28'),
(21, 20, 'i m good.', '2018-01-17 11:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE IF NOT EXISTS `tbl_register` (
`id` int(15) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `mname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(20) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `address` varchar(80) NOT NULL,
  `post_code` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(27) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `fname`, `mname`, `lname`, `gender`, `dob`, `country`, `ph`, `address`, `post_code`, `email`, `username`, `password`, `usertype`) VALUES
(16, 'Aacs', '', 'Aryal', 'male', '1997-12-26', 'Nepal', '55555', 'kirtipur', 44600, 'aacs@gmail.com', 'admin', 'admin', 'admin'),
(18, 'Sunil', '', 'Aryal', 'male', '1999-02-18', 'Nepal', '9860586149', 'Maitidevi, Kathmandu', 44600, 'aryalsunil555@gmail.com', 'aryal@sunil', 'sunil', 'general'),
(20, 'Deepak', '', 'Aryal', 'male', '1996-11-07', 'Nepal', '01755215', 'Kalanki kathmandu', 44600, 'dpk_ar33@yahoo.com', 'deepak', 'deepak', 'general'),
(21, 'Prakash', '', 'Bista', 'male', '0000-00-00', 'Nepal', '04415400', 'Dhobikhola Kathmandu', 44618, 'prksh_bi3_@gmail.com', 'prakash', 'praskasa', 'general'),
(22, 'Tanka ', '', 'Shahi', 'male', '0000-00-00', 'Nepal', '986651222', 'kathmandu', 44600, 'tank_a@gmail.com', 'tanks', 'tanks', 'general'),
(23, 'Ramesh', '', 'poudyal', 'male', '2018-01-03', 'Nepal', '015542554', 'Butwal', 66310, 'ramesh_12A@gmail.com', 'ramesh', 'ramesh', 'general'),
(25, 'Rajendra', '', 'Sapkota', 'male', '1996-12-01', 'Nepal', '9804444282', 'Maitidevi, Kathmandu', 44600, 'rajendra_sapkota34@gmail.com', 'rajendra_spkt45', 'rajendra_spkt', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reply`
--

CREATE TABLE IF NOT EXISTS `tbl_reply` (
`id` int(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `reply` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reply`
--

INSERT INTO `tbl_reply` (`id`, `username`, `reply`) VALUES
(1, 'admin', 'Thank you for reviews.'),
(4, 'deepak', 'This car is too good.'),
(6, 'Aacs', '#deepak sir'),
(7, 'deepak', 'okey sir'),
(8, 'aryal@sunil', '#sunil');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visits`
--

CREATE TABLE IF NOT EXISTS `tbl_visits` (
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visits`
--

INSERT INTO `tbl_visits` (`views`) VALUES
(15);

-- --------------------------------------------------------

--
-- Table structure for table `visit_count`
--

CREATE TABLE IF NOT EXISTS `visit_count` (
  `views` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit_count`
--

INSERT INTO `visit_count` (`views`) VALUES
(30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_browsing`
--
ALTER TABLE `tbl_browsing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_reply`
--
ALTER TABLE `tbl_reply`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visits`
--
ALTER TABLE `tbl_visits`
 ADD PRIMARY KEY (`views`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_browsing`
--
ALTER TABLE `tbl_browsing`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_reply`
--
ALTER TABLE `tbl_reply`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
