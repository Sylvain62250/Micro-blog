-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 25 Avril 2017 à 18:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `micro_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `date` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `user_id`, `votes`) VALUES
(15, 'ssss', 1484662604, 0, 0),
(16, '1111', 1484662638, 0, 0),
(17, '22222', 1484662640, 0, 0),
(18, '33333', 1484662642, 0, 0),
(20, '55555', 1484662646, 0, 0),
(26, 'aaa', 1484868733, 0, 0),
(27, 'test', 0, 0, 0),
(28, 'aaaa', 0, 0, 0),
(29, 'ddd', 0, 0, 0),
(30, 'sdsdsds', 0, 0, 0),
(32, 'kkkkkkk', 1493136665, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `sid` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mdp`, `pseudo`, `sid`) VALUES
(1, '', '', '', 'test', 'test', '098f6bcd4621d373cade4e832627b4f61493136647'),
(3, 'username', 'username', 'username', 'username', 'username', '14c4b06b824ec593239362517f538b291484943732'),
(4, 'Sylvain', 'Leleu', 'sleleu62@gmail.com', 'test', 'Sylv6259', 'c703b8bde438c9c97295b3b99ce54d751490791616'),
(5, 'test', 'test', 'test@test.com', 'azer', 'azer', '13085a63a2b3e4beb7ab10ee395aefe41485875632');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
