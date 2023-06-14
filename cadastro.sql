-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Jun-2023 às 00:32
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
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuários`
--

DROP TABLE IF EXISTS `usuários`;
CREATE TABLE IF NOT EXISTS `usuários` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `senha` varchar(64) NOT NULL,
  `senhaconf` varchar(64) NOT NULL,
  `horario` varchar(64) NOT NULL,
  `nome` varchar(64) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuários`
--

INSERT INTO `usuários` (`iduser`, `senha`, `senhaconf`, `horario`, `nome`) VALUES
(1, '123', '123', '11h ás 20h', 'João Pedro'),
(2, '123', '123', '12:00 as 13:00', 'Fernando'),
(7, '123', '123', '10h as 20h', 'Gabriel Tadeu'),
(8, '123', '123', '9h as 18h', 'Nathalia Ferreira'),
(9, '123', '123', '10h as 20h', 'Ricardo E.'),
(10, '123', '123', '8h as 18h', 'Bruno Prado'),
(11, '123', '123', '8h as 17h', 'Amanda Alves'),
(12, '123', '123', '10h as 20h', 'Pablo Rocha'),
(13, '123', '123', '10h as 20h', 'Kerisson Santos'),
(14, '123', '123', '8h as 18h', 'Manoel'),
(15, '123', '123', '8h as 18h', 'Camila'),
(16, '123', '123', '8h as 18h', 'Fernando'),
(17, '123', '123', '11h as 20h', 'Pedro Santos'),
(18, '123', '123', '10h as 20h', 'Ygor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
