-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2018 at 10:58 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microinn`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_ref` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_ref`, `is_active`) VALUES
(49, 'Sports Gala', '', 0),
(50, 'Daramas', '', 0),
(52, 'Games', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_post_id` int(11) DEFAULT NULL,
  `comment_email` varchar(255) DEFAULT NULL,
  `comment_content` text,
  `comment_date` datetime DEFAULT NULL,
  `comment_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_author`, `comment_post_id`, `comment_email`, `comment_content`, `comment_date`, `comment_status`) VALUES
(10, 'asd', 2, 'asdsfa@gmail.com', 'helloword', '2017-12-02 15:26:41', 'approved'),
(11, 'sad', 2, 'asdsfa@gmail.com', 'sadasd', '2017-12-02 15:27:35', 'approved'),
(12, 'asd', 1, 'asdsfa@gmail.com', 'asdasdasf', '2017-12-02 15:28:37', 'approved'),
(13, 'ahmed', 1, 'ahmed@gmail.com', 'hello world', '2017-12-02 15:33:22', 'approved'),
(14, 'fawad', 8, 'asdsfa@gmail.com', 'humsafar <3', '2017-12-02 15:36:13', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_cat_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image1` text NOT NULL,
  `post_image2` text NOT NULL,
  `post_image3` text NOT NULL,
  `post_image4` text NOT NULL,
  `post_image5` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_cmnts` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image1`, `post_image2`, `post_image3`, `post_image4`, `post_image5`, `post_content`, `post_tags`, `post_cmnts`, `post_status`, `is_active`) VALUES
(8, 49, 'Cricket', '', '', '2018-10-16', 'aroma1.JPG', 'rep2.JPG', 'ad1.JPG', '', '', '                                                ', '', 0, 'draft', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
