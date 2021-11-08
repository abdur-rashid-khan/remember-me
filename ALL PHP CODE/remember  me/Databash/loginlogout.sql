-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 08:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_logout`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginlogout`
--

CREATE TABLE `loginlogout` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `usernumber` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `creeatepassword` varchar(255) NOT NULL,
  `confpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginlogout`
--

INSERT INTO `loginlogout` (`id`, `username`, `usernumber`, `useremail`, `creeatepassword`, `confpassword`, `token`, `status`) VALUES
(3, 'Roni khan ', '54545', 'jihadkhan@gmailcom', '$2y$10$7Y9b6xe0H1epxhuhEa6jHe5TQZiu35fAhE4b3WA2ILY.EnjmsNFEu', '$2y$10$wiyQg7JTU6AfZJFL34FJvu2sjdVnEn2TaYs.H7xV8a1LGrTGMR1j2', 'a34484f8a798902d636bb4809be648', 'inactive'),
(5, 'Rashid khan', '54545', 'admin@gmail.com', '$2y$10$/6qjUs2.hgWH7GUOOW4lBOOM25K9DXd2TRtt6vp6UIuf66M2AzTz.', '$2y$10$z4qoq34Cb2ISuA5NPAiI6.ygTMLJA.AumBglY4eZckn5pCwY8FICC', 'caedadfba576bd86871e35f5210af2', 'inactive'),
(14, 'Rashid khan', '54545', 'databash8@gmail.com', '$2y$10$TIDdC/GlqLoAjJV1Oz8QeO.50hnQyX5RE6FGwTngK9YU3Kja/8Y9q', '$2y$10$tSsE7JIPOP33oVZxemW.leJcplQnmb58H0i9beXCOqxFH1L2zbpey', 'de0efd88eb2d57e226384a86b9fddf', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginlogout`
--
ALTER TABLE `loginlogout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginlogout`
--
ALTER TABLE `loginlogout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
