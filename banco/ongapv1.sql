-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Tempo de geração: 21-Out-2021 às 08:12
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ongapv1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_doacao`
--

CREATE TABLE `tb_doacao` (
  `id_doacao` int(3) NOT NULL,
  `dt_doacao` varchar(10) NOT NULL,
  `id_doadorFK` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_doadores`
--

CREATE TABLE `tb_doadores` (
  `id_doador` int(3) NOT NULL,
  `nm_doador` varchar(60) DEFAULT NULL,
  `email_doador` varchar(60) DEFAULT NULL,
  `cpf_doador` varchar(14) DEFAULT NULL,
  `dt_nasc_doador` varchar(10) DEFAULT NULL,
  `senha_doador` varchar(60) DEFAULT NULL,
  `anonimo_doador` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_doadores`
--

INSERT INTO `tb_doadores` (`id_doador`, `nm_doador`, `email_doador`, `cpf_doador`, `dt_nasc_doador`, `senha_doador`, `anonimo_doador`) VALUES
(13, 'Jose Victor Oliveira dos Santos', 'victorsantos854@gmail.com', '458.569.598-98', '07/09/1965', '$2y$08$lW9O9XR8pWEzu3mfoh4osuHOZXEWnFB5jcIHYOXdhShvENtMcO1ie', b'0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_emp_parceiras`
--

CREATE TABLE `tb_emp_parceiras` (
  `id_emp` int(3) NOT NULL,
  `tp_logra_emp` varchar(30) NOT NULL,
  `nm_logra_emp` varchar(60) NOT NULL,
  `num_logra_emp` varchar(5) NOT NULL,
  `bairro_emp` varchar(60) NOT NULL,
  `cidade_emp` varchar(60) NOT NULL,
  `cep_emp` varchar(9) NOT NULL,
  `cnpj_emp` varchar(19) NOT NULL,
  `email_emp` varchar(60) NOT NULL,
  `nm_rz_social_emp` varchar(60) NOT NULL,
  `nm_fantasia_emp` varchar(60) NOT NULL,
  `site_emp` varchar(60) DEFAULT NULL,
  `senha_emp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_emp_parceiras`
--

INSERT INTO `tb_emp_parceiras` (`id_emp`, `tp_logra_emp`, `nm_logra_emp`, `num_logra_emp`, `bairro_emp`, `cidade_emp`, `cep_emp`, `cnpj_emp`, `email_emp`, `nm_rz_social_emp`, `nm_fantasia_emp`, `site_emp`, `senha_emp`) VALUES
(6, 'Avenida', 'João Gonçalves', '4878', 'Itapegica', 'Guarulhos', '04598-895', '75.782.021/0175-86', 'empresateste123@gmail.com', 'FL Brasil Industria e Comercios Ltda', 'Bauducco', 'empresateste.com.br', '$2y$08$6aC4dKhWivXrjMIiUavHp.twXDvPutHLVajRQzKbdD/AJqEj3YoNG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grupos_vulneraveis`
--

CREATE TABLE `tb_grupos_vulneraveis` (
  `id_grupo` int(3) NOT NULL,
  `local_grupo` varchar(60) NOT NULL,
  `apelido_grupo` varchar(50) NOT NULL,
  `desc_grupo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_grupos_vulneraveis`
--

INSERT INTO `tb_grupos_vulneraveis` (`id_grupo`, `local_grupo`, `apelido_grupo`, `desc_grupo`) VALUES
(5, 'Quarteto de adolescentes ', 'Próximo a distribuidora Dia Industrias e Comercios', 'Grupo de 4 pessoas, todos adolescentes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_item_doacao`
--

CREATE TABLE `tb_item_doacao` (
  `id_item_doacao` int(4) NOT NULL,
  `id_doacaoFK` int(3) NOT NULL,
  `nm_item` varchar(60) NOT NULL,
  `qtde_item` varchar(10) NOT NULL,
  `id_tp_doacaoFK` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_parcerias`
--

CREATE TABLE `tb_parcerias` (
  `id_parc` int(3) NOT NULL,
  `nm_parc` varchar(60) NOT NULL,
  `tp_logra_parc` varchar(30) NOT NULL,
  `nm_logra_parc` varchar(60) NOT NULL,
  `num_logra_parc` varchar(5) NOT NULL,
  `bairro_parc` varchar(60) NOT NULL,
  `cidade_parc` varchar(60) NOT NULL,
  `cep_parc` varchar(9) NOT NULL,
  `email_parc` varchar(60) NOT NULL,
  `site_parc` varchar(60) DEFAULT NULL,
  `senha_parc` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_parcerias`
--

INSERT INTO `tb_parcerias` (`id_parc`, `nm_parc`, `tp_logra_parc`, `nm_logra_parc`, `num_logra_parc`, `bairro_parc`, `cidade_parc`, `cep_parc`, `email_parc`, `site_parc`, `senha_parc`) VALUES
(6, 'Nossa Senhora de Fátima', 'Rua', 'Tarcis Bueno', '235', 'Jardim Santa Lídia', 'Guarulhos', '04578-895', 'senhorafatima132@teste.com', 'www.nossasenhora.com', '$2y$08$O4CWNdbHzdqULyhFc2pDg.01UY4e6U72i2Owyfy3ZuKTXu2kJsyYW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tel_doador`
--

CREATE TABLE `tb_tel_doador` (
  `id_tel_doador` int(3) NOT NULL,
  `id_doadorFK` int(3) NOT NULL,
  `tel_doador` varchar(15) NOT NULL,
  `tp_tel_doador` enum('Residencial','Celular','Comercial','Recado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tel_emp`
--

CREATE TABLE `tb_tel_emp` (
  `id_tel_emp` int(3) NOT NULL,
  `id_empFK` int(3) NOT NULL,
  `tel_emp` varchar(15) NOT NULL,
  `tp_tel_emp` enum('Celular','Comercial') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tel_parc`
--

CREATE TABLE `tb_tel_parc` (
  `id_tel_parc` int(3) NOT NULL,
  `id_parcFK` int(3) NOT NULL,
  `tel_parc` varchar(15) NOT NULL,
  `tp_tel_parc` enum('Residencial','Celular','Comercial','Recado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tel_vol`
--

CREATE TABLE `tb_tel_vol` (
  `id_tel_vol` int(3) NOT NULL,
  `id_volFK` int(3) NOT NULL,
  `tel_vol` varchar(15) NOT NULL,
  `tp_tel_vol` enum('Residencial','Celular','Comercial','Recado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tp_doacao`
--

CREATE TABLE `tb_tp_doacao` (
  `id_tp_doacao` int(2) NOT NULL,
  `nm_tp_doacao` varchar(30) NOT NULL,
  `st_ativo` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_voluntarios`
--

CREATE TABLE `tb_voluntarios` (
  `id_vol` int(3) NOT NULL,
  `nm_vol` varchar(60) NOT NULL,
  `email_vol` varchar(60) NOT NULL,
  `cpf_vol` varchar(14) NOT NULL,
  `nm_logra_vol` varchar(60) NOT NULL,
  `num_logra_vol` varchar(5) NOT NULL,
  `cep_vol` varchar(9) NOT NULL,
  `dt_nasc_vol` varchar(10) NOT NULL,
  `ativ_vol` varchar(60) NOT NULL,
  `senha_vol` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_voluntarios`
--

INSERT INTO `tb_voluntarios` (`id_vol`, `nm_vol`, `email_vol`, `cpf_vol`, `nm_logra_vol`, `num_logra_vol`, `cep_vol`, `dt_nasc_vol`, `ativ_vol`, `senha_vol`) VALUES
(13, 'Antônia Ferreira de Oliveira', 'antoniaferreira@gmail.com', '134.569.569-89', 'João Alvares', '21', '12065-895', '02/11/2005', 'Entregar_Doacoes', '$2y$08$x6qxkImIIRgxbL7s2TMnfe9aRJ1h7Vpkj6CwrWBexXlP1W65Hofjy');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_doacao`
--
ALTER TABLE `tb_doacao`
  ADD PRIMARY KEY (`id_doacao`),
  ADD KEY `doador_doacao` (`id_doadorFK`);

--
-- Índices para tabela `tb_doadores`
--
ALTER TABLE `tb_doadores`
  ADD PRIMARY KEY (`id_doador`);

--
-- Índices para tabela `tb_emp_parceiras`
--
ALTER TABLE `tb_emp_parceiras`
  ADD PRIMARY KEY (`id_emp`);

--
-- Índices para tabela `tb_grupos_vulneraveis`
--
ALTER TABLE `tb_grupos_vulneraveis`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Índices para tabela `tb_item_doacao`
--
ALTER TABLE `tb_item_doacao`
  ADD PRIMARY KEY (`id_item_doacao`),
  ADD KEY `doacao_item` (`id_doacaoFK`),
  ADD KEY `tp_item` (`id_tp_doacaoFK`);

--
-- Índices para tabela `tb_parcerias`
--
ALTER TABLE `tb_parcerias`
  ADD PRIMARY KEY (`id_parc`);

--
-- Índices para tabela `tb_tel_doador`
--
ALTER TABLE `tb_tel_doador`
  ADD PRIMARY KEY (`id_tel_doador`),
  ADD KEY `doador_tel` (`id_doadorFK`);

--
-- Índices para tabela `tb_tel_emp`
--
ALTER TABLE `tb_tel_emp`
  ADD PRIMARY KEY (`id_tel_emp`),
  ADD KEY `emp_tel` (`id_empFK`);

--
-- Índices para tabela `tb_tel_parc`
--
ALTER TABLE `tb_tel_parc`
  ADD PRIMARY KEY (`id_tel_parc`),
  ADD KEY `parc_tel` (`id_parcFK`);

--
-- Índices para tabela `tb_tel_vol`
--
ALTER TABLE `tb_tel_vol`
  ADD PRIMARY KEY (`id_tel_vol`),
  ADD KEY `vol_tel` (`id_volFK`);

--
-- Índices para tabela `tb_tp_doacao`
--
ALTER TABLE `tb_tp_doacao`
  ADD PRIMARY KEY (`id_tp_doacao`);

--
-- Índices para tabela `tb_voluntarios`
--
ALTER TABLE `tb_voluntarios`
  ADD PRIMARY KEY (`id_vol`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_doacao`
--
ALTER TABLE `tb_doacao`
  MODIFY `id_doacao` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_doadores`
--
ALTER TABLE `tb_doadores`
  MODIFY `id_doador` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_emp_parceiras`
--
ALTER TABLE `tb_emp_parceiras`
  MODIFY `id_emp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_grupos_vulneraveis`
--
ALTER TABLE `tb_grupos_vulneraveis`
  MODIFY `id_grupo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_item_doacao`
--
ALTER TABLE `tb_item_doacao`
  MODIFY `id_item_doacao` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_parcerias`
--
ALTER TABLE `tb_parcerias`
  MODIFY `id_parc` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_tel_doador`
--
ALTER TABLE `tb_tel_doador`
  MODIFY `id_tel_doador` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tel_emp`
--
ALTER TABLE `tb_tel_emp`
  MODIFY `id_tel_emp` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tel_parc`
--
ALTER TABLE `tb_tel_parc`
  MODIFY `id_tel_parc` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tel_vol`
--
ALTER TABLE `tb_tel_vol`
  MODIFY `id_tel_vol` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tp_doacao`
--
ALTER TABLE `tb_tp_doacao`
  MODIFY `id_tp_doacao` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_voluntarios`
--
ALTER TABLE `tb_voluntarios`
  MODIFY `id_vol` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_doacao`
--
ALTER TABLE `tb_doacao`
  ADD CONSTRAINT `doador_doacao` FOREIGN KEY (`id_doadorFK`) REFERENCES `tb_doadores` (`id_doador`);

--
-- Limitadores para a tabela `tb_item_doacao`
--
ALTER TABLE `tb_item_doacao`
  ADD CONSTRAINT `doacao_item` FOREIGN KEY (`id_doacaoFK`) REFERENCES `tb_doacao` (`id_doacao`),
  ADD CONSTRAINT `tp_item` FOREIGN KEY (`id_tp_doacaoFK`) REFERENCES `tb_tp_doacao` (`id_tp_doacao`);

--
-- Limitadores para a tabela `tb_tel_doador`
--
ALTER TABLE `tb_tel_doador`
  ADD CONSTRAINT `doador_tel` FOREIGN KEY (`id_doadorFK`) REFERENCES `tb_doadores` (`id_doador`);

--
-- Limitadores para a tabela `tb_tel_emp`
--
ALTER TABLE `tb_tel_emp`
  ADD CONSTRAINT `emp_tel` FOREIGN KEY (`id_empFK`) REFERENCES `tb_emp_parceiras` (`id_emp`);

--
-- Limitadores para a tabela `tb_tel_parc`
--
ALTER TABLE `tb_tel_parc`
  ADD CONSTRAINT `parc_tel` FOREIGN KEY (`id_parcFK`) REFERENCES `tb_parcerias` (`id_parc`);

--
-- Limitadores para a tabela `tb_tel_vol`
--
ALTER TABLE `tb_tel_vol`
  ADD CONSTRAINT `vol_tel` FOREIGN KEY (`id_volFK`) REFERENCES `tb_voluntarios` (`id_vol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
