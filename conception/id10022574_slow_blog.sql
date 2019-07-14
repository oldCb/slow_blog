-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 02 juil. 2019 à 21:04
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `slow_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `a_id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` mediumtext NOT NULL,
  `img` varchar(100) NOT NULL,
  `actif` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`a_id`, `titre`, `contenu`, `img`, `actif`, `id_user`, `id_cat`) VALUES
(69, 'Lavande', 'Très grande calmante, l\'huile essentielle de Lavande fine de Provence est connue pour ses vertus relaxantes et équilibrantes. L\'huile essentielle de Lavande fine de Provence est aussi réputée pour ses propriétés régénérantes et réparatrices. Purifiante, l\'huile essentielle de Lavande fine de Provence fait des merveilles dans les soins cutané.', '1561376165.jpg', 1, 1, 1),
(70, 'Jojoba', 'Régulatrice et assouplissante, cette huile est un ingrédient apprécié pour son toucher pénérant qui ne laisse pas de film gras. Elle protége la peau de la déshydratation et est idéale comme support pour créer des huiles de massage et des soins démaquillants.', '1561376198.jpg', 1, 1, 2),
(71, 'Beurre de karité', 'Très riche en insaponifiables et vitamines, ce beurre est indispensable dans vos soins maison : il protège, adoucit et restructure les peaux abîmées. Incorporé à vos préparations capillaires, il nourrit et redonne brillance et beauté aux cheveux. ', '1561376252.jpg', 1, 1, 3),
(72, 'Tea Tree', 'Purifiante à large spectre et très douce, c\'est une incontournable de l\'aromathérapie. Elle est notamment recommandée en accompagnement lors des épisodes infectieux. Tonique, assainissante, protectrice, elle est appréciée pour de nombreuses vertus.', '1561376561.jpg', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `nom_cat` varchar(50) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`c_id`, `nom_cat`, `active`) VALUES
(1, 'huiles essentielles', 1),
(2, 'huiles vegetales', 1),
(3, 'beurres vegetaux', 1),
(4, 'recettes', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`u_id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'cici', 'cici', 'cici@cici.fr', '702e4946e6db9b7a74b921fe85e83f321f2ezger3587');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
