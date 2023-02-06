/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `database`;

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_menu_menu_categories` (`category`),
  CONSTRAINT `FK_menu_menu_categories` FOREIGN KEY (`category`) REFERENCES `menu_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `menu` (`id`, `category`, `title`, `description`, `price`, `deleted_at`) VALUES
	(1, 1, 'Chicken and chaga mushroom soup', 'A chicken bone broth made with whole Pasture Bird chicken, simmered with organic unfiltered apple cider vinegar for 8 hours then infused with organic chaga mushrooms.', 12, NULL),
	(2, 1, 'Chicken skin waffle and charcoal flan', 'A coconut charcoal custard topped with a delicate savory waffle, organic pastured chicken skin and organic ground cassava.', 11, NULL),
	(3, 1, 'Grass fed steak tartare', 'Hand cut pasture raised grass fed fillet mignon, dressed with quail egg and organic broccoli sprouts.', 16, NULL),
	(4, 2, 'Mushroom and truffle pasta', 'A pasta dish made with a creamy mushroom and truffle sauce, topped with shaved Parmesan cheese.', 28, NULL),
	(5, 2, 'Seared duck breast', 'A pan-seared duck breast served with a cherry reduction and a side of braised greens.', 32, NULL),
	(6, 2, 'Eggplant parmesan', 'Breaded and fried eggplant slices served with a tomato-basil sauce and mozzarella cheese, baked until bubbly and golden brown.', 23, NULL),
	(7, 2, 'Pan-seared salmon', 'Wild-caught salmon served with a lemon-dill sauce and a side of quinoa and steamed vegetables.', 43, NULL),
	(8, 2, 'Lamb chops', 'Grilled lamb chops served with a mint pesto and a side of mashed sweet potatoes.', 34, NULL),
	(9, 3, 'Flat water', 'The most important drink will be served in a bowl with a straw.', 1, NULL);

CREATE TABLE IF NOT EXISTS `menu_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `menu_categories` (`id`, `category`, `display_name`) VALUES
	(1, 'appetizers', 'Appetizers'),
	(2, 'main_menu', 'Main Menu'),
	(3, 'beverage', 'Beverage');

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `pictures` (`id`, `url`) VALUES
	(1, 'assets/images/pictures-1.jpg'),
	(2, 'assets/images/pictures-3.jpg'),
	(3, 'assets/images/pictures-6.jpg'),
	(4, 'assets/images/pictures-12.jpg'),
	(5, 'assets/images/pictures-4.jpg'),
	(6, 'assets/images/pictures-8.jpg'),
	(7, 'assets/images/pictures-13.jpg'),
	(8, 'assets/images/pictures-5.jpg'),
	(9, 'assets/images/pictures-10.jpg'),
	(10, 'assets/images/pictures-7.jpg'),
	(11, 'assets/images/pictures-9.jpg'),
	(12, 'assets/images/pictures-11.jpg');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
