-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.21-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5173
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para pqueroirpb
CREATE DATABASE IF NOT EXISTS `pqueroirpb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pqueroirpb`;

-- Copiando estrutura para tabela pqueroirpb.evento_insc
CREATE TABLE IF NOT EXISTS `evento_insc` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `organizador` varchar(50) DEFAULT NULL,
  `emailOrg` varchar(256) DEFAULT NULL,
  `descricao` varchar(5000) DEFAULT NULL,
  `dataIniEv` date DEFAULT NULL,
  `dataFimEv` date DEFAULT NULL,
  `localidade` varchar(256) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `dataIniInsc` date DEFAULT NULL,
  `dataFimInsc` date DEFAULT NULL,
  `preco` decimal(7,2) DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEvento`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `FK_evento_insc_login` FOREIGN KEY (`idUser`) REFERENCES `login` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pqueroirpb.evento_insc: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `evento_insc` DISABLE KEYS */;
INSERT INTO `evento_insc` (`idEvento`, `titulo`, `organizador`, `emailOrg`, `descricao`, `dataIniEv`, `dataFimEv`, `localidade`, `tipo`, `idUser`, `dataIniInsc`, `dataFimInsc`, `preco`, `imagem`, `video`) VALUES
	(4, 'HackFasat', 'a', 'd', '', '2017-05-29', '2017-05-29', 'Centdro', 'd', NULL, '2017-05-10', '2017-05-12', 1.00, 'http://placehold.it/800x500', ''),
	(5, 'O Big Data Day 2017', 'UnipÃª', 'unipe@unipe.com.br', 'Os especialistas em Tecnologia da InformaÃ§Ã£o Methanias ColaÃ§o Jr., Viviane Ribeiro, Deborah LeitÃ£o do Nascimento, FÃ¡bio Ãvila, Ricardo Roberto de Lima e Celso Machado Maia Padilha serÃ£o os palestrantes do Big Data Day 2017. A atividade acontecerÃ¡ no dia 7 de junho, Ã s 18h, no AuditÃ³rio Oswaldo Trigueiro do Valle. As inscriÃ§Ãµes para o evento estÃ£o abertas e devem ser feitas pelo portal unipe.br/curta-duracao. O investimento Ã© de R$ 40. SerÃ£o conferidos certificados para os participantes.\r\n\r\nOs temas abordados pelos palestrantes serÃ£o, respectivamente, â€œBig Data para GestÃ£o de Softwareâ€, â€œImpactando Vidas com Cortana e ServiÃ§os Cognitivosâ€, â€œDo Excel ao BI: Transformando sua Maturidade AnalÃ­ticaâ€, â€œMobile com Machine Learning e Sistema Cognitivos com Google API Predictionâ€ e â€œStartups e Empreendedorismo Digital em IoTâ€.\r\n\r\nO Big Data Day 2017 divulgarÃ¡ iniciativas de Business Intelligence at Big Data e Data Science envolvendo plataformas e arquitet', '2017-05-28', '2017-05-28', 'Centro', 'Evento', NULL, '2017-05-05', '2017-05-04', 40.00, '/queroir/imgs/curta.jpg', ''),
	(6, 'Hackfest', 'UnipÃª', 'unipe@unipe.com.br', 'O Hackfest Contra a CorrupÃ§Ã£o continua com as inscriÃ§Ãµes abertas para a sua maratona de programaÃ§Ã£o no portal hackfest.com.br, que seguirÃ¡ duas linhas temÃ¡ticas: â€œMelhoria dos ServiÃ§os PÃºblicosâ€ e â€œCombate Ã  CorrupÃ§Ã£o e Acompanhamento da AplicaÃ§Ã£o dos Recursos PÃºblicosâ€.\r\nEstÃ£o sendo disponibilizadas 160 vagas, das quais pelo menos 60% deverÃ£o ser preenchidas por participantes com conhecimentos na Ã¡rea de Tecnologia da InformaÃ§Ã£o, conforme prevÃª o edital. O Hackfest ocorrerÃ¡ de 9 a 11 de junho, no EspaÃ§o Cultural JosÃ© Lins do Rego.\r\n\r\nClique aqui e confira o regulamento do hackathon!\r\n\r\nO restante das vagas da maratona de programaÃ§Ã£o ficarÃ¡ Ã  disposiÃ§Ã£o dos interessados em contribuir com a elaboraÃ§Ã£o dos programas. As inscriÃ§Ãµes para os participantes de outras Ã¡reas tambÃ©m estÃ£o abertas no site do evento.\r\n\r\nAlÃ©m da maratona, o Hackfest irÃ¡ promover outras atividades como palestras, oficinas com profissionais e acadÃªmicos renomados nas Ã', '2017-05-05', '2017-05-05', 'Centro', 'Palestra', NULL, '2017-05-10', '2017-05-01', 0.00, '/queroir/imgs/hackfast.jpg', ''),
	(7, 'dsadas', 'dsadas', 'dasdsa', 'dsadsa', '2017-04-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(8, NULL, NULL, NULL, 'gdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(9, NULL, NULL, NULL, 'gfdgfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(10, NULL, NULL, NULL, 'gfdgfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `evento_insc` ENABLE KEYS */;

-- Copiando estrutura para tabela pqueroirpb.fale_conosco
CREATE TABLE IF NOT EXISTS `fale_conosco` (
  `idFc` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `texto` varchar(1000) DEFAULT NULL,
  `assunto` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idFc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pqueroirpb.fale_conosco: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fale_conosco` DISABLE KEYS */;
/*!40000 ALTER TABLE `fale_conosco` ENABLE KEYS */;

-- Copiando estrutura para tabela pqueroirpb.login
CREATE TABLE IF NOT EXISTS `login` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `senha` varchar(8) DEFAULT NULL,
  `tipo` enum('Comum','Admin') DEFAULT 'Comum',
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `valor` int(11) DEFAULT '0',
  `usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pqueroirpb.login: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`idUser`, `senha`, `tipo`, `nome`, `email`, `valor`, `usuario`) VALUES
	(1, '12345678', 'Admin', 'Wilson', 'admin@gmail.com', 0, '');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
