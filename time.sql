-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 31 Octobre 2019 à 12:57
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `time`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE `annee` (
  `id_annee` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `associer`
--

CREATE TABLE `associer` (
  `id_departement` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `associer`
--

INSERT INTO `associer` (`id_departement`, `id_matiere`) VALUES
(21, 3),
(21, 4),
(21, 5);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id_departement` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`id_departement`, `nom`, `responsable`, `slug`) VALUES
(21, 'Telecom', 'Youssouf Donzo', 'telecom');

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

CREATE TABLE `enseigner` (
  `id_departement` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `id_semestre` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `id_annee` int(11) NOT NULL,
  `professeur` varchar(100) NOT NULL,
  `jour` varchar(15) NOT NULL,
  `intervale` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etudiant` int(11) NOT NULL,
  `matricule` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

CREATE TABLE `inscrire` (
  `id_etudiant` int(11) NOT NULL,
  `id_departement` int(11) NOT NULL,
  `id_annee` int(11) NOT NULL,
  `id_licence` int(11) NOT NULL,
  `date_inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `licence`
--

CREATE TABLE `licence` (
  `id_licence` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `licence`
--

INSERT INTO `licence` (`id_licence`, `nom`, `slug`) VALUES
(6, 'Licence 1', 'licence-1'),
(7, 'Licence 2', 'licence-2'),
(8, 'Licence 3', 'licence-3'),
(9, 'Licence 4', 'licence-4');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id_matiere` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom`, `slug`) VALUES
(1, 'Anglaiss', 'anglaiss'),
(2, 'Biologie', 'biologie'),
(3, 'Chimie', 'chimie'),
(4, 'Mathematique', 'mathematique'),
(5, 'Physique', 'physique');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_19_174514_create_annee_table', 0),
(2, '2019_10_19_174514_create_appartenir_table', 0),
(3, '2019_10_19_174514_create_associer_table', 0),
(4, '2019_10_19_174514_create_comporte_table', 0),
(5, '2019_10_19_174514_create_departement_table', 0),
(6, '2019_10_19_174514_create_enseigne_table', 0),
(7, '2019_10_19_174514_create_licence_table', 0),
(8, '2019_10_19_174514_create_matiere_table', 0),
(9, '2019_10_19_174514_create_personnel_table', 0),
(10, '2019_10_19_174514_create_semestre_table', 0),
(11, '2019_10_19_174514_create_sender_table', 0),
(12, '2019_10_19_174515_add_foreign_keys_to_appartenir_table', 0),
(13, '2019_10_19_174515_add_foreign_keys_to_associer_table', 0),
(14, '2019_10_19_174515_add_foreign_keys_to_comporte_table', 0),
(15, '2019_10_19_174515_add_foreign_keys_to_enseigne_table', 0),
(16, '2019_10_19_174515_add_foreign_keys_to_sender_table', 0),
(17, '2019_10_19_174559_create_annee_table', 0),
(18, '2019_10_19_174559_create_appartenir_table', 0),
(19, '2019_10_19_174559_create_associer_table', 0),
(20, '2019_10_19_174559_create_comporte_table', 0),
(21, '2019_10_19_174559_create_departement_table', 0),
(22, '2019_10_19_174559_create_enseigne_table', 0),
(23, '2019_10_19_174559_create_licence_table', 0),
(24, '2019_10_19_174559_create_matiere_table', 0),
(25, '2019_10_19_174559_create_personnel_table', 0),
(26, '2019_10_19_174559_create_semestre_table', 0),
(27, '2019_10_19_174559_create_sender_table', 0),
(28, '2019_10_19_174600_add_foreign_keys_to_appartenir_table', 0),
(29, '2019_10_19_174600_add_foreign_keys_to_associer_table', 0),
(30, '2019_10_19_174600_add_foreign_keys_to_comporte_table', 0),
(31, '2019_10_19_174600_add_foreign_keys_to_enseigne_table', 0),
(32, '2019_10_19_174600_add_foreign_keys_to_sender_table', 0),
(33, '2019_10_31_124321_create_annee_table', 1),
(34, '2019_10_31_124321_create_associer_table', 1),
(35, '2019_10_31_124321_create_departement_table', 1),
(36, '2019_10_31_124321_create_enseigner_table', 1),
(37, '2019_10_31_124321_create_etudiant_table', 1),
(38, '2019_10_31_124321_create_inscrire_table', 1),
(39, '2019_10_31_124321_create_licence_table', 1),
(40, '2019_10_31_124321_create_matiere_table', 1),
(41, '2019_10_31_124321_create_personnel_table', 1),
(42, '2019_10_31_124321_create_salle_table', 1),
(43, '2019_10_31_124321_create_semestre_table', 1),
(44, '2019_10_31_124321_create_sender_table', 1),
(45, '2019_10_31_124322_add_foreign_keys_to_associer_table', 1),
(46, '2019_10_31_124322_add_foreign_keys_to_enseigner_table', 1),
(47, '2019_10_31_124322_add_foreign_keys_to_inscrire_table', 1),
(48, '2019_10_31_124322_add_foreign_keys_to_personnel_table', 1),
(49, '2019_10_31_124322_add_foreign_keys_to_semestre_table', 1),
(50, '2019_10_31_124322_add_foreign_keys_to_sender_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id_personnel` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`id_personnel`, `nom`, `login`, `password`, `id_departement`) VALUES
(2, 'Sona Camara', 'donzoyoussouf@gmail.com', '$2y$10$vS1KEOg0mLUTZN/UdV5wguchbEMPnXWITStysRemZ1i3fwIvZYYES', 21);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `slug` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `id_licence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `nom`, `id_licence`) VALUES
(3, 'Semestre 1', 6),
(4, 'Semestre 2', 6),
(5, 'Semestre 3', 7),
(6, 'Semestre 4', 7),
(7, 'Semestre 5', 8),
(8, 'Semestre 6', 8),
(9, 'Semestre 7', 9),
(10, 'Semestre 8', 9);

-- --------------------------------------------------------

--
-- Structure de la table `sender`
--

CREATE TABLE `sender` (
  `id_departement` int(11) NOT NULL,
  `id_licence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sender`
--

INSERT INTO `sender` (`id_departement`, `id_licence`) VALUES
(21, 6),
(21, 7),
(21, 8);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annee`
--
ALTER TABLE `annee`
  ADD PRIMARY KEY (`id_annee`);

--
-- Index pour la table `associer`
--
ALTER TABLE `associer`
  ADD PRIMARY KEY (`id_departement`,`id_matiere`),
  ADD KEY `associer_matiere0_FK` (`id_matiere`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Index pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD PRIMARY KEY (`id_departement`,`id_matiere`,`id_semestre`,`id_salle`,`id_annee`),
  ADD KEY `enseigner_matiere0_FK` (`id_matiere`),
  ADD KEY `enseigner_semestre1_FK` (`id_semestre`),
  ADD KEY `enseigner_salle2_FK` (`id_salle`),
  ADD KEY `enseigner_annee3_FK` (`id_annee`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`);

--
-- Index pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD PRIMARY KEY (`id_etudiant`,`id_departement`,`id_annee`,`id_licence`),
  ADD KEY `inscrire_departement0_FK` (`id_departement`),
  ADD KEY `inscrire_annee1_FK` (`id_annee`),
  ADD KEY `inscrire_licence2_FK` (`id_licence`);

--
-- Index pour la table `licence`
--
ALTER TABLE `licence`
  ADD PRIMARY KEY (`id_licence`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_matiere`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id_personnel`),
  ADD KEY `FK_departement_perssonel` (`id_departement`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_semestre`),
  ADD KEY `FK_semestre_licence` (`id_licence`);

--
-- Index pour la table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`id_departement`,`id_licence`),
  ADD KEY `sender_licence0_FK` (`id_licence`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annee`
--
ALTER TABLE `annee`
  MODIFY `id_annee` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `licence`
--
ALTER TABLE `licence`
  MODIFY `id_licence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_matiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id_semestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `associer`
--
ALTER TABLE `associer`
  ADD CONSTRAINT `associer_departement_FK` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id_departement`),
  ADD CONSTRAINT `associer_matiere0_FK` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`);

--
-- Contraintes pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `enseigner_annee3_FK` FOREIGN KEY (`id_annee`) REFERENCES `annee` (`id_annee`),
  ADD CONSTRAINT `enseigner_departement_FK` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id_departement`),
  ADD CONSTRAINT `enseigner_matiere0_FK` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`),
  ADD CONSTRAINT `enseigner_salle2_FK` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`),
  ADD CONSTRAINT `enseigner_semestre1_FK` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`);

--
-- Contraintes pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD CONSTRAINT `inscrire_annee1_FK` FOREIGN KEY (`id_annee`) REFERENCES `annee` (`id_annee`),
  ADD CONSTRAINT `inscrire_departement0_FK` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id_departement`),
  ADD CONSTRAINT `inscrire_etudiant_FK` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`),
  ADD CONSTRAINT `inscrire_licence2_FK` FOREIGN KEY (`id_licence`) REFERENCES `licence` (`id_licence`);

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `FK_departement_perssonel` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id_departement`);

--
-- Contraintes pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD CONSTRAINT `FK_semestre_licence` FOREIGN KEY (`id_licence`) REFERENCES `licence` (`id_licence`);

--
-- Contraintes pour la table `sender`
--
ALTER TABLE `sender`
  ADD CONSTRAINT `sender_departement_FK` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id_departement`),
  ADD CONSTRAINT `sender_licence0_FK` FOREIGN KEY (`id_licence`) REFERENCES `licence` (`id_licence`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
