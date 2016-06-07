-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 06 Juin 2016 à 14:57
-- Version du serveur :  5.7.9
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `statistiques`
--

-- --------------------------------------------------------

--
-- Structure de la table `statistiques`
--

DROP TABLE IF EXISTS `statistiques`;
CREATE TABLE IF NOT EXISTS `statistiques` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `annee` varchar(4) DEFAULT NULL,
  `tres_petite` int(11) DEFAULT NULL,
  `petite` int(11) DEFAULT NULL,
  `moyenne` int(11) DEFAULT NULL,
  `grande` int(11) DEFAULT NULL,
  `typeEntreprise` varchar(50) DEFAULT NULL,
  `critere` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `statistiques`
--

INSERT INTO `statistiques` (`ID`, `annee`, `tres_petite`, `petite`, `moyenne`, `grande`, `typeEntreprise`, `critere`) VALUES
(1, '2013', 120596450, 31014487, 76243787, 56487011, 'Construction\r\n', 'Chiffre d''affaire HT'),
(2, '2013', 512492, 14598, 9074, 325, 'Construction\r\n', 'Nombre d''entreprise'),
(3, '2013', 498006, 193554, 381793, 242502, 'Construction\r\n', 'Effectif salariés temps plein'),
(4, '2012', 118538860, 31464454, 78328103, 53815676, 'Construction\r\n', 'Chiffre d''affaire HT'),
(5, '2012', 487684, 15645, 9228, 308, 'Construction\r\n', 'Nombre d''entreprise'),
(6, '2012', 516386, 207380, 395183, 240015, 'Construction\r\n', 'Effectif salariés temps plein'),
(7, '2011', 0, 0, 0, 0, 'Construction\r\n', 'Chiffre d''affaire HT'),
(8, '2011', 0, 0, 0, 0, 'Construction\r\n', 'Nombre d''entreprise'),
(9, '2011', 0, 0, 0, 0, 'Construction\r\n', 'Effectif salariés temps plein'),
(10, '2010', 107214281, 27451766, 72727537, 49754683, 'Construction\r\n', 'Chiffre d''affaire HT'),
(11, '2010', 432831, 13846, 9750, 319, 'Construction\r\n', 'Nombre d''entreprise'),
(12, '2010', 513327, 183017, 404560, 250941, 'Construction\r\n', 'Effectif salariés temps plein'),
(13, '2013', 40527349, 2700293, 20759203, 15648342, 'Activites', 'Chiffre d''affaire HT'),
(14, '2013', 215357, 1063, 1162, 96, 'Activites', 'Nombre d''entreprise'),
(15, '2013', 62405, 14771, 74202, 50009, 'Activites', 'Effectif salariés temps plein'),
(16, '2012', 43159477, 2741506, 20309595, 14784400, 'Activites', 'Chiffre d''affaire HT'),
(17, '2012', 226235, 1173, 1242, 91, 'Activites', 'Nombre d''entreprise'),
(18, '2012', 65396, 14934, 74419, 48162, 'Activites', 'Effectif salariés temps plein'),
(19, '2011', 41353609, 3275038, 19689140, 13764899, 'Activites', 'Chiffre d''affaire HT'),
(20, '2011', 151359, 1010, 1291, 96, 'Activites', 'Nombre d''entreprise'),
(21, '2011', 64568, 13223, 74461, 49067, 'Activites', 'Effectif salariés temps plein'),
(22, '2010', 38454471, 3071220, 19158315, 16507887, 'Activites', 'Chiffre d''affaire HT'),
(23, '2010', 147319, 1159, 1150, 96, 'Activites', 'Nombre d''entreprise'),
(24, '2010', 63459, 15341, 72708, 63296, 'Activites', 'Effectif salariés temps plein'),
(25, '2013', 72715578, 35599814, 265852351, 666772840, 'Industrie', 'Chiffre d''affaire HT'),
(26, '2013', 230638, 13666, 16906, 1601, 'Industrie', 'Nombre d''entreprise'),
(27, '2013', 292500, 190844, 1002247, 1487430, 'Industrie', 'Effectif salariés temps plein'),
(28, '2012', 73630923, 36485190, 273634497, 676688586, 'Industrie', 'Chiffre d''affaire HT'),
(29, '2012', 218599, 14043, 17382, 1609, 'Industrie', 'Nombre d''entreprise'),
(30, '2012', 293030, 193769, 1025036, 1498761, 'Industrie', 'Effectif salariés temps plein'),
(31, '2011', 72905778, 35641987, 281231550, 666833416, 'Industrie', 'Chiffre d''affaire HT'),
(32, '2011', 203392, 13653, 18452, 1733, 'Industrie', 'Nombre d''entreprise'),
(33, '2011', 304175, 176935, 1016502, 1501215, 'Industrie', 'Effectif salariés temps plein'),
(34, '2010', 80475541, 33973755, 259994908, 627015284, 'Industrie', 'Chiffre d''affaire HT'),
(35, '2010', 207807, 13555, 17545, 1650, 'Industrie', 'Nombre d''entreprise'),
(36, '2010', 318839, 182932, 1021197, 1516259, 'Industrie', 'Effectif salariés temps plein');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
