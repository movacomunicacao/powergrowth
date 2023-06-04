-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 02/05/2023 às 22:19
-- Versão do servidor: 5.7.39
-- Versão do PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `powergrowth`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `id_producer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `race` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number_calfs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `weight_birth` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `weight_calfs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `age_calfs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `weight_wean` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `wean_days` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number_births` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producer_column1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producer_milk_kglt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producer_sucedaneo_kglt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producer_sucedaneo_kglt2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producer_enrichment_kglt2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producer_feed_column1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producer_feed_kglt2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_milk_diet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_milk_kglt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_kalvolac_diet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_kalvolac_kglt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_kalvolac_dilution` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_enrichment_kglt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_enrichment_kglt2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_feed_kglt2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `protein` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fat` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `lactose` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fiber` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `mineral` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `kcalkg` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `producer_solids` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_solids` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `data`
--

INSERT INTO `data` (`id`, `id_producer`, `race`, `number_calfs`, `weight_birth`, `weight_calfs`, `age_calfs`, `weight_wean`, `wean_days`, `number_births`, `producer_column1`, `producer_milk_kglt`, `producer_sucedaneo_kglt`, `producer_sucedaneo_kglt2`, `producer_enrichment_kglt2`, `producer_feed_column1`, `producer_feed_kglt2`, `nutrition_milk_diet`, `nutrition_milk_kglt`, `nutrition_kalvolac_diet`, `nutrition_kalvolac_kglt`, `nutrition_kalvolac_dilution`, `nutrition_enrichment_kglt`, `nutrition_enrichment_kglt2`, `nutrition_feed_kglt2`, `filename`, `protein`, `fat`, `lactose`, `fiber`, `mineral`, `kcalkg`, `producer_solids`, `nutrition_solids`, `date`) VALUES
(1, '1', '1', '', '1', '1', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'test.xlsx', '', '', '', '', '', '', '', '', '2023-04-29 08:50:48'),
(3, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__04_12_17__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 04:12:17'),
(4, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__04_48_45__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 04:48:44'),
(5, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__04_49_15__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 04:49:14'),
(6, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__04_59_36__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 04:59:36'),
(7, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__04_59_57__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 04:59:56'),
(8, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_00_35__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:00:34'),
(9, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_02_01__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:02:01'),
(10, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_02_38__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:02:37'),
(11, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_05_26__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:05:26'),
(12, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_06_33__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:06:33'),
(13, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_06_52__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:06:51'),
(14, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_07_10__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:07:10'),
(15, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_07_20__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:07:20'),
(16, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_07_39__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:07:39'),
(17, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_07_58__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:07:57'),
(18, '1', '1', '20', '1', '1', '20', '40', '40', '10', '3', '4', '3', '2', '1', '2', '1', '3', '2', '1', '2', '3', '1', '8', '1', '2023_04_30__05_08_19__1.xlsx', '', '', '', '', '', '', '', '', '2023-04-30 05:08:18'),
(19, '1', '1', '20', '1', '1', '20', '20', '20', '20', '1', '3', '5', '4', '7', '3', '1', '3', '3', '1', '3', '3', '1', '6', '1', '2023_04_30__09_51_33__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '7.6360310928212', '#N/A', '2023-04-30 09:51:33'),
(20, '1', '1', '20', '3', '4', '10', '80', '60', '10', '3', '2', '4', '5', '1', '2', '1', '2', '1', '2', '4', '2', '1', '10', '1', '2023_04_30__09_58_16__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '10', '14.285714285714', '2023-04-30 09:58:16'),
(21, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_26_09__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:26:08'),
(22, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_28_54__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:28:54'),
(23, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_30_56__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:30:56'),
(24, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_31_20__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:31:20'),
(25, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_32_25__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:32:25'),
(26, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_33_01__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:33:00'),
(27, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_33_32__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:33:32'),
(28, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_40_58__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:40:58'),
(29, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_42_51__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:42:51'),
(30, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_43_41__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:43:40'),
(31, '1', '1', '20', '1', '1', '20', '20', '20', '20', '2', '3', '3', '2', '3', '2', '1', '2', '1', '2', '3', '3', '1', '10', '1', '2023_04_30__10_43_52__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.823738450604', '12.5', '2023-04-30 10:43:52'),
(32, '1', '1', '20', '3', '4', '10', '80', '60', '10', '3', '2', '4', '5', '1', '2', '1', '2', '1', '2', '4', '2', '1', '10', '1', '2023_05_02__11_55_04__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '10', '14.285714285714', '2023-05-02 11:55:03'),
(33, '1', '1', '20', '3', '4', '10', '80', '60', '10', '3', '2', '4', '5', '1', '2', '1', '2', '1', '2', '4', '2', '1', '10', '1', '2023_05_02__11_55_26__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '10', '14.285714285714', '2023-05-02 11:55:25'),
(34, '1', '1', '', '1', '1', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2023_05_02__12_05_47__1.xlsx', '', '', '', '', '', '4070.18958645', '#DIV/0!', '#DIV/0!', '2023-05-02 12:05:47'),
(35, '1', '1', '', '1', '1', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2023_05_02__12_06_14__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '#DIV/0!', '#DIV/0!', '2023-05-02 12:06:14'),
(36, '1', '1', '20', '1', '1', '20', '40', '40', '10', '2', '3', '4', '3', '4', '3', '1', '2', '3', '2', '3', '2', '1', '13', '1', '2023_05_02__01_21_13__1.xlsx', '20', '20', '40', '0,4', '9,5', '4070.18958645', '13.092550790068', '18.392857142857', '2023-05-02 01:21:13');

-- --------------------------------------------------------

--
-- Estrutura para tabela `diet`
--

CREATE TABLE `diet` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `diet`
--

INSERT INTO `diet` (`id`, `value`) VALUES
(1, 'Kalvolac'),
(2, 'Kalvolac Quick');

-- --------------------------------------------------------

--
-- Estrutura para tabela `diet2`
--

CREATE TABLE `diet2` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `diet2`
--

INSERT INTO `diet2` (`id`, `value`) VALUES
(1, 'Kalvolac'),
(2, 'Kalvolac Quick'),
(3, 'Vetilac Azul');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dilution`
--

CREATE TABLE `dilution` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `dilution`
--

INSERT INTO `dilution` (`id`, `value`) VALUES
(1, '0,0'),
(2, '1:6'),
(3, '1:7'),
(4, '1:8'),
(5, '1:9');

-- --------------------------------------------------------

--
-- Estrutura para tabela `enrichment`
--

CREATE TABLE `enrichment` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `enrichment`
--

INSERT INTO `enrichment` (`id`, `value`) VALUES
(1, '0'),
(2, '5'),
(3, '10'),
(4, '15'),
(5, '20'),
(6, '25'),
(7, '30'),
(8, '35'),
(9, '40'),
(10, '45'),
(11, '50'),
(12, '75'),
(13, '100'),
(14, '125'),
(15, '150');

-- --------------------------------------------------------

--
-- Estrutura para tabela `feed`
--

CREATE TABLE `feed` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `feed`
--

INSERT INTO `feed` (`id`, `value`) VALUES
(1, 'Ração Comercial 18%'),
(2, 'Ração Comercial 20%'),
(3, 'Ração Comercial 22%'),
(4, 'Ração Comercial 24%');

-- --------------------------------------------------------

--
-- Estrutura para tabela `kglt`
--

CREATE TABLE `kglt` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `kglt`
--

INSERT INTO `kglt` (`id`, `value`) VALUES
(1, '0'),
(2, '4'),
(3, '5'),
(4, '6'),
(5, '7'),
(6, '8');

-- --------------------------------------------------------

--
-- Estrutura para tabela `kglt2`
--

CREATE TABLE `kglt2` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `kglt2`
--

INSERT INTO `kglt2` (`id`, `value`) VALUES
(1, '0'),
(2, '0,250'),
(3, '0,300'),
(4, '0,350'),
(5, '0,400'),
(6, '0,450'),
(7, '0,500'),
(8, '0,750'),
(9, '1,000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `milk`
--

CREATE TABLE `milk` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `milk`
--

INSERT INTO `milk` (`id`, `value`) VALUES
(1, 'Sem Leite'),
(2, 'Leite In Natura'),
(3, 'Leite Descarte');

-- --------------------------------------------------------

--
-- Estrutura para tabela `producer`
--

CREATE TABLE `producer` (
  `id` int(255) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `farm` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `farm_tec` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `agrifirm_tec` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `producer`
--

INSERT INTO `producer` (`id`, `title`, `farm`, `city`, `state`, `phone`, `email`, `farm_tec`, `agrifirm_tec`) VALUES
(1, 'Test', 'farm', 'city', 'state', '45 999999999', 'test@test.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Estrutura para tabela `race`
--

CREATE TABLE `race` (
  `id` int(100) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `race`
--

INSERT INTO `race` (`id`, `value`) VALUES
(1, 'Holandês'),
(2, 'Girolando'),
(3, 'Jersey'),
(4, 'Cruzadas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `weight_average`
--

CREATE TABLE `weight_average` (
  `id` int(255) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `weight_average`
--

INSERT INTO `weight_average` (`id`, `value`) VALUES
(1, '30'),
(2, '35'),
(3, '40'),
(4, '45'),
(5, '50'),
(6, '55'),
(7, '60'),
(8, '65'),
(9, '70'),
(10, '75'),
(11, '80'),
(12, '85'),
(13, '90'),
(14, '95'),
(15, '100');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `diet2`
--
ALTER TABLE `diet2`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dilution`
--
ALTER TABLE `dilution`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `enrichment`
--
ALTER TABLE `enrichment`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `kglt`
--
ALTER TABLE `kglt`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `kglt2`
--
ALTER TABLE `kglt2`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `milk`
--
ALTER TABLE `milk`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `weight_average`
--
ALTER TABLE `weight_average`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `data`
--
ALTER TABLE `data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `diet`
--
ALTER TABLE `diet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `diet2`
--
ALTER TABLE `diet2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `dilution`
--
ALTER TABLE `dilution`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `enrichment`
--
ALTER TABLE `enrichment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `kglt`
--
ALTER TABLE `kglt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `kglt2`
--
ALTER TABLE `kglt2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `milk`
--
ALTER TABLE `milk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `race`
--
ALTER TABLE `race`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `weight_average`
--
ALTER TABLE `weight_average`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
