-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 08:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iict_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `id` int(11) NOT NULL,
  `section_code` varchar(10) NOT NULL,
  `year_level` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_member`
--

CREATE TABLE `faculty_member` (
  `id` int(11) NOT NULL,
  `id_number` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `prefix` varchar(5) DEFAULT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `position_rank` varchar(50) DEFAULT NULL,
  `employment_status` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_member`
--

INSERT INTO `faculty_member` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `prefix`, `suffix`, `position_rank`, `employment_status`, `birthday`, `email`) VALUES
(1, 'MVD021473', 'Ma. Valen, Alzate', 'Dammay', 'Alzate', 'DR.', ', PhD/DIT', 'ASSOCIATE PROFESSOR II', 'PERMANENT', '1973-02-14', 'mavalendammay613@gmail.com'),
(2, 'CVB092992', 'Carlo', 'Vidal', 'Baltazar', 'MR.', ', MIT', 'INSTRUCTOR II', 'PERMANENT', '1992-09-29', 'carlo.v.baltazar@isu.edu.ph'),
(3, 'MCB062179', 'Mary Jane', 'Cagayan', 'Baniqued', 'MS.', ', ME\'Eng/MIT', 'ASSISTANT PROFESSOR IV', 'PERMANENT', '1979-06-21', 'maryjane.baniqued@gmail.com'),
(4, 'ARB100488', 'Audelon', 'Ramiscal', 'Benito', 'MR.', ', DIT', 'ASSISTANT PROFESSOR IV', 'PERMANENT', '1988-10-04', 'audelon.r.benito@isu.edu.ph'),
(5, 'JCC090582', 'Cereno', 'Cacal', 'Cereno', 'MR.', ', MSIT', 'ASSISTANT PROFESSOR II', 'PERMANENT', '1982-09-05', 'joey.c.cereno@isu.edu.ph'),
(6, 'JPC062278', 'Cunanan', 'Pascua', 'Cunanan', 'MRS.', ', PhD', 'ASSOCIATE PROFESSOR III', 'PERMANENT', '1978-06-22', 'janetcunanan242@gmail.com'),
(7, 'VBPD122992', 'Jay', 'Laurel', 'Florentin', 'MS.', ', MIT', 'INSTRUCTOR III', 'PERMANENT', '1988-01-28', 'ghielaurel28@gmail.com'),
(8, 'JTG090983', 'Domingo', 'Manuel', 'Ramos', 'MR.', ', DIT', 'ASSOCIATE PROFESSOR II', 'PERMANENT', '1975-01-13', 'domingo.m.ramos@isu.edu.ph'),
(9, 'JEL012888', 'Vic Berry', 'Palomar', 'Duque', 'MR.', 'nan', 'INSTRUCTOR I', 'COS', '1992-12-29', 'strife0970@gmail.com'),
(10, 'YRM041297', 'Jayson', 'Telan', 'Guillermo', 'MR.', 'nan', 'INSTRUCTOR I', 'COS', '1983-09-09', 'jayson.t.guillermo@isu.edu.ph'),
(11, 'JBN051881', 'Yosev', 'Ramel', 'Marte', 'MR.', 'nan', 'INSTRUCTOR I', 'COS', '1997-04-12', 'yumpitsollie@gmail.com'),
(12, 'MVQ071991', 'Junesther', 'Bulan', 'Natividad', 'MR.', 'nan', 'INSTRUCTOR I', 'COS', '0000-00-00', 'njunesther@gmail.com'),
(13, 'DMR011375', 'Mac John', 'Viernes', 'Quiming', 'MR.', 'nan', 'INSTRUCTOR I', 'COS', '1991-07-19', 'macjohnq19@gmail.com'),
(14, 'JCT033090', 'Joemar', 'Caser', 'Tisado', 'MR.', 'nan', 'INSTRUCTOR I', 'COS', '1990-03-30', 'joem033090@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prerequisites`
--

CREATE TABLE `prerequisites` (
  `subject_id` int(11) DEFAULT NULL,
  `prerequisite_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prerequisites`
--

INSERT INTO `prerequisites` (`subject_id`, `prerequisite_id`) VALUES
(14, 7),
(15, 7),
(16, 12),
(17, 8),
(18, 9),
(23, 14),
(24, 14),
(25, 14),
(31, 24),
(32, 23),
(32, 16),
(33, 24),
(33, 25),
(37, 23),
(41, 31),
(42, 33),
(43, 33),
(47, 43),
(49, 37),
(49, 43),
(53, 47),
(54, 15),
(55, 49),
(57, 24),
(57, 31),
(58, 31),
(59, 41),
(59, 58),
(60, 41),
(60, 58);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_code` varchar(10) NOT NULL,
  `room_name` varchar(50) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_section_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `day_of_week` enum('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `year_level` int(11) DEFAULT NULL,
  `semester` enum('1','2','3') DEFAULT NULL,
  `course_code` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `units` int(11) DEFAULT NULL,
  `lecture_hours` int(11) DEFAULT NULL,
  `lab_hours` int(11) DEFAULT NULL,
  `specialization` enum('Shared','WM','NS') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `year_level`, `semester`, `course_code`, `title`, `units`, `lecture_hours`, `lab_hours`, `specialization`) VALUES
(1, 1, '1', 'GEC 4', 'Purposive Communication', 3, 3, 0, 'Shared'),
(2, 1, '1', 'GEC 5', 'Art Appreciation', 3, 3, 0, 'Shared'),
(3, 1, '1', 'IT Inst. 1', 'Climate Change and Disaster Risk Management', 2, 2, 0, 'Shared'),
(4, 1, '1', 'IT GE Elec', 'Health and Wellness World', 3, 3, 0, 'Shared'),
(5, 1, '1', 'IT GE Elec', 'Foreign Language 1', 3, 3, 0, 'Shared'),
(6, 1, '1', 'IT 111', 'Introduction to Computing', 3, 2, 3, 'Shared'),
(7, 1, '1', 'IT 112', 'Computer Programming 1', 3, 2, 3, 'Shared'),
(8, 1, '1', 'PE 1', 'Physical Activity Towards Health Fitness I', 2, 2, 0, 'Shared'),
(9, 1, '1', 'NSTP 1', 'National Service Training Program 1', 3, 3, 0, 'Shared'),
(10, 1, '2', 'GEC 1', 'Understanding the Self', 3, 3, 0, 'Shared'),
(11, 1, '2', 'GEC 2', 'Reading in Philippine History', 3, 3, 0, 'Shared'),
(12, 1, '2', 'GEC 3', 'Mathematics in the Modern World', 3, 3, 0, 'Shared'),
(13, 1, '2', 'GEC 7', 'Ethics', 3, 3, 0, 'Shared'),
(14, 1, '2', 'IT 121', 'Computer Programming 2', 3, 2, 3, 'Shared'),
(15, 1, '2', 'IT 122', 'Human Computer Interaction 1', 3, 2, 3, 'Shared'),
(16, 1, '2', 'IT 123', 'Discrete Mathematics', 3, 3, 0, 'Shared'),
(17, 1, '2', 'PE 2', 'Physical Activity Towards Health Fitness II', 2, 2, 0, 'Shared'),
(18, 1, '2', 'NSTP 2', 'National Service Training Program 2', 3, 3, 0, 'Shared'),
(19, 2, '1', 'GEC 6', 'Science, Technology & Society', 3, 3, 0, 'Shared'),
(20, 2, '1', 'GEC 8', 'The Contemporary World', 3, 3, 0, 'Shared'),
(21, 2, '1', 'IT Inst 2', 'Creative and Critical Thinking', 2, 1, 3, 'Shared'),
(22, 2, '1', 'IT GE Elec', 'Foreign Language 2', 3, 3, 0, 'Shared'),
(23, 2, '1', 'IT 211', 'Data Structures and Algorithm', 3, 2, 3, 'Shared'),
(24, 2, '1', 'IT ELEC 1', 'Platform Technologies', 3, 2, 3, 'Shared'),
(25, 2, '1', 'IT ELEC 2', 'Object-Oriented Programming', 3, 2, 3, 'Shared'),
(26, 2, '1', 'IT BPO 1', 'Business Communication', 3, 3, 0, 'Shared'),
(27, 2, '1', 'PE 3', 'Physical Activity Towards Health Fitness 3', 2, 2, 0, 'Shared'),
(28, 2, '2', 'GE Elec IT', 'The Entrepreneurial Mind', 3, 3, 0, 'Shared'),
(29, 2, '2', 'GEC 9', 'The Life and Works of Rizal', 3, 3, 0, 'Shared'),
(30, 2, '2', 'IT 221', 'Information Management', 3, 2, 3, 'Shared'),
(31, 2, '2', 'IT 222', 'Networking 1', 3, 2, 3, 'Shared'),
(32, 2, '2', 'IT 223', 'Quantitative Methods', 3, 3, 0, 'Shared'),
(33, 2, '2', 'IT 224', 'Integrative Programming and Technologies', 3, 2, 3, 'Shared'),
(34, 2, '2', 'IT 225', 'Accounting for Information Technology', 3, 3, 0, 'Shared'),
(35, 2, '2', 'IT APPDEV ', 'Fundamentals of Mobile Technology', 3, 2, 3, 'WM'),
(36, 2, '2', 'PE 4', 'Physical Activity Towards Health Fitness 3', 2, 2, 0, 'Shared'),
(37, 2, '3', 'IT 226', 'Applications Development & Emerging Technologies', 3, 2, 3, 'Shared'),
(38, 2, '3', 'IT ELEC 3', 'Web Systems and Technologies', 3, 2, 3, 'Shared'),
(39, 3, '1', 'IT Inst 3', 'Fundamentals of Data Science and Analytics', 2, 1, 3, 'Shared'),
(40, 3, '1', 'IT 311', 'Advanced Database Systems', 3, 2, 3, 'Shared'),
(41, 3, '1', 'IT 312', 'Networking 2', 3, 2, 3, 'Shared'),
(42, 3, '1', 'IT 313', 'System Integration and Architecture', 3, 2, 3, 'Shared'),
(43, 3, '1', 'IT 314', 'Information Assurance and Security 1', 3, 2, 3, 'Shared'),
(44, 3, '1', 'IT APPDEV ', 'Web Application', 3, 2, 3, 'WM'),
(45, 3, '1', 'IT APPDEV ', 'Mobile Application', 3, 2, 3, 'WM'),
(46, 3, '2', 'IT GE ELEC', 'Multicultural Education', 3, 3, 0, 'Shared'),
(47, 3, '2', 'IT 321', 'Information Assurance and Security 2', 3, 2, 3, 'Shared'),
(48, 3, '2', 'IT 322', 'Social and Professional Issues', 3, 3, 0, 'Shared'),
(49, 3, '2', 'IT 323', 'Capstone Project and Research 1', 3, 2, 3, 'Shared'),
(50, 3, '2', 'IT APPDEV ', 'Game Development', 3, 2, 3, 'WM'),
(51, 3, '2', 'IT APPDEV ', 'Cloud Computing', 3, 2, 3, 'WM'),
(52, 4, '1', 'IT GE ELEC', 'Leadership and Management in the Profession', 3, 3, 0, 'Shared'),
(53, 4, '1', 'IT 411', 'Systems Administration and Maintenance', 3, 2, 3, 'Shared'),
(54, 4, '1', 'IT ELEC 4', 'Human Computer Interaction 2', 3, 2, 3, 'Shared'),
(55, 4, '1', 'IT 412', 'Capstone Project and Research 2', 3, 2, 3, 'Shared'),
(56, 4, '2', 'IT 421', 'Internship/ojt Practicum', 9, 9, 0, 'Shared'),
(57, 2, '2', 'IT NS 1', 'Cybersecurity Principles and Emerging Challenges', 3, 2, 3, 'NS'),
(58, 3, '1', 'IT NS 2', 'Virtual Systems and Services', 3, 2, 3, 'NS'),
(59, 3, '2', 'IT NS 3', 'Applied Networks', 3, 2, 3, 'NS'),
(60, 3, '2', 'IT NS 4', 'Internet of Things', 3, 2, 3, 'NS'),
(61, 4, '1', 'IT NS 5', 'Introduction to Network Career Certification', 3, 3, 0, 'NS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `section_code` (`section_code`);

--
-- Indexes for table `faculty_member`
--
ALTER TABLE `faculty_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `prerequisites`
--
ALTER TABLE `prerequisites`
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `prerequisite_id` (`prerequisite_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_code` (`room_code`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `class_section_id` (`class_section_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_member`
--
ALTER TABLE `faculty_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prerequisites`
--
ALTER TABLE `prerequisites`
  ADD CONSTRAINT `prerequisites_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `prerequisites_ibfk_2` FOREIGN KEY (`prerequisite_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_member` (`id`),
  ADD CONSTRAINT `schedules_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `schedules_ibfk_3` FOREIGN KEY (`class_section_id`) REFERENCES `class_sections` (`id`),
  ADD CONSTRAINT `schedules_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
