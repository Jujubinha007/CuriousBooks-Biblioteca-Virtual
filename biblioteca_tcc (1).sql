-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Dez-2022 às 13:18
-- Versão do servidor: 5.7.37
-- versão do PHP: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_livros`
--

CREATE TABLE `cad_livros` (
  `id` int(12) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `autor` varchar(80) NOT NULL,
  `FK_categ` varchar(100) NOT NULL,
  `idio` varchar(100) NOT NULL,
  `pag` int(11) NOT NULL,
  `data` varchar(10) NOT NULL,
  `edi` varchar(150) DEFAULT NULL,
  `descr` varchar(7000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `livro` varchar(7000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_livros`
--

INSERT INTO `cad_livros` (`id`, `nome`, `titulo`, `autor`, `FK_categ`, `idio`, `pag`, `data`, `edi`, `descr`, `image`, `livro`) VALUES
(59, 'Memorial de Aires', 'Memorial de Aires', 'Machado De Assis', 'Romance', 'Português', 116, '1908-01-01', 'Padrão', 'Sexagenário, ex-diplomata aposentado, o conselheiro Aires faz um relato do cotidiano na Corte carioca dos anos de 1888 e 1889. Registrando reflexões sobre fatos e pessoas com as quais conviveu, tece impressões sobre o amor desinteressado, a fidelidade de sentimentos e a espontaneidade da amizade.', 'memorial-de-aires.jpg', 'memorial-de-aires.pdf'),
(58, 'Esaú e Jacó', 'Esaú e Jacó', 'Machado De Assis', 'Ficção', 'Português', 135, '1904-01-01', 'Padrão', 'O título “Esaú e Jacó” vem de uma parábola bíblica de mesmo nome, encontrada em Gênesis. Essa parábola conta a história de Rebeca, mãe de Esaú e Jacó, que sempre privilegia Jacó e deixa Esaú de lado, fazendo com que os dois se tornem inimigos pelo resto de suas vidas.  Além disso, o texto traz muitas temáticas políticas, como a abolição da escravatura, o encilhamento e, com maior destaque, a Proclamação da República.', 'esau-e-jaco.jpg', 'esau-e-jaco.pdf'),
(57, 'Dom Casmurro', 'Dom Casmurro', 'Machado De Assis', 'Romance', 'Português', 128, '1899-01-01', '1°', '\"Dom Casmurro\" conta a história de Bento Santiago (Bentinho), apelidado de Dom Casmurro por ser calado e introvertido. Na adolescência, apaixona-se por Capítu, abandonando o seminário e, com ele, os desígnios traçados por sua mãe, Dona Glória, para que se tornasse padre.', 'dom-casmurro.jpg', 'dom-casmurro.pdf'),
(56, '1984', '1984', ' George Orwell', 'Distopia', 'Português', 102, '1949-06-08', 'Padrão', 'Após uma guerra global, semelhante à segunda grande guerra, porém com mais bombas atômicas, o mundo foi dividido em três continentes: Lestásia, Eurásia e Oceania, onde fica a cidade de Londres. Esse último é comandado pelo líder Big Brother, a figura máxima de poder e controle, “o olho que tudo vê”.', '1984.jpg', '1984.pdf'),
(61, 'O Cortiço', 'O Cortiço', 'Aluísio Azevedo', 'Ficção', 'Português', 130, '1890-01-01', 'Padrão', 'O romance mostra as mazelas e a vida miserável dos moradores de duas habitações coletivas. João Romão é ganancioso comerciante de origem portuguesa, dono de um terreno no Rio de Janeiro onde constrói moradias de baixo custo para obter renda.', 'o-cortico.jpg', 'o-cortico.pdf'),
(62, 'O Guardador De Rebanhos', 'O Guardador De Rebanhos', 'Alberto Caeiro de Fernando Pessoa', 'Poemas e Poesias', 'Português', 25, '1925-01-01', '4°, 5° e 8°', 'Em um panorama geral, o poema defende a ideia da superioridade do sentir sobre o pensar. É impregnado de panteísmo, ou seja, a ideia de que a divindade não está em um deus, mas na união com os elementos da natureza, muito citados ao longo da obra.', 'o-guardador-de-rebanhos.jpg', 'o-guardador-de-rebanhos.pdf'),
(63, 'O Mercador De Veneza', 'The Merchant of Venice ', 'William Shakespeare', 'Teatro', 'Português', 49, '1600-01-01', 'Padrão', 'Veneza, século XVI. Para ajudar o amigo Bassanio a cortejar Portia, o mercador Antonio recorre a um agiota judeu que lhe faz um empréstimo de três mil ducados, a ser pago em três meses. A garantia é um pedaço de sua própria carne.', 'o-mercador-de-veneza.jpg', 'o-mercador-de-veneza.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_usuario`
--

CREATE TABLE `cad_usuario` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `admin2` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_usuario`
--

INSERT INTO `cad_usuario` (`id`, `nome`, `email`, `telefone`, `senha`, `admin2`) VALUES
(3, 'Guilherme Mariano', 'guilherme@gmail.com', '17998665423', '1111', 0),
(5, 'Guilherme', 'guilherme@gmail.com', '123456', '123', 1),
(14, 'Thiago escapa', 'escapa@gmail', '169962650', 'K123', 0),
(15, 'julia', 'julia@gmail', '2416548', 'K159', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categ_livro`
--

CREATE TABLE `categ_livro` (
  `id` int(50) NOT NULL,
  `tipo_categ` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categ_livro`
--

INSERT INTO `categ_livro` (`id`, `tipo_categ`) VALUES
(1, 'Terror'),
(3, 'Romance'),
(4, 'Fantasia'),
(5, 'Distopia'),
(6, 'Ficção'),
(10, 'Ficção Científica'),
(11, 'Poemas e Poesias'),
(12, 'Teatro'),
(13, 'Horror'),
(14, 'Livro-reportagem'),
(15, 'Épico');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_livros`
--
ALTER TABLE `cad_livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cad_usuario`
--
ALTER TABLE `cad_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categ_livro`
--
ALTER TABLE `categ_livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_livros`
--
ALTER TABLE `cad_livros`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `cad_usuario`
--
ALTER TABLE `cad_usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `categ_livro`
--
ALTER TABLE `categ_livro`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
