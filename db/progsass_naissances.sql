-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 18 juin 2023 à 23:32
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
-- Base de données : `progsass_naissances`
--

-- --------------------------------------------------------

--
-- Structure de la table `naissance`
--

DROP TABLE IF EXISTS `naissance`;
CREATE TABLE IF NOT EXISTS `naissance` (
  `Numero_demande` int NOT NULL AUTO_INCREMENT,
  `Nom_pere` varchar(20) DEFAULT NULL,
  `Prenom_pere` varchar(50) DEFAULT NULL,
  `Nom_mere` varchar(20) DEFAULT NULL,
  `Prenom_mere` varchar(50) DEFAULT NULL,
  `Fonction_pere` varchar(20) DEFAULT NULL,
  `Fonction_mere` varchar(20) DEFAULT NULL,
  `Contacte_pere` int DEFAULT NULL,
  `Contacte_mere` int DEFAULT NULL,
  `Lieu_habitation_pere` varchar(20) DEFAULT NULL,
  `Lieu_habitation_mere` varchar(20) DEFAULT NULL,
  `Nom_d` varchar(20) DEFAULT NULL,
  `Prenom_d` varchar(50) DEFAULT NULL,
  `Lien_parenter` varchar(20) DEFAULT NULL,
  `Contact` int DEFAULT NULL,
  `Date_demande` date DEFAULT NULL,
  `Nom_e` varchar(20) DEFAULT NULL,
  `Prenom_e` varchar(50) DEFAULT NULL,
  `sexe` varchar(50) NOT NULL,
  `Nom_maternite` varchar(30) DEFAULT NULL,
  `Date_naissance` date DEFAULT NULL,
  `Lieu_naissance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Numero_demande`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `naissance`
--

INSERT INTO `naissance` (`Numero_demande`, `Nom_pere`, `Prenom_pere`, `Nom_mere`, `Prenom_mere`, `Fonction_pere`, `Fonction_mere`, `Contacte_pere`, `Contacte_mere`, `Lieu_habitation_pere`, `Lieu_habitation_mere`, `Nom_d`, `Prenom_d`, `Lien_parenter`, `Contact`, `Date_demande`, `Nom_e`, `Prenom_e`, `sexe`, `Nom_maternite`, `Date_naissance`, `Lieu_naissance`) VALUES
(21, 'Konan', 'Calvin', 'Amichia', 'Rocsan', 'Businessman ', 'Make-up Artiste ', 102010201, 1245789663, 'Koumassi', 'Koumassi', 'Konan', 'Calvin', 'Père', 792140203, '2023-06-16', 'Konan', 'Yves', 'Masculin', 'Maternité de 05', '2023-06-16', 'Koumassi'),
(23, 'Doumbouya', 'Amadou', 'Nikiema', 'Aidara', 'Etudiant', 'Coiffeuse', NULL, NULL, 'Koumassi', 'Koumassi', NULL, NULL, NULL, NULL, '2023-06-18', 'Doumbouya', 'Amidou', 'Masculin', 'Epp Sud', '2023-05-30', 'Koumassi'),
(22, 'Assoumou', 'Martial', 'Bedy', 'Clara', 'Etudiant', 'Etudiante', 104070809, 506020301, 'Yopougon', 'Yopougon', 'Assoumou', 'Martial', 'Père', 104070809, '2023-06-17', 'Assoumou', 'Jean', 'Masculin', 'Maternité de Bingerville', '2023-06-17', 'Bingerville (Abidjan)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
