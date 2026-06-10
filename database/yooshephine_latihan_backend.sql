-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2026 at 02:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yooshephine_latihan_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `price`) VALUES
(1, 'Basic Class', 'Belajar mengenal kopi dan menyeduh secara aesthetic.', 150000),
(2, 'Coffee Art Pemula', 'Belajar membuat art di atas kopi.', 250000),
(3, 'Advanced Class', 'Kelas advanced untuk seni di atas kopi selama 3 jam.', 450000);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `course_id` int(11) NOT NULL,
  `participant_count` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `is_followed_up` tinyint(1) DEFAULT 0,
  `followed_up_by` int(11) DEFAULT NULL,
  `followed_up_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `full_name`, `email`, `phone_number`, `course_id`, `participant_count`, `unit_price`, `is_followed_up`, `followed_up_by`, `followed_up_at`, `created_at`) VALUES
(3, 'Yoyo', 'yosefinx@gmail.com', '081345188898', 1, 2, 0, 0, NULL, NULL, '2026-06-02 08:55:10'),
(4, 'Michelle', 'adad@gmail.com', '098918212121', 3, 100, 450000, 1, 1, '2026-06-08 18:54:18', '2026-06-03 02:47:07'),
(5, 'Yooshephine Iffy Chrishansen', 'yosefinx@gmail.com', '08123456789', 2, 2, 250000, 0, NULL, NULL, '2026-06-08 11:43:58'),
(6, 'Felice', 'felice.013@ski.sch.id', '08123456789', 1, 2, 150000, 0, NULL, NULL, '2026-06-08 12:08:59'),
(7, 'Kajo', 'kajo@gmail.com', '123445667899', 1, 1, 150000, 0, NULL, NULL, '2026-06-08 13:48:57'),
(8, 'Felice Olivia', 'felice.013@ski.sch.id', '123445667899', 2, 2, 250000, 0, NULL, NULL, '2026-06-09 00:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'yoyo', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `followed_up_by` (`followed_up_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `registrations_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `registrations_ibfk_2` FOREIGN KEY (`followed_up_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
