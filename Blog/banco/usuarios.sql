-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/09/2024 às 18:55
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_formulario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `telefone`, `sexo`, `data_nasc`, `cpf`, `cidade`, `estado`, `endereco`, `senha`) VALUES
(1, 'Cássia', 'cassia', '123', 'feminino', '2011-11-11', '12', '12', '12', '12', '123'),
(2, 'Cássia a', 'cassia', '123', 'masculino', '2011-01-11', '12', '12', '12', '12', '123'),
(3, 'Cássiae', 'cassia', '1234', 'outro', '0003-03-03', '121', '124', '125', '121', '1234'),
(4, 'a', 'a', 'a', 'masculino', '2011-11-11', 'a', 'a', 'a', 'a', 'a'),
(6, 'cassia', 'cassia@gmail.com', '1234', 'feminino', '2006-01-23', '123', 'Guarapuava', 'Paraná', 'x', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
