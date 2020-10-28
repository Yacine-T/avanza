-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 oct. 2020 à 11:33
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
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `anouncements`
--

DROP TABLE IF EXISTS `anouncements`;
CREATE TABLE IF NOT EXISTS `anouncements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_posts` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_posts`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_posts` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_posts`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `baskets`
--

DROP TABLE IF EXISTS `baskets`;
CREATE TABLE IF NOT EXISTS `baskets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `description` text NOT NULL,
  `number_available` int(11) NOT NULL,
  `collect_date` datetime NOT NULL,
  `start_hour_collect_date` time NOT NULL,
  `end_hour_collect_date` time NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`id`,`id_user`),
  KEY `baskets_admin_FK` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `basket_reservation`
--

DROP TABLE IF EXISTS `basket_reservation`;
CREATE TABLE IF NOT EXISTS `basket_reservation` (
  `reservation_code` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_basket` int(11) NOT NULL,
  `number_reservation` int(11) NOT NULL,
  `date_resrevation` datetime NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`reservation_code`,`id_user`),
  KEY `baskets_resevation_users_FK` (`id_user`),
  KEY `baskets_resevation_basket_FK` (`id_basket`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaries`
--

DROP TABLE IF EXISTS `commentaries`;
CREATE TABLE IF NOT EXISTS `commentaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_posts` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id_user`,`id_posts`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compositionbasket`
--

DROP TABLE IF EXISTS `compositionbasket`;
CREATE TABLE IF NOT EXISTS `compositionbasket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_basket` int(11) NOT NULL,
  `id_fruit` int(11) NOT NULL,
  `id_vegetable` int(11) NOT NULL,
  `id_eggs_box` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_user`,`id_admin`,`id_basket`,`id_fruit`,`id_vegetable`),
  KEY `compositionBasket_admin_fk` (`id_user`,`id_admin`),
  KEY `compositionBasket_fruit_fk` (`id_fruit`),
  KEY `compositionBasket_vegetable_fk` (`id_vegetable`),
  KEY `compositionBasket_eggs_box_fk` (`id_eggs_box`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contains_preparation`
--

DROP TABLE IF EXISTS `contains_preparation`;
CREATE TABLE IF NOT EXISTS `contains_preparation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prepartion` int(11) NOT NULL,
  `id_recipe` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_prepartion`,`id_recipe`,`id_post`,`id_user`),
  KEY `contains_preparation_recipe_fk` (`id_user`,`id_post`,`id_recipe`),
  KEY `contains_preparation_prep_fk` (`id_prepartion`)
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
  `id_ingredient` int(11) NOT NULL,
  `id_ustensils` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_recipe` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_recipe`,`id_ingredient`,`id_ustensils`,`id_user`,`id_post`),
  KEY `element_recipe_recipe_fk` (`id_user`,`id_post`,`id_recipe`),
  KEY `element_recipe_ingredient_fk` (`id_ingredient`),
  KEY `element_recipe_ustensils_fk` (`id_ustensils`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
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
  `appointement` datetime NOT NULL,
  `limited_number_of_place` tinyint(1) NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`id_user`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mail` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file` blob,
  PRIMARY KEY (`id`,`id_mail`),
  KEY `send_mail_FK` (`id_mail`)
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
  `id_user` int(11) NOT NULL,
  `object` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`,`id_user`),
  KEY `mail_user_FK` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mails_type`
--

DROP TABLE IF EXISTS `mails_type`;
CREATE TABLE IF NOT EXISTS `mails_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `object` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`,`id_user`),
  KEY `mail_user_FK` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE IF NOT EXISTS `meetings` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_reporter` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`,`id`),
  KEY `meeting_reporter_FK` (`id_reporter`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `others`
--

DROP TABLE IF EXISTS `others`;
CREATE TABLE IF NOT EXISTS `others` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participate`
--

DROP TABLE IF EXISTS `participate`;
CREATE TABLE IF NOT EXISTS `participate` (
  `participation_code` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`,`participation_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `parties`
--

DROP TABLE IF EXISTS `parties`;
CREATE TABLE IF NOT EXISTS `parties` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `party_activities`
--

DROP TABLE IF EXISTS `party_activities`;
CREATE TABLE IF NOT EXISTS `party_activities` (
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_party` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`,`id_party`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `main_image` blob NOT NULL,
  `image_c1` blob NOT NULL,
  `image_c2` blob NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`id_user`,`id`)
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
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `quota_place`
--

DROP TABLE IF EXISTS `quota_place`;
CREATE TABLE IF NOT EXISTS `quota_place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `number_of_place` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_event`,`id_user`),
  KEY `quota_place_event_fk` (`id_event`,`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nb_guest` int(11) NOT NULL,
  `preparation_time` int(11) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `rate` float NOT NULL,
  PRIMARY KEY (`id`,`id_user`,`id_post`),
  KEY `recipe_post_fk` (`id_user`,`id_post`)
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
-- Structure de la table `send_receive_mail`
--

DROP TABLE IF EXISTS `send_receive_mail`;
CREATE TABLE IF NOT EXISTS `send_receive_mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mail` int(11) NOT NULL,
  `recipient` int(11) NOT NULL,
  PRIMARY KEY (`recipient`,`id_mail`,`id`),
  KEY `send_mail_FK` (`id_mail`)
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
  `account_verified` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `workshop_activities`
--

DROP TABLE IF EXISTS `workshop_activities`;
CREATE TABLE IF NOT EXISTS `workshop_activities` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id_workshop` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`,`id_workshop`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
