-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 avr. 2023 à 12:03
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
-- Base de données : `webshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

CREATE TABLE `collection` (
  `Id_coll` int(11) NOT NULL,
  `Name_coll` varchar(25) NOT NULL,
  `Img_coll` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `collection`
--

INSERT INTO `collection` (`Id_coll`, `Name_coll`, `Img_coll`) VALUES
(1, 'montres', 'https://wallpapercave.com/wp/wp1853731.jpg'),
(2, 'bracelets', 'https://wallpaperaccess.com/full/2135486.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Id_pro` int(11) NOT NULL,
  `Name_prod` varchar(50) NOT NULL,
  `Prix_prod` decimal(9,2) NOT NULL,
  `Description_prod` varchar(250) NOT NULL,
  `Img_prod` varchar(250) NOT NULL,
  `FK_Id_coll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_pro`, `Name_prod`, `Prix_prod`, `Description_prod`, `Img_prod`, `FK_Id_coll`) VALUES
(3, 'Astronomia Solar Bitcoin', '350000.00', 'Astronomia Solar Bitcoin. C’est le nom de la nouvelle montre pas comme les autres de la maison Jacob & Co. Ce modèle a été imaginé à la gloire de la plus célèbre des cryptomonnaies, le Bitcoin. En eff', 'https://media.gqmagazine.fr/photos/631755ed53299cb5db8e9448/1:1/w_900,h_900,c_limit/Jacob%20and%20co.jpg', 1),
(4, 'Astronomia Maestro', '750000.00', 'Seul Jacob & Co. pouvait avoir l’audace de présenter l’une des complications horlogères les plus sophistiquées dans un boîtier transparent qui montre, entre autres, un astronaute flottant au beau mili', 'https://static2.worldtempus.com/cache/article/jacob--amp--co/astronomia/j/a/jacob-astronomia-cover_crop_1396x781.jpg', 1),
(5, 'Bracelet Homme Perles en Pierres', '50.00', 'Bracelet Homme Perles en Pierres, un \"must have\" de pour la gente masculine toujours à la recherche d’élégance.\nCollection de bracelets faits à la main en pierres naturelles semi-précieuses et en mét', 'https://media.cdnws.com/_i/56367/m840-15030/3229/30/bracelet-homme-perles-en-pierres-gohappy-happy-hipster.jpeg', 2),
(6, 'Bracelet Perle Homme Luxe', '60.00', 'Bracelet De Luxe En Pierre Naturelle Pour Hommes Et Femmes, Bijou Perlé Fait À La Main, Tendance, Bracelet À B SL9915 - Achat / Vente Bracelet - Gourmette Bracelet De Luxe ', 'https://www.cdiscount.com/pdt2/1/1/0/1/700x700/auc7910131349110/rw/bracelet-de-luxe-en-pierre-naturelle-pour-hommes-e.jpg', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`Id_coll`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id_pro`),
  ADD KEY `FK_prod_coll` (`FK_Id_coll`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `collection`
--
ALTER TABLE `collection`
  MODIFY `Id_coll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `Id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_prod_coll` FOREIGN KEY (`FK_Id_coll`) REFERENCES `collection` (`Id_coll`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
