-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 jan. 2023 à 02:39
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `web`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `charge_horaire` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `nom`, `prenom`, `charge_horaire`, `utilisateur_id`) VALUES
(1313, 'Gretete', 'Driss', 70, 13),
(121212, 'Oumaira', 'Ilham', 70, 12);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant_module`
--

CREATE TABLE `enseignant_module` (
  `enseignant_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enseignant_module`
--

INSERT INTO `enseignant_module` (`enseignant_id`, `module_id`) VALUES
(121212, 9),
(121212, 10),
(121212, 13);

-- --------------------------------------------------------

--
-- Structure de la table `etatsallejour`
--

CREATE TABLE `etatsallejour` (
  `id_esj` int(11) NOT NULL,
  `h_d` varchar(255) DEFAULT NULL,
  `h_f` varchar(255) DEFAULT NULL,
  `id_jour` int(11) DEFAULT NULL,
  `id_salle` int(11) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etatsallejour`
--

INSERT INTO `etatsallejour` (`id_esj`, `h_d`, `h_f`, `id_jour`, `id_salle`, `etat`) VALUES
(97, '8:30', '10:30', 1, 13, 'occupied'),
(98, '10:45', '12:45', 1, 13, 'occupied'),
(99, '14:00', '16:00', 1, 13, 'empty'),
(100, '16:15', '18:15', 1, 13, 'empty'),
(101, '8:30', '10:30', 2, 13, 'occupied'),
(102, '10:45', '12:45', 2, 13, 'empty'),
(103, '14:00', '16:00', 2, 13, 'occupied'),
(104, '16:15', '18:15', 2, 13, 'empty'),
(105, '8:30', '10:30', 3, 13, 'occupied'),
(106, '10:45', '12:45', 3, 13, 'empty'),
(107, '14:00', '16:00', 3, 13, 'empty'),
(108, '16:15', '18:15', 3, 13, 'empty'),
(109, '8:30', '10:30', 4, 13, 'empty'),
(110, '10:45', '12:45', 4, 13, 'empty'),
(111, '14:00', '16:00', 4, 13, 'empty'),
(112, '16:15', '18:15', 4, 13, 'empty'),
(113, '8:30', '10:30', 5, 13, 'occupied'),
(114, '10:45', '12:45', 5, 13, 'empty'),
(115, '14:00', '16:00', 5, 13, 'empty'),
(116, '16:15', '18:15', 5, 13, 'empty'),
(117, '8:30', '10:30', 6, 13, 'empty'),
(118, '10:45', '12:45', 6, 13, 'empty'),
(119, '14:00', '16:00', 6, 13, 'empty'),
(120, '16:15', '18:15', 6, 13, 'empty'),
(121, '8:30', '10:30', 1, 14, 'empty'),
(122, '10:45', '12:45', 1, 14, 'empty'),
(123, '14:00', '16:00', 1, 14, 'empty'),
(124, '16:15', '18:15', 1, 14, 'empty'),
(125, '8:30', '10:30', 2, 14, 'empty'),
(126, '10:45', '12:45', 2, 14, 'empty'),
(127, '14:00', '16:00', 2, 14, 'empty'),
(128, '16:15', '18:15', 2, 14, 'empty'),
(129, '8:30', '10:30', 3, 14, 'empty'),
(130, '10:45', '12:45', 3, 14, 'empty'),
(131, '14:00', '16:00', 3, 14, 'empty'),
(132, '16:15', '18:15', 3, 14, 'empty'),
(133, '8:30', '10:30', 4, 14, 'empty'),
(134, '10:45', '12:45', 4, 14, 'empty'),
(135, '14:00', '16:00', 4, 14, 'empty'),
(136, '16:15', '18:15', 4, 14, 'empty'),
(137, '8:30', '10:30', 5, 14, 'empty'),
(138, '10:45', '12:45', 5, 14, 'empty'),
(139, '14:00', '16:00', 5, 14, 'empty'),
(140, '16:15', '18:15', 5, 14, 'empty'),
(141, '8:30', '10:30', 6, 14, 'empty'),
(142, '10:45', '12:45', 6, 14, 'empty'),
(143, '14:00', '16:00', 6, 14, 'empty'),
(144, '16:15', '18:15', 6, 14, 'empty'),
(145, '8:30', '10:30', 1, 15, 'empty'),
(146, '10:45', '12:45', 1, 15, 'empty'),
(147, '14:00', '16:00', 1, 15, 'empty'),
(148, '16:15', '18:15', 1, 15, 'empty'),
(149, '8:30', '10:30', 2, 15, 'empty'),
(150, '10:45', '12:45', 2, 15, 'empty'),
(151, '14:00', '16:00', 2, 15, 'empty'),
(152, '16:15', '18:15', 2, 15, 'empty'),
(153, '8:30', '10:30', 3, 15, 'empty'),
(154, '10:45', '12:45', 3, 15, 'empty'),
(155, '14:00', '16:00', 3, 15, 'empty'),
(156, '16:15', '18:15', 3, 15, 'empty'),
(157, '8:30', '10:30', 4, 15, 'empty'),
(158, '10:45', '12:45', 4, 15, 'empty'),
(159, '14:00', '16:00', 4, 15, 'empty'),
(160, '16:15', '18:15', 4, 15, 'empty'),
(161, '8:30', '10:30', 5, 15, 'empty'),
(162, '10:45', '12:45', 5, 15, 'empty'),
(163, '14:00', '16:00', 5, 15, 'empty'),
(164, '16:15', '18:15', 5, 15, 'empty'),
(165, '8:30', '10:30', 6, 15, 'empty'),
(166, '10:45', '12:45', 6, 15, 'empty'),
(167, '14:00', '16:00', 6, 15, 'empty'),
(168, '16:15', '18:15', 6, 15, 'empty');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `charge_horaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `nom`, `code`, `charge_horaire`) VALUES
(11, '1ere année classe préparatoire ', 'CP1', 800),
(12, '2eme année classe préparatoire', 'CP2', 800),
(13, '1ere année génie informatique', 'CI1 Info', 800),
(14, '1ere année cycle électrique', 'CI1 Elect', 800);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `filiere` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `nombre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `type`, `filiere`, `section`, `module_id`, `nombre`) VALUES
(1, 'Cours', '11', 'A', 9, 70),
(2, 'Cours', '12', 'A', 11, 70),
(3, 'TD', '12', 'B', 12, 70),
(6, 'Cours', '13', 'GI', 13, 100);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_module`
--

CREATE TABLE `groupe_module` (
  `groupe_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `groupe_module`
--

INSERT INTO `groupe_module` (`groupe_id`, `module_id`) VALUES
(1, 9),
(2, 11),
(3, 12),
(6, 13);

-- --------------------------------------------------------

--
-- Structure de la table `jour`
--

CREATE TABLE `jour` (
  `id_jour` int(11) NOT NULL,
  `nom_j` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `jour`
--

INSERT INTO `jour` (`id_jour`, `nom_j`) VALUES
(1, 'Lundi'),
(2, 'Mardi'),
(3, 'Mercredi'),
(4, 'Jeudi'),
(5, 'Vendredi'),
(6, 'Samedi'),
(7, 'Dimanche');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `filiere_id` int(11) DEFAULT NULL,
  `semestre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `nom`, `code`, `filiere_id`, `semestre_id`) VALUES
(9, 'Mathématiques', 'Analyse 1', 11, 6),
(10, 'Algèbre', 'arithmétique ', 11, 6),
(11, 'Mécanique', 'Meca', 12, 7),
(12, 'Chimie', 'C', 12, 7),
(13, 'Technologie web', 'web', 13, 8);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `capacite_accueil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `nom`, `capacite_accueil`) VALUES
(13, 'C1', 146),
(14, 'C2', 146),
(15, 'C3', 70);

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id_seance` int(11) NOT NULL,
  `h_d` varchar(255) DEFAULT NULL,
  `h_f` varchar(255) DEFAULT NULL,
  `id_jour` int(11) DEFAULT NULL,
  `id_module` int(11) DEFAULT NULL,
  `id_enseignant` int(11) DEFAULT NULL,
  `id_salle` int(11) DEFAULT NULL,
  `id_groupe` int(11) DEFAULT NULL,
  `id_filiere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id_seance`, `h_d`, `h_f`, `id_jour`, `id_module`, `id_enseignant`, `id_salle`, `id_groupe`, `id_filiere`) VALUES
(89, '8:30', '10:30', 1, 9, 121212, 13, 1, 11),
(90, '10:45', '12:45', 1, 10, 121212, 13, 1, 11),
(96, '8:30', '10:30', 2, 13, 121212, 13, 6, 13),
(97, '8:30', '10:30', 5, 9, 121212, 13, 6, 13);

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`id`, `numero`, `debut`, `fin`) VALUES
(6, 1, '2022-09-19', '2023-01-20'),
(7, 3, '2022-09-19', '2023-01-20'),
(8, 5, '2022-09-19', '2023-01-20');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `photo_profil` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mot_de_passe`, `photo_profil`, `role`) VALUES
(10, 'admin', 'Fatiha', 'azerty', 'Mrid.png', 'admin'),
(12, 'Oumaira', 'Ilham', 'azerty', 'Oumaira.png', 'enseignant'),
(13, 'Gretete', 'Driss', 'azerty', 'SANS_IMAGE.png', 'enseignant');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`);

--
-- Index pour la table `enseignant_module`
--
ALTER TABLE `enseignant_module`
  ADD PRIMARY KEY (`enseignant_id`,`module_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Index pour la table `etatsallejour`
--
ALTER TABLE `etatsallejour`
  ADD PRIMARY KEY (`id_esj`),
  ADD KEY `id_jour` (`id_jour`),
  ADD KEY `id_salle` (`id_salle`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`);

--
-- Index pour la table `groupe_module`
--
ALTER TABLE `groupe_module`
  ADD PRIMARY KEY (`groupe_id`,`module_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Index pour la table `jour`
--
ALTER TABLE `jour`
  ADD PRIMARY KEY (`id_jour`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filiere_id` (`filiere_id`),
  ADD KEY `semestre_id` (`semestre_id`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `id_jour` (`id_jour`),
  ADD KEY `id_module` (`id_module`),
  ADD KEY `id_enseignant` (`id_enseignant`),
  ADD KEY `id_salle` (`id_salle`),
  ADD KEY `id_groupe` (`id_groupe`),
  ADD KEY `seance_ibfk_6` (`id_filiere`);

--
-- Index pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etatsallejour`
--
ALTER TABLE `etatsallejour`
  MODIFY `id_esj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `jour`
--
ALTER TABLE `jour`
  MODIFY `id_jour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id_seance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `enseignant_module`
--
ALTER TABLE `enseignant_module`
  ADD CONSTRAINT `enseignant_module_ibfk_1` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `enseignant_module_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);

--
-- Contraintes pour la table `etatsallejour`
--
ALTER TABLE `etatsallejour`
  ADD CONSTRAINT `etatsallejour_ibfk_1` FOREIGN KEY (`id_jour`) REFERENCES `jour` (`id_jour`),
  ADD CONSTRAINT `etatsallejour_ibfk_2` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`);

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);

--
-- Contraintes pour la table `groupe_module`
--
ALTER TABLE `groupe_module`
  ADD CONSTRAINT `groupe_module_ibfk_1` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `groupe_module_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`filiere_id`) REFERENCES `filiere` (`id`),
  ADD CONSTRAINT `module_ibfk_2` FOREIGN KEY (`semestre_id`) REFERENCES `semestre` (`id`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`id_jour`) REFERENCES `jour` (`id_jour`),
  ADD CONSTRAINT `seance_ibfk_2` FOREIGN KEY (`id_module`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `seance_ibfk_3` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `seance_ibfk_4` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`),
  ADD CONSTRAINT `seance_ibfk_5` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `seance_ibfk_6` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
