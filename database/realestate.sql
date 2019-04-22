-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 01:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `region` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `ward` varchar(30) DEFAULT NULL,
  `flag` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`region`, `district`, `city`, `ward`, `flag`, `status`) VALUES
('Rajshahi', 'Rajshahi', 'Rajshahi', '26', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `user` varchar(30) DEFAULT NULL,
  `id` varchar(30) DEFAULT NULL,
  `path` varchar(30) DEFAULT NULL,
  `flag` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`user`, `id`, `path`, `flag`, `status`) VALUES
('3', '2', 'images/properties/3-2-1.jpg', '0', '0'),
('3', '2', 'images/properties/3-2-2.jpg', '0', '0'),
('3', '2', 'images/properties/3-2-3.jpg', '0', '0'),
('3', '2', 'images/properties/3-2-4.jpg', '0', '0'),
('3', '2', 'images/properties/3-2-5.jpg', '0', '0'),
('3', '3', 'images/properties/3-3-0.jpg', '0', '0'),
('3', '4', 'images/properties/3-4-0.jpg', '0', '0'),
('3', '4', 'images/properties/3-4-1.jpg', '0', '0'),
('3', '4', 'images/properties/3-4-2.png', '0', '0'),
('3', '4', 'images/properties/3-4-3.png', '0', '0'),
('3', '5', 'images/properties/3-5-0.jpg', '0', '0'),
('3', '5', 'images/properties/3-5-1.jpg', '0', '0'),
('3', '5', 'images/properties/3-5-2.png', '0', '0'),
('3', '5', 'images/properties/3-5-3.png', '0', '0'),
('3', '6', 'images/properties/3-6-0.jpg', '0', '0'),
('3', '6', 'images/properties/3-6-1.jpg', '0', '0'),
('3', '6', 'images/properties/3-6-2.png', '0', '0'),
('3', '6', 'images/properties/3-6-3.png', '0', '0'),
('3', '12', 'images/properties/3-7-0.jpg', '0', '0'),
('3', '12', 'images/properties/3-7-1.jpg', '0', '0'),
('3', '12', 'images/properties/3-7-2.png', '0', '0'),
('3', '12', 'images/properties/3-7-3.png', '0', '0'),
('3', '8', 'images/properties/3-8-0.jpg', '0', '0'),
('3', '8', 'images/properties/3-8-1.jpg', '0', '0'),
('3', '8', 'images/properties/3-8-2.png', '0', '0'),
('3', '8', 'images/properties/3-8-3.png', '0', '0'),
('3', '9', 'images/properties/3-9-0.jpg', '0', '0'),
('3', '9', 'images/properties/3-9-1.jpg', '0', '0'),
('3', '9', 'images/properties/3-9-2.png', '0', '0'),
('3', '9', 'images/properties/3-9-3.png', '0', '0'),
('3', '10', 'images/properties/3-10-0.jpg', '0', '0'),
('3', '10', 'images/properties/3-10-1.jpg', '0', '0'),
('3', '10', 'images/properties/3-10-2.png', '0', '0'),
('3', '10', 'images/properties/3-10-3.png', '0', '0'),
('3', '11', 'images/properties/3-11-0.png', '0', '0'),
('3', '11', 'images/properties/3-11-1.png', '0', '0'),
('3', '11', 'images/properties/3-11-2.png', '0', '0'),
('3', '11', 'images/properties/3-11-3.png', '0', '0'),
('3', '11', 'images/properties/3-11-4.png', '0', '0'),
('3', '11', 'images/properties/3-11-5.png', '0', '0'),
('3', '11', 'images/properties/3-11-6.png', '0', '0'),
('3', '13', 'images/properties/3-13-1.png', '0', '0'),
('3', '13', 'images/properties/3-13-2.png', '0', '0'),
('3', '13', 'images/properties/3-13-3.png', '0', '0'),
('3', '14', 'images/properties/3-14-0.png', '0', '0'),
('3', '14', 'images/properties/3-14-1.jpg', '0', '0'),
('3', '15', 'images/properties/3-15-0.jpg', '0', '0'),
('3', '15', 'images/properties/3-15-1.png', '0', '0'),
('3', '15', 'images/properties/3-15-2.jpg', '0', '0'),
('3', '15', 'images/properties/3-15-3.jpg', '0', '0'),
('3', '16', 'images/properties/3-16-0.png', '0', '0'),
('3', '16', 'images/properties/3-16-1.png', '0', '0'),
('3', '16', 'images/properties/3-16-2.png', '0', '0'),
('3', '17', 'images/properties/3-17-0.jpg', '0', '0'),
('3', '17', 'images/properties/3-17-1.jpg', '0', '0'),
('3', '17', 'images/properties/3-17-2.png', '0', '0'),
('3', '17', 'images/properties/3-17-3.png', '0', '0'),
('3', '17', 'images/properties/3-17-4.png', '0', '0'),
('3', '17', 'images/properties/3-17-5.jpg', '0', '0'),
('3', '17', 'images/properties/3-17-6.jpg', '0', '0'),
('3', '18', 'images/properties/3-18-0.jpg', '0', '0'),
('3', '18', 'images/properties/3-18-1.jpg', '0', '0'),
('3', '18', 'images/properties/3-18-2.jpg', '0', '0'),
('3', '18', 'images/properties/3-18-3.jpg', '0', '0'),
('3', '18', 'images/properties/3-18-4.jpg', '0', '0'),
('3', '19', 'images/properties/3-19-0.jpg', '0', '0'),
('3', '19', 'images/properties/3-19-1.png', '0', '0'),
('3', '19', 'images/properties/3-19-2.png', '0', '0'),
('3', '20', 'images/properties/3-20-0.jpg', '0', '0'),
('3', '20', 'images/properties/3-20-1.jpg', '0', '0'),
('3', '20', 'images/properties/3-20-2.jpg', '0', '0'),
('3', '20', 'images/properties/3-20-3.jpg', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `user` varchar(30) DEFAULT NULL,
  `userType` varchar(30) DEFAULT NULL,
  `id` varchar(60) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `text` varchar(1000) NOT NULL,
  `area` varchar(30) DEFAULT NULL,
  `areaFlag` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `priceFlag` varchar(30) DEFAULT NULL,
  `priceType` varchar(30) DEFAULT NULL,
  `priceTypeFlag` varchar(30) DEFAULT NULL,
  `division` varchar(30) DEFAULT NULL,
  `divisionFlag` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `districtFlag` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `cityFlag` varchar(30) DEFAULT NULL,
  `ward` varchar(30) DEFAULT NULL,
  `wardFlag` varchar(30) DEFAULT NULL,
  `postType` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `frontRoad` varchar(30) DEFAULT NULL,
  `frontRoadFlag` varchar(30) DEFAULT NULL,
  `balconie` varchar(30) DEFAULT NULL,
  `balconieFlag` varchar(30) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `floorFlag` varchar(30) DEFAULT NULL,
  `room` varchar(30) DEFAULT NULL,
  `roomFlag` varchar(30) DEFAULT NULL,
  `hostelType` varchar(30) DEFAULT NULL,
  `hostelTypeFlag` varchar(30) DEFAULT NULL,
  `seat` varchar(30) DEFAULT NULL,
  `seatFlag` varchar(30) DEFAULT NULL,
  `bathroom` varchar(30) DEFAULT NULL,
  `bathroomFlag` varchar(30) DEFAULT NULL,
  `advancePrice` varchar(30) DEFAULT NULL,
  `advancePriceFlag` varchar(30) DEFAULT NULL,
  `flag` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `ad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`user`, `userType`, `id`, `title`, `text`, `area`, `areaFlag`, `price`, `priceFlag`, `priceType`, `priceTypeFlag`, `division`, `divisionFlag`, `district`, `districtFlag`, `city`, `cityFlag`, `ward`, `wardFlag`, `postType`, `category`, `frontRoad`, `frontRoadFlag`, `balconie`, `balconieFlag`, `floor`, `floorFlag`, `room`, `roomFlag`, `hostelType`, `hostelTypeFlag`, `seat`, `seatFlag`, `bathroom`, `bathroomFlag`, `advancePrice`, `advancePriceFlag`, `flag`, `status`, `ad`) VALUES
('3', 'developer', '12', '2 Floor 2 Room, 0 Bathroom', '', '111', '0', '111', '0', '1', '0', 'west', '0', 'dhaka', '0', 'dhaka', '0', '21', '0', 'sell', 'apartment', '111', '0', '111', '0', '111', '0', '11', '0', '', '0', '', '0', '11', '0', '', '0', '1', '1', 1),
('3', 'developer', '15', NULL, '', 'dsf', '0', 'asfd', '0', '1', '0', 'north', '0', 'dinajpur', '0', 'dhaka', '0', '21', '0', 'sell', 'independentFloor', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '1', '1', 1),
('3', 'developer', '16', 'Rize', '', '111', '1', '111', '1', '1', '1', 'east', '1', 'rajshahi', '1', 'rajshahi', '1', '21', '1', 'sell', 'agriLand', '111', '1', '', '1', '', '1', '', '1', '', '1', '', '0', '', '1', '', '1', '1', '1', 2),
('3', 'developer', '17', 'Property Title', 'Any Description', '500', '0', '100', '0', '1', '0', 'east', '0', 'rajshahi', '0', 'rajshahi', '0', '20', '0', 'sell', 'apartment', '6', '0', '9', '0', '111', '0', '555', '0', '', '0', '', '0', '999', '0', '', '0', '1', '1', 1),
('3', 'developer', '19', 'Draft', 'Description', '666', '0', '987', '1', '1', '0', 'west', '0', 'dhaka', '0', 'dhaka', '0', '21', '0', 'sell', 'apartment', '88', '0', '945', '0', '666', '0', '897', '0', '', '0', '', '0', '999', '0', '', '0', '1', '1', 1),
('3', 'developer', '20', 'sadfasfd', 'sadfsa', 'sdfsd', '0', 'sdf', '0', '1', '0', 'west', '0', 'rajshahi', '0', 'dinajpur', '0', '21', '0', 'sell', 'agriLand', 'sdf', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `ward` varchar(30) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `flag` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `region`, `district`, `city`, `ward`, `photo`, `flag`, `status`) VALUES
(1, 'Shovon', 'zahidul.cse14@gmail.com', '123', 'a', 'Rajshahi', 'Rajshahi', 'Rajshahi', '26', 'images/users/1.jpg', '0', '0'),
(2, 'a', 'a@a.a', '123', 'a', 'a', 'a', 'a', 'a', '', '0', '0'),
(3, 'Shovon', 'a@a.a', '01677353430', 'a', 'Rajshahi', 'Rajshahi', 'Rajshahi', '16', 'images/users/3.png', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
