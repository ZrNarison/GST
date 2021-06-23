-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 23 juin 2021 à 09:33
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tsena`
--

-- --------------------------------------------------------

--
-- Structure de la table `archivage`
--

CREATE TABLE `archivage` (
  `idarechives` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `n_cin` varchar(255) NOT NULL,
  `date_cin` date NOT NULL,
  `Parent` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `date_vente` date NOT NULL,
  `date_quit` date NOT NULL,
  `caution` varchar(200) NOT NULL,
  `adress_arc` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `num_box` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `n_cin` varchar(255) NOT NULL,
  `date_cin` date NOT NULL,
  `lieu_cin` varchar(255) NOT NULL,
  `Parent` varchar(255) NOT NULL,
  `Mr` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `date_vente` date NOT NULL,
  `cuation` double NOT NULL,
  `adress_client` varchar(255) NOT NULL,
  `Lot_client` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `telephone` varchar(200) NOT NULL,
  `num_box` int(11) NOT NULL,
  `email_cli` varchar(255) NOT NULL,
  `cit_fam` varchar(255) NOT NULL,
  `epous` varchar(255) NOT NULL,
  `enfant` int(11) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `rcc` varchar(255) NOT NULL,
  `cbanc` varchar(255) NOT NULL,
  `amet` varchar(255) NOT NULL,
  `met` varchar(255) NOT NULL,
  `per_respo` int(11) NOT NULL,
  `mat_uti` varchar(255) NOT NULL,
  `dur_met` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cuat`
--

CREATE TABLE `cuat` (
  `N_box` int(11) NOT NULL,
  `pres` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE `depense` (
  `iddepense` int(11) NOT NULL,
  `coutdepense` varchar(255) NOT NULL,
  `date_dps` varchar(255) NOT NULL,
  `notification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `hofa`
--

CREATE TABLE `hofa` (
  `idhofa` int(11) NOT NULL,
  `caution_box` int(11) NOT NULL,
  `date_entre` date NOT NULL,
  `pers_pay` varchar(255) COLLATE utf8_bin NOT NULL,
  `somme_pay` double NOT NULL,
  `date_pay` date NOT NULL,
  `pers_vers` varchar(255) COLLATE utf8_bin NOT NULL,
  `somme_vers` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `jiram`
--

CREATE TABLE `jiram` (
  `idjirm` int(11) NOT NULL,
  `N_box` int(11) NOT NULL,
  `date_pres` date NOT NULL,
  `date_fact` date NOT NULL,
  `val_prs` varchar(255) COLLATE utf8_bin NOT NULL,
  `conso` varchar(255) COLLATE utf8_bin NOT NULL,
  `somme_vers` double NOT NULL,
  `ntp` varchar(255) COLLATE utf8_bin NOT NULL,
  `notif` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `crt` varchar(255) COLLATE utf8_bin NOT NULL,
  `user` varchar(255) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`crt`, `user`, `mdp`) VALUES
('Administrateur', 'Administrateur', 'e3afed0047b08059d0fada10f400c1e5'),
('Secretaire', 'Secretaire', 'f46787def5aeec965f9308ac0689f09f');

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

CREATE TABLE `parametre` (
  `nom_appli` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `representant` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `adress_soc` varchar(255) NOT NULL,
  `respo_soc` varchar(255) NOT NULL,
  `cin_respo` varchar(255) NOT NULL,
  `dcin_respo` varchar(255) NOT NULL,
  `adress_respo` varchar(255) NOT NULL,
  `entete` varchar(255) NOT NULL,
  `corps_menu` longtext NOT NULL,
  `foot` varchar(255) NOT NULL,
  `kwt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parametre`
--

INSERT INTO `parametre` (`nom_appli`, `societe`, `representant`, `localisation`, `adress_soc`, `respo_soc`, `cin_respo`, `dcin_respo`, `adress_respo`, `entete`, `corps_menu`, `foot`, `kwt`) VALUES
('', '', 'By RMJVI', '', 'LOT IVM 54 ', 'JHON', '', '', 'ANTANIMANDRY IHOSY 313', '', '', '', '190');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `N_box` int(11) NOT NULL,
  `hofa` double NOT NULL,
  `securite` double NOT NULL,
  `emplacement` varchar(255) COLLATE utf8_bin NOT NULL,
  `longueur` varchar(11) COLLATE utf8_bin NOT NULL,
  `largeur` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`N_box`, `hofa`, `securite`, `emplacement`, `longueur`, `largeur`) VALUES
(2, 200000, 17000, 'Rez de chaussee', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `archivage`
--
ALTER TABLE `archivage`
  ADD PRIMARY KEY (`idarechives`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`),
  ADD KEY `num_box` (`num_box`);

--
-- Index pour la table `cuat`
--
ALTER TABLE `cuat`
  ADD KEY `N_box` (`N_box`);

--
-- Index pour la table `hofa`
--
ALTER TABLE `hofa`
  ADD PRIMARY KEY (`idhofa`),
  ADD KEY `N_box` (`caution_box`);

--
-- Index pour la table `jiram`
--
ALTER TABLE `jiram`
  ADD PRIMARY KEY (`idjirm`),
  ADD KEY `N_box` (`N_box`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`N_box`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `archivage`
--
ALTER TABLE `archivage`
  MODIFY `idarechives` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `hofa`
--
ALTER TABLE `hofa`
  MODIFY `idhofa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `jiram`
--
ALTER TABLE `jiram`
  MODIFY `idjirm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`num_box`) REFERENCES `piece` (`N_box`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cuat`
--
ALTER TABLE `cuat`
  ADD CONSTRAINT `cuat_ibfk_1` FOREIGN KEY (`N_box`) REFERENCES `client` (`num_box`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `hofa`
--
ALTER TABLE `hofa`
  ADD CONSTRAINT `hofa_ibfk_1` FOREIGN KEY (`caution_box`) REFERENCES `client` (`num_box`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `jiram`
--
ALTER TABLE `jiram`
  ADD CONSTRAINT `jiram_ibfk_1` FOREIGN KEY (`N_box`) REFERENCES `client` (`num_box`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
