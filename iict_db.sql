CREATE TABLE `faculty_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(10) NOT NULL UNIQUE,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `prefix` varchar(5) DEFAULT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `position_rank` varchar(50) DEFAULT NULL,
  `employment_status` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `prerequisites` (
  `subject_id` int(11) DEFAULT NULL,
  `prerequisite_id` int(11) DEFAULT NULL,
  KEY `subject_id` (`subject_id`),
  KEY `prerequisite_id` (`prerequisite_id`),
  CONSTRAINT `prerequisites_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  CONSTRAINT `prerequisites_ibfk_2` FOREIGN KEY (`prerequisite_id`) REFERENCES `subjects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_level` int(11) DEFAULT NULL,
  `semester` enum('1','2','3') DEFAULT NULL,
  `course_code` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `units` int(11) DEFAULT NULL,
  `lecture_hours` int(11) DEFAULT NULL,
  `lab_hours` int(11) DEFAULT NULL,
  `specialization` enum('Shared','WM','NS') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
