-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 01:01 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `back_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'hussein', 'Husseinabdelaziz8@gmail.com', '123456'),
(2, 'route', 'route@route.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sportsnews`
--

CREATE TABLE `sportsnews` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `article` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sportsnews`
--

INSERT INTO `sportsnews` (`id`, `title`, `description`, `img_path`, `article`) VALUES
(3, 'hosni abd rabou', 'Hosny was usually deployed as a deep-lying playmaker in midfield for both his club and national sides and he is widely regarded as one of the greatest Egyptian players ever to play this position due t', 'uploads/1-12-2018_22_34_09_GomhuriaOnline_1543696449.jpg', 'Hosny was usually deployed as a deep-lying playmaker in midfield for both his club and national sides and he is widely regarded as one of the greatest Egyptian players ever to play this position due to his fighting spirit, cross accuracy, creativity and passing ability.'),
(4, 'Baher El Mohamady', 'Egyptian footballer who plays for Ismaily SC as a defender.[1] El Mohamady is a product of the Ismaily SC youth system. He earned his first international cap against Niger on 8 September 2018[2] and s', 'uploads/DnN1buKWsAEftW4.jpg', 'Egyptian footballer who plays for Ismaily SC as a defender.[1] El Mohamady is a product of the Ismaily SC youth system. He earned his first international cap against Niger on 8 September 2018[2] and scored his first international goal aganist Tunisia on 16 November 2018.[3]'),
(5, 'Mo Salah', 'The Egypt international enjoyed a remarkable debut season at Anfield in which he broke the record for most goals in a single Premier League campaign by netting 32 times in just 36 appearances.', 'uploads/GettyImages-914184882-610x406.jpg', 'The Egypt international enjoyed a remarkable debut season at Anfield in which he broke the record for most goals in a single Premier League campaign by netting 32 times in just 36 appearances.'),
(6, 'mohamed magdy', ';lsjsdfjffkfkljsdfklsd', 'uploads/1-12-2018_22_34_09_GomhuriaOnline_1543696449.jpg', 'ASAdasdasdasfasdfsdfASAdasdasdasfasdfsdfASAdasdasdasfasdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `technews`
--

CREATE TABLE `technews` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `article` varchar(600) NOT NULL,
  `img_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technews`
--

INSERT INTO `technews` (`id`, `title`, `description`, `article`, `img_path`) VALUES
(3, 'Android Phones Can Get Hacked Just by Looking at a PNG Image', 'Beware! You have to remain more caution while opening an image file on your smartphoneâ€”downloaded anywhere from the Internet or received through messaging or email apps.', 'Beware! You have to remain more caution while opening an image file on your smartphoneâ€”downloaded anywhere from the Internet or received through messaging or email apps.', 'uploads/android-phone-hacking.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `umail` varchar(100) NOT NULL,
  `uphone` int(11) NOT NULL,
  `upassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `umail`, `uphone`, `upassword`) VALUES
(1, 'mahmoud', 'm@m.com', 1024772488, '123456'),
(2, 'zizo', 'zizo@zizo.com', 1010101010, '123456'),
(3, 'doshi', 'doshi@doshi.com', 2147483647, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportsnews`
--
ALTER TABLE `sportsnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technews`
--
ALTER TABLE `technews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sportsnews`
--
ALTER TABLE `sportsnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `technews`
--
ALTER TABLE `technews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
