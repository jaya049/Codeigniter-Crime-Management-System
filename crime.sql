-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 01:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_reg_court`
--

CREATE TABLE `case_reg_court` (
  `case_reg_id` int(10) NOT NULL,
  `complainter_name` varchar(20) NOT NULL,
  `complaint` varchar(80) NOT NULL,
  `policestation_name` varchar(30) NOT NULL,
  `district` varchar(20) NOT NULL,
  `cur_date` date NOT NULL,
  `file` varchar(100) NOT NULL,
  `login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `case_tb`
--

CREATE TABLE `case_tb` (
  `complaint_id` int(20) NOT NULL,
  `complainter_name` varchar(30) NOT NULL,
  `complaint` varchar(80) NOT NULL,
  `cur_date` date NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_tb`
--

INSERT INTO `case_tb` (`complaint_id`, `complainter_name`, `complaint`, `cur_date`, `login_id`) VALUES
(5, 'sony finny', 'crime against my neibhour', '2019-02-21', 10),
(6, 'sony finny', 'crime against my neibhour', '2019-02-21', 10);

-- --------------------------------------------------------

--
-- Table structure for table `court_tbl`
--

CREATE TABLE `court_tbl` (
  `court_id` varchar(30) NOT NULL,
  `court_name` varchar(40) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `phone_num` bigint(15) NOT NULL,
  `login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `court_tbl`
--

INSERT INTO `court_tbl` (`court_id`, `court_name`, `district`, `pincode`, `phone_num`, `login_id`) VALUES
('KTM/court/02', 'KTM Sub court', 'Kottayam', '686516', 7560800920, 11),
('TVM/court/01', 'TVM sub court', 'Trivandrum', '768678', 9876543210, 8);

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(15) NOT NULL,
  `password` text NOT NULL,
  `user_type` enum('0','1','2','3') NOT NULL,
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `email`, `mob`, `password`, `user_type`, `status`) VALUES
(1, 'joice@gmail.com', 7560800920, '$2y$10$tmmgYuWlogXy/O6excLfC.Er1cwnPR/OKqHjn.RWbfnemAcJM.5uK', '1', '1'),
(5, 'ktm@gmail.com', 0, '$2y$10$Vd/NRWls3z4zEoAqP23sIuAV/p3tJz7uEYdLJBGYhg9hANaRx5k82', '2', '1'),
(8, 'tvmcourt@gmail.com', 0, '$2y$10$pJVpAfVrB/G7dB1o0IBwcuXw3FzPlWU/qsw/zy1fII4RmfSfSS9nm', '3', '1'),
(9, 'admin@gmail.com', 9876543210, '$2y$10$QJSquLKL6CLmRflJhoMvduMl9n2/nyTDubfKpsM6iMoQb1vVouZzm', '0', '1'),
(10, 'sonykp@gmail.com', 9876543210, '$2y$10$wz3olNVwH3pQc5wlHm6Z0Owmd/aOgRUQ71/Ey.ptKwpm1.IXlaWSO', '1', '1'),
(11, 'ktmcourt@gmail.com', 0, '$2y$10$eJ6nn90jx0KqsfbwwOREg.lcfLr7VSaKRy476YD1EE6Z8DuMkHIya', '3', '1'),
(12, 'ktmpolice1@gmail.com', 0, '$2y$10$pmJ41On4eGoYbJhUlzewBOL9nDIQlI5zRShS5XgcZS8t7LVJspmzm', '2', '1'),
(13, 'jaya040499@gmail.com', 987465123, '$2y$10$hX.9W3EEaogCZvca/ik7hey7rAGxHa/VIGzMQM5/vqlOZh.6Xwt4m', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `poilicestation_tb`
--

CREATE TABLE `poilicestation_tb` (
  `station_id` varchar(15) NOT NULL,
  `station_name` varchar(30) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone_num` bigint(15) NOT NULL,
  `login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poilicestation_tb`
--

INSERT INTO `poilicestation_tb` (`station_id`, `station_name`, `district`, `pincode`, `phone_num`, `login_id`) VALUES
('KTM/police/01', 'KTM district station', 'Kottayam', 686516, 9876543210, 12),
('KTMP/01', 'Janamaithri ', 'Kottayam', 686516, 9867093290, 5);

-- --------------------------------------------------------

--
-- Table structure for table `public_reg`
--

CREATE TABLE `public_reg` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `mob` bigint(15) NOT NULL,
  `login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `public_reg`
--

INSERT INTO `public_reg` (`id`, `name`, `gender`, `age`, `address`, `pincode`, `district`, `mob`, `login_id`) VALUES
(1, 'joice', 'female', 25, 'johome', 686516, 'Kottayam', 7560800920, 1),
(3, 'sony finny', 'female', 24, 'sonyhome', 686516, 'Kottayam', 9876543210, 10),
(4, 'jaya', 'female', 23, 'valavinchira ', 689572, 'Wayanad', 987465123, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_reg_court`
--
ALTER TABLE `case_reg_court`
  ADD PRIMARY KEY (`case_reg_id`);

--
-- Indexes for table `case_tb`
--
ALTER TABLE `case_tb`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `court_tbl`
--
ALTER TABLE `court_tbl`
  ADD PRIMARY KEY (`court_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `poilicestation_tb`
--
ALTER TABLE `poilicestation_tb`
  ADD PRIMARY KEY (`station_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `public_reg`
--
ALTER TABLE `public_reg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_reg_court`
--
ALTER TABLE `case_reg_court`
  MODIFY `case_reg_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `case_tb`
--
ALTER TABLE `case_tb`
  MODIFY `complaint_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `public_reg`
--
ALTER TABLE `public_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `court_tbl`
--
ALTER TABLE `court_tbl`
  ADD CONSTRAINT `court_tbl_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login_tb` (`login_id`);

--
-- Constraints for table `poilicestation_tb`
--
ALTER TABLE `poilicestation_tb`
  ADD CONSTRAINT `poilicestation_tb_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login_tb` (`login_id`);

--
-- Constraints for table `public_reg`
--
ALTER TABLE `public_reg`
  ADD CONSTRAINT `public_reg_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login_tb` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
