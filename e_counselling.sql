-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 05:57 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE IF NOT EXISTS `admin_db` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_id`, `name`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(500) NOT NULL,
  `college_course` varchar(500) NOT NULL,
  `college_description` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `college_course`, `college_description`) VALUES
(1, 'School of Management Sciences', 'Bachelor of Computer Application, Master of Business Administration, Master of Computer Application, Bachelor of Commerce, Bachelor of Business Administration', 'School of management sciences varanasi lucknow india earth'),
(2, 'shepa', 'Bachelor of Computer Application, Master of Business Administration, Master of Computer Application, Bachelor of Commerce, Bachelor of Business Administration', 'Shepa'),
(3, 'Kashi institute of technology, Varanasi', 'Bachelor of Technology, Master of Business Administration, Master of Computer Application,', 'Kashi Institute Of Technology KIT and Kashi Institute of Pharmacy KIP is best and in top engineering colleges in Varanasi among all private Engineering'),
(4, 'Indian institute of technology', 'Bachelor of Technology, Master of Business Administration, Master of Computer Application,', 'The Indian Institutes of Technology (IITs) are autonomous public institutes of higher education, located in India. '),
(5, 'sms, lucknow', 'Bachelor of Technology, Master of Business Administration, Master of Computer Application,', 'description'),
(6, 'Banaras Hindu University', 'Bachelor of Art, Bachelor of commerce, Bachelor of science in it, Bachelor of science in maths, Bachelor of science in Bio', 'Banaras Hindu University; commonly referred to as BHU; formerly known as Central Hindu College is a public central university located in Varanasi, Uttar Pradesh.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_duration` varchar(20) NOT NULL,
  `course_eligibility` varchar(50) NOT NULL,
  `course_scope` varchar(5000) NOT NULL,
  `course_description` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_duration`, `course_eligibility`, `course_scope`, `course_description`) VALUES
(1, 'Bachelor of Computer Application', '3', '12-Math', 'Computer Programmer, Developer job in it field, database administrator', 'Bca is known as bachelor of computer application is now days becoming popular.'),
(3, 'Bachelor of Business administration', '3', '12-commerce', 'CA, Accounting, Accountancy', 'bacher lof osi nanda'),
(4, 'Bachelor of Technology', '4 ', '12-math', 'Engineering,Devloper', ' the Bachelor of Technology (BTech) degrees are engineering programs of four years in duration. Honours is awarded to graduates who achieve a higher standard of excellence (BTech(Hons))'),
(5, 'Bachelor of Science', '3', '12-math', 'Engineering,Devloper', 'Bachelor of computer science'),
(6, 'Master of Business Administration', '2', 'Bachelor of Computer Application, Bahelor of Busin', 'Manger, Executive Officers', 'The Master of Business Administration (MBA or M.B.A.) is a masters degree in business administration (management).'),
(8, 'Bachelor of Science in Bio', '3', '12-bio', 'Research, Profession, Nursing', 'B.Sc. Biology or Bachelor of Science in Biology is an undergraduate Biology course. Biology is a natural science that is concerned with the study of life and living'),
(9, 'Bachelor of Arts', '3', '12-art', 'lawyer, Politics, Professor', 'A Bachelor of Arts is a bachelors degree awarded for an undergraduate course or program in either the liberal arts, the sciences, or both.'),
(10, 'Bachelor of Science in maths', '3', '12-math', 'Profession, Msc, Analyst', 'B.Sc. Mathematics or Bachelor of Science in Mathematics is an undergraduate Mathematics course. Mathematics is the study of quantity, structure, space'),
(11, 'Master of Science in maths', '2', 'Bachelor of Science in maths', 'Profession, Analyst', 'M.sc. Mathematics or Master of Science in Mathematics is an Postgraduate Mathematics course. Mathematics is the study of quantity, structure, space'),
(12, 'Master of Science in it', '2', 'Bachelor of Science in it', 'Professor, Analyst', 'M.sc. it or Master of Science in information technology is an Postgraduate course.'),
(13, 'Intermediate(11,12) Maths', '2', '10', 'Bachelor of Technology, Bachelor of Computer Application, Bachelor of Science', '11 12 mathematics course leads a student to be a professional engineer.'),
(14, 'Intermediate(11,12) commerce', '2', '10', 'Bachelor of Commerce, Bachelor of Business Administration', '11 12 commerce course leads a student to be a professional accountant.');

-- --------------------------------------------------------

--
-- Table structure for table `course_enquiry`
--

CREATE TABLE IF NOT EXISTS `course_enquiry` (
  `enquiry_id` int(10) NOT NULL,
  `enquiry_user_id` int(10) NOT NULL,
  `enquiry_eligibility` varchar(50) NOT NULL,
  `enquiry_passing_year` date NOT NULL,
  `enquiry_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_enquiry`
--

INSERT INTO `course_enquiry` (`enquiry_id`, `enquiry_user_id`, `enquiry_eligibility`, `enquiry_passing_year`, `enquiry_date`) VALUES
(1, 1, '12-Math', '2017-04-20', '2017-04-19'),
(2, 1, '12-Math', '2017-04-20', '2017-04-19'),
(3, 4, '12-Math', '2017-04-20', '2017-04-20'),
(4, 1, '10', '2017-05-01', '2017-05-01'),
(5, 1, '10', '2017-05-01', '2017-05-01'),
(6, 1, '10', '2017-05-01', '2017-05-01'),
(7, 1, '12-Math', '2017-05-01', '2017-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE IF NOT EXISTS `user_db` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`user_id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Shivam Singh', 'shivamsinghcnd@gmail.com', '9876543210', '9876543210'),
(3, 'Piyush Anand Verma', 'piyushav94@gmail.com', '1122334455', '123'),
(4, 'kaushabh', 'kaushabh.j@gmail.com', '890277658', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_enquiry`
--
ALTER TABLE `course_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `course_enquiry`
--
ALTER TABLE `course_enquiry`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
