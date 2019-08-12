-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2016 at 03:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `auteurs`
--

CREATE TABLE IF NOT EXISTS `auteurs` (
  `idauteurs` int(11) NOT NULL,
  `auteur` varchar(45) DEFAULT NULL,
  `datenaisse` date DEFAULT NULL,
  `datedeces` date DEFAULT NULL,
  `nationnalite` varchar(45) DEFAULT NULL,
  `idtitre` int(11) NOT NULL,
  PRIMARY KEY (`idauteurs`),
  KEY `fk_auteurs_titre1` (`idtitre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `editeur`
--

CREATE TABLE IF NOT EXISTS `editeur` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `raison` varchar(45) DEFAULT NULL,
  `login` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `editeur`
--

INSERT INTO `editeur` (`code`, `raison`, `login`, `pwd`) VALUES
(1, 'X', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lecteurs`
--

CREATE TABLE IF NOT EXISTS `lecteurs` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `datenaisse` date DEFAULT NULL,
  `dateadhesion` date DEFAULT NULL,
  `login` varchar(27) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `lecteurs`
--

INSERT INTO `lecteurs` (`numero`, `nom`, `prenom`, `adresse`, `datenaisse`, `dateadhesion`, `login`, `pwd`) VALUES
(1, 'user', 'user ^p', 'adresse', '2014-01-01', '2014-01-15', 'user', 'user'),
(2, 'seif', 'seif', 'adresse', '1991-05-15', '2014-01-08', 'seif', 'seif'),
(3, 'azd', 'azd', 'qsdqsd', '0000-00-00', NULL, 'aaa', 'zzz'),
(4, 'bnazdzad', 'azd', 'azdzad', '2000-01-01', NULL, 'op', 'op'),
(5, 'igjzae', '', '', '2000-01-01', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `listeauteur`
--

CREATE TABLE IF NOT EXISTS `listeauteur` (
  `idauteurs` int(11) NOT NULL,
  `idtitre` int(11) NOT NULL,
  `principal` int(11) DEFAULT NULL,
  KEY `fk_auteurs_has_titre_auteurs1` (`idauteurs`),
  KEY `fk_auteurs_has_titre_titre1` (`idtitre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `objets`
--

CREATE TABLE IF NOT EXISTS `objets` (
  `idobjets` int(11) NOT NULL AUTO_INCREMENT,
  `prix` float(11,3) DEFAULT NULL,
  `objetscol` varchar(45) DEFAULT NULL,
  `dateachat` date DEFAULT NULL,
  `dateradiation` date DEFAULT NULL,
  `idtitre` int(11) NOT NULL,
  `codeediteur` int(11) NOT NULL,
  PRIMARY KEY (`idobjets`),
  KEY `fk_objets_titre1` (`idtitre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prets`
--

CREATE TABLE IF NOT EXISTS `prets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datepret` date DEFAULT NULL,
  `dateretour` date DEFAULT NULL,
  `daterelance` varchar(45) DEFAULT NULL,
  `idobjets` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lecteurs_has_objets_lecteurs1` (`numero`),
  KEY `fk_lecteurs_has_objets_objets1` (`idobjets`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `idsupport` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsupport`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`idsupport`, `nom`) VALUES
(1, 'livre'),
(2, 'cd');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `codetheme` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codetheme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`codetheme`, `libelle`) VALUES
(1, 'physique'),
(2, 'Math'),
(3, 'informatique'),
(4, 'literature');

-- --------------------------------------------------------

--
-- Table structure for table `titre`
--

CREATE TABLE IF NOT EXISTS `titre` (
  `idtitre` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `descrit` text,
  `idsupport` int(11) NOT NULL,
  `codetheme` int(11) NOT NULL,
  PRIMARY KEY (`idtitre`),
  KEY `fk_titre_support` (`idsupport`),
  KEY `fk_titre_theme1` (`codetheme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `titre`
--

INSERT INTO `titre` (`idtitre`, `titre`, `descrit`, `idsupport`, `codetheme`) VALUES
(1, 'livre1', 'cbdehhue', 1, 1),
(2, 'livre2', 'bchude', 1, 2),
(3, 'livre3', 'jkzfglkki', 1, 4),
(4, 'cd1', 'nzkdjbnn', 2, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auteurs`
--
ALTER TABLE `auteurs`
  ADD CONSTRAINT `fk_auteurs_titre1` FOREIGN KEY (`idtitre`) REFERENCES `titre` (`idtitre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `listeauteur`
--
ALTER TABLE `listeauteur`
  ADD CONSTRAINT `fk_auteurs_has_titre_auteurs1` FOREIGN KEY (`idauteurs`) REFERENCES `auteurs` (`idauteurs`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_auteurs_has_titre_titre1` FOREIGN KEY (`idtitre`) REFERENCES `titre` (`idtitre`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `objets`
--
ALTER TABLE `objets`
  ADD CONSTRAINT `fk_objets_titre1` FOREIGN KEY (`idtitre`) REFERENCES `titre` (`idtitre`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `prets`
--
ALTER TABLE `prets`
  ADD CONSTRAINT `fk_lecteurs_has_objets_lecteurs1` FOREIGN KEY (`numero`) REFERENCES `lecteurs` (`numero`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lecteurs_has_objets_objets1` FOREIGN KEY (`idobjets`) REFERENCES `objets` (`idobjets`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `titre`
--
ALTER TABLE `titre`
  ADD CONSTRAINT `fk_titre_support` FOREIGN KEY (`idsupport`) REFERENCES `support` (`idsupport`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_titre_theme1` FOREIGN KEY (`codetheme`) REFERENCES `theme` (`codetheme`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
