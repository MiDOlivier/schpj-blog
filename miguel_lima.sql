-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 04:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miguel_lima`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `ctgry_color` varchar(15) NOT NULL,
  `ctgry` varchar(15) NOT NULL,
  `title` varchar(150) NOT NULL,
  `body` varchar(250) NOT NULL,
  `author` varchar(35) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `img`, `ctgry_color`, `ctgry`, `title`, `body`, `author`, `date`) VALUES
(1, 'aaa', '0', '0', '0', '0', 'admin', '2022-09-01'),
(2, 'bb', 'bb', 'bb', 'bb', 'bb', 'admin', '2022-09-01'),
(3, 'cc', 'cc', 'cc', 'cc', 'cc', 'anon', '2022-09-01'),
(4, 'dd', 'dd', 'dd', 'dd', 'dd', 'anon', '2022-09-01'),
(5, 'ee', 'ee', 'ee', 'ee', 'ee', 'anon', '2022-09-01'),
(6, 'ff', 'ff', 'ff', 'ff', 'ff', 'bob', '2022-09-01'),
(7, 'gg', 'gg', 'gg', 'gg', 'gg', 'bob', '2022-09-01'),
(8, 'hh', 'hh', 'hh', 'hh', 'hh', 'bob', '2022-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(35) NOT NULL,
  `passwd` varchar(16) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `passwd`, `created_at`) VALUES
(1, 'admin', 'admin', '2022-09-01'),
(2, 'anon', 'anon', '2022-09-01'),
(3, 'bob', 'bob', '2022-09-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
