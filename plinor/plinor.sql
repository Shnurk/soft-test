-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2020 at 08:27 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plinor`
--

-- --------------------------------------------------------

--
-- Table structure for table `hash`
--

CREATE TABLE `hash` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hash`
--

INSERT INTO `hash` (`id`, `id_user`, `hash`) VALUES
(1, 1, '50c4d32df75c5353c63951bd29fc010a'),
(2, 2, 'e75aabb43c8e0e66b595637b9c024ddc'),
(3, 4, 'c42e78d2692b224dfa1b156b5e8064b1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `id_reader` int(11) NOT NULL,
  `theme` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oper_it`
--

CREATE TABLE `oper_it` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tech` text NOT NULL,
  `time_s` date NOT NULL,
  `time_f` date NOT NULL,
  `status` text NOT NULL,
  `aprov` int(11) NOT NULL,
  `tech_return` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

CREATE TABLE `tech` (
  `id` int(11) NOT NULL,
  `inv_id` text NOT NULL,
  `model_full` text NOT NULL,
  `model_short` text NOT NULL,
  `serial_id` text NOT NULL,
  `model_opt` text,
  `model_cond` text,
  `stg_name` text NOT NULL,
  `model_work` int(11) NOT NULL,
  `model_reserve` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '1',
  `photo_gall` text,
  `typ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tech`
--

INSERT INTO `tech` (`id`, `inv_id`, `model_full`, `model_short`, `serial_id`, `model_opt`, `model_cond`, `stg_name`, `model_work`, `model_reserve`, `amount`, `photo_gall`, `typ`) VALUES
(4, 'ИН1235235', 'ПМ123456789', 'КМ123456789', 'СН123456789', 'Хорошее, я бы даже сказал классное', 'Примечаний нет', 'Кукуево ПГТ', 0, 0, 3, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text,
  `password` text,
  `r_name` text,
  `r_surname` text,
  `r_secname` text,
  `email` text,
  `mode` int(11) DEFAULT NULL,
  `avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `r_name`, `r_surname`, `r_secname`, `email`, `mode`, `avatar`) VALUES
(1, 'admin', 'admin', '', '', '', '', 5, ''),
(2, 'moder', 'moder', '', '', '', '', 4, ''),
(3, 'U3sryt04n23', 'Pf9itae33f1', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'U2fh81kz288', 'P7213ityrie', 'Адольф', 'Богомолов', 'Визирионович', '1234@pepe.tel', 0, NULL),
(6, 'Ui7r61ez230', 'Ptakestdrb0', 'Игорь', 'Хрисов', 'Визирионович', 'god@heaven.doors', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hash`
--
ALTER TABLE `hash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oper_it`
--
ALTER TABLE `oper_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tech`
--
ALTER TABLE `tech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hash`
--
ALTER TABLE `hash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oper_it`
--
ALTER TABLE `oper_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tech`
--
ALTER TABLE `tech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
