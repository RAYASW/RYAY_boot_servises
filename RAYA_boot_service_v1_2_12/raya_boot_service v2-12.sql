-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 09:44 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raya_boot_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval_req`
--

CREATE TABLE `approval_req` (
  `index` int(11) NOT NULL,
  `Request_No` varchar(30) CHARACTER SET latin1 NOT NULL,
  `position` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Grade` varchar(30) CHARACTER SET latin1 NOT NULL,
  `manager` varchar(30) CHARACTER SET latin1 NOT NULL,
  `dept` varchar(30) CHARACTER SET latin1 NOT NULL,
  `hire_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Replacement` varchar(30) CHARACTER SET latin1 NOT NULL,
  `New Position` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Part-time` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Temporary` varchar(30) CHARACTER SET latin1 NOT NULL,
  `replace_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `salary` varchar(30) CHARACTER SET latin1 NOT NULL,
  `fixed_perc` varchar(30) CHARACTER SET latin1 NOT NULL,
  `fixed_le` varchar(30) CHARACTER SET latin1 NOT NULL,
  `variable_perc` varchar(30) CHARACTER SET latin1 NOT NULL,
  `variable_le` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exchange_rate`
--

CREATE TABLE `exchange_rate` (
  `index` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exchange_rate`
--

INSERT INTO `exchange_rate` (`index`, `Email`) VALUES
(1, 'Basma_fahmy@rayacorp.com'),
(2, 'Basma_fahmy@rayacorp.com'),
(3, 'ahmed_aayoyb@rayacorp.com'),
(4, 'Basma_fahmy@rayacorp.com'),
(5, 'Basma_fahmy@rayacorp.com'),
(6, 'Basma_fahmy@rayacorp.com'),
(7, 'Basma_fahmy@rayacorp.com'),
(8, 'Basma_fahmy@rayacorp.com'),
(9, 'ahmed.boot2016@gmail.com'),
(10, 'Basma_fahmy@rayacorp.com'),
(11, 'ahmed.boot2016@gmail.com'),
(12, 'ahmed_aayoyb@rayacorp.com'),
(13, 'ahmed.boot2016@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `index` int(11) NOT NULL,
  `Emp_ID` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Emp_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Total_expenses` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploadfile` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hiring_req`
--

CREATE TABLE `hiring_req` (
  `index` int(11) NOT NULL,
  `v_position` varchar(255) NOT NULL,
  `no_vac` varchar(30) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `emp_type` varchar(30) NOT NULL,
  `ann_plan` varchar(30) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `join_date` varchar(30) NOT NULL,
  `salary_range` varchar(30) NOT NULL,
  `years_exp` varchar(30) NOT NULL,
  `req_exp` varchar(255) NOT NULL,
  `uploadfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiring_req`
--

INSERT INTO `hiring_req` (`index`, `v_position`, `no_vac`, `loc`, `emp_type`, `ann_plan`, `reason`, `join_date`, `salary_range`, `years_exp`, `req_exp`, `uploadfile`) VALUES
(1, 'Administration Assistant', '1', 'all', 'Trainee', '1', '', '1', '12', '1000', '2', 'afh');

-- --------------------------------------------------------

--
-- Table structure for table `hr_letter`
--

CREATE TABLE `hr_letter` (
  `index` int(11) NOT NULL,
  `Emp_ID` varchar(30) NOT NULL,
  `letter` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_letter`
--

INSERT INTO `hr_letter` (`index`, `Emp_ID`, `letter`, `status`) VALUES
(1, '111111', 'CIB_English_Template', 'Done'),
(2, '523', 'CIB_HR_Letter_Template', 'Done'),
(3, '76055', 'To_whom_may_concern_Template', 'Done'),
(4, '76055', 'CIB_English_Template', 'Done'),
(5, '68646', 'To_whom_may_concern_Template', 'Done'),
(6, '68646', 'Experience_male_English_Template', 'Done'),
(7, '68646', 'To_whom_may_concern_Template', 'Done'),
(8, '76055', 'Embassy_italy_Template', 'Done'),
(9, '76055', 'CIB_HR_Letter_Template', 'Done'),
(10, '76055', 'To_whom_may_concern_Template', 'Done'),
(11, '68646', 'To_whom_may_concern_Template', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_queue`
--

CREATE TABLE `transaction_queue` (
  `index` int(11) NOT NULL,
  `Process_ID` varchar(255) NOT NULL,
  `Record_index` varchar(255) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_queue`
--

INSERT INTO `transaction_queue` (`index`, `Process_ID`, `Record_index`, `Status`) VALUES
(1, '2', '7', 'Done'),
(2, '1', '10', 'Done'),
(3, '1', '11', 'Done'),
(4, '2', '8', 'Done'),
(5, '2', '9', 'Done'),
(6, '2', '10', 'Done'),
(7, '3', '2', 'Done'),
(8, '2', '11', 'Done'),
(9, '2', '12', 'Done'),
(10, '2', '13', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `vacation_form`
--

CREATE TABLE `vacation_form` (
  `index` int(11) NOT NULL,
  `vacation` varchar(255) NOT NULL,
  `From` date NOT NULL,
  `To` date NOT NULL,
  `Telephone` varchar(30) NOT NULL,
  `Other_information` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval_req`
--
ALTER TABLE `approval_req`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `exchange_rate`
--
ALTER TABLE `exchange_rate`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `hiring_req`
--
ALTER TABLE `hiring_req`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `hr_letter`
--
ALTER TABLE `hr_letter`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `transaction_queue`
--
ALTER TABLE `transaction_queue`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `vacation_form`
--
ALTER TABLE `vacation_form`
  ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval_req`
--
ALTER TABLE `approval_req`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exchange_rate`
--
ALTER TABLE `exchange_rate`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hiring_req`
--
ALTER TABLE `hiring_req`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hr_letter`
--
ALTER TABLE `hr_letter`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaction_queue`
--
ALTER TABLE `transaction_queue`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vacation_form`
--
ALTER TABLE `vacation_form`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
