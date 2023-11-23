-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 jan. 2022 à 04:47
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'anoirabdallah@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `customer_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`) VALUES
(1, 'Anoir Abdallah', 'anoirabdallah@gmail.com', '123456', 'Tunisia', 'Mahdia', '20333455', 'AV Mars 1934', 'qaz.jpg'),
(0, 'admin', 'admin@gmail.com', '123456', 'France', 'Nice', '45454318', 'Test', 'a.jpg'),
(0, 'admin', 'admin@gmail.com', '123456', 'France', 'Nice', '45454318', 'Test', 'a.jpg'),
(0, 'admin', 'admin@gmail.com', '123456', 'France', 'Nice', '45454318', 'Test', 'a.jpg'),
(0, 'admin', 'admin@gmail.com', '123456', 'France', 'Nice', '12345688', 'Test', 'a.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Ville` varchar(15) NOT NULL,
  `Categorie` varchar(15) NOT NULL,
  `Annee` int(4) NOT NULL,
  `Marque` varchar(15) NOT NULL,
  `Couleur` varchar(15) NOT NULL,
  `TCarr` varchar(15) NOT NULL,
  `Carburant` varchar(15) NOT NULL,
  `Description` text NOT NULL,
  `Km` int(6) NOT NULL,
  `Prix` int(4) NOT NULL,
  `Photo` varchar(15) NOT NULL,
  `DateAnnance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`Id`, `Name`, `Email`, `Phone`, `Ville`, `Categorie`, `Annee`, `Marque`, `Couleur`, `TCarr`, `Carburant`, `Description`, `Km`, `Prix`, `Photo`, `DateAnnance`) VALUES
(1, 'Anouar', 'Anouar@gmail.com', 20496515, 'Mahdia', 'Mini', 2016, 'Audi', 'Bleu', 'Coupe', 'Diesel', 'salam cava', 100000, 150000, 'a.jpg', '2018-04-14'),
(2, 'Raed', 'Raed@gmail.com', 20452412, 'Mahdia', 'IntermÃ©diaire', 2018, 'Ford', 'Bleu', 'Cabriolets', 'GPL', 'hey salam cava chi jaadid walou ok bye apres je suis ok ok cava', 29000, 95000, 'cr.jpg', '2018-04-14'),
(3, '<strong>M</stro', 'm8.45com', 33333333, 'Tunis', 'RoutiÃ¨re', 2020, 'Honda', 'Jaune', 'Monospace', 'GNV', 'aaaaaaa11111111111122@@@@@@\r\n<strong>blahblah</strong>', 300000, 200000, 'classesImg.png', '2018-04-14'),
(4, 'mohamed', 'khalid@gmailstrong.com', 63353525, 'Sousse', 'Mini', 2017, 'BMW', 'Gris', 'Berline', 'GNV', 'salam 1 cava 2 ok 3', 10000, 85000, 'aa.png', '2018-04-15'),
(5, 'simo', 'sdfsdf@fdsf.com', 67852146, 'Nabeul', 'Mini', 2015, 'Audi', 'Rouge', 'Berline', 'Diesel', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 60000, 140000, 'b.jpg', '2018-04-15'),
(6, 'simo', 'sdfsdf@fdsf.com', 67852146, 'Zaghoua', 'Mini', 2015, 'Audi', 'Rouge', 'Berline', 'Diesel', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 60000, 140000, 'b.jpg', '2018-04-15'),
(7, 'lotf', 'hhhah@gmail.fr', 61236987, 'Monastir', 'SUV', 2011, 'Mercedes', 'Gris', 'Cabriolets', 'Diesel', 'Chrome , mozilla ,VL ,flah player aaa bbbb cccc ddd eee fff', 30000, 85000, 'bg.jpg', '2018-04-15'),
(8, 'aa', 'dd@gm.com', 21474836, 'Sfax', 'Intermediaire', 1998, 'Audi', 'Noir', 'Berline', 'Essence', 'hhh', 50, 100000, 'email.png', '2018-04-15');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
