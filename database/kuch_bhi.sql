-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 08:05 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuch_bhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_reg`
--

CREATE TABLE `company_reg` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `company_type` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `pramoter_name` varchar(300) NOT NULL,
  `contact_person_name` varchar(300) NOT NULL,
  `person_type` varchar(300) NOT NULL,
  `contact_person_name1` varchar(300) NOT NULL,
  `person_type1` varchar(300) NOT NULL,
  `contact_person_name2` varchar(300) NOT NULL,
  `person_type2` varchar(300) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `image2` varchar(300) NOT NULL,
  `grade` varchar(300) NOT NULL,
  `stage` varchar(300) NOT NULL,
  `intrest_type` varchar(300) NOT NULL,
  `follow_date` varchar(300) NOT NULL,
  `follow_email` varchar(150) NOT NULL,
  `follow_phone` varchar(150) NOT NULL,
  `product_intrest` varchar(300) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `user_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_reg`
--

INSERT INTO `company_reg` (`id`, `company_name`, `company_type`, `city`, `address`, `pramoter_name`, `contact_person_name`, `person_type`, `contact_person_name1`, `person_type1`, `contact_person_name2`, `person_type2`, `mobile`, `email`, `image`, `image1`, `image2`, `grade`, `stage`, `intrest_type`, `follow_date`, `follow_email`, `follow_phone`, `product_intrest`, `remarks`, `user_id`) VALUES
(536, 'Yash  Pachauri', 'Furniture', 'Agra', 'Agra', 'Anoop', 'Dharam', 'Dev', 'Neeraj', 'Dev', 'Ram', 'sad', 9898989898, 'yash@gmail.com', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', 'A+', 'Medium', 'High', '2018-10-01', '', 'phone', 'Medium', 'okkk', 'admin'),
(537, 'Yash  Pachauri', 'Furniture', 'Agra sikandra', 'Agra', 'Anoop', 'Dharam', 'Dev', 'Neeraj', 'Dev', 'Ram', 'sad', 9898989898, 'yash@gmail.com', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', 'B+', 'Big', 'High', '2018-10-01', 'email', '', 'Full', 'Sab Badiya', 'anoop'),
(538, '', 'Home Furnishing', '', '', '', '', '', '', '', '', '', 0, '', 'http://localhost/Anup-Sir-Project/upload/032.png', 'http://localhost/Anup-Sir-Project/upload/044.png', 'http://localhost/Anup-Sir-Project/upload/013.png', '', '', '', '', 'email', '', 'Medium', '', 'anoop'),
(539, '', 'Furniture', '', '', '', '', '', '', '', '', '', 0, '', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', '', '', '', '', '', '', '', '', 'anoop'),
(540, '', 'Furniture', '', '', '', '', '', '', '', '', '', 0, '', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', '', '', '', '', '', '', '', '', 'admin'),
(541, 'testdemo', 'Home Furnishing', 'agra', 'hello', ';\'kl;k', 'kljklj', 'kljk', '1', '1', '2', '2', 23443434, 'yash23@gmail.com', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', 'http://localhost/My_new_project/upload/', 'A+', 'Big', 'Medium', '2018-10-12', 'email', 'phone', 'Full', 'asdas', 'admin'),
(542, '', 'Furniture', '', '', '', '', '', '', '', '', '', 0, '', 'http://localhost/My_new_project/upload/Jellyfish.jpg', 'http://localhost/My_new_project/upload/Lighthouse.jpg', 'http://localhost/My_new_project/upload/', '', '', '', '', 'email', 'phone', 'Medium', '', 'admin'),
(543, '', 'TexTile', '', '', '', '', '', '', '', '', '', 0, '', 'http://localhost/My_new_project/upload/Tulips.jpg', 'http://localhost/My_new_project/upload/Koala.jpg', 'http://localhost/My_new_project/upload/Penguins.jpg', '', '', '', '', '', '', '', '', 'anoop');

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE `login_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `level` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `level`) VALUES
(1, 'Dharam', 'Veer', 'admin', 'admin', 'dharam@gmail.com', 'admin'),
(2, 'Rahul', 'Tomar', 'rahul', '12345', 'rahul@gmail.com', 'user'),
(3, 'Anoop', 'Kumar', 'anoop', '12345', 'anoop@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_reg`
--
ALTER TABLE `company_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_reg`
--
ALTER TABLE `company_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=544;

--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
