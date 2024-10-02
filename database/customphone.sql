-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 05:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `confirmpass` text NOT NULL,
  `IC` text NOT NULL,
  `is_suspended` int(1) NOT NULL DEFAULT 0,
  `failed_login_attempts` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `surname`, `confirmpass`, `IC`) VALUES
(32, 1191202351, 'Irdina', 'K3ZIazgxVmVYZGpZUGNkSTV1QVBaZz09OjpDJ9mXVaeRDcrmYQQnZHV1', 'aFErRXZuRTZiSElqMHJwNWo1NDhkdz09OjrbUTYVBURQ6e/10qr8QuaL');

-- --------------------------------------------------------

--
-- Table structure for table `fo`
--

CREATE TABLE `fo` (
  `id` int(10) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `confirmpass` text NOT NULL,
  `IC` text NOT NULL,
  `is_suspended` int(1) NOT NULL DEFAULT 0,
  `failed_login_attempts` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fo`
--

INSERT INTO `fo` (`id`, `user_id`, `surname`, `confirmpass`, `IC`) VALUES
(32, 1191202413, 'Harez', 'Y1YvclgxVnlJZkJTTmVBdnJjNTc0UT09Ojqg9U0pQtyiVjodnweZr6L4', 'Mk5yb2FQUGhrS28wb1JWTjh0VTBBQT09Ojqg43lb7PEh5xXU/0GjwsJM');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(20) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `surname` text NOT NULL,
  `confirmpass` text NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `logout_date` date NOT NULL,
  `logout_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `user_id`, `surname`, `confirmpass`, `login_date`, `login_time`, `logout_date`, `logout_time`) VALUES
(26, 1211103149, 'dzakry', 'MTBSdVdjcWZTdFIwczVTQXRkMjdTdz09OjoDTjRZmAASG8tRRIdeW2ld', '2024-05-15', '16:53:39', '2024-05-15', '16:54:24'),
(27, 1211103149, 'dzakry', 'VVpyMGhaY3ZYcGtOWHZIZU42Y3hBdz09OjoIPDfO9zW6l9vnyjBFAvGU', '2024-05-15', '16:55:23', '2024-05-15', '16:57:29'),
(28, 1191202351, 'irdina', 'ZGtwQ3BkbDAyK0xTbS80c2RINEZ2Zz09OjpUFgw0eo7nSbj89/NpENjC', '2024-05-15', '16:56:00', '2024-05-15', '16:56:03'),
(29, 1211103149, 'dzakry', 'U3FvYUNqV2Mxb1pKSGtwU3dSbHhoQT09OjpDSJFehjNrHiwMKi+kEzux', '2024-05-15', '16:57:02', '2024-05-15', '16:57:29'),
(30, 1191202414, 'max', 'ZXNNTUQ5dzF5WG1DdUx4Vm15MzZ4Zz09OjrnNUjvqb2EctGfBbDHnuY7', '2024-05-15', '16:57:47', '2024-05-15', '16:58:21'),
(31, 1191202413, 'harez', 'akNKcFpUSTN0V29iZXgrYm9xb0RpQT09Ojprvpkth8dp+4M4lJhKw5ID', '2024-05-15', '16:58:51', '2024-05-15', '16:59:37'),
(32, 1191202351, 'irdina', 'K2MrQm9kQXo5eXFZem85ZTdKUmp5dz09Ojogp2MhjaJfAF5yy9YE8h0x', '2024-05-15', '17:03:07', '2024-05-15', '17:03:22'),
(33, 1211103149, 'dzakry', 'Wkt0eU9HdTRWeWVjR2tkNDJ3c1RsZz09OjqQKvkeX55fZhnEk+Lazzk+', '2024-05-15', '17:03:37', '2024-05-15', '17:03:49'),
(34, 1191202414, 'max', 'b25jRDdDVy9nd1BhY3EvK0VBR2hOUT09Ojrn3FOcMzyg2EEuZH8qmSp1', '2024-05-15', '17:03:56', '2024-05-15', '17:04:06'),
(35, 1191202413, 'harez', 'cEM4TUpsZDZ1MXJtWkNSbXlucFdIdz09OjpNvHHC2dFz6VS9R1zqsPWQ', '2024-05-15', '17:04:16', '2024-05-15', '17:04:50'),
(36, 1191202351, 'irdina', 'ejhpeXpTbEpPUStuOENTY1cyTi9xQT09Ojq4+y4i/oJWHHKi25A0Yk8r', '2024-05-15', '17:10:34', '2024-05-15', '17:10:43'),
(37, 1211103149, 'dzakry', 'ZmQvQzJhLzlmejFVNWVwUDVjN3B2QT09OjqskCtv3IqMp8Kc6jA+6x2Q', '2024-05-15', '17:11:16', '2024-05-15', '17:11:28'),
(38, 1191202414, 'max', 'eTdsZVlJK3p0Tmt2SW9KVTBmUVhMUT09OjrV+fiqaJ+yieDxTZzO2BzX', '2024-05-15', '17:11:37', '2024-05-15', '17:11:47'),
(39, 1191202413, 'harez', 'TGY0RlRpeWpLRzRWYVgvblpSYkp3UT09OjqzJxXINMqISanVKWqFYbAT', '2024-05-15', '17:11:55', '2024-05-15', '17:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(10) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `confirmpass` text NOT NULL,
  `IC` text NOT NULL,
  `is_suspended` int(1) NOT NULL DEFAULT 0,
  `failed_login_attempts` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `user_id`, `surname`, `confirmpass`, `IC`) VALUES
(33, 1211103149, 'dzakry', 'ZXpNVklselo5K1JxWjRsSDBoQ280Zz09OjoITjf0lY1v2CiZVQDZPgwp', 'R0svVWVEZlBlenRBbGs0c1Zla3R2Zz09Ojr2BfVvqo3YxZ6XRdlf/TzV');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE `pm` (
  `id` int(10) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `confirmpass` text NOT NULL,
  `IC` text NOT NULL,
  `is_suspended` int(1) NOT NULL DEFAULT 0,
  `failed_login_attempts` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `user_id`, `surname`, `confirmpass`, `IC`) VALUES
(1, 1191202414, 'max', 'bzhIUkVNNU5UV3hZQUE0ODZ2dzgyUT09Ojos4Cyk0HNgkCoJ8gnDQiJ/', 'cW03TFlqbW1aUWVIOVBVWHl1Q3QyZz09OjqlfBqDzfnvL2187bURlCX2'),
(57, 1191202380, 'maxer', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `surname` (`surname`),
  ADD KEY `confirmpass` (`confirmpass`(768));

--
-- Indexes for table `fo`
--
ALTER TABLE `fo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `surname` (`surname`),
  ADD KEY `confirmpass` (`confirmpass`(768));

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `surname` (`surname`),
  ADD KEY `confirmpass` (`confirmpass`(768));

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `surname` (`surname`),
  ADD KEY `confirmpass` (`confirmpass`(768));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `fo`
--
ALTER TABLE `fo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pm`
--
ALTER TABLE `pm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
