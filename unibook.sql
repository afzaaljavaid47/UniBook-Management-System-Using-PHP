-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 10:15 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unibook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feeling`
--

CREATE TABLE `feeling` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `feeling` varchar(255) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeling`
--

INSERT INTO `feeling` (`id`, `user_id`, `feeling`, `time`) VALUES
(4, 11, 'good', '08-36 PM');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'no-reply'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_catagory` varchar(100) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_description` varchar(1000) NOT NULL,
  `post_image` text NOT NULL,
  `post_date` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_catagory`, `post_title`, `post_description`, `post_image`, `post_date`) VALUES
(2, 12, 'HTML', 'Difference Between Web Designing and Web Development', 'Difference Between Web Designing and Web Development', '1 pE2fOVDikEUwiQJlh4ggzg.jpeg', '11/25/2019 04-20-15 AM');

-- --------------------------------------------------------

--
-- Table structure for table `post_catagories`
--

CREATE TABLE `post_catagories` (
  `catagory_id` int(11) NOT NULL,
  `catagory_name` varchar(100) NOT NULL,
  `catagory_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_catagories`
--

INSERT INTO `post_catagories` (`catagory_id`, `catagory_name`, `catagory_description`) VALUES
(1, 'HTML', 'A web language'),
(2, 'CSS', 'stylesheet');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `query_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `query` varchar(255) NOT NULL,
  `reply_query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`query_id`, `user_id`, `query`, `reply_query`) VALUES
(1, 11, 'Why We Choose Web Development Department?', 'llkjhngb'),
(2, 12, 'hloo?', ''),
(3, 12, 'how are you?', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `institution` varchar(300) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `image` varchar(100) DEFAULT 'D:\\\\WEBSITES PRACTICE\\\\Blogger\\\\rizwan.JPG',
  `i_am` varchar(50) NOT NULL,
  `is_verified` varchar(50) NOT NULL DEFAULT 'not_verified',
  `member_since` text NOT NULL,
  `last_seen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `uname`, `email`, `password`, `gender`, `institution`, `degree`, `image`, `i_am`, `is_verified`, `member_since`, `last_seen`) VALUES
(10, 'afzaaljavaid', 'afzaaljavaid47545612@gmail.com', '475456', 'male', 'uet', 'msc', '', '', 'not_verified', '', ''),
(11, 'rizwan', 'rizwan@gmail.com', '223800', 'male', 'uet', 'bs', 'face.png', 'student', 'not_verified', '11-19-2019 03-37-29 AM', '11-19-2019 03-37-29 AM'),
(12, 'uswa', 'uswa@gmail.com', '475456', 'female', 'uet', 'bs', 'face.png', 'student', 'not_verified', '11-19-2019 03-39-09 AM', '11-19-2019 03-39-09 AM');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `message_id` int(11) NOT NULL,
  `from_user_id` int(10) NOT NULL,
  `to_user_id` int(10) NOT NULL,
  `message_title` varchar(255) NOT NULL,
  `message_description` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL DEFAULT 'no_reply',
  `replied_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`message_id`, `from_user_id`, `to_user_id`, `message_title`, `message_description`, `reply`, `replied_message`) VALUES
(1, 12, 12, 'love', 'love you', 'reply', 'love you two');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `feeling`
--
ALTER TABLE `feeling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_catagories`
--
ALTER TABLE `post_catagories`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeling`
--
ALTER TABLE `feeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_catagories`
--
ALTER TABLE `post_catagories`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
