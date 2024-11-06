-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/11/2024 às 19:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `barbearia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id_agendamento` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_agenda` int(11) NOT NULL,
  `id_barbeiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendas`
--

CREATE TABLE `agendas` (
  `id_agenda` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `dia_da_semana` tinyint(4) NOT NULL,
  `horario` time NOT NULL,
  `data_criacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendas`
--

INSERT INTO `agendas` (`id_agenda`, `id_usuario`, `dia_da_semana`, `horario`, `data_criacao`) VALUES
(1, 1, 1, '08:00:00', 0),
(2, 1, 1, '08:30:00', 0),
(3, 1, 1, '09:00:00', 0),
(4, 1, 1, '09:30:00', 0),
(5, 1, 1, '10:00:00', 0),
(6, 1, 1, '10:30:00', 0),
(7, 1, 1, '11:00:00', 0),
(8, 1, 1, '11:30:00', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `numero` varchar(12) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contatos`
--

INSERT INTO `contatos` (`id`, `numero`, `id_usuario`) VALUES
(1, '21984563254', 14),
(2, '22974586650', 14),
(3, '27977542254', 15),
(4, '11985453320', 16),
(5, '21974563320', 17),
(6, '27985456630', 17);

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_bancarios`
--

CREATE TABLE `dados_bancarios` (
  `id_dado_bancario` int(11) NOT NULL,
  `nome_do_banco` varchar(60) NOT NULL,
  `numero_agencia` varchar(15) NOT NULL,
  `numero_conta` varchar(15) NOT NULL,
  `chave_pix` varchar(128) NOT NULL,
  `id_usuario` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_bancarios`
--

INSERT INTO `dados_bancarios` (`id_dado_bancario`, `nome_do_banco`, `numero_agencia`, `numero_conta`, `chave_pix`, `id_usuario`) VALUES
(3, 'Nubank', '5698', '55485547', '2198554563325', 18),
(4, 'Nubank', '5698', '55485547', '2198554563325', 21),
(5, 'Nubank', '5698', '55485547', '2198554563325', 22),
(6, 'Nubank', '5698', '55485547', '2198554563325', 23),
(7, 'Nubank', '5698', '55485547', '2198554563325', 24);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `id_grupo` int(11) NOT NULL DEFAULT 1,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `data_de_nascimento`, `id_grupo`, `data_criacao`) VALUES
(14, 'Germnao', 'germ@shjxba.com', '2024-10-09', 1, '2024-10-14 16:59:16'),
(15, 'Germano Silva', 'germano@mail.com', '2000-01-01', 2, '2024-10-14 17:07:11'),
(16, 'Marta Souza', 'marta@mail.com', '2000-01-01', 2, '2024-10-14 17:24:48'),
(17, 'Karol', 'karol@mail.com', '2024-10-28', 1, '2024-10-18 14:40:37'),
(18, 'Isabela', 'isabela@mail.com', '2024-10-02', 1, '2024-10-18 14:40:37'),
(19, 'Jonathan', 'jonathan@mail.com', '2000-01-01', 2, '2024-10-23 17:28:25'),
(20, 'Moacir', 'moacir@mail.com', '2000-01-01', 2, '2024-10-23 17:29:44'),
(21, 'Rudimar', 'rudimar@mail.com', '2000-01-01', 2, '2024-10-23 17:30:33'),
(22, 'Marta Souza', 'marta@mail.com', '2000-01-01', 2, '2024-10-25 14:25:07'),
(23, 'John', 'marta@mail.com', '2000-01-01', 1, '2024-10-25 14:25:19'),
(24, 'John', 'marta@mail.com', '2000-01-01', 1, '2024-10-25 14:26:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `dados_bancarios`
--
ALTER TABLE `dados_bancarios`
  ADD PRIMARY KEY (`id_dado_bancario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `dados_bancarios`
--
ALTER TABLE `dados_bancarios`
  MODIFY `id_dado_bancario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `contatos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;