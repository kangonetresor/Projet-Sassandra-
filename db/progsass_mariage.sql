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
-- Base de données : `progsass_mariage`
--

-- --------------------------------------------------------

--
-- Structure de la table `mariage`
--

DROP TABLE IF EXISTS `mariage`;
CREATE TABLE IF NOT EXISTS `mariage` (
  `numero_demande` int NOT NULL AUTO_INCREMENT,
  `date_mariage` date DEFAULT NULL,
  `nom_mairie` varchar(50) DEFAULT NULL,
  `nom_epous` varchar(20) DEFAULT NULL,
  `prenom_epous` varchar(50) DEFAULT NULL,
  `nom_epouse` varchar(20) DEFAULT NULL,
  `prenom_epouse` varchar(50) DEFAULT NULL,
  `regime_matrimoniale` varchar(20) DEFAULT NULL,
  `nom_demandeur` varchar(20) DEFAULT NULL,
  `prenom_demandeur` varchar(50) DEFAULT NULL,
  `date_demande` date NOT NULL,
  `telephone` char(10) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `lien_avec_epous` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`numero_demande`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `mariage`
--

INSERT INTO `mariage` (`numero_demande`, `date_mariage`, `nom_mairie`, `nom_epous`, `prenom_epous`, `nom_epouse`, `prenom_epouse`, `regime_matrimoniale`, `nom_demandeur`, `prenom_demandeur`, `date_demande`, `telephone`, `ville`, `lien_avec_epous`) VALUES
(10, '2023-06-12', 'Koumassi Office', 'Kangone', 'Tresor', 'Chonou', 'Oriane Nancy', 'On réfléchit ', 'Kangone', 'Tresor', '0000-00-00', '0105605088', 'Abidjan', 'Epous'),
(12, '2023-06-13', 'Bassam', 'Assoumou', 'Maerial', 'Gnenewe', 'Eunice', 'Communauté de bien', 'kan', 'Treso', '2023-06-14', '0788375979', 'Abidjan', 'Ami'),
(14, '2023-06-07', 'Bruxelle', 'Adama ', 'Landry', 'Glazou', 'Rockia', 'Séparation de biens', 'Kangone', 'Tresor', '0000-00-00', '0105605088', 'Abidjan', 'Ami');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
