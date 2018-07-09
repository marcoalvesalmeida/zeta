-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29-Jun-2018 às 21:25
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
-- Database: `id2436247_marco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `valor` decimal(5,2) NOT NULL,
  `categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`id`, `titulo`, `valor`, `categoria`) VALUES
(3, 'X-Tudo', 22.00, 3),
(4, 'X-Bacon', 12.00, 3),
(9, 'Coca-Cola', 12.00, 5),
(10, 'X-Ratão', 15.00, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio_ingredientes`
--

CREATE TABLE `cardapio_ingredientes` (
  `id` int(11) NOT NULL,
  `ingrediente` int(11) DEFAULT NULL,
  `cardapio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cardapio_ingredientes`
--

INSERT INTO `cardapio_ingredientes` (`id`, `ingrediente`, `cardapio`) VALUES
(5, 1, 3),
(6, 3, 3),
(7, 2, 3),
(8, 4, 3),
(9, 1, 4),
(10, 2, 4),
(20, 1, 9),
(21, 7, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(3, 'Lanches'),
(5, 'bebidas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `senha`, `telefone`, `whatsapp`, `cep`, `cidade`, `rua`, `bairro`, `numero`, `complemento`) VALUES
(1, 'caio', 'xavier', 'caioxm@gmail.com', '123', '999999999', '99999999', '2222222', 'xsxsxsx', 'xsxsxsxs', 'xsxsxsxs', 33, 'wswsw');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_lanches`
--

CREATE TABLE `historico_lanches` (
  `id` int(11) NOT NULL,
  `lanche` int(11) DEFAULT NULL,
  `adicionais` text COLLATE utf8_unicode_ci,
  `removidos` text COLLATE utf8_unicode_ci,
  `venda` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `finalizado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `historico_lanches`
--

INSERT INTO `historico_lanches` (`id`, `lanche`, `adicionais`, `removidos`, `venda`, `finalizado`) VALUES
(1, 2, 'Bacon', '', '2018317145538', 2),
(2, 2, 'Presunto', '', '201832125023', 2),
(3, 2, 'Bacon', '', '201832125056', 2),
(4, 3, '', 'Presunto - Bacon', '2018322153832', 2),
(5, 2, '', '', '2018322154522', 1),
(6, 3, '', '', '2018322154522', 1),
(7, 1, '', '', '201832216128', 2),
(8, 4, '', 'carne', '2018322161520', 2),
(9, 3, '', '', '2018322162253', 2),
(10, 1, '', '', '2018322162414', 2),
(11, 3, '', '', '2018322163927', 2),
(12, 3, 'Bacon', '', '20184211319', 2),
(13, 2, 'Bacon', '', '20184211319', 2),
(14, 3, '', '', '201843144933', 2),
(15, 2, '', '', '201843144933', 2),
(16, 2, '', 'Bacon', '201843145048', 1),
(17, 3, '', '', '201843145614', 2),
(18, 1, '', '', '201843152316', 2),
(19, 2, '', 'Bacon', '201843152741', 2),
(20, 3, '', 'Bacon', '20184317827', 1),
(21, 2, '', '', '201843184042', 2),
(22, 3, '', '', '20184318411', 2),
(23, 3, '', 'Presunto', '201843191952', 2),
(24, 4, '', '', '20184320471', 2),
(25, 3, '', '', '201843204825', 2),
(26, 4, '', '', '201843205211', 2),
(27, 1, '', 'X-BLACK', '20184320538', 2),
(28, 3, '', '', '20184320551', 2),
(29, 1, '', '', '20184321417', 2),
(30, 2, '', '', '20184321442', 2),
(31, 3, '', '', '20184321916', 2),
(32, 2, '', '', '201843211025', 2),
(33, 10, '', '', '2018448205', 1),
(34, 9, '', 'Bacon', '2018448205', 1),
(35, 9, '', 'Bacon - Bacon', '2018448205', 1),
(36, 10, '', '', '20184482421', 2),
(37, 4, '', 'Bacon', '20184482421', 2),
(38, 4, '', 'Bacon', '20184482421', 2),
(39, 4, '', 'Bacon', '201844204548', 2),
(40, 4, '', 'Bacon', '201844204548', 2),
(41, 4, '', 'Bacon', '201844204637', 1),
(42, 4, '', 'Bacon', '201844204637', 1),
(43, 4, '', 'Bacon', '201844211720', 1),
(44, 4, '', '', '201844211720', 1),
(45, 4, '', '', '2018528151855', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `destino` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `promocao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `img`
--

INSERT INTO `img` (`id`, `nome`, `destino`, `promocao`) VALUES
(1, '15208927885aa6fb74b1528.jpg', './imagens/', 1),
(3, '15210695445aa9ade8cd563.jpg', './imagens/', 2),
(4, '15254321465aec3f5257e94.jpg', './imagens/', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qtde` int(11) NOT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  `adicional` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `nome`, `qtde`, `valor`, `adicional`) VALUES
(1, 'Bacon', 3, 3.00, 1),
(2, 'carne', 3, 3.00, NULL),
(3, 'Bife', 20, 3.00, NULL),
(4, 'Presunto', 10, 2.00, 1),
(7, 'Cebola', 8, 60.80, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedido`
--

CREATE TABLE `itens_pedido` (
  `id` int(11) NOT NULL,
  `produto` int(11) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `observacoes` text COLLATE utf8_unicode_ci,
  `pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `itens_pedido`
--

INSERT INTO `itens_pedido` (`id`, `produto`, `qtde`, `observacoes`, `pedido`) VALUES
(1, 4, 3, 'Não, nenhuma', 13),
(2, 4, 0, 'l', 13),
(3, 4, 4, 'Sem milhão', 13),
(4, 9, 2, 'NÃO', 17),
(5, 9, 6, 'Meia garrafa', 18),
(6, 3, 3, 'Com Pimenta', 18),
(7, 10, 2, 'Sem milho', 20),
(8, 4, 1, 'Não', 21),
(9, 3, 2, 'nao', 22),
(10, 10, 2, 'Não', 23),
(11, 3, 2, 'Nenhuma', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_not_cad`
--

CREATE TABLE `pedidos_not_cad` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `valorTotal` int(11) NOT NULL,
  `data_venda` datetime NOT NULL,
  `entrega` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pagamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedidos_not_cad`
--

INSERT INTO `pedidos_not_cad` (`id`, `nome`, `endereco`, `telefone`, `status`, `valorTotal`, `data_venda`, `entrega`, `pagamento`) VALUES
(13, 'Guilherme', 'Rua 13', '111111', 4, 84, '0000-00-00 00:00:00', '', ''),
(14, '', '', '', 0, 0, '0000-00-00 00:00:00', '', ''),
(15, '', '', '', 0, 0, '0000-00-00 00:00:00', '', ''),
(16, '', '', '', 0, 0, '0000-00-00 00:00:00', '', ''),
(17, 'Marco', 'Rua 17', '9988776', 4, 24, '2018-06-29 15:02:53', 'Motoboy', 'Dinheiro'),
(18, 'Anônimo', 'Rua x', '998572805', 4, 138, '2018-06-29 15:32:26', 'Retirada na Loja', 'Dinheiro'),
(19, '', '', '', 0, 0, '0000-00-00 00:00:00', '', ''),
(20, 'Kla', 'Jajajaj', '9q9q98q', 2, 0, '0000-00-00 00:00:00', '', ''),
(21, 'Guilherme', 'Rua G', '12', 0, 0, '0000-00-00 00:00:00', 'Motoboy', 'Cartão'),
(22, 'Caio', 'jjjjjjjjj', '88888888', 1, 44, '2018-06-29 16:21:27', '', ''),
(23, 'Léo', 'Rua 18', '999999', 1, 122, '2018-06-29 17:33:38', 'Motoboy', 'Dinheiro e Cartão'),
(24, 'Marco', 'Tal', '9ooo', 2, 0, '0000-00-00 00:00:00', 'Motoboy', 'Cartão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

CREATE TABLE `promocoes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`id`, `titulo`, `valor`, `descricao`) VALUES
(1, 'X Tudo', 12.00, 'pão, hambúrguer, presunto, mussarela  ....'),
(2, 'Teste', 0.03, 'Huston'),
(3, 'X-Ratão', 10.50, 'kjhjhjh'),
(4, 'lkkklkl', 3.00, 'jjjjj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'marco@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cliente` int(11) DEFAULT NULL,
  `valorTotal` decimal(8,2) DEFAULT NULL,
  `data_venda` datetime DEFAULT NULL,
  `finalizada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `codigo`, `cliente`, `valorTotal`, `data_venda`, `finalizada`) VALUES
(1, '2018322154522', 1, 31.00, '2018-04-22 18:56:26', 1),
(2, '201832216128', 1, 4.00, '2018-04-22 19:12:19', 0),
(3, '2018322161520', 1, 9.00, '2018-04-22 19:16:11', 0),
(4, '2018322162253', 1, 22.00, '2018-04-22 19:23:01', 0),
(5, '2018322162414', 1, 4.00, '2018-04-22 19:24:23', 0),
(6, '2018322163927', 1, 22.00, '2018-04-22 19:39:38', 0),
(7, '20184211319', 1, 0.00, '2018-05-02 14:02:57', 0),
(8, '201843145048', 1, 7.00, '2018-05-03 17:51:05', 1),
(9, '201843145614', 1, 22.00, '2018-05-03 18:09:46', 0),
(10, '201843145614', 1, 22.00, '2018-05-03 18:09:49', 0),
(11, '111', 1, 90.00, '2018-05-03 18:19:06', 1),
(12, '111', 1, 90.00, '2018-05-03 18:19:06', 1),
(13, '111', 1, 90.00, '2018-05-03 18:20:22', 1),
(14, '111', 1, 90.00, '2018-05-03 18:20:31', 1),
(15, '111', 1, 90.00, '2018-05-03 18:20:59', 1),
(16, '111', 1, 90.00, '2018-05-03 18:21:57', 1),
(17, '201843152316', 1, 4.00, '2018-05-03 18:23:32', 0),
(18, '201843152741', 1, 7.00, '2018-05-03 18:28:00', 0),
(19, '20184317827', 1, 20.00, '2018-05-03 20:08:35', 1),
(26, '111', 1, 90.00, '2018-05-04 00:07:41', 0),
(27, '111', NULL, 90.00, '2018-05-04 00:07:48', 0),
(29, '201843211025', 1, 9.00, '2018-05-04 00:10:39', 0),
(30, '2018448205', 1, 84.80, '2018-05-04 11:19:35', 1),
(31, '20184482421', 1, 84.80, '2018-05-04 11:23:30', 0),
(32, '201844204637', 1, 24.00, '2018-05-04 23:46:49', 1),
(33, '201844211720', 1, 24.00, '2018-05-05 00:17:38', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`);

--
-- Indexes for table `cardapio_ingredientes`
--
ALTER TABLE `cardapio_ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingrediente` (`ingrediente`),
  ADD KEY `cardapio` (`cardapio`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historico_lanches`
--
ALTER TABLE `historico_lanches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promocao` (`promocao`);

--
-- Indexes for table `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itens_pedido`
--
ALTER TABLE `itens_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produto` (`produto`),
  ADD KEY `pedido` (`pedido`);

--
-- Indexes for table `pedidos_not_cad`
--
ALTER TABLE `pedidos_not_cad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cardapio_ingredientes`
--
ALTER TABLE `cardapio_ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `historico_lanches`
--
ALTER TABLE `historico_lanches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `itens_pedido`
--
ALTER TABLE `itens_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pedidos_not_cad`
--
ALTER TABLE `pedidos_not_cad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD CONSTRAINT `cardapio_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `cardapio_ingredientes`
--
ALTER TABLE `cardapio_ingredientes`
  ADD CONSTRAINT `cardapio_ingredientes_ibfk_1` FOREIGN KEY (`ingrediente`) REFERENCES `ingredientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cardapio_ingredientes_ibfk_2` FOREIGN KEY (`cardapio`) REFERENCES `cardapio` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `img_ibfk_1` FOREIGN KEY (`promocao`) REFERENCES `promocoes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  ADD CONSTRAINT `itens_pedido_ibfk_1` FOREIGN KEY (`produto`) REFERENCES `cardapio` (`id`),
  ADD CONSTRAINT `itens_pedido_ibfk_2` FOREIGN KEY (`pedido`) REFERENCES `pedidos_not_cad` (`id`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
