-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2020 às 19:55
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aue`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idcontato`, `nome`, `sexo`, `data`, `cidade`) VALUES
(1, '1', 'Feminino', '1', '1'),
(2, '2', 'Masculino', '2', 'Juiz de Fora'),
(3, '3', 'feminino', '3', 'Juiz de Fora'),
(4, '1', '1', '4', '1'),
(5, '7', '7', '5', '7'),
(6, '2', '2', '6', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
