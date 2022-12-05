-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 déc. 2022 à 19:04
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gencongo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `espece` varchar(50) DEFAULT NULL,
  `sexe` varchar(50) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `commentaires` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id`, `espece`, `sexe`, `date_naissance`, `nom`, `commentaires`) VALUES
(2, 'chien', 'F', '2009-05-26', 'Cali', NULL),
(3, 'chien', 'F', '2007-04-24', 'Rouquine', NULL),
(4, 'chien', 'F', '2009-05-26', 'Fila', NULL),
(5, 'chien', 'F', '2008-02-20', 'Anya', NULL),
(6, 'chien', 'F', '2009-05-26', 'Louya', NULL),
(7, 'chien', 'F', '2008-03-10', 'Welva', NULL),
(8, 'chien', 'F', '2007-04-24', 'Zira', NULL),
(9, 'chien', 'F', '2009-05-26', 'Java', NULL),
(10, 'chien', 'M', '2007-04-24', 'Balou', NULL),
(11, 'chien', 'M', '2008-03-10', 'Pataud', NULL),
(12, 'chien', 'M', '2007-04-24', 'Bouli', NULL),
(13, 'chien', 'M', '2009-03-05', 'Zoulou', NULL),
(14, 'chien', 'M', '2007-04-12', 'Cartouche', NULL),
(15, 'chien', 'M', '2006-05-14', 'Zambo', NULL),
(16, 'chien', 'M', '2006-05-14', 'Samba', NULL),
(17, 'chien', 'M', '2008-03-10', 'Moka', NULL),
(18, 'chien', 'M', '2006-05-14', 'Pilou', NULL),
(19, 'chat', 'M', '2009-05-14', 'Fiero', NULL),
(20, 'chat', 'M', '2007-03-12', 'Zonko', NULL),
(21, 'chat', 'M', '2008-02-20', 'Filou', NULL),
(22, 'chat', 'M', '2007-03-12', 'Farceur', NULL),
(23, 'chat', 'M', '2006-05-19', 'Caribou', NULL),
(24, 'chat', 'M', '2008-04-20', 'Capou', NULL),
(25, 'chat', 'M', '2006-05-19', 'Mavondo', 'Misu minene'),
(26, 'lapin', 'M', '2014-04-24', 'Baloumouka', NULL),
(27, 'hibou', 'M', '2012-03-10', 'PataudBar', NULL),
(28, 'lapin', 'M', '2013-04-24', 'Makelekele', NULL),
(29, 'hibou', 'M', '2012-03-05', 'Faux ndeke', NULL),
(30, 'vache', 'M', '2013-04-12', 'Ngombe', NULL),
(31, 'poule', 'F', '2014-05-19', 'Soso ya bonane', 'nsusu'),
(32, 'coq', 'M', '2014-04-24', 'Soso ya mobali', NULL),
(33, 'poule', 'F', '2011-03-10', 'Nsusu', NULL),
(34, 'coq', 'M', '2015-04-24', 'trésor', NULL),
(35, 'porc', 'M', '2012-03-05', 'Ngulu', NULL),
(36, 'porc', 'M', '2013-04-12', 'Ngombe', NULL),
(37, 'chat', 'F', '2018-06-04', 'niaou', 'coucou!'),
(38, 'chien', 'M', '2016-09-08', 'chichi', 'cccccvvbbv'),
(39, 'libata', 'M', '2018-07-15', 'ddddd', 'ccccc'),
(40, 'coq', 'M', '2018-07-01', 'cocorico', 'cccc');

-- --------------------------------------------------------

--
-- Structure de la table `vaccination`
--

DROP TABLE IF EXISTS `vaccination`;
CREATE TABLE IF NOT EXISTS `vaccination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAnimal` int(11) NOT NULL,
  `idVeterinaire` int(11) NOT NULL,
  `dateVaccin` date NOT NULL,
  `nomVaccin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vaccination`
--

INSERT INTO `vaccination` (`id`, `idAnimal`, `idVeterinaire`, `dateVaccin`, `nomVaccin`) VALUES
(1, 2, 1, '2016-12-05', 'leucose'),
(2, 2, 1, '2016-12-04', 'coryza'),
(3, 9, 1, '2016-10-03', 'rage'),
(4, 10, 2, '2016-08-23', 'rage'),
(5, 12, 1, '2016-08-03', 'rage'),
(6, 16, 2, '2016-08-23', 'rage'),
(7, 22, 1, '2016-11-06', 'rage'),
(8, 24, 1, '2016-12-05', 'rage');

-- --------------------------------------------------------

--
-- Structure de la table `veterinaire`
--

DROP TABLE IF EXISTS `veterinaire`;
CREATE TABLE IF NOT EXISTS `veterinaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `veterinaire`
--

INSERT INTO `veterinaire` (`id`, `nom`, `prenom`) VALUES
(1, 'Masia', 'Vuvu'),
(2, 'Aumard', 'Céline'),
(3, 'Boukaka', 'cécilia'),
(4, 'Ngolo', 'bredege');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
