-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 24 Mai 2020 à 15:46
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lensshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idarticle` int(11) NOT NULL,
  `titre` text NOT NULL,
  `descri` text NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`idarticle`, `titre`, `descri`, `prix`, `photo`) VALUES
(1, 'Adaptateurs EOS R', 'Utilisez vos objectifs EF et EF-S existants avec le nouvel appareil photo EOS R et repoussez les limites de votre créativité.', 60, '../public\\assets\\img\\adaptors_318365189665423.jpg'),
(2, 'EF-S', 'Des objectifs légers, offrant de superbes prises de vue aux appareils photo reflex avec capteurs APS-C.', 12, '../public\\assets\\img\\gamme ef-s.jpg'),
(3, 'EF-M', 'Des objectifs légers et portables conçus exclusivement pour les appareils photo EOS M.', 12, '../public\\assets\\img\\ef-m.jpg'),
(4, 'Focale fixe EF', 'Des objectifs associant qualité d\'image, taille compacte et grandes ouvertures maximales.', 12, '../public\\assets\\img\\gamme focal fix ef.jpg'),
(5, 'Objectifs RF', 'Des objectifs permettant de changer de cadrage en tournant simplement la bague de zoom.', 12, '../public\\assets\\img\\Zoom_317348669854370.jpg'),
(6, 'Macro', 'Conçu pour révéler les moindres détails - Parfait pour photographier les fleurs et les insectes.', 60, '../public\\assets\\img\\Macro_168733072721902.jpg'),
(7, 'Bascule et décentrement', 'Contrôlez votre perspective et votre plan focal grâce à ces  objectifs spécialisés.', 12, '../public\\assets\\img\\Tilt-Shift_172194903893890.jpg'),
(8, 'Multiplicateurs de focale', 'Augmentez la portée de votre objectif et rapprochez-vous de votre sujet.', 12, '../public\\assets\\img\\Extenders_158628571845866.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `idCompte` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `nickname` varchar(40) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` enum('female','male','other') NOT NULL,
  `lastpurchase` datetime NOT NULL,
  `historical` int(11) NOT NULL,
  `lang` enum('fr','an') NOT NULL,
  `number` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `country` varchar(9) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `email`, `password`, `firstname`, `lastname`, `nickname`, `birthdate`, `sex`, `lastpurchase`, `historical`, `lang`, `number`, `adresse`, `country`, `zip`) VALUES
(49, 'gfhjgfdh@gmail.com', 'aaa', 'Younes', 'Fourti', '', '0000-00-00', '', '0000-00-00 00:00:00', 0, 'fr', 0, '128 Avenue du 8 Mai 1945,', 'france', 0),
(61, 'y6652fsdf1175@gmail.com', 'aze', 'Younes', 'Fourti', '', '0000-00-00', '', '0000-00-00 00:00:00', 0, 'fr', 0, '1 rue achille domart', 'france', 0),
(62, 'y665sdfsdf21175@gmail.com', 'd', 'Younes', 'Fourti', '', '0000-00-00', '', '0000-00-00 00:00:00', 0, 'fr', 0, '1 rue achille domart', 'france', 0),
(63, 'y66521175@gmail.com', 'z', 'h', '5', '', '0000-00-00', '', '0000-00-00 00:00:00', 0, 'fr', 0, '1 rue achille domart', 'france', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idarticle`),
  ADD UNIQUE KEY `idarticle` (`idarticle`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`idCompte`),
  ADD UNIQUE KEY `idCompte` (`idCompte`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idarticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `idCompte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
