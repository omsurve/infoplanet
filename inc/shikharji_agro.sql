-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 10:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shikharji_agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `share_holders`
--

CREATE TABLE `share_holders` (
  `share_holder_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `dob` date NOT NULL,
  `age_on_today` int(11) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `adhar_card_no` bigint(20) UNSIGNED NOT NULL,
  `pan_card_no` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `taluka` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `pincode` int(10) UNSIGNED NOT NULL,
  `mobile_no` bigint(20) UNSIGNED NOT NULL,
  `alt_mobile_no` bigint(20) UNSIGNED DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `type_of_shares` varchar(50) NOT NULL,
  `registration_fees` decimal(10,2) NOT NULL,
  `no_of_shares` int(11) NOT NULL,
  `rate_of_share` decimal(10,2) NOT NULL,
  `amount_for_shares` decimal(10,2) NOT NULL,
  `share_purchase_date` date NOT NULL,
  `share_no_from` int(11) NOT NULL,
  `share_no_to` int(11) NOT NULL,
  `nominee_name` varchar(150) DEFAULT NULL,
  `nominee_dob` date DEFAULT NULL,
  `nominee_address` varchar(200) DEFAULT NULL,
  `nominee_mobile_no` bigint(20) UNSIGNED DEFAULT NULL,
  `nominee_relation` varchar(50) DEFAULT NULL,
  `account_name` varchar(100) DEFAULT NULL,
  `account_no` varchar(50) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `ifsc_code` varchar(20) DEFAULT NULL,
  `micr_code` varchar(20) DEFAULT NULL,
  `inserted_by` int(10) UNSIGNED NOT NULL,
  `inserted_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_blocked` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `share_holders`
--

INSERT INTO `share_holders` (`share_holder_id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `age_on_today`, `occupation`, `nationality`, `adhar_card_no`, `pan_card_no`, `state`, `district`, `taluka`, `village`, `landmark`, `pincode`, `mobile_no`, `alt_mobile_no`, `email_id`, `type_of_shares`, `registration_fees`, `no_of_shares`, `rate_of_share`, `amount_for_shares`, `share_purchase_date`, `share_no_from`, `share_no_to`, `nominee_name`, `nominee_dob`, `nominee_address`, `nominee_mobile_no`, `nominee_relation`, `account_name`, `account_no`, `bank_name`, `branch`, `ifsc_code`, `micr_code`, `inserted_by`, `inserted_on`, `updated_by`, `updated_on`, `is_blocked`) VALUES
(1, '', '', '', '', '0000-00-00', 0, '', '', 0, '', '', '', '', '', '', 0, 0, 0, '', 'Permanent', '0.00', 0, '0.00', '0.00', '0000-00-00', 0, 0, '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 1, '2023-03-15 10:13:37', 1, '2023-03-15 10:13:37', 0),
(2, 'Prasad', 'Chandrakant', 'Neve', '', '2023-03-15', 15, 'demo', 'Indian', 123456790, '2255336', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 'demo', 425001, 918275331362, 0, 'prasadneve810@gmail.com', 'Permanent', '100.00', 10, '11.00', '12.00', '0000-00-00', 14, 15, '', '0000-00-00', 'PLOT NO 8', 0, '', 'Prasad Neve', '341602010', 'UBI', 'Jalgaon', 'UBIN1234567', '225566332', 1, '2023-03-15 12:26:17', 1, '2023-03-15 12:26:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pin` varchar(32) NOT NULL,
  `access` text NOT NULL,
  `is_blocked` int(2) NOT NULL DEFAULT 0,
  `inserted_by` int(5) NOT NULL,
  `inserted_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(5) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `mobile_no`, `email_id`, `type`, `password`, `pin`, `access`, `is_blocked`, `inserted_by`, `inserted_on`, `updated_by`, `updated_on`) VALUES
(1, 'Prasad Neveee', '8275331362', 'info@softanic.in', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 1, 1, '2023-03-13 14:46:44', 0, '2023-03-14 09:39:21'),
(2, 'prasadneve810@gmail.com', '111', '111', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 0, 0, '2023-03-14 08:10:29', 0, '2023-03-14 08:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `dob` date NOT NULL,
  `aadhar_card_no` varchar(12) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `organization_type` varchar(50) NOT NULL,
  `gstin` varchar(15) NOT NULL,
  `pan_card_no` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `taluka` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `alt_mobile_no` varchar(10) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL,
  `nominee_name` varchar(255) NOT NULL,
  `nominee_dob` date NOT NULL,
  `nominee_address` varchar(255) DEFAULT NULL,
  `nominee_mobile_no` varchar(10) DEFAULT NULL,
  `nominee_relation` varchar(50) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `ifsc_code` varchar(11) NOT NULL,
  `micr_code` varchar(9) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `aadhar_card_photo` varchar(255) NOT NULL,
  `pan_card_photo` varchar(255) NOT NULL,
  `gst_certificate` varchar(255) DEFAULT NULL,
  `shop_act_certificate` varchar(255) DEFAULT NULL,
  `cancelled_cheque` varchar(255) DEFAULT NULL,
  `inserted_by` int(11) NOT NULL,
  `inserted_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_blocked` tinyint(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `share_holders`
--
ALTER TABLE `share_holders`
  ADD PRIMARY KEY (`share_holder_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `share_holders`
--
ALTER TABLE `share_holders`
  MODIFY `share_holder_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
