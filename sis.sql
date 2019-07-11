-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2019 at 11:53 PM
-- Server version: 5.6.43-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis-southphilcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(10) NOT NULL,
  `adviser_id` varchar(20) NOT NULL,
  `school_year_id` varchar(10) NOT NULL,
  `semester_id` int(10) NOT NULL,
  `grade_code` int(5) NOT NULL,
  `grade_level` varchar(10) NOT NULL,
  `section_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `adviser_id`, `school_year_id`, `semester_id`, `grade_code`, `grade_level`, `section_name`) VALUES
(1, '', '2018-2019', 0, 0, 'KINDER 1', 'RESPECTFUL'),
(2, '', '2018-2019', 0, 1, 'GRADE 1', 'KINDNESS'),
(3, '', '2018-2019', 0, 2, 'GRADE 2', 'LOVE'),
(4, '', '2018-2019', 0, 3, 'GRADE 3', 'DILIGENCE'),
(5, '', '2018-2019', 0, 4, 'GRADE 4', 'CHARITY'),
(6, '', '2018-2019', 0, 5, 'GRADE 5', 'HUMILITY'),
(7, '', '2018-2019', 0, 6, 'GRADE 6', 'CHASTITY'),
(8, '', '2018-2019', 0, 7, 'GRADE 7', 'ST. ANTHONY'),
(9, '', '2018-2019', 0, 7, 'GRADE 7', 'ST. JOSEPH'),
(10, '', '2018-2019', 0, 8, 'GRADE 8', 'ST. ISIDORE'),
(11, '', '2018-2019', 0, 8, 'GRADE 8', 'ST. LUKE'),
(12, '', '2018-2019', 0, 9, 'GRADE 9', 'ST. MONICA'),
(13, '', '2018-2019', 0, 9, 'GRADE 9', 'ST. THERESE'),
(14, '', '2018-2019', 0, 10, 'GRADE 10', 'ST. FRANCIS'),
(15, '', '2018-2019', 0, 10, 'GRADE 10', 'ST. VINCENT'),
(16, '', '2018-2019', 1, 11, 'GRADE 11', 'ABM - 1'),
(17, '', '2018-2019', 1, 11, 'GRADE 11', 'ABM - 2'),
(18, '', '2018-2019', 1, 11, 'GRADE 11', 'GAS - 1'),
(19, '', '2018-2019', 2, 12, 'GRADE 12', 'ABM - 1'),
(20, '', '2018-2019', 0, 0, 'KINDER 2', 'NO NAME');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollment_id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `class_id` int(11) NOT NULL,
  `previous_school` varchar(50) DEFAULT NULL,
  `scholar` varchar(3) DEFAULT NULL,
  `scholarship_type` varchar(15) DEFAULT NULL,
  `scholarship_amount` varchar(20) DEFAULT NULL,
  `billing_status` varchar(10) DEFAULT NULL,
  `enrollment_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollment_id`, `student_id`, `class_id`, `previous_school`, `scholar`, `scholarship_type`, `scholarship_amount`, `billing_status`, `enrollment_status`) VALUES
(11, 17, 1, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `school_year_id` int(10) NOT NULL,
  `school_year_name` varchar(20) NOT NULL,
  `date_started` date NOT NULL,
  `date_ended` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`school_year_id`, `school_year_name`, `date_started`, `date_ended`) VALUES
(1, '2018-2019', '2018-06-13', '2019-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(10) NOT NULL,
  `school_year_id` int(10) NOT NULL,
  `semester_name` varchar(20) NOT NULL,
  `date_started` date NOT NULL,
  `date_ended` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `school_year_id`, `semester_name`, `date_started`, `date_ended`) VALUES
(1, 1, 'First Semester', '2018-06-13', '2018-10-19'),
(2, 1, 'Second Semester', '2018-11-06', '2019-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL,
  `lrn_number` varchar(12) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `ext_name` varchar(5) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `birth_date` date NOT NULL,
  `mother_tongue` varchar(20) NOT NULL,
  `ethnic_group` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `father_first_name` varchar(20) NOT NULL,
  `father_middle_name` varchar(20) NOT NULL,
  `father_last_name` varchar(20) NOT NULL,
  `father_contact` varchar(50) NOT NULL,
  `mother_first_name` varchar(20) NOT NULL,
  `mother_middle_name` varchar(20) NOT NULL,
  `mother_last_name` varchar(20) NOT NULL,
  `mother_contact` varchar(50) NOT NULL,
  `guardian_first_name` varchar(20) NOT NULL,
  `guardian_middle_name` varchar(20) DEFAULT NULL,
  `guardian_last_name` varchar(20) DEFAULT NULL,
  `guardian_relationship` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `lrn_number`, `first_name`, `middle_name`, `last_name`, `ext_name`, `gender`, `birth_date`, `mother_tongue`, `ethnic_group`, `religion`, `barangay`, `city`, `province`, `father_first_name`, `father_middle_name`, `father_last_name`, `father_contact`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_contact`, `guardian_first_name`, `guardian_middle_name`, `guardian_last_name`, `guardian_relationship`) VALUES
(17, '405258111111', 'gandhi', 'galendez', 'balingkit', '', 'm', '1989-06-11', 'cebuano', 'cebuano', 'catholic', '26', 'cagayan de oro', 'misamis oriental', '', '', '', '', 'cristina', 'pepito', 'galendez', '09751198690', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `adviser_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `adviser_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`) VALUES
(2, '772-160418-442', 'gandhi', 'balingkit', 'gandhi', 'galendez', 'balingkit'),
(4, '772-000000-001', 'leovigilda', 'martinito', 'leovigilda', 's', 'martinito'),
(5, '772-000000-002', 'rhiza', 'beltran', 'rhiza', 'r', 'beltran'),
(6, '772-000000-003', 'michelle', 'silguera', 'michelle', 's', 'silguera'),
(7, '772-000000-004', 'julia', 'pakino', 'julia carmela', 's', 'pakino'),
(8, '772-000000-005', 'mary', 'redulla', 'mary jane', 'g', 'redulla'),
(9, '772-000000-006', 'maria', 'afable', 'maria laurdes', 'q', 'afable'),
(10, '772-000000-007', 'job', 'baldon', 'job', 'e', 'baldon'),
(11, '772-000000-008', 'czarina', 'ramos', 'czarina isabele', '-', 'ramos'),
(12, '772-000000-008', 'geiza', 'jandayan', 'geiza faith', 's', 'jandayan'),
(13, '772-000000-009', 'lorlie', 'tabios', ' lorlie', 'l', 'tabios'),
(14, '772-000000-010', 'cheska', 'sabulbero', 'cheska', '-', 'sabulbero'),
(15, '772-000000-011', 'josephine', 'gamayon', 'josephine', 'p', 'gamayon'),
(16, '772-000000-012', 'ma.', 'carillo', 'ma. theresa', 'c', 'carillo'),
(17, '772-000000-013', 'jonalyn', 'macha', 'jonalyn', 'p', 'macha'),
(18, '772-000000-014', 'abigail', 'langam', 'abigail', '-', 'langam'),
(19, '772-000000-015', 'mark', 'halop', 'mark anthony', '-', 'halop'),
(20, '772-000000-016', 'marlie', 'bacan', 'marlie ann', '-', 'bacan'),
(21, '772-000000-017', 'sharon', 'restauro', 'sharon mae', '-', 'restauro'),
(22, '772-000000-018', 'jeik', 'compo', 'jeik', '-', 'compo'),
(23, '772-000000-019', 'ariel', 'vistal', 'ariel', '-', 'vistal'),
(24, '772-000000-020', 'romy', 'amarga', 'romy jan', '-', 'amarga'),
(25, '772-000000-021', 'honey', 'bongalon', 'honey', '-', 'bongalon'),
(26, '772-000000-022', 'nikko', 'perez', 'nikko', 'a', 'perez'),
(27, '772-000000-023', 'laziel', 'aparicio', 'laziel jane', '-', 'aparicio'),
(28, '772-000000-024', 'rafunzelle', 'gaa', 'rafunzelle', '-', 'gaa'),
(29, '772-000000-025', 'sara', 'ortiz', 'sara mae jane', '-', 'ortiz'),
(30, '772-000000-026', 'vanessa', 'manoop', 'vanessa joyce', '-', 'manoop'),
(31, '772-000000-027', 'gorgonio', 'bacasnot', 'gorgonio', '-', 'bacasnot'),
(32, '772-000000-028', 'edmar', 'ubatay', 'edmar', '-', 'ubatay'),
(33, '772-000000-029', 'dawnie', 'timogan', 'dawnie', '-', 'timogan'),
(34, '772-000000-030', 'omar', 'malayo', 'omar', '-', 'malayo'),
(35, '772-000000-031', 'jenelyn', 'gales', 'jenelyn', '-', 'gales'),
(36, '772-000000-032', 'jonito', 'estillore', 'jonito', '-', 'estillore'),
(37, '772-000000-033', 'patiently', 'catigbe', 'patiently love', '-', 'catigbe'),
(38, '772-000000-034', 'prombito', 'subasco', 'prombito', '-', 'subasco');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `adviser_id` (`adviser_id`,`school_year_id`,`semester_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`school_year_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`),
  ADD KEY `school_year_id` (`school_year_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `school_year_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `semester_ibfk_1` FOREIGN KEY (`school_year_id`) REFERENCES `school_year` (`school_year_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
