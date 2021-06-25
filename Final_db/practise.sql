-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 08:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `autoinput`
--

CREATE TABLE `autoinput` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autoinput`
--

INSERT INTO `autoinput` (`id`, `name`) VALUES
(1, 'Vishal Gupta'),
(2, 'Bhaavit Gupta'),
(3, 'Amit Gupta'),
(4, 'Bhaavit'),
(5, 'Arpit'),
(6, 'Namit');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is K Bot'),
(4, 'what should I call you', 'You can call me K Bot'),
(5, 'Where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day');

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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `username`, `mobile`, `pwd`) VALUES
(3, 'khalid', 'admin', 1234567890, 'admin'),
(4, 'khalid', 'admin', 22222, 'admin'),
(5, 'Mita', 'Mita islam', 1710659844, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_field`
--

CREATE TABLE `dynamic_field` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dynamic_field`
--

INSERT INTO `dynamic_field` (`id`, `name`, `city`) VALUES
(18, 'khalid', 'barishal'),
(19, 'qq', 'ww');

-- --------------------------------------------------------

--
-- Table structure for table `fb_messages`
--

CREATE TABLE `fb_messages` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fb_messages`
--

INSERT INTO `fb_messages` (`id`, `from_id`, `to_id`, `message`, `status`) VALUES
(22, 2, 1, 'hi', 1),
(23, 2, 1, 'hello', 1),
(24, 2, 1, 'hmm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fb_user`
--

CREATE TABLE `fb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fb_user`
--

INSERT INTO `fb_user` (`id`, `name`, `username`, `password`) VALUES
(1, 'khalid', 'khalid', 'khalid'),
(2, 'bin', 'bin', 'bin'),
(3, 'walid', 'walid', 'walid');

-- --------------------------------------------------------

--
-- Table structure for table `like_dislike`
--

CREATE TABLE `like_dislike` (
  `id` int(11) NOT NULL,
  `post` varchar(500) NOT NULL,
  `like_count` int(11) NOT NULL,
  `dislike_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_dislike`
--

INSERT INTO `like_dislike` (`id`, `post`, `like_count`, `dislike_count`) VALUES
(1, 'Post1', 24, 7),
(2, 'Post2', 43, 20),
(3, 'Post3', 18, 15),
(4, 'Post4', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(15, 'hi', '2020-11-22 08:59:51', 'user'),
(16, 'Hello, how are you.', '2020-11-22 08:59:52', 'bot');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `des`) VALUES
(1, 'Home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas est erat, luctus fermentum libero volutpat egestas. Donec ut orci in ex molestie suscipit a id elit. In fringilla dolor sit amet dolor scelerisque scelerisque. Aliquam et est sit amet orci aliquet iaculis. Nulla arcu magna, ultricies at quam eu, porta pharetra neque. Duis ullamcorper sagittis neque semper facilisis. Aenean a convallis mauris, porta tincidunt nibh. Aenean lobortis purus felis, vitae tincidunt tellus feugiat id.\r\n\r\n'),
(2, 'About', 'Quisque viverra elit vitae ex porttitor tincidunt. Maecenas convallis nunc non ante gravida vestibulum. Vestibulum luctus posuere dui facilisis sagittis. Proin mattis turpis ut libero facilisis malesuada. Vivamus commodo neque at tellus tincidunt sodales. Duis ultrices euismod tellus eget egestas. Nam pellentesque magna tellus, eget ullamcorper libero pharetra quis. Fusce elementum lorem sit amet ex euismod posuere. Pellentesque ultrices condimentum erat, rhoncus porta massa vulputate non. Aenean at mauris hendrerit, hendrerit arcu eu, volutpat lectus. Praesent sit amet malesuada elit, a eleifend lorem. Pellentesque ut ullamcorper enim, vel facilisis lorem. Duis suscipit neque eget scelerisque commodo. Aenean condimentum risus a varius maximus. Etiam vestibulum turpis ac volutpat laoreet.\r\n\r\n'),
(6, 'Contact', 'Pellentesque vitae nunc id eros elementum elementum. Sed nec scelerisque metus. Etiam ut ipsum convallis, finibus nibh quis, porta tortor. Aenean non arcu interdum, pellentesque ligula quis, condimentum urna. Maecenas non eros nisi. Etiam posuere pharetra est a porttitor. Proin fringilla metus pellentesque, auctor lacus sit amet, sagittis justo.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `quantity`, `price`) VALUES
(1, 'samsung', 10, 3000),
(2, 'apple', 1, 5000),
(3, 'Hp', 3, 3000),
(4, 'Aser', 14, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `product_load`
--

CREATE TABLE `product_load` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_load`
--

INSERT INTO `product_load` (`id`, `category_id`, `product_name`) VALUES
(1, 1, 'Shirt'),
(2, 1, 'pant'),
(3, 1, 'Table'),
(4, 1, 'Chair'),
(5, 1, 'Pen'),
(6, 1, 'Book'),
(7, 1, 'Sofa'),
(8, 2, 'Khat'),
(9, 2, 'Alna'),
(10, 2, 'Dressing Table');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `email`, `phone`, `date`) VALUES
(1, 'khalid', 'khalid@gmail.com', '01710659888', '2020-11-13'),
(2, 'bin', 'bin@gmail.com', '01710659888', '2020-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1
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
(28, 'Rony\r\n', 'Kalaroa', '55'),
(34, 'Mita', 'Jashore', '40'),
(35, 'Jony', 'barisal', '50'),
(36, 'Rs Rony', 'satkhira', '50'),
(37, 'mt', 'rrrr', '11');

-- --------------------------------------------------------

--
-- Table structure for table `todo_list`
--

CREATE TABLE `todo_list` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo_list`
--

INSERT INTO `todo_list` (`id`, `title`) VALUES
(5, 'Testing4'),
(8, 'Testing1'),
(9, 'Testing2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `marks`, `city`) VALUES
(1, 'Vishal', 80, 'Delhi'),
(2, 'Amit', 90, 'Noida');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `name`, `username`, `password`, `last_login`) VALUES
(1, 'khalid', 'user1', 'user1', 1607791784),
(2, 'bin', 'user2', 'user2', 1605504719),
(3, 'walid', 'user3', 'user3', 0),
(4, 'rony', 'user4', 'user4', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autoinput`
--
ALTER TABLE `autoinput`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_field`
--
ALTER TABLE `dynamic_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fb_messages`
--
ALTER TABLE `fb_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fb_user`
--
ALTER TABLE `fb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_dislike`
--
ALTER TABLE `like_dislike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_load`
--
ALTER TABLE `product_load`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
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
-- Indexes for table `todo_list`
--
ALTER TABLE `todo_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autoinput`
--
ALTER TABLE `autoinput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dynamic_field`
--
ALTER TABLE `dynamic_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fb_messages`
--
ALTER TABLE `fb_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `fb_user`
--
ALTER TABLE `fb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `like_dislike`
--
ALTER TABLE `like_dislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_load`
--
ALTER TABLE `product_load`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `todo_list`
--
ALTER TABLE `todo_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
