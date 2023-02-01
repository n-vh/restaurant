CREATE DATABASE IF NOT EXISTS `database`;
USE `database`;

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `subject` varchar(50) NOT NULL DEFAULT '',
  `message` varchar(3000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
);
