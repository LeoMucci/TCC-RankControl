-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Nov-2022 às 14:54
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `idArquivos` int(11) NOT NULL,
  `path_arquivos` varchar(100) NOT NULL,
  `numeroVW` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`idArquivos`, `path_arquivos`, `numeroVW`) VALUES
(100, '52374eebfdd1ec14bd0fc0a170d380f0.jpg', 8531366),
(101, '922417ddc92d9d29afb847c3cd2a315e.jpeg', 4034178),
(102, 'a7926eee106a3f3dafd147be1e2ed30c.jpeg', 4051708),
(103, 'b3f35cc55b045addee39981e914dbb4e.jpeg', 3000891),
(104, 'eefaeae03948e9e15bdb77fa9be3dc51.jpg', 1234567),
(105, '61c881565f4fa9ffa19ee667c3c34761.jpg', 3000894),
(106, '30d0d62c94609a43c4693ddd4a7b8256.jpg', 1357923),
(107, '358026dfd07b5b90f0d75e158bd3437d.jpg', 7654321),
(108, 'c6bd46e41e55c161a9e2617d55169cb1.jpg', 7777777),
(109, '15fc03e28ff791262b6cd97ae2384e83.jpg', 2222222),
(110, 'bc15f29a2e7f39c9fa561dc8bf42edf1.', 3333333),
(111, '434a19dd4e27872e2f3a57408ad7eb2a.jpg', 6666666),
(112, '1fe7b70f885406bb50bae70eab0b4fd0.', 1211111),
(113, '841390e80b19bfabf6530ac4a2338bb1.png', 122122),
(114, '2a09821e11fa1180b933906ade06c729.png', 21),
(115, '87fd435002d66498a85d2564d6577ffb.', 2122112),
(116, '11eeca9cc2a39ecfe74c18b01e9cd112.', 1211111),
(117, 'ffe7fb79c1508c1773565ca93a41ca81.png', 122122),
(118, '8db03602319059b50f449f2ed43bea26.png', 21),
(119, 'd401f1b77e0b5fd572e89e49a05afd9f.', 2122112),
(120, 'b4440974d9586722b3829102f9a30d2a.', 1211111),
(121, '803ea8813b0cd592e3a3233a5073f456.png', 122122),
(122, 'aed5582223af8a2ca90167f8d844a341.png', 21),
(123, '6723c7f67a641cb76b42aeae2fd2c8c1.', 2122112),
(124, 'c27e22e18f864e61448e8a078b009bf5.', 1211111),
(125, '6d85d016ea3c5decf2d97d3be345027b.png', 122122),
(126, 'd71f1459b4a923ee672901c8e2064595.png', 21),
(127, '2e0f7a6a60aae67f9fd6ce906c2b0a65.', 2122112),
(128, '35b4a5d95ed391a36f074ad3a344926b.', 1211111),
(129, '3b1d0c01af786986cdc5c9290c4813f8.png', 122122),
(130, 'c9029e3d59d9f9afd206405a9f50cc95.png', 21),
(131, 'ec83c5524580c41c8bdba320d20b6857.', 2122112);

-- --------------------------------------------------------

--
-- Estrutura da tabela `futuro`
--

CREATE TABLE `futuro` (
  `idFuturo` int(11) NOT NULL,
  `nome_futuro` varchar(100) NOT NULL,
  `numeroVW_futuro` int(7) NOT NULL,
  `idade_futuro` int(2) NOT NULL,
  `genero_futuro` varchar(1) NOT NULL,
  `tempo_de_VW_futuro` int(2) NOT NULL,
  `categoria_futuro` varchar(100) NOT NULL,
  `ultimoGAP_futuro` varchar(100) NOT NULL,
  `ultimoMBO_futuro` varchar(100) NOT NULL,
  `ultima_avaliacao_geral_futuro` varchar(100) NOT NULL,
  `comentarios_futuro` varchar(100) NOT NULL,
  `posicao_anterior_9box_futuro` int(1) NOT NULL,
  `posicao_atual_9box_futuro` int(1) NOT NULL,
  `eixoHow_futuro` varchar(100) NOT NULL,
  `eixoWhat_futuro` varchar(100) NOT NULL,
  `criterios_de_apontamento_futuro` varchar(100) NOT NULL,
  `criterios_de_acesso_futuro` varchar(100) NOT NULL,
  `etapa_NDP_futuro` varchar(100) NOT NULL,
  `acoes_de_desenvolvimento_futuro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `futuro`
--

INSERT INTO `futuro` (`idFuturo`, `nome_futuro`, `numeroVW_futuro`, `idade_futuro`, `genero_futuro`, `tempo_de_VW_futuro`, `categoria_futuro`, `ultimoGAP_futuro`, `ultimoMBO_futuro`, `ultima_avaliacao_geral_futuro`, `comentarios_futuro`, `posicao_anterior_9box_futuro`, `posicao_atual_9box_futuro`, `eixoHow_futuro`, `eixoWhat_futuro`, `criterios_de_apontamento_futuro`, `criterios_de_acesso_futuro`, `etapa_NDP_futuro`, `acoes_de_desenvolvimento_futuro`) VALUES
(3, 'Rodrigo Veloso de Holanda Gonçalves', 3000894, 18, 'M', 1, 'PJ', '0', '0', '0', '0', 4, 1, '91', '394', '0', '0', '0', '0'),
(4, 'Matheus Bairrada', 7654321, 19, 'M', 1, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 5, 9, '90', '3', 'na', 'na', '0', 'na'),
(5, 'Gustavo Barbosa', 6666666, 44, 'M', 10, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 6, 9, '90', '4', 'na', 'na', '0', 'na'),
(6, 'Matheus Bairrada', 2122112, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 21, '21', '21', 'na', 'na', '0', 'na'),
(7, 'Matheus Bairrada', 2122112, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 21, '21', '21', 'na', 'na', '0', 'na'),
(8, 'Matheus Bairrada', 2122112, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 21, '21', '21', 'na', 'na', '0', 'na'),
(9, 'Matheus Bairrada', 2122112, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 21, '21', '21', 'na', 'na', '0', 'na'),
(10, 'Matheus Bairrada', 2122112, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 21, '21', '21', 'na', 'na', '0', 'na');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ideal`
--

CREATE TABLE `ideal` (
  `idIdeal` int(11) NOT NULL,
  `nome_ideal` varchar(100) NOT NULL,
  `numeroVW_ideal` int(7) NOT NULL,
  `idade_ideal` int(2) NOT NULL,
  `genero_ideal` varchar(1) NOT NULL,
  `tempo_de_VW_ideal` int(2) NOT NULL,
  `categoria_ideal` varchar(100) NOT NULL,
  `ultimoGAP_ideal` varchar(100) NOT NULL,
  `ultimoMBO_ideal` varchar(100) NOT NULL,
  `ultima_avaliacao_geral_ideal` varchar(100) NOT NULL,
  `comentarios_ideal` varchar(100) NOT NULL,
  `posicao_anterior_9box_ideal` int(1) NOT NULL,
  `posicao_atual_9box_ideal` int(1) NOT NULL,
  `eixoHow_ideal` varchar(100) NOT NULL,
  `eixoWhat_ideal` varchar(100) NOT NULL,
  `criterios_de_apontamento_ideal` varchar(100) NOT NULL,
  `criterios_de_acesso_ideal` varchar(100) NOT NULL,
  `etapa_NDP_ideal` varchar(100) NOT NULL,
  `acoes_de_desenvolvimento_ideal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ideal`
--

INSERT INTO `ideal` (`idIdeal`, `nome_ideal`, `numeroVW_ideal`, `idade_ideal`, `genero_ideal`, `tempo_de_VW_ideal`, `categoria_ideal`, `ultimoGAP_ideal`, `ultimoMBO_ideal`, `ultima_avaliacao_geral_ideal`, `comentarios_ideal`, `posicao_anterior_9box_ideal`, `posicao_atual_9box_ideal`, `eixoHow_ideal`, `eixoWhat_ideal`, `criterios_de_apontamento_ideal`, `criterios_de_acesso_ideal`, `etapa_NDP_ideal`, `acoes_de_desenvolvimento_ideal`) VALUES
(4, 'BIANCA SOCHIROLI GARCIA GOMES', 4051708, 37, 'F', 12, 'MENSALISTA', 'NA', 'NA', 'NA', '0', 1, 0, '92', '362', '0', '0', '0', '0'),
(5, 'Nicole Bignati', 1357923, 17, 'F', 1, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 5, 9, '90', '3', 'na', 'na', '0', 'na'),
(6, 'Ana Beatriz da Luz', 3333333, 31, 'F', 4, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 3, 8, '90', '3', 'na', 'na', '0', 'na'),
(7, 'Nicole Bignati', 21, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 8, '12', '21', 'na', 'na', '21', 'na'),
(8, 'Nicole Bignati', 21, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 8, '12', '21', 'na', 'na', '21', 'na'),
(9, 'Nicole Bignati', 21, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 8, '12', '21', 'na', 'na', '21', 'na'),
(10, 'Nicole Bignati', 21, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 8, '12', '21', 'na', 'na', '21', 'na'),
(11, 'Nicole Bignati', 21, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 21, 8, '12', '21', 'na', 'na', '21', 'na');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imediato`
--

CREATE TABLE `imediato` (
  `idImediato` int(11) NOT NULL,
  `nome_imediato` varchar(100) NOT NULL,
  `numeroVW_imediato` int(7) NOT NULL,
  `idade_imediato` int(2) NOT NULL,
  `genero_imediato` varchar(1) NOT NULL,
  `tempo_de_VW_imediato` int(2) NOT NULL,
  `categoria_imediato` varchar(100) NOT NULL,
  `ultimoGAP_imediato` varchar(100) NOT NULL,
  `ultimoMBO_imediato` varchar(100) NOT NULL,
  `ultima_avaliacao_geral_imediato` varchar(100) NOT NULL,
  `comentarios_imediato` varchar(100) NOT NULL,
  `posicao_anterior_9box_imediato` int(1) NOT NULL,
  `posicao_atual_9box_imediato` int(1) NOT NULL,
  `eixoHow_imediato` varchar(100) NOT NULL,
  `eixoWhat_imediato` varchar(100) NOT NULL,
  `criterios_de_apontamento_imediato` varchar(100) NOT NULL,
  `criterios_de_acesso_imediato` varchar(100) NOT NULL,
  `etapa_NDP_imediato` varchar(100) NOT NULL,
  `acoes_de_desenvolvimento_imediato` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imediato`
--

INSERT INTO `imediato` (`idImediato`, `nome_imediato`, `numeroVW_imediato`, `idade_imediato`, `genero_imediato`, `tempo_de_VW_imediato`, `categoria_imediato`, `ultimoGAP_imediato`, `ultimoMBO_imediato`, `ultima_avaliacao_geral_imediato`, `comentarios_imediato`, `posicao_anterior_9box_imediato`, `posicao_atual_9box_imediato`, `eixoHow_imediato`, `eixoWhat_imediato`, `criterios_de_apontamento_imediato`, `criterios_de_acesso_imediato`, `etapa_NDP_imediato`, `acoes_de_desenvolvimento_imediato`) VALUES
(4, 'GABRIELLA PIOLI POLYDORO', 4034178, 41, 'M', 12, 'MENSALISTA', 'NA', 'NA', 'NA', 'na', 1, 1, '93', '357', '0', '0', '0', 'na'),
(5, 'Rodrigo Veloso de Holanda Gonçalves', 3000894, 18, 'M', 1, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 5, 9, '92', '3', 'na', 'na', '0', 'na'),
(6, 'Pedro Miguel Barbosa', 2222222, 54, 'M', 7, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 5, 9, '90', '3', 'na', 'na', '0', 'na'),
(7, 'Rodrigo Veloso de Holanda Gonçalves', 122122, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 2, 2, '1', '1', 'na', 'na', '0', 'na'),
(8, 'Rodrigo Veloso de Holanda Gonçalves', 122122, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 2, 2, '1', '1', 'na', 'na', '0', 'na'),
(9, 'Rodrigo Veloso de Holanda Gonçalves', 122122, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 2, 2, '1', '1', 'na', 'na', '0', 'na'),
(10, 'Rodrigo Veloso de Holanda Gonçalves', 122122, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 2, 2, '1', '1', 'na', 'na', '0', 'na'),
(11, 'Rodrigo Veloso de Holanda Gonçalves', 122122, 21, 'M', 21, 'MENSALISTA', 'P2+', 'T2+', '||+', 'na', 2, 2, '1', '1', 'na', 'na', '0', 'na');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idRh` int(11) NOT NULL,
  `chapa` varchar(7) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idRh`, `chapa`, `senha`) VALUES
(1, '30008', 'rodrigo007'),
(2, '30330', 'leo123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocupante`
--

CREATE TABLE `ocupante` (
  `idOcupante` int(11) NOT NULL,
  `nome_ocupante` varchar(100) NOT NULL,
  `cargo_ocupante` varchar(100) NOT NULL,
  `numeroVW_ocupante` int(7) NOT NULL,
  `numeroVW_imediato` int(7) NOT NULL,
  `numeroVW_ideal` int(7) NOT NULL,
  `numeroVW_futuro` int(7) NOT NULL,
  `grau_ocupante` varchar(3) NOT NULL,
  `genero_ocupante` varchar(1) NOT NULL,
  `idade_ocupante` int(2) NOT NULL,
  `tempo_de_VW_ocupante` int(2) NOT NULL,
  `na_posicao_desde_ocupante` date NOT NULL,
  `ultimoGAP_ocupante` varchar(100) NOT NULL,
  `ultimoMBO_ocupante` varchar(100) NOT NULL,
  `ultima_avaliacao_geral_ocupante` varchar(100) NOT NULL,
  `proximos_passos_ocupante` varchar(100) NOT NULL,
  `posicao_anterior_9box_ocupante` int(1) NOT NULL,
  `posicao_atual_9box_ocupante` int(1) NOT NULL,
  `eixoHow_ocupante` varchar(100) NOT NULL,
  `eixoWhat_ocupante` varchar(100) NOT NULL,
  `criterios_de_apontamento_ocupante` varchar(100) NOT NULL,
  `criterios_acesso_ocupante` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ocupante`
--

INSERT INTO `ocupante` (`idOcupante`, `nome_ocupante`, `cargo_ocupante`, `numeroVW_ocupante`, `numeroVW_imediato`, `numeroVW_ideal`, `numeroVW_futuro`, `grau_ocupante`, `genero_ocupante`, `idade_ocupante`, `tempo_de_VW_ocupante`, `na_posicao_desde_ocupante`, `ultimoGAP_ocupante`, `ultimoMBO_ocupante`, `ultima_avaliacao_geral_ocupante`, `proximos_passos_ocupante`, `posicao_anterior_9box_ocupante`, `posicao_atual_9box_ocupante`, `eixoHow_ocupante`, `eixoWhat_ocupante`, `criterios_de_apontamento_ocupante`, `criterios_acesso_ocupante`) VALUES
(3, 'CLEIDE PERRELA RAMFIS', 'GERENTE EXECUTIVA', 8531366, 4034178, 4051708, 3000894, '33', 'F', 61, 43, '1978-02-04', 'P2+', 'T2+', 'II+', 'na', 4, 0, '86', 'na', 'na', 'na'),
(4, 'Leonardo Capra Mucci', 'Programador', 1234567, 3000894, 1357923, 7654321, '33', 'M', 17, 1, '2022-06-21', 'P2+', 'T2+', '||+', 'na', 5, 9, '92%', 'na', 'na', 'na'),
(5, 'Emanuelly Costa', 'Programadora', 7777777, 2222222, 3333333, 6666666, '33', 'F', 33, 5, '2018-02-06', 'P2+', 'T2+', '||+', 'na', 5, 9, '92%', 'na', 'na', 'na'),
(10, 'Leonardo Capra Mucci', 'Programador', 1211111, 122122, 21, 2122112, '1', 'M', 3, 12, '2022-11-09', 'P2+', 'T2+', '||+', 'na', 12, 12, '92%', 'na', 'na', 'na');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posicao`
--

CREATE TABLE `posicao` (
  `idPosicao` int(11) NOT NULL,
  `numeroVW_ocupante` int(7) DEFAULT NULL,
  `nome_da_UO_posicao` varchar(100) DEFAULT NULL,
  `diretoria_posicao` varchar(100) DEFAULT NULL,
  `abreviacao_UO_posicao` varchar(100) DEFAULT NULL,
  `numeroVW_superior_direto` int(7) DEFAULT NULL,
  `superior_direto_posicao` varchar(100) DEFAULT NULL,
  `numeroVW_superior_g70_posicao` int(7) DEFAULT NULL,
  `superior_g70_posicao` varchar(100) DEFAULT NULL,
  `g70_posicao` varchar(3) DEFAULT NULL,
  `job_evaluation_posicao` int(11) DEFAULT NULL,
  `codigoUO_posicao` int(11) DEFAULT NULL,
  `local_posicao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posicao`
--

INSERT INTO `posicao` (`idPosicao`, `numeroVW_ocupante`, `nome_da_UO_posicao`, `diretoria_posicao`, `abreviacao_UO_posicao`, `numeroVW_superior_direto`, `superior_direto_posicao`, `numeroVW_superior_g70_posicao`, `superior_g70_posicao`, `g70_posicao`, `job_evaluation_posicao`, `codigoUO_posicao`, `local_posicao`) VALUES
(8, 8531366, 'TALENT, LEARNNG, & TOP MANAGEMENT', 'RECURSOS HUMANOS', 'B-FEX', 0, 'DOUGLAS AFRIGH PEREIRA', 0, 'na', 'Sim', 0, 2000007, 'Unidade Taubate'),
(9, 1234567, 'TALENT LEARNING & TOP MANAGEMENT', 'GESTÃO DE PLANEJAMENTOS', 'B-FX', 0, 'Rodrigo Veloso de Holanda Gonçalves', 0, '0', 'Sim', 0, 123456789, 'Anchieta'),
(10, 7777777, 'TALENT LEARNING & TOP MANAGEMENT', 'GESTÃO DE PLANEJAMENTOS', 'B-FX', 0, 'Leandro Monteiro', 0, '0', 'Sim', 0, 123, 'Anchieta'),
(11, 1211111, 'TALENT LEARNING & TOP MANAGEMENT', 'GESTÃO DE PLANEJAMENTOS', 'B-FX', 0, 'Rodrigo Veloso de Holanda Gonçalves', 123, '0', 'Sim', 0, 1221, 'Anchieta'),
(12, 1211111, 'TALENT LEARNING & TOP MANAGEMENT', 'GESTÃO DE PLANEJAMENTOS', 'B-FX', 0, 'Rodrigo Veloso de Holanda Gonçalves', 123, '0', 'Sim', 0, 1221, 'Anchieta'),
(13, 1211111, 'TALENT LEARNING & TOP MANAGEMENT', 'GESTÃO DE PLANEJAMENTOS', 'B-FX', 0, 'Rodrigo Veloso de Holanda Gonçalves', 123, '0', 'Sim', 0, 1221, 'Anchieta'),
(14, 1211111, 'TALENT LEARNING & TOP MANAGEMENT', 'GESTÃO DE PLANEJAMENTOS', 'B-FX', 0, 'Rodrigo Veloso de Holanda Gonçalves', 123, '0', 'Sim', 0, 1221, 'Anchieta'),
(15, 1211111, 'TALENT LEARNING & TOP MANAGEMENT', 'GESTÃO DE PLANEJAMENTOS', 'B-FX', 0, 'Rodrigo Veloso de Holanda Gonçalves', 123, '0', 'Sim', 0, 1221, 'Anchieta');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`idArquivos`);

--
-- Índices para tabela `futuro`
--
ALTER TABLE `futuro`
  ADD PRIMARY KEY (`idFuturo`);

--
-- Índices para tabela `ideal`
--
ALTER TABLE `ideal`
  ADD PRIMARY KEY (`idIdeal`);

--
-- Índices para tabela `imediato`
--
ALTER TABLE `imediato`
  ADD PRIMARY KEY (`idImediato`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idRh`);

--
-- Índices para tabela `ocupante`
--
ALTER TABLE `ocupante`
  ADD PRIMARY KEY (`idOcupante`);

--
-- Índices para tabela `posicao`
--
ALTER TABLE `posicao`
  ADD PRIMARY KEY (`idPosicao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `idArquivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de tabela `futuro`
--
ALTER TABLE `futuro`
  MODIFY `idFuturo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `ideal`
--
ALTER TABLE `ideal`
  MODIFY `idIdeal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `imediato`
--
ALTER TABLE `imediato`
  MODIFY `idImediato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `idRh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ocupante`
--
ALTER TABLE `ocupante`
  MODIFY `idOcupante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `posicao`
--
ALTER TABLE `posicao`
  MODIFY `idPosicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
