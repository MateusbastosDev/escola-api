SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
SET NAMES utf8mb4;

CREATE DATABASE IF NOT EXISTS `escola`;
USE `escola`;

CREATE TABLE `alunos` (
  `RA` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Data de Nascimento` date NOT NULL,
  `Turma` varchar(50) NOT NULL,
  PRIMARY KEY (`RA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `alunos` (`RA`, `Nome`, `Email`, `Data de Nascimento`, `Turma`) VALUES
(1, 'Kaique Souza', 'Kaiquecontato40@gmail.com', '2008-04-01', '1-A');

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;