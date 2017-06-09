-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jun-2017 às 12:42
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
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `formaPagamento` varchar(50) NOT NULL,
  `numeroCartao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `endereco`, `cpf`, `created`, `modified`, `formaPagamento`, `numeroCartao`) VALUES
(1, 'Felipe Silva do Nascimento', 'Rua teste, 32,jd Bla, São Paulo-SP', '234.342.234-33', '2017-06-03 12:22:19', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `codigoVenda` varchar(30) NOT NULL,
  `enderecoEnviar` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `codigoFuncional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `codigoVenda`, `enderecoEnviar`, `status`, `created`, `modified`, `codigoFuncional`) VALUES
(1, '2343', 'Rua teste, 32,jd Bla, Sao Paulo-SP', 'finalizado', '2017-06-03 12:22:19', '2017-06-08 19:54:07', 'admin'),
(2, '4443', 'Rua teste, 32,jd Bla, Sao Paulo-SP', 'finalizado', '0000-00-00 00:00:00', '2017-06-09 06:47:08', 'admin'),
(3, '44324', 'Rua teste, 32,jd Bla, Sao Paulo-SP', 'finalizado', '0000-00-00 00:00:00', '2017-06-08 23:42:30', 'admin');

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
(10, '1', 'PokeFume', 'Perfume feminino inspirado na flor de cerejeira, elaborado especialmente para transmitir a mais pura feminilidade contemporÃ¢nea. DKNY Be Delicious Fresh Blossom possui uma fragrÃ¢ncia alegre e sedutora, com um toque de inocÃªncia, amor e felicidade.', 14, 99.82, 200, 'Perfumes', '2017-06-03 23:11:25', '2017-06-09 06:54:56', '1'),
(11, '1', 'PokerFume', 'Perfume feminino inspirado na flor de cerejeira, elaborado especialmente para transmitir a mais pura feminilidade contemporÃ¢nea. DKNY Be Delicious Fresh Blossom possui uma fragrÃ¢ncia alegre e sedutora, com um toque de inocÃªncia, amor e felicidade.', 22, 0.27, 1, 'Perfumes', '2017-06-04 02:38:45', '2017-06-09 06:56:48', '0'),
(21, '3', 'Jhonson Baby Shampoo', 'Limpa os cabelos das crianÃ§as', 500, 20, 35.5, 'Cabelos', '2017-06-07 20:28:26', '2017-06-08 19:50:56', '1'),
(22, '234233904530498', 'MÃ¡scara Inoar Mask ProteÃ­na do Trigo e MacadÃ¢mi', 'Inoar Mask ProteÃ­nas do Trigo e MacadÃ¢mia, cabelos reestruturados em tempo real.  A MÃ¡scara de Tratamento Inoar Mask Ã© a poderosa desmaia-cabelo mais amada pelos profissionais. O segredo? Um exclusivo complexo de queratina, macadÃ¢mia e proteÃ­nas do trigo, associados ao melhor da tecnologia hair professional. Altamente condicionante, sua fÃ³rmula recupera completamente a beleza dos fios, mantendo-os macios, saudÃ¡veis e altamente flexÃ­veis.', 500, 50, 29.9, 'Cabelos', '2017-06-08 02:20:35', '2017-06-08 02:20:35', '1'),
(23, '5664096345', 'Billion Red Bond Eau de Toilette Paris Elysees 100', 'Um novo Billion $ acabou de nascer! Billion $ Red Bond!  O tÃ£o conhecido Billion $ estÃ¡ se vestindo desta vez de vermelho no clÃ¡ssico e moderno frasco preto. Perfume sensual e potente. Amadeirado e aromÃ¡tico, ele se abre num accordo frutal misturando hesperidos Ã  ameixa e maÃ§Ã£. O coraÃ§Ã£o alia sutilmente notas florais com a rosa e o jasmin com um toque mÃ¡gico de canela. A sensualidade e a potÃªncia se descobrem finalmente no accordo final, mistura de notas amadeiradas como cedro e carvalho, apoiada pela exÃ³tica baunilha.', 0, 20.9, 49.9, 'Perfumes', '2017-06-08 02:24:40', '2017-06-08 18:59:11', '1'),
(24, '67545586787', 'Perfume EDT Azzaro 50ml', 'EmblemÃ¡tico da famÃ­lia \"FougÃ¨re, AromÃ¡tica e Amadeirada\", o Eau de Toilette Azzaro Pour Homme oferece uma virilidade carismÃ¡tica e atemporal. Seu perfume amadeirado, com um rastro vivo e potente, Ã© uma mistura de sensualidade natural e elegÃ¢ncia instintiva, Ã  imagem da linha Azzaro Pour Homme, reflexo de seu criador Loris Azzaro.', 100, 200.95, 292.95, 'Perfumes', '2017-06-08 02:27:41', '2017-06-08 02:27:41', '1'),
(25, '75646436746588', 'Creme Hidramais Massageador Drenagem LinfÃ¡tica 10', 'Hidramais PROFISSIONAL â€“ Creme para Drenagem LinfÃ¡tica Alta LubrificaÃ§Ã£o, foi especialmente desenvolvido para o uso profissional. ContÃ©m em sua fÃ³rmula: Ã“leo de AlgodÃ£o, Ã“leo de Semente de Uva, Extrato de Centella AsiÃ¡tica e Ginkgo Biloba, alÃ©m de uma combinaÃ§Ã£o concentrada de Ã³leo mineral e emolientes que proporcionam lubrificaÃ§Ã£o mÃ¡xima para os movimentos da massagem.', 344, 10, 30.76, 'EstÃ©tica', '2017-06-08 02:30:50', '2017-06-08 02:30:50', '1'),
(26, '006982', 'Shampoo Seduction Desamarelador - 450ml', 'FÃ³rmula desenvolvida com Violeta, Lavanda e Alecrim, possuem aÃ§Ã£o antioxidante que juntos neutralizam gradativamente o amarelado dos cabelos loiros, grisalhos ou com mechas, devolve a vitalidade dos cabelos e proporciona brilho intenso.', 50, 18.95, 25, 'Cabelos', '2017-06-08 11:25:19', '2017-06-08 11:25:19', '1'),
(27, '000190', 'Shampoo Flores e Vegetais Alecrim e Erva-Santa Mar', 'O Shampoo Alecrim & Erva-Doce possui extratos vegetais cuja funÃ§Ã£o Ã© preventiva no combate a oleosidade capilar excessiva.  Limpa e tonifica o couro cabeludo; revigorando a fibra capilar desvitalizada.  Ajuda a tonificar a raiz e dar suavidade e volume aos cabelos.', 25, 17.95, 22, 'Cabelos', '2017-06-08 11:26:36', '2017-06-09 06:31:16', '0'),
(28, '000182', 'Shampoo Flores e Vegetais PH Neutro - 300ml', 'O Shampoo pH Neutro Flores & Vegetais possui fÃ³rmula transparente, balanceada e fragrÃ¢ncia suave que permite fazer uma limpeza eficiente sem ressecar e deixar resÃ­duos.  Indicado para cabelos que com acÃºmulo de cuidados diÃ¡rios apÃ³s algum tempo se tornam opacos, pesados e sem vida, necessitando assim de um shampoo Neutro especifico para deixÃ¡-los novamente bonitos, macios e naturalmente saudÃ¡veis.', 19, 15, 22, 'Cabelos', '2017-06-08 11:27:47', '2017-06-08 11:27:47', '1'),
(29, '005560', 'Shampoo Blond Matizante Flores e Vegetais - 300ml', 'Cabelos loiros, brancos, cinzas, com luzes ou reflexos  Reduz o Efeito Amarelado dos fios, sem ressecar  Livre de Parabenos  Sem adiÃ§Ã£o de Sal  O Shampoo Blond Matizante Flores & Vegetais foi desenvolvido para cuidar especialmente dos cabelos loiros, brancos, cinzas, com luzes ou reflexos, pois contÃ©m em sua formulaÃ§Ã£o a associaÃ§Ã£o dos extratos das flores de coloraÃ§Ã£o violeta ? Alecrim, Lavanda e Violeta ? que reduzem o efeito amarelado dos fios, recuperando o efeito cinza. Possui ainda ingredientes emolientes e condicionantes que ajudam a combater o ressecamento, deixando os cabelos macios e com brilho.  NÃ£o Testado em Animais  Modo de usar: Aplique nos cabelos molhados, massageando suavemente da raiz atÃ© as pontas. Deixe agir por cerca de 3 a 5 minutos e enxÃ¡gue cuidadosamente. Repita a operaÃ§Ã£o, se necessÃ¡rio. Para prolongar e intensificar o efeito do Shampoo, utilize o Condicionador Blond Matizante Flores & Vegetais. Utilize sempre que desejar eliminar o efeito amarelado dos fios. NÃ£o Ã© recomendado o uso diÃ¡rio.', 38, 18, 24, 'Cabelos', '2017-06-08 11:28:49', '2017-06-08 19:49:50', '0'),
(30, '006179', 'Duo Cake Colorido Vult Arts Azul - 8g', 'Ideal para criar maquiagens artÃ­sticas, como as de circo e teatro.  Base e PÃ³ em um sÃ³ produto, possui consistÃªncia cremosa, permitindo fÃ¡cil deslize sobre a pele, alÃ©m de excelente durabilidade e pigmentaÃ§Ã£o.  PrÃ¡tica, a embalagem possui dupla abertura com compartimento seco para a esponja e espelho.', 15, 12.51, 188.5, 'Maquiagem', '2017-06-08 11:32:47', '2017-06-08 19:48:53', '1'),
(31, '007736', 'Quarteto Para Sobrancelha Dailus', 'Produto ideal para corrigir a sobrancelha e iluminar o olhar. ContÃ©m duas tonalidades que se adequam a tonalidade dos pelos, um iluminador e um balm para facilitar a aplicaÃ§Ã£o e a durabilidade da correÃ§Ã£o.', 25, 20, 30, 'Maquiagem', '2017-06-08 11:34:22', '2017-06-08 11:34:22', '1'),
(32, '006184', 'Sombra Duo Vult 16', 'Sombra compacta em dueto. As cores luminosas e textura aveludada promovem efeito natural e prolongado. Adere com facilidade e oferece intensa pigmentaÃ§Ã£o.  Ideal para AplicaÃ§Ã£o sobre as pÃ¡lpebras. O dueto de cores promove praticidade de uso para a maquiagem do dia a dia.', 20, 15, 25, 'Maquiagem', '2017-06-08 11:36:09', '2017-06-08 11:36:09', '1'),
(33, '007287', ' Sombra Duo Vult Cor 09 - 2,5g', 'Sombra compacta em dueto. As cores luminosas e textura aveludada promovem efeito natural e prolongado. Adere com facilidade e oferece intensa pigmentaÃ§Ã£o.', 15, 15, 25, 'Maquiagem', '2017-06-08 11:38:19', '2017-06-08 17:28:53', '0'),
(34, '006653', 'Esmalte Big Universo Matt Plus - 15,5ml', 'Cria um efeito fosco nas unhas!', 25, 2, 4, 'EstÃ©tica', '2017-06-08 11:41:04', '2017-06-08 11:41:04', '1'),
(35, '007527', 'Extra Brilho Big Universo Roxo - 120ml', 'Ã‰ uma cobertura que prolonga a durabilidade do esmalte e proporciona brilho intenso Ã s unhas.', 25, 10, 15, 'EstÃ©tica', '2017-06-08 11:42:31', '2017-06-08 16:44:10', '1'),
(36, '005105', 'AlgodÃ£o HidrÃ³filo Apolo Multiuso - 50g', 'Produto a partir da rigorosa seleÃ§Ã£o de fibras naturais de puro algodÃ£o, que asseguram a tradicional qualidade, maciez e alto poder de absorÃ§Ã£o dos produtos Apolo!', 20, 2, 4, 'EstÃ©tica', '2017-06-08 11:45:53', '2017-06-08 11:45:53', '1'),
(37, '003313', ' PÃ³ Facial Fixador TranslÃºcido Branco Catharine ', 'PÃ³ facial translÃºcido, proporciona um acabamento matte em qualquer tom de pele, alÃ©m de fixar de maneira eficaz todo tipo de maquilagem bÃ¡sica.  Modo de usar: Com esponja para pÃ³ facial, aplicar o pÃ³ fixador com suaves pressÃµes sobre a cÃºtis, jÃ¡ maquiada. Retirar qualquer possÃ­vel excesso com um pincel', 30, 55.15, 70.25, 'EstÃ©tica', '2017-06-08 11:47:35', '2017-06-08 11:47:35', '1');

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
(73, '1', 'Felipe Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 1, '1', '2017-06-02 17:59:52', '2017-06-08 19:44:26', '1'),
(74, '2', 'JosÃ© Santos Costa', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 1, '2', '2017-06-02 18:00:15', '2017-06-07 22:55:32', '0'),
(75, '3', 'Maria da Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, '3', '2017-06-02 18:00:58', '2017-06-07 01:12:38', '1'),
(76, '4', 'Lucca Di Bastiani', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, '4', '2017-06-02 18:01:43', '2017-06-08 01:20:22', '1'),
(77, '5', 'Joice Pereira Cavalcante', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 1, '5', '2017-06-02 18:02:42', '2017-06-05 13:46:43', '0'),
(78, '6', 'Felipe Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 1, '6', '2017-06-03 11:08:33', '2017-06-03 18:42:19', '0'),
(79, '7', 'Daniele Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, '7', '2017-06-03 11:31:55', '2017-06-03 18:42:13', '0'),
(80, '8', 'Marcos Pereira da Silva', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, 'FEl', '2017-06-03 12:22:19', '2017-06-03 18:42:15', '0'),
(81, 'admin', 'Felipe Silva do Nascimento', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 3, 'admin', '0000-00-00 00:00:00', '2017-06-05 18:57:42', '1'),
(82, '9', 'Thiago', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, '9', '2017-06-07 04:42:53', '2017-06-07 22:55:53', '1'),
(83, '10', 'sfsdf', '342.342.324-34', 'Rua Maria da Silva, 434, Jd Paulista, SÃ£o Paulo-SP', '2343242, 32434324', 2, '10', '2017-06-07 04:43:05', '2017-06-07 23:58:31', '0'),
(84, '13', 'Gabriel Turato', '333.333.333-33', 'Rua Teste NÂº 115, Algum Bairro, Cidade Qualquer-UF', '22222,222', 1, '11', '2017-06-07 18:21:09', '2017-06-09 01:18:46', '0'),
(85, '14', 'Lucca Di Bastiani', '222.222.222-22', 'Rua Exemplo NÂº 222, Bairro, Cidade-UF', '11111,111', 1, '12', '2017-06-07 18:25:54', '2017-06-08 19:43:56', '1'),
(86, '55', 'gjgjgjgj', '45981165880', 'jhgfds', 'asddfgh', 1, '55', '2017-06-08 14:45:37', '2017-06-08 14:45:37', '1');

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
  `modified` datetime NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `codigoVenda`, `codigoProduto`, `quantidadeVendida`, `precoTotalVendas`, `created`, `modified`, `idCliente`) VALUES
(1, '2343', '1', '2', 400, '2017-06-03 12:22:19', '0000-00-00 00:00:00', 1),
(2, '2343', '2', '2', 2, '2017-06-03 12:22:19', '0000-00-00 00:00:00', 1),
(3, '4443', '3', '2', 35.5, '2017-05-03 12:22:19', '0000-00-00 00:00:00', 1),
(4, '4443', '3', '1', 200, '2017-05-03 12:22:19', '0000-00-00 00:00:00', 1),
(5, '44324', '3', '4', 35.5, '2017-05-03 12:22:19', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
