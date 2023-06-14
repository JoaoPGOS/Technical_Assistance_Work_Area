-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Jun-2023 às 00:33
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `registros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aparelhos`
--

DROP TABLE IF EXISTS `aparelhos`;
CREATE TABLE IF NOT EXISTS `aparelhos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `os_aparelho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviço_realizado` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aparelhos`
--

INSERT INTO `aparelhos` (`id`, `os_aparelho`, `nome`, `serviço_realizado`) VALUES
(169, '4166731416', 'João Pedro', 'Projeto UB'),
(172, '492508 ub', 'João Pedro', 'Projeto UB'),
(173, '492509 ub', 'João Pedro', 'Projeto UB'),
(174, '4166726438 ub', 'João Pedro', 'Projeto UB'),
(175, '492494 ag peça', 'João Pedro', 'Ag. peça'),
(176, '492492 ag peça', 'João Pedro', 'Ag. peça'),
(177, '4166589976 ub', 'João Pedro', 'Projeto UB'),
(178, '492499 ADH', 'João Pedro', 'Projeto UB'),
(179, '492510 ADH ub', 'João Pedro', 'Projeto UB'),
(180, '4166660923 ub', 'João Pedro', 'Projeto UB'),
(181, '4166695630 ub', 'João Pedro', 'Projeto UB'),
(182, '4166687416 ub', 'João Pedro', 'Projeto UB'),
(183, '4166654584 ub', 'João Pedro', 'Projeto UB'),
(184, '4166713627 ub', 'João Pedro', 'Projeto UB'),
(185, '4166702591 ub', 'João Pedro', 'Projeto UB'),
(186, '4166573117 Ag. peça', 'João Pedro', 'Ag. peça'),
(187, '4166709726 ub', 'João Pedro', 'Projeto UB'),
(188, '4166670466 ub', 'João Pedro', 'Projeto UB'),
(189, '492515 ADH Ag. peça', 'João Pedro', 'Ag. peça'),
(190, '492521 ub', 'João Pedro', 'Projeto UB'),
(191, '492525 ub', 'João Pedro', 'Projeto UB'),
(192, '492516 ADH ub', 'João Pedro', 'Projeto UB'),
(193, '492529 ub', 'João Pedro', 'Projeto UB'),
(194, '492530 ub', 'João Pedro', 'Projeto UB'),
(195, '4166726438 wrt', 'João Pedro', 'WRT'),
(196, '4166709726 wrt', 'João Pedro', 'WRT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
