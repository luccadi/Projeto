-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2017 às 02:42
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcosmeticos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `codigoProduto` varchar(30) NOT NULL,
  `nomeProduto` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `precoCompra` float NOT NULL,
  `precoVenda` float NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `codigoProduto`, `nomeProduto`, `descricao`, `quantidade`, `precoCompra`, `precoVenda`, `categoria`, `created`, `modified`, `status`) VALUES
(10, '1', 'PokerFume', 'Perfume feminino inspirado na flor de cerejeira, elaborado especialmente para transmitir a mais pura feminilidade contemporÃ¢nea. DKNY Be Delicious Fresh Blossom possui uma fragrÃ¢ncia alegre e sedutora, com um toque de inocÃªncia, amor e felicidade.', 14, 99.82, 200, 'Perfumes', '2017-06-03 23:11:25', '2017-06-05 19:02:54', '1'),
(11, '2', 'PokerFume', 'Perfume feminino inspirado na flor de cerejeira, elaborado especialmente para transmitir a mais pura feminilidade contemporÃ¢nea. DKNY Be Delicious Fresh Blossom possui uma fragrÃ¢ncia alegre e sedutora, com um toque de inocÃªncia, amor e felicidade.', 22, 0.27, 1, 'Perfumes', '2017-06-04 02:38:45', '2017-06-05 02:34:13', '0'),
(12, '3', 'PokerFume', 'Perfume feminino inspirado na flor de cerejeira, elaborado especialmente para transmitir a mais pura feminilidade contemporÃ¢nea. DKNY Be Delicious Fresh Blossom possui uma fragrÃ¢ncia alegre e sedutora, com um toque de inocÃªncia, amor e felicidade.', 5, 99.82, 200, 'Perfumes', '2017-06-04 02:52:36', '2017-06-05 02:34:10', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `codigoFuncional` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `contaBancaria` varchar(50) NOT NULL,
  `tipoUsuario` int(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `codigoFuncional`, `nome`, `cpf`, `endereco`, `contaBancaria`, `tipoUsuario`, `senha`, `created`, `modified`, `status`) VALUES
(73, '1', 'Felipe Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 1, '1', '2017-06-02 17:59:52', '2017-06-07 01:12:25', '1'),
(74, '2', 'JosÃ© Santos Costa', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 1, '2', '2017-06-02 18:00:15', '2017-06-07 01:12:33', '1'),
(75, '3', 'Maria da Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, '3', '2017-06-02 18:00:58', '2017-06-07 01:12:38', '1'),
(76, '4', 'Lucca Di Bastiani', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, '4', '2017-06-02 18:01:43', '2017-06-03 18:41:59', '0'),
(77, '5', 'Joice Pereira Cavalcante', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 1, '5', '2017-06-02 18:02:42', '2017-06-05 13:46:43', '0'),
(78, '6', 'Felipe Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 1, '6', '2017-06-03 11:08:33', '2017-06-03 18:42:19', '0'),
(79, '7', 'Daniele Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, '7', '2017-06-03 11:31:55', '2017-06-03 18:42:13', '0'),
(80, '8', 'Marcos Pereira da Silva', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, 'FEl', '2017-06-03 12:22:19', '2017-06-03 18:42:15', '0'),
(81, 'admin', 'Felipe Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 3, 'admin', '0000-00-00 00:00:00', '2017-06-05 18:57:42', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `codigoVenda` varchar(30) NOT NULL,
  `codigoProduto` varchar(50) NOT NULL,
  `quantidadeVendida` varchar(100) NOT NULL,
  `precoTotalVendas` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `codigoVenda`, `codigoProduto`, `quantidadeVendida`, `precoTotalVendas`, `created`, `modified`) VALUES
(1, '2343', '1', '2', 400, '2017-06-03 12:22:19', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
