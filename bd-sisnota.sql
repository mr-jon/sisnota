-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 26-Nov-2019 às 20:44
-- Versão do servidor: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisnota`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` char(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `endereco` char(255) NOT NULL,
  `bairro` char(255) NOT NULL,
  `cep` char(255) NOT NULL,
  `cidade` char(255) NOT NULL,
  `estado` char(255) NOT NULL,
  `telefone` char(255) NOT NULL,
  `nacionalidade` char(255) NOT NULL,
  `naturalidade` char(255) NOT NULL,
  `cpf` char(255) NOT NULL,
  `nome_pai` char(255) NOT NULL,
  `cpf_pai` char(255) NOT NULL,
  `nome_mae` char(255) NOT NULL,
  `cpf_mae` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `data_nascimento`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `nacionalidade`, `naturalidade`, `cpf`, `nome_pai`, `cpf_pai`, `nome_mae`, `cpf_mae`) VALUES
(2, 'Arthu Vinicius D. Santiago', '1996-01-05', 'Avenida presidente Ernesto Geisel', 'Bosque das magueiras', '79092-265', 'Campo Grande', 'Mato Grosso do Sul', '(67)9913-14367', 'Brasilerio', 'Pacaja', '025.520.236-15', 'Edvan de Melo Santiago', '028.852.456-17', 'Alessandra Demetrio Santiago', '123.321.147-58'),
(5, 'Faluna de tal', '1990-01-05', 'Rua Senador Queiroz', 'Bosque das magueiras', '79092-265', 'Campo Grande', 'Mato Grosso do Su', '(67)6325-8596', 'Brasileira', 'Cidade dos fulanos', '021.023.258-15', 'Ciclaro de tal da silva', '021.025.258-78', 'Beltrana da silva', '789.456.123-96'),
(6, 'Romario Cezar', '2019-11-21', 'Avenida presidente Ernesto Geisel', 'São Francisco', '790920-11', 'CAMPO GRANDE', 'Mato Grosso do Su', '67991314367', 'Brasileiro', 'Cidade dos fulanos', '02899926217', 'Ciclaro de tal da silva', '028.852.456-17', 'Alessandra Demetrio Santiago', '02899926217'),
(7, 'Jeffery Ornellas', '2019-01-10', 'Rua Argemiro Fialho', 'Vl. Bandeirantes', '79000-100', 'CAMPO GRANDE', 'Mato Grosso do Sul', '6799999999', 'Brasileiro', 'Campo Grande', '11111111111', 'Pai', '22222222222', 'Mãe', '33333333333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_disciplina` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nome_disciplina`) VALUES
(2, 'Português'),
(3, 'Física'),
(4, 'História'),
(5, 'Artes'),
(6, 'Matematica'),
(7, 'Programação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lecionadas`
--

CREATE TABLE `lecionadas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_professor` bigint(20) UNSIGNED NOT NULL,
  `id_disciplina` bigint(20) UNSIGNED NOT NULL,
  `id_turma` bigint(20) UNSIGNED NOT NULL,
  `ano_letivo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lecionadas`
--

INSERT INTO `lecionadas` (`id`, `id_professor`, `id_disciplina`, `id_turma`, `ano_letivo`) VALUES
(7, 8, 6, 5, '2019-01-01'),
(8, 1, 4, 8, '2019-01-01'),
(9, 9, 3, 7, '2019-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriculas`
--

CREATE TABLE `matriculas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_matricula` char(5) NOT NULL,
  `id_aluno` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matriculas`
--

INSERT INTO `matriculas` (`id`, `data_matricula`, `id_aluno`) VALUES
(4, '2019', 2),
(6, '2019', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_aluno` bigint(20) UNSIGNED NOT NULL,
  `id_disciplina` bigint(20) UNSIGNED NOT NULL,
  `ano_letivo` char(5) NOT NULL,
  `p_bim_1nota` double DEFAULT NULL,
  `p_bim_1trab` double DEFAULT NULL,
  `p_bim_2nota` double DEFAULT NULL,
  `p_bim_2trab` double DEFAULT NULL,
  `p_bim_recu` double DEFAULT NULL,
  `s_bim_1nota` double DEFAULT NULL,
  `s_bim_1trab` double DEFAULT NULL,
  `s_bim_2nota` double DEFAULT NULL,
  `s_bim_2trab` double DEFAULT NULL,
  `s_bim_recu` double DEFAULT NULL,
  `t_bim_1nota` double DEFAULT NULL,
  `t_bim_1trab` double DEFAULT NULL,
  `t_bim_2nota` double DEFAULT NULL,
  `t_bim_2trab` double DEFAULT NULL,
  `t_bim_recu` double DEFAULT NULL,
  `q_bim_1nota` double DEFAULT NULL,
  `q_bim_1trab` double DEFAULT NULL,
  `q_bim_2nota` double DEFAULT NULL,
  `q_bim_2trab` double DEFAULT NULL,
  `q_bim_recu` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id`, `id_aluno`, `id_disciplina`, `ano_letivo`, `p_bim_1nota`, `p_bim_1trab`, `p_bim_2nota`, `p_bim_2trab`, `p_bim_recu`, `s_bim_1nota`, `s_bim_1trab`, `s_bim_2nota`, `s_bim_2trab`, `s_bim_recu`, `t_bim_1nota`, `t_bim_1trab`, `t_bim_2nota`, `t_bim_2trab`, `t_bim_recu`, `q_bim_1nota`, `q_bim_1trab`, `q_bim_2nota`, `q_bim_2trab`, `q_bim_recu`) VALUES
(7, 3, 6, '2019', 10, 5.5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 5, 7, '2017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 5, 7, '2018', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 5, 7, '2015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 2, 7, '2015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 2, 6, '2019', 9.9, 10, 8.9, 5.4, NULL, 9.9, 10, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 6, 2, '2019', 10, NULL, 10, 2.2, NULL, NULL, 9.76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(18, 2, 2, '2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 2, 3, '2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 6, 4, '2019', 10, NULL, NULL, NULL, NULL, NULL, 2.2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 7, 6, '2019', 10, 10, 10, 10, NULL, 10, 10, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 7, 7, '2019', 10, 10, 10, 10, NULL, 10, 10, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 7, 5, '2019', 10, 10, 10, 10, NULL, 10, 10, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 7, 4, '2019', 10, 10, 10, 10, NULL, 10, 10, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` char(255) NOT NULL,
  `cpf` char(255) NOT NULL,
  `endereco` char(255) NOT NULL,
  `bairro` char(255) NOT NULL,
  `cep` char(255) NOT NULL,
  `cidade` char(255) NOT NULL,
  `estado` char(255) NOT NULL,
  `telefone` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `cpf`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`) VALUES
(1, 'Arthu Vinicius Demetrio Santiago', '02899926217', 'Rua Senador Queiroz', 'Jardim Leblon', '79118-690', 'Campo Grande', 'Mato Grosso', '67991314367'),
(8, 'Ricardo barbosa Dias Santos', '02899926214', 'Avenida presidente Ernesto Geisel', 'Bosque das magueiras', '79092265', 'Campo Grande', 'Amapá', '67991314367'),
(9, 'Calos da Silva', '025.789.321-45', 'Avenida presidente Ernesto Geisel', 'Bosque das magueiras', '79092-265', 'Campo Grande', 'Mato Grosso do Sul', '(65)991314685');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_turma` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome_turma`) VALUES
(5, '1º Ano-B'),
(6, '1º Ano-C'),
(7, '2ª Serie-A'),
(8, '2ª Serie-B'),
(9, '3ª Serie-C'),
(10, '1º Período-A'),
(11, '1º Período-B'),
(13, '1º Ano-A'),
(15, '375');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecionadas`
--
ALTER TABLE `lecionadas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lecionadas`
--
ALTER TABLE `lecionadas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
