-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 31-Jul-2019 às 12:31
-- Versão do servidor: 5.6.34
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waiter`
--
CREATE DATABASE IF NOT EXISTS `waiter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `waiter`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `phonenumber`, `description`, `password`, `usertype`, `creator_id`) VALUES
(6, 'Cristierato', 'h3has@viphone.eu.org', '+1-202-555-0180', 'sohentais.com', 'cudemacacoloko', 10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bulletinboard`
--

CREATE TABLE `bulletinboard` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `accounts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `accounts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id`, `name`, `accounts_id`) VALUES
(4, 'Pre-teen loli', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `foodmenu`
--

CREATE TABLE `foodmenu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `promo` int(11) DEFAULT NULL,
  `promodesc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `foodmenu`
--

INSERT INTO `foodmenu` (`id`, `name`, `image`, `price`, `category_id`, `accounts_id`, `promo`, `promodesc`) VALUES
(1002, 'Sheila', 'inc/img/sheila.jpg', '1710000.00', 1, 1, 1, 'Saudavel'),
(1003, 'Enzo', 'inc/img/enzo.png', '1650000.00', 1, 1, 1, 'Avantajado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `foodmenu_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `requests_numbers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `requests`
--

INSERT INTO `requests` (`id`, `foodmenu_id`, `quantity`, `requests_numbers_id`) VALUES
(13, 1003, 1, 1),
(14, 1003, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `requests_numbers`
--

CREATE TABLE `requests_numbers` (
  `id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `accounts_id` int(11) NOT NULL,
  `id_table` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tables`
--

CREATE TABLE `tables` (
  `table_number` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tables`
--

INSERT INTO `tables` (`table_number`, `status`, `size`) VALUES
(12, 'Livre', 'Grande');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`,`creator_id`);

--
-- Indexes for table `bulletinboard`
--
ALTER TABLE `bulletinboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`,`accounts_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_foodmenu_category1_idx` (`category_id`),
  ADD KEY `fk_foodmenu_accounts1_idx` (`accounts_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_requests_requests_numbers1_idx` (`requests_numbers_id`),
  ADD KEY `fk_requests_foodmenu1_idx` (`foodmenu_id`);

--
-- Indexes for table `requests_numbers`
--
ALTER TABLE `requests_numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_requests_numbers_accounts1_idx` (`accounts_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bulletinboard`
--
ALTER TABLE `bulletinboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `requests_numbers`
--
ALTER TABLE `requests_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `requests_numbers`
--
ALTER TABLE `requests_numbers`
  ADD CONSTRAINT `fk_requests_numbers_accounts1` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
