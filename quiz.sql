-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 01:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'CSS'),
(4, 'JAVA'),
(5, 'PYTHON');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `opt_1` varchar(100) NOT NULL,
  `opt_2` varchar(100) NOT NULL,
  `opt_3` varchar(100) NOT NULL,
  `opt_4` varchar(100) NOT NULL,
  `answer` int(20) NOT NULL,
  `question_cat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `questions`, `opt_1`, `opt_2`, `opt_3`, `opt_4`, `answer`, `question_cat`) VALUES
(1, 'PHP files have a default file extension of_______', 'a) .html', 'b) .php', 'c) .xml', 'd) .js', 1, 1),
(2, 'A PHP script should start with ___ and end with ___', 'a) < php >', 'b) < ? php ?>', 'c) <? ?>', 'd) <?php ?>', 3, 1),
(4, 'The practice of separating the user from the true inner workings of an application through well-known interfaces is known as _________', 'a) Polymorphism', 'b) Inheritance', 'c) Encapsulation', 'd) Abstraction', 2, 1),
(6, 'Which of the following term originates from the Greek language that means â€œhaving multiple forms,â€ defines OOPâ€™s ability to redefine, a classâ€™s characteristics?', 'a) Abstraction', 'b) Polymorphism', 'c) Inheritance', 'd) Differential', 1, 1),
(7, 'How to define a function in PHP?', 'a) function {function body}', 'b) data type functionName(parameters) {function body}', 'c) functionName(parameters) {function body}', 'd) function functionName(parameters) {function body}', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`, `images`) VALUES
('gaurav Kumar', 'gs9178449@gmail.com', 'G@123aurav', 'image/gaurav Kumar.jpg'),
('gaurav Kumar', 'gaurav4149singh@gmail.com', 'G@123aurav', 'image/gaurav Kumar.jpg'),
('gaurav Kumar', 'gaurav4149singh@gmail.com', 'G@123aurav', 'image/gaurav Kumar.jpg'),
('gaurav Kumar', 'gaurav4149singh@gmail.com', 'G@123aurav', 'image/gaurav Kumar.jpg'),
('gaurav Kumar', 'gs9178449@gmail.com', '123', 'image/gaurav Kumar.jpg'),
('gaurav Kumar', 'gs9178449@gmail.com', '123', 'image/gaurav Kumar.jpg'),
('Raushan', 'raj9178449@gmail.com', 'G@123aurav', 'image/Raushan.jpg'),
('Gaurav Singh', 'gaurav4149singh@gmail.com', 'G@123aurav', 'image/Gaurav Singh.jpg'),
('Hemant Kumar', 'Hemu6676@gmail.com', 'G@123aurav', 'image/Hemant Kumar.jpg'),
('', '', '', 'image/.jpg'),
('', '', '', 'image/.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
