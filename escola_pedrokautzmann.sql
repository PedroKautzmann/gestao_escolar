-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Maio-2019 às 02:27
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escola_pedrokautzmann`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_alunos` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sexo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `bairro` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `rua` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `numero` int(50) DEFAULT NULL,
  `complemento` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_alunos`, `nome`, `sexo`, `data_nascimento`, `cidade`, `bairro`, `rua`, `numero`, `complemento`) VALUES
(1, 'Pedro Henrique Silva  ', 'Masculino   ', '1999-01-01', 'SÃ£o Leopoldo   ', 'Centro   ', 'Rua Sao Joao   ', 123, 'ap 202   '),
(2, 'Jose Pedro   ', 'Masculino   ', '1999-05-10', 'SÃ£o Leopoldo   ', 'Centro   ', 'Rua das Flores   ', 123, 'ap 203   '),
(3, 'Maria Bonita ', 'Feminino ', '1995-03-02', 'SÃ£o Leopoldo ', 'Feitoria ', 'Avenida Central ', 250, ' '),
(4, 'Juliana Silva', 'Feminino', '2001-10-20', 'Porto Alegre', 'Centro', 'Rua Central', 55, 'ao lado do posto'),
(8, 'Ricardo Carvalho', 'Masculino', '1998-05-17', 'SÃ£o Leopoldo', 'FiÃ£o', 'Rua das AcÃ¡cias', 803, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_turmas`
--

CREATE TABLE `alunos_turmas` (
  `id_alunos_turmas` int(11) NOT NULL,
  `id_alunos` int(11) NOT NULL,
  `id_turmas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos_turmas`
--

INSERT INTO `alunos_turmas` (`id_alunos_turmas`, `id_alunos`, `id_turmas`) VALUES
(4, 1, 3),
(7, 2, 10),
(9, 4, 3),
(11, 8, 11),
(13, 3, 10),
(14, 8, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id_turmas` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `vagas` int(11) NOT NULL,
  `professor` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id_turmas`, `descricao`, `vagas`, `professor`) VALUES
(3, 'Turma de Geografia ', 35, 'Paulo Marques '),
(10, 'Turma de FÃ­sica', 25, 'RogÃ©rio'),
(11, 'Turma de MatemÃ¡tica', 20, 'Ana Maria Silva'),
(12, 'Turma de PortuguÃªs', 20, 'AndrÃ©'),
(13, 'Turma de EducaÃ§Ã£o FÃ­sica', 25, 'Fabiano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(3, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_alunos`);

--
-- Indexes for table `alunos_turmas`
--
ALTER TABLE `alunos_turmas`
  ADD PRIMARY KEY (`id_alunos_turmas`),
  ADD KEY `fk_id_alunos` (`id_alunos`),
  ADD KEY `fk_id_turmas` (`id_turmas`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id_turmas`),
  ADD KEY `descricao` (`descricao`),
  ADD KEY `descricao_2` (`descricao`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_alunos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `alunos_turmas`
--
ALTER TABLE `alunos_turmas`
  MODIFY `id_alunos_turmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id_turmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunos_turmas`
--
ALTER TABLE `alunos_turmas`
  ADD CONSTRAINT `fk_id_alunos` FOREIGN KEY (`id_alunos`) REFERENCES `alunos` (`id_alunos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_turmas` FOREIGN KEY (`id_turmas`) REFERENCES `turmas` (`id_turmas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
