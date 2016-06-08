-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jun-2016 às 05:14
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mealmacther`
--
CREATE DATABASE IF NOT EXISTS `mealmacther` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mealmacther`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_admin`
--

DROP TABLE IF EXISTS `cad_admin`;
CREATE TABLE IF NOT EXISTS `cad_admin` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_email` varchar(45) NOT NULL,
  `adm_nome` varchar(45) NOT NULL,
  `adm_senha` varchar(45) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_avaliacao`
--

DROP TABLE IF EXISTS `cad_avaliacao`;
CREATE TABLE IF NOT EXISTS `cad_avaliacao` (
  `com_id` int(11) NOT NULL,
  `pes_id` int(11) NOT NULL,
  `ava_curtir` tinyint(1) NOT NULL,
  PRIMARY KEY (`com_id`,`pes_id`),
  KEY `fk_cad_combinacao_has_cad_pessoa_cad_pessoa1_idx` (`pes_id`),
  KEY `fk_cad_combinacao_has_cad_pessoa_cad_combinacao1_idx` (`com_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_avaliacao`
--

INSERT INTO `cad_avaliacao` (`com_id`, `pes_id`, `ava_curtir`) VALUES
(2, 1, 1),
(2, 7, 1),
(2, 8, 1),
(5, 7, 1),
(11, 8, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_bebidas`
--

DROP TABLE IF EXISTS `cad_bebidas`;
CREATE TABLE IF NOT EXISTS `cad_bebidas` (
  `beb_id` int(11) NOT NULL AUTO_INCREMENT,
  `beb_nome` varchar(45) NOT NULL,
  `beb_descricao` varchar(45) DEFAULT NULL,
  `beb_data_insert` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `beb_data_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`beb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cad_bebidas`
--

INSERT INTO `cad_bebidas` (`beb_id`, `beb_nome`, `beb_descricao`, `beb_data_insert`, `beb_data_update`) VALUES
(1, 'Coca', 'ascacasc', NULL, NULL),
(2, 'Guaraná', 'asdasd', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_combinacao`
--

DROP TABLE IF EXISTS `cad_combinacao`;
CREATE TABLE IF NOT EXISTS `cad_combinacao` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `pra_id` int(11) NOT NULL,
  `beb_id` int(11) NOT NULL,
  `com_descricao` varchar(65) DEFAULT NULL,
  `pes_id` int(11) NOT NULL,
  `com_nota` int(11) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`com_id`),
  KEY `fk_cad_combinacao_cad_pratos_idx` (`pra_id`),
  KEY `fk_cad_combinacao_cad_bebidas1_idx` (`beb_id`),
  KEY `fk_cad_combinacao_cad_pessoa1_idx` (`pes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `cad_combinacao`
--

INSERT INTO `cad_combinacao` (`com_id`, `pra_id`, `beb_id`, `com_descricao`, `pes_id`, `com_nota`, `data`) VALUES
(2, 1, 1, 'aaaaa', 1, 4, '2016-06-08 00:06:52'),
(5, 1, 1, 'bbbbbbb', 1, 5, '2016-06-08 00:06:57'),
(6, 2, 2, 'cccccccc', 1, 2, '2016-06-08 00:07:06'),
(7, 2, 1, 'ddddddd', 1, 1, '2016-06-08 00:07:12'),
(8, 2, 1, 'eeeeee', 1, 1, '2016-06-08 00:07:19'),
(9, 1, 1, 'ffffff', 1, 5, '2016-06-08 00:07:23'),
(10, 1, 1, 'ggggggg', 1, 4, '2016-06-08 00:07:27'),
(11, 1, 1, '', 1, 5, '2016-06-02 17:29:19'),
(12, 1, 1, 'iiiiiii', 1, 4, '2016-06-08 00:07:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_pessoa`
--

DROP TABLE IF EXISTS `cad_pessoa`;
CREATE TABLE IF NOT EXISTS `cad_pessoa` (
  `pes_id` int(11) NOT NULL AUTO_INCREMENT,
  `pes_nome` varchar(45) NOT NULL,
  `pes_sobrenome` varchar(45) NOT NULL,
  `pes_email` varchar(45) DEFAULT NULL,
  `pes_senha` varchar(45) NOT NULL,
  `pes_sexo` tinyint(1) NOT NULL,
  `pes_data_insert` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pes_data_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `cad_pessoa`
--

INSERT INTO `cad_pessoa` (`pes_id`, `pes_nome`, `pes_sobrenome`, `pes_email`, `pes_senha`, `pes_sexo`, `pes_data_insert`, `pes_data_update`) VALUES
(1, 'Lucas 2', 'Mendes Mota da Fonseca', 'lucas.lmmf@gmail.com', '123', 1, '2016-06-02 14:16:54', '2016-06-02 14:16:54'),
(7, 'Lucas 2', 'Mendes Mota da Fonseca', 'lucas.lmmf@gmail.com', '123', 1, '2016-06-02 14:16:54', '2016-06-02 14:16:54'),
(8, 'Lucas 2', 'Mendes Mota da Fonseca', 'lucas.lmmf@gmail.com', '123', 1, '2016-06-02 14:16:54', '2016-06-02 14:16:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_pratos`
--

DROP TABLE IF EXISTS `cad_pratos`;
CREATE TABLE IF NOT EXISTS `cad_pratos` (
  `pra_id` int(11) NOT NULL AUTO_INCREMENT,
  `pra_nome` varchar(45) NOT NULL,
  `pra_descricao` varchar(45) NOT NULL,
  `pra_data_insert` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pra_data_update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pra_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cad_pratos`
--

INSERT INTO `cad_pratos` (`pra_id`, `pra_nome`, `pra_descricao`, `pra_data_insert`, `pra_data_update`) VALUES
(1, 'Buchada', 'adqwdqqd', '2016-06-02 17:11:09', '2016-06-02 17:11:09'),
(2, 'prato 2', 'asdasadd', '2016-06-02 17:10:46', '2016-06-02 17:10:46'),
(3, 'prato 3', 'asdad', '2016-06-02 17:10:20', '2016-06-02 17:10:20');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cad_avaliacao`
--
ALTER TABLE `cad_avaliacao`
  ADD CONSTRAINT `fk_cad_combinacao_has_cad_pessoa_cad_combinacao1` FOREIGN KEY (`com_id`) REFERENCES `cad_combinacao` (`com_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cad_combinacao_has_cad_pessoa_cad_pessoa1` FOREIGN KEY (`pes_id`) REFERENCES `cad_pessoa` (`pes_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cad_combinacao`
--
ALTER TABLE `cad_combinacao`
  ADD CONSTRAINT `fk_cad_combinacao_cad_bebidas1` FOREIGN KEY (`beb_id`) REFERENCES `cad_bebidas` (`beb_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cad_combinacao_cad_pessoa1` FOREIGN KEY (`pes_id`) REFERENCES `cad_pessoa` (`pes_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cad_combinacao_cad_pratos` FOREIGN KEY (`pra_id`) REFERENCES `cad_pratos` (`pra_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
