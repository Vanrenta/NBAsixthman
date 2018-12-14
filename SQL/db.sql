-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 14 déc. 2018 à 19:15
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `nbasixthman`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `mail` varchar(100) NOT NULL,
  `date_inscription` date NOT NULL,
  `modo` tinyint(1) NOT NULL,
  `favorite_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `pass`, `mail`, `date_inscription`, `modo`, `favorite_team`) VALUES
(1, 'Deadsayk', '$2y$10$DGPkvP4s5EqA/rcJAvLYAOVuoPcBSDCworDlMzCZlqOL7ZtnBhVpG', 'avlosc59@gmail.com', '2018-04-09', 1, 'GoldenStateWarriors'),
(3, 'amélie', '$2y$10$/DFpNCQPboVM77V5daIxc.9nGEBtAooAxuhmxRdgP9Cgr.SH4JDF2', 'amelievrtg59@gmail.com', '2018-05-19', 0, 'Minnesota Timberwolves'),
(4, 'Brie59', '$2y$10$cwkU2PiN0GlnB7UZmBypBevhitfPzMSaWjFs/eyfEwu.p7kYezPoK', 'vanbrig2003@yahoo.fr', '2018-05-19', 0, 'San'),
(5, 'antelie', '$2y$10$FL0S1ltz6sum67VSKMHkSOatN.IgXdOjrfUHsSQOHL77yJWkkZyZS', 'antelie66@gmail.com', '2018-05-19', 0, 'MilwaukeeBucks'),
(6, 'you', '$2y$10$dxadopDcoHAexJku.Z7ddeq7OJudpus7U6Q7G86qtV64htcmcqjgy', 'you@gmail.com', '2018-05-31', 0, 'DetroitPistons');

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `birthday` date NOT NULL,
  `team` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`, `birthday`, `team`) VALUES
(1, 'Stephen', 'Curry', '0000-00-00', 'GoldenStateWarriors'),
(2, 'Kevin', 'Durant', '0000-00-00', 'GoldenStateWarriors'),
(3, 'Klay', 'Thompson', '0000-00-00', 'GoldenStateWarriors'),
(4, 'Draymond', 'Green', '1990-03-04', 'GoldenStateWarriors'),
(5, 'LeBron', 'James', '1984-12-30', 'ClevelandCavaliers'),
(6, 'Irving', 'Kyrie', '1992-03-23', 'BostonCeltics');

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `franchise` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date_creation` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `teams`
--

INSERT INTO `teams` (`id`, `franchise`, `city`, `date_creation`) VALUES
(1, 'Warriors', 'Golden State', 1946),
(2, 'Cavaliers', 'Cleveland', 1970),
(3, 'Celtics', 'Boston', 1946),
(4, 'Rockets', 'Houston', 1967),
(5, 'Jazz', 'Utah', 1974),
(6, 'Pelicans', 'New Orleans', 2002),
(7, '76ers', 'Philadelphia', 1939),
(8, 'Raptors', 'Toronto', 1995),
(9, 'Timberwolves', 'Minnesota', 1989),
(10, 'Thunder', 'Oklahoma City', 2008),
(11, 'Trail Blazers', 'Portland', 1970),
(12, 'Spurs', 'San Antonio', 1967),
(13, 'Wizards', 'Washington', 1961),
(14, 'Pacers', 'Indiana', 1967),
(15, 'Heat', 'Miami', 1988),
(16, 'Bucks', 'Milwaukee', 1968),
(17, 'Nuggets', 'Denver', 1967),
(18, 'Clippers', 'Los Angeles', 1970),
(19, 'Lakers', 'Los Angeles', 1949),
(20, 'Kings', 'Sacramento', 1945),
(21, 'Suns', 'Phoenix', 1968),
(22, 'Mavericks', 'Dallas', 1980),
(23, 'Grizzlies', 'Memphis', 1995),
(24, 'Pistons', 'Detroit', 1941),
(25, 'Nets', 'Brooklyn', 1967),
(26, 'Knicks', 'New York', 1946),
(27, 'Bulls', 'Chicago', 1966),
(28, 'Hawks', 'Atlanta', 1968),
(29, 'Hornets', 'Charlotte', 1988),
(30, 'Magic', 'Orlando', 1989),
(31, 'Dogues', 'Kansas City', 2018);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;