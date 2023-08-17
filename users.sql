-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `gender`, `dob`, `created_at`, `updated_at`) VALUES
(1, 'amna', 'munir', 'amnamunir', 'amnamunir612@gmail.com', '123', 'female', '2023-08-12', '2023-08-12 16:35:28', '2023-08-12 16:35:28'),
(2, 'amna', 'munir', 'amnamunir', 'amnamunir612@gmail.com', '', 'female', '2023-08-12', '2023-08-12 16:37:56', '2023-08-12 16:37:56'),
(3, 'maher', 'zain', 'maherzain', 'maher@gmail.com', '11', 'male', '2023-08-12', '2023-08-12 16:44:42', '2023-08-12 16:44:42'),
(4, 'hina', 'mir', 'hinamir', 'hinamir@gmail.com', '000', 'female', '2023-08-12', '2023-08-12 16:47:51', '2023-08-12 16:47:51'),
(5, 'hina', 'mir', 'hinamir', 'hinamir@gmail.com', '', 'female', '2023-08-12', '2023-08-12 16:49:12', '2023-08-12 16:49:12'),
(6, 'hina', 'mir', 'hinamir', 'hinamir@gmail.com', '', 'female', '2023-08-12', '2023-08-12 16:51:05', '2023-08-12 16:51:05'),
(7, '1', 'munir', '', '', '', 'female', '2023-08-12', '2023-08-12 17:18:36', '2023-08-12 17:18:36'),
(8, 'Ak', 'john', 'akjohn', 'ak.john@gmail.com', 'aaa', 'male', '2023-08-13', '2023-08-13 00:24:40', '2023-08-13 00:24:40'),
(9, 'a', 'a', 'amnamunir', 'amnamunir612@gmail.com', 'a', 'female', '2023-08-13', '2023-08-13 00:33:16', '2023-08-13 00:33:16'),
(10, 'amna', 'munir', 'amnamunir', 'amnamunir612@gmail.com', '111', 'female', '2023-08-13', '2023-08-13 00:41:24', '2023-08-13 00:41:24'),
(11, 'iman', 'sh', 'imansh', 'imansh@gmail.com', '1111', 'female', '2023-08-13', '2023-08-13 00:44:12', '2023-08-13 00:44:12'),
(12, 'amna', 'ali', 'amnali', 'amnaali@gmail.com', '111', 'female', '2023-08-13', '2023-08-13 00:45:35', '2023-08-13 00:45:35'),
(13, 'bilal', 'ahmed', 'bilal.', 'bilal@gmail.com', '1077', 'male', '2023-08-13', '2023-08-13 00:46:50', '2023-08-13 00:46:50'),
(14, 'bilal', 'ahmed', 'bilal.', 'bilal@gmail.com', '1077', 'male', '2023-08-13', '2023-08-13 00:47:02', '2023-08-13 00:47:02'),
(15, 'bilal', 'ahmed', 'bilal.', 'bilal@gmail.com', '111', 'male', '2023-08-13', '2023-08-13 00:58:54', '2023-08-13 00:58:54'),
(16, 'hina', 'mir', 'hinamir', 'hinamir@gmail.com', '00', 'female', '2023-08-13', '2023-08-13 01:15:56', '2023-08-13 01:15:56'),
(17, 'ayesha', 'munir', 'ayeshamunir', 'ayesha@gmail.com', '111', 'female', '2023-08-13', '2023-08-13 14:02:31', '2023-08-13 14:02:31'),
(18, 'ayesha', 'munir', 'ayeshamunir', 'ayesha@gmail.com', '11', 'female', '2023-08-13', '2023-08-13 14:16:30', '2023-08-13 14:16:30'),
(19, 'amna', 'munir', 'amnamunir', 'amnamunir612@gmail.com', '11', 'female', '2023-08-13', '2023-08-13 15:21:35', '2023-08-13 15:21:35'),
(20, 'luba', 'nawaz', 'lubanawaz', 'luba@gmail.com', '11', 'female', '2023-08-13', '2023-08-13 15:30:33', '2023-08-13 15:30:33'),
(21, 'luba', 'nawaz', 'lubanawaz', 'luba@gmail.com', '11', 'female', '2023-08-13', '2023-08-13 15:33:17', '2023-08-13 15:33:17'),
(22, 'luba', 'nawaz', 'lubanawaz', 'luba@gmail.com', '11', 'female', '2023-08-13', '2023-08-13 15:38:14', '2023-08-13 15:38:14'),
(23, 'luba', 'nawaz', 'lubanawaz', 'luba@gmail.com', '11', 'female', '2023-08-13', '2023-08-13 15:41:17', '2023-08-13 15:41:17'),
(24, 'sidra', 'munir', 'sidramunir', 'sidra@gmail.com', '11', 'female', '2023-08-13', '2023-08-13 15:46:17', '2023-08-13 15:46:17'),
(25, 'sidra', 'munir', 'sidramunir', 'sidra@gmail.com', '', 'female', '2023-08-13', '2023-08-13 16:22:11', '2023-08-13 16:22:11'),
(26, 'sidra', 'munir', 'sidramuni', 'sidra@gmail.com', '11', 'female', '2023-08-13', '2023-08-13 16:31:02', '2023-08-13 16:31:02'),
(27, 'oran', 'k', 'orank', 'orank@gmail.com', '22', 'male', '2023-08-13', '2023-08-13 16:33:06', '2023-08-13 16:33:06'),
(28, 'amna', 'munir', 'amnamunir', 'amnamunir612@gmail.com', '22', 'female', '2023-08-13', '2023-08-13 22:01:07', '2023-08-13 22:01:07'),
(42, 'asad', 'iqbal', 'asiqbal', 'asad@gmail.com', '123', 'male', '2023-09-03', '2023-08-14 03:28:46', '2023-08-14 03:28:46'),
(43, 'Ammar ', 'Haryani', 'ammarharyani', 'am.haryani@gmail.com', '1077', 'male', '1995-01-01', '2023-08-14 04:28:25', '2023-08-14 04:28:25'),
(44, 'asra', 'jamil', 'asrajamil', 'asra.jamil@gmail.com', '123', 'female', '2023-08-28', '2023-08-15 12:08:01', '2023-08-15 12:08:01'),
(45, 'asra', 'jamil', 'asrajamil', 'asra.jamil@gmail.com', '123', 'female', '2023-08-28', '2023-08-15 12:08:14', '2023-08-15 12:08:14'),
(46, 'Maher', 'Zain', 'root', 'maherzain@gmail.com', '1077', 'male', '2023-08-16', '2023-08-15 12:19:59', '2023-08-15 12:19:59'),
(47, 'Muhammad', 'Latif', 'drlatif', 'drlatif@gmail.com', '111', 'male', '2023-08-01', '2023-08-15 12:24:20', '2023-08-15 12:24:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
