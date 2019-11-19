-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 18 nov. 2019 à 14:19
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `preferumdum`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', '2014-06-01 01:12:26', '2014-05-31 13:12:26'),
(65, 'Développeur full stack &amp; aut', 'CTO startup bomenko &amp; développeur des application web et mobile.', '2019-07-20 16:12:58', '2019-07-20 12:12:58'),
(70, 'Qu’est-ce qu’un tableau en JavaS', 'Le code postal de la ville de Ferney Voltaire est 01210. Ferney Voltaire se situe dans le département de l\'Ain de la région Auvergne-Rhône-Alpes.', '2019-07-20 20:57:36', '2019-07-20 16:57:36'),
(71, 'Comment Apprendre la Programmati', 'Toutes les étoiles sont aujourd’hui alignées pour vous permettre d’apprendre la programmation informatique. Les nouvelles technologies ont réduit les contraintes de temps, de localisation géographique et considérablement réduit les coûts associés à une telle formation. Il vous est même possible d’être diplômé(e) et de décrocher un job en vous formant exclusivement en ligne de chez vous. ', '2019-11-18 11:25:02', '2019-11-18 10:25:02'),
(72, 'Comment Apprendre la Programmati', 'Toutes les étoiles sont aujourd’hui alignées pour vous permettre d’apprendre la programmation informatique. Les nouvelles technologies ont réduit les contraintes de temps, de localisation géographique et considérablement réduit les coûts associés à une telle formation. Il vous est même possible d’être diplômé(e) et de décrocher un job en vous formant exclusivement en ligne de chez vous. ', '2019-11-18 11:25:27', '2019-11-18 10:25:27'),
(74, 'Les 13 passeurs décisifs de cett', 'Carvajal, Benzema, Bale, Hazard, Varane, Vinicius Jr., James, Kroos, Odriozola, Valverde, Marcelo, Rodrygo et Modric forment la liste. HallaMAdrid', '2019-11-18 14:18:28', '2019-11-18 13:18:28');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
