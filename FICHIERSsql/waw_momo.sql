-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 avr. 2023 à 12:04
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `waw_momo`
--

-- --------------------------------------------------------

--
-- Structure de la table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'hugo', '1111'),
(2, 'a', '0');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `URL_IMG` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`ID`, `NAME`, `URL_IMG`) VALUES
(1, 'sandwich', 'sandwichs.jpg'),
(2, 'salade', 'salade.jpg'),
(3, 'boissons', 'jonny-caspari-sQNq223Rr54-unsplash.jpg'),
(4, 'plats indiens', 'momoSamosa.png'),
(5, 'plats thaïlandais', 'rizsautépoulet.jpg'),
(6, 'paninis', 'asnim-ansari-SqYmTDQYMjo-unsplash.jpg'),
(7, 'petites restaurations', 'jametlene-reskp-NzAZEE23_-Q-unsplash.jpg'),
(8, 'glaces', 'courtney-cook-66IZaW9LIpI-unsplash.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `ID` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `PRIX` decimal(5,2) NOT NULL,
  `COMMENTAIRE` varchar(250) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ID`, `nom`, `PRIX`, `COMMENTAIRE`, `menu_id`) VALUES
(1, 'Jambon fromage', '3.00', '', 1),
(2, 'Thon mayo/piqu', '3.50', '', 1),
(3, 'Poulet curry', '3.00', '', 1),
(4, 'Club', '3.50', '', 1),
(5, 'Américain', '4.00', '', 1),
(6, 'Salade de crabe', '3.50', '', 1),
(7, 'Martino', '3.50', '', 1),
(8, 'Poulet thaï', '3.50', '', 1),
(9, 'Poulet black pepper', '3.50', '', 1),
(10, 'Boulettes', '3.50', '', 1),
(11, 'Escalopes de poulet', '3.50', '', 1),
(12, 'Scampis à l\'ail', '4.50', '', 1),
(13, 'Salade tomates mozzarella', '7.00', '', 2),
(14, 'Salade césar au poulet', '9.00', '', 2),
(15, 'Salade de fêta aux olives', '7.00', '', 2),
(16, 'Café', '2.00', '', 3),
(17, 'Thé', '2.00', '', 3),
(18, 'Eau 50cl', '1.95', '', 3),
(19, 'Soft 33cl', '2.00', '', 3),
(20, 'Soft 50cl', '2.50', '', 3),
(21, 'Red bull', '3.00', '', 3),
(22, 'Bière 33cl', '2.00', '', 3),
(23, 'Duvel', '3.50', '', 3),
(24, 'Leffe', '3.50', '', 3),
(25, 'Chimay', '3.50', '', 3),
(26, 'Singha thaï', '3.00', '', 3),
(27, 'Vin par verre', '3.00', '', 3),
(28, 'Vin 25cl', '4.00', '', 3),
(29, 'Vin 75cl', '15.00', '', 3),
(30, 'Momo 10 pces', '8.00', '', 4),
(31, 'Tandoori chicken 2 pces', '10.00', '', 4),
(32, 'Samosa poulet 3 pces', '6.00', '', 4),
(33, 'Samosa veg 3 pces', '5.00', '', 4),
(34, 'Dal makhani', '10.00', '', 4),
(35, 'Mix vegetable', '10.00', '', 4),
(36, 'Veg korma', '10.00', '', 4),
(37, 'Chicken vindaloo', '12.00', '', 4),
(38, 'Chicken korma', '12.00', '', 4),
(39, 'Butter chicken', '12.00', '', 4),
(40, 'Chicken tikka massala', '12.00', '', 4),
(41, 'Chicken tikka', '13.00', '', 4),
(42, 'Tradittional lamb curry', '15.00', '', 4),
(43, 'Loempia porc 4 pces', '5.00', '', 5),
(44, 'Pad Thaï', '10.00', '', 5),
(45, 'Pad Thaï scampis', '11.00', '', 5),
(46, 'Pad Kha Pau poulet', '12.00', '', 5),
(49, 'Laab poulet', '11.00', '', 5),
(50, 'Panang poulet', '12.00', '', 5),
(51, 'Green curry poulet', '13.00', '', 5),
(52, 'Jambon Parme / Fromage / Tomat', '4.50', '', 6),
(53, 'Tomates mozzarella / pesto', '4.50', '', 6),
(54, 'Soupe avec pain', '3.00', 'disponible par saisons hivernales', 7),
(55, 'Croque-monsieur', '4.00', '', 7),
(56, 'Cornet de pâtes', '4.00', '', 7),
(57, 'Spaghettis bolo maison', '8.00', '', 7),
(58, 'Crème glacée (par boule)', '16.00', 'commentaires', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_produits_du_menu` (`menu_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_produits_du_menu` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
