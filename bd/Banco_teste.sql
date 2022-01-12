-- phpMyAdmin SQL Dump
-- version 5.1.1deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11-Jan-2022 às 09:51
-- Versão do servidor: 10.5.12-MariaDB-1
-- versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Banco_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Fornecedor_lista`
--

CREATE TABLE `Fornecedor_lista` (
  `ID` int(4) NOT NULL,
  `NOME_FORNECEDOR` text NOT NULL,
  `RECOLHIMENTO` text NOT NULL,
  `TROCA_COND` varchar(20) NOT NULL,
  `TELA` text NOT NULL,
  `COMPRADOR` text NOT NULL,
  `QUEM_RECEBE` char(3) NOT NULL,
  `ESTADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Fornecedor_lista`
--

INSERT INTO `Fornecedor_lista` (`ID`, `NOME_FORNECEDOR`, `RECOLHIMENTO`, `TROCA_COND`, `TELA`, `COMPRADOR`, `QUEM_RECEBE`, `ESTADO`) VALUES
(1, 'Camil Sa', 'Sim', 'Nenhum', 'Troca entre locais', 'Helthon Jhon', 'CD', 1),
(2, 'Coca cola', 'Não', 'Nenhum', 'Movimentação', 'Helthon Jhon', 'S/R', 2),
(3, 'Caramuru', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(4, 'Pro varejo', 'Não', 'Nenhum', 'Movimentação', 'Leonardo', 'S/R', 4),
(5, 'Edgard Co', 'Não', 'Nenhum', 'Movimentação', 'Pablo  ', 'S/R', 2),
(6, 'Interbrilho', 'Sim', 'Nenhum', 'Troca entre locais', 'Pablo', 'CD', 1),
(7, 'Sanremo', 'Sim', 's/avaria', 'Troca entre locais', 'Pablo', 'CD', 3),
(8, 'Temar', 'Não', 'Nenhum', 'Movimentação', 'Helton Jhon', 'S/R', 2),
(10, 'Cicopal', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(11, 'Barila', 'Sim', 's/vencimento', 'Troca entre locais', 'Leonardo', 'F/L', 3),
(12, 'Bem natural', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(13, 'Apti', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(14, 'Amafil', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(15, 'Cepera', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(16, 'Pandurata', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(23, 'R de paula', 'Sim', 'Nenhum', 'Troca entre locais', 'Helton Jhon', 'F/L', 1),
(24, 'Dom jason', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(25, 'J macedo', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1),
(26, 'Nutri', 'Não', 'Nenhum', 'Movimentação', 'Leonardo', 'S/R', 4),
(27, 'Atacadao', 'Não', 'Nenhum', 'Movimentação', 'Leonardo', 'S/R', 2),
(28, 'Enova foods', 'Sim', 'Nenhum', 'Troca entre locais', 'Leonardo', 'CD', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Fornecedor_lista`
--
ALTER TABLE `Fornecedor_lista`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_busca` (`NOME_FORNECEDOR`(768));

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Fornecedor_lista`
--
ALTER TABLE `Fornecedor_lista`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
