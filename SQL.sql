-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2021 às 19:45
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio_troupe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `celular` bigint(11) NOT NULL,
  `cep` bigint(8) NOT NULL,
  `logradouro` varchar(55) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `nome`, `sobrenome`, `cpf`, `email`, `celular`, `cep`, `logradouro`, `bairro`, `cidade`, `uf`) VALUES
(1, 'Lucas', 'Aparecido', 70436387042, 'lucasapdo@bol.com.br', 45966425478, 85859389, 'Avenida Flamingo', 'Portal da Foz', 'Foz do Iguaçu', 'PR'),
(2, 'Jorge', 'Dino', 93074145218, 'jorgerex@hotmail.com', 8296482972, 69900351, 'Canal da Maternidade', 'Ipase', 'Rio Branco', 'AC'),
(3, 'Joao', 'Silva', 81510230076, 'joaofloressilva@gmail.com', 19988786277, 13450483, 'Inacio Caetano Leme', 'Jd Boa Esperança', 'Santa Barbara d Oeste', 'SP');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CPF` (`cpf`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
