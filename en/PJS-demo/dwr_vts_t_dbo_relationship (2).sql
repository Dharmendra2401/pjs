-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 12:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwr_vts_t.dbo.relationship`
--

-- --------------------------------------------------------

--
-- Table structure for table `dead_person`
--

CREATE TABLE `dead_person` (
  `id` int(11) NOT NULL,
  `Reference_Member_Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `display_name` varchar(150) NOT NULL,
  `display_pic` varchar(255) NOT NULL,
  `Relation_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dead_person`
--

INSERT INTO `dead_person` (`id`, `Reference_Member_Id`, `Name`, `display_name`, `display_pic`, `Relation_type`) VALUES
(1, 1001, 'Dead1', 'dead1', 'http://localhost/PJS-user/images/tree_dead.png', 'Grand Father'),
(2, 1001, 'test2', 'test2', 'http://localhost/PJS-user/images/tree_dead1.png', 'Grand Uncle'),
(3, 1001, 'sds', 'dsad', 'asdsad', 'Uncle');

-- --------------------------------------------------------

--
-- Table structure for table `dwr_vts_t.dbo.relationship`
--

CREATE TABLE `dwr_vts_t.dbo.relationship` (
  `MEMBER_ID` int(11) NOT NULL,
  `Relation_Type` varchar(50) NOT NULL,
  `Reference_Member_Id` int(11) NOT NULL,
  `UPD_USER` varchar(50) NOT NULL,
  `ACTIVE_STATUS` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dwr_vts_t.dbo.relationship`
--

INSERT INTO `dwr_vts_t.dbo.relationship` (`MEMBER_ID`, `Relation_Type`, `Reference_Member_Id`, `UPD_USER`, `ACTIVE_STATUS`) VALUES
(1001, 'Brother', 1002, '1001', 'N'),
(1001, 'Mother', 1003, '1001', 'Y'),
(1001, 'Father', 1004, '1001', 'N'),
(1001, 'Brother', 1005, '1', 'Y'),
(1001, 'Brother', 1006, '1001', 'Y'),
(1001, 'Sister', 1007, '1001', 'Y'),
(1001, 'Son', 1008, '1001', 'Y'),
(1009, 'Brother', 1001, '1009', 'Y'),
(1014, 'Father', 1001, '1014', 'Y'),
(1010, 'Grandfather', 1001, '1010', 'Y'),
(1002, 'Brother', 1011, '1002', 'Y'),
(1002, 'Father', 1011, '1002', 'Y'),
(1002, 'Grandfather ', 1012, '1002', 'Y'),
(1001, 'Daughter', 1015, '1001', 'Y'),
(1016, 'Husband', 1001, '1001', 'Y'),
(1001, 'Wife', 1017, '1001', 'Y'),
(1018, 'Sister', 1007, '', 'Y'),
(1001, 'Grandmother', 1019, '', 'Y'),
(1002, 'Grandmother', 1019, '1002', 'Y'),
(1003, 'Grandmother', 1019, '1003', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `MEMBER_ID` int(11) NOT NULL,
  `display_pic` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`MEMBER_ID`, `display_pic`, `first_name`, `middle_name`, `last_name`, `fathers_name`, `gender`) VALUES
(1001, 'http://localhost/PJS/tree_structure.png', 'saurav', 'singh', 'kaurav', 'xyz', 'M'),
(1002, 'http://localhost/PJS-demo/images/tree_structure1.png', 'saurav1', 'singh1', 'kaurav1', 'xyz1', 'M'),
(1003, 'http://localhost/PJS-demo/images/tree_structure2.jpg', 'saurav2', 'singh2', 'kaurav2', 'xyz2', 'F'),
(1004, 'http://localhost/PJS-demo/images/tree_structure3.png', 'saurav3', 'singh3', 'kaurav3', 'xyz3', 'F'),
(1005, 'http://localhost/PJS-demo/images/tree_structure4.jpg', 'saurav4', 'singh4', 'kaurav4', 'xyz4', 'M'),
(1006, 'http://localhost/PJS-demo/images/tree_structure5.jpg', 'saurav5', 'singh5', 'kaurav5', 'xyz5', 'M'),
(1007, 'http://localhost/PJS-demo/images/tree_structure6.jpg', 'saurav6', 'singh6', 'kaurav6', 'xyz6', 'F'),
(1008, 'http://localhost/PJS-demo/images/tree_structure7.jpg', 'saurav7', 'singh7', 'kaurav7', 'xyz7', 'M'),
(1009, 'http://localhost/PJS-demo/images/tree_structure8.jpg', 'saurav8', 'singh8', 'kaurav8', 'xyz8', 'F'),
(1010, 'http://localhost/PJS-demo/images/tree_structure9.jpg', 'saurav9', 'singh9', 'kaurav9', 'xyz9', 'M'),
(1011, 'http://localhost/PJS-demo/images/tree_structure10.jpg', 'saurav10', 'singh10', 'kaurav10', 'xyz10', 'M'),
(1012, 'http://localhost/PJS-demo/images/tree_structure11.jpg', 'saurav11', 'singh11', 'kaurav11', 'xyz11', 'M'),
(1013, 'http://localhost/PJS-demo/images/tree_structure12.jpg', 'saurav12', 'singh12', 'kaurav12', 'xyz12', 'M'),
(1014, 'http://localhost/PJS-demo/images/tree_structure13.jpg', 'saurav13', 'singh13', 'kaurav13', 'xyz13', 'F'),
(1015, 'http://localhost/PJS-demo/images/tree_structure13.jpg\r\n', 'saurav14', 'singh14', 'kaurav14', 'xyz12', 'F'),
(1016, 'http://localhost/PJS-demo/images/tree_structure7.jPG', 'saurav16', 'singh16', 'kaurav16', 'xyz12', 'F'),
(1017, 'http://localhost/PJS-demo/images/tree_structure13.jpg\r\n', 'saurav16', 'singh16', 'kaurav16', 'xyz', 'F'),
(1018, 'http://localhost/PJS-demo/images/tree_structure10.jpg\r\n', 'saurav17', 'singh18', 'kaurav18', 'xyz123', 'F'),
(1019, 'http://localhost/PJS-demo/images/tree_structure7.jpg\r\n', 'saurav18', 'singh18', '', '', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dead_person`
--
ALTER TABLE `dead_person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dead_person`
--
ALTER TABLE `dead_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
