-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2019 at 10:28 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `name`, `created_at`) VALUES
(1, 'Available', '2019-09-11 07:03:27'),
(2, 'Unavailable', '2019-09-11 07:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text,
  `country` varchar(80) NOT NULL,
  `state` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `created_by` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address_line_1`, `address_line_2`, `country`, `state`, `city`, `contact`, `created_by`, `status`) VALUES
(1, 'Agrabad Branch', 'sheikh mujib road', ' ', 'Bangladesh', 'Chittagong', 'chittagong', '01780410319', '2019-09-09 16:07:48', 1),
(3, 'Muradpur', 'test address line 1', 'test address line 2', 'Bangladesh', 'Chittagong', 'baijid', '01834776137', '2019-09-09 18:34:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `breeding_status`
--

CREATE TABLE `breeding_status` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breeding_status`
--

INSERT INTO `breeding_status` (`id`, `name`, `created_at`) VALUES
(1, 'Holstein', '2019-09-11 07:06:53'),
(2, 'Jersy', '2019-09-11 07:06:53'),
(3, 'Others', '2019-09-11 07:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `created_at`) VALUES
(1, 'White', '2019-09-11 07:04:29'),
(2, 'Black-White', '2019-09-11 07:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `cows`
--

CREATE TABLE `cows` (
  `cow_id` varchar(80) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `shed_id` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `availability` int(11) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `color` int(11) NOT NULL,
  `breeding_status` int(11) NOT NULL,
  `breeding_percentage` varchar(80) NOT NULL,
  `vendor_contact` varchar(20) NOT NULL,
  `paternal_history` int(11) NOT NULL,
  `maternal_history` int(11) NOT NULL,
  `expected_sale_price` varchar(20) NOT NULL,
  `estimated_sale_date` varchar(30) NOT NULL,
  `image` varchar(80) NOT NULL,
  `supplier` varchar(80) DEFAULT NULL,
  `purchase_date` varchar(30) DEFAULT NULL,
  `purchase_place` varchar(80) DEFAULT NULL,
  `purchase_price` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cows`
--

INSERT INTO `cows` (`cow_id`, `branch_id`, `shed_id`, `gender`, `type`, `status`, `availability`, `weight`, `dob`, `color`, `breeding_status`, `breeding_percentage`, `vendor_contact`, `paternal_history`, `maternal_history`, `expected_sale_price`, `estimated_sale_date`, `image`, `supplier`, `purchase_date`, `purchase_place`, `purchase_price`, `created_at`) VALUES
('1001', 1, 1, 2, 1, 2, 2, '234', '2019-09-26', 1, 1, '12', '1234567890', 1234, 2, '22222', '2019-09-27', './cows/download.jpeg', NULL, NULL, NULL, NULL, '2019-09-26 16:37:34'),
('1002', 1, 1, 1, 2, 1, 1, '200', '01/12/2018', 2, 1, '10', '01834776137', 1223, 1001, '25000000', '01/02/2020', './cows/1_QOS8cNI-A61sKwLJ8Nf8Iw.png', NULL, NULL, NULL, NULL, '2019-09-28 17:12:22'),
('1223', 1, 4, 1, 1, 2, 2, '234', '24/09/2019', 1, 2, '3', '01834776137', 8, 1, '25000000', '20/08/2019', './cows/download.jpeg', NULL, NULL, NULL, NULL, '2019-09-26 07:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `deworming`
--

CREATE TABLE `deworming` (
  `id` int(11) NOT NULL,
  `cow_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `comments` text NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deworming`
--

INSERT INTO `deworming` (`id`, `cow_id`, `medicine_id`, `quantity`, `comments`, `created_at`) VALUES
(5, 1001, 1, '5', 'adfas', '30-09-2019'),
(6, 1002, 2, '4', 'dafadsf', '30-09-2019'),
(7, 1001, 0, '4', 'afasd', '01-10-2019'),
(8, 1002, 0, '5', 'asdfasdf', '01-10-2019');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `type` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `type`, `comment`, `created_at`) VALUES
(1, 'Test Name', '2', 'test comment', '2019-09-09 19:13:31'),
(2, 'Disease4', '2', 'asfasdfa', '2019-09-30 18:31:57'),
(3, 'Disease2', '3', 'adsfas', '2019-09-30 18:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `diseas_type`
--

CREATE TABLE `diseas_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseas_type`
--

INSERT INTO `diseas_type` (`id`, `name`) VALUES
(1, 'skin'),
(2, 'metabolic'),
(3, 'enteric'),
(4, 'reproductive'),
(5, 'respiratory'),
(6, 'udder'),
(7, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`, `created_at`) VALUES
(1, 'Male', '2019-09-11 06:43:56'),
(2, 'Female', '2019-09-11 06:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `heating`
--

CREATE TABLE `heating` (
  `id` int(11) NOT NULL,
  `cow_id` int(11) NOT NULL,
  `inHeat` tinyint(1) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heating`
--

INSERT INTO `heating` (`id`, `cow_id`, `inHeat`, `created_at`) VALUES
(1, 1001, 1, '30-09-2019'),
(2, 1002, 0, '30-09-2019');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `quantity` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `quantity`, `brand`, `created_at`) VALUES
(1, 'Filmet  40 mg', 4, 'square', '2019-09-28 19:39:54'),
(2, 'Cosec 40 mg', 4, 'ACI', '2019-09-28 19:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy`
--

CREATE TABLE `pregnancy` (
  `id` int(11) NOT NULL,
  `cow_id` int(11) NOT NULL,
  `isPregnant` tinyint(1) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnancy`
--

INSERT INTO `pregnancy` (`id`, `cow_id`, `isPregnant`, `created_at`) VALUES
(1, 1001, 1, '30-09-2019'),
(2, 1002, 0, '30-09-2019');

-- --------------------------------------------------------

--
-- Table structure for table `sheds`
--

CREATE TABLE `sheds` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sheds`
--

INSERT INTO `sheds` (`id`, `name`, `branch_id`) VALUES
(1, 'East Shed', 1),
(2, 'West Shed', 3),
(4, 'West Shed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sickness`
--

CREATE TABLE `sickness` (
  `id` int(11) NOT NULL,
  `cow_id` int(11) NOT NULL,
  `isSick` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sickness`
--

INSERT INTO `sickness` (`id`, `cow_id`, `isSick`, `description`, `created_at`) VALUES
(1, 1001, 0, 'asdfas', '02-10-2019'),
(2, 1001, 1, 'asdfa', '05-09-2019'),
(3, 1002, 0, 'asdfsdf', '05-09-2019'),
(4, 1001, 1, 'asdfasdf', '06-09-2019');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`) VALUES
(1, 'Active', '2019-09-11 07:01:15'),
(2, 'Sold', '2019-09-11 07:01:15'),
(3, 'Dead', '2019-09-11 07:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `comments` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact`, `address`, `comments`, `created_at`) VALUES
(1, 'kuddus', '01834776137', 'asdfas', '', '2019-10-01 18:15:15'),
(2, 'mak', '3456', 'asdfa', '', '2019-10-01 18:15:15'),
(3, 'kusum', '01834776137', 'asdfas', '', '2019-10-01 18:20:35'),
(11, 'asdf', 'asdf', 'asdf', 'asdf', '2019-10-01 19:14:30'),
(12, 'adsf', 'asdf', 'asdf', 'sadf', '2019-10-01 19:14:37'),
(13, 'asdfa', 'asdf', 'asdf', 'sadf', '2019-10-01 19:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `cow_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `tests` varchar(80) DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `doctor_name` varchar(80) DEFAULT NULL,
  `doctor_contact` varchar(20) DEFAULT NULL,
  `doctor_visit` int(11) NOT NULL,
  `remarks` text,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `cow_id`, `disease_id`, `tests`, `medicine_id`, `quantity`, `doctor_name`, `doctor_contact`, `doctor_visit`, `remarks`, `created_at`) VALUES
(7, 1001, 3, 'adsf', 1, 4, 'asdf', 'asd', 4, 'asd', '01-10-2019'),
(8, 1002, 2, 'asdf', 2, 5, 'dasf', 'adsf', 4, 'adsf', '01-10-2019'),
(9, 1001, 2, '', 0, 0, '', '', 4, '', '06-11-2019'),
(10, 1002, 3, '', 0, 0, '', '', 4, '', '06-11-2019');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `created_at`) VALUES
(1, 'Milking', '2019-09-11 06:45:25'),
(2, 'Fattening', '2019-09-11 06:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `alloted_branch` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `image` varchar(80) DEFAULT NULL,
  `staus` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `alloted_branch`, `email`, `password`, `image`, `staus`, `created_at`) VALUES
(3, 'john', 'admin', '1,2,3', 'john@gmail.co', '123456', NULL, 0, '2019-09-07 06:22:26'),
(4, 'mak ', 'admin', '1,2,3', 'mak@gamil.com', '123456', './uploads/1_QOS8cNI-A61sKwLJ8Nf8Iw.png', 0, '2019-09-07 07:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `id` int(11) NOT NULL,
  `cow_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `comments` text NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`id`, `cow_id`, `medicine_id`, `quantity`, `comments`, `created_at`) VALUES
(1, 1001, 1, '4', 'adsfsad', '01-10-2019'),
(2, 1002, 2, '4', 'adfasdf', '01-10-2019'),
(3, 1001, 1, '4', 'adsfsad', '02-10-2019'),
(4, 1002, 1, '4', 'adfasdf', '02-10-2019'),
(5, 1001, 1, '4', 'adsfsad', '02-10-2019'),
(6, 1002, 1, '4', 'adfasdf', '02-10-2019'),
(7, 1001, 1, '4', 'adsfsad', '02-10-2019'),
(8, 1002, 1, '4', 'adfasdf', '02-10-2019');

-- --------------------------------------------------------

--
-- Table structure for table `weighing`
--

CREATE TABLE `weighing` (
  `id` int(11) NOT NULL,
  `cow_id` int(11) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `created_at` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weighing`
--

INSERT INTO `weighing` (`id`, `cow_id`, `weight`, `created_at`) VALUES
(1, 1001, '44', '29-09-2019'),
(2, 1002, '55', '29-09-2019'),
(3, 1001, '44', '30-09-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breeding_status`
--
ALTER TABLE `breeding_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cows`
--
ALTER TABLE `cows`
  ADD UNIQUE KEY `id` (`cow_id`),
  ADD KEY `id_2` (`cow_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `deworming`
--
ALTER TABLE `deworming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseas_type`
--
ALTER TABLE `diseas_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heating`
--
ALTER TABLE `heating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pregnancy`
--
ALTER TABLE `pregnancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sheds`
--
ALTER TABLE `sheds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `sickness`
--
ALTER TABLE `sickness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weighing`
--
ALTER TABLE `weighing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cow_id` (`cow_id`),
  ADD KEY `cow_id_2` (`cow_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `breeding_status`
--
ALTER TABLE `breeding_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `deworming`
--
ALTER TABLE `deworming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `diseas_type`
--
ALTER TABLE `diseas_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `heating`
--
ALTER TABLE `heating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pregnancy`
--
ALTER TABLE `pregnancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sheds`
--
ALTER TABLE `sheds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sickness`
--
ALTER TABLE `sickness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `weighing`
--
ALTER TABLE `weighing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cows`
--
ALTER TABLE `cows`
  ADD CONSTRAINT `cows_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sheds`
--
ALTER TABLE `sheds`
  ADD CONSTRAINT `sheds_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
