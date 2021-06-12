-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 11:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kec1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_security_details`
--

CREATE TABLE `admin_security_details` (
  `Aemail` varchar(40) NOT NULL,
  `AOTP` int(6) NOT NULL,
  `Averification` int(3) NOT NULL,
  `AOTPdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_security_details`
--

INSERT INTO `admin_security_details` (`Aemail`, `AOTP`, `Averification`, `AOTPdate`) VALUES
('nikhilarya95@gmail.com', 9328648, 0, '2020-11-06 23:02:20'),
('surajkumar330@gmail.com', 6462688, 0, '2020-11-07 23:18:52'),
('surajkumar330@gmail.com', 1289191, 0, '2020-11-07 23:23:30'),
('surajkumar30@gmail.com', 2900493, 0, '2020-11-29 23:02:54'),
('sujikumar440@gmail.com', 2319332, 0, '2020-11-30 09:45:59'),
('nikhilarya95@gmail.com', 8973980, 0, '2020-12-15 21:54:25'),
('nikhilarya95@gmail.com', 3165750, 0, '2020-12-15 21:59:26'),
('nikhilarya95@gmail.com', 6178313, 0, '2020-12-15 21:59:55'),
('nikhilarya95@gmail.com', 1699236, 0, '2020-12-15 22:01:41'),
('nikhilarya95@gmail.com', 8646868, 0, '2020-12-15 22:09:50'),
('nikhilarya95@gmail.com', 8464044, 0, '2020-12-15 23:11:35'),
('nikhilarya95@gmail.com', 3312571, 0, '2020-12-15 23:13:33'),
('subhash@gmail.com', 3503048, 0, '2020-12-15 23:19:31'),
('subhash@gmail.com', 7456583, 0, '2020-12-15 23:22:26'),
('subhash@gmail.com', 9535594, 0, '2020-12-15 23:31:03'),
('subhash@gmail.com', 4933481, 0, '2020-12-15 23:31:14'),
('subhash@gmail.com', 5958757, 0, '2020-12-15 23:31:51'),
('subhash@gmail.com', 3362127, 0, '2020-12-15 23:45:47'),
('subhash@gmail.com', 1016021, 0, '2020-12-15 23:49:27'),
('subhash@gmail.com', 9175452, 0, '2020-12-15 23:54:09'),
('subhash@gmail.com', 8493958, 0, '2020-12-16 00:00:10'),
('subhash@gmail.com', 4771388, 0, '2020-12-19 15:24:31'),
('subhash@gmail.com', 5500124, 0, '2020-12-19 15:29:41'),
('nikhilarya95@gmail.com', 9884009, 0, '2020-12-19 15:33:17'),
('subhash@gmail.com', 8418743, 0, '2020-12-19 15:38:55'),
('nikhilarya95@gmail.com', 4428017, 0, '2020-12-19 15:48:33'),
('nikhilarya95@gmail.com', 9750095, 0, '2020-12-19 15:59:09'),
('nikhilarya95@gmail.com', 5316804, 0, '2020-12-19 15:59:37'),
('nikhilarya95@gmail.com', 6300661, 0, '2020-12-20 13:18:17'),
('nikhilarya95@gmail.com', 3623465, 0, '2020-12-20 13:19:02'),
('nikhilarya95@gmail.com', 9755215, 1, '2020-12-20 13:21:24'),
('nikhilarya95@gmail.com', 4189173, 1, '2020-12-20 16:52:43'),
('subhash@gmail.com', 9675346, 1, '2020-12-20 20:42:43'),
('nikhilarya95@gmail.com', 9902852, 1, '2020-12-20 23:29:06'),
('nikhilarya95@gmail.com', 4385670, 1, '2020-12-20 23:35:06'),
('nikhilarya95@gmail.com', 5867878, 0, '2020-12-21 23:12:23'),
('nikhilarya95@gmail.com', 1899557, 0, '2020-12-21 23:13:01'),
('nikhilarya95@gmail.com', 6373535, 1, '2020-12-22 13:44:54'),
('nikhilarya95@gmail.com', 7681602, 1, '2020-12-22 14:55:21'),
('nikhilarya95@gmail.com', 1751050, 1, '2020-12-22 15:15:10'),
('subhash@gmail.com', 6830658, 1, '2020-12-22 15:45:37'),
('subhash@gmail.com', 5478523, 1, '2020-12-22 15:48:29'),
('subhash@gmail.com', 6462350, 1, '2020-12-22 15:48:45'),
('subhash@gmail.com', 6471366, 1, '2020-12-22 15:56:58'),
('nikhilarya95@gmail.com', 8401919, 1, '2020-12-22 17:00:24'),
('nikhilarya95@gmail.com', 8223070, 1, '2020-12-22 17:01:46'),
('nikhilarya95@gmail.com', 3061198, 1, '2020-12-22 17:28:48'),
('nikhilarya95@gmail.com', 8784223, 1, '2020-12-22 18:49:15'),
('nikhilarya95@gmail.com', 4613737, 1, '2020-12-22 18:52:33'),
('nikhilarya95@gmail.com', 5499989, 1, '2020-12-22 18:55:44'),
('nikhilarya95@gmail.com', 6297358, 1, '2020-12-22 19:08:32'),
('nikhilarya95@gmail.com', 7950444, 0, '2020-12-23 21:11:35'),
('nikhilarya95@gmail.com', 1373845, 0, '2020-12-23 21:43:14'),
('nikhilarya95@gmail.com', 928723, 1, '2020-12-23 21:43:40'),
('nikhilarya95@gmail.com', 3326570, 0, '2020-12-23 21:45:23'),
('nikhilarya95@gmail.com', 2009194, 0, '2020-12-23 21:45:56'),
('nikhilarya95@gmail.com', 9423932, 0, '2020-12-23 21:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `grievancesdetails`
--

CREATE TABLE `grievancesdetails` (
  `Uemail` varchar(40) NOT NULL,
  `s_id` int(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `Gid` varchar(15) NOT NULL,
  `comments` varchar(350) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Scategory` varchar(30) NOT NULL,
  `GpostDate` date NOT NULL,
  `Gsolution` varchar(350) NOT NULL,
  `GclosedDate` date NOT NULL,
  `Gstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grievancesdetails`
--

INSERT INTO `grievancesdetails` (`Uemail`, `s_id`, `type`, `Gid`, `comments`, `Category`, `Scategory`, `GpostDate`, `Gsolution`, `GclosedDate`, `Gstatus`) VALUES
('nikhilarya95@gmail.com', 1, '', 'Gid_001', 'i want to play', 'College', 'Physical Edu', '2020-12-09', 'okay', '2020-12-22', 1),
('nikhilarya95@gmail.com', 2, '', 'Gid_002', 'i want to play', 'College', 'Physical Edu', '2020-12-09', 'okay', '2020-12-22', 1),
('nikhilarya95@gmail.com', 3, 'grievance', 'Gid_003', 'i want to play', 'College', 'Physical Edu', '2020-11-07', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 4, 'Grievance', 'Gid_004', 'add some north indian food', 'Department', 'Food Technology', '2020-11-23', 'jai hp', '0000-00-00', 1),
('nikhilarya95@gmail.com', 5, 'Grievance', 'Gid_005', 'add some north indian food', 'Department', 'Food Technology', '2020-11-12', ' 19-12-2020', '0000-00-00', 1),
('suraj@gmail.com', 9, 'Feedback', 'Gid_006', 'ur college is fab sir\r\n', 'Department', 'Computer Application', '2020-12-21', 'yjollllll', '2020-12-21', 1),
('nikhilarya95@gmail.com', 10, 'Grievance', 'Gid_0010', 'ghatiya khana', 'Department', 'Food Technology', '2020-12-21', '', '0000-00-00', 2),
('surajkumar.4aug@gmail.com', 11, 'Grievance', 'Gid_0011', 'please provide us document', 'Department', 'Computer Application', '2020-12-22', '', '0000-00-00', 0),
('surajkumar.4aug@gmail.com', 12, 'Grievance', 'Gid_0012', 'i need some treatement', 'College', 'Dispensary', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 13, 'Grievance', 'Gid_0013', 'stomach pain', 'College', 'Dispensary', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 14, 'Grievance', 'Gid_0014', 'stomach pain', 'College', 'Dispensary', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 15, 'Grievance', 'Gid_0015', 'kuch kariye kuch kariye', 'College', 'General', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 16, 'Grievance', 'Gid_0016', 'kuch kariye kuch kariye', 'College', 'General', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 17, 'Grievance', 'Gid_0017', 'very tough', 'Department', 'Mathematics', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 18, 'Grievance', 'Gid_0018', 'naam hi pata nahi hai', 'College', 'Kongu CRS', '2020-12-22', 'okay', '2020-12-22', 1),
('nikhilarya95@gmail.com', 19, 'Grievance', 'Gid_0019', 'naam hi pata nahi hai', 'College', 'Kongu CRS', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 20, 'Grievance', 'Gid_0020', 'naam hi pata nahi hai', 'College', 'Kongu CRS', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 21, 'Grievance', 'Gid_0021', 'naam hi pata nahi hai', 'College', 'Kongu CRS', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 22, 'Grievance', 'Gid_0022', 'naam hi pata nahi hai', 'College', 'Kongu CRS', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 23, 'Grievance', 'Gid_0023', 'naam hi pata nahi hai', 'College', 'Kongu CRS', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 24, 'Grievance', 'Gid_0024', 'need football', 'College', 'Physical Edu', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 25, 'Grievance', 'Gid_0025', 'need football', 'College', 'Physical Edu', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 26, 'Grievance', 'Gid_0026', 'bus nahi hai\r\n', 'College', 'Transport Office', '2020-12-22', '', '0000-00-00', 0),
('nikhilarya95@gmail.com', 27, 'Grievance', 'Gid_0027', 'bus nahi hai\r\n', 'College', 'Transport Office', '2020-12-22', '', '0000-00-00', 0),
('surajkumar.4aug@gmail.com', 28, 'Grievance', 'Gid_0028', 'i need material of python', 'Department', 'Dispensary', '2020-12-23', '', '0000-00-00', 0),
('surajkumar.4aug@gmail.com', 29, 'Grievance', 'Gid_0029', 'i need python material', 'Department', 'Computer Application', '2020-12-23', '', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `headdetalis`
--

CREATE TABLE `headdetalis` (
  `Authorisedpt` varchar(25) NOT NULL,
  `Aid` varchar(15) NOT NULL,
  `Aname` varchar(30) NOT NULL,
  `Amobile` varchar(10) NOT NULL,
  `Aemail` varchar(40) NOT NULL,
  `Apassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headdetalis`
--

INSERT INTO `headdetalis` (`Authorisedpt`, `Aid`, `Aname`, `Amobile`, `Aemail`, `Apassword`) VALUES
('Food Technology', '188mcr2112', 'neha Kumari', '7991151113', 'nehakumari@gmail.com', 'Neha@999'),
('Computer Application', '188mcr2', 'Nikhil Kumar', '9113110942', 'nikhilarya95@gmail.com', 'Nikhil@95'),
('Principal', '18mmm011', 'subhash singh', '9988776655', 'subhash@gmail.com', '9211@SKrs'),
('Libarian', '188mrc221', 'suraj singh', '9112110941', 'sujikumar440@gmail.com', 'nikhil95'),
('Management Studies', '188mcr2019', 'suraj Kumar', '7991151117', 'surajkumar30@gmail.com', 'Suraj$001'),
('English', '18mcr012', 'surji kumar', '9876854452', 'surajkumar330@gmail.com', 'surji@330');

-- --------------------------------------------------------

--
-- Table structure for table `userotp`
--

CREATE TABLE `userotp` (
  `Uemail` varchar(40) NOT NULL,
  `UOTP` varchar(10) NOT NULL,
  `Uverification` int(2) NOT NULL,
  `UOTPdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userotp`
--

INSERT INTO `userotp` (`Uemail`, `UOTP`, `Uverification`, `UOTPdate`) VALUES
('nikhilarya95@gmail.com', '289400', 1, '2020-11-06 21:22:11'),
('nikhilarya95@gmail.com', '351722', 1, '2020-11-06 21:30:27'),
('nikhilarya95@gmail.com', '686241', 1, '2020-11-06 21:52:10'),
('nikhilarya95@gmail.com', '659546', 1, '2020-11-06 21:57:55'),
('nikhilarya95@gmail.com', '763411', 1, '2020-11-06 22:05:15'),
('nikhilarya95@gmail.com', '226860', 0, '2020-11-29 21:08:19'),
('nikhilarya95@gmail.com', '201976', 1, '2020-11-29 21:12:07'),
('nikhilarya95@gmail.com', '975691', 1, '2020-11-29 22:17:31'),
('nikhilarya95@gmail.com', '145003', 1, '2020-12-03 17:08:38'),
('nikhilarya95@gmail.com', '750682', 1, '2020-12-09 13:36:40'),
('nikhilarya95@gmail.com', '926578', 1, '2020-12-09 13:41:04'),
('nikhilarya95@gmail.com', '399767', 1, '2020-12-09 14:00:33'),
('suraj@gmail.com', '153399', 1, '2020-12-21 15:23:47'),
('nikhilarya95@gmail.com', '280945', 1, '2020-12-21 15:31:59'),
('nikhilarya95@gmail.com', '525072', 0, '2020-12-21 18:43:25'),
('nikhilarya95@gmail.com', '940184', 0, '2020-12-21 18:44:17'),
('nikhilarya95@gmail.com', '188862', 0, '2020-12-21 18:47:22'),
('nikhilarya@gmail.com', '104434', 0, '2020-12-21 18:55:13'),
('nikhilarya95@gmail.com', '869424', 0, '2020-12-21 19:00:12'),
('nikhilarya95@gmail.com', '111359', 0, '2020-12-21 19:24:09'),
('nikhilarya95@gmail.com', '794398', 0, '2020-12-21 19:25:15'),
('nikhilarya95@gmail.com', '292030', 0, '2020-12-21 19:25:24'),
('nikhilarya95@gmail.com', '222910', 0, '2020-12-21 19:27:18'),
('nikhilarya95@gmail.com', '889390', 0, '2020-12-21 19:28:39'),
('nikhilarya95@gmail.com', '496636', 0, '2020-12-21 19:29:08'),
('nikhilarya95@gmail.com', '716649', 0, '2020-12-21 19:29:28'),
('nikhilarya95@gmail.com', '493325', 0, '2020-12-21 19:29:55'),
('nikhilarya95@gmail.com', '930568', 0, '2020-12-21 19:30:23'),
('nikhilarya95@gmail.com', '874309', 0, '2020-12-21 22:01:46'),
('nikhilarya95@gmail.com', '750795', 0, '2020-12-21 22:01:54'),
('nikhilarya95@gmail.com', '618821', 0, '2020-12-21 22:04:05'),
('nikhilarya95@gmail.com', '958440', 0, '2020-12-21 22:04:43'),
('nikhilarya95@gmail.com', '597627', 0, '2020-12-21 22:05:42'),
('nikhilarya95@gmail.com', '104431', 0, '2020-12-21 22:06:01'),
('nikhilarya95@gmail.com', '828353', 0, '2020-12-21 22:16:40'),
('nikhilarya95@gmail.com', '573145', 0, '2020-12-21 22:17:10'),
('nikhilarya95@gmail.com', '201667', 0, '2020-12-21 22:17:18'),
('nikhilarya95@gmail.com', '775014', 0, '2020-12-21 22:17:38'),
('nikhilarya95@gmail.com', '948498', 0, '2020-12-21 22:18:07'),
('nikhilarya95@gmail.com', '217858', 0, '2020-12-21 22:18:21'),
('nikhilarya95@gmail.com', '804154', 0, '2020-12-21 22:20:46'),
('nikhilarya95@gmail.com', '819250', 0, '2020-12-21 22:20:51'),
('nikhilarya95@gmail.com', '191037', 0, '2020-12-21 22:21:04'),
('nikhilarya95@gmail.com', '209438', 0, '2020-12-21 22:21:24'),
('nikhilarya95@gmail.com', '293688', 0, '2020-12-21 22:21:56'),
('nikhilarya95@gmail.com', '434881', 0, '2020-12-21 22:22:09'),
('nikhilarya95@gmail.com', '566528', 0, '2020-12-21 22:23:23'),
('nikhilarya95@gmail.com', '392772', 0, '2020-12-21 22:23:43'),
('nikhilarya95@gmail.com', '648637', 0, '2020-12-21 22:24:28'),
('nikhilarya95@gmail.com', '431233', 0, '2020-12-21 22:26:07'),
('nikhilarya95@gmail.com', '801127', 0, '2020-12-21 22:26:21'),
('nikhilarya95@gmail.com', '329186', 0, '2020-12-21 22:26:39'),
('nikhilarya95@gmail.com', '702156', 0, '2020-12-21 22:26:44'),
('nikhilarya95@gmail.com', '329378', 0, '2020-12-21 22:26:59'),
('nikhilarya95@gmail.com', '143510', 0, '2020-12-21 22:27:06'),
('nikhilarya95@gmail.com', '658331', 0, '2020-12-21 22:27:29'),
('nikhilarya95@gmail.com', '734529', 0, '2020-12-21 22:27:57'),
('nikhilarya95@gmail.com', '672783', 0, '2020-12-21 22:28:21'),
('nikhilarya95@gmail.com', '999791', 0, '2020-12-21 22:28:39'),
('nikhilarya95@gmail.com', '817990', 0, '2020-12-21 22:29:03'),
('nikhilarya95@gmail.com', '652795', 0, '2020-12-21 22:29:22'),
('nikhilarya95@gmail.com', '894863', 0, '2020-12-21 22:29:36'),
('nikhilarya95@gmail.com', '496794', 0, '2020-12-21 22:29:54'),
('nikhilarya95@gmail.com', '662863', 0, '2020-12-21 22:31:49'),
('nikhilarya95@gmail.com', '162283', 0, '2020-12-21 22:34:26'),
('nikhilarya95@gmail.com', '423020', 0, '2020-12-21 22:35:05'),
('nikhilarya95@gmail.com', '505161', 0, '2020-12-21 22:35:18'),
('nikhilarya95@gmail.com', '297680', 0, '2020-12-21 22:35:29'),
('nikhilarya95@gmail.com', '518654', 0, '2020-12-21 22:35:41'),
('nikhilarya95@gmail.com', '259299', 0, '2020-12-21 22:35:50'),
('nikhilarya95@gmail.com', '611665', 0, '2020-12-21 22:36:10'),
('nikhilarya95@gmail.com', '578087', 0, '2020-12-21 22:36:21'),
('nikhilarya95@gmail.com', '649947', 0, '2020-12-21 22:36:29'),
('nikhilarya95@gmail.com', '595875', 0, '2020-12-21 22:36:49'),
('nikhilarya95@gmail.com', '838086', 0, '2020-12-21 22:37:05'),
('nikhilarya95@gmail.com', '316623', 0, '2020-12-21 22:37:12'),
('nikhilarya95@gmail.com', '882877', 0, '2020-12-21 22:38:10'),
('nikhilarya95@gmail.com', '780670', 0, '2020-12-21 22:38:27'),
('nikhilarya95@gmail.com', '651678', 0, '2020-12-21 22:38:44'),
('nikhilarya95@gmail.com', '849791', 0, '2020-12-21 22:39:00'),
('nikhilarya95@gmail.com', '918145', 0, '2020-12-21 22:39:11'),
('nikhilarya95@gmail.com', '400913', 0, '2020-12-21 22:39:51'),
('nikhilarya95@gmail.com', '175426', 0, '2020-12-21 22:40:37'),
('nikhilarya95@gmail.com', '802954', 0, '2020-12-21 22:41:03'),
('nikhilarya95@gmail.com', '736895', 0, '2020-12-21 22:41:54'),
('nikhilarya95@gmail.com', '852979', 0, '2020-12-21 22:42:13'),
('nikhilarya95@gmail.com', '963544', 0, '2020-12-21 23:00:56'),
('nikhilarya95@gmail.com', '806435', 0, '2020-12-21 23:01:15'),
('nikhilarya95@gmail.com', '568013', 0, '2020-12-21 23:01:21'),
('nikhilarya95@gmail.com', '693018', 0, '2020-12-21 23:01:55'),
('nikhilarya95@gmail.com', '839198', 0, '2020-12-21 23:02:17'),
('nikhilarya95@gmail.com', '707716', 0, '2020-12-21 23:02:39'),
('nikhilarya95@gmail.com', '111808', 0, '2020-12-21 23:03:12'),
('nikhilarya95@gmail.com', '372282', 0, '2020-12-21 23:03:29'),
('nikhilarya95@gmail.com', '352494', 0, '2020-12-21 23:03:56'),
('nikhilarya95@gmail.com', '602887', 0, '2020-12-21 23:04:47'),
('nikhilarya95@gmail.com', '827926', 0, '2020-12-21 23:06:02'),
('nikhilarya95@gmail.com', '342192', 0, '2020-12-21 23:06:39'),
('nikhilarya95@gmail.com', '220597', 0, '2020-12-21 23:08:09'),
('nikhilarya95@gmail.com', '814964', 0, '2020-12-21 23:09:00'),
('nikhilarya95@gmail.com', '790297', 0, '2020-12-21 23:09:27'),
('nikhilarya95@gmail.com', '159249', 0, '2020-12-21 23:10:22'),
('nikhilarya95@gmail.com', '319470', 0, '2020-12-21 23:17:21'),
('nikhilarya95@gmail.com', '983433', 0, '2020-12-21 23:20:17'),
('nikhilarya95@gmail.com', '955125', 0, '2020-12-21 23:20:35'),
('nikhilarya95@gmail.com', '482385', 0, '2020-12-21 23:20:48'),
('nikhilarya95@gmail.com', '412514', 0, '2020-12-21 23:20:55'),
('nikhilarya95@gmail.com', '509803', 0, '2020-12-21 23:21:13'),
('nikhilarya95@gmail.com', '327263', 0, '2020-12-21 23:22:22'),
('nikhilarya95@gmail.com', '496218', 0, '2020-12-21 23:22:37'),
('nikhilarya95@gmail.com', '744999', 0, '2020-12-21 23:22:46'),
('nikhilarya95@gmail.com', '593823', 0, '2020-12-21 23:23:03'),
('nikhilarya95@gmail.com', '533923', 0, '2020-12-21 23:24:27'),
('nikhilarya95@gmail.com', '304125', 0, '2020-12-21 23:24:43'),
('nikhilarya95@gmail.com', '443420', 0, '2020-12-21 23:25:07'),
('nikhilarya95@gmail.com', '342992', 0, '2020-12-21 23:25:44'),
('nikhilarya95@gmail.com', '301251', 0, '2020-12-21 23:26:05'),
('nikhilarya95@gmail.com', '163783', 0, '2020-12-21 23:26:34'),
('nikhilarya95@gmail.com', '183476', 0, '2020-12-21 23:26:45'),
('nikhilarya95@gmail.com', '474353', 0, '2020-12-21 23:26:57'),
('nikhilarya95@gmail.com', '416018', 0, '2020-12-21 23:27:13'),
('nikhilarya95@gmail.com', '623540', 0, '2020-12-21 23:27:32'),
('nikhilarya95@gmail.com', '209128', 0, '2020-12-21 23:27:45'),
('nikhilarya95@gmail.com', '141080', 0, '2020-12-21 23:28:20'),
('surajkumar.4aug@gmail.com', '271596', 1, '2020-12-22 15:21:28'),
('surajkumar.4aug@gmail.com', '157363', 0, '2020-12-22 15:28:22'),
('surajkumar.4aug@gmail.com', '895568', 0, '2020-12-22 15:28:33'),
('surajkumar.4aug@gmail.com', '768166', 1, '2020-12-22 15:30:51'),
('surajkumar.4aug@gmail.com', '499943', 1, '2020-12-22 15:38:05'),
('surajkumar.4aug@gmail.com', '632253', 1, '2020-12-22 15:38:25'),
('nikhilarya95@gmail.com', '502674', 1, '2020-12-22 19:22:24'),
('nikhilarya95@gmail.com', '412038', 1, '2020-12-22 19:27:58'),
('nikhilarya95@gmail.com', '982147', 1, '2020-12-22 20:14:29'),
('surajkumar.4aug@gmail.com', '298098', 1, '2020-12-22 20:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `userverification`
--

CREATE TABLE `userverification` (
  `Usid` varchar(15) NOT NULL,
  `U_name` varchar(25) NOT NULL,
  `User` varchar(10) NOT NULL,
  `Umobile` varchar(10) NOT NULL,
  `Uemail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userverification`
--

INSERT INTO `userverification` (`Usid`, `U_name`, `User`, `Umobile`, `Uemail`) VALUES
('18mcr012', 'nikhil kumar', 'Student', '9113110942', 'nikhilarya95@gmail.com'),
('18mcr012', 'nikhil kumar', 'Faculty', '9113110942', 'nikhilarya@gmail.com'),
('22mbb121', 'suraj kumar', 'Faculty', '7877667689', 'suraj@gmail.com'),
('18mcr017', 'suraj kumar', 'Student', '9122734062', 'surajkumar.4aug@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_security_details`
--
ALTER TABLE `admin_security_details`
  ADD KEY `Aemail` (`Aemail`);

--
-- Indexes for table `grievancesdetails`
--
ALTER TABLE `grievancesdetails`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `Uemail` (`Uemail`);

--
-- Indexes for table `headdetalis`
--
ALTER TABLE `headdetalis`
  ADD PRIMARY KEY (`Aemail`);

--
-- Indexes for table `userotp`
--
ALTER TABLE `userotp`
  ADD KEY `FK_email` (`Uemail`);

--
-- Indexes for table `userverification`
--
ALTER TABLE `userverification`
  ADD PRIMARY KEY (`Uemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grievancesdetails`
--
ALTER TABLE `grievancesdetails`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_security_details`
--
ALTER TABLE `admin_security_details`
  ADD CONSTRAINT `admin_security_details_ibfk_1` FOREIGN KEY (`Aemail`) REFERENCES `headdetalis` (`Aemail`);

--
-- Constraints for table `grievancesdetails`
--
ALTER TABLE `grievancesdetails`
  ADD CONSTRAINT `grievancesdetails_ibfk_1` FOREIGN KEY (`Uemail`) REFERENCES `userverification` (`Uemail`);

--
-- Constraints for table `userotp`
--
ALTER TABLE `userotp`
  ADD CONSTRAINT `FK_email` FOREIGN KEY (`Uemail`) REFERENCES `userverification` (`Uemail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
