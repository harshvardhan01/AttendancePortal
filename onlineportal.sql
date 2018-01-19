-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 07:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `1sem`
--

CREATE TABLE `1sem` (
  `roll` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2sem`
--

CREATE TABLE `2sem` (
  `roll` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `3sem`
--

CREATE TABLE `3sem` (
  `roll` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4sem`
--

CREATE TABLE `4sem` (
  `roll` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `5sem`
--

CREATE TABLE `5sem` (
  `roll` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `6sem`
--

CREATE TABLE `6sem` (
  `roll` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7sem`
--

CREATE TABLE `7sem` (
  `roll` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7sem`
--

INSERT INTO `7sem` (`roll`, `name`, `branch`, `batch`) VALUES
('13ETCCS001', 'Akash Nahar', 'CSE', 0),
('13ETCCS002', 'Akriti Sondhi', 'CSE', 0),
('13ETCCS003', 'Akshay Jain', 'CSE', 0),
('13ETCCS004', 'Antriksh Daya', 'CSE', 0),
('13ETCCS005', 'Bhavika Chittora', 'CSE', 0),
('13ETCCS006', 'Bhavya Jain', 'CSE', 0),
('13ETCCS007', 'Chetan Dehra', 'CSE', 0),
('13ETCCS008', 'Chirag Patel', 'CSE', 0),
('13ETCCS009', 'Drishti Kothari', 'CSE', 0),
('13ETCCS010', 'Dyutee Solanki', 'CSE', 0),
('13ETCCS011', 'Harshi Babel', 'CSE', 0),
('13ETCCS012', 'Harshvardhan Chittora', 'CSE', 0),
('13ETCCS013', 'Jayesh Vyas', 'CSE', 0),
('13ETCCS014', 'Kalpit Tandon', 'CSE', 0),
('13ETCCS015', 'Khushboo Salvi', 'CSE', 0),
('13ETCCS016', 'Kriti Jain', 'CSE', 0),
('13ETCCS017', 'Kuldeep Meghwal', 'CSE', 0),
('13ETCCS018', 'Lavish Jain', 'CSE', 0),
('13ETCCS019', 'Mayuri Kothari', 'CSE', 0),
('13ETCCS020', 'Meenal Ranka', 'CSE', 0),
('13ETCCS021', 'Monika Kumawat', 'CSE', 0),
('13ETCCS022', 'Mudit Mathur', 'CSE', 0),
('13ETCCS023', 'Naman Shah', 'CSE', 0),
('13ETCCS024', 'Nitin Sharma', 'CSE', 0),
('13ETCCS025', 'Prahalad Kumawat', 'CSE', 0),
('13ETCCS026', 'Priyanka Anand', 'CSE', 0),
('13ETCCS027', 'Priyanka Trivedi', 'CSE', 0),
('13ETCCS028', 'Richa Taldar', 'CSE', 0),
('13ETCCS029', 'Sakshi Jain', 'CSE', 0),
('13ETCCS030', 'Sakshi Samar', 'CSE', 0),
('13ETCCS031', 'Sameer Kant Verma', 'CSE', 0),
('13ETCCS032', 'Sandeep Panchal', 'CSE', 0),
('13ETCCS033', 'Shubham Sharma', 'CSE', 0),
('13ETCCS034', 'Sourbh Nainava', 'CSE', 0),
('13ETCCS035', 'Varun Shrivastava', 'CSE', 0),
('13ETCCS036', 'Vipul Srivastava', 'CSE', 0),
('13ETCCS037', 'Virendra Singh Jhala', 'CSE', 0),
('13ETCCS851', 'Himanshu Bhandari', 'CSE', 0),
('13ETCCS852', 'Mohit Dwivedi', 'CSE', 0),
('13ETCCS853', 'Sachin Badala', 'CSE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `8sem`
--

CREATE TABLE `8sem` (
  `roll` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` int(5) NOT NULL,
  `13` varchar(2) NOT NULL DEFAULT 'P',
  `14` varchar(2) NOT NULL DEFAULT 'P',
  `15` varchar(2) NOT NULL DEFAULT 'P'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8sem`
--

INSERT INTO `8sem` (`roll`, `name`, `branch`, `batch`, `13`, `14`, `15`) VALUES
('13ETCCS001', 'Akash Nahar', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS002', 'Akriti Sondhi', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS003', 'Akshay Jain', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS004', 'Antriksh Daya', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS005', 'Bhavika Chittora', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS006', 'Bhavya Jain', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS007', 'Chetan Dehra', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS008', 'Chirag Patel', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS009', 'Drishti Kothari', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS010', 'Dyutee Solanki', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS011', 'Harshi Babel', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS012', 'Harshvardhan Chittora', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS013', 'Jayesh Vyas', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS014', 'Kalpit Tandon', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS015', 'Khushboo Salvi', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS016', 'Kriti Jain', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS017', 'Kuldeep Meghwal', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS018', 'Lavish Jain', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS019', 'Mayuri Kothari', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS020', 'Meenal Ranka', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS021', 'Monika Kumawat', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS022', 'Mudit Mathur', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS023', 'Naman Shah', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS024', 'Nitin Sharma', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS025', 'Prahalad Kumawat', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS026', 'Priyanka Anand', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS027', 'Priyanka Trivedi', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS028', 'Richa Taldar', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS029', 'Sakshi Jain', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS030', 'Sakshi Samar', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS031', 'Sameer Kant Verma', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS032', 'Sandeep Panchal', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS033', 'Shubham Sharma', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS034', 'Sourbh Nainava', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS035', 'Varun Shrivastava', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS036', 'Vipul Srivastava', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS037', 'Virendra Singh Jhala', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS851', 'Himanshu Bhandari', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS852', 'Mohit Dwivedi', 'CSE', 0, 'A', 'A', 'P'),
('13ETCCS853', 'Sachin Badala', 'CSE', 0, 'A', 'A', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `attendanceidentify`
--

CREATE TABLE `attendanceidentify` (
  `branch` varchar(5) NOT NULL,
  `sem` int(3) NOT NULL,
  `subject` varchar(6) NOT NULL,
  `batch` int(3) NOT NULL,
  `date` date NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendanceidentify`
--

INSERT INTO `attendanceidentify` (`branch`, `sem`, `subject`, `batch`, `date`, `id`) VALUES
('CSE', 8, 'RTS', 0, '2017-03-24', 1),
('CSE', 8, 'DIP', 0, '2017-03-24', 2),
('CSE', 8, 'DIP', 0, '0000-00-00', 3),
('CSE', 8, 'DIP', 0, '0000-00-00', 4),
('CSE', 8, 'DIP', 0, '0000-00-00', 5),
('CSE', 8, 'DIP', 0, '2017-04-05', 6),
('CSE', 8, 'RTS', 0, '2017-04-05', 7),
('CSE', 8, 'RTS', 0, '2017-04-05', 8),
('CSE', 8, 'DIP', 0, '2017-04-05', 9),
('CSE', 8, 'RTS', 0, '2017-04-05', 10),
('CSE', 8, 'RTS', 0, '2017-04-05', 11),
('CSE', 7, 'ADBMS', 0, '2017-04-05', 12),
('CSE', 8, 'DIP', 0, '2017-04-16', 13),
('CSE', 8, 'DIP', 0, '2017-04-13', 14),
('CSE', 8, 'DIP', 0, '2017-04-13', 15);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(5) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branchname`, `abbr`) VALUES
(1, 'Computer Science Engineering', 'CSE'),
(3, 'Civil Engineering', 'CE'),
(4, 'Information Technology', 'IT'),
(5, 'Electronics & Communication Engineering', 'ECE'),
(6, 'Electrical Engineering', 'EE'),
(7, 'Mechanical Engineering', 'ME'),
(8, 'Electrical & Electronics Engineering', 'EEE'),
(10, 'Automobile Engineering', 'AE');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`id`, `name`, `branch`, `email`, `phone`) VALUES
(4, 'Scratch Buddies Coordinator', 'CSE', 'coordinator@scratchbuddies.com', '9460382689'),
(9, 'Harshvardhan Chittora', 'CE', 'hvc725@gmail.com', '9460382689'),
(10, 'Jayesh Vyas', 'IT', 'jay@gmail.com', '646111');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `semester` int(2) NOT NULL,
  `batch` int(2) NOT NULL,
  `subject` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logfile`
--

CREATE TABLE `logfile` (
  `id` int(11) NOT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `activity` text NOT NULL,
  `user` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logfile`
--

INSERT INTO `logfile` (`id`, `datetime`, `activity`, `user`) VALUES
(1, '2017-03-24 23:01:32', 'Logged in', 'admin@scratchbuddies.com'),
(2, '2017-03-24 23:18:52', 'Attendance taken. Subject DIP date 2017-03-24 sem 8 batch 0', 'admin@scratchbuddies.com'),
(3, '2017-03-25 10:36:46', 'Logged in', 'admin@scratchbuddies.com'),
(4, '2017-03-25 11:09:04', 'Logged out', 'admin@scratchbuddies.com'),
(5, '2017-03-25 11:17:35', 'Logged in', 'admin@scratchbuddies.com'),
(6, '2017-03-25 11:18:05', 'Faculty Added jay@gmail.com', 'admin@scratchbuddies.com'),
(7, '2017-03-25 11:18:12', 'Logged out', 'admin@scratchbuddies.com'),
(8, '2017-03-25 11:18:25', 'Logged in', 'jay@gmail.com'),
(9, '2017-03-25 11:18:34', 'Logged out', 'jay@gmail.com'),
(10, '2017-03-25 11:18:38', 'Logged in', 'admin@scratchbuddies.com'),
(11, '2017-03-25 11:18:47', 'Coordinator Added jay@gmail.com', 'admin@scratchbuddies.com'),
(12, '2017-03-25 11:18:51', 'Logged out', 'admin@scratchbuddies.com'),
(13, '2017-03-25 11:19:00', 'Logged in', 'jay@gmail.com'),
(14, '2017-03-25 11:19:11', 'Logged out', 'jay@gmail.com'),
(15, '2017-03-25 11:21:02', 'Logged in', 'jay@gmail.com'),
(16, '2017-03-25 11:21:06', 'Logged out', 'jay@gmail.com'),
(17, '2017-03-25 11:21:13', 'Logged in', 'admin@scratchbuddies.com'),
(18, '2017-03-25 11:22:16', 'Logged out', 'admin@scratchbuddies.com'),
(19, '2017-04-05 17:51:06', 'Logged in', 'admin@scratchbuddies.com'),
(20, '2017-04-05 17:57:36', 'Attendance taken. Subject DIP date 05-04-2017 sem 8 batch 0', 'admin@scratchbuddies.com'),
(21, '2017-04-05 17:59:07', 'Attendance taken. Subject DIP date 05 - 04 - 2017 sem 8 batch 0', 'admin@scratchbuddies.com'),
(22, '2017-04-05 18:03:10', 'Attendance taken. Subject DIP date 05 - 04 - 2017 sem 8 batch 0', 'admin@scratchbuddies.com'),
(23, '2017-04-05 18:04:50', 'Attendance taken. Subject DIP date 2017-04-05 sem 8 batch 0', 'admin@scratchbuddies.com'),
(24, '2017-04-05 18:05:58', 'Attendance taken. Subject RTS date 2017-04-05 sem 8 batch 0', 'admin@scratchbuddies.com'),
(25, '2017-04-05 18:08:36', 'Attendance taken. Subject RTS date 2017-04-05 sem 8 batch 0', 'admin@scratchbuddies.com'),
(26, '2017-04-05 18:19:36', 'Attendance taken. Subject DIP date 2017-04-05 sem 8 batch 0', 'admin@scratchbuddies.com'),
(27, '2017-04-05 18:38:25', 'Attendance taken. Subject RTS date 2017-04-05 sem 8 batch 0', 'admin@scratchbuddies.com'),
(28, '2017-04-05 18:38:26', 'Attendance taken. Subject RTS date 2017-04-05 sem 8 batch 0', 'admin@scratchbuddies.com'),
(29, '2017-04-05 18:40:40', 'Attendance taken. Subject ADBMS date 2017-04-05 sem 7 batch 0', 'admin@scratchbuddies.com'),
(30, '2017-04-13 09:40:49', 'Logged in', 'admin@scratchbuddies.com'),
(31, '2017-04-13 10:16:02', 'Attendance taken. Subject DIP date 2017-04-16 sem 8 batch 0', 'admin@scratchbuddies.com'),
(32, '2017-04-13 10:16:26', 'Attendance taken. Subject DIP date 2017-04-13 sem 8 batch 0', 'admin@scratchbuddies.com'),
(33, '2017-04-13 10:16:47', 'Attendance taken. Subject DIP date 2017-04-13 sem 8 batch 0', 'admin@scratchbuddies.com'),
(34, '2017-04-23 09:33:36', 'Logged in', 'admin@scratchbuddies.com');

-- --------------------------------------------------------

--
-- Table structure for table `subjectlist`
--

CREATE TABLE `subjectlist` (
  `id` int(5) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `sem` int(3) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `subjectabbr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectlist`
--

INSERT INTO `subjectlist` (`id`, `branch`, `sem`, `subjectname`, `subjectabbr`) VALUES
(1, 'CSE', 8, 'Digital Image Processing', 'DIP'),
(2, 'CSE', 3, 'Electronic Devices & Circuits', 'EDC'),
(3, 'CSE', 3, 'Data Structures & Algorithms', 'DSA'),
(4, 'CSE', 3, 'Digital Electronics', 'DE'),
(5, 'CSE', 3, 'Linux & Shell Programming', 'LSP'),
(6, 'CSE', 3, 'Object Oriented Programmin', 'OOP'),
(7, 'CSE', 3, 'Advance Engineering Mathematics', 'AEM'),
(8, 'CSE', 4, 'Microprocessor & Interfaces', 'MI'),
(9, 'CSE', 4, 'Discrete Mathematical Structures', 'DMS'),
(10, 'CSE', 4, 'Statistics & Probability Theory', 'SPT'),
(11, 'CSE', 4, 'Software Engineering', 'SE'),
(12, 'CSE', 4, 'Principles Of Communication', 'POC'),
(13, 'CSE', 4, 'Principles Of Programming Language', 'PPL'),
(14, 'CSE', 5, 'Computer Architecture', 'CA'),
(15, 'CSE', 5, 'Digital Logic Design', 'DLD'),
(16, 'CSE', 5, 'Telecommunication Fundamentals', 'TF'),
(17, 'CSE', 5, 'Database Management Systems', 'DBMS'),
(18, 'CSE', 5, 'Operating Systems', 'OS'),
(19, 'CSE', 5, 'Advanced Data Structure', 'ADS'),
(20, 'CSE', 5, 'Digital Signal Processing', 'DSP'),
(22, 'CSE', 6, 'Computer Networks', 'CN'),
(23, 'CSE', 6, 'Design & Analysis of Algorithms', 'DAA'),
(24, 'CSE', 6, 'Theory Of Computation', 'TOC'),
(25, 'CSE', 6, 'Computer Graphics & Multimedia Techniques', 'CGMT'),
(26, 'CSE', 6, 'Embedded System Design', 'ESD'),
(27, 'CSE', 6, 'Advance Topics in Operating Systems', 'ATOS'),
(29, 'CSE', 6, 'Human Computer Interface', 'HCI'),
(30, 'CSE', 7, 'Cloud Computing', 'CC'),
(31, 'CSE', 7, 'Information System Security', 'ISS'),
(32, 'CSE', 7, 'Data Mining & Ware Housing', 'DMWH'),
(33, 'CSE', 7, 'Computer Aided Design For VLSI', 'CAD'),
(34, 'CSE', 7, 'Compiler Construction', 'CLC'),
(35, 'CSE', 7, 'Advance Database Management System', 'ADBMS'),
(37, 'CSE', 7, 'Data Compression Techniques', 'DCT'),
(38, 'CSE', 8, 'Mobile Computing', 'MC'),
(39, 'CSE', 8, 'Distributed Systems', 'DS'),
(41, 'CSE', 8, 'Real Time Systems', 'RTS'),
(42, 'CE', 3, 'STRENGTH OF MATERIALS', 'SOM'),
(43, 'CE', 3, 'CIVIL ENGINEERING MATERIALS', 'CEM'),
(44, 'CE', 3, 'ENGINEERING GEOLOGY (L-3)', 'EG'),
(45, 'CE', 3, 'CONSTRUCTION TECHNOLOGY (L-3)', 'CT'),
(46, 'CE', 3, 'FLUID MECHANICS (L-3, T-1) ', 'FM'),
(50, 'CE', 4, 'STRENGTH OF MATERIALS-2 (L-3 T-1)', 'SOM'),
(51, 'CE', 4, 'CONCRETE TECHNOLOGY (L-3)', 'CT'),
(52, 'CE', 4, 'HYDRAULICS AND HYDRAULIC MACHINES (Lâ€“3)', 'HHM'),
(53, 'CE', 4, 'SURVEYING-1 I (L-3)', 'SUR'),
(54, 'CE', 4, 'BUILDING PLANNING (L-3)', 'BP'),
(55, 'CE', 4, 'QUANTITY SURVEYING & VALUATION (L- 3) ', 'QSV'),
(56, 'CE', 8, 'WATER RESOURCES ENGINEERING- 2 (L-3, T-1)', 'WRE'),
(57, 'CE', 8, 'DESIGN OF STEEL STRUCTURESâ€“II (L-3)', 'DSS'),
(58, 'CE', 8, 'PROJECT PLANNING & CONSTRUCTION MANAGEMENT(L- 3)', 'PPCM'),
(59, 'CE', 8, 'BRIDGE ENGINEERING (L- 3)', 'BE'),
(60, 'CE', 8, 'ADVANCED FOUNDATION ENGINEERING (L- 3)', 'AFE'),
(61, 'CE', 8, 'EARTHQUAKE RESISTANT CONSTRUCTION & DESIGN (L- 3)', 'ERCD'),
(62, 'CSE', 1, 'Engineering Mathematics-1', 'M-1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` text NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `category`) VALUES
(1, 'Scratch Buddies Admin', 'admin@scratchbuddies.com', '9460382689', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(2, 'Scratch Buddies Co-ordinator', 'coordinator@scratchbuddies.com', '9460382689', 'c4312c2a07bf7ded608a4d7cee2228dd', 'Coordinator'),
(3, 'Scratch Buddies Faculty', 'faculty@scratchbuddies.com', '9460382689', 'd561c7c03c1f2831904823a95835ff5f', 'Faculty'),
(6, 'Harshvardhan Chittora', 'harsh@gmail.com', '789465', '24a052c453aba0254921325d8b0ab977', 'Faculty'),
(5, 'Harshvardhan Chittora', 'hvc725@gmail.com', '9460382689', '24a052c453aba0254921325d8b0ab977', 'Coordinator'),
(7, 'Jayesh Vyas', 'jay@gmail.com', '646111', '24a052c453aba0254921325d8b0ab977', 'Coordinator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1sem`
--
ALTER TABLE `1sem`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `2sem`
--
ALTER TABLE `2sem`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `3sem`
--
ALTER TABLE `3sem`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `4sem`
--
ALTER TABLE `4sem`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `5sem`
--
ALTER TABLE `5sem`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `6sem`
--
ALTER TABLE `6sem`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `7sem`
--
ALTER TABLE `7sem`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `8sem`
--
ALTER TABLE `8sem`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `attendanceidentify`
--
ALTER TABLE `attendanceidentify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branchname` (`branchname`),
  ADD UNIQUE KEY `abbr` (`abbr`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `branch` (`branch`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`branch`,`semester`,`batch`,`subject`);

--
-- Indexes for table `logfile`
--
ALTER TABLE `logfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectlist`
--
ALTER TABLE `subjectlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject` (`subjectname`),
  ADD UNIQUE KEY `sem` (`sem`,`subjectname`,`subjectabbr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendanceidentify`
--
ALTER TABLE `attendanceidentify`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `coordinator`
--
ALTER TABLE `coordinator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logfile`
--
ALTER TABLE `logfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `subjectlist`
--
ALTER TABLE `subjectlist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
