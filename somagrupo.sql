-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2016 às 05:39
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somagrupo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `somagrupo`
--

CREATE TABLE `somagrupo` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `votos` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `somagrupo`
--

INSERT INTO `somagrupo` (`cod`, `nome`, `votos`) VALUES
(22, 'rosa', 1),
(21, 'vermelho', 1),
(20, 'verde', 1),
(19, 'azul', 1),
(18, 'amarelo', 1),
(17, 'rosa', 1),
(16, 'vermelho', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `somagrupo`
--
ALTER TABLE `somagrupo`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `somagrupo`
--
ALTER TABLE `somagrupo`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
