-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 18/04/2020 às 11:59
-- Versão do servidor: 5.6.41-84.1
-- Versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `coolec40_proteja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `assistencia`
--

CREATE TABLE `assistencia` (
  `id` int(11) NOT NULL,
  `assistencia` varchar(20) NOT NULL,
  `id_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `assistencia`
--

INSERT INTO `assistencia` (`id`, `assistencia`, `id_endereco`) VALUES
(1, 'Hospitalar', 1),
(2, 'Hospitalar', 2),
(3, 'Hospitalar', 3),
(4, 'Farmacêutica', 4),
(5, 'Financeira', 5),
(6, 'Alimentícia', 6),
(7, 'Financeira', 7),
(8, 'Financeira', 8),
(9, 'Hospitalar', 9),
(10, 'Hospitalar', 10),
(11, 'Alimentícia', 11),
(12, 'Hospitalar', 12),
(13, 'Financeira', 13),
(14, 'Financeira', 14),
(15, 'Alimentícia', 15),
(16, 'Financeira', 16),
(17, 'nao_preciso', 17),
(18, 'Financeira', 18),
(19, 'nao_preciso', 19),
(20, 'Alimentícia', 20),
(21, 'Farmacêutica', 20),
(22, 'Alimentícia', 21),
(23, 'nao_preciso', 22),
(24, 'Financeira', 23),
(25, 'Financeira', 24),
(26, 'Alimentícia', 24),
(27, 'Alimentícia', 25),
(28, 'Farmacêutica', 25),
(29, 'Farmacêutica', 26),
(30, 'Hospitalar', 26),
(31, 'Alimentícia', 27),
(32, 'Hospitalar', 27),
(33, 'Farmacêutica', 28),
(34, 'Hospitalar', 28),
(35, 'Alimentícia', 29),
(36, 'Farmacêutica', 29),
(37, 'Hospitalar', 29),
(38, 'Alimentícia', 30),
(39, 'Hospitalar', 30),
(40, 'Alimentícia', 31),
(41, 'Farmacêutica', 31),
(42, 'Farmacêutica', 32),
(43, 'Hospitalar', 32),
(44, 'Alimentícia', 33),
(45, 'Farmacêutica', 33),
(46, 'Farmacêutica', 34),
(47, 'Hospitalar', 34),
(48, 'Farmacêutica', 35),
(49, 'Hospitalar', 35),
(50, 'Alimentícia', 36),
(51, 'Farmacêutica', 36),
(52, 'Alimentícia', 37),
(53, 'Farmacêutica', 37),
(54, 'Alimentícia', 38),
(55, 'Financeira', 39),
(56, 'Farmacêutica', 39),
(57, 'Farmacêutica', 40),
(58, 'Hospitalar', 40),
(59, 'Alimentícia', 41),
(60, 'Farmacêutica', 41),
(61, 'Alimentícia', 42),
(62, 'Hospitalar', 42),
(63, 'Alimentícia', 43),
(64, 'Farmacêutica', 43),
(65, 'Alimentícia', 44),
(66, 'Hospitalar', 44),
(67, 'Financeira', 45),
(68, 'Alimentícia', 45),
(69, 'nao_preciso', 47),
(70, 'Financeira', 48),
(71, 'nao_preciso', 50),
(72, 'nao_preciso', 51),
(73, 'nao_preciso', 52),
(74, 'nao_preciso', 53),
(75, 'Farmacêutica', 54),
(76, 'nao_preciso', 55),
(77, 'nao_preciso', 57),
(78, 'nao_preciso', 58),
(79, 'nao_preciso', 59),
(80, 'Financeira', 61);

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `cep` int(11) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `localidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lng` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `endereco`
--

INSERT INTO `endereco` (`id`, `cep`, `logradouro`, `numero`, `bairro`, `localidade`, `uf`, `lat`, `lng`) VALUES
(1, 90010010, 'Travessa Araújo Ribeiro', 1, 'Centro Histórico', 'Porto Alegre', 'RS', '-30.0298948', '-51.2350394'),
(2, 73100030, 'Rua 1', 14, 'Núcleo Rural Lago Oeste (Sobradinho)', 'Brasília', 'DF', '-15.6280111', '-47.9171357'),
(3, 79117391, 'Rua Afonso de Souza', 777, 'Vila Nasser', 'Campo Grande', 'MS', '-20.4088294', '-54.6299837'),
(4, 99965971, 'Rua Padre Júlio Marin 669', 1, 'Centro', 'Água Santa', 'RS', '-28.1775504', '-52.0343296'),
(5, 72860550, 'Quadra 587', 1, 'Parque Estrela Dalva VI (Pedregal)', 'Novo Gama', 'GO', '-16.0585067', '-48.0325237'),
(6, 70701040, 'SHN Quadra 1 Bloco D', 1, 'Asa Norte', 'Brasília', 'DF', '-15.7903603', '-47.8847838'),
(7, 70701040, 'SHN Quadra 1 Bloco D', 1, 'Asa Norte', 'Brasília', 'DF', '-15.7903603', '-47.8847838'),
(8, 99025460, 'Rua Frederico Graeff', 536, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(9, 72860550, 'Quadra 587', 1, 'Parque Estrela Dalva VI (Pedregal)', 'Novo Gama', 'GO', '-16.0585067', '-48.0325237'),
(10, 90010010, 'Travessa Araújo Ribeiro', 1, 'Centro Histórico', 'Porto Alegre', 'RS', '-30.0298948', '-51.2350394'),
(11, 99025460, 'Rua Frederico Graeff', 536, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(12, 78558138, 'Rua Jaraguá do Sul', 57, 'Residencial Jaraguá', 'Sinop', 'MT', '-26.5014029', '-49.1464636'),
(13, 99525000, 'esamel soletti', 1, 'centro', 'Santo Antônio do Planalto', 'RS', '-28.3993093', '-52.6917592'),
(14, 99525000, 'Avenida Jorge Muller', 2020, 'centro', 'Santo Antônio do Planalto', 'RS', '-28.3993093', '-52.6917592'),
(15, 4180112, 'Travessa 19 de Agosto', 1, 'Jardim Maria Estela', 'São Paulo', 'SP', '-23.6343679', '-46.599914'),
(16, 20010000, 'Rua Primeiro de Março', 1, 'Centro', 'Rio de Janeiro', 'RJ', '-22.9013187', '-43.17647950000001'),
(17, 73340710, 'Vila Nossa Senhora de Fátima', 20, 'Vila Nossa Senhora de Fátima (Planaltina)', 'Brasília', 'DF', '-15.6386736', '-47.6602511'),
(18, 73751080, 'Quadra 8', 34, 'Setor Norte', 'Planaltina', 'GO', '-15.4466237', '-47.6088198'),
(19, 71680380, 'Condomínio Belvedere Green', 3, 'Setor Habitacional Jardim Botânico', 'Brasília', 'DF', '-15.8698375', '-47.76059060000001'),
(20, 75805879, 'Rua 6', 1, 'Residencial Bandeirantes', 'Jataí', 'GO', '-17.8756522', '-51.7390917'),
(21, 99010041, 'Rua Independência', 536, 'Centro', 'Passo Fundo', 'RS', '-28.2619329', '-52.4037616'),
(22, 91740000, 'Avenida da Cavalhada', 4530, 'Cavalhada', 'Porto Alegre', 'RS', '-30.11496', '-51.22586279999999'),
(23, 99025460, 'Rua Frederico Graeff', 1, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(24, 99025460, 'Rua Frederico Graeff', 1, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(25, 99025460, 'Rua Frederico Graeff', 1, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(26, 99025460, 'Rua Frederico Graeff', 1, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(27, 99025460, 'Rua Frederico Graeff', 1, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(28, 99025460, 'Rua Frederico Graeff', 1, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(29, 99025460, 'Rua Frederico Graeff', 1, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(30, 99025460, 'Rua Frederico Graeff', 2, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(31, 99025460, 'Rua Frederico Graeff', 2, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(32, 99025460, 'Rua Frederico Graeff', 2, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(33, 99025460, 'Rua Frederico Graeff', 1, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(34, 99025460, 'Rua Frederico Graeff', 3, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(35, 99025460, 'Rua Frederico Graeff', 3, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(36, 99025460, 'Rua Frederico Graeff', 3, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(37, 99025460, 'Rua Frederico Graeff', 5, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(38, 99025460, 'Rua Frederico Graeff', 4, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(39, 99025460, 'Rua Frederico Graeff', 4, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(40, 99025460, 'Rua Frederico Graeff', 4, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(41, 99025460, 'Rua Frederico Graeff', 5, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(42, 99025460, 'Rua Frederico Graeff', 5, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(43, 99025460, 'Rua Frederico Graeff', 5, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(44, 99025460, 'Rua Frederico Graeff', 5, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(45, 99025460, 'Rua Frederico Graeff', 5, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(46, 990254600, 'Rua Frederico Graeff', 5, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(47, 990254600, 'Rua Frederico Graeff', 5, 'Boqueirão', 'Passo Fundo', 'RS', '-28.2701606', '-52.4323336'),
(48, 22220040, 'Rua Dois de Dezembro', 0, 'Flamengo', 'Rio de Janeiro', 'RJ', '-22.9297547', '-43.1759017'),
(49, 99525000, 'Ismael Soletti', 57, 'Centro', 'Santo Antônio do Planalto', 'RS', '-28.3993093', '-52.6917592'),
(50, 99525000, 'Ismael Soletti', 57, 'Centro', 'Santo Antônio do Planalto', 'RS', '-28.3993093', '-52.6917592'),
(51, 99500000, 'Santiago Matiotti', 170, 'São Pedro', 'Carazinho', 'RS', '-28.2963334', '-52.793776'),
(52, 99500000, 'Marechal Deodoro', 423, 'Centro', 'Carazinho', 'RS', '-28.2963334', '-52.793776'),
(53, 99051370, 'Rua Doutor Bozano', 681, 'Petrópolis', 'Passo Fundo', 'RS', '-28.2447737', '-52.3810578'),
(54, 99500000, 'Marques do Pombal', 1, 'Centro', 'Carazinho', 'RS', '-28.2963334', '-52.793776'),
(55, 99500000, 'Rua Venâncio Aires', 680, 'Ventro', 'Carazinho', 'RS', '-28.2963334', '-52.793776'),
(56, 92020040, 'Rua Duque de Caxias', 1012, 'Marechal Rondon', 'Canoas', 'RS', '-29.9187866', '-51.1722669'),
(57, 90420000, 'Rua Casemiro de Abreu', 842, 'Bela Vista', 'Porto Alegre', 'RS', '-30.0331389', '-51.1954167'),
(58, 99500000, 'Presidente Vargas', 259, 'Centro', 'Carazinho', 'RS', '-28.2963334', '-52.793776'),
(59, 99500000, 'PRESIDENTE VARGAS', 259, 'CENTRO', 'Carazinho', 'RS', '-28.2963334', '-52.793776'),
(60, 99500000, 'Flores da Cunha, 2929', 1, 'centro', 'Carazinho', 'RS', '-28.2963334', '-52.793776'),
(61, 99500000, 'Marques do Pombal', 1, 'centro', 'Carazinho', 'RS', '-28.2963334', '-52.793776');

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco_usuario`
--

CREATE TABLE `endereco_usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `endereco_usuario`
--

INSERT INTO `endereco_usuario` (`id_usuario`, `id_endereco`) VALUES
(2, 1),
(1, 2),
(3, 3),
(2, 4),
(3, 5),
(4, 6),
(6, 7),
(7, 8),
(8, 9),
(9, 10),
(10, 11),
(11, 12),
(12, 13),
(13, 14),
(14, 15),
(15, 16),
(16, 17),
(17, 18),
(18, 19),
(19, 20),
(20, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(46, 47),
(48, 48),
(49, 49),
(49, 50),
(50, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(59, 57),
(61, 58),
(62, 59),
(63, 60),
(64, 61);

-- --------------------------------------------------------

--
-- Estrutura para tabela `membros_familia`
--

CREATE TABLE `membros_familia` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `faixa_etaria` varchar(10) NOT NULL,
  `id_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `membros_familia`
--

INSERT INTO `membros_familia` (`id`, `nome`, `cpf`, `faixa_etaria`, `id_endereco`) VALUES
(1, 'Jovenilia', '1', 'oitenta', 6),
(2, 'Alexandre da Silva Rodrigues', '9', 'vinte', 8),
(3, 'U1', '2', 'dez', 11),
(4, 'carlos', '85423762006', 'sessenta', 12),
(5, 'ale', '01232323232', 'dez', 13),
(6, 'usuario 1', '12598976053', 'oitenta', 20),
(7, 'Miria de Moraes Patines', '03275120832', 'sessenta', 22),
(8, '91365233057', '91365233057', 'trinta', 35),
(9, '47471895055', '47471895055', 'cinquenta', 41),
(10, 'Elaine  Maria Schmidt', '92864945053', 'sessenta', 51),
(11, 'aline', '9042000', 'trinta', 57),
(12, 'Fabricio', '89364791053', 'cinquenta', 58),
(13, 'jacy', '45022240068', 'sessenta', 59);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_risco`
--

CREATE TABLE `tipo_risco` (
  `id` int(11) NOT NULL,
  `grupo_risco` varchar(60) NOT NULL,
  `id_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `tipo_risco`
--

INSERT INTO `tipo_risco` (`id`, `grupo_risco`, `id_endereco`) VALUES
(1, 'rinite', 1),
(2, 'cardio', 1),
(3, 'cardio', 1),
(4, 'hipertensão', 2),
(5, 'idosos', 3),
(6, 'dpoc', 3),
(7, 'cardio', 3),
(8, 'cardio', 3),
(9, 'dpoc', 4),
(10, 'cardio', 4),
(11, 'cardio', 4),
(12, 'asma', 5),
(13, 'idosos', 6),
(14, 'asma', 7),
(15, 'idosos', 8),
(16, 'rinite', 8),
(17, 'asma', 9),
(18, 'idosos', 10),
(19, 'cardio', 10),
(20, 'cardio', 10),
(21, 'diabéticos', 11),
(22, 'asma', 12),
(23, 'cardio', 12),
(24, 'cardio', 13),
(25, 'idosos', 14),
(26, 'cardio', 15),
(27, 'cardio', 16),
(28, 'hipertensão', 17),
(29, 'idosos', 18),
(30, 'asma', 19),
(31, 'rinite', 19),
(32, 'idosos', 20),
(33, 'diabéticos', 20),
(34, 'hipertensão', 20),
(35, 'diabéticos', 21),
(36, 'idosos', 22),
(37, 'hipertensão', 22),
(38, 'rinite', 22),
(39, 'diabéticos', 23),
(40, 'diabéticos', 24),
(41, 'renal', 24),
(42, 'hipertensão', 25),
(43, 'dpoc', 26),
(44, 'cardio', 26),
(45, 'cardio', 27),
(46, 'dpoc', 28),
(47, 'cardio', 28),
(48, 'diabéticos', 29),
(49, 'dpoc', 29),
(50, 'rinite', 29),
(51, 'dpoc', 30),
(52, 'renal', 30),
(53, 'cardio', 30),
(54, 'asma', 31),
(55, 'cardio', 31),
(56, 'cardio', 31),
(57, 'dpoc', 32),
(58, 'cardio', 32),
(59, 'rinite', 33),
(60, 'cardio', 33),
(61, 'cardio', 33),
(62, 'dpoc', 34),
(63, 'cardio', 34),
(64, 'asma', 35),
(65, 'cardio', 35),
(66, 'cardio', 36),
(67, 'cardio', 36),
(68, 'hipertensão', 38),
(69, 'renal', 38),
(70, 'hipertensão', 39),
(71, 'hipertensão', 40),
(72, 'renal', 40),
(73, 'cardio', 40),
(74, 'rinite', 41),
(75, 'cardio', 41),
(76, 'hipertensão', 42),
(77, 'renal', 42),
(78, 'cardio', 42),
(79, 'diabéticos', 43),
(80, 'asma', 43),
(81, 'diabéticos', 43),
(82, 'asma', 43),
(83, 'hipertensão', 44),
(84, 'dpoc', 44),
(85, 'dpoc', 45),
(86, 'cardio', 45),
(87, 'cardio', 45),
(88, 'hipertensão', 46),
(89, 'idosos', 48),
(90, 'diabéticos', 48),
(91, 'rinite', 48),
(92, 'cardio', 48),
(93, 'idosos', 48),
(94, 'diabéticos', 48),
(95, 'rinite', 48),
(96, 'cardio', 48),
(97, 'diabéticos', 51),
(98, 'asma', 52),
(99, 'idosos', 53),
(100, 'diabéticos', 53),
(101, 'hipertensão', 53),
(102, 'dpoc', 53),
(103, 'idosos', 53),
(104, 'diabéticos', 53),
(105, 'hipertensão', 53),
(106, 'dpoc', 53),
(107, 'cardio', 54),
(108, 'rinite', 55),
(109, 'rinite', 57),
(110, 'hipertensão', 58),
(111, 'asma', 58),
(112, 'rinite', 58),
(113, 'hipertensão', 59),
(114, 'asma', 59),
(115, 'rinite', 59),
(116, 'diabéticos', 61);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(60) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `volutario` enum('SIM','NÃO') NOT NULL DEFAULT 'NÃO',
  `sexo` varchar(20) DEFAULT NULL,
  `senha` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `data_nascimento`, `email`, `cpf`, `id`, `telefone`, `volutario`, `sexo`, `senha`) VALUES
('Bruno Victor Ferreira Graciano', '2020-03-26', 'victorbruno221@gmail.com', '03638213170', 1, '(61) 98683-8682', 'SIM', 'MASCULINO', '1c9951d0ffa327bbb3b082015483af40'),
('Usuario G', '1999-01-01', '11075029007@gmail.com', '11075029007', 2, '(55) 5555-5555', 'SIM', 'MASCULINO', 'f938fb6aeaf28cc9285df2a52272f548'),
('Samuel Marques Costa', '1998-11-23', 'samuelmarques231198@gmail.com', '06685136162', 3, '(61) 99564-5444', 'SIM', 'MASCULINO', '80dfbfaad533b67ec0eaaf86775f742c'),
('Alexandre de Freitas', '1986-09-09', 'freitas.jd@gmail.com', '01440574090', 4, '(61) 98288-3525', 'SIM', 'MASCULINO', '8a6f2805b4515ac12058e79e66539be9'),
('GABRIEL APARECIDO DA SILVA', '1998-03-14', 'gabriel.aparecido.live@gmail.com', '06378373124', 5, '(61) 99178-3849', 'NÃO', NULL, '83b61c5711e4878fc3df82202dbd42c6'),
('Alexandre teste', '2016-02-03', 'testemunhas@gmail.com', '26968070006', 6, '(88) 333', 'SIM', 'MASCULINO', '8a6f2805b4515ac12058e79e66539be9'),
('Alexandre da Silva Rodrigues', '1994-01-07', 'pregueroo@gmail.com', '95152274027', 7, '(54) 99660-6981', 'SIM', 'MASCULINO', '329f8c33da927105409869aafda362d9'),
('Samuel Marques Costa', '1998-11-23', 'samuelmarques231198@outlook.com', '75995868063', 8, '(61) 99564-5444', 'SIM', 'MASCULINO', '80dfbfaad533b67ec0eaaf86775f742c'),
('Usuario A', '1994-01-07', '60447938002@gmail.com', '60447938002', 9, '(55) 5555-5555', 'SIM', 'MASCULINO', 'de7a925a873dad36550cb4af39ae2ef2'),
('Usuario B', '1994-01-07', '25154081099@gmail.com', '25154081099', 10, '(55) 5555-5555', 'SIM', 'MASCULINO', '450fb15ff5e9772914dc701276610e7b'),
('00000', '1996-01-02', '0000@00000.com', '0000000000000', 11, '(66) 66666-6666', 'SIM', 'FEMININO', 'df10ef8509dc176d733d59549e7dbfaf'),
('Juliano', '1986-09-09', 'julino@teste.com', '84292334072', 12, '(66) 565-6565', 'SIM', 'MASCULINO', '8a6f2805b4515ac12058e79e66539be9'),
('Rosane', '2015-05-23', 'rosane@teste.com', '26477522063', 13, '(54) 6-5665', 'SIM', 'MASCULINO', '8a6f2805b4515ac12058e79e66539be9'),
('Josue Fernandes', '1986-02-25', 'josue1@teste.com', '19259811007', 14, '(11) 0000-0000', 'SIM', 'MASCULINO', '8a6f2805b4515ac12058e79e66539be9'),
('xcxc', '1966-05-08', 'teste@teste.com', '47007703097', 15, '(11) 46956-5656', 'SIM', 'MASCULINO', '8a6f2805b4515ac12058e79e66539be9'),
('Jaíne de Oliveira Viana', '2020-03-11', 'jaine278@gmail.com', '05755624127', 16, '(61) 99578-8386', 'SIM', 'FEMININO', '3a5d18b19f5ccaf479c18c906f539363'),
('Franscisco de oliveira graciano', '2020-03-12', 'francisco@gmail.com', '45531978120', 17, '(61) 98638-6826', 'SIM', 'MASCULINO', '1c9951d0ffa327bbb3b082015483af40'),
('JULIANA PACHECO DE ALMEIDA', '1991-01-18', 'juhpacheco91@gmail.com', '02392667144', 18, '(61) 99202-2993', 'SIM', 'FEMININO', '471a115ce8d36666d2bf4b7b0e039b0b'),
('usuario 1', '1997-03-05', 'eduardaksilva@hotmail.com', '12598976053', 19, '(65) 99687-5487', 'SIM', 'FEMININO', 'de88e3e4ab202d87754078cbb2df6063'),
('Usuario A1', '1994-01-07', '06727668094@gmai.com', '06727668094', 20, '(55) 55555-5555', 'SIM', 'MASCULINO', '7590bc9be12a5fbe22b5c5ca06dcf072'),
('BEATRIZ SILVA DOS Santos', '1984-08-03', 'beatrizsantosnmt@hotmail.com', '01079823077', 21, '(54) 99180-5156', 'NÃO', NULL, '23e88b1e59795b41c2ac29b56a1ad6f9'),
('Miria de Moraes Patines', '1959-11-29', 'mmpatines@hotmail.com', '03275120832', 22, '(51) 98137-6659', 'SIM', 'FEMININO', 'b6ed7299e3f0fc8d99c30fd66b04c620'),
('ALEXANDRE DA SILVA RODRIGUES', '1994-01-07', '65175587056@gmail.com', '65175587056', 23, '(59) 9525-0005', 'SIM', 'MASCULINO', '020db0c20c84c239861426211f833532'),
('94032654000', '1994-01-07', '94032654000@gmail.com', '94032654000', 24, '(94) 03265-4000', 'SIM', 'MASCULINO', 'fdfae0dc453211742545c8d0e17e08f5'),
('57789792075', '1994-01-07', '57789792075@gmail.com', '57789792075', 25, '(57) 78979-2075', 'SIM', 'MASCULINO', 'cd2386731ac6112bd5fd0c3b05b476d6'),
('88109665039', '1994-01-07', '88109665039@gmail.com', '88109665039', 26, '(88) 10966-5039', 'SIM', 'MASCULINO', '9dcc5733916a48b821ed7495513c7ea3'),
('08310755031', '1994-01-07', '08310755031@gmail.com', '08310755031', 27, '(08) 31075-5031', 'SIM', 'MASCULINO', '26abc00246c6065695f2fe813995424f'),
('58436416007', '1994-01-07', '58436416007@gmail.com', '58436416007', 28, '(58) 43641-6007', 'SIM', 'MASCULINO', 'ce5c9e07c46786fcda78a16ba1c177f9'),
('19845150047', '1994-01-07', '19845150047@gmail.com', '19845150047', 29, '(19) 84515-0047', 'SIM', 'MASCULINO', '3d30331c15883af70df5f564bb3aef04'),
('30381012069', '1994-01-07', '30381012069@gmail.com', '30381012069', 30, '(30) 38101-2069', 'SIM', 'MASCULINO', 'c0db1f1b506b498c40aaec14e6c74e22'),
('81328801020', '1994-01-07', '81328801020@gmail.com', '81328801020', 31, '(81) 32880-1020', 'SIM', 'FEMININO', 'c18ea55fc73f70cb7faf0cb2021b34b2'),
('20233551093', '1994-01-07', '20233551093@gmail.com', '20233551093', 32, '(20) 23355-1093', 'SIM', 'FEMININO', '86e8fd5b64f7bb51d8dbeed48d7ef04a'),
('72312840006', '1994-01-07', '72312840006@gmail.com', '72312840006', 33, '(72) 31284-0006', 'SIM', 'FEMININO', 'b62b45c1fafe6dc6e0383c4d0d7bc0a6'),
('98802919054', '1994-01-07', '98802919054@gmail.com', '98802919054', 34, '(98) 80291-9054', 'SIM', 'MASCULINO', '6da8a5bea4ca3346caa0b4b0f729c4f2'),
('91365233057', '1994-01-07', '91365233057@gmail.com', '91365233057', 35, '(91) 36523-3057', 'SIM', 'FEMININO', 'b83399386bbebc936c796c9e396562ee'),
('24224826003', '1994-01-07', '24224826003@gmail.com', '24224826003', 36, '(24) 22482-6003', 'SIM', 'FEMININO', '721047607cccd300d47abe03be2cb327'),
('79703573002', '4994-01-07', '79703573002@gmail.com', '79703573002', 37, '(79) 70357-3002', 'SIM', 'MASCULINO', '42f740feb626a0c5549ee0aa9d0a9e7a'),
('60302194053', '1958-01-01', '60302194053@gmail.com', '60302194053', 38, '(60) 30219-4053', 'SIM', 'MASCULINO', 'dafe696cd0532b929d0a5b75cdb03c65'),
('08832404087', '1994-01-07', '08832404087@gmail.com', '08832404087', 39, '(08) 83240-4087', 'SIM', 'MASCULINO', 'a3cf4db9d0930ae9d13ff64cc6124c91'),
('13269361076', '1995-01-07', '13269361076@gmail.com', '13269361076', 40, '(13) 26936-1076', 'SIM', 'MASCULINO', '0bd88add7c341220d94a1ed087c2ed89'),
('47471895055', '1994-01-07', '47471895055@gmail.com', '47471895055', 41, '(47) 47189-5055', 'SIM', 'MASCULINO', '12bc9bed04a3e1b2a0d0751e5f9657f4'),
('28514972006', '1994-01-07', '28514972006@gmail.com', '28514972006', 42, '(28) 51497-2006', 'SIM', 'MASCULINO', '025747c16f25fad1c04f9a46f59b2023'),
('17233439001', '1994-01-07', '17233439001@gmail.com', '17233439001', 43, '(17) 23343-9001', 'SIM', 'MASCULINO', '0b7f5f9722e60dc6c9bfa6eede5ddf1a'),
('24692308028', '1994-01-07', '24692308028@gmail.com', '24692308028', 44, '(24) 69230-8028', 'SIM', 'MASCULINO', '8c90ce33565fcebeb54dbc2afb35d7b9'),
('64383727069', '1994-01-07', '64383727069@gmail.com', '64383727069', 45, '(64) 38372-7069', 'SIM', 'MASCULINO', '4cc909a9e49f6f42511a59cd9f457ae9'),
('Alexandre da Silva Rodrigues', '1994-01-01', '16772362055@gmail.com', '16772362055', 46, '(16) 77236-2055', 'SIM', '', '250175a235ca788d0e7da2212ba54cbf'),
('Sabrina Adami Schappo', '1976-03-12', 'sabrina.adami@gmail.com', '93790260991', 47, '(47) 99991-5510', 'NÃO', NULL, '283d5278805b8dac5124e346184de873'),
('Gustavo Rocha', '1993-10-13', 'rochac.gustavo@gmail.com', '14131061708', 48, '(22) 22222-2222', 'SIM', 'MASCULINO', '3c4f4214d313bf4b90d91fe1e0b8cb67'),
('ANDRESSA FATIMA DE PAULA', '1996-02-03', 'andressaaadepaula@gmail.com', '03087943037', 49, '(54) 99627-6204', 'SIM', 'FEMININO', 'cce9d5bb620050f384a200cfbb14c6d1'),
('Gabriel Felipe Schmidt', '1996-05-26', 'schmidt.gabrielfelipe@gmail.com', '03069391001', 50, '(54) 99688-0242', 'SIM', 'MASCULINO', '1309da460f9d15f597f76cba48ba73b1'),
('Kênia Alberton', '1985-09-02', 'kenia_pablo@hotmail.com', '01091533083', 51, '(54) 99993-3631', 'NÃO', NULL, '5e7cbf73c037b35e9f7d8afbc24a0d4c'),
('James Pedroso de Jesus', '1986-04-12', 'james@autolograstreamento.com', '01310043019', 52, '(54) 3331-8828', 'SIM', 'MASCULINO', '7becd52e2a7f03da5cb1830f6bb6ca46'),
('Jorge Fernando Vieira', '1978-07-06', 'jorgefvieira@hotmail.com', '72643072049', 53, '(54) 99971-8451', 'NÃO', 'MASCULINO', '18f3e252110ecd685a5bf55dcd9b2b66'),
('João Silva', '1982-12-05', 'joao1865@gmail.com', '63790321001', 54, '(54) 99959-5959', 'SIM', 'MASCULINO', '8a6f2805b4515ac12058e79e66539be9'),
('Tatiana Ester Pauletto', '1972-12-11', 'tatiana_ester@hotmail.com', '00176040013', 55, '(54) 99634-8146', 'SIM', 'FEMININO', 'b1b71972df9c3adb879634dff6f9d83a'),
('Juliano Murlick', '1978-12-26', 'jmurlick@gmail.com', '92002919020', 56, '(51) 9999-9999', 'SIM', 'MASCULINO', 'ee7bc22d7789e25806d91537d4a0bdb7'),
('Deivide Pereira Martins', NULL, 'deividepereiramartins@gmail.com', '03932909992', 57, NULL, 'NÃO', NULL, '81ca03c405853175b92294b8d458c281'),
('Marcelo', NULL, 'mzg5001@gmail.com', '43879969000', 58, NULL, 'NÃO', NULL, '044e7927d2ab9be0d0405fd45cb4c87b'),
('Aline Tusset De Rocco', '1989-08-22', 'aline.rocco@pucrs.br', '83287272004', 59, '(54) 9159-0017', 'SIM', 'FEMININO', 'e982aeed306ef273ba2e2d15a1e190c4'),
('Eduardo Cheffe', NULL, 'educheffe@gmail.com', '53829069049', 60, NULL, 'NÃO', NULL, 'a115278ddba255eccf82e865c9afeb97'),
('Fabricio Radtke', '1976-08-14', 'fabriciofr78@gmail.com', '89364791053', 61, '(51) 99124-2543', 'NÃO', 'MASCULINO', '06546aea3c0898dff677ca655c74b0f5'),
('Jacy Plasse', '1963-01-17', 'jacy.plasse@bol.com.br', '45022240068', 62, '(54) 99268-9189', 'NÃO', 'MASCULINO', '3755de03c236b8cb2ea7df1c039b90e7'),
('João Silva', '1986-09-09', 'contato@fianto.com.br', '38682262061', 63, '(61) 9959-9595', 'NÃO', NULL, '8a6f2805b4515ac12058e79e66539be9'),
('Jonatas', '1985-02-09', 'jonatas@teste.com', '76738868049', 64, '(03) 2-1323', 'NÃO', 'MASCULINO', '8a6f2805b4515ac12058e79e66539be9');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `assistencia`
--
ALTER TABLE `assistencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `membros_familia`
--
ALTER TABLE `membros_familia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipo_risco`
--
ALTER TABLE `tipo_risco`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `assistencia`
--
ALTER TABLE `assistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `membros_familia`
--
ALTER TABLE `membros_familia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tipo_risco`
--
ALTER TABLE `tipo_risco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
