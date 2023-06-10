-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 05:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2023_223040041`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int NOT NULL,
  `jenis` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `jenis`) VALUES
(1, 'admin'),
(2, 'user\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `username` char(50) NOT NULL,
  `email` char(100) NOT NULL,
  `password` char(255) NOT NULL,
  `address` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `img` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `code` char(255) NOT NULL,
  `status` char(255) NOT NULL,
  `id_roles` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `password`, `address`, `tgl_lahir`, `img`, `code`, `status`, `id_roles`) VALUES
(1667, 'admin', 'admin@gmail.com', '$2y$10$BDJ56sjmVvDFU154WrwcmOJvF2P/tICJ1jQud8opkYHRmWL.whHom', 'admin', '2023-06-01', 'dummy.jpg', '0', 'Verified', 1),
(1668, 'test', 'test@gmail.com', '$2y$10$1K90PHNebDpjeTbLSvwPCucZ6gQpLvT3z3ozDvXCNEULLOU8xcExe', 'Bandung', '2023-07-01', 'dummy.jpg', '0', 'Verified', 2),
(1669, 'test2', 'test2@gmail.com', '$2y$10$SuYGcLwwF78UNjvBW.04Nej5.j.NAHHuvCNYVkI2NDYSELJfqCL9q', 'Jakarta', '2023-06-14', 'dummy.jpg', '0', 'Verified', 2),
(1670, 'test3', 'test3@gmail.com', '$2y$10$0K8Z8IROUi5E49ZCpFWrm.RkD6eOpmGyyFaBF.MNy.Kds5aC9.EFu', 'Papua', '2023-06-08', 'dummy.jpg', '0', 'Verified', 2),
(1671, 'test4', 'test4@gmail.com', '$2y$10$sdRhENRo.BguuW0nLq3lfels1Iw96T.vquK81Dg2cs87LREwREG7y', 'Surabaya', '2023-06-19', 'dummy.jpg', '0', 'Verified', 2),
(1672, 'test5', 'test5@gmail.com', '$2y$10$IYebqAv53n8bymLpUmTb7e.D93viWb93eqITPbI.0V2CPy6L0NoZi', 'Solo', '2023-06-08', 'dummy.jpg', '0', 'Verified', 2),
(1676, 'admin2', 'admin2@gmail.com', '$2y$10$g8ZE/oCEzVzTT9XIIdwG6.nMVJI0IVWt8clg4m4EO1SHP652EnAdi', 'Bandung', '2023-06-09', 'dummy.jpg', '0', 'Verified', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_roles` (`id_roles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1677;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
