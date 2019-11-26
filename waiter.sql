-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26-Nov-2019 às 12:40
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
(6, 'Cristian de Oliveira Menezes', 'inc/img/uploads/perfil/2019.11.26-10.', 'h3has@viphone.eu.org', '+1-202-555-0180', 'Cozinheiro', 'cris', 11, 1),
(7, 'Eduarda Zambom', 'inc/img/uploads/perfil/2019.11.26-10.', 'celestina@gmail.com', '1213141516', 'FuncionÃ¡rio Fixo', 'celestina', 11, 6),
(8, 'Marcos', 'inc/img/uploads/perfil/2019.11.26-10.', 'marcos@gmail.com', '+13997085677', 'FuncionÃ¡rio Fixo', 'marcos', 10, 6),
(14, 'Maria', 'inc/img/uploads/perfil/2019.11.26-10.', 'maria@gmail.com', '+13997085677', 'FuncionÃ¡rio Fixo', 'maria', 10, 6),
(24, 'marcos', 'inc/img/uploads/perfil/2019.11.26-10.', 'maria@gmail.com', '444', 'FuncionÃ¡rio Fixo', '4444', 10, 7);

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
(23, 'Açaí', 1),
(14, 'Acompanhamentos', 1),
(12, 'Barcas', 1),
(20, 'Bebidas', 1),
(10, 'Burguers', 1),
(18, 'Cachaça', 1),
(2, 'Cervejas', 1),
(11, 'Combos', 1),
(13, 'Diversos', 1),
(7, 'Doces', 1),
(8, 'Drinks', 1),
(21, 'Enegético', 1),
(16, 'Pasteis', 1),
(6, 'Porções', 1),
(17, 'Porções de peixe', 1),
(5, 'Salgados', 1),
(15, 'Sob Encomenda', 1),
(1, 'Sucos', 1),
(19, 'Whisky', 1);

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
(1002, 'Frango', 'inc/img/uploads/frango.jpg', '18.50', 6, 1, 1, 'Saudavel'),
(1003, 'Batata', 'inc/img/uploads/batatas.jpg', '10.50', 6, 1, 1, 'Avantajado'),
(1004, 'Lula frita', 'inc/img/uploads/lula.jpg', '20.00', 6, 1, 1, 'nopromo'),
(1005, 'Camarão', 'inc/img/uploads/camarao.jpg', '25.00', 6, 1, 1, 'nopromo'),
(1006, 'Cebola Empanada', 'inc/img/uploads/cebola.jpg', '8.00', 6, 1, 1, 'nopromo'),
(1007, 'Coca Cola (Lata)', 'inc/img/uploads/coca.jpg', '5.00', 13, 1, 1, 'nopromo'),
(1008, 'Simba 2L', 'inc/img/uploads/menu/download (15)2019.11.26-10.jpg', '3.00', 13, 1, 1, 'nopromo'),
(1010, 'X-Burguer', 'inc/img/uploads/menu/download (12)2019.11.26-10.jpg', '7.00', 10, 1, 1, 'nopromo'),
(1011, 'Mandioca frita', 'inc/img/uploads/menu/2019.11.13-09.31.54.jpg', '15.00', 6, 6, 0, 'null'),
(1012, 'Polenta frita', 'inc/img/uploads/menu/2019.11.13-09.33.49.jpg', '15.00', 6, 6, 0, 'null'),
(1013, 'Torresmo', 'inc/img/uploads/menu/2019.11.13-09.34.43.jpg', '35.00', 6, 6, 0, 'null'),
(1014, 'Bolinho de bacalhau', 'inc/img/uploads/menu/2019.11.13-09.36.11.jpg', '30.00', 6, 6, 0, 'null'),
(1015, 'Bolinho de camarão', 'inc/img/uploads/menu/2019.11.13-09.37.02.jpg', '30.00', 6, 6, 0, 'null'),
(1016, 'Bolinho de carne seca', 'inc/img/uploads/menu/2019.11.13-09.37.44.jpg', '30.00', 6, 6, 0, 'null'),
(1017, 'Bolinho de queijo', 'inc/img/uploads/menu/2019.11.13-09.38.29.jpg', '30.00', 6, 6, 0, 'null'),
(1018, 'carne', 'inc/img/uploads/menu/2019.11.13-09.39.40.jpg', '7.00', 16, 6, 0, 'null'),
(1019, 'carne c/queijo', 'inc/img/uploads/menu/2019.11.13-09.41.02.jpg', '7.00', 16, 6, 0, 'null'),
(1020, 'queijo', 'inc/img/uploads/menu/2019.11.13-09.41.33.jpg', '7.00', 16, 6, 0, 'null'),
(1021, 'calabresa', 'inc/img/uploads/menu/2019.11.13-09.42.08.jpg', '7.00', 16, 6, 0, 'null'),
(1022, 'calabresa c/queijo', 'inc/img/uploads/menu/2019.11.13-09.42.45.jpg', '7.00', 16, 6, 0, 'null'),
(1023, 'bauru', 'inc/img/uploads/menu/2019.11.13-09.43.48.jpg', '7.00', 16, 6, 0, 'null'),
(1024, 'pizza', 'inc/img/uploads/menu/2019.11.13-09.44.31.jpg', '7.00', 16, 6, 0, 'null'),
(1025, 'frango c/catupiry', 'inc/img/uploads/menu/2019.11.13-09.45.27.jpg', '7.00', 16, 6, 0, 'null'),
(1026, 'Batata c/calabresa, cheddar, catupiry, bacon', 'inc/img/uploads/menu/2019.11.13-09.47.10.jpg', '50.00', 12, 6, 0, 'null'),
(1027, 'Batata c/cheddar, catupiry, bacon', 'inc/img/uploads/menu/2019.11.13-09.48.56.jpg', '44.00', 12, 6, 0, 'null'),
(1028, 'batata c/frango a pasarinho,cheddar, catupiry, bacon', 'inc/img/uploads/menu/2019.11.13-09.51.28.jpg', '55.00', 12, 6, 0, 'null'),
(1029, 'Cação', 'inc/img/uploads/menu/2019.11.13-09.53.57.jpg', '35.00', 17, 6, 0, 'null'),
(1030, 'Manjuba', 'inc/img/uploads/menu/2019.11.13-09.54.36.jpg', '30.00', 17, 6, 0, 'null'),
(1031, 'Tilápia', 'inc/img/uploads/menu/2019.11.13-09.55.37.jpg', '40.00', 17, 6, 0, 'null'),
(1032, 'porquinho', 'inc/img/uploads/menu/2019.11.13-09.56.17.jpg', '35.00', 17, 6, 0, 'null'),
(1033, 'camarão', 'inc/img/uploads/menu/2019.11.13-09.57.00.jpg', '45.00', 17, 6, 0, 'null'),
(1034, 'isca', 'inc/img/uploads/menu/2019.11.13-09.57.47.jpg', '35.00', 17, 6, 0, 'null'),
(1035, 'Brahma', 'inc/img/uploads/menu/2019.11.13-09.59.38.jpg', '5.00', 2, 6, 0, 'null'),
(1036, 'Skol', 'inc/img/uploads/menu/2019.11.13-10.00.15.jpg', '5.00', 2, 6, 0, 'null'),
(1037, 'Skol beats', 'inc/img/uploads/menu/2019.11.13-10.01.12.jpg', '10.00', 2, 6, 0, 'null'),
(1038, 'itaipava', 'inc/img/uploads/menu/2019.11.13-10.01.47.jpg', '5.00', 2, 6, 0, 'null'),
(1039, 'Heineken', 'inc/img/uploads/menu/2019.11.13-10.02.27.jpg', '12.00', 2, 6, 0, 'null'),
(1040, 'Original', 'inc/img/uploads/menu/2019.11.13-10.03.17.jpg', '12.00', 2, 6, 0, 'null'),
(1041, 'Budweiser', 'inc/img/uploads/menu/2019.11.13-10.04.00.jpg', '6.00', 2, 6, 0, 'null'),
(1042, 'Água s/gás', 'inc/img/uploads/menu/2019.11.13-10.05.29.jpg', '3.00', 13, 6, 0, 'null'),
(1043, 'H2O', 'inc/img/uploads/menu/2019.11.13-10.06.24.jpg', '6.00', 13, 6, 0, 'null'),
(1044, 'Água tônica', 'inc/img/uploads/menu/2019.11.13-10.07.10.jpg', '5.00', 13, 6, 0, 'null'),
(1045, 'Schweppes', 'inc/img/uploads/menu/2019.11.13-10.08.12.jpg', '5.00', 13, 6, 0, 'null'),
(1046, 'Suco Del Valle', 'inc/img/uploads/menu/2019.11.13-10.09.30.jpg', '5.00', 13, 6, 0, 'null'),
(1047, 'Refrigerante lata', 'inc/img/uploads/menu/2019.11.13-10.10.44.jpg', '4.00', 13, 6, 0, 'null'),
(1048, 'Refrigerante 2l', 'inc/img/uploads/menu/2019.11.13-10.11.36.jpg', '12.00', 13, 6, 0, 'null'),
(1049, 'Água c/gás', 'inc/img/uploads/menu/2019.11.13-10.12.46.jpg', '4.00', 13, 6, 0, 'null'),
(1050, 'Dreher', 'inc/img/uploads/menu/2019.11.13-10.14.36.jpg', '5.00', 20, 6, 0, 'null'),
(1051, 'Domus', 'inc/img/uploads/menu/2019.11.13-10.15.19.jpg', '5.00', 20, 6, 0, 'null'),
(1052, 'Domecq', 'inc/img/uploads/menu/2019.11.13-10.16.02.jpg', '9.00', 20, 6, 0, 'null'),
(1053, 'Jurupinga', 'inc/img/uploads/menu/2019.11.13-10.16.39.jpg', '5.00', 20, 6, 0, 'null'),
(1054, 'Pinga 51', 'inc/img/uploads/menu/2019.11.13-10.17.12.jpg', '5.00', 20, 6, 0, 'null'),
(1055, 'Catuaba', 'inc/img/uploads/menu/2019.11.13-10.17.51.jpg', '6.00', 20, 6, 0, 'null'),
(1056, 'Velho Barreiro', 'inc/img/uploads/menu/2019.11.13-10.18.33.jpg', '5.00', 20, 6, 0, 'null'),
(1057, 'Martini', 'inc/img/uploads/menu/2019.11.13-10.19.26.jpg', '6.00', 20, 6, 0, 'null'),
(1058, 'Vodka Smirnoff', 'inc/img/uploads/menu/2019.11.13-10.20.18.jpg', '7.00', 20, 6, 0, 'null'),
(1059, 'Vodka Absolut', 'inc/img/uploads/menu/2019.11.13-10.20.59.jpg', '12.00', 20, 6, 0, 'null'),
(1060, 'Campari', 'inc/img/uploads/menu/2019.11.13-10.22.05.jpg', '9.00', 20, 6, 0, 'null'),
(1061, 'Tequila', 'inc/img/uploads/menu/2019.11.13-10.22.41.jpg', '12.00', 20, 6, 0, 'null'),
(1062, 'Ípioca reserva especial', 'inc/img/uploads/menu/2019.11.13-10.23.36.jpg', '5.00', 20, 6, 0, 'null'),
(1063, 'Kariri', 'inc/img/uploads/menu/2019.11.13-10.24.18.jpg', '7.00', 18, 6, 0, 'null'),
(1064, 'Seleta', 'inc/img/uploads/menu/2019.11.13-10.24.53.jpg', '7.00', 18, 6, 0, 'null'),
(1065, 'Old eight', 'inc/img/uploads/menu/2019.11.13-10.25.51.jpg', '10.00', 19, 6, 0, 'null'),
(1066, 'Passaport', 'inc/img/uploads/menu/2019.11.13-10.26.28.jpg', '12.00', 19, 6, 0, 'null'),
(1067, 'Red Label', 'inc/img/uploads/menu/2019.11.18-09.43.05.jpg', '20.00', 19, 6, 0, 'null'),
(1068, 'Black Label', 'inc/img/uploads/menu/2019.11.18-09.53.16.jpg', '25.00', 19, 6, 0, 'null'),
(1069, 'Jack daniels ', 'inc/img/uploads/menu/2019.11.18-09.54.06.jpg', '25.00', 19, 6, 0, 'null'),
(1070, 'Gelo de coco', 'inc/img/uploads/menu/2019.11.18-09.54.49.jpg', '3.00', 19, 6, 0, 'null'),
(1071, 'Red Bull', 'inc/img/uploads/menu/2019.11.18-09.57.01.jpg', '12.00', 21, 6, 0, 'null'),
(1072, 'tnt', 'inc/img/uploads/menu/2019.11.18-09.57.16.jpg', '8.00', 21, 6, 0, 'null'),
(1073, 'Calabresa e fritas (+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.00.32.jpg', '65.00', 11, 6, 0, 'null'),
(1074, 'frango a passarinho e fritas (+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.01.48.jpg', '75.00', 11, 6, 0, 'null'),
(1075, 'Manjuba e fritas (+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.03.50.jpg', '80.00', 11, 6, 0, 'null'),
(1076, 'isca e fritas (+5 latas )', 'inc/img/uploads/menu/2019.11.18-10.10.27.jpg', '85.00', 11, 6, 0, 'null'),
(1077, 'Cação e fritas(+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.11.49.jpg', '85.00', 11, 6, 0, 'null'),
(1078, ' Porquinho e fritas (+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.13.01.jpg', '85.00', 11, 6, 0, 'null'),
(1079, 'Camarão e fritas(+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.13.46.jpg', '95.00', 11, 6, 0, 'null'),
(1080, 'tilápia e fritas(+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.14.37.jpg', '90.00', 11, 6, 0, 'null'),
(1081, 'Provolone a milanesa e fritas(+5 latas)', 'inc/img/uploads/menu/download (13)2019.11.26-10.jpg', '95.00', 11, 6, 0, 'null'),
(1082, 'Porquinho e camarão(+5 latas)', 'inc/img/uploads/menu/download (14)2019.11.26-10.jpg', '119.00', 11, 6, 0, 'null'),
(1083, 'Peixe ao forno(serve 4 pessoas)', 'inc/img/uploads/menu/2019.11.18-10.19.32.jpg', '120.00', 15, 6, 0, 'null'),
(1084, 'Peixe ao forno(serve 6 pessoas)', 'inc/img/uploads/menu/2019.11.18-10.19.54.jpg', '180.00', 15, 6, 0, 'null'),
(1085, 'Peixe ao forno(serve 8 pessoas)', 'inc/img/uploads/menu/2019.11.18-10.20.12.jpg', '240.00', 15, 6, 0, 'null'),
(1086, 'Açaí(300ml)-3 acompanhamenos', 'inc/img/uploads/menu/acai2019.11.26-09.jpg', '10.00', 23, 6, 0, 'null'),
(1087, 'Açaí(500ml)-3 acompanhamenos', 'inc/img/uploads/menu/download2019.11.26-09.jpg', '15.00', 23, 6, 0, 'null'),
(1088, 'Banana', 'inc/img/uploads/menu/download (1)2019.11.26-09.jpg', '1.00', 14, 6, 0, 'null'),
(1089, 'Morango', 'inc/img/uploads/menu/download (10)2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null'),
(1090, 'leite em po', 'inc/img/uploads/menu/download (9)2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null'),
(1091, 'leite condensado', 'inc/img/uploads/menu/download (8)2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null'),
(1092, 'sucrilhos', 'inc/img/uploads/menu/download (7)2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null'),
(1093, 'chcoco ball', 'inc/img/uploads/menu/REDONDOS-DE-CHOCOLATE2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null'),
(1094, 'amendoim', 'inc/img/uploads/menu/download (6)2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null'),
(1095, 'granulado', 'inc/img/uploads/menu/download (5)2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null'),
(1096, 'paçoca', 'inc/img/uploads/menu/download (4)2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null'),
(1097, 'marshmello', 'inc/img/uploads/menu/download (3)2019.11.26-09.jpg', '1.00', 14, 6, 0, 'null'),
(1098, 'm&m´s', 'inc/img/uploads/menu/download (2)2019.11.26-09.jpg', '1.00', 14, 6, 0, 'null'),
(1099, 'granola', 'inc/img/uploads/menu/download (11)2019.11.26-10.jpg', '1.00', 14, 6, 0, 'null');

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
(123, 1002, 1, 92),
(124, 1003, 1, 92),
(125, 1002, 1, 92),
(126, 1002, 1, 93),
(127, 1002, 1, 95),
(128, 1003, 9, 98);

-- --------------------------------------------------------

--
-- Estrutura da tabela `requests_numbers`
--

CREATE TABLE `requests_numbers` (
  `id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `id_table` int(11) NOT NULL,
  `started` date DEFAULT NULL,
  `started_hour` time DEFAULT NULL,
  `starter_id` int(11) NOT NULL,
  `finished` date DEFAULT NULL,
  `finished_hour` time DEFAULT NULL,
  `finish_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `requests_numbers`
--

INSERT INTO `requests_numbers` (`id`, `total`, `status`, `obs`, `id_table`, `started`, `started_hour`, `starter_id`, `finished`, `finished_hour`, `finish_id`) VALUES
(95, '29.00', 'Finalizado', 'Sem ketchup', 2, '2019-08-21', '09:21:23', 6, '2019-08-21', '09:31:43', 6),
(96, '18.50', 'Finalizado', 'Sem mostarda', 1, '2019-08-21', '09:21:41', 6, '2019-08-21', '09:31:36', 6),
(97, '94.50', 'Finalizado', 'Batatas em formato de bolinhas', 12, '2019-08-21', '09:21:55', 6, '2019-08-21', '09:31:41', 6),
(98, '224.00', 'Finalizado', 'Molho de alho extra', 12, '2019-08-21', '09:22:29', 6, '2019-08-21', '09:31:44', 6),
(99, '819.00', 'Finalizado', 'Sem ketchup', 1, '2019-08-21', '09:22:48', 6, '2019-08-21', '09:31:45', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tables`
--

CREATE TABLE `tables` (
  `table_number` int(3) UNSIGNED ZEROFILL NOT NULL,
  `status` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tables`
--

INSERT INTO `tables` (`table_number`, `status`, `size`) VALUES
(001, 'Em uso', 'Pequena'),
(002, 'Livre', 'Média'),
(012, 'Livre', 'Grande');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`,`creator_id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1100;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `requests_numbers`
--
ALTER TABLE `requests_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
