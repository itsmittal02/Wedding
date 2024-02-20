-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 06:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `sn` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `toemail` varchar(255) NOT NULL,
  `tocode` varchar(255) NOT NULL,
  `fromemail` varchar(255) NOT NULL,
  `fromcode` varchar(255) NOT NULL,
  `msg` blob NOT NULL,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`sn`, `code`, `toemail`, `tocode`, `fromemail`, `fromcode`, `msg`, `dt`) VALUES
(1, 'dw1bZfAO_1', 'kss@gmail.com', 'svQP4o0r_2', 'mkjat@gmail.com', '4XwtGYNg_1', 0x48692c492073617720596f75722050726f66696c65, '08 Feb,2022'),
(2, 'xk6SCpqd_2', 'dt@gmail.com', 'PL4hEN7I_3', 'mkjat@gmail.com', '4XwtGYNg_1', 0x48656c6c6f, '09 Feb,2022'),
(3, 'vseyH2zi_3', 'mkjat@gmail.com', '4XwtGYNg_1', 'kss@gmail.com', 'svQP4o0r_2', 0x48692044656172, '09 Feb,2022'),
(4, 'azPenH1S_4', 'kss@gmail.com', 'svQP4o0r_2', 'mkjat@gmail.com', '4XwtGYNg_1', 0x4920616d2046696e65, '09 Feb,2022'),
(5, '64iK9lm3_5', 'mkjat@gmail.com', '4XwtGYNg_1', 'dt@gmail.com', 'PL4hEN7I_3', 0x48690d0a57686572652061726520796f752046726f6d2e, '09 Feb,2022'),
(6, 'uOM0Jjs8_6', 'kss@gmail.com', 'svQP4o0r_2', 'susbhaveja@gmail.com', '7vLFqS9f_4', 0x6869206b616c70697420, '17 Feb,2022'),
(7, 'ovcM0FPm_7', 'kss@gmail.com', 'svQP4o0r_2', 'susbhaveja@gmail.com', '7vLFqS9f_4', 0x486f772041726520596f75203f3f, '17 Feb,2022'),
(8, 'iQlFsNAJ_8', 'kss@gmail.com', 'svQP4o0r_2', 'susbhaveja@gmail.com', '7vLFqS9f_4', 0x48692044656172200d0a57686572652041726520596f75722046726f6d0d0a, '28 Feb,2022');

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interested`
--

INSERT INTO `interested` (`email`, `code`) VALUES
('susbhaveja@gmail.com', 'lJruGXZb_5'),
('susbhaveja@gmail.com', 'PL4hEN7I_3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sn` int(11) NOT NULL,
  `code` varchar(25) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `mstatus` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `mothertongue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sn`, `code`, `fname`, `lname`, `email`, `pass`, `dob`, `gender`, `mstatus`, `caste`, `religion`, `occupation`, `country`, `state`, `district`, `mothertongue`) VALUES
(1, '4XwtGYNg_1', 'Monika', 'Saharan', 'mkjat@gmail.com', '123456', '2002-11-01', 'female', 'Single', 'obc', 'Hindu', 'Judge', 'India', 'Rajasthan', 'Jodhpur', 'Rajasthani'),
(2, 'svQP4o0r_2', 'Kalpit', 'Saksena', 'kss@gmail.com', '1245', '2001-06-08', 'male', 'Single', 'sc', 'Hindu', 'Lawyer', 'India', 'Punjab', 'Amritsar', 'Punjabi'),
(3, 'PL4hEN7I_3', 'Devang ', 'Thakar', 'dt@gmail.com', '123123', '2000-07-25', 'male', 'Single', 'sc', 'Hindu', 'Lawyer', 'France Metropolitan', 'Andra Pradesh', 'Kadapa', 'Bhojpuri'),
(4, '7vLFqS9f_4', 'Sushma', 'Bhaveja', 'susbhaveja@gmail.com', '123123', '1998-09-05', 'female', 'Single', 'st', 'Hindu', 'Farming', 'India', 'Maharashtra', 'Mumbai City', 'Marathi'),
(5, 'lJruGXZb_5', 'Rakesh', 'Sharma', 'rs@gmail.com', '123', '2001-02-25', 'male', 'Single', 'sc', 'Hindu', 'Lawyer', 'Haiti', 'Nagaland', 'Dimapur', 'Hindi'),
(6, 'hBnejWvx_6', 'Krishan', 'prajapat', 'kp@gmail.com', '0011', '2222-04-05', 'male', 'Married', 'obc', 'Sikh', 'Physician', 'India', 'Himachal Pradesh', 'Mandi', 'Bhojpuri'),
(7, 'mVWfPXQ6_7', 'Hitesh', 'Rajpurohit', 'hr@gmail.com', '7845', '1999-05-12', 'male', 'Single', 'st', 'Hindu', 'Military', 'India', 'Jammu and Kashmir', 'Kulgam', 'Punjabi'),
(8, '5pNhSGjR_8', 'Nikita', 'Chaneja', 'nv@gmail.com', '0011', '1998-04-05', 'female', 'Single', 'obc', 'Hindu', 'Auditor', 'India', 'Kerala', 'Kottayam', 'Tamil');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
