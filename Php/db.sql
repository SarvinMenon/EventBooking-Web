-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 10:30 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `id` int(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bookdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`id`, `package`, `name`, `email`, `phone`, `bookdate`) VALUES
(1, '', 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', ''),
(2, 'Wedding dinner', 'KRESHA A/P D.VASUTHEVAN', 'dsfdsv@gmail.com', '0166682498', '2020-10-22'),
(3, '', 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', '2020-10-21'),
(4, 'Wedding dinner', 'KRESHA A/P D.VASUTHEVAN', 'kellykresha@yahoo.com', '0166682498', '2020-10-24'),
(5, 'Private party', 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', '2020-10-31'),
(6, '', 'KRESHA A/P D.VASUTHEVAN', 'kellykresha@yahoo.com', '0166682498', '2020-10-14'),
(7, 'Corporate party', 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', '2020-09-24'),
(8, 'Private party', 'VASUTHEVAN DAMOTHARAN', 'vasukent@gmail.com', '0168322459', '2020-10-01'),
(9, 'Private party', 'VASUTHEVAN DAMOTHARAN', 'vasukent@gmail.com', '0168322459', '2020-10-17'),
(10, 'Wedding dinner', 'KRESHA A/P D.VASUTHEVAN', 'vasukent@gmail.com', '0166682498', '2020-10-02'),
(11, 'Wedding dinner', 'KRESHA A/P D.VASUTHEVANjiii', 'vasukent@gmail.com', '0166682498', '2020-03-11'),
(12, 'Wedding dinner', 'kiii', 'vasukent@gmail.com', '0168322459', '2020-10-13'),
(13, 'Wedding dinner', 'VASUTHEVAN DAMOTHARAN', 'vasukent@gmail.com', '0168322459', '2020-03-07'),
(14, 'Private party', 'VASUTHEVAN DAMOTHARAN', 'vasukent@gmail.com', '0168322459', '2020-10-07'),
(15, 'Private party', 'KRESHA A/P D.VASUTHEVAN', 'vasukent@gmail.com', '0166682498', '2020-10-10'),
(16, 'Corporate party', 'KRESHA A/P D.VASUTHEVAN', 'vasukent@gmail.com', '0166682498', '2020-10-23'),
(17, '', 'KRESHA A/P D.VASUTHEVAN', 'vasukent@gmail.com', 'dfdgggg', '2020-11-25'),
(18, '', 'KRESHA A/P D.VASUTHEVAN', 'vasukent@gmail.com', '0166682498', '2020-07-07'),
(19, 'Corporate party', 'VASUTHEVAN DAMOTHARAN', '', '016-6682498', '2020-01-08'),
(20, 'Wedding dinner', 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', '2020-02-11'),
(21, 'Private party', 'VASUTHEVAN DAMOTHARAN', 'vasukent@gmail.com', '0168322459', '2020-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Hpnum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `name`, `Hpnum`, `email`, `Message`) VALUES
(1, '', '', '', ''),
(2, 'KRESHA A/P D.VASUTHEVAN', '0128207843783', 'kreshavasu@gmail.com', 'dgfxhb fbfhgh'),
(3, 'irjgirg', '939479374', 'kellykresha@yahoo.com', 'kdfgkfjgkfjgkfdjg'),
(4, 'KRESHA A/P D.VASUTHEVAN', 'jbjkbjkbjk', 'kreshavasu@gmail.com', 'jkhuho oijiji'),
(5, 'KRESHA A/P D.VASUTHEVAN', 'jbjkbjkbjk', 'kreshavasu@gmail.com', 'dgfg ffgg'),
(6, 'kre', '0128207843783', 'kreshavasu@gmail.com', 'its me'),
(7, 'KRESHA A/P D.VASUTHEVAN', '0128207843783', 'kreshavasu@gmail.com', 'please work'),
(8, 'KRESHA A/P D.VASUTHEVAN', 'jbjkbjkbjk', 'vasukent@gmail.com', 'dsvdgfdg'),
(9, 'VASUTHEVAN DAMOTHARAN', 'jbjkbjkbjk', 'vasukent@gmail.com', 'xbfdbfdb'),
(10, 'VASUTHEVAN DAMOTHARAN', 'jbjkbjkbjk', 'vasukent@gmail.com', 'xbfdbfdb'),
(11, 'KRESHA A/P D.VASUTHEVAN', '23', 'vasukent@gmail.com', 'sdfdsgd'),
(12, 'KRESHA A/P D.VASUTHEVAN', 'jbjkbjkbjk', 'vasukent@gmail.com', 'fhfdhfdh'),
(13, 'KRESHA A/P D.VASUTHEVAN', 'jbjkbjkbjk', 'kreshavasu@gmail.com', 'dsfdsg'),
(14, 'VASUTHEVAN DAMOTHARAN', '123-456-7890', 'vasukent@gmail.com', 'zfdsg'),
(15, 'KRESHA A/P D.VASUTHEVAN', '016-6682498', 'vasukent@gmail.com', 'dsgsdgdsg'),
(16, 'KRESHA A/P D.VASUTHEVAN', '016-6682498', 'vasukent@gmail.com', 'dgdgffd');

-- --------------------------------------------------------

--
-- Table structure for table `db_service`
--

CREATE TABLE `db_service` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_service`
--

INSERT INTO `db_service` (`id`, `name`, `email`, `phone`, `message`, `date`, `course`) VALUES
(1, 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '', 'dfbdfbgngfn', '2020-09-15', 'Decor,Emcee,Catering,'),
(2, 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', 'dfbdfbgngfn', '2020-09-15', 'Decor,Emcee,Catering,'),
(3, 'KRESHA A/P D.VASUTHEVAN', 'kellykresha@yahoo.com', '0166682498', 'dfvdfbfbf', '2020-09-30', 'HairMakeup,Decor,Emcee,'),
(4, 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', 'cvbvc', '2020-09-11', 'Decor,Emcee,'),
(5, 'KRESHA A/P D.VASUTHEVAN', 'vasukent@gmail.com', '', '.nkfnkfdnb', '2020-10-30', 'Decor,Emcee,');

-- --------------------------------------------------------

--
-- Table structure for table `service_table`
--

CREATE TABLE `service_table` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_table`
--

INSERT INTO `service_table` (`id`, `name`, `email`, `hp`, `message`, `date`) VALUES
(1, 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', '', ''),
(2, 'KRESHA A/P D.VASUTHEVAN', 'kellykresha@yahoo.com', '0166682498', 'please work for messages.', ''),
(3, 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', 'dgdfg', ''),
(4, 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', 'ok', ''),
(5, 'KRESHA A/P D.VASUTHEVAN', 'kreshavasu@gmail.com', '0166682498', 'dhgfhgfh', '2020-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_service`
--
ALTER TABLE `db_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_table`
--
ALTER TABLE `service_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `db_service`
--
ALTER TABLE `db_service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_table`
--
ALTER TABLE `service_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
