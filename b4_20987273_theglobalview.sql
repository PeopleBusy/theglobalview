-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Client: sql303.byethost4.com
-- Généré le: Ven 05 Janvier 2018 à 15:48
-- Version du serveur: 5.6.35-81.0
-- Version de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `b4_20987273_theglobalview`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_fr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelle_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelle_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `langue` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `libelle_fr`, `libelle_en`, `libelle_de`, `langue`, `etat`) VALUES
(1, 'News', 'News', 'Nachrichten', 'def', 1),
(2, 'Musique', 'Music', 'Musik', 'def', 1),
(3, 'Jeux', 'Games', 'Spiele', 'def', 1),
(4, 'Style de vie', 'Lifestyle', 'Lebensstil', 'def', 1),
(5, 'Sport', 'Sport', 'Sport', 'def', 1);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcategory_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_fr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_de` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imageUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreation` datetime NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5A8A6C8D5DC6FE57` (`subcategory_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `subcategory_id`, `title_en`, `title_de`, `title_fr`, `description_fr`, `description_en`, `description_de`, `imageUrl`, `dateCreation`, `etat`) VALUES
(1, 5, 'Travel 1', 'Reise 1', 'Voyage 1', 'Description voyage 1', 'Description travel 1', 'Beschreibung reise 1', '', '2018-01-05 15:40:48', 1),
(2, 5, 'Travel 2', 'Reise 2', 'Voyage 2', 'Description voyage 2', 'Description travel 2', 'Beschreibung reise 2', '', '2018-01-05 15:42:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `nom_fr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `langue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BCE3F79812469DE2` (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `nom_fr`, `nom_en`, `nom_de`, `langue`, `etat`) VALUES
(1, 4, 'Beauté', 'Beauty', 'Schönheit', 'default', 1),
(2, 4, 'Santé', 'Health', 'Gesundheit', 'default', 1),
(3, 4, 'Nourriture', 'Food', 'Lebensmittel', 'default', 1),
(4, 4, 'Culture', 'Culture', 'Kultur', 'default', 1),
(5, 4, 'Voyage', 'Travel', 'Reise', 'default', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_heure` datetime NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `password`, `auteur`, `date_heure`, `roles`, `is_active`) VALUES
(1, 'ADMINISTRATEUR', 'Admin', 'global-admin', '$2y$13$pxGRiNJ7xTTJdPrtMIdNI.Ayq7iHylZrs..OEfCX7eaKPMSD90kCi', 'ADMIN', '2017-11-10 14:29:14', 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
