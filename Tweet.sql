-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 01, 2021 at 03:50 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Tweet`
--

CREATE TABLE `Tweet` (
  `id` int(12) NOT NULL,
  `username` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Tweet`
--

INSERT INTO `Tweet` (`id`, `username`, `content`, `date`) VALUES
(1, 'Harry', 'はりー', '2021-10-01 23:19:38'),
(2, 'はりたん', '今日はいい日だ', '2021-10-01 23:20:04'),
(3, 'やってみよう', 'おもしろい', '2021-10-01 23:20:11'),
(4, 'Harry', '面白い機能', '2021-10-01 23:22:38'),
(5, 'じーず', '今日は面白い', '2021-10-01 23:39:25'),
(6, 'じーず', '今日から社会人3年目', '2021-10-02 00:15:23'),
(7, '本日', '明日になったね', '2021-10-02 00:17:07'),
(8, 'Harry', 'Harry', '2021-10-02 00:19:50'),
(9, '寝不足マン', '深夜投稿', '2021-10-02 00:40:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Tweet`
--
ALTER TABLE `Tweet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Tweet`
--
ALTER TABLE `Tweet`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
