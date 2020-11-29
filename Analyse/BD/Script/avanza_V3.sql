-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 29 nov. 2020 à 10:56
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
-- Base de données : `avanza`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`user`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `user`) VALUES
(1, 33);

-- --------------------------------------------------------

--
-- Structure de la table `anouncements`
--

DROP TABLE IF EXISTS `anouncements`;
CREATE TABLE IF NOT EXISTS `anouncements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  PRIMARY KEY (`author`,`post`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  PRIMARY KEY (`author`,`post`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `baskets`
--

DROP TABLE IF EXISTS `baskets`;
CREATE TABLE IF NOT EXISTS `baskets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) NOT NULL,
  `description` text NOT NULL,
  `number_available` int(11) NOT NULL,
  `collect_date` datetime NOT NULL,
  `start_hour_collect_date` time NOT NULL,
  `end_hour_collect_date` time NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`id`,`creator`),
  KEY `baskets_admin_FK` (`creator`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `basket_reservation`
--

DROP TABLE IF EXISTS `basket_reservation`;
CREATE TABLE IF NOT EXISTS `basket_reservation` (
  `reservation_code` varchar(255) NOT NULL,
  `owner` int(11) NOT NULL,
  `basket` int(11) NOT NULL,
  `number_basket_reserved` mediumint(11) NOT NULL,
  `date_resrevation` datetime NOT NULL,
  PRIMARY KEY (`reservation_code`,`owner`),
  KEY `baskets_resevation_users_FK` (`owner`),
  KEY `baskets_resevation_basket_FK` (`basket`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaries`
--

DROP TABLE IF EXISTS `commentaries`;
CREATE TABLE IF NOT EXISTS `commentaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`author`,`post`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compositionbasket`
--

DROP TABLE IF EXISTS `compositionbasket`;
CREATE TABLE IF NOT EXISTS `compositionbasket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) NOT NULL,
  `basket` int(11) NOT NULL,
  `fruit` int(11) NOT NULL,
  `vegetable` int(11) NOT NULL,
  `eggs_box` int(11) NOT NULL,
  PRIMARY KEY (`id`,`creator`,`basket`,`fruit`,`vegetable`),
  KEY `compositionBasket_admin_fk` (`creator`),
  KEY `compositionBasket_fruit_fk` (`fruit`),
  KEY `compositionBasket_vegetable_fk` (`vegetable`),
  KEY `compositionBasket_eggs_box_fk` (`eggs_box`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contains_preparation`
--

DROP TABLE IF EXISTS `contains_preparation`;
CREATE TABLE IF NOT EXISTS `contains_preparation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prepartion` int(11) NOT NULL,
  `recipe` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `creator` int(11) NOT NULL,
  PRIMARY KEY (`id`,`prepartion`,`recipe`,`post`,`creator`),
  KEY `contains_preparation_recipe_fk` (`creator`,`post`,`recipe`),
  KEY `contains_preparation_prep_fk` (`prepartion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `eggs_boxes`
--

DROP TABLE IF EXISTS `eggs_boxes`;
CREATE TABLE IF NOT EXISTS `eggs_boxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `elements_recipe`
--

DROP TABLE IF EXISTS `elements_recipe`;
CREATE TABLE IF NOT EXISTS `elements_recipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ingredient` int(11) NOT NULL,
  `ustensils` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `recipe` int(11) NOT NULL,
  PRIMARY KEY (`id`,`recipe`,`ingredient`,`ustensils`,`author`,`post`),
  KEY `element_recipe_recipe_fk` (`author`,`post`,`recipe`),
  KEY `element_recipe_ingredient_fk` (`ingredient`),
  KEY `element_recipe_ustensils_fk` (`ustensils`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `creator` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `main_image` blob NOT NULL,
  `image_c1` blob NOT NULL,
  `image_c2` blob NOT NULL,
  `image_c3` blob NOT NULL,
  `place` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `appointement_date` datetime NOT NULL,
  `limited_place` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`creator`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file` blob NOT NULL,
  PRIMARY KEY (`id`,`mail`),
  KEY `send_mail_FK` (`mail`),
  KEY `files_users_fk` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fruits`
--

DROP TABLE IF EXISTS `fruits`;
CREATE TABLE IF NOT EXISTS `fruits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mails`
--

DROP TABLE IF EXISTS `mails`;
CREATE TABLE IF NOT EXISTS `mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` int(11) NOT NULL,
  `recipient` int(11) NOT NULL,
  `object` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`,`sender`),
  KEY `mail_user_FK` (`sender`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mails_type`
--

DROP TABLE IF EXISTS `mails_type`;
CREATE TABLE IF NOT EXISTS `mails_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) NOT NULL,
  `object` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`,`creator`),
  KEY `mail_user_FK` (`creator`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE IF NOT EXISTS `meetings` (
  `creator` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reporter` int(11) NOT NULL,
  PRIMARY KEY (`creator`,`event`,`id`),
  KEY `meeting_reporter_FK` (`reporter`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`user`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `user`) VALUES
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(2, 62),
(3, 62),
(4, 62),
(1, 63),
(2, 63),
(3, 63),
(4, 63),
(1, 64),
(1, 65),
(1, 66);

-- --------------------------------------------------------

--
-- Structure de la table `others`
--

DROP TABLE IF EXISTS `others`;
CREATE TABLE IF NOT EXISTS `others` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  PRIMARY KEY (`creator`,`event`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participate`
--

DROP TABLE IF EXISTS `participate`;
CREATE TABLE IF NOT EXISTS `participate` (
  `reservation_code` varchar(255) NOT NULL,
  `participant` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  PRIMARY KEY (`participant`,`event`,`reservation_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `parties`
--

DROP TABLE IF EXISTS `parties`;
CREATE TABLE IF NOT EXISTS `parties` (
  `creator` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`creator`,`event`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `party_activities`
--

DROP TABLE IF EXISTS `party_activities`;
CREATE TABLE IF NOT EXISTS `party_activities` (
  `creator` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `party` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(255) NOT NULL,
  PRIMARY KEY (`creator`,`event`,`party`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `main_image` blob NOT NULL,
  `image_c1` blob NOT NULL,
  `image_c2` blob NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`author`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `preparations`
--

DROP TABLE IF EXISTS `preparations`;
CREATE TABLE IF NOT EXISTS `preparations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `step` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `presentations`
--

DROP TABLE IF EXISTS `presentations`;
CREATE TABLE IF NOT EXISTS `presentations` (
  `creator` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`creator`,`event`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `quota_place`
--

DROP TABLE IF EXISTS `quota_place`;
CREATE TABLE IF NOT EXISTS `quota_place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event` int(11) NOT NULL,
  `creator` int(11) NOT NULL,
  `nb_place` int(11) NOT NULL,
  PRIMARY KEY (`id`,`event`,`creator`),
  KEY `quota_place_event_fk` (`event`,`creator`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` int(11) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `nb_guest` int(11) NOT NULL,
  `preparation_time` int(11) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `rate` float NOT NULL,
  PRIMARY KEY (`id`,`author`),
  KEY `recipe_post_fk` (`author`),
  KEY `post` (`post`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reporters`
--

DROP TABLE IF EXISTS `reporters`;
CREATE TABLE IF NOT EXISTS `reporters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda` text NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `profile_picture` blob,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_verified` tinyint(1) NOT NULL DEFAULT '0',
  `payment_method` varchar(255) NOT NULL,
  `payment_date` datetime DEFAULT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `profile_picture`, `phone`, `email`, `password`, `account_verified`, `payment_method`, `payment_date`, `creation_date`) VALUES
(66, 'TAZDAIT', 'Yacine', 0x70686f746f5f64655f70726f66696c5f596163696e655f54415a444149542e6a7067, '0681238665', 'Yacine-T@outlook.com', '$2y$10$nQ6WHxOFNe4SxJ0QMIda1OgkxItWFS6VX3RQa8sHs7o5P9FzQPY3m', 1, 'onsite', NULL, '2020-11-28 22:14:53');

-- --------------------------------------------------------

--
-- Structure de la table `utensils`
--

DROP TABLE IF EXISTS `utensils`;
CREATE TABLE IF NOT EXISTS `utensils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vegetables`
--

DROP TABLE IF EXISTS `vegetables`;
CREATE TABLE IF NOT EXISTS `vegetables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `workshops`
--

DROP TABLE IF EXISTS `workshops`;
CREATE TABLE IF NOT EXISTS `workshops` (
  `creator` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`creator`,`event`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `workshop_activities`
--

DROP TABLE IF EXISTS `workshop_activities`;
CREATE TABLE IF NOT EXISTS `workshop_activities` (
  `creator` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `workshop` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(255) NOT NULL,
  PRIMARY KEY (`creator`,`event`,`workshop`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
