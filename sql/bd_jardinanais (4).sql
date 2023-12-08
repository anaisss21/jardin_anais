-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 28 nov. 2023 à 17:51
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_jardinanais`
--

-- --------------------------------------------------------

--
-- Structure de la table `tab_category`
--

CREATE TABLE `tab_category` (
  `ID` int NOT NULL,
  `nom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tab_category`
--

INSERT INTO `tab_category` (`ID`, `nom`) VALUES
(1, 'Rose'),
(2, 'fleur_fraiche'),
(3, 'fleur_seche'),
(4, 'bouquet'),
(5, 'plante'),
(6, 'decoration'),
(7, 'livraison');

-- --------------------------------------------------------

--
-- Structure de la table `tab_clients`
--

CREATE TABLE `tab_clients` (
  `ID` int NOT NULL,
  `Nomclients` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Prenomclients` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `telclients` varchar(14) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Emailclients` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Adressclients` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `villeclients` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_creationclients` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tab_clients`
--

INSERT INTO `tab_clients` (`ID`, `Nomclients`, `Prenomclients`, `telclients`, `Emailclients`, `Adressclients`, `villeclients`, `date_creationclients`) VALUES
(1, 'Rice', 'Charlotte', '0626269450', 'ricecharlote2@gmail.com', '12 rue des izards31200', 'Toulouse', '2023-11-27 12:03:57'),
(2, 'Pourret', 'Jaqueline', '0638389440', 'jaquypourret4@gmail.com', '3allee antonio machado31100', 'Toulouse', '2023-11-27 12:06:54'),
(3, 'Pinguoin', 'Paul', '0626263894', 'paul200@outlook.fr', '6allee jean jaures31000', 'Toulouse', '2023-11-27 12:08:48'),
(4, 'Duncan', 'Corinne', '0627273860', 'corinne320@outlook.fr', '12 rue belgrade', 'Paris', '2023-11-27 12:09:59');

-- --------------------------------------------------------

--
-- Structure de la table `tab_commandes`
--

CREATE TABLE `tab_commandes` (
  `ID` int NOT NULL,
  `ID_clients` int NOT NULL,
  `date_commande` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tab_commandes`
--

INSERT INTO `tab_commandes` (`ID`, `ID_clients`, `date_commande`) VALUES
(1, 1, '2023-11-27'),
(2, 2, '2023-11-27');

-- --------------------------------------------------------

--
-- Structure de la table `tab_panier`
--

CREATE TABLE `tab_panier` (
  `ID` int NOT NULL,
  `ID_commande` int NOT NULL,
  `ID_produit` int NOT NULL,
  `quantite` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tab_panier`
--

INSERT INTO `tab_panier` (`ID`, `ID_commande`, `ID_produit`, `quantite`) VALUES
(1, 1, 1, 2),
(2, 2, 3, 2),
(3, 2, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `tab_produits`
--

CREATE TABLE `tab_produits` (
  `ID` int NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `ID_category` int NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tab_produits`
--

INSERT INTO `tab_produits` (`ID`, `nom`, `prix`, `ID_category`, `image`) VALUES
(1, 'Rose rouge', 5.00, 1, 'rose_rouge.png'),
(2, 'rose_rose', 5.00, 1, 'rose.png'),
(3, 'rose_blanche', 5.00, 1, 'rose_blanche.png'),
(4, 'plante_grimpante', 20.00, 5, 'plante_grimpante.png'),
(5, 'plante_palmier', 30.00, 5, 'palmier.png'),
(6, 'plante_grasse', 30.00, 5, 'plante_grasse.png'),
(7, 'bouquet_enterrement', 40.00, 4, 'bouquet_enterment.png'),
(8, 'bouquet_mariage', 50.00, 4, 'bouquet_mariage.png'),
(9, 'bouquet_fleurseche', 55.00, 4, 'bouquet_fleurseche.png'),
(10, 'bouquet_fleurfraiche', 60.00, 4, 'bouquets_fraiches.png'),
(11, 'tulipe', 25.00, 2, 'tulipe.png'),
(12, 'orchide', 35.00, 2, 'orchidee.png'),
(13, 'muguet', 40.00, 2, 'muguet.png'),
(15, 'marguerite', 15.00, 3, 'marguerite.png'),
(16, 'decoration_evenement_travail', 100.00, 6, 'deco_evenement_travail.png'),
(17, 'decoration_mariage', 200.00, 6, 'deco_mariage.png'),
(18, 'decoration_naissance', 75.00, 6, 'deco_naissance.png'),
(19, 'decoration_celebration', 100.00, 6, 'deco_celebration.png'),
(20, 'livraison_produit', 20.00, 7, 'livraison_domicile.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tab_category`
--
ALTER TABLE `tab_category`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tab_clients`
--
ALTER TABLE `tab_clients`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tab_commandes`
--
ALTER TABLE `tab_commandes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tab_panier`
--
ALTER TABLE `tab_panier`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tab_produits`
--
ALTER TABLE `tab_produits`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tab_category`
--
ALTER TABLE `tab_category`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `tab_clients`
--
ALTER TABLE `tab_clients`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tab_commandes`
--
ALTER TABLE `tab_commandes`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tab_panier`
--
ALTER TABLE `tab_panier`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tab_produits`
--
ALTER TABLE `tab_produits`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
