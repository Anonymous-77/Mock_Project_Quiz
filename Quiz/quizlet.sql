-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2021 at 01:00 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizlet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin1@gmail.com', 'admin2021');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_type` varchar(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `sub_cat` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_type`, `cat_name`, `sub_cat`) VALUES
(1, 'quizcategory', 'Sports', 'Handball'),
(2, 'quizcategory', 'Politics', 'Lok Sabha'),
(3, 'quizcategory', 'Politics', 'Vidhana Sabha'),
(4, 'quizcategory', 'Sports', 'Cricket'),
(5, 'quizcategory', 'Sports', 'Badminton'),
(6, 'quizcategory', 'Sports', 'Basketball'),
(7, 'quizcategory', 'Movies', 'SandalWood'),
(8, 'quizcategory', 'Movies', 'Bollywood'),
(9, 'quizcategory', 'Movies', 'Tollywood');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `q_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `question_no` int(10) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `category_name`, `sub_category`, `question_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'Movies', 'Sandalwood', 1, 'What is the nick name of Sudeep?', 'Abhinaya Chakravarti', 'Kiccha', 'Golden Star', 'karate King', '2');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`) VALUES
(1, 'kedarnathchimmad555@gmail.com', 'Imdegea@01'),
(2, 'a@gmail.con', 'a'),
(4, 'subbu@gmail.com', 'subbu273'),
(5, 'ram@gmail.com', 'ram273'),
(6, 'subbu123@gmail.com', 'subbu12345'),
(7, 'yogi@gmail.com', 'yogi123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
