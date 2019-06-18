-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 18 Juin 2019 à 17:27
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`a_id`, `titre`, `contenu`, `img`, `actif`, `id_user`, `id_cat`) VALUES
(3, 'test', 'hello', 'montagne.jpg', 1, 2, 1),
(4, 'test2', 'hello 2', '', 1, 3, 2),
(5, 'aaaaa', 'dsfdsf sdf sdf sdf sdf', '', 1, 3, 1),
(6, 'hahahahahha', 'af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad af azzafza azd zad ad ', '', 1, 3, 3),
(7, 'hhhhhhhhhhhhh', 'vdsqvdsvsvsdvsdv dss fsdf sdf sdf', '', 1, 3, 3),
(8, 'cours a pied', 'qsd qsd qsd qsdqsd qsd qsd qsdqsd qsd qsd qsdqsd qsd qsd qsdqsd qsd qsd qsdqsd qsd qsd qsdqsd qsd qsd qsdqsd qsd qsd qsdqsd qsd qsd qsd', '', 1, 2, 4),
(43, 'e', 'eeeeeeeeeeeee', 'image', 1, 1, 2),
(44, 'aa', 'aaazzz', 'image', 1, 1, 2),
(45, 'fzg', 'vgegzr', 'image', 1, 1, 3),
(46, 'test', 'test', 'image', 1, 1, 1),
(47, 'a', 'aaaaaa', 'a', 1, 1, 1),
(48, 'b', 'bbbb', 'b', 1, 1, 1),
(49, 'c', 'ccc', 'c', 1, 1, 1),
(50, 'd', 'dddd', 'd', 1, 1, 1),
(51, 'e', 'ee', 'e', 1, 1, 1),
(52, 'f', 'fff', 'f', 1, 1, 1),
(53, 'g', 'gg', 'g', 1, 1, 1),
(54, 'h', 'hhh', 'h', 1, 1, 1),
(55, 'i', 'iii', 'i', 1, 1, 1),
(56, 'j', 'jj', 'j', 1, 1, 1),
(57, 'k', 'kk', 'k', 1, 1, 1),
(58, 'l', 'lll', 'l', 1, 1, 1),
(59, 'm', 'mmm', 'm', 1, 1, 1),
(60, 'n', 'nnn', 'n', 1, 1, 1),
(61, 'o', 'oooo', 'o', 1, 1, 1);

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
-- Contenu de la table `categories`
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
-- Contenu de la table `users`
--

INSERT INTO `users` (`u_id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'cici', 'cici', 'cici@cici.fr', '702e4946e6db9b7a74b921fe85e83f32'),
(2, 'tata', 'tata', 'tata@tata.fr', '49d02d55ad10973b7b9d0dc9eba7fdf0'),
(3, 'titi', 'titi', 'titi@titi.fr', '5d933eef19aee7da192608de61b6c23d'),
(4, 'tutu', 'tutu', 'tutu@tutu.fr', 'bdb8c008fa551ba75f8481963f2201da'),
(5, 'cb', 'cb', 'cb@cb.fr', 'd0d7fdb6977b26929fb68c6083c0b439'),
(6, 'la', 'la', 'la@la.fr', 'c9089f3c9adaf0186f6ffb1ee8d6501c'),
(7, 'test2', 'test2', 'test@test.fr', '098f6bcd4621d373cade4e832627b4f6'),
(9, 'cc', 'cc', 'cc@cc.fr', 'e0323a9039add2978bf5b49550572c7c'),
(10, 'new', 'new', 'new@new.fr', '22af645d1859cb5ca6da0c484f1f37ea');

--
-- Index pour les tables exportées
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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
