-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 09:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practise`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `state_id`) VALUES
(1, 'satkhira', 1),
(2, 'jashore', 1),
(3, 'rupatoli', 2),
(4, 'notullabad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Bangladesh'),
(2, 'India'),
(3, 'Pakisthan'),
(4, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `data`) VALUES
(1, 'Home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas est erat, luctus fermentum libero volutpat egestas. Donec ut orci in ex molestie suscipit a id elit. In fringilla dolor sit amet dolor scelerisque scelerisque. Aliquam et est sit amet orci aliquet iaculis. Nulla arcu magna, ultricies at quam eu, porta pharetra neque. Duis ullamcorper sagittis neque semper facilisis. Aenean a convallis mauris, porta tincidunt nibh. Aenean lobortis purus felis, vitae tincidunt tellus feugiat id.\r\n\r\n'),
(2, 'About', 'Quisque viverra elit vitae ex porttitor tincidunt. Maecenas convallis nunc non ante gravida vestibulum. Vestibulum luctus posuere dui facilisis sagittis. Proin mattis turpis ut libero facilisis malesuada. Vivamus commodo neque at tellus tincidunt sodales. Duis ultrices euismod tellus eget egestas. Nam pellentesque magna tellus, eget ullamcorper libero pharetra quis. Fusce elementum lorem sit amet ex euismod posuere. Pellentesque ultrices condimentum erat, rhoncus porta massa vulputate non. Aenean at mauris hendrerit, hendrerit arcu eu, volutpat lectus. Praesent sit amet malesuada elit, a eleifend lorem. Pellentesque ut ullamcorper enim, vel facilisis lorem. Duis suscipit neque eget scelerisque commodo. Aenean condimentum risus a varius maximus. Etiam vestibulum turpis ac volutpat laoreet.\r\n\r\n'),
(6, 'Contact', 'Pellentesque vitae nunc id eros elementum elementum. Sed nec scelerisque metus. Etiam ut ipsum convallis, finibus nibh quis, porta tortor. Aenean non arcu interdum, pellentesque ligula quis, condimentum urna. Maecenas non eros nisi. Etiam posuere pharetra est a porttitor. Proin fringilla metus pellentesque, auctor lacus sit amet, sagittis justo.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `country_id`) VALUES
(1, 'khulna', 1),
(2, 'barishal', 1),
(3, 'mumbai', 2),
(4, 'dilhi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `city`, `marks`) VALUES
(23, 'khalid', 'Kalaroa', '22'),
(24, 'khalid', 'Kalaroa', '33'),
(25, 'khalid', 'Kalaroa', '66'),
(27, 'Rony', 'Kalaroa', '44'),
(28, '', 'Kalaroa', '55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
