-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 18 juin 2023 à 23:31
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `progsass_deces`
--

-- --------------------------------------------------------

--
-- Structure de la table `deces`
--

DROP TABLE IF EXISTS `deces`;
CREATE TABLE IF NOT EXISTS `deces` (
  `numero_demande` int NOT NULL AUTO_INCREMENT,
  `ladate` date DEFAULT NULL,
  `Nom_decede` varchar(20) DEFAULT NULL,
  `prenom_decede` varchar(50) DEFAULT NULL,
  `Nom_pere` varchar(20) DEFAULT NULL,
  `prenom_pere` varchar(50) DEFAULT NULL,
  `Nom_mere` varchar(20) DEFAULT NULL,
  `prenom_mere` varchar(50) DEFAULT NULL,
  `Nom_d` varchar(20) DEFAULT NULL,
  `Prenom_d` varchar(50) DEFAULT NULL,
  `Lien_parenter` varchar(20) DEFAULT NULL,
  `Contact` int DEFAULT NULL,
  `Date_demande` date DEFAULT NULL,
  PRIMARY KEY (`numero_demande`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `deces`
--

INSERT INTO `deces` (`numero_demande`, `ladate`, `Nom_decede`, `prenom_decede`, `Nom_pere`, `prenom_pere`, `Nom_mere`, `prenom_mere`, `Nom_d`, `Prenom_d`, `Lien_parenter`, `Contact`, `Date_demande`) VALUES
(10, '2023-06-14', 'Gazinpo', 'Eulaye', 'Gazinpo', 'Dobo', 'Gongon', 'Marguerite', NULL, NULL, NULL, NULL, '2023-06-17'),
(11, '2023-06-15', 'Fataligue', 'Raudolf', 'Fataligue', 'Aboulaiide', 'Fouminiu', 'Amanious', NULL, NULL, NULL, NULL, '2023-06-17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
