-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2024 at 08:03 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: assignment
--

-- --------------------------------------------------------

--
-- Table structure for table contacts
--

CREATE TABLE contacts (
  contact_id int UNSIGNED NOT NULL,
  first_name varchar(500) NOT NULL,
  last_name varchar(500) NOT NULL,
  email varchar(500) NOT NULL,
  comments varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table contacts
--

INSERT INTO contacts (contact_id, first_name, last_name, email, comments) VALUES
(1, 'aaaa', 'aaaaa', 'aaaa', 'aaaaa'),
(2, '', '', 'adad@gmail.com', 'dadda'),
(3, 'sf', 'sfsf', 'sfsf', 'fsf'),
(4, 'agag', 'gsgs', 'fa@gamil', 'dsa'),
(5, '.Emmanuel.', '.Opadele.', '.olatopmide@gmail.com.', '.Testing Contactts.'),
(6, '.Emmanuel.', '.Opadele.', '.olatopmide@gmail.com.', '.comment here.'),
(7, '.Emmanuel.', '.Opadele.', '.olatopmide@gmail.com.', '.comment here.'),
(8, '.Emmanuel.', '.Opadele.', '.olatopmide@gmail.com.', '.comment here.'),
(9, '.Emmanuel.', '.Opadele.', '.olatopmide@gmail.com.', '.comment here.'),
(10, '.Emmanuel.', '.Opadele.', '.olatopmide@gmail.com.', '.comment here.'),
(11, '.Emmanuel.', '.Opadele.', '.olatopmide@gmail.com.', '.comment here.'),
(12, '.Test.', '.again.', '.yes@gmail.com.', '.Details page contact.');

-- --------------------------------------------------------

--
-- Table structure for table employees
--

CREATE TABLE employees (
  id smallint UNSIGNED NOT NULL,
  fname varchar(50) NOT NULL,
  lname varchar(75) NOT NULL,
  job_id int UNSIGNED NOT NULL,
  image varchar(50) NOT NULL,
  thumb varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table employees
--

INSERT INTO employees (id, fname, lname, job_id, image, thumb) VALUES
(1, 'Mary', 'Smith', 1, 'person1.jpg', 'person1th.jpg'),
(2, 'Bob', 'Delgado', 2, 'person2.jpg', 'person2th.jpg'),
(3, 'Emily', 'Strange', 2, 'person3.jpg', 'person3th.jpg'),
(4, 'Greg', 'Murphy', 3, 'person4.jpg', 'person4th.jpg'),
(5, 'Wanda', 'Zymote', 3, 'person5.jpg', 'person5th.jpg');

-- --------------------------------------------------------

--
-- Table structure for table jobs
--

CREATE TABLE jobs (
  id int UNSIGNED NOT NULL,
  title varchar(150) NOT NULL,
  description varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table jobs
--

INSERT INTO jobs (id, title, description) VALUES
(1, 'CEO', 'The CEO is the highest-ranking executive responsible for the overall success of the organization. They set strategic goals, make major corporate decisions, and ensure the company\'s vision is realized. They work closely with stakeholders, the board of directors, and other executives to drive growth and profitability.'),
(2, 'Sales', 'The sales role focuses on generating revenue by identifying and closing business opportunities. Responsibilities include managing client relationships, meeting sales targets, and understanding customer needs to offer tailored solutions. Sales professionals are critical for driving business growth and expanding market reach.'),
(3, 'Marketing', 'The marketing role involves promoting the company’s products or services to attract and retain customers. This includes developing marketing strategies, managing campaigns, analyzing market trends, and ensuring consistent brand messaging. Marketing drives awareness, engagement, and leads for the sales team.'),
(4, 'Administrator', 'The administrator oversees day-to-day operations, ensuring that the organization\'s processes run smoothly. They handle scheduling, document management, resource allocation, and support across departments. Administrators are essential for maintaining order and efficiency within the workplace.'),
(5, 'Sales', 'The sales role focuses on generating revenue by identifying and closing business opportunities. Responsibilities include managing client relationships, meeting sales targets, and understanding customer needs to offer tailored solutions. Sales professionals are critical for driving business growth and expanding market reach.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table contacts
--
ALTER TABLE contacts
  ADD PRIMARY KEY (contact_id);

--
-- Indexes for table employees
--
ALTER TABLE employees
  ADD PRIMARY KEY (id);

--
-- Indexes for table jobs
--
ALTER TABLE jobs
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table contacts
--
ALTER TABLE contacts
  MODIFY contact_id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table employees
--
ALTER TABLE employees
  MODIFY id smallint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table jobs
--
ALTER TABLE jobs
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
