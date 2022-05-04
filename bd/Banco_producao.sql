-- phpMyAdmin SQL Dump
-- version 5.1.1deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03-Maio-2022 às 13:34
-- Versão do servidor: 10.5.12-MariaDB-1
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Banco_producao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Comprador`
--

CREATE TABLE `Comprador` (
  `ID` int(2) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `TELEFONE` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `STATUS` varchar(7) NOT NULL,
  `SITUACAO` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Comprador`
--

INSERT INTO `Comprador` (`ID`, `NOME`, `TELEFONE`, `EMAIL`, `STATUS`, `SITUACAO`) VALUES
(1, 'MARCIO', '63992107848', 'Nenhum', 'Inativo', 'EM OPERACAO'),
(2, 'LEONARDO', '63991057321', '-', 'Ativo', 'EM OPERAÇÃO'),
(3, 'HELTON JHON', ' 63984668490 ', '-', 'Ativo', 'EM OPERAÇÃO'),
(4, 'THAYS', '63999734300', '-', 'Ativo', 'EM OPERAÇÃO'),
(5, 'PABLO', '63992457777', '-', 'Ativo', 'EM OPERAÇÃO'),
(6, 'WITOR', ' 63984100146 ', '-', 'Ativo', 'EM OPERAÇÃO'),
(7, 'ROMARIO', '63992704356', '-', 'Ativo', 'EM OPERAÇÃO'),
(8, 'MÁRCIA', '63992639401', '-', 'Ativo', 'EM OPERAÇÃO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `SENHA` varchar(32) NOT NULL,
  `TIPO` varchar(8) NOT NULL,
  `STATUS` varchar(7) NOT NULL,
  `FOTO` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`ID`, `NOME`, `EMAIL`, `SENHA`, `TIPO`, `STATUS`, `FOTO`) VALUES
(1, 'Vilagrant Ataulfo', 'ataulfo192@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'Ativo', 'perfil/perfil.jpg'),
(16, 'Ataulfo', 'ataulfo-92@gmail.com', 'c8837b23ff8aaa8a2dde915473ce0991', 'Admin', 'Ativo', 'imagens/utilizador.png'),
(20, 'Jhony', 'jhony@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Usuario', 'Ativo', 'perfil/2024268.jpg');

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
  `ESTADO` int(11) NOT NULL,
  `STATUS_GERAL` varchar(7) DEFAULT NULL,
  `OPERACAO` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Fornecedor_lista`
--

INSERT INTO `Fornecedor_lista` (`ID`, `NOME_FORNECEDOR`, `RECOLHIMENTO`, `TROCA_COND`, `TELA`, `COMPRADOR`, `QUEM_RECEBE`, `ESTADO`, `STATUS_GERAL`, `OPERACAO`) VALUES
(1, 'Camil Sa', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(2, 'Refrescante bandeirantes', 'Não', 'Nenhum', 'Movimentação', 'Helton Jhon', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(3, 'Caramuru', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(4, 'Pro varejo', 'Não', 'Nenhum', 'Movimentação', 'Leonardo', 'S/R', 3, 'Ativo', 'Quebra Bonificada'),
(5, 'Edgard Co', 'Não', 'Nenhum', 'Movimentação', 'Pablo  ', 'S/R', 2, 'Ativo', ''),
(6, 'Interbrilho', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', ''),
(7, 'Sanremo', 'Sim', 'Avaria', 'Movimentação', 'Pablo', 'CD', 3, 'Ativo', ''),
(8, 'Temar', 'Não', 'Nenhum', 'Movimentação', 'Helton Jhon', 'S/R', 2, 'Ativo', ''),
(9, 'Cicopal', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(10, 'Barila', 'Sim', 'Venc', 'Movimentação', 'Leonardo', 'F/L', 3, 'Ativo', ''),
(11, 'Bem natural', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(12, 'Apti', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(13, 'Amafil', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(14, 'Cepera', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(15, 'Pandurata', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(16, 'R de paula', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'F/L', 1, 'Ativo', ''),
(17, 'Dom jason', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(18, 'J macedo', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(19, 'Nutri', 'Não', 'venc', 'Movimentação', 'Leonardo', 'S/R', 3, 'Ativo', ''),
(20, 'Atacadao SA', 'Não', 'Nenhum', 'Movimentação', 'Leonardo', 'S/R', 2, 'Ativo', ''),
(21, 'Enova foods', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(22, 'Cafe paraiso', 'Não', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'F/L', 1, 'Ativo', ''),
(23, 'Alvo dist', 'Sim', 'Venc', 'Transf / Locais', 'Leonardo', 'F/L', 1, 'Ativo', ''),
(24, 'Fugini', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(25, 'Fecularia lopes', 'Sim', 'Ava/Venc', 'Movimentação', 'Leonardo', 'S/R', 3, 'Ativo', ''),
(26, 'Filho Distribuiçao', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'F/L', 1, 'Ativo', ''),
(27, 'Goias verde', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(28, 'Grafica ideal', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(29, 'Imperatins', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(30, 'Induspar', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(31, 'Industria Alimenticia', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', ''),
(33, 'Mr de Magalhaes', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', ''),
(34, 'Danone LTDA ', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 3, 'Ativo', 'Quebra Bonificada'),
(35, 'Emporio Esmeralda', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 3, 'Ativo', ''),
(36, 'BRF', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', ''),
(37, 'Trop frutas', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', ''),
(38, 'Watanabe', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', ''),
(39, 'Sao Salvador', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', ''),
(40, 'Santa Isabel Bonasa', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', ''),
(41, 'Laticinio Bela Vista', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', ''),
(42, 'Zuppani industrial', 'Não', 'Nenhum', 'Movimentação', 'Marcio', 'S/R', 2, 'Ativo', ''),
(43, 'Quimica amparo', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'CD', 1, 'Ativo', ''),
(44, 'Gsa gama', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'F/L', 1, 'Ativo', ''),
(45, 'PONTELAND', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'CD', 1, 'Ativo', ''),
(46, 'Maximo distribuidor', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'CD', 1, 'Ativo', ''),
(47, 'Lebam comercio', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'CD', 1, 'Ativo', ''),
(48, 'KIMBERLY CLARK', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'CD', 1, 'Ativo', ''),
(49, 'Florence industrial', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'CD', 1, 'Ativo', ''),
(50, 'GOIAS ALIMENTOS', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'CD', 1, 'Ativo', ''),
(51, 'BOMBRIL SA', 'Não', 'Nenhum', 'Movimentação', 'Marcio', 'S/R', 2, 'Ativo', ''),
(52, 'Etilux', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', ''),
(53, 'Doce Festa', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(54, 'Brasilux', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', ''),
(55, 'Plasutil ', 'Sim', 'avaria', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', ''),
(56, 'Santa Maria', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', ''),
(57, 'Soprano', 'Não', 'Nenhum', 'Movimentação', 'Pablo', 'S/R', 2, 'Ativo', ''),
(58, 'Stolf artigos', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', ''),
(59, 'Rosa de ouro', 'Não', 'Ava/Venc', 'Movimentação', 'Pablo', 'S/R', 3, 'Ativo', ''),
(60, 'Ourolux', 'Não', 'Nenhum', 'Movimentação', 'Pablo', 'S/R', 2, 'Ativo', ''),
(61, 'Junco', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', ''),
(62, 'Mor distribuidora', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', ''),
(63, 'Cromos industria', 'Não', 'Nenhum', 'Movimentação', 'Pablo', 'S/R', 2, 'Ativo', ''),
(64, 'Comercial ramiro', 'Sim', 'Ava', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(65, 'Tramontina', 'Sim', 'avaria', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Comprador`
--
ALTER TABLE `Comprador`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT de tabela `Comprador`
--
ALTER TABLE `Comprador`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `Fornecedor_lista`
--
ALTER TABLE `Fornecedor_lista`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
