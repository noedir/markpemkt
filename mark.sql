-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.13-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela markp_emkt.acessos
DROP TABLE IF EXISTS `acessos`;
CREATE TABLE IF NOT EXISTS `acessos` (
  `ac_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ac_nome` varchar(255) DEFAULT NULL,
  `ac_login` varchar(255) DEFAULT NULL,
  `ac_senha` varchar(255) DEFAULT NULL,
  `ac_nivel` enum('ad','re','cl') DEFAULT 'cl' COMMENT 'AD - admin RE - revenda CL - cliente',
  PRIMARY KEY (`ac_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela markp_emkt.acessos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `acessos` DISABLE KEYS */;
INSERT INTO `acessos` (`ac_codigo`, `ac_nome`, `ac_login`, `ac_senha`, `ac_nivel`) VALUES
	(1, 'Admin', 'admin', '19fd0639715257282e4962b905ca703faab06e55', 'ad');
/*!40000 ALTER TABLE `acessos` ENABLE KEYS */;

-- Copiando estrutura para tabela markp_emkt.banners
DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `ba_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ba_cliente` int(10) unsigned DEFAULT NULL,
  `ba_revenda` int(10) unsigned DEFAULT NULL,
  `ba_preview` varchar(255) DEFAULT NULL,
  `ba_campanha` int(10) unsigned DEFAULT NULL,
  `ba_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ba_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela markp_emkt.banners: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Copiando estrutura para tabela markp_emkt.campanhas
DROP TABLE IF EXISTS `campanhas`;
CREATE TABLE IF NOT EXISTS `campanhas` (
  `ca_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ca_revenda` int(10) unsigned DEFAULT NULL,
  `ca_campanha` varchar(255) DEFAULT NULL,
  `ca_preview` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ca_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela markp_emkt.campanhas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `campanhas` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanhas` ENABLE KEYS */;

-- Copiando estrutura para tabela markp_emkt.clientes
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cl_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cl_logo` varchar(255) DEFAULT NULL,
  `cl_nome` varchar(255) DEFAULT NULL,
  `cl_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cl_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela markp_emkt.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela markp_emkt.historico
DROP TABLE IF EXISTS `historico`;
CREATE TABLE IF NOT EXISTS `historico` (
  `hi_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hi_usuario` int(10) unsigned DEFAULT NULL,
  `hi_nivel` varchar(255) NOT NULL DEFAULT '0',
  `hi_acao` varchar(255) DEFAULT NULL,
  `hi_material` varchar(255) DEFAULT NULL,
  `hi_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`hi_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela markp_emkt.historico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;

-- Copiando estrutura para tabela markp_emkt.revendas
DROP TABLE IF EXISTS `revendas`;
CREATE TABLE IF NOT EXISTS `revendas` (
  `re_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `re_cliente` int(10) unsigned DEFAULT NULL,
  `re_preview` varchar(255) DEFAULT NULL,
  `re_revenda` varchar(255) DEFAULT NULL,
  `re_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`re_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela markp_emkt.revendas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `revendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `revendas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
