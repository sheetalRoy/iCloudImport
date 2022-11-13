-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 06:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulk`
--

CREATE TABLE `bulk` (
  `id` int(10) NOT NULL,
  `due_amount` int(10) DEFAULT 0,
  `paid_amount` int(10) DEFAULT NULL,
  `concession_amount` int(10) DEFAULT 0,
  `scholarship_amount` int(10) DEFAULT 0,
  `reverse_concession_amount` int(10) DEFAULT 0,
  `write_off_amount` int(10) DEFAULT 0,
  `adjusted_amount` int(10) DEFAULT 0,
  `refund_amount` int(10) DEFAULT 0,
  `fund_transfer_amount` int(10) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulk`
--

INSERT INTO `bulk` (`id`, `due_amount`, `paid_amount`, `concession_amount`, `scholarship_amount`, `reverse_concession_amount`, `write_off_amount`, `adjusted_amount`, `refund_amount`, `fund_transfer_amount`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-11-13 10:33:42', '2022-11-13 10:33:42'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-13 10:33:42', '2022-11-13 10:33:42'),
(3, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-13 10:33:42', '2022-11-13 10:33:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulk`
--
ALTER TABLE `bulk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulk`
--
ALTER TABLE `bulk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
