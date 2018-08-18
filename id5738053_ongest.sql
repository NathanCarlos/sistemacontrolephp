-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 18-Ago-2018 às 23:07
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5738053_ongest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `endereco`, `email`, `telefone`, `id_usuariofk`) VALUES
(1, 'Brunno Henrique Gonçalves santos', 'rua seis n°210 Parque Flamengo', 'brunno@gmail.com', '1196342063', 1),
(3, 'teste', 'teste', 'teste@teste', '21321312', 4),
(5, 'joao', 'rua do joa', 'emaildojoao@gmail.com', '(11)242424242', 7),
(10, 'Nathan', 'Rua seis, n°210 Parque Flamengo', 'nathan.santos@interativanet.com.br', '11963420633', 21),
(12, 'Igor', 'Rua um', 'im-marques@hotmail.com', '1126214281', 31),
(13, 'teste', 'teste', 'teste@testecom', '2183987132', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamentos`
--

CREATE TABLE `lancamentos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `lancamentos`
--

INSERT INTO `lancamentos` (`id`, `descricao`, `valor`, `id_usuariofk`) VALUES
(4, 'teste', 2359.00, 4),
(5, 'dasdsa', -250.00, 4),
(6, 'Arroz', -1.00, 5),
(17, 'Renda Mensal', 850.00, 1),
(20, 'Dgjjkk', 150.69, 12),
(23, 'teste', 250.00, 21),
(29, 'Shampoo', -18.00, 31),
(30, 'teste', 280.00, 32),
(33, '10/07/2018', 500.00, 33),
(34, '09/07/2018', 500.00, 33),
(35, 'teste', 111.99, 33),
(36, '09/07/2018', 5005.00, 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `codigobarras` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `quantidade` decimal(10,2) DEFAULT NULL,
  `id_usuariofk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `codigobarras`, `descricao`, `valor`, `quantidade`, `id_usuariofk`) VALUES
(1, '217382637821', 'teste', 258.99, 15.00, 1),
(2, '3218930217839', 'teste', 2356.00, 10.00, 4),
(6, '12345678', 'Dgjjkk', 180.99, 10.00, 12),
(8, '1232132132131', 'teste', 2567.00, 10.00, 21),
(12, '0000000000000', 'Mouse', 15.00, 9.00, 33),
(13, '1111111111111', 'HD', 200.00, 10.00, 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha_usuario` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome_usuario` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email_usuario`, `senha_usuario`, `nome_usuario`) VALUES
(1, 'admin@nathan', 'admin', 'Nathan Carlos'),
(4, 'victor@gmail.com', '123456', 'Victor'),
(5, 'flemis@gmail.com', 'flemis01', 'Flemis'),
(6, 'woshinton@hotmail.com', '123456', 'Woshinton'),
(7, 'woshinton_souza@hotmail.com', '123', 'woshinton'),
(8, 'nathan.santos@interativanet.com.br', '123456', 'Nathan'),
(9, 'teste@teste.com.br', '123456', 'Nathan'),
(10, 'davidac4@live.com', '123456', 'David'),
(12, 'pallomasima@hotmail.com', 'oalloma', 'Palloma'),
(14, 'davidac4@live', '123456', 'david'),
(15, 'legal@legal', '123456', 'Nathan'),
(21, 'ongest3241@gmail.com', '1234', 'Nathan'),
(24, 'david@admin', 'admin', 'David'),
(27, 'im-marques@hotmail.com', 'marcal123', 'Igor'),
(31, 'marques_igor@gmail.com', '123456', 'igor'),
(32, 'teste@teste.com', '231231', 'teste'),
(33, 'williansdesp@hotmail.com', '123456789', 'williand');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuariofk1` (`id_usuariofk`);

--
-- Indexes for table `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuariofk2` (`id_usuariofk`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuariofk` (`id_usuariofk`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email_usuario` (`email_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lancamentos`
--
ALTER TABLE `lancamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `id_usuariofk1` FOREIGN KEY (`id_usuariofk`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD CONSTRAINT `id_usuariofk2` FOREIGN KEY (`id_usuariofk`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `id_usuariofk` FOREIGN KEY (`id_usuariofk`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
