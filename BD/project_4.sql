-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 23 oct. 2019 à 12:39
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
  `ID_TICKET` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentary`
--

INSERT INTO `commentary` (`COM_ID`, `COM_DATE`, `COM_AUTHOR`, `COM_TEXT`, `ID_TICKET`) VALUES
(1, '2019-10-09 15:16:13', 'Mike', 'bonjour', 1),
(2, '2019-10-09 15:17:27', 'Jean', 'Salut', 2);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`TICKETS_ID`, `TICKETS_DATE`, `TICKETS_TITLE`, `TICKETS_DESCRIPTION`) VALUES
(1, '2019-10-09 10:34:06', 'TEST', 'Ceci est un test'),
(2, '2019-10-09 15:14:45', 'Test2', 'tessssst2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
