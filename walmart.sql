-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2016 at 06:51 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `walmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(255) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `tipoend` varchar(255) DEFAULT NULL,
  `pontoref` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `enderecos`
--

INSERT INTO `enderecos` (`id`, `destinatario`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `tipoend`, `pontoref`) VALUES
(3, 'Jimi Hendrix', 99999999, 'One Street', 214, 'Casa', 'Manhattan', 'SÃ£o Paulo', 'SP', 'Residencial', 'Nenhum'),
(4, 'Erick Clapton', 99999999, 'Two Street', 258, 'Casa', 'Beverly Hills', 'SÃ£o Paulo', 'SP', 'Residencial', 'Nenhum'),
(5, 'Amy Winehouse', 99999999, 'Third Street', 258, 'Casa', 'White House', 'SÃ£o Paulo', 'SP', 'Res', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
