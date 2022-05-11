-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 12:50 PM
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
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment_username`, `text`) VALUES
(2, 1, 'BakirAlkaraki', 'comment #2'),
(3, 11, 'BasilRajabi', 'best university'),
(9, 7, 'OdaiMakarzea', 'The most beautiful city'),
(13, 6, 'QusaiAladra', 'Jerusalem in the heart'),
(14, 8, 'aboodanas', 'Hala Madrid '),
(22, 1, 'MohamadAlbaba', 'hello'),
(25, 9, 'MohamadAlbaba', 'comment'),
(40, 10, 'OdaiMakarzea', 'Ramadan Mubarak'),
(97, 12, 'OdaiMakarzea', 'hhhhhhhhh'),
(100, 5, 'OdaiMakarzea', 'yes'),
(108, 11, 'OdaiMakarzea', 'yes'),
(110, 10, 'MohamadAlbaba', 'Thanks');

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

CREATE TABLE `friendship` (
  `id` int(11) NOT NULL,
  `my_username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `friend_username` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friendship`
--

INSERT INTO `friendship` (`id`, `my_username`, `friend_username`) VALUES
(9, 'MohamadAlbaba', 'BasilRajabi'),
(10, 'BakirAlkaraki', 'MohamadAlbaba'),
(17, 'BakirAlkaraki', 'OdaiMakarzea'),
(19, 'BasilRajabi', 'OdaiMakarzea'),
(22, 'OdaiMakarzea', 'QusaiAladra'),
(23, 'QusaiAladra', 'OdaiMakarzea'),
(24, 'MohamadAlbaba', 'OdaiMakarzea'),
(25, 'OdaiMakarzea', 'MohamadAlbaba'),
(26, 'BasharWazwaz', 'OdaiMakarzea'),
(27, 'OdaiMakarzea', 'BasharWazwaz');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` int(11) NOT NULL,
  `sender_username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `receiver_username` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `sender_username`, `receiver_username`) VALUES
(16, 'OdaiMakarzea', 'BasilRajabi'),
(19, 'OdaiMakarzea', 'BakirAlkaraki'),
(41, 'MohamadAlbaba', 'BakirAlkaraki');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `username`) VALUES
(1, 1, 'BasilRajabi'),
(3, 5, 'MohammedAbdAlbaset'),
(40, 12, 'OdaiMakarzea'),
(42, 11, 'MohamadAlbaba'),
(50, 11, 'OdaiMakarzea'),
(52, 1, 'BakirAlkaraki'),
(53, 5, 'OdaiMakarzea');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `username`, `text`, `pic`, `date_posted`) VALUES
(1, 'OdaiMakarzea', 'THIS IS A POST TEST TEXT ', '', '2022-04-01'),
(5, 'BasilRajabi', ' The most beautiful city', 'upload/Bethlehem.jpg', '2022-04-24'),
(6, 'MohamadAlbaba', 'Jerusalem is the eternal capital of Palestine', 'upload/Jerusalem.jpg', '2022-04-09'),
(7, 'BakirAlkaraki', 'welcome to hebron', 'upload/hebron.jpg', '2022-04-03'),
(8, 'QusaiAladra', 'Hala Madrid ', 'upload/Real.jpg', '2022-04-07'),
(9, 'MohamadAlbaba', 'NEW POST!', '', '2022-04-19'),
(10, 'MohamadAlbaba', 'ramadan kareem', 'upload/ramadan kareem.jpg', '2022-04-18'),
(11, 'OdaiMakarzea', 'welcome to ppu', 'upload/ppu.png', '2022-04-27'),
(12, 'BasharWazwaz', '&lt;script&gt; \r\n   alert(&quot;HACKED&quot;)\r\n&lt;/script&gt; ', '', '2022-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `email`, `username`, `password`) VALUES
(1, 'Odai', 'Makarzea', 'male', 'Odai.Makarzea@gmail.com', 'OdaiMakarzea', '1234'),
(5, 'Mohamad', 'Albaba', 'male', 'MohamadAlbaba22@gmail.com', 'MohamadAlbaba', '1230'),
(6, 'Basil', 'Rajabi', 'male', 'BasilRajabi@gmail.com', 'BasilRajabi', '1237'),
(7, 'Bakir', 'Alkaraki ', 'male', 'Bakir Alkaraki@4.fb', 'BakirAlkaraki', '1236'),
(8, 'Haneen', 'Makarzea ', 'female', 'HaneenMakarzea@5.fb', 'HaneenMakarzea', '1233'),
(11, 'Qusai', 'Aladra', 'male', 'Qusai_Aladra@S.C', 'QusaiAladra', '12324'),
(12, 'abood', 'doufesh', 'male', '1@1.1', 'aboodanas', '2351'),
(14, 'Mohammed', 'Albaset', 'male', 'Mohammed-ha@hs.v', 'MohammedAbdAlbaset', 'ha'),
(15, 'Mohammed', 'ideas', 'male', '2@3.2', 'Mohammedideas', '122323'),
(16, 'Bashar', 'Wazwaz', 'male', 'basher@name.fb', 'BasharWazwaz', 'username'),
(17, 'Alex ', 'Morgan', 'female', 'alex2022@gmail.com', 'Alex-Morgan', '1235');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id_fk` (`post_id`),
  ADD KEY `comment_username_fk` (`comment_username`);

--
-- Indexes for table `friendship`
--
ALTER TABLE `friendship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friend_username_fk` (`friend_username`),
  ADD KEY `my_username_fk` (`my_username`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_username_fk` (`sender_username`),
  ADD KEY `receiver _username_fk` (`receiver_username`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liked_post_id_fk` (`post_id`),
  ADD KEY `like_username_fk` (`username`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username_fk` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `friendship`
--
ALTER TABLE `friendship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_username_fk` FOREIGN KEY (`comment_username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `post_id_fk` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `friendship`
--
ALTER TABLE `friendship`
  ADD CONSTRAINT `friend_username_fk` FOREIGN KEY (`friend_username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `my_username_fk` FOREIGN KEY (`my_username`) REFERENCES `users` (`username`);

--
-- Constraints for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD CONSTRAINT `receiver _username_fk` FOREIGN KEY (`receiver_username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `sender_username_fk` FOREIGN KEY (`sender_username`) REFERENCES `users` (`username`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `like_username_fk` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `liked_post_id_fk` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `username_fk` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
