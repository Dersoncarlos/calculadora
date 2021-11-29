# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 167.99.12.227 (MySQL 5.7.36-0ubuntu0.18.04.1)
# Database: calculadora
# Generation Time: 2021-11-29 01:57:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table registros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `registros`;

CREATE TABLE `registros` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL,
  `operation` varchar(150) DEFAULT NULL,
  `result` decimal(12,4) DEFAULT NULL,
  `bonus` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;

INSERT INTO `registros` (`id`, `ip`, `timestamp`, `operation`, `result`, `bonus`)
VALUES
	(29,'172.27.0.1',1638127905,'3+3',6.0000,0),
	(30,'172.27.0.1',1638132316,'66+33-10',89.0000,0),
	(31,'172.27.0.1',1638132406,'89333333-3',89333330.0000,0),
	(32,'172.27.0.1',1638132416,'89333330/50',1786666.6000,0),
	(33,'172.27.0.1',1638132432,'1786666.6%10',6.0000,0),
	(34,'172.27.0.1',1638132491,'-6+5',-1.0000,0),
	(35,'172.27.0.1',1638140584,'22+33*3',165.0000,0),
	(36,'172.27.0.1',1638149713,'20+30',50.0000,0);

/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
