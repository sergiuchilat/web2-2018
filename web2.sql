-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.16-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for web2
CREATE DATABASE IF NOT EXISTS `web2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `web2`;

-- Dumping structure for table web2.groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT 'Group name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table web2.groups: ~2 rows (approximately)
DELETE FROM `groups`;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`) VALUES
	(1, 'IS11z'),
	(2, 'IS21z');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table web2.students
DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL COMMENT 'First name',
  `last_name` varchar(15) NOT NULL COMMENT 'Last name',
  `group_id` tinyint(3) unsigned NOT NULL COMMENT 'Group ID',
  PRIMARY KEY (`id`),
  KEY `FK_students_groups` (`group_id`),
  CONSTRAINT `FK_students_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='List of students';

-- Dumping data for table web2.students: ~3 rows (approximately)
DELETE FROM `students`;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` (`id`, `first_name`, `last_name`, `group_id`) VALUES
	(1, 'Creanga', 'Ion', 1),
	(2, 'Eminescu', 'MihAI', 2),
	(3, 'Alecsandri', 'VaSiLe', 1),
	(4, 'Matcovski', 'Dumitru', 2),
	(5, 'Matcovski', 'Dumitru', 2),
	(6, 'Vieru', 'Grigore', 2);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
