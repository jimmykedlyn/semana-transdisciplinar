-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/03/2015 às 15:39
-- Versão do servidor: 5.6.21
-- Versão do PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `bd_transdisciplinar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `area`
--

CREATE TABLE IF NOT EXISTS `area` (
`ID` int(11) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `area`
--

INSERT INTO `area` (`ID`, `DESCRICAO`) VALUES
(1, 'EXATAS'),
(2, 'SAÚDE'),
(3, 'HUMANAS'),
(4, 'SOCIAIS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(200) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1a1a5e105506d49d06cdf28dfd41581e', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425997765, 'a:3:{s:2:"id";s:1:"8";s:4:"nome";s:16:"ANDERSON BEZERRA";s:6:"logado";b:1;}'),
('9c7de814bcc4e90a63ad9fb98c36640f', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425918778, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `codigo`
--

CREATE TABLE IF NOT EXISTS `codigo` (
`id` int(11) NOT NULL,
  `codigo` varchar(200) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`ID` int(11) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `curso`
--

INSERT INTO `curso` (`ID`, `DESCRICAO`) VALUES
(1, 'CIÊNCIA DA COMPUTAÇÃO'),
(2, 'ENFERMAGEM');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dia`
--

CREATE TABLE IF NOT EXISTS `dia` (
`id` int(10) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `dia`
--

INSERT INTO `dia` (`id`, `descricao`) VALUES
(1, 'DIA 1'),
(2, 'DIA 2'),
(3, 'DIA 3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
`ID` int(11) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `eventos`
--

INSERT INTO `eventos` (`ID`, `DESCRICAO`) VALUES
(1, 'MINI-CURSO'),
(2, 'PALESTRA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos_cadastrados`
--

CREATE TABLE IF NOT EXISTS `eventos_cadastrados` (
`ID` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `ID_EVENTO` int(11) NOT NULL,
  `ID_SALA` int(11) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL,
  `VAGAS` int(3) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `id_dia` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `PALESTRANTE` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `eventos_cadastrados`
--

INSERT INTO `eventos_cadastrados` (`ID`, `id_curso`, `ID_EVENTO`, `ID_SALA`, `DESCRICAO`, `VAGAS`, `id_area`, `id_horario`, `id_turno`, `id_dia`, `nome`, `PALESTRANTE`) VALUES
(1, 1, 1, 1, 'Esse curso é Php para iniantes voltado para desenvolvimento web.', 60, 1, 1, 1, 1, 'Php', 'Dr. Anderson'),
(6, 2, 1, 2, 'PARA INICIANTES', 60, 3, 2, 1, 1, 'HTML5 E CSS3', 'RODRIGO ALVES'),
(7, 2, 2, 2, 'Fatos para a Saúde da mulher', 50, 2, 2, 3, 1, 'Saude da Mulher', 'Enfermeiro Rodrigo'),
(8, 2, 2, 2, 'fwefewkfkfwe', 55, 2, 1, 2, 1, 'asasff', 'ffetw'),
(9, 2, 2, 2, 'fwefewkfkfwe', 55, 2, 1, 2, 1, 'asasff', 'ffetw'),
(10, 2, 2, 2, 'fwefewkfkfwe', 55, 2, 1, 2, 1, 'asasff', 'ffetw'),
(11, 1, 1, 1, 'wçfejwekjkwe', 60, 3, 1, 2, 3, 'ututggt', 'ljojj');

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos_usuario`
--

CREATE TABLE IF NOT EXISTS `eventos_usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_evento_cadas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
`ID` int(11) NOT NULL,
  `DESCRICAO` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `horario`
--

INSERT INTO `horario` (`ID`, `DESCRICAO`) VALUES
(1, '9H-10H'),
(2, '18H - 19H');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
`ID` int(11) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sala`
--

INSERT INTO `sala` (`ID`, `DESCRICAO`) VALUES
(1, '203'),
(2, 'AUDITORIO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
`id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'ALUNO'),
(2, 'PROFESSOR'),
(3, 'VISITANTE');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turno`
--

CREATE TABLE IF NOT EXISTS `turno` (
`ID` int(11) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `turno`
--

INSERT INTO `turno` (`ID`, `DESCRICAO`) VALUES
(1, 'MATUTINO'),
(2, 'VESPERTINO'),
(3, 'NOTURNO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `monitor` char(1) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `data_cadastro` date NOT NULL,
  `hora_cadastro` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `id_tipo`, `nome`, `cpf`, `nascimento`, `email`, `sexo`, `telefone`, `celular`, `monitor`, `senha`, `data_cadastro`, `hora_cadastro`) VALUES
(7, 2, 'RODRIGO ALVES', '05065871345', '1993-12-13', 'rodrigo@rodrigo.com', 'M', '9999999', '99999999', 'N', '12345678', '0000-00-00', '0000-00-00 00:00:00'),
(8, 2, 'ANDERSON BEZERRA', '05032429341', '1994-08-16', 'andersonbs.profile@gmail.com', 'M', '9832335005', '98988225864', 'N', '12345678', '0000-00-00', '0000-00-00 00:00:00'),
(9, 2, 'IVAN CABRAL BARRETO FILHO', '05145832311', '2015-03-18', 'ivan@gmail.com', 'M', '9832336060', '98988225864', 'N', '12345679', '0000-00-00', '2015-03-09 13:00:23'),
(10, 1, 'RDG', '82508555401', '2014-12-11', 'rdg@gmail.com', 'M', '443642674', '56868686866', 'N', '123', '0000-00-00', '0000-00-00 00:00:00'),
(12, 1, 'BENTIVI VIVI', '03168438308', '2015-03-18', 'bentivitivi@gmai.com', 'F', '98989898', '9888225864', 'N', '12345678', '0000-00-00', '2015-03-09 16:31:40');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`);

--
-- Índices de tabela `codigo`
--
ALTER TABLE `codigo`
 ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `dia`
--
ALTER TABLE `dia`
 ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
 ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `eventos_cadastrados`
--
ALTER TABLE `eventos_cadastrados`
 ADD PRIMARY KEY (`ID`), ADD KEY `ID_EVENTO` (`ID_EVENTO`), ADD KEY `ID_SALA` (`ID_SALA`), ADD KEY `id_curso` (`id_curso`), ADD KEY `id_area` (`id_area`,`id_horario`,`id_turno`,`id_dia`), ADD KEY `id_dia` (`id_dia`), ADD KEY `id_turno` (`id_turno`), ADD KEY `id_horario` (`id_horario`), ADD KEY `PALESTRANTE` (`PALESTRANTE`);

--
-- Índices de tabela `eventos_usuario`
--
ALTER TABLE `eventos_usuario`
 ADD PRIMARY KEY (`id_usuario`), ADD KEY `id_evento_cadas` (`id_evento_cadas`);

--
-- Índices de tabela `horario`
--
ALTER TABLE `horario`
 ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `sala`
--
ALTER TABLE `sala`
 ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
 ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `turno`
--
ALTER TABLE `turno`
 ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`,`cpf`), ADD KEY `id_tipo` (`id_tipo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `codigo`
--
ALTER TABLE `codigo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `dia`
--
ALTER TABLE `dia`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `eventos_cadastrados`
--
ALTER TABLE `eventos_cadastrados`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `sala`
--
ALTER TABLE `sala`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `turno`
--
ALTER TABLE `turno`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `eventos_cadastrados`
--
ALTER TABLE `eventos_cadastrados`
ADD CONSTRAINT `eventos_cadastrados_ibfk_1` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `eventos_cadastrados_ibfk_2` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`ID`) ON UPDATE CASCADE,
ADD CONSTRAINT `eventos_cadastrados_ibfk_3` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`ID`) ON UPDATE CASCADE,
ADD CONSTRAINT `eventos_cadastrados_ibfk_4` FOREIGN KEY (`ID_SALA`) REFERENCES `sala` (`ID`) ON UPDATE CASCADE,
ADD CONSTRAINT `eventos_cadastrados_ibfk_5` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`ID`) ON UPDATE CASCADE,
ADD CONSTRAINT `eventos_cadastrados_ibfk_6` FOREIGN KEY (`id_area`) REFERENCES `area` (`ID`) ON UPDATE CASCADE,
ADD CONSTRAINT `eventos_cadastrados_ibfk_7` FOREIGN KEY (`ID_EVENTO`) REFERENCES `eventos` (`ID`) ON UPDATE CASCADE;

--
-- Restrições para tabelas `eventos_usuario`
--
ALTER TABLE `eventos_usuario`
ADD CONSTRAINT `eventos_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `eventos_usuario_ibfk_2` FOREIGN KEY (`id_evento_cadas`) REFERENCES `eventos_cadastrados` (`ID`) ON UPDATE CASCADE;

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_usuario` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
