-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 sep. 2022 à 11:45
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stagiaire_cachan`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220227182854', '2022-02-27 19:29:50', 117),
('DoctrineMigrations\\Version20220227192607', '2022-02-27 20:26:20', 39),
('DoctrineMigrations\\Version20220227194934', '2022-02-27 20:49:41', 72),
('DoctrineMigrations\\Version20220306171855', '2022-03-06 18:19:46', 26),
('DoctrineMigrations\\Version20220306172131', '2022-03-06 18:21:36', 20),
('DoctrineMigrations\\Version20220313185114', '2022-03-13 19:51:25', 33),
('DoctrineMigrations\\Version20220313191244', '2022-03-13 20:12:50', 22);

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

DROP TABLE IF EXISTS `enseigner`;
CREATE TABLE IF NOT EXISTS `enseigner` (
  `idMatiere` int(11) NOT NULL,
  `idFormateur` int(11) NOT NULL,
  PRIMARY KEY (`idMatiere`,`idFormateur`),
  KEY `IDX_663E85CD119C5519` (`idFormateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseigner`
--

INSERT INTO `enseigner` (`idMatiere`, `idFormateur`) VALUES
(3, 1),
(4, 1),
(1, 2),
(4, 2),
(2, 3),
(3, 3),
(5, 3),
(5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `idEvaluation` int(11) NOT NULL AUTO_INCREMENT,
  `note` smallint(6) DEFAULT NULL,
  `dateEvaluation` date DEFAULT NULL,
  `idMatiere` int(11) DEFAULT NULL,
  `idStagiaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEvaluation`),
  KEY `idMatiere` (`idMatiere`),
  KEY `idStagiaire` (`idStagiaire`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`idEvaluation`, `note`, `dateEvaluation`, `idMatiere`, `idStagiaire`) VALUES
(1, 20, '2021-04-01', 1, 1),
(2, 20, '2021-04-05', 2, 1),
(3, 15, '2021-04-15', 3, 1),
(5, 20, '2021-04-30', 5, 1),
(6, 15, '2021-04-26', 3, 1),
(7, 20, '2021-04-26', 1, 1),
(8, 14, '2021-04-01', 1, 2),
(9, 16, '2021-04-05', 1, 2),
(10, 13, '2021-04-06', 2, 2),
(11, 15, '2021-04-28', 3, 2),
(13, 13, '2021-04-01', 1, 8),
(14, 17, '2021-04-05', 1, 8),
(15, 14, '2021-04-13', 2, 8),
(16, 15, '2021-04-25', 3, 8),
(18, 16, '2021-04-01', 1, 3),
(19, 12, '2021-04-14', 2, 3),
(20, 16, '2021-04-20', 2, 3),
(21, 15, '2021-04-27', 3, 3),
(22, 14, '2021-04-01', 1, 4),
(23, 16, '2021-04-05', 1, 4),
(24, 16, '2021-04-12', 2, 4),
(25, 15, '2021-04-15', 3, 4),
(26, 16, '2021-04-01', 1, 5),
(27, 13, '2021-04-05', 2, 5),
(28, 15, '2021-04-20', 3, 5),
(30, 15, '2021-04-01', 1, 6),
(31, 14, '2021-04-07', 2, 6),
(32, 15, '2021-04-20', 3, 6),
(34, 14, '2021-04-01', 1, 7),
(35, 16, '2021-04-07', 2, 7),
(36, 15, '2021-04-20', 3, 7),
(38, -20, '2021-04-01', 1, 9),
(39, -20, '2021-04-06', 2, 9),
(40, 15, '2021-04-13', 3, 9),
(42, 17, '2021-04-01', 1, 10),
(43, 14, '2021-04-08', 2, 10),
(44, 15, '2021-04-14', 3, 10),
(46, 10, '2021-04-01', 1, 11),
(47, 10, '2021-04-09', 2, 11),
(48, 15, '2021-04-20', 3, 11),
(50, 15, '2021-04-01', 1, 12),
(51, 16, '2021-04-06', 2, 12),
(52, 15, '2021-04-21', 3, 12),
(54, 18, '2021-04-01', 1, 13),
(55, 16, '2021-04-08', 2, 13),
(56, 15, '2021-04-19', 3, 13),
(58, 15, '2021-04-01', 1, 14),
(59, 13, '2021-04-07', 2, 14),
(60, 15, '2021-04-14', 3, 14),
(62, 12, '2021-04-01', 1, 15),
(63, 18, '2021-04-06', 2, 15),
(64, 15, '2021-04-21', 3, 15),
(66, 18, '2021-04-01', 1, 16),
(67, 16, '2021-04-07', 2, 16),
(68, 15, '2021-04-21', 3, 16),
(70, 12, '2021-04-01', 1, 17),
(71, 17, '2021-04-07', 2, 17),
(72, 15, '2021-04-20', 3, 17);

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `idFormateur` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idFormateur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`idFormateur`, `prenom`, `nom`, `email`) VALUES
(1, 'christophe', 'gourdy', 'gourdy@gmail.com'),
(2, 'zia', 'mirian', 'mirian@gmail.com'),
(3, 'timothée', 'moulin', 'timomoulin@msn.com'),
(4, 'louis', 'de funès', 'louisdefunès@msn.com');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `nomMatiere` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idMatiere`, `nomMatiere`) VALUES
(1, 'HTML/CSS'),
(2, 'Javascript'),
(3, 'PHP'),
(4, 'CMS'),
(5, 'SQL');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

DROP TABLE IF EXISTS `stagiaire`;
CREATE TABLE IF NOT EXISTS `stagiaire` (
  `idStagiaire` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idStagiaire`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`idStagiaire`, `prenom`, `nom`, `email`) VALUES
(1, 'elias', 'aggoune', 'elias.aggoune@elias-agg.com'),
(2, 'abdelkarim', 'ben amar', 'abenamar@gmx.com'),
(3, 'mehdi', 'benabbou', 'mehdibenabbou95@gmail.com'),
(4, 'nouh', 'bensalem', 'bensalem.noe@gmail.com'),
(5, 'guillaume', 'boltz', 'boltzguillaume@gmail.com'),
(6, 'yannick', 'bonnaud', 'yannick1981@free.fr'),
(7, 'anthony', 'chaudey', 'antcha.dev@gmail.com'),
(8, 'abdoulaye', 'coulibaly', 'coulibaly.abdou@ymail.com'),
(9, 'grégoire', 'denis', 'greg41denis@gmail.com'),
(10, 'victor', 'emilio sensua', 'emiliosensuavictor@gmail.com'),
(11, 'nouara', 'ferhoune', 'ferhounenouara@yahoo.fr'),
(12, 'florian', 'gagnant', 'gagnantflorian@gmail.com'),
(13, 'faycal', 'hassaine', 'faycal.hasn@gmail.com'),
(14, 'ouahiba', 'idjennaden', 'ouahiba.idjennaden@gmail.com'),
(15, 'fabien', 'lecouve', 'fabien.lecouve@hotmail.com'),
(16, 'louis', 'nsimba', 'louis.nsimba@outlook.fr'),
(17, 'styven', 'ho-van-to', 'styven.hovanto@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`) VALUES
(1, 'abenamar@gmx.com', '$argon2id$v=19$m=65536,t=4,p=1$UXI1RlQ2T3dCOGNFVUZERw$DthZP69LZIPikaEnmSlkmlXjSaAAyg146RJZ/5ia+Q0', '[\"ROLE_ADMIN\"]'),
(3, 'azarkan.salma88@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$TzVocTBaTHRGUEFqTUwuaA$r4MnukN4KgSWGOibZv67j+782sELLX1HBX0vEbdcHxk', '[\"ROLE_USER\"]'),
(4, 'az@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$QnJBdDJMajZ1Wnh5UXU0bg$lHBZikTB2XEIDAaq69koARAtD27xB8V7DjHf2q98ppU', '[]');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `enseigner_ibfk_1` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`),
  ADD CONSTRAINT `enseigner_ibfk_2` FOREIGN KEY (`idFormateur`) REFERENCES `formateur` (`idFormateur`);

--
-- Contraintes pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`),
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`idStagiaire`) REFERENCES `stagiaire` (`idStagiaire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
