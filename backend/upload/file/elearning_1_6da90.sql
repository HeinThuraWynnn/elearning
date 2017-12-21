-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2017 at 06:29 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `assignment_course_id` int(11) NOT NULL,
  `assignment_file` varchar(255) NOT NULL,
  `assignment_uploaded_date` date NOT NULL,
  `assignment_student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_short_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enroll_id` int(11) NOT NULL,
  `enroll_student_reg_no` int(11) DEFAULT NULL,
  `enroll_course_code` int(11) DEFAULT NULL,
  `enroll_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `event_short_desc` text,
  `event_detail` longtext,
  `event_hash_tag` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `result_student_id` int(11) NOT NULL,
  `result_status` tinytext NOT NULL,
  `result_exam_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_reg_no` int(11) NOT NULL,
  `student_code` varchar(255) NOT NULL,
  `student_user_id` int(11) DEFAULT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_dob` date NOT NULL,
  `student_add` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_user_id` int(11) NOT NULL,
  `teacher_course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `user_type_id`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(27, 'Admin', 1, 'xq8V1_Q0Q6mXWDNdo_m2nQOheu6EVJaY', '$2y$13$Gw9IQbPQWzw3smU52UxsVOWv1M5MhxcfUYrAZac/5Lo5wBgfTuyyq', NULL, 'admin@mail.com', 10, 1506845684, 1506845684),
(28, 'Hein', 3, 'DDlMfagngq1O5nMEQam1Q6nyNfYmKpqs', '$2y$13$SlgjKh5.xR9QxZUVhOzuauRBUzHFIRnMtYBNkX.pg9l8.JE5Y73sm', NULL, 'hein@mail.com', 10, 1507011600, 1507011600),
(29, 'user2', 3, '1yoTWvTxUrDJqO_bA2uQg-czbmTBbC7-', '$2y$13$n84wiM7VM/2Zg./E62gXzO2kd1Ofxwc8lGXiRNTSjKBbEReX6SfPe', NULL, 'hein1@mail.com', 10, 1507012223, 1507012223),
(30, 'Teacher', 3, 'JWWA1P288q7zaozFjTDisYtnF2508Qlr', '$2y$13$Muh9M/AAavD.81250lUNYu1TP/j9AFdvEpJPIEKSdbrsjYHnmkwAO', NULL, 'teacher@mail.com', 10, 1507044783, 1507044783),
(31, 'Teacher1', 3, 'LYOTwRpQV8fOQI1jJeQOedDBk4oRdDgy', '$2y$13$OQyEhl9.rm/QBWo3HBFkQe7XgKT/V5ydT6xsO/iIo1KN/xK/sevRa', NULL, 'teacher1@mail.com', 10, 1507044829, 1507044829),
(32, 'Teacher2', 3, 'iSz5u6Hf9aLTiwmvaqf4DqXx9Q3YQn0E', '$2y$13$C10EQUwz/JEA/zD8kKMH7OQZPQkdS15Ee7d9.wa/yhzwacqvnBofS', NULL, 'teacher2@mail.com', 10, 1507045043, 1507045043),
(33, 'Teacher3', 3, '_t6e5d00Afj3wm0mvaiFweIR_MEXgZge', '$2y$13$OYFC.orpAECz0h6Xa0OpW.dTRsxKU3sfkWcj6/.tE8eLlqrPK8RLy', NULL, 'teacher3@mail.com', 10, 1507045137, 1507045137),
(34, 'test', 3, 'Sk3y27Bqlz3EXSJWAZnNnZORy4a0M_v1', '$2y$13$C.OyZT6nzCvH56T4g.vPTuAut67JP5II4aofwvomvlAb8kcrtTv0K', NULL, 'teast@mail.com', 10, 1507045274, 1507045274),
(35, 'tests', 3, 'mvQKAN_hAcNivvavzNNUNsQyOGVIu4TS', '$2y$13$k5OJ2.AthuATULaxgLG8i.7nCz02GmEy.XBKUvqArM6DTwrgKy7Ym', NULL, 'teasts@mail.com', 10, 1507045317, 1507045317),
(36, 'tessts', 3, 'QmWhDdO6q66T6dvji78Ad_-dmAwfNZU9', '$2y$13$Lpa1mJ//cSZfkRvi9OVOgOuOllCQ6nHwMyuy94GGn.2tVY81mSrmm', NULL, 'teassts@mail.com', 10, 1507045341, 1507045341),
(37, 'tesstss', 3, '9DctN9ommJGFcsOniD0jkBg3LWmnrdqu', '$2y$13$hf2VYUWOBdyUlI4k3wwc3uxOlDqzYcGqSQi2HvJvnT72Ed0wRcWTG', NULL, 'teasstds@mail.com', 10, 1507045527, 1507045527),
(38, 'ta', 3, 'WSRhKW9blXHJA1HOQ0dd0klUOHH7ekPs', '$2y$13$vsW3wkDBNTmBQ8lGZ9V0Z.yv0WWZ.9Vl/YFm7xCXQ7ax2yro0KQ4m', NULL, 'teds@mail.com', 10, 1507045565, 1507045565),
(39, 'af', 3, 'lsQRFUR4K5iUu8ydQqbLzUz1yJtDqaXX', '$2y$13$ZDcG86vwPUIly9JYb3oYrudBXEv2U4WelyUehQx1R7apq8TJL65ea', NULL, 'af@mial.com', 10, 1507045584, 1507045584);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `assignment_course_id` (`assignment_course_id`),
  ADD KEY `assignment_student_id` (`assignment_student_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `enroll_course_id` (`enroll_course_code`),
  ADD KEY `enroll_student_id` (`enroll_student_reg_no`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `result_student_id` (`result_student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_reg_no`),
  ADD KEY `student_user_id` (`student_user_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `teacher_user_id` (`teacher_user_id`),
  ADD KEY `teacher_user_id_2` (`teacher_user_id`),
  ADD KEY `teacher_course_id` (`teacher_course_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_code` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_reg_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`assignment_course_id`) REFERENCES `course` (`course_code`),
  ADD CONSTRAINT `assignment_ibfk_2` FOREIGN KEY (`assignment_student_id`) REFERENCES `student` (`student_reg_no`);

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`enroll_student_reg_no`) REFERENCES `student` (`student_reg_no`),
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`enroll_course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`result_student_id`) REFERENCES `student` (`student_reg_no`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`student_user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`teacher_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`teacher_course_id`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`user_type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
