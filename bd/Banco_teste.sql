-- phpMyAdmin SQL Dump
-- version 5.1.1deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 15-Fev-2022 às 12:51
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
-- Banco de dados: `Banco_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Cod_de_Barra`
--

CREATE TABLE `Cod_de_Barra` (
  `ID` int(11) NOT NULL,
  `COD` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Cod_de_Barra`
--

INSERT INTO `Cod_de_Barra` (`ID`, `COD`) VALUES
(1, '7777777777777'),
(2, '1111111111111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Compradores`
--

CREATE TABLE `Compradores` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(12) NOT NULL,
  `TELEFONE` varchar(12) NOT NULL,
  `ATIVO` varchar(3) NOT NULL,
  `SITUACAO` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `STATUS_GERAL` text NOT NULL,
  `OPERACAO` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Fornecedor_lista`
--

INSERT INTO `Fornecedor_lista` (`ID`, `NOME_FORNECEDOR`, `RECOLHIMENTO`, `TROCA_COND`, `TELA`, `COMPRADOR`, `QUEM_RECEBE`, `ESTADO`, `STATUS_GERAL`, `OPERACAO`) VALUES
(1, 'Camil Sa', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(2, 'Coca cola', 'Não', 'Nenhum', 'Movimentação', 'Helton Jhon', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(3, 'Caramuru', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(4, 'Pro varejo', 'Não', 'Nenhum', 'Movimentação', 'Leonardo', 'S/R', 3, 'Ativo', 'Quebra Bonificada'),
(5, 'Edgard Correia', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'S/R', 1, 'Ativo', 'Loja / Avaria'),
(6, 'Interbrilho', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(7, 'Sanremo', 'Sim', 'S/Avaria', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(8, 'Temar', 'Não', 'Nenhum', 'Movimentação', 'Helton Jhon', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(9, 'Cicopal', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(10, 'Barilla do brasil', 'Sim', 'Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(11, 'Bem natural', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(12, 'Apti', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(13, 'Amafil', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(14, 'Cepera', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(15, 'Pandurata', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(16, 'R de paula', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(17, 'Dom jason', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(18, 'J macedo', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(19, 'Nutri', 'Não', 'Nenhum', 'Movimentação', 'Leonardo', 'S/R', 3, 'Ativo', 'Quebra Bonificada'),
(20, 'Atacadao SA', 'Não', 'Nenhum', 'Movimentação', 'Leonardo', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(21, 'Enova foods', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(22, 'Cafe paraiso', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(23, 'Alvo dist', 'Sim', 'Venc', 'Transf / Locais', 'Leonardo', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(24, 'Fugini', 'Sim', 'S/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(25, 'Fecularia lopes', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'S/R', 1, 'Ativo', 'Quebra Bonificada'),
(26, 'Filho Distribuiçao', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(27, 'Goias verde', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(28, 'Grafica ideal', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(29, 'Imperatins', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(30, 'Induspar', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(31, 'Industria Alimenticia', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(41, 'Porto Cereais', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(42, 'Denio bertilho', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(43, 'Marka logistica', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Pablo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(44, 'Javi produtos', 'Não', 'Nenhum', 'Movimentação', 'Helton Jhon', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(45, 'R alexandre ki brasil', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(46, 'Da colonia', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(47, 'Cda', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(48, 'Cristal alimentos', 'Sim', 's/avaria', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(49, 'Famiglia Zanlorenzi', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(50, 'Ferreira e Cunha', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(51, 'Vinicola Aurora', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(52, 'Vinicola Perini', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(53, 'Vinicola Salton', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(54, 'Mineira Cerais', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(55, 'Antonio Basso ', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Helton Jhon', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(56, 'Gds marcas', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(57, 'Cafe rancheiro', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(58, 'Casa madeira', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(59, 'Cafe do sitio', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(60, 'Comercial pedocca', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(61, 'Pastificio selmi ', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Leonardo', 'CD', 1, 'Ativo', 'Loja / Avaria'),
(62, 'Danone ', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 3, 'Ativo', 'Quebra Bonificada'),
(63, 'Batavo', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Thays', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(64, 'Serra azul', 'Não', 'Ava/Venc', 'Transf / Locais', 'Thays', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(65, 'Pao de queijo janio', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Thays', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(66, 'Vigor', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 3, 'Ativo', 'Quebra Bonificada'),
(67, 'Verde campo', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(68, 'Itambe', 'Não', 'Ava/Venc', 'Transf / Locais', 'Thays', 'S/R', 1, 'Ativo', 'Loja / Avaria'),
(69, 'Mezzani', 'Não', 'Ava/Venc', 'Transf / Locais', 'Thays', 'S/R', 1, 'Ativo', 'Loja / Avaria'),
(70, 'Canto de minas', 'Não', 'Ava/Venc', 'Transf / Locais', 'Thays', 'S/R', 1, 'Ativo', 'Loja / Avaria'),
(71, 'Perdigao', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(72, 'Sadia', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(73, 'Aurea', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Thays', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(74, 'Friato', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Thays', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(75, 'Serta norte', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Thays', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(76, 'Bonasa ', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(77, 'Piracanjuba', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(78, 'Pif paf', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Thays', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(79, 'Seara frimesa', 'Sim', 'S/Venc', 'Transf / Locais', 'Thays', 'F/L', 1, 'Ativo', 'Loja / Avaria'),
(80, 'Frimesa nata', 'Não', 'Nenhum', 'Movimentação', 'Thays', 'S/R', 2, 'Ativo', 'Quebra Operacional'),
(81, 'Spa industria pao da hora', 'Sim', 'Ava/Venc', 'Transf / Locais', 'Marcio', 'F/L', 1, 'Ativo', 'Loja / Avaria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(15) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `SENHA` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `NOME`, `EMAIL`, `SENHA`) VALUES
(1, 'Ataulfo', 'ataulfo192@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Jenkins', 'gustavo123@gmail.com', 'b66dc44cd9882859d84670604ae276e6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Cod_de_Barra`
--
ALTER TABLE `Cod_de_Barra`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `Compradores`
--
ALTER TABLE `Compradores`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `Fornecedor_lista`
--
ALTER TABLE `Fornecedor_lista`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_busca` (`NOME_FORNECEDOR`(768));

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Cod_de_Barra`
--
ALTER TABLE `Cod_de_Barra`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `Compradores`
--
ALTER TABLE `Compradores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Fornecedor_lista`
--
ALTER TABLE `Fornecedor_lista`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
