-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 25-Nov-2019 às 15:18
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
-- Database: `22web`
--
CREATE DATABASE IF NOT EXISTS `22web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `22web`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administrador`
--

CREATE TABLE `tb_administrador` (
  `cd_administrador` int(11) NOT NULL,
  `nm_administrador` varchar(30) NOT NULL,
  `ds_senha_administrador` varchar(30) DEFAULT NULL,
  `ds_cpf_administrador` varchar(20) NOT NULL,
  `ds_rg_administrador` varchar(20) NOT NULL,
  `ds_idade_administrador` int(3) NOT NULL,
  `dt_inscricao_administrador` varchar(30) DEFAULT NULL,
  `ds_estado_administrador` varchar(100) DEFAULT NULL,
  `ds_foto_administrador` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_administrador`
--

INSERT INTO `tb_administrador` (`cd_administrador`, `nm_administrador`, `ds_senha_administrador`, `ds_cpf_administrador`, `ds_rg_administrador`, `ds_idade_administrador`, `dt_inscricao_administrador`, `ds_estado_administrador`, `ds_foto_administrador`) VALUES
(1, 'nome', 'senha', '111.111.111-11', '123', 500, '1', '3', 'uploads/ghost.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `cd_aluno` int(11) NOT NULL,
  `nm_aluno` varchar(50) NOT NULL,
  `ds_sexo` varchar(30) NOT NULL,
  `ds_rg` varchar(20) NOT NULL,
  `id_autorizacao` int(11) NOT NULL,
  `vl_idade` int(11) NOT NULL,
  `ds_foto` varchar(100) DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`cd_aluno`, `nm_aluno`, `ds_sexo`, `ds_rg`, `id_autorizacao`, `vl_idade`, `ds_foto`, `id_turma`) VALUES
(1, 'Maria Antonieta Fernandes', 'Feminino', 'xx.xxx.xxx-xx', 2, 17, 'fotos/alunos/ghost.jpg', 8),
(2, 'João Estácio Cézar', '1', '123', 2, 1, 'fotos/alunos/ghost.jpg', 3),
(3, 'Adolfo Berezin', '0', '123465', 2, 123, 'fotos/alunos/ghost.jpg', 3),
(4, 'Eugênia Pitta Botafogo de Oliveira', '1', '1', 1, 1, 'fotos/alunos/ghost.jpg', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno_responsavel`
--

CREATE TABLE `tb_aluno_responsavel` (
  `cd_aluno_responsavel` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_usuario_responsavel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_aluno_responsavel`
--

INSERT INTO `tb_aluno_responsavel` (`cd_aluno_responsavel`, `id_aluno`, `id_usuario_responsavel`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_atividade`
--

CREATE TABLE `tb_atividade` (
  `cd_atividade` int(11) NOT NULL,
  `nm_atividade` varchar(20) NOT NULL,
  `vl_peso_nota` int(11) NOT NULL,
  `ds_nota` varchar(100) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_bimestre` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_atividade`
--

INSERT INTO `tb_atividade` (`cd_atividade`, `nm_atividade`, `vl_peso_nota`, `ds_nota`, `id_materia`, `id_bimestre`, `id_turma`) VALUES
(4, 'atividade1', 1, 'dgndgndgjhgdjdg', 3, 3, 7),
(9, 'atividade2', 2, 'comeeeeee', 2, 4, 11),
(11, 'Biografia de Na.', 10000000, 'comeeeeee', 3, 4, 11),
(14, 'Apostila 34', 2, 'comeeeeee', 3, 4, 11),
(15, 'Atividade de suporte', 2, 'comeeeeee', 3, 4, 11),
(16, 'Exercício 45', 123, 'phioerhjkÃ§lrslÃ§', 3, 3, 11),
(17, 'Avaliação Global', 6, 'm~klvdpav~da~ljÃ§vjaÃ§kad', 3, 1, 12),
(18, 'Observação direta', 6, 'm~klvdpav~da~ljÃ§vjaÃ§kad', 3, 1, 12),
(19, 'ensino complementar', 12, 'ffshdfshfssh', 3, 1, 13),
(20, 'feira de ciências', 23, 'jqegÃ§kkÃ§nnkÃ§qrege', 3, 1, 13),
(21, 'livro pág 100-220', 2147483647, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, 1, 12),
(22, 'atividade 948', 2333, 'bbbbbbbbbbbbbbbbbb', 3, 1, 1),
(23, 'atividade didática', 342352, 'eqfqfqefqefq', 3, 4, 11),
(24, 'atividade prática', 3, 'eqfeqqefq', 3, 3, 11),
(25, 'atividade24', 3, 'eqfeqqefq', 3, 3, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_autorizacao`
--

CREATE TABLE `tb_autorizacao` (
  `cd_autorizacao` int(11) NOT NULL,
  `ds_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_autorizacao`
--

INSERT INTO `tb_autorizacao` (`cd_autorizacao`, `ds_status`) VALUES
(1, 0),
(2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bimestre`
--

CREATE TABLE `tb_bimestre` (
  `cd_bimestre` int(11) NOT NULL,
  `nm_bimestre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_bimestre`
--

INSERT INTO `tb_bimestre` (`cd_bimestre`, `nm_bimestre`) VALUES
(1, '1º Bimestre'),
(2, '2º Bimestre'),
(3, '3º Bimestre'),
(4, '4º Bimestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria_post`
--

CREATE TABLE `tb_categoria_post` (
  `cd_categoria_post` int(11) NOT NULL,
  `nm_categoria_post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categoria_post`
--

INSERT INTO `tb_categoria_post` (`cd_categoria_post`, `nm_categoria_post`) VALUES
(1, 'Artigos'),
(2, 'Alunos'),
(3, 'Novidades'),
(4, 'Eventos'),
(5, 'Dicas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato_administrador`
--

CREATE TABLE `tb_contato_administrador` (
  `cd_contato` int(11) NOT NULL,
  `ds_celular` varchar(20) DEFAULT NULL,
  `ds_ddd` varchar(5) DEFAULT NULL,
  `id_administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato_aluno`
--

CREATE TABLE `tb_contato_aluno` (
  `cd_contato` int(11) NOT NULL,
  `ds_celular` varchar(20) DEFAULT NULL,
  `ds_ddd` varchar(5) DEFAULT NULL,
  `id_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato_professor`
--

CREATE TABLE `tb_contato_professor` (
  `cd_contato` int(11) NOT NULL,
  `ds_celular` varchar(20) DEFAULT NULL,
  `ds_ddd` varchar(5) DEFAULT NULL,
  `id_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato_responsavel`
--

CREATE TABLE `tb_contato_responsavel` (
  `cd_contato` int(11) NOT NULL,
  `ds_celular` varchar(20) DEFAULT NULL,
  `ds_ddd` varchar(5) DEFAULT NULL,
  `id_responsavel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_administrador`
--

CREATE TABLE `tb_email_administrador` (
  `cd_email` int(11) NOT NULL,
  `nm_email` varchar(50) NOT NULL,
  `id_administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_aluno`
--

CREATE TABLE `tb_email_aluno` (
  `cd_email` int(11) NOT NULL,
  `nm_email` varchar(50) NOT NULL,
  `id_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_professor`
--

CREATE TABLE `tb_email_professor` (
  `cd_email` int(11) NOT NULL,
  `nm_email` varchar(50) NOT NULL,
  `id_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_email_professor`
--

INSERT INTO `tb_email_professor` (`cd_email`, `nm_email`, `id_professor`) VALUES
(1, 'al@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_responsavel`
--

CREATE TABLE `tb_email_responsavel` (
  `cd_email` int(11) NOT NULL,
  `nm_email` varchar(50) NOT NULL,
  `id_responsavel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_administrador`
--

CREATE TABLE `tb_endereco_administrador` (
  `cd_endereco` int(11) NOT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(100) DEFAULT NULL,
  `ds_cidade` varchar(100) DEFAULT NULL,
  `id_administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_professor`
--

CREATE TABLE `tb_endereco_professor` (
  `cd_endereco` int(11) NOT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(100) DEFAULT NULL,
  `ds_cidade` varchar(100) DEFAULT NULL,
  `id_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_responsavel`
--

CREATE TABLE `tb_endereco_responsavel` (
  `cd_endereco` int(11) NOT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(100) DEFAULT NULL,
  `ds_cidade` varchar(100) DEFAULT NULL,
  `id_responsavel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estado`
--

CREATE TABLE `tb_estado` (
  `cd_estado` int(11) NOT NULL,
  `nm_estado` varchar(20) DEFAULT NULL,
  `vl_sigla` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_estado`
--

INSERT INTO `tb_estado` (`cd_estado`, `nm_estado`, `vl_sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_formulario_interesse`
--

CREATE TABLE `tb_formulario_interesse` (
  `cd_form` int(11) NOT NULL,
  `ds_nome_completo` varchar(30) NOT NULL,
  `ds_telefone_contato` varchar(15) NOT NULL,
  `ds_email_contato` varchar(50) NOT NULL,
  `ds_duvida` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_formulario_interesse`
--

INSERT INTO `tb_formulario_interesse` (`cd_form`, `ds_nome_completo`, `ds_telefone_contato`, `ds_email_contato`, `ds_duvida`) VALUES
(1, 'Jorge Lucas Trigo Coronado', '(13) 996669944', 'jorgelucastcoronado@gmail.com', 'cucucucucucucucucucucucucucucucucu'),
(2, 'Davih', '666', 'davipintao@cu.com', 'cu'),
(3, 'roeghprwpkg', '132413414', 'come@gmail.com', 'cu'),
(4, 'joelma', '1355555555', 'joelmasartori@gmail.com', 'Ã³tima apresentaÃ§Ã£o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_galeria`
--

CREATE TABLE `tb_galeria` (
  `cd_galeria` int(11) NOT NULL,
  `ds_foto` varchar(40) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materia`
--

CREATE TABLE `tb_materia` (
  `cd_materia` int(11) NOT NULL,
  `nm_materia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_materia`
--

INSERT INTO `tb_materia` (`cd_materia`, `nm_materia`) VALUES
(1, 'Matemática'),
(2, 'Português'),
(3, 'História'),
(4, 'Geografia'),
(5, 'Ciências');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem_administrador`
--

CREATE TABLE `tb_mensagem_administrador` (
  `cd_mensagem_canal3` int(11) NOT NULL,
  `ds_recado_canal3` varchar(500) NOT NULL,
  `id_professor_canal3` int(11) DEFAULT NULL,
  `id_responsavel_canal3` int(11) DEFAULT NULL,
  `id_administrador_canal3` int(11) DEFAULT NULL,
  `id_administrador` int(11) NOT NULL,
  `dt_data_canal3` varchar(20) NOT NULL,
  `dt_horario_canal3` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_mensagem_administrador`
--

INSERT INTO `tb_mensagem_administrador` (`cd_mensagem_canal3`, `ds_recado_canal3`, `id_professor_canal3`, `id_responsavel_canal3`, `id_administrador_canal3`, `id_administrador`, `dt_data_canal3`, `dt_horario_canal3`) VALUES
(1, 'teste 034295024896', 2, NULL, NULL, 1, '10/09/19', '11:26:44'),
(2, 'teste 91398491', 2, NULL, NULL, 1, '10/09/19', '11:26:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem_professor`
--

CREATE TABLE `tb_mensagem_professor` (
  `cd_mensagem_canal1` int(11) NOT NULL,
  `ds_recado_canal1` varchar(500) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `id_professor_canal1` int(11) DEFAULT NULL,
  `id_responsavel_canal1` int(11) DEFAULT NULL,
  `id_administrador_canal1` int(11) DEFAULT NULL,
  `dt_data_canal1` varchar(20) NOT NULL,
  `dt_horario_canal1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_mensagem_professor`
--

INSERT INTO `tb_mensagem_professor` (`cd_mensagem_canal1`, `ds_recado_canal1`, `id_professor`, `id_professor_canal1`, `id_responsavel_canal1`, `id_administrador_canal1`, `dt_data_canal1`, `dt_horario_canal1`) VALUES
(1, 'teste 1 mandar', 1, NULL, 1, NULL, '09/09/19', '23:35:51'),
(2, 'teste 2', 1, NULL, 2, NULL, '09/09/19', '23:38:15'),
(3, 'teste 139849318491', 1, NULL, 1, NULL, '10/09/19', '11:02:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem_responsavel`
--

CREATE TABLE `tb_mensagem_responsavel` (
  `cd_mensagem_canal2` int(11) NOT NULL,
  `ds_recado_canal2` varchar(500) NOT NULL,
  `id_responsavel` int(11) NOT NULL,
  `id_professor_canal2` int(11) DEFAULT NULL,
  `id_responsavel_canal2` int(11) DEFAULT NULL,
  `id_administrador_canal2` int(11) DEFAULT NULL,
  `dt_data_canal2` varchar(20) NOT NULL,
  `dt_horario_canal2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_mensagem_responsavel`
--

INSERT INTO `tb_mensagem_responsavel` (`cd_mensagem_canal2`, `ds_recado_canal2`, `id_responsavel`, `id_professor_canal2`, `id_responsavel_canal2`, `id_administrador_canal2`, `dt_data_canal2`, `dt_horario_canal2`) VALUES
(1, 'dvsdvsdvsdvs', 2, 1, NULL, NULL, '09/09/19', '23:47:12'),
(2, 'teste 4-', 1, 2, NULL, NULL, '10/09/19', '08:33:27'),
(3, 'teste 6', 1, 1, NULL, NULL, '10/09/19', '08:33:56'),
(5, 'rwytwehwhwrhwrh', 1, 1, NULL, NULL, '10/09/19', '09:23:06'),
(6, 'ssssssssssssss', 1, NULL, NULL, 1, '10/09/19', '09:23:11'),
(7, 'aaaaaaaaaaa', 1, 1, NULL, NULL, '10/09/19', '09:28:54'),
(8, 'teste 999485948983906870394760934763706730', 1, 1, NULL, NULL, '10/09/19', '09:33:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nota`
--

CREATE TABLE `tb_nota` (
  `cd_nota` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `vl_nota` double(4,2) NOT NULL,
  `id_atividade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_periodo`
--

CREATE TABLE `tb_periodo` (
  `cd_periodo` int(11) NOT NULL,
  `ds_periodo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_periodo`
--

INSERT INTO `tb_periodo` (`cd_periodo`, `ds_periodo`) VALUES
(1, 'Manhã'),
(2, 'Tarde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_post`
--

CREATE TABLE `tb_post` (
  `cd_post` int(11) NOT NULL,
  `ds_desc` varchar(500) NOT NULL,
  `dt_criacao` varchar(15) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `ds_titulo` varchar(100) NOT NULL,
  `ds_foto_post` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_post`
--

INSERT INTO `tb_post` (`cd_post`, `ds_desc`, `dt_criacao`, `id_administrador`, `ds_titulo`, `ds_foto_post`, `id_categoria`) VALUES
(1, 'teste1', '1', 1, 'Teste', 'uploads/ghost.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor`
--

CREATE TABLE `tb_professor` (
  `cd_professor` int(11) NOT NULL,
  `nm_professor` varchar(30) NOT NULL,
  `ds_senha_professor` varchar(30) DEFAULT NULL,
  `ds_cpf_professor` varchar(20) NOT NULL,
  `ds_rg_professor` varchar(20) NOT NULL,
  `ds_idade_professor` int(3) NOT NULL,
  `dt_inscricao_professor` varchar(30) DEFAULT NULL,
  `ds_estado_professor` varchar(100) DEFAULT NULL,
  `ds_foto_professor` varchar(100) DEFAULT NULL,
  `id_materia_professor` int(11) DEFAULT NULL,
  `ds_ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_professor`
--

INSERT INTO `tb_professor` (`cd_professor`, `nm_professor`, `ds_senha_professor`, `ds_cpf_professor`, `ds_rg_professor`, `ds_idade_professor`, `dt_inscricao_professor`, `ds_estado_professor`, `ds_foto_professor`, `id_materia_professor`, `ds_ativo`) VALUES
(1, 'nome_professor_2', 'senha', '222.222.222-22', '666', 500, '1', '3', 'uploads/ghost.jpg', 3, 0),
(2, 'nome_professor_3', 'senha', '333.333.333-33', '123', 12, '2019.08.19-08.44.22', '', 'uploads/ghost.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_recado_canal_administrador`
--

CREATE TABLE `tb_recado_canal_administrador` (
  `cd_recado_canal3` int(11) NOT NULL,
  `ds_recado_canal3` varchar(500) NOT NULL,
  `id_usuario_mandar_canal3` int(11) NOT NULL,
  `id_usuario_responsavel_canal3` int(11) DEFAULT NULL,
  `id_tipo_recado_canal3` int(11) NOT NULL,
  `ds_horario_data` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_recado_canal_administrador`
--

INSERT INTO `tb_recado_canal_administrador` (`cd_recado_canal3`, `ds_recado_canal3`, `id_usuario_mandar_canal3`, `id_usuario_responsavel_canal3`, `id_tipo_recado_canal3`, `ds_horario_data`) VALUES
(32, 'wrgrwgwrg', 1, 2, 2, '09/09/19 21:42:07'),
(33, 'teste 1', 1, 1, 3, '09/09/19 21:43:15'),
(34, 'teste 2', 1, 1, 1, '09/09/19 21:44:36'),
(35, 'teste 2', 1, 2, 1, '09/09/19 21:44:36'),
(36, 'post teste 3', 1, 1, 2, '09/09/19 21:44:55'),
(37, 'teste 5', 1, 1, 2, '09/09/19 21:45:25'),
(38, 'teste 5', 1, 2, 2, '09/09/19 21:45:25'),
(39, 'teste 6', 1, 1, 1, '09/09/19 23:19:52'),
(40, 'teste 6', 1, 2, 1, '09/09/19 23:19:52'),
(41, 'teste 2\r\n', 1, 1, 1, '10/09/19 08:28:57'),
(42, 'teste 2\r\n', 1, 2, 1, '10/09/19 08:28:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_recado_canal_responsavel`
--

CREATE TABLE `tb_recado_canal_responsavel` (
  `cd_recado_canal1` int(11) NOT NULL,
  `ds_recado_canal1` varchar(500) NOT NULL,
  `id_usuario_mandar_canal1` int(11) NOT NULL,
  `id_usuario_administrador_canal1` int(11) DEFAULT NULL,
  `id_tipo_recado_canal1` int(11) NOT NULL,
  `ds_horario_data` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_recado_canal_responsavel`
--

INSERT INTO `tb_recado_canal_responsavel` (`cd_recado_canal1`, `ds_recado_canal1`, `id_usuario_mandar_canal1`, `id_usuario_administrador_canal1`, `id_tipo_recado_canal1`, `ds_horario_data`) VALUES
(1, 'teste 1 mandar', 1, 1, 2, '09/09/19 23:31:20'),
(2, 'teste 2 mandar', 1, 1, 2, '09/09/19 23:31:54'),
(3, 'teste a', 2, 1, 2, '09/09/19 23:52:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_responsavel`
--

CREATE TABLE `tb_responsavel` (
  `cd_responsavel` int(11) NOT NULL,
  `nm_responsavel` varchar(30) NOT NULL,
  `ds_senha_responsavel` varchar(30) DEFAULT NULL,
  `ds_cpf_responsavel` varchar(20) NOT NULL,
  `ds_rg_responsavel` varchar(20) NOT NULL,
  `ds_idade_responsavel` int(3) NOT NULL,
  `dt_inscricao_responsavel` varchar(30) DEFAULT NULL,
  `ds_estado_responsavel` varchar(100) DEFAULT NULL,
  `ds_foto_responsavel` varchar(100) DEFAULT NULL,
  `ds_sexo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_responsavel`
--

INSERT INTO `tb_responsavel` (`cd_responsavel`, `nm_responsavel`, `ds_senha_responsavel`, `ds_cpf_responsavel`, `ds_rg_responsavel`, `ds_idade_responsavel`, `dt_inscricao_responsavel`, `ds_estado_responsavel`, `ds_foto_responsavel`, `ds_sexo`) VALUES
(1, 'nome_responsavel', 'senha', '555.555.555-55', '432', 500, '1', '3', 'uploads/ghost.jpg', 1),
(2, 'nome_responsavel_4', 'senha', '444.444.444-44', '123', 123, '2019.08.13-09.32.32', '', 'uploads/ghost.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_recado`
--

CREATE TABLE `tb_tipo_recado` (
  `cd_tipo_recado` int(11) NOT NULL,
  `nm_tipo_recado` varchar(30) NOT NULL,
  `ds_cor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tipo_recado`
--

INSERT INTO `tb_tipo_recado` (`cd_tipo_recado`, `nm_tipo_recado`, `ds_cor`) VALUES
(1, 'urgente', '#b71c1c'),
(2, 'padrão', '#ffb74d'),
(3, 'evento', '#29b6f6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE `tb_turma` (
  `cd_turma` int(11) NOT NULL,
  `ds_turma` varchar(100) NOT NULL,
  `id_periodo_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_turma`
--

INSERT INTO `tb_turma` (`cd_turma`, `ds_turma`, `id_periodo_turma`) VALUES
(1, 'Maternal', 2),
(2, 'Jardim I', 2),
(3, 'Jardim II', 2),
(4, 'Pré', 2),
(5, '1º ano', 2),
(6, '2º ano', 2),
(7, '3º ano', 2),
(8, '4º ano', 2),
(9, '5º ano', 1),
(10, '6º ano', 1),
(11, '7º ano', 1),
(12, '8º ano', 1),
(13, '9º ano', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administrador`
--
ALTER TABLE `tb_administrador`
  ADD PRIMARY KEY (`cd_administrador`),
  ADD UNIQUE KEY `ds_cpf_administrador` (`ds_cpf_administrador`),
  ADD UNIQUE KEY `ds_rg_administrador` (`ds_rg_administrador`);

--
-- Indexes for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`cd_aluno`),
  ADD KEY `id_autorizacao` (`id_autorizacao`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Indexes for table `tb_aluno_responsavel`
--
ALTER TABLE `tb_aluno_responsavel`
  ADD PRIMARY KEY (`cd_aluno_responsavel`),
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_usuario_responsavel` (`id_usuario_responsavel`);

--
-- Indexes for table `tb_atividade`
--
ALTER TABLE `tb_atividade`
  ADD PRIMARY KEY (`cd_atividade`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_bimestre` (`id_bimestre`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Indexes for table `tb_autorizacao`
--
ALTER TABLE `tb_autorizacao`
  ADD PRIMARY KEY (`cd_autorizacao`);

--
-- Indexes for table `tb_bimestre`
--
ALTER TABLE `tb_bimestre`
  ADD PRIMARY KEY (`cd_bimestre`);

--
-- Indexes for table `tb_categoria_post`
--
ALTER TABLE `tb_categoria_post`
  ADD PRIMARY KEY (`cd_categoria_post`);

--
-- Indexes for table `tb_contato_administrador`
--
ALTER TABLE `tb_contato_administrador`
  ADD PRIMARY KEY (`cd_contato`),
  ADD KEY `id_administrador` (`id_administrador`);

--
-- Indexes for table `tb_contato_aluno`
--
ALTER TABLE `tb_contato_aluno`
  ADD PRIMARY KEY (`cd_contato`),
  ADD KEY `id_aluno` (`id_aluno`);

--
-- Indexes for table `tb_contato_professor`
--
ALTER TABLE `tb_contato_professor`
  ADD PRIMARY KEY (`cd_contato`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Indexes for table `tb_contato_responsavel`
--
ALTER TABLE `tb_contato_responsavel`
  ADD PRIMARY KEY (`cd_contato`),
  ADD KEY `id_responsavel` (`id_responsavel`);

--
-- Indexes for table `tb_email_administrador`
--
ALTER TABLE `tb_email_administrador`
  ADD PRIMARY KEY (`cd_email`),
  ADD KEY `id_administrador` (`id_administrador`);

--
-- Indexes for table `tb_email_aluno`
--
ALTER TABLE `tb_email_aluno`
  ADD PRIMARY KEY (`cd_email`),
  ADD KEY `id_aluno` (`id_aluno`);

--
-- Indexes for table `tb_email_professor`
--
ALTER TABLE `tb_email_professor`
  ADD PRIMARY KEY (`cd_email`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Indexes for table `tb_email_responsavel`
--
ALTER TABLE `tb_email_responsavel`
  ADD PRIMARY KEY (`cd_email`),
  ADD KEY `id_responsavel` (`id_responsavel`);

--
-- Indexes for table `tb_endereco_administrador`
--
ALTER TABLE `tb_endereco_administrador`
  ADD PRIMARY KEY (`cd_endereco`),
  ADD KEY `id_administrador` (`id_administrador`);

--
-- Indexes for table `tb_endereco_professor`
--
ALTER TABLE `tb_endereco_professor`
  ADD PRIMARY KEY (`cd_endereco`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Indexes for table `tb_endereco_responsavel`
--
ALTER TABLE `tb_endereco_responsavel`
  ADD PRIMARY KEY (`cd_endereco`),
  ADD KEY `id_responsavel` (`id_responsavel`);

--
-- Indexes for table `tb_estado`
--
ALTER TABLE `tb_estado`
  ADD PRIMARY KEY (`cd_estado`);

--
-- Indexes for table `tb_formulario_interesse`
--
ALTER TABLE `tb_formulario_interesse`
  ADD PRIMARY KEY (`cd_form`);

--
-- Indexes for table `tb_galeria`
--
ALTER TABLE `tb_galeria`
  ADD PRIMARY KEY (`cd_galeria`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `tb_materia`
--
ALTER TABLE `tb_materia`
  ADD PRIMARY KEY (`cd_materia`);

--
-- Indexes for table `tb_mensagem_administrador`
--
ALTER TABLE `tb_mensagem_administrador`
  ADD PRIMARY KEY (`cd_mensagem_canal3`),
  ADD KEY `id_administrador` (`id_administrador`),
  ADD KEY `id_professor_canal3` (`id_professor_canal3`),
  ADD KEY `id_responsavel_canal3` (`id_responsavel_canal3`),
  ADD KEY `id_administrador_canal3` (`id_administrador_canal3`);

--
-- Indexes for table `tb_mensagem_professor`
--
ALTER TABLE `tb_mensagem_professor`
  ADD PRIMARY KEY (`cd_mensagem_canal1`),
  ADD KEY `id_professor` (`id_professor`),
  ADD KEY `id_administrador_canal1` (`id_administrador_canal1`),
  ADD KEY `id_responsavel_canal1` (`id_responsavel_canal1`),
  ADD KEY `id_professor_canal1` (`id_professor_canal1`);

--
-- Indexes for table `tb_mensagem_responsavel`
--
ALTER TABLE `tb_mensagem_responsavel`
  ADD PRIMARY KEY (`cd_mensagem_canal2`),
  ADD KEY `id_responsavel` (`id_responsavel`),
  ADD KEY `id_administrador_canal2` (`id_administrador_canal2`),
  ADD KEY `id_professor_canal2` (`id_professor_canal2`),
  ADD KEY `id_responsavel_canal2` (`id_responsavel_canal2`);

--
-- Indexes for table `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`cd_nota`),
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_atividade` (`id_atividade`);

--
-- Indexes for table `tb_periodo`
--
ALTER TABLE `tb_periodo`
  ADD PRIMARY KEY (`cd_periodo`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`cd_post`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `tb_professor`
--
ALTER TABLE `tb_professor`
  ADD PRIMARY KEY (`cd_professor`),
  ADD KEY `tb_professor_ibfk_1` (`id_materia_professor`);

--
-- Indexes for table `tb_recado_canal_administrador`
--
ALTER TABLE `tb_recado_canal_administrador`
  ADD PRIMARY KEY (`cd_recado_canal3`),
  ADD KEY `id_usuario_mandar_canal3` (`id_usuario_mandar_canal3`),
  ADD KEY `id_usuario_responsavel_canal3` (`id_usuario_responsavel_canal3`),
  ADD KEY `id_tipo_recado_canal3` (`id_tipo_recado_canal3`);

--
-- Indexes for table `tb_recado_canal_responsavel`
--
ALTER TABLE `tb_recado_canal_responsavel`
  ADD PRIMARY KEY (`cd_recado_canal1`),
  ADD KEY `id_usuario_mandar_canal1` (`id_usuario_mandar_canal1`),
  ADD KEY `id_usuario_administrador_canal1` (`id_usuario_administrador_canal1`),
  ADD KEY `id_tipo_recado_canal1` (`id_tipo_recado_canal1`);

--
-- Indexes for table `tb_responsavel`
--
ALTER TABLE `tb_responsavel`
  ADD PRIMARY KEY (`cd_responsavel`),
  ADD UNIQUE KEY `ds_cpf_responsavel` (`ds_cpf_responsavel`),
  ADD UNIQUE KEY `ds_rg_responsavel` (`ds_rg_responsavel`);

--
-- Indexes for table `tb_tipo_recado`
--
ALTER TABLE `tb_tipo_recado`
  ADD PRIMARY KEY (`cd_tipo_recado`);

--
-- Indexes for table `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD PRIMARY KEY (`cd_turma`),
  ADD KEY `tb_turma_ibfk_1` (`id_periodo_turma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_administrador`
--
ALTER TABLE `tb_administrador`
  MODIFY `cd_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `cd_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_aluno_responsavel`
--
ALTER TABLE `tb_aluno_responsavel`
  MODIFY `cd_aluno_responsavel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_atividade`
--
ALTER TABLE `tb_atividade`
  MODIFY `cd_atividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_bimestre`
--
ALTER TABLE `tb_bimestre`
  MODIFY `cd_bimestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_categoria_post`
--
ALTER TABLE `tb_categoria_post`
  MODIFY `cd_categoria_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_contato_administrador`
--
ALTER TABLE `tb_contato_administrador`
  MODIFY `cd_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_contato_aluno`
--
ALTER TABLE `tb_contato_aluno`
  MODIFY `cd_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_contato_professor`
--
ALTER TABLE `tb_contato_professor`
  MODIFY `cd_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_contato_responsavel`
--
ALTER TABLE `tb_contato_responsavel`
  MODIFY `cd_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_email_administrador`
--
ALTER TABLE `tb_email_administrador`
  MODIFY `cd_email` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_email_aluno`
--
ALTER TABLE `tb_email_aluno`
  MODIFY `cd_email` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_email_professor`
--
ALTER TABLE `tb_email_professor`
  MODIFY `cd_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_email_responsavel`
--
ALTER TABLE `tb_email_responsavel`
  MODIFY `cd_email` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_endereco_administrador`
--
ALTER TABLE `tb_endereco_administrador`
  MODIFY `cd_endereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_endereco_professor`
--
ALTER TABLE `tb_endereco_professor`
  MODIFY `cd_endereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_endereco_responsavel`
--
ALTER TABLE `tb_endereco_responsavel`
  MODIFY `cd_endereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_estado`
--
ALTER TABLE `tb_estado`
  MODIFY `cd_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_formulario_interesse`
--
ALTER TABLE `tb_formulario_interesse`
  MODIFY `cd_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_galeria`
--
ALTER TABLE `tb_galeria`
  MODIFY `cd_galeria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_materia`
--
ALTER TABLE `tb_materia`
  MODIFY `cd_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mensagem_administrador`
--
ALTER TABLE `tb_mensagem_administrador`
  MODIFY `cd_mensagem_canal3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mensagem_professor`
--
ALTER TABLE `tb_mensagem_professor`
  MODIFY `cd_mensagem_canal1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mensagem_responsavel`
--
ALTER TABLE `tb_mensagem_responsavel`
  MODIFY `cd_mensagem_canal2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `cd_nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `cd_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_professor`
--
ALTER TABLE `tb_professor`
  MODIFY `cd_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_recado_canal_administrador`
--
ALTER TABLE `tb_recado_canal_administrador`
  MODIFY `cd_recado_canal3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_recado_canal_responsavel`
--
ALTER TABLE `tb_recado_canal_responsavel`
  MODIFY `cd_recado_canal1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_responsavel`
--
ALTER TABLE `tb_responsavel`
  MODIFY `cd_responsavel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tipo_recado`
--
ALTER TABLE `tb_tipo_recado`
  MODIFY `cd_tipo_recado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_turma`
--
ALTER TABLE `tb_turma`
  MODIFY `cd_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD CONSTRAINT `tb_aluno_ibfk_1` FOREIGN KEY (`id_autorizacao`) REFERENCES `tb_autorizacao` (`cd_autorizacao`),
  ADD CONSTRAINT `tb_aluno_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`cd_turma`);

--
-- Limitadores para a tabela `tb_aluno_responsavel`
--
ALTER TABLE `tb_aluno_responsavel`
  ADD CONSTRAINT `tb_aluno_responsavel_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_aluno`),
  ADD CONSTRAINT `tb_aluno_responsavel_ibfk_2` FOREIGN KEY (`id_usuario_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_atividade`
--
ALTER TABLE `tb_atividade`
  ADD CONSTRAINT `tb_atividade_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `tb_materia` (`cd_materia`),
  ADD CONSTRAINT `tb_atividade_ibfk_2` FOREIGN KEY (`id_bimestre`) REFERENCES `tb_bimestre` (`cd_bimestre`),
  ADD CONSTRAINT `tb_atividade_ibfk_3` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`cd_turma`);

--
-- Limitadores para a tabela `tb_contato_administrador`
--
ALTER TABLE `tb_contato_administrador`
  ADD CONSTRAINT `tb_contato_administrador_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `tb_administrador` (`cd_administrador`);

--
-- Limitadores para a tabela `tb_contato_aluno`
--
ALTER TABLE `tb_contato_aluno`
  ADD CONSTRAINT `tb_contato_aluno_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_aluno`);

--
-- Limitadores para a tabela `tb_contato_professor`
--
ALTER TABLE `tb_contato_professor`
  ADD CONSTRAINT `tb_contato_professor_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`cd_professor`);

--
-- Limitadores para a tabela `tb_contato_responsavel`
--
ALTER TABLE `tb_contato_responsavel`
  ADD CONSTRAINT `tb_contato_responsavel_ibfk_1` FOREIGN KEY (`id_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_email_administrador`
--
ALTER TABLE `tb_email_administrador`
  ADD CONSTRAINT `tb_email_administrador_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `tb_administrador` (`cd_administrador`);

--
-- Limitadores para a tabela `tb_email_aluno`
--
ALTER TABLE `tb_email_aluno`
  ADD CONSTRAINT `tb_email_aluno_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_aluno`);

--
-- Limitadores para a tabela `tb_email_professor`
--
ALTER TABLE `tb_email_professor`
  ADD CONSTRAINT `tb_email_professor_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`cd_professor`);

--
-- Limitadores para a tabela `tb_email_responsavel`
--
ALTER TABLE `tb_email_responsavel`
  ADD CONSTRAINT `tb_email_responsavel_ibfk_1` FOREIGN KEY (`id_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_endereco_administrador`
--
ALTER TABLE `tb_endereco_administrador`
  ADD CONSTRAINT `tb_endereco_administrador_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `tb_administrador` (`cd_administrador`);

--
-- Limitadores para a tabela `tb_endereco_professor`
--
ALTER TABLE `tb_endereco_professor`
  ADD CONSTRAINT `tb_endereco_professor_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`cd_professor`);

--
-- Limitadores para a tabela `tb_endereco_responsavel`
--
ALTER TABLE `tb_endereco_responsavel`
  ADD CONSTRAINT `tb_endereco_responsavel_ibfk_1` FOREIGN KEY (`id_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_galeria`
--
ALTER TABLE `tb_galeria`
  ADD CONSTRAINT `tb_galeria_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `tb_post` (`cd_post`);

--
-- Limitadores para a tabela `tb_mensagem_administrador`
--
ALTER TABLE `tb_mensagem_administrador`
  ADD CONSTRAINT `tb_mensagem_administrador_ibfk_1` FOREIGN KEY (`id_professor_canal3`) REFERENCES `tb_professor` (`cd_professor`),
  ADD CONSTRAINT `tb_mensagem_administrador_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_mensagem_administrador_ibfk_3` FOREIGN KEY (`id_administrador_canal3`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_mensagem_administrador_ibfk_4` FOREIGN KEY (`id_responsavel_canal3`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_mensagem_professor`
--
ALTER TABLE `tb_mensagem_professor`
  ADD CONSTRAINT `tb_mensagem_professor_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`cd_professor`),
  ADD CONSTRAINT `tb_mensagem_professor_ibfk_2` FOREIGN KEY (`id_professor_canal1`) REFERENCES `tb_professor` (`cd_professor`),
  ADD CONSTRAINT `tb_mensagem_professor_ibfk_3` FOREIGN KEY (`id_administrador_canal1`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_mensagem_professor_ibfk_4` FOREIGN KEY (`id_responsavel_canal1`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_mensagem_responsavel`
--
ALTER TABLE `tb_mensagem_responsavel`
  ADD CONSTRAINT `tb_mensagem_responsavel_ibfk_1` FOREIGN KEY (`id_professor_canal2`) REFERENCES `tb_professor` (`cd_professor`),
  ADD CONSTRAINT `tb_mensagem_responsavel_ibfk_2` FOREIGN KEY (`id_administrador_canal2`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_mensagem_responsavel_ibfk_3` FOREIGN KEY (`id_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`),
  ADD CONSTRAINT `tb_mensagem_responsavel_ibfk_4` FOREIGN KEY (`id_responsavel_canal2`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD CONSTRAINT `tb_nota_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_aluno`),
  ADD CONSTRAINT `tb_nota_ibfk_2` FOREIGN KEY (`id_atividade`) REFERENCES `tb_atividade` (`cd_atividade`);

--
-- Limitadores para a tabela `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria_post` (`cd_categoria_post`);

--
-- Limitadores para a tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  ADD CONSTRAINT `tb_professor_ibfk_1` FOREIGN KEY (`id_materia_professor`) REFERENCES `tb_materia` (`cd_materia`);

--
-- Limitadores para a tabela `tb_recado_canal_administrador`
--
ALTER TABLE `tb_recado_canal_administrador`
  ADD CONSTRAINT `tb_recado_canal_administrador_ibfk_1` FOREIGN KEY (`id_usuario_mandar_canal3`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_recado_canal_administrador_ibfk_2` FOREIGN KEY (`id_usuario_responsavel_canal3`) REFERENCES `tb_responsavel` (`cd_responsavel`),
  ADD CONSTRAINT `tb_recado_canal_administrador_ibfk_4` FOREIGN KEY (`id_tipo_recado_canal3`) REFERENCES `tb_tipo_recado` (`cd_tipo_recado`);

--
-- Limitadores para a tabela `tb_recado_canal_responsavel`
--
ALTER TABLE `tb_recado_canal_responsavel`
  ADD CONSTRAINT `tb_recado_canal_responsavel_ibfk_1` FOREIGN KEY (`id_usuario_mandar_canal1`) REFERENCES `tb_responsavel` (`cd_responsavel`),
  ADD CONSTRAINT `tb_recado_canal_responsavel_ibfk_3` FOREIGN KEY (`id_usuario_administrador_canal1`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_recado_canal_responsavel_ibfk_4` FOREIGN KEY (`id_tipo_recado_canal1`) REFERENCES `tb_tipo_recado` (`cd_tipo_recado`);

--
-- Limitadores para a tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD CONSTRAINT `tb_turma_ibfk_1` FOREIGN KEY (`id_periodo_turma`) REFERENCES `tb_periodo` (`cd_periodo`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `waiter`
--
CREATE DATABASE IF NOT EXISTS `waiter` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `waiter`;

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
(6, 'cris', 'inc/img/uploads/perfil/jose.jpg', 'h3has@viphone.eu.org', '13997869755', 'Funcionário', 'cris', 11, 1),
(7, 'celestina', 'inc/img/uploads/perfil/celestina.jpg', 'celestina@gmail.com', '1213141516', 'Galinho morta', 'guarapari', 11, 6),
(8, 'Marcos', 'inc/img/uploads/perfil/Marcos.jpg', 'marcos@gmail.com', '+13997085677', 'FuncionÃ¡rio fixo', 'marcos', 10, 6),
(14, 'Maria', 'inc/img/uploads/perfil/Maria.jpg', 'maria@gmail.com', '+13997085677', 'FuncionÃ¡rio temporÃ¡rio', 'maria', 10, 6),
(24, 'marcos', 'inc/img/uploads/perfil/marcos.jpg', 'maria@gmail.com', '444', '444', '4444', 10, 7);

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
(1008, 'Simba 2L', 'inc/img/uploads/simba.jpg', '3.00', 13, 1, 1, 'nopromo'),
(1009, 'Parmenides (Atomo)', 'inc/img/uploads/parmenides.jpg', '250.00', 13, 1, 1, 'nopromo'),
(1010, 'X-Burguer', 'inc/img/uploads/xburguer.jpg', '7.00', 10, 1, 1, 'nopromo'),
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
(1081, 'Provolone a milanesa e fritas(+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.16.07.jpg', '95.00', 11, 6, 0, 'null'),
(1082, 'Porquinho e camarão(+5 latas)', 'inc/img/uploads/menu/2019.11.18-10.17.40.jpg', '119.00', 11, 6, 0, 'null'),
(1083, 'Peixe ao forno(serve 4 pessoas)', 'inc/img/uploads/menu/2019.11.18-10.19.32.jpg', '120.00', 15, 6, 0, 'null'),
(1084, 'Peixe ao forno(serve 6 pessoas)', 'inc/img/uploads/menu/2019.11.18-10.19.54.jpg', '180.00', 15, 6, 0, 'null'),
(1086, 'Açaí(300ml)-3 acompanhamenos', 'inc/img/uploads/menu/2019.11.18-10.23.38.jpg', '10.00', 23, 6, 0, 'null'),
(1087, 'Açaí(500ml)-3 acompanhamenos', 'inc/img/uploads/menu/2019.11.18-10.24.04.jpg', '15.00', 23, 6, 0, 'null'),
(1088, 'Banana', 'inc/img/uploads/menu/2019.11.21-09.49.59.', '1.00', 14, 6, 0, 'teste'),
(1089, 'Morango', 'inc/img/uploads/menu/2019.11.18-10.27.12.jpg', '1.00', 14, 6, 0, 'null'),
(1090, 'leite em po', 'inc/img/uploads/menu/2019.11.18-10.27.45.jpg', '1.00', 14, 6, 0, 'null'),
(1091, 'leite condensado', 'inc/img/uploads/menu/2019.11.18-10.28.22.jpg', '1.00', 14, 6, 0, 'null'),
(1092, 'sucrilhos', 'inc/img/uploads/menu/2019.11.18-10.28.48.jpg', '1.00', 14, 6, 0, 'null'),
(1093, 'chcoco ball', 'inc/img/uploads/menu/2019.11.18-10.31.25.jpg', '1.00', 14, 6, 0, 'null'),
(1094, 'amendoim', 'inc/img/uploads/menu/2019.11.18-10.32.32.jpg', '1.00', 14, 6, 0, 'null'),
(1095, 'granulado', 'inc/img/uploads/menu/2019.11.18-10.33.12.jpg', '1.00', 14, 6, 0, 'null'),
(1096, 'paçoca', 'inc/img/uploads/menu/2019.11.18-10.33.41.jpg', '1.00', 14, 6, 0, 'null'),
(1097, 'marshmello', 'inc/img/uploads/menu/2019.11.18-10.35.17.jpg', '1.00', 14, 6, 0, 'null'),
(1098, 'm&m´s', 'inc/img/uploads/menu/2019.11.18-10.35.52.jpg', '1.00', 14, 6, 0, 'null'),
(1099, 'granola', 'inc/img/uploads/menu/2019.11.18-10.36.30.jpg', '1.00', 14, 6, 0, 'null');

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
(128, 1003, 9, 98),
(129, 1086, 5, 100),
(130, 1086, 6, 101),
(131, 1085, 6, 102),
(132, 1086, 7, 102),
(133, 1087, 8, 102),
(134, 1086, 5, 103),
(135, 1085, 1, 104),
(136, 1086, 1, 104),
(137, 1026, 1, 104),
(138, 1010, 1, 104),
(139, 1035, 1, 104),
(140, 1007, 1, 104),
(141, 1048, 1, 104),
(142, 1086, 4, 101),
(143, 1010, 7, 101),
(144, 1007, 5, 101),
(145, 1086, 1, 102),
(146, 1010, 1, 102),
(147, 1063, 1, 102);

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
(100, '50.00', 'Cancelado', '', 2, '2019-11-18', '01:16:01', 1, '2019-11-18', '01:16:07', 8),
(101, '114.00', 'Finalizado', 'ObservaÃ§Ã£o foda', 12, '2019-11-25', '11:21:40', 1, '2019-11-25', '11:21:45', 8),
(102, '24.00', 'Finalizado', 'ObservaÃ§Ã£ofoda', 2, '2019-11-25', '11:27:55', 1, '2019-11-25', '11:31:06', 6);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `requests_numbers`
--
ALTER TABLE `requests_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
