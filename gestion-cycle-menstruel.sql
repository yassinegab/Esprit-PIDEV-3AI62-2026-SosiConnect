-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 fév. 2026 à 23:18
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion-cycle-menstruel`
--

-- --------------------------------------------------------

--
-- Structure de la table `cycle`
--

CREATE TABLE `cycle` (
  `id_cycle` int(11) NOT NULL,
  `date_debut_m` date NOT NULL,
  `date_fin_m` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cycle`
--

INSERT INTO `cycle` (`id_cycle`, `date_debut_m`, `date_fin_m`) VALUES
(39, '2026-06-16', '2026-06-19'),
(47, '2025-12-15', '2025-12-18'),
(119, '2026-04-01', '2026-04-04'),
(122, '2026-01-06', '2026-01-10'),
(124, '2025-12-01', '2025-12-06'),
(126, '2026-03-01', '2026-03-05'),
(127, '2026-02-01', '2026-02-06');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20260210121635', '2026-02-10 13:16:55', 12),
('DoctrineMigrations\\Version20260211010158', '2026-02-11 02:02:10', 352),
('DoctrineMigrations\\Version20260211015301', '2026-02-11 02:53:09', 15);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `symptome`
--

CREATE TABLE `symptome` (
  `id_symptome` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `intensite` varchar(255) NOT NULL,
  `date_observation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `symptome`
--

INSERT INTO `symptome` (`id_symptome`, `type`, `intensite`, `date_observation`) VALUES
(1, 'maux_de_tete', 'Très légère 🌱', '2026-02-05'),
(2, 'maux_tete', '', '2026-02-10'),
(3, 'crampes', '', '2026-02-10'),
(4, 'fatigue', 'Modérée 😐', '2026-02-10'),
(5, 'maux_tete', '', '2026-02-10'),
(6, 'crampes', '3', '2026-02-06'),
(7, 'maux_de_tete', 'Très forte 🔥', '2026-02-10'),
(8, 'crampes', '', '2026-02-08'),
(9, 'fatigue', '2', '2026-02-14'),
(10, 'maux_tete', '3', '2026-02-15'),
(11, 'maux_tete', '2', '2026-03-01'),
(12, 'maux_tete', '2', '2026-03-01'),
(13, 'maux_tete', '2', '2026-03-01'),
(14, 'maux_tete', '2', '2026-03-01'),
(15, 'maux_tete', '2', '2026-03-01'),
(16, 'maux_tete', '2', '2026-03-01'),
(17, 'maux_tete', '2', '2026-03-01'),
(18, 'maux_tete', '2', '2026-03-01'),
(19, 'maux_tete', '2', '2026-02-27');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `sexe`) VALUES
(1, 'souha', 'mabrouk', 'femme'),
(2, 'ahmed', 'khemili', 'male'),
(3, 'farah', 'tati', 'female'),
(5, 'molka', 'mabrouk', 'female'),
(6, 'tesnim', 'kachradi', 'female'),
(7, 'yakine', 'hedfi', 'female'),
(9, 'dali', 'majdi', 'male'),
(10, 'nermine', 'hedfi', 'female'),
(12, 'assil', 'hammi', 'female');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cycle`
--
ALTER TABLE `cycle`
  ADD PRIMARY KEY (`id_cycle`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750` (`queue_name`,`available_at`,`delivered_at`,`id`);

--
-- Index pour la table `symptome`
--
ALTER TABLE `symptome`
  ADD PRIMARY KEY (`id_symptome`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cycle`
--
ALTER TABLE `cycle`
  MODIFY `id_cycle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `symptome`
--
ALTER TABLE `symptome`
  MODIFY `id_symptome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
