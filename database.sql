# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: php_project
# Generation Time: 2020-01-04 21:37:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table albums_2019
# ------------------------------------------------------------

DROP TABLE IF EXISTS `albums_2019`;

CREATE TABLE `albums_2019` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) NOT NULL DEFAULT '',
  `album_name` varchar(255) NOT NULL DEFAULT '',
  `favorite_song` varchar(255) NOT NULL DEFAULT '',
  `release_date` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `albums_2019` WRITE;
/*!40000 ALTER TABLE `albums_2019` DISABLE KEYS */;

INSERT INTO `albums_2019` (`id`, `artist_name`, `album_name`, `favorite_song`, `release_date`)
VALUES
	(1,'BROCKHAMPTON','GINGER','I Been Born Again','2019-08-23'),
	(2,'Tyler Childers','Country Squire','Matthew','2019-08-02'),
	(3,'  Fever 333','  Strength in Numb333rs  ','  Inglewood/3  ','  2019-01-18  ');

/*!40000 ALTER TABLE `albums_2019` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
