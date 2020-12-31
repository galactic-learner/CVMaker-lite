-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 07:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmakerc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(11) NOT NULL,
  `cv_id` varchar(11) NOT NULL,
  `cv_style_name` varchar(20) NOT NULL,
  `creation_date` date NOT NULL,
  `sr_temp` int(1) NOT NULL,
  `is_parmanent` text NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `title` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(200) NOT NULL,
  `website` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `git` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `image_file` varchar(100) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `j_title` text NOT NULL,
  `employer` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `we_start_date` varchar(50) NOT NULL,
  `we_end_date` varchar(50) NOT NULL,
  `we_start_year` varchar(50) NOT NULL,
  `we_end_year` varchar(50) NOT NULL,
  `responsibilities` varchar(1000) NOT NULL,
  `proj_name` text NOT NULL,
  `proj_type` text NOT NULL,
  `proj_desc` varchar(1200) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_location` varchar(50) NOT NULL,
  `degree` text NOT NULL,
  `field_of_study` text NOT NULL,
  `passing_year` varchar(50) NOT NULL,
  `gpa` varchar(30) NOT NULL,
  `skill` text NOT NULL,
  `skill_level` text NOT NULL,
  `language` text NOT NULL,
  `l_skill_level` text NOT NULL,
  `interest` varchar(100) NOT NULL,
  `ref_name` text NOT NULL,
  `ref_designation` text NOT NULL,
  `ref_organization` text NOT NULL,
  `ref_contact` varchar(13) NOT NULL,
  `reference_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `cv_id`, `cv_style_name`, `creation_date`, `sr_temp`, `is_parmanent`, `f_name`, `l_name`, `title`, `email`, `phone`, `address`, `website`, `linkedin`, `git`, `twitter`, `image_file`, `summary`, `j_title`, `employer`, `city`, `we_start_date`, `we_end_date`, `we_start_year`, `we_end_year`, `responsibilities`, `proj_name`, `proj_type`, `proj_desc`, `school_name`, `school_location`, `degree`, `field_of_study`, `passing_year`, `gpa`, `skill`, `skill_level`, `language`, `l_skill_level`, `interest`, `ref_name`, `ref_designation`, `ref_organization`, `ref_contact`, `reference_note`) VALUES
(180, 'cv-44624', 'style_01', '2020-07-26', 1, '1', 'Alan', 'Doe', 'Back-End Web Developer', 'ahad@gmail.com', '01844332211', 'GEC, CTG', 'www.ahad.portfolio', 'www.linkedin.com/ahad', 'https://github.com/ahad', '', 'img/uploads/image.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. ', '[\"Lead Developer\",\"UI Developer\"]', '[\"Startup Hubs\",\"Amazon\"]', '[\"San Francisco\",\"London\"]', '[\"2019-07-01\",\"2018-07-01\"]', '[\"2020-07-07\",\"2019-07-07\"]', '[\"2019\",\"2018\"]', '[\"2020\",\"2019\"]', '[\"Role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo. \",\"Role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo. \"]', '[\"CoderPro\",\"DevCard\",\"Nova Pro\"]', '', '[\"A responsive website template designed to help developers launch their software projects.\",\"A portfolio website template designed for software developers. \",\"A responsive website template designed to help web developers/designers market their services. \"]', '[\"IIUC\",\"DIIT\",\"Sunrise School & College\"]', '[\"Chittagong\",\"Chittagong\",\"Chittagong\"]', '[\"BSc In Computer Science\",\"Diploma In Computer Science\",\"SSC\"]', '[\"Computer Science\",\"Computer Science\",\"Science\"]', '[\"2018\",\"2014\",\"2010\"]', '[\"3.80\",\"3.50\",\"4.50\"]', '[\"PHP & MySQL\",\"HTML5 & CSS\",\"Javascript & jQuery\",\"Python & Django\",\"Photoshop & Sketch\"]', '[\"intermediate\",\"intermediate\",\"intermediate\",\"intermediate\",\"beginner\"]', '[\"English\",\"Bengali\",\"French\"]', '[\"professional\",\"native\",\"elementary\"]', '[\"Snowboarding\",\"Cooking\",\"Climbing\"]', '', '', '', '', '[\"References available upon request\",\"\"]'),
(301, 'cv-36420', 'basic_style_01', '2020-08-17', 1, '0', 'Alan', 'Doe', 'Back-End Web Developer', 'alan.doe@site.com', '01844332211', 'GEC, CTG', 'www.site.com', 'linkedin.com/username', 'github.com/username', '@username', 'img/uploads/image.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. ', '[\"Lead Developer\",\"UI Developer\"]', '[\"Startup Hubs\",\"Amazon\"]', '[\"San Francisco\",\"London\"]', '[\"2020-08-01\",\"2020-08-01\"]', '[\"2020-08-07\",\"2020-08-07\"]', '[\"2020\",\"2020\"]', '[\"2020\",\"2020\"]', '[\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \"]', '[\"CoderPro\",\"DevCard\",\"Nova Pro\"]', '[\"Open Source\",\"Open Source\",\"Open Source\"]', '[\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \"]', '[\"IIUC\",\"DIIT\",\"Sunrise School & College\"]', '[\"Chittagong\",\"Chittagong\",\"Chittagong\"]', '[\"BSc In Computer Science\",\"Diploma In Computer Science\",\"SSC\"]', '[\"Computer Science\",\"Computer Science\",\"Science\"]', '[\"2020\",\"2020\",\"2020\"]', '[\"3.80\",\"3.50\",\"4.50\"]', '[\"PHP & MySQL\",\"HTML5 & CSS\",\"Javascript & jQuery\",\"Python & Django\",\"Photoshop & Sketch\"]', '[\"Intermediate\",\"Intermediate\",\"Intermediate\",\"Intermediate\",\"Beginner\"]', '[\"English\",\"Bengali\",\"French\"]', '[\"Professional\",\"Native\",\"Elementary\"]', '[\"Climbing\",\"Snowboarding\",\"Cooking\"]', 'Mr. Ibrahim', 'Head of department, CSE', 'IIUC', '018-11-223344', ''),
(305, 'cv-93050', 'elegant_style_03', '2020-08-17', 1, '0', 'Alan', 'Doe', 'Back-End Web Developer', 'alan.doe@site.com', '01844332211', 'GEC, CTG', 'www.site.com', 'linkedin.com/username', 'github.com/username', '@username', 'img/uploads/image.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. ', '[\"Lead Developer\",\"UI Developer\"]', '[\"Startup Hubs\",\"Amazon\"]', '[\"San Francisco\",\"London\"]', '[\"2020-08-01\",\"2020-08-01\"]', '[\"2020-08-01\",\"2020-08-07\"]', '[\"2020\",\"2020\"]', '[\"2020\",\"2020\"]', '[\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \"]', '[\"CoderPro\",\"DevCard\",\"Nova Pro\"]', '[\"Open Source\",\"Open Source\",\"Open Source\"]', '[\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \"]', '[\"IIUC\",\"DIIT\",\"Sunrise School & College\"]', '[\"Chittagong\",\"Chittagong\",\"Chittagong\"]', '[\"BSc In Computer Science\",\"Diploma In Computer Science\",\"SSC\"]', '[\"Computer Science\",\"Computer Science\",\"Science\"]', '[\"2020\",\"2020\",\"2020\"]', '[\"3.80\",\"3.50\",\"4.50\"]', '[\"PHP & MySQL\",\"HTML5 & CSS\",\"Javascript & jQuery\",\"Python & Django\",\"Photoshop & Sketch\"]', '[\"Intermediate\",\"Intermediate\",\"Intermediate\",\"Intermediate\",\"Beginner\"]', '[\"English\",\"Bengali\",\"French\"]', '[\"Professional\",\"Native\",\"Elementary\"]', '[\"Climbing\",\"Snowboarding\",\"Cooking\"]', 'Mr. Ibrahim', 'Head of department, CSE', 'IIUC', '018-11-223344', ''),
(307, 'cv-14812', 'elegant_style_03', '2020-08-17', 1, '0', 'Alan', 'Doe', 'Back-End Web Developer', 'alan.doe@site.com', '01844332211', 'GEC, CTG', 'www.site.com', 'linkedin.com/username', 'github.com/username', '@username', 'img/uploads/image.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. ', '[\"Lead Developer\",\"UI Developer\"]', '[\"Startup Hubs\",\"Amazon\"]', '[\"San Francisco\",\"London\"]', '[\"2020-08-01\",\"2020-08-01\"]', '[\"2020-08-02\",\"2020-08-07\"]', '[\"2020\",\"2020\"]', '[\"2020\",\"2020\"]', '[\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \"]', '[\"CoderPro\",\"DevCard\",\"Nova Pro\"]', '[\"Open Source\",\"Open Source\",\"Open Source\"]', '[\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \",\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo a expedita, soluta vero eaque. Maxime nulla aperiam minima blanditiis a autem vero ratione eveniet, doloremque quidem mollitia suscipit incidunt non. \"]', '[\"IIUC\",\"DIIT\",\"Sunrise School & College\"]', '[\"Chittagong\",\"Chittagong\",\"Chittagong\"]', '[\"BSc In Computer Science\",\"Diploma In Computer Science\",\"SSC\"]', '[\"Computer Science\",\"Computer Science\",\"Science\"]', '[\"2020\",\"2020\",\"2020\"]', '[\"3.80\",\"3.50\",\"4.50\"]', '[\"PHP & MySQL\",\"HTML5 & CSS\",\"Javascript & jQuery\",\"Python & Django\",\"Photoshop & Sketch\"]', '[\"Intermediate\",\"Intermediate\",\"Intermediate\",\"Intermediate\",\"Beginner\"]', '[\"English\",\"Bengali\",\"French\"]', '[\"Professional\",\"Native\",\"Elementary\"]', '[\"Climbing\",\"Snowboarding\",\"Cooking\"]', 'Mr. Ibrahim', 'Head of department, CSE', 'IIUC', '018-11-223344', ''),
(308, 'cv-84803', 'basic_style_01', '2020-08-17', 1, '0', 'Alan', 'Doe', 'Back-End Web Developer', 'alan.doe@site.com', '01844332211', 'GEC, CTG', 'www.site.com', 'linkedin.com/username', 'github.com/username', '@username', 'img/uploads/', '', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"1970\",\"1970\"]', '[\"1970\",\"1970\"]', '[\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"Open Source\",\"Open Source\",\"Open Source\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"1970\",\"1970\",\"1970\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\"]', '[\"Expert\",\"Expert\",\"Expert\",\"Expert\",\"Expert\"]', '[\"\",\"\",\"\"]', '[\"Native\",\"Native\",\"Native\"]', '[\"\",\"\",\"\"]', '', '', '', '', ''),
(310, 'cv-62170', 'basic_style_01', '2020-08-17', 1, '0', 'Alan', 'Doe', '', '', '', '', '', '', '', '', 'img/uploads/image.jpg', '', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"1970\",\"1970\"]', '[\"1970\",\"1970\"]', '[\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"Open Source\",\"Open Source\",\"Open Source\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"1970\",\"1970\",\"1970\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\"]', '[\"Expert\",\"Expert\",\"Expert\",\"Expert\",\"Expert\"]', '[\"\",\"\",\"\"]', '[\"Native\",\"Native\",\"Native\"]', '[\"\",\"\",\"\"]', '', '', '', '', ''),
(311, 'cv-54536', 'light_style_02', '2020-08-17', 1, '0', 'Alan', 'Doe', '', '', '', '', '', '', '', '', 'img/uploads/', '', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"1970\",\"1970\"]', '[\"1970\",\"1970\"]', '[\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"Open Source\",\"Open Source\",\"Open Source\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"1970\",\"1970\",\"1970\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\"]', '[\"Expert\",\"Expert\",\"Expert\",\"Expert\",\"Expert\"]', '[\"\",\"\",\"\"]', '[\"Native\",\"Native\",\"Native\"]', '[\"\",\"\",\"\"]', '', '', '', '', ''),
(313, 'cv-54035', 'elegant_style_03', '2020-08-17', 1, '0', 'Jessey', 'Anderson', '', '', '', '', '', '', '', '', 'img/uploads/', '', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"\",\"\"]', '[\"1970\",\"1970\"]', '[\"1970\",\"1970\"]', '[\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"Open Source\",\"Open Source\",\"Open Source\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\"]', '[\"1970\",\"1970\",\"1970\"]', '[\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\"]', '[\"Expert\",\"Expert\",\"Expert\",\"Expert\",\"Expert\"]', '[\"\",\"\",\"\"]', '[\"Native\",\"Native\",\"Native\"]', '[\"\",\"\",\"\"]', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
