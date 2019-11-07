-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2019 at 10:46 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eagles-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `telefone` bigint(11) DEFAULT NULL,
  `usuario_nome_de_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`idcontato`),
  KEY `fk_contato_usuario1_idx` (`usuario_nome_de_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`idcontato`, `email`, `telefone`, `usuario_nome_de_usuario`) VALUES
(1, 'NULL', NULL, 'ramon');

-- --------------------------------------------------------

--
-- Table structure for table `desempenho`
--

DROP TABLE IF EXISTS `desempenho`;
CREATE TABLE IF NOT EXISTS `desempenho` (
  `id_desemprenho` int(11) NOT NULL AUTO_INCREMENT,
  `nome_de_usuario_usuario` varchar(50) NOT NULL,
  `perguntas_respondidas` int(11) NOT NULL,
  `perguntas_acertadas` int(11) NOT NULL,
  `tempo_medio_responder` int(11) NOT NULL,
  `tempo_total_de_jogo` bigint(12) NOT NULL,
  `media_diaria` int(5) NOT NULL,
  PRIMARY KEY (`id_desemprenho`),
  KEY `nome_de_usuario_usuario_idx` (`nome_de_usuario_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desempenho`
--

INSERT INTO `desempenho` (`id_desemprenho`, `nome_de_usuario_usuario`, `perguntas_respondidas`, `perguntas_acertadas`, `tempo_medio_responder`, `tempo_total_de_jogo`, `media_diaria`) VALUES
(1, 'ramon', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lastacess`
--

DROP TABLE IF EXISTS `lastacess`;
CREATE TABLE IF NOT EXISTS `lastacess` (
  `idlastAcess` int(11) NOT NULL AUTO_INCREMENT,
  `horaUltimoAcesso` time NOT NULL,
  `diaUltimoAcesso` date NOT NULL,
  `usuario_nome_de_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`idlastAcess`),
  KEY `fk_lastAcess_usuario1_idx` (`usuario_nome_de_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lastacess`
--

INSERT INTO `lastacess` (`idlastAcess`, `horaUltimoAcesso`, `diaUltimoAcesso`, `usuario_nome_de_usuario`) VALUES
(1, '22:45:23', '2019-10-30', 'ramon');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(50) NOT NULL,
  `nome_de_usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `fase_atual` smallint(3) NOT NULL,
  `plus` tinyint(4) NOT NULL,
  `score` bigint(20) NOT NULL,
  `mathcoin` bigint(20) NOT NULL,
  `quantDicas` int(11) NOT NULL,
  `comprouPersonagem` tinyint(4) NOT NULL,
  PRIMARY KEY (`nome_de_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`nome`, `nome_de_usuario`, `senha`, `data_de_nascimento`, `fase_atual`, `plus`, `score`, `mathcoin`, `quantDicas`, `comprouPersonagem`) VALUES
('Ramon', 'ramon', 'c009018cb3d036b147e67dd5a8e657d5', '2003-06-18', 1, 0, 0, 1000, 5, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `fk_contato_usuario1` FOREIGN KEY (`usuario_nome_de_usuario`) REFERENCES `usuario` (`nome_de_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `desempenho`
--
ALTER TABLE `desempenho`
  ADD CONSTRAINT `nome_de_usuario_usuario` FOREIGN KEY (`nome_de_usuario_usuario`) REFERENCES `usuario` (`nome_de_usuario`) ON UPDATE NO ACTION;

--
-- Constraints for table `lastacess`
--
ALTER TABLE `lastacess`
  ADD CONSTRAINT `fk_lastAcess_usuario1` FOREIGN KEY (`usuario_nome_de_usuario`) REFERENCES `usuario` (`nome_de_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
