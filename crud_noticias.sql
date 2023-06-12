-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2023 às 12:47
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo_noticia` varchar(255) NOT NULL,
  `conteudo_noticia` varchar(255) NOT NULL,
  `foto_noticia` varchar(255) NOT NULL,
  `autor_noticia` varchar(255) NOT NULL,
  `data_publicacao_noticia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo_noticia`, `conteudo_noticia`, `foto_noticia`, `autor_noticia`, `data_publicacao_noticia`) VALUES
(14, 'Davi derrota gigante Golias de forma inesperada', 'Em batalha entre israelitas e filisteus Davi derrota golias com um clava, acertando uma pedra certeira na cabeça do gigante o derrotando', 'https://i.pinimg.com/564x/b1/41/9a/b1419a2d8df21a0d6c9b3a3943281e2b.jpg', 'Dave', '2023-06-02'),
(15, 'Thor derrota Lü bu bem Ragnarok', 'Usando seu martelo full roubado Thor acabada vencendo Lü bu surpreendendo a todos  ', 'https://i.pinimg.com/564x/d9/cc/9d/d9cc9ddea6d9363871b7dbfc9749fc14.jpg', 'Gustav', '2023-06-02'),
(16, 'Hanayama Mostra tatuagem em luta contra Speck', 'na luto dos dois hanayama acaba ficando sem roupa revelando assim sua tatuagem muito loca da yakuza', 'https://i.pinimg.com/564x/f4/89/b1/f489b1dd61f65645120c310983585845.jpg', 'João', '2023-06-02');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
