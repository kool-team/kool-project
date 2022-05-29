-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 29 mai 2022 à 21:45
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kool_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart_item`
--

DROP TABLE IF EXISTS `cart_item`;
CREATE TABLE IF NOT EXISTS `cart_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_1` (`product_id`),
  KEY `fk_2` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cart_item`
--

INSERT INTO `cart_item` (`id`, `session_id`, `product_id`, `quantity`, `created_at`, `modified_at`) VALUES
(6, '8', '14', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `discount_percent` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `discount`
--

INSERT INTO `discount` (`id`, `name`, `description`, `discount_percent`, `created_at`, `modified_at`) VALUES
(1, 'ACHORA', 'MINUS MINUS', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `salaire` int(11) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `date_d_entree` date NOT NULL,
  `nbHeures` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`id`, `prenom`, `nom`, `date_de_naissance`, `salaire`, `tel`, `date_d_entree`, `nbHeures`) VALUES
(1, 'Said', 'Elhabchi', '2001-12-31', 10000, '0678901122', '2022-05-29', 6),
(2, 'Mohammed', 'Jied', '2001-06-21', 5000, '0678901123', '2021-02-02', 8),
(3, 'Omar', 'Khadrouni', '2001-01-01', 6000, '0678901124', '2022-02-11', 7),
(4, 'Taha', 'Hakkou', '2001-10-18', 4000, '0678901125', '2022-02-14', 6),
(5, 'Houssam', 'Benali', '2001-04-09', 8000, '0678901120', '2022-05-29', 5),
(6, 'Haytam', 'El Moufti', '2001-02-28', 1000, '0678901121', '2022-05-30', 10);

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `modified_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_1` (`payment_id`),
  KEY `fk_2` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `order_details`
--

INSERT INTO `order_details` (`id`, `user_id`, `total`, `payment_id`, `created_at`, `modified_at`) VALUES
(1, '1', '21', NULL, '2022-05-17', NULL),
(2, '1', '42', NULL, '2022-05-18', NULL),
(3, '1', '42', NULL, '2022-05-19', NULL),
(4, '1', '42', NULL, '2022-05-20', NULL),
(5, '1', '31', NULL, '2022-05-21', NULL),
(6, '1', '31', NULL, '2022-05-22', NULL),
(7, '2', '31', NULL, '2022-05-23', NULL),
(8, '2', '20', NULL, '2022-05-24', NULL),
(9, '2', '10', NULL, '2022-05-25', NULL),
(10, '1', '62', NULL, '2022-05-26', NULL),
(11, '1', '42', NULL, '2022-05-27', NULL),
(12, '2', '32', NULL, '2022-05-28', NULL),
(13, '1', '21', NULL, '2022-05-29', NULL),
(14, '1', '21', NULL, '2022-05-30', NULL),
(15, '1', '31', NULL, '2022-05-31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_1` (`order_id`),
  KEY `fk_2` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `created_at`, `modified_at`) VALUES
(1, '16', '1', NULL, NULL),
(2, '16', '2', NULL, NULL),
(3, '16', '11', NULL, NULL),
(4, '16', '13', NULL, NULL),
(5, '16', '14', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `payment_details`
--

DROP TABLE IF EXISTS `payment_details`;
CREATE TABLE IF NOT EXISTS `payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `categorie` varchar(100) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `img` text,
  PRIMARY KEY (`id`),
  KEY `fk_discid` (`discount_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `categorie`, `price`, `discount_id`, `created_at`, `modified_at`, `img`) VALUES
(14, 'prod1', 'desc1', 'categorie1', '10', NULL, NULL, NULL, 'dish-5.png'),
(11, 'prod2', 'desc2', 'categorie2', '10', NULL, NULL, NULL, 'about-img.png'),
(12, 'prod3', 'desc3', 'categorie3', '10', NULL, NULL, NULL, 'dish-1.png'),
(13, 'prod4', 'desc4', 'categorie4', '10', NULL, NULL, NULL, 'dish-2.png'),
(15, 'prod5', 'desc5', 'categorie5', '10', NULL, NULL, NULL, 'dish-4.png'),
(16, 'prod6', 'desc6', 'categorie6', '10', NULL, NULL, NULL, 'dish-5.png'),
(17, 'prod7', 'desc7', 'categorie7', '10', NULL, NULL, NULL, 'home-img-1.png'),
(18, 'prod8', 'desc8', 'categorie8', '10', NULL, NULL, NULL, 'dish-6.png');

-- --------------------------------------------------------

--
-- Structure de la table `shopping_sessions`
--

DROP TABLE IF EXISTS `shopping_sessions`;
CREATE TABLE IF NOT EXISTS `shopping_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_prod_discount` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `permission` varchar(100) DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `address`, `telephone`, `permission`, `created_at`, `modified_at`) VALUES
(1, 'root@gmail.com', 'root', 'root', NULL, NULL, NULL, 'admin', NULL, NULL),
(2, 'user@gmail.com', 'user', NULL, NULL, NULL, NULL, 'user', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
