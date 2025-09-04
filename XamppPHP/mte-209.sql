-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2025 at 04:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mte-209`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(50) NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `lastupdate`) VALUES
(101, 'การตลาด', '2025-08-31 04:16:15'),
(102, 'การบัญชี', '2025-08-31 04:16:15'),
(103, 'งานบุคคล', '2025-08-31 04:16:15'),
(104, 'งานบริหาร', '2025-08-31 04:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_fullname` varchar(100) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_mobile` varchar(10) NOT NULL,
  `emp_gender` varchar(7) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `lastupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_fullname`, `emp_email`, `emp_mobile`, `emp_gender`, `dep_id`, `lastupdate`) VALUES
(2110010161, 'ปาณัธม์ วรสายัณห์', 'panat@tni.ac.th', '0789456169', 'm', 101, '2025-08-31 04:16:15'),
(2110010178, 'พริมพร จิริศานต์', 'primporm@tni.ac.th', '0983663214', 'f', 102, '2025-08-31 04:16:15'),
(2110010179, 'ศิครินทร์ ไชยคิรินทร์', 'sikarin@tni.ac.th', '0984563214', 'm', 103, '2025-08-31 04:16:15'),
(2110010195, 'วรินทร แซ่อึ๊ง', 'warintorn@tni.ac.th', '0689456235', 'm', 104, '2025-08-31 04:16:15'),
(2110010393, 'อรรถวิทย์ ผดุงเกียรติวงศ์', 'adtawit@tni.ac.th', '0953663236', 'm', 101, '2025-08-31 04:16:15'),
(2110010534, 'อาทิตยา ณ นคร', 'arthitaya@tni.ac.th', '0659456154', 'f', 102, '2025-08-31 04:16:15'),
(2110010617, 'ปุญญิสา มันจหุนา', 'punyisa@tni.ac.th', '0893663265', 'f', 103, '2025-08-31 04:16:15'),
(2110010658, 'คมศาณ หาญธนัชเดชาภัท55555', 'komsan@tni.ac.th', '0699456145', 'm', 104, '2025-08-31 04:16:15'),
(2110010955, 'นาวิน ศิริผันแก้ว', 'nawin@tni.ac.th', '0789456145', 'm', 101, '2025-08-31 04:16:15'),
(2110011003, 'พลวัต ชลารักษ์', 'ponlawat@tni.ac.th', '0694563215', 'm', 102, '2025-08-31 04:16:15'),
(2110011318, 'ชนิสร บุษบาธาร', 'chanisorn@tni.ac.th', '0879456519', 'f', 103, '2025-08-31 04:16:15'),
(2110011409, 'ธนภัทร ลาภวารี', 'tanapat@tni.ac.th', '0654563639', 'm', 104, '2025-08-31 04:16:15'),
(2110011410, 'คริษฐ์ติณณ์ อำไพ', 'kristin@tni.ac.th', '0854566545', 'm', 102, '2025-08-31 16:26:39'),
(2110011411, 'พรพรรณ เลิศวณิชโรจน์', 'pornpan@tni.ac.th', '0957896545', 'f', 103, '2025-08-31 16:26:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2110011412;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
