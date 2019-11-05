-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 nov. 2019 à 14:40
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `project_4`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentary`
--

DROP TABLE IF EXISTS `commentary`;
CREATE TABLE IF NOT EXISTS `commentary` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTHOR` varchar(255) NOT NULL,
  `COM_TEXT` text NOT NULL,
  `COM_REPORT` tinyint(1) NOT NULL,
  `ID_TICKET` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentary`
--

INSERT INTO `commentary` (`COM_ID`, `COM_DATE`, `COM_AUTHOR`, `COM_TEXT`, `COM_REPORT`, `ID_TICKET`) VALUES
(1, '2019-10-09 15:16:13', 'Mike', 'bonjour', 0, 1),
(2, '2019-10-09 15:17:27', 'Jean', 'Salut', 0, 2),
(3, '2019-10-28 19:59:48', 'Mike', 'yo!', 0, 2),
(4, '2019-10-28 20:02:31', 'Mike', 'yo!', 0, 2),
(5, '2019-10-28 20:03:57', 'Jean', 'tout va bien?', 0, 2),
(6, '2019-10-28 20:04:17', 'Jean', 'tout va bien?', 0, 2),
(7, '2019-10-28 20:04:37', 'Jean', 'tout va bien?', 1, 2),
(8, '2019-10-29 03:30:48', 'José', 'hello!', 1, 1),
(9, '2019-11-04 02:20:40', 'Mike', 'oui', 0, 3),
(10, '2019-11-04 02:37:09', 'masha', 'bonjour', 0, 4),
(11, '2019-11-05 11:57:07', 'fds', 'dfs', 1, 6),
(12, '2019-11-05 11:59:15', 'hjfgh', 'gfhfgh', 0, 6),
(13, '2019-11-05 11:59:22', 'gjgfv', 'dhvdgh', 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `LOGIN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOGIN_NAME` varchar(100) NOT NULL,
  `LOGIN_PASSWORD` varchar(100) NOT NULL,
  PRIMARY KEY (`LOGIN_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`LOGIN_ID`, `LOGIN_NAME`, `LOGIN_PASSWORD`) VALUES
(1, 'Jean', 'Forteroche');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `TICKETS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TICKETS_DATE` datetime NOT NULL,
  `TICKETS_TITLE` varchar(255) NOT NULL,
  `TICKETS_DESCRIPTION` text NOT NULL,
  PRIMARY KEY (`TICKETS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`TICKETS_ID`, `TICKETS_DATE`, `TICKETS_TITLE`, `TICKETS_DESCRIPTION`) VALUES
(1, '2019-10-09 10:34:06', 'TEST', 'Ceci est un test'),
(2, '2019-10-09 15:14:45', 'Test2', 'tessssst2'),
(6, '2019-11-04 10:10:41', 'test4', '<p>ceci est un test</p>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
