-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26-Nov-2019 às 12:35
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
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

INSERT INTO `accounts` (`id`, `username`, `img`, `email`, `phonenumber`, `description`, `password`, `usertype`, `creator_id`) VALUES
(6, 'cris', 'inc/img/uploads/perfil/jose.jpg', 'h3has@viphone.eu.org', '123123', '31123', '123', 11, 1),
(7, 'celestina', 'inc/img/uploads/perfil/celestina.jpg', 'celestina@gmail.com', '1213141516', 'Galinho morta', 'celestina', 11, 6),
(8, 'Marcos', 'inc/img/uploads/perfil/Marcos.jpg', 'marcos@gmail.com', '+13997085677', 'FuncionÃ¡rio fixo', 'marcos', 10, 6),
(14, 'Maria', 'inc/img/uploads/perfil/Maria.jpg', 'maria@gmail.com', '+13997085677', 'FuncionÃ¡rio temporÃ¡rio', 'maria', 10, 6),
(24, 'marcos', 'inc/img/uploads/perfil/marcos.jpg', 'maria@gmail.com', '444', '444', '4444', 10, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`,`creator_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
