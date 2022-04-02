-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 02:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salary_management_system`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getdeptinfo` (IN `dept` VARCHAR(20))  BEGIN
SELECT employee_id,first_name,last_name,salary,department
FROM employee_information
WHERE department=dept;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getempinfo` (IN `eid` INT)  BEGIN
    SELECT * from employee_information WHERE employee_id=eid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Bid` int(11) NOT NULL,
  `Baddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Bid`, `Baddress`) VALUES
(1, 'HKS Layout');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `employee_id` varchar(80) NOT NULL,
  `department` varchar(80) NOT NULL,
  `role` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`employee_id`, `department`, `role`) VALUES
('001', 'Research', 'Employee'),
('002', 'Sales', 'Employee'),
('003', 'Marketing', 'Employee'),
('004', 'Finance', 'Employee'),
('005', 'Marketing', 'Employee'),
('006', 'Sales', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `employee_accounts`
--

CREATE TABLE `employee_accounts` (
  `employee_id` varchar(80) NOT NULL,
  `role` varchar(20) NOT NULL,
  `bank_acc_no` varchar(100) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `pf_acc_no` int(11) NOT NULL,
  `bank_type` varchar(20) NOT NULL,
  `emp_share` int(11) NOT NULL,
  `org_share` int(11) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_accounts`
--

INSERT INTO `employee_accounts` (`employee_id`, `role`, `bank_acc_no`, `bank_name`, `pf_acc_no`, `bank_type`, `emp_share`, `org_share`, `ts`) VALUES
('001', 'Employee', '365765736756', 'ICICI', 2334, 'Savings', 12, 12, '2022-01-21 13:54:30'),
('002', 'Employee', '9687956784556', 'BOI', 2528, 'Savings', 12, 12, '2022-01-21 13:56:54'),
('003', 'Employee', '78988699986867', 'SBI', 2556, 'Savings', 12, 12, '2022-01-21 14:24:24'),
('004', 'Employee', '74658765737', 'HDFC', 2887, 'Savings', 12, 12, '2022-01-21 13:48:09'),
('005', 'Employee', '85349033339548', 'AXIS', 2345, 'Savings', 12, 12, '2022-01-22 11:23:22'),
('006', 'Employee', '9674890056945', 'ICICI', 2999, 'Savings', 12, 12, '2022-01-22 11:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `employee_id` varchar(80) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `department` varchar(120) NOT NULL,
  `experience` int(10) NOT NULL,
  `salary` int(11) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(120) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `first_name`, `last_name`, `gender`, `department`, `experience`, `salary`, `age`, `address`, `email`, `mobile`, `country`, `ts`) VALUES
('001', 'Rahul', 'Kumar', 'Male', 'Research', 5, 30000, 30, 'Attiguppe', 'kumar@gmail.com', '9987999876', 'INDIA', '2022-01-21 13:53:53'),
('002', 'Rahul', 'Sharma', 'Male', 'Sales', 6, 45000, 35, 'RR Nagar', 'sharmarahul@yahoo.com', '9899888899', 'INDIA', '2022-01-21 13:55:35'),
('003', 'John', 'Smith', 'Male', 'Marketing', 10, 50000, 40, 'Vijayanagar', 'johnsmith@gmail.com', '9878678798', 'INDIA', '2022-01-21 14:23:51'),
('004', 'Vinod', 'Singh', 'Male', 'Finance', 12, 49000, 38, 'kengeri', 'vsingh@gmail.com', '9978779987', 'INDIA', '2022-01-21 13:47:49'),
('005', 'Ravi', 'Kishan', 'Male', 'Marketing', 7, 46000, 37, 'Hampinagar', 'rkishan@hotmail.com', '8790675897', 'INDIA', '2022-01-22 11:23:00'),
('006', 'Virat', 'Singh', 'Male', 'Sales', 4, 35000, 26, 'RR Nagar', 'viratsingh@gmail.com', '9876987098', 'INDIA', '2022-01-22 11:30:19');

--
-- Triggers `employee_information`
--
DELIMITER $$
CREATE TRIGGER `salary_save` AFTER INSERT ON `employee_information` FOR EACH ROW BEGIN
insert into salary values(NEW.employee_id,NEW.first_name,NEW.last_name,NEW.salary,NEW.salary*0.4,NEW.salary*0.3,NEW.salary*0.10,NEW.salary*0.10,New.salary*0.10);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `employee_id` varchar(80) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `salary` int(11) NOT NULL,
  `basic` int(11) NOT NULL,
  `hra` int(11) NOT NULL,
  `conv` int(11) NOT NULL,
  `ma` int(11) NOT NULL,
  `oa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`employee_id`, `first_name`, `last_name`, `salary`, `basic`, `hra`, `conv`, `ma`, `oa`) VALUES
('001', 'Rahul', 'Kumar', 30000, 12000, 9000, 3000, 3000, 3000),
('002', 'Rahul', 'Sharma', 45000, 18000, 13500, 4500, 4500, 4500),
('003', 'John', 'Smith', 50000, 20000, 15000, 5000, 5000, 5000),
('004', 'Vinod', 'Singh', 49000, 19600, 14700, 4900, 4900, 4900),
('005', 'Ravi', 'Kishan', 46000, 18400, 13800, 4600, 4600, 4600),
('006', 'Virat', 'Singh', 35000, 14000, 10500, 3500, 3500, 35000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_accounts`
--
ALTER TABLE `employee_accounts`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `Bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_accounts`
--
ALTER TABLE `employee_accounts`
  ADD CONSTRAINT `employee_accounts_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_information` (`employee_id`) ON DELETE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_information` (`employee_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
