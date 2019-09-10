-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10-Set-2019 às 12:33
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
(1002, 'Frango', 'inc/img/uploads/frango.jpg', '18.50', 1, 1, 1, 'Saudavel'),
(1003, 'Batata', 'inc/img/uploads/batatas.jpg', '10.50', 2, 1, 1, 'Avantajado'),
(1004, 'Lula frita', 'inc/img/uploads/lula.jpg', '20.00', 3, 1, 1, 'nopromo'),
(1005, 'Camarão', 'inc/img/uploads/camarao.jpg', '25.00', 4, 1, 1, 'nopromo'),
(1006, 'Cebola Empanada', 'inc/img/uploads/cebola.jpg', '8.00', 5, 1, 1, 'nopromo'),
(1007, 'Coca Cola (Lata)', 'inc/img/uploads/coca.jpg', '5.00', 6, 1, 1, 'nopromo'),
(1008, 'Simba 2L', 'inc/img/uploads/simba.jpg', '3.00', 7, 1, 1, 'nopromo'),
(1009, 'Parmenides (Atomo)', 'inc/img/uploads/parmenides.jpg', '250.00', 1, 1, 1, 'nopromo'),
(1010, 'X-Burguer', 'inc/img/uploads/xburguer.jpg', '7.00', 2, 1, 1, 'nopromo'),
(1011, 'Batata Recheada', 'inc/img/uploads/menu/batata.jpg', '7.00', 3, 6, 0, 'null'),
(1012, 'Hamburguer', 'inc/img/uploads/menu/hamburguer.jpg', '10.00', 8, 6, 0, 'null'),
(1013, 'Hot dog', 'inc/img/uploads/menu/hot dog.jpg', '15.00', 4, 6, 0, 'null'),
(1015, 'Cerveja', 'inc/img/uploads/menu/cerveja.jpg', '6.00', 2, 6, 0, 'null'),
(1016, 'Pastel de carne', 'inc/img/uploads/menu/pastel-de-carne.jpg', '12.00', 4, 6, 0, 'null'),
(1017, 'Panqueca', 'inc/img/uploads/menu/panqueca.jpg', '8.00', 1, 6, 0, 'null'),
(1018, 'Coxinha', 'inc/img/uploads/menu/coxinha.jpg', '5.00', 4, 6, 0, 'null'),
(1019, 'Açai', 'inc/img/uploads/menu/açai.jpg', '15.00', 6, 6, 0, 'null'),
(1020, 'Salada de frutas', 'inc/img/uploads/menu/saladafruta.jpg', '7.00', 3, 6, 0, 'null'),
(1021, 'Barca de aÃ§ai', 'inc/img/uploads/menu/barca.jpg', '20.00', 6, 6, 0, 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_foodmenu_category1_idx` (`category_id`),
  ADD KEY `fk_foodmenu_accounts1_idx` (`accounts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
