-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Client: sql304.byethost.com
-- Généré le: Lun 23 Avril 2018 à 17:26
-- Version du serveur: 5.6.35-81.0
-- Version de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `b22_19284802_aux3fleurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `compositions`
--

CREATE TABLE IF NOT EXISTS `compositions` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compositions`
--

INSERT INTO `compositions` (`id`, `image`, `description`, `prix`, `nom`) VALUES
(1, 'http://aux3fleurs.byethost22.com/fleurs/aniwa.jpg', 'Panier de fleurs variees', 53, 'Aniwa'),
(2, 'http://aux3fleurs.byethost22.com/fleurs/kos.jpg', 'Coup de charme jaune', 38, 'Kos'),
(3, 'http://aux3fleurs.byethost22.com/fleurs/luzon.jpg', 'Coup de charme vert', 41, 'Luzon'),
(4, 'http://aux3fleurs.byethost22.com/fleurs/loth.jpg', 'Bel arrangement de fleurs de saison', 68, 'Loth'),
(5, 'http://aux3fleurs.byethost22.com/fleurs/makin.jpg', 'Très beau panier de fleurs precieuses', 98, 'Makin'),
(6, 'http://aux3fleurs.byethost22.com/fleurs/mosso.jpg', 'Bel assemblage de fleurs precieuses', 68, 'Mosso'),
(7, 'http://aux3fleurs.byethost22.com/fleurs/rawaki.jpg', 'Presentation prestigieuse', 128, 'Rawaki');

-- --------------------------------------------------------

--
-- Structure de la table `fleurs`
--

CREATE TABLE IF NOT EXISTS `fleurs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fleurs`
--

INSERT INTO `fleurs` (`id`, `image`, `description`, `prix`, `nom`) VALUES
(1, 'http://aux3fleurs.byethost22.com/fleurs/philippines.jpg', 'Fuseau de roses multicolores', 63, 'Philippines'),
(2, 'http://aux3fleurs.byethost22.com/fleurs/grenadines.jpg', 'Bouquet de roses rouges', 50, 'Grenadines'),
(3, 'http://aux3fleurs.byethost22.com/fleurs/comores.jpg', 'Bouquet de roses multicolores', 58, 'Comores'),
(4, 'http://aux3fleurs.byethost22.com/fleurs/mayotte.jpg', 'Bouquet de petites roses', 48, 'Mayotte'),
(5, 'http://aux3fleurs.byethost22.com/fleurs/pukapuka.jpg', 'Petit bouquet de roses roses', 43, 'Pukapuka'),
(6, 'http://aux3fleurs.byethost22.com/fleurs/seychelles.jpg', 'Panier de roses multicolores', 78, 'Seychelles'),
(7, 'http://aux3fleurs.byethost22.com/fleurs/mariejaune.jpg', 'Bouquet de roses jaunes', 78, 'Mariejaune');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `societe` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `plantes`
--

CREATE TABLE IF NOT EXISTS `plantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `plantes`
--

INSERT INTO `plantes` (`id`, `image`, `description`, `prix`, `nom`) VALUES
(1, 'http://aux3fleurs.byethost22.com/fleurs/galante.jpg', 'Pot de phalaonopsis', 58, 'Galante'),
(2, 'http://aux3fleurs.byethost22.com/fleurs/anthurium.jpg', 'Plantes fleuries', 43, 'Anthurium'),
(3, 'http://aux3fleurs.byethost22.com/fleurs/lifou.jpg', 'Assemblage paysage', 103, 'Lifou'),
(4, 'http://aux3fleurs.byethost22.com/fleurs/papouasie.jpg', 'Pot de mitonia mauve', 83, 'Papouasie'),
(5, 'http://aux3fleurs.byethost22.com/fleurs/pianosa.jpg', 'Pot de phalanonopsis blanc', 58, 'Pianosa'),
(6, 'http://aux3fleurs.byethost22.com/fleurs/sabana.jpg', 'Pot de phalanonopsis mauve', 58, 'Sabana'),
(7, 'http://aux3fleurs.byethost22.com/fleurs/losroques.jpg', 'Belle coupe de plantes blanches', 58, 'Losroques');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'maureen', 'mdp'),
(2, 'allan', 'mdp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
