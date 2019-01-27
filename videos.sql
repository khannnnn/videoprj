-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 08:37 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `play_list_id` varchar(45) NOT NULL,
  `video_title` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `video_duration` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `play_list_id`, `video_title`, `video_url`, `video_duration`) VALUES
(26, '6', 'SIMMBA: Aankh Marey Lyrical', 'https://www.youtube.com/watch?v=vu5-aKf_QqA', '40 Sc'),
(27, '6', 'Laung Laachi Title Song ', 'https://www.youtube.com/watch?v=YpkJO_GrCo0', '45 Sc'),
(28, '6', '3 Peg Sharry Mann Lyric Video', 'https://www.youtube.com/watch?v=LYnHyygU7xE', '25 Sc'),
(29, '3', 'Cute Munda - Sharry Mann (Full Video Song)', 'https://www.youtube.com/watch?v=PDlw1Tn-PVk', '45Sc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
