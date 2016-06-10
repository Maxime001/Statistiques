-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Juin 2016 à 11:41
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
  `total` int(11) NOT NULL,
  `typeEntreprise` varchar(50) DEFAULT NULL,
  `critere` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1834 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `statistiques`
--

INSERT INTO `statistiques` (`ID`, `annee`, `tres_petite`, `petite`, `moyenne`, `grande`, `total`, `typeEntreprise`, `critere`) VALUES
(1798, '2013', 120596450, 31014487, 76243787, 56487011, 284341735, 'Construction\r\n', 'Chiffre d''affaire HT'),
(1799, '2013', 512492, 14598, 9074, 325, 536489, 'Construction\r\n', 'Nombre d''entreprise'),
(1800, '2013', 498006, 193554, 381793, 242502, 1315855, 'Construction\r\n', 'Effectif salariés temps plein'),
(1801, '2012', 118538860, 31464454, 78328103, 53815676, 282147093, 'Construction\r\n', 'Chiffre d''affaire HT'),
(1802, '2012', 487684, 15645, 9228, 308, 512865, 'Construction\r\n', 'Nombre d''entreprise'),
(1803, '2012', 516386, 207380, 395183, 240015, 1358964, 'Construction\r\n', 'Effectif salariés temps plein'),
(1804, '2011', 0, 0, 0, 0, 0, 'Construction\r\n', 'Chiffre d''affaire HT'),
(1805, '2011', 0, 0, 0, 0, 0, 'Construction\r\n', 'Nombre d''entreprise'),
(1806, '2011', 0, 0, 0, 0, 0, 'Construction\r\n', 'Effectif salariés temps plein'),
(1807, '2010', 107214281, 27451766, 72727537, 49754683, 257148267, 'Construction\r\n', 'Chiffre d''affaire HT'),
(1808, '2010', 432831, 13846, 9750, 319, 456746, 'Construction\r\n', 'Nombre d''entreprise'),
(1809, '2010', 513327, 183017, 404560, 250941, 1351845, 'Construction\r\n', 'Effectif salariés temps plein'),
(1810, '2013', 40527349, 2700293, 20759203, 15648342, 79635187, 'Activites', 'Chiffre d''affaire HT'),
(1811, '2013', 215357, 1063, 1162, 96, 217678, 'Activites', 'Nombre d''entreprise'),
(1812, '2013', 62405, 14771, 74202, 50009, 201387, 'Activites', 'Effectif salariés temps plein'),
(1813, '2012', 43159477, 2741506, 20309595, 14784400, 80994978, 'Activites', 'Chiffre d''affaire HT'),
(1814, '2012', 226235, 1173, 1242, 91, 228741, 'Activites', 'Nombre d''entreprise'),
(1815, '2012', 65396, 14934, 74419, 48162, 202911, 'Activites', 'Effectif salariés temps plein'),
(1816, '2011', 41353609, 3275038, 19689140, 13764899, 78082686, 'Activites', 'Chiffre d''affaire HT'),
(1817, '2011', 151359, 1010, 1291, 96, 153756, 'Activites', 'Nombre d''entreprise'),
(1818, '2011', 64568, 13223, 74461, 49067, 201319, 'Activites', 'Effectif salariés temps plein'),
(1819, '2010', 38454471, 3071220, 19158315, 16507887, 77191893, 'Activites', 'Chiffre d''affaire HT'),
(1820, '2010', 147319, 1159, 1150, 96, 149724, 'Activites', 'Nombre d''entreprise'),
(1821, '2010', 63459, 15341, 72708, 63296, 214804, 'Activites', 'Effectif salariés temps plein'),
(1822, '2013', 72715578, 35599814, 265852351, 666772840, 1040940583, 'Industrie', 'Chiffre d''affaire HT'),
(1823, '2013', 230638, 13666, 16906, 1601, 262811, 'Industrie', 'Nombre d''entreprise'),
(1824, '2013', 292500, 190844, 1002247, 1487430, 2973021, 'Industrie', 'Effectif salariés temps plein'),
(1825, '2012', 73630923, 36485190, 273634497, 676688586, 1060439196, 'Industrie', 'Chiffre d''affaire HT'),
(1826, '2012', 218599, 14043, 17382, 1609, 251633, 'Industrie', 'Nombre d''entreprise'),
(1827, '2012', 293030, 193769, 1025036, 1498761, 3010596, 'Industrie', 'Effectif salariés temps plein'),
(1828, '2011', 72905778, 35641987, 281231550, 666833416, 1056612731, 'Industrie', 'Chiffre d''affaire HT'),
(1829, '2011', 203392, 13653, 18452, 1733, 237230, 'Industrie', 'Nombre d''entreprise'),
(1830, '2011', 304175, 176935, 1016502, 1501215, 2998827, 'Industrie', 'Effectif salariés temps plein'),
(1831, '2010', 80475541, 33973755, 259994908, 627015284, 1001459488, 'Industrie', 'Chiffre d''affaire HT'),
(1832, '2010', 207807, 13555, 17545, 1650, 240557, 'Industrie', 'Nombre d''entreprise'),
(1833, '2010', 318839, 182932, 1021197, 1516259, 3039227, 'Industrie', 'Effectif salariés temps plein');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
