-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2024 at 09:25 PM
-- Server version: 8.2.0
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sae_biere_alauna`
--

-- --------------------------------------------------------

--
-- Table structure for table `biere`
--

DROP TABLE IF EXISTS `biere`;
CREATE TABLE IF NOT EXISTS `biere` (
  `ID_biere` int NOT NULL AUTO_INCREMENT,
  `Nom_biere` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Prix` int NOT NULL,
  `Gout` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_general_ci,
  `Taux` decimal(15,2) DEFAULT NULL,
  `Volume` int DEFAULT NULL,
  PRIMARY KEY (`ID_biere`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biere`
--

INSERT INTO `biere` (`ID_biere`, `Nom_biere`, `Prix`, `Gout`, `Description`, `Taux`, `Volume`) VALUES
(1, 'Pampa', 5, 'myrtille', 'Bienvenue dans un environnement plus chaud: la Pampa ! D’immenses plaines arides mélangées à de la verdure, voilà un paysage qui va en étonner plus d’un.\r\nLa myrtille, la saveur principale de la bière, nous plonge au cœur même des broussailles de la Pampa, ce qui nous permet de voyager à 100% et de découvrir ce milieu fascinant.\r\n\r\nIngrédients: eau, malt, houblons, levure, \r\narômes de myrtille.', 5.90, 75),
(2, 'Laponie', 5, 'résine de pins et menthe', 'Direction les danses envoûtantes des aurores boréales de la Laponie !\r\nDe grandes montagnes et des horizons glacés époustouflants qui sauront vous laisser sans voix. L\'arôme de résine de pins mélangé avec la menthe fraîche 🪴donnera un coup de frais à votre journée.\r\n\r\nIngrédients : eau, malt, houblons, levure, résine de pin, feuilles de menthe BIO.', 5.90, 75),
(3, 'Sahara', 5, 'grenade et hibiscus', 'Une vague de chaleur envahit cette destination : Le Sahara ! Cette vaste étendue de sable vous garantit le calme et un grand sentiment de liberté. Accrochez-vous à la fraîcheur de cette bière blonde au goût magique de grenade et une touche d’hibiscus.\r\n\r\nIngrédients: eau, malt, houblons, levure, \r\narômes de grenade, infusion hibiscus BIO.', 5.90, 75),
(4, 'Salinas-Grandes', 5, 'citron et coco', 'Et voici une toute nouvelle destination : on vous emmène découvrir les Salinas Grandes ! Ce désert de sel en Argentine laisse chaque personne qui le traverse bouche bée. Avec ses notes de citron et de coco, notre bière vous transportera dans l’immensité de ses plaines salées.\r\n\r\nIngrédients : eau, malt, houblons, levure, arômes de coco et citron.', 5.90, 75),
(5, 'Nevada', 5, 'saveurs tropicales', 'Rendez-vous à l’Ouest des Etats-Unis, dans les paysages orangés du Nevada ! Ces canyons géants vous feront perdre la tête ! Les saveurs tropicales de cette brune vous emmèneront au milieu de ce désert aride tout en vous rafraîchissant.\r\n\r\nIngrédients : eau, malt, houblons, levure, arôme tropical (ananas, mangue, goyave, orange, écorce d’orange, églantier, pomme, pétale de fleur).', 5.90, 75);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IdClient` int NOT NULL,
  `Email` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Nom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Prenom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Adresse` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Mdp` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Tel` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`IdClient`, `Email`, `Nom`, `Prenom`, `Adresse`, `Mdp`, `Tel`) VALUES
(0, 'mike.mouk@gmail.com', 'Mouk', 'Mike', '106 rue Bajot 77550 Moissy-Cramayel', '123456789abcdefg', '0761836198');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `IdCommande` int NOT NULL,
  `DateHeure` datetime DEFAULT NULL,
  `Montant` int DEFAULT NULL,
  `Statut` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `IdClient` int NOT NULL,
  PRIMARY KEY (`IdCommande`),
  KEY `IdClient` (`IdClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`IdCommande`, `DateHeure`, `Montant`, `Statut`, `IdClient`) VALUES
(0, '2024-03-26 15:57:31', 9, 'Livré', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` int DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `Nom_biere` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `IdCommande` int NOT NULL,
  `Nom_goodie` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Quantite` int DEFAULT NULL,
  PRIMARY KEY (`Nom_biere`,`IdCommande`,`Nom_goodie`),
  KEY `IdCommande` (`IdCommande`),
  KEY `Nom_1` (`Nom_goodie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contenir`
--

INSERT INTO `contenir` (`Nom_biere`, `IdCommande`, `Nom_goodie`, `Quantite`) VALUES
('Pampa', 0, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `equipe_brasserie`
--

DROP TABLE IF EXISTS `equipe_brasserie`;
CREATE TABLE IF NOT EXISTS `equipe_brasserie` (
  `prenom` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipe_brasserie`
--

INSERT INTO `equipe_brasserie` (`prenom`, `role`, `description`) VALUES
('Inès', 'Brasseuse', 'Inès a été présente lors de plusieurs étapes telles que : concasser le malt, prélever des échantillons de bière ou encore mettre la bière en bouteille. '),
('Léa', 'Brasseuse', 'Lors de la conception de la bière Léa a rincé les drêches et essorer le malt. Elle a aussi analyser les échantillons de bière lors de la fermentation.'),
('Curtis', 'Brasseur', 'Pour la création de la bière Curtis a retirer le malt et stériliser les cuves et finalement mis la bière en cuve pour la fermentation.');

-- --------------------------------------------------------

--
-- Table structure for table `equipe_com`
--

DROP TABLE IF EXISTS `equipe_com`;
CREATE TABLE IF NOT EXISTS `equipe_com` (
  `prenom` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`prenom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipe_com`
--

INSERT INTO `equipe_com` (`prenom`, `role`, `description`) VALUES
('Mariana', 'Cheffe de projet', ' Mariana est une personne rayonnante et sait gérer un projet à la perfection. Elle excelle dans son rôle de cheffe de projet.'),
('Flora', 'Community manager', 'Flora sait comment s’adresser à nos plus fidèles consommateurs comme à des inconnus via nos réseaux sociaux.'),
('Linus', 'Développeur Web', ' Linus code depuis son plus jeune âge et sait manier les différents langages. Il est toujours prêt à aider en PHP et en Javascript.'),
('Gladys', 'Designeuse', 'Gladys a l’œil pour déterminer les belles choses et sait aussi les créer, c’est pour cela que c’est elle qu’on a choisit comme designeuse.'),
('Tom', 'Analyste de marché', 'Tom sait où et comment trouver les infos. Il est le meilleur analyste et nous permet toujours d’identifier de nouvelles opportunités de marché et de développer des stratégies de marketing efficaces.');

-- --------------------------------------------------------

--
-- Table structure for table `goodies`
--

DROP TABLE IF EXISTS `goodies`;
CREATE TABLE IF NOT EXISTS `goodies` (
  `photo` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Prix` decimal(10,2) DEFAULT NULL,
  `Description` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`photo`),
  UNIQUE KEY `photo` (`photo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goodies`
--

INSERT INTO `goodies` (`photo`, `Nom`, `Prix`, `Description`) VALUES
(1, 'Sous de verre Nevada', 2.49, 'Sous-verre à l\'effigie d\'Alauna pour ceux qui aiment les canyons à perte de vue.'),
(2, 'Sous de verre Sahara', 2.49, 'Sous-verre à l\'effigie d\'Alauna pour ceux qui sont fans des étendues de sable à perte de vue.'),
(3, 'Sous de verre Pampa', 2.49, 'Sous-verre à l\'effigie d\'Alauna pour ceux qui veulent gravir leurs montagnes escarpées.'),
(4, 'Sous de verre Salinas Grandes', 2.49, 'Sous-verre à l\'effigie d\'Alauna pour ceux qui adorent mettre leur grain de sel.\r\n'),
(5, 'Sous de verre Laponie', 2.49, 'Sous-verre à l\'effigie d\'Alauna pour ceux qui veulent admirer les aurores boréales.'),
(6, 'T-shirt Alauna', 24.99, 'Un t-shirt confortable qui vous suivra dans tous vos voyages.'),
(7, 'Décapsuleur Alauna', 10.99, 'Décapsuleur fait en bois de chêne. Il vous permettra de vous transporter dans tout l\'univers d\'Alauna.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
