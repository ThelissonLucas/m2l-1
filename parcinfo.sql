-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 11 Novembre 2019 à 13:23
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tpparcinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `installer`
--

CREATE TABLE `installer` (
  `nPoste` varchar(7) DEFAULT NULL,
  `nLog` varchar(5) DEFAULT NULL,
  `numIns` int(5) NOT NULL,
  `dateIns` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delai` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `installer`
--

INSERT INTO `installer` (`nPoste`, `nLog`, `numIns`, `dateIns`, `delai`) VALUES
('p2', 'log1', 1, '2003-05-14 22:00:00', NULL),
('p2', 'log2', 2, '2003-09-16 22:00:00', NULL),
('p4', 'log5', 3, '2019-11-04 10:39:22', NULL),
('p6', 'log6', 4, '2003-05-19 22:00:00', NULL),
('p6', 'log1', 5, '2003-05-19 22:00:00', NULL),
('p8', 'log2', 6, '2003-05-18 22:00:00', NULL),
('p8', 'log6', 7, '2003-05-19 22:00:00', NULL),
('p11', 'log3', 8, '2003-04-19 22:00:00', NULL),
('p12', 'log4', 9, '2003-04-19 22:00:00', NULL),
('p11', 'log7', 10, '2003-04-19 22:00:00', NULL),
('p7', 'log7', 11, '2002-03-31 22:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `logiciel`
--

CREATE TABLE `logiciel` (
  `nLog` varchar(5) NOT NULL,
  `nomLog` varchar(20) NOT NULL,
  `dateAch` datetime DEFAULT NULL,
  `version` varchar(7) DEFAULT NULL,
  `typeLog` varchar(9) DEFAULT NULL,
  `prix` decimal(6,2) DEFAULT NULL,
  `nbInstall` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logiciel`
--

INSERT INTO `logiciel` (`nLog`, `nomLog`, `dateAch`, `version`, `typeLog`, `prix`, `nbInstall`) VALUES
('log1', 'Oracle 6', '1995-05-13 00:00:00', '6.2', 'UNIX', '3000.00', 0),
('log2', 'Oracle 8', '1999-09-15 00:00:00', '8i', 'UNIX', '5600.00', 0),
('log3', 'SQL Server', '1998-04-12 00:00:00', '7', 'PCNT', '3000.00', 0),
('log4', 'Front Page', '1997-06-03 00:00:00', '5', 'PCWS', '500.00', 0),
('log5', 'WinDev', '1997-05-12 00:00:00', '5', 'PCWS', '750.00', 0),
('log6', 'SQL*Net', NULL, '2.0', 'UNIX', '500.00', 0),
('log7', 'I. I. S.', '2002-04-12 00:00:00', '2', 'PCNT', '900.00', 0),
('log8', 'DreamWeaver', '2003-09-21 00:00:00', '2.0', 'BeOS', '1400.00', 0);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `logicielsunix`
--
CREATE TABLE `logicielsunix` (
`nLog` varchar(5)
,`nomLog` varchar(20)
,`dateAch` datetime
,`version` varchar(7)
,`typeLog` varchar(9)
,`prix` decimal(6,2)
,`nbInstall` tinyint(2)
);

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `nPoste` varchar(7) NOT NULL,
  `nomPoste` varchar(20) NOT NULL,
  `indIP` varchar(11) DEFAULT NULL,
  `ad` varchar(3) DEFAULT NULL,
  `typePoste` varchar(9) DEFAULT NULL,
  `nSalle` varchar(7) DEFAULT NULL,
  `nbLog` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `poste`
--

INSERT INTO `poste` (`nPoste`, `nomPoste`, `indIP`, `ad`, `typePoste`, `nSalle`, `nbLog`) VALUES
('p1', 'Poste 1', '130.120.80', '01', 'TX', 's01', 0),
('p10', 'Poste 10', '130.120.81', '03', 'UNIX', 's12', 0),
('p11', 'Poste 11', '130.120.82', '01', 'PCNT', 's21', 0),
('p12', 'Poste 12', '130.120.82', '02', 'PCWS', 's21', 0),
('p2', 'Poste 2', '130.120.80', '02', 'UNIX', 's01', 0),
('p3', 'Poste 3', '130.120.80', '03', 'TX', 's01', 0),
('p4', 'Poste 4', '130.120.80', '04', 'PCWS', 's02', 0),
('p5', 'Poste 5', '130.120.80', '05', 'PCWS', 's02', 0),
('p6', 'Poste 6', '130.120.80', '06', 'UNIX', 's03', 0),
('p7', 'Poste 7', '130.120.80', '07', 'TX', 's03', 0),
('p8', 'Poste 8', '130.120.81', '01', 'UNIX', 's11', 0),
('p9', 'Poste 9', '130.120.81', '02', 'TX', 's11', 0);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `poste0`
--
CREATE TABLE `poste0` (
`nPos0` varchar(7)
,`nomPoste0` varchar(20)
,`nSalle0` varchar(7)
,`TypePoste0` varchar(9)
,`indIP` varchar(11)
,`ad0` varchar(3)
);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `nSalle` varchar(7) NOT NULL,
  `nomSalle` varchar(30) DEFAULT NULL,
  `nbPoste` tinyint(2) DEFAULT NULL,
  `indIP` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`nSalle`, `nomSalle`, `nbPoste`, `indIP`) VALUES
('s01', 'Salle 1', 3, '130.120.80'),
('s02', 'Salle 2', 2, '130.120.80'),
('s03', 'Salle 3', 2, '130.120.80'),
('s11', 'Salle 11', 2, '130.120.81'),
('s12', 'Salle 12', 1, '130.120.81'),
('s21', 'Salle 21', 2, '130.120.82'),
('s22', 'Salle 22', 0, '130.120.83'),
('s23', 'Salle 23', 0, '130.120.83');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `salleprix`
--
CREATE TABLE `salleprix` (
`nSalle` varchar(7)
,`nomSalle` varchar(30)
,`nbPoste` tinyint(2)
,`prixLocation` int(7)
);

-- --------------------------------------------------------

--
-- Structure de la table `segment`
--

CREATE TABLE `segment` (
  `indIP` varchar(11) NOT NULL,
  `nomSegment` varchar(15) DEFAULT NULL,
  `etage` tinyint(1) DEFAULT NULL,
  `nbSalle` tinyint(2) DEFAULT '0',
  `nbPoste` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `segment`
--

INSERT INTO `segment` (`indIP`, `nomSegment`, `etage`, `nbSalle`, `nbPoste`) VALUES
('130.120.80', 'Brin RDC', NULL, 0, 0),
('130.120.81', 'Brin 1er  étage', NULL, 0, 0),
('130.120.82', 'Brin 2ème étage', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `typeLP` varchar(9) NOT NULL,
  `nomType` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`typeLP`, `nomType`) VALUES
('NC', 'Network Computer'),
('PCNT', 'PC Windows  NT'),
('PCWS', 'PC Windows'),
('TX', 'Terminal X-Window'),
('UNIX', 'Système Unix');

-- --------------------------------------------------------

--
-- Structure de la vue `logicielsunix`
--
DROP TABLE IF EXISTS `logicielsunix`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `logicielsunix`  AS  select `logiciel`.`nLog` AS `nLog`,`logiciel`.`nomLog` AS `nomLog`,`logiciel`.`dateAch` AS `dateAch`,`logiciel`.`version` AS `version`,`logiciel`.`typeLog` AS `typeLog`,`logiciel`.`prix` AS `prix`,`logiciel`.`nbInstall` AS `nbInstall` from `logiciel` where (`logiciel`.`typeLog` = 'UNIX') ;

-- --------------------------------------------------------

--
-- Structure de la vue `poste0`
--
DROP TABLE IF EXISTS `poste0`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `poste0`  AS  select `poste`.`nPoste` AS `nPos0`,`poste`.`nomPoste` AS `nomPoste0`,`poste`.`nSalle` AS `nSalle0`,`poste`.`typePoste` AS `TypePoste0`,`poste`.`indIP` AS `indIP`,`poste`.`ad` AS `ad0` from `poste` where `poste`.`indIP` in (select `segment`.`indIP` from `segment` where (`segment`.`etage` = 0)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `salleprix`
--
DROP TABLE IF EXISTS `salleprix`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `salleprix`  AS  select `salle`.`nSalle` AS `nSalle`,`salle`.`nomSalle` AS `nomSalle`,`salle`.`nbPoste` AS `nbPoste`,(`salle`.`nbPoste` * 100) AS `prixLocation` from `salle` ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `installer`
--
ALTER TABLE `installer`
  ADD PRIMARY KEY (`numIns`);

--
-- Index pour la table `logiciel`
--
ALTER TABLE `logiciel`
  ADD PRIMARY KEY (`nLog`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`nPoste`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`nSalle`);

--
-- Index pour la table `segment`
--
ALTER TABLE `segment`
  ADD PRIMARY KEY (`indIP`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`typeLP`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `installer`
--
ALTER TABLE `installer`
  MODIFY `numIns` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
