-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 30 juin 2020 à 00:10
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `agence_de_voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `date_a` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  `editor1` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`date_a`, `titre`, `editor1`, `image`) VALUES
('2019-12-19', 'voyage', '<p><strong>mmm</strong></p>\r\n', 'Blog-voyage-copie.jpg'),
('2019-12-15', 'aaaaaaa', '<p><strong>mlplppl</strong></p>\r\n', 'Comment-crÃ©er-un-blog-voyage.jpg'),
('2019-12-26', 'voyage sympa', '<p>mmmmmmaaaaaaaaaaaadd</p>\r\n\r\n<p><em>feefzezffzezef</em></p>\r\n\r\n<p>efzezaad</p>\r\n\r\n<p>feezffze</p>\r\n', 'Comment-crÃ©er-un-blog-voyage.jpg'),
('2019-12-22', 'wiw', '<p>fezezez</p>\r\n', 'Blog-voyage-copie.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `idCh` int(10) NOT NULL,
  `nbBed` int(1) NOT NULL,
  `idH` int(10) NOT NULL,
  `typeC` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`idCh`, `nbBed`, `idH`, `typeC`, `prix`) VALUES
(8484455, 51011, 1, 'àuikyjhiii11gtfdsq', 5681571),
(10, 100, 1, 'Family', 500),
(12, 52, 1, 'penthouse', 800),
(856, 865, 1, 'zasqxc', 852),
(5, 548, 1, 'zerfg', 785421);

-- --------------------------------------------------------

--
-- Structure de la table `circuit`
--

CREATE TABLE `circuit` (
  `idCircuit` int(11) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `lieu_d` varchar(255) NOT NULL,
  `lieu_a` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `nom_circuit` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(10000) NOT NULL,
  `nb_place` int(11) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `circuit`
--

INSERT INTO `circuit` (`idCircuit`, `lieu`, `lieu_d`, `lieu_a`, `date`, `nom_circuit`, `prix`, `description`, `nb_place`, `photo`) VALUES
(18, 'sfax', 'soussse', 'tunis', '2019-11-30', 'tuninsair', 1700, 'kjskdjkzalkdlajkla kdzjakdljzakjdkazjkazj kjdzkajlzdqmjklzdjkazljkljzkljazzkjaj zjdkljkldjakzlfkalehaejklzakd  jzadkjzaklazk z j dzja', 15, '4.png'),
(21, 'sfax', 'tunis', 'tunis', '2019-12-28', 'tuninsair', 1700, 'beau', 30, '4.png'),
(22, 'kaireouen', 'tunis', 'tunis', '2019-12-20', 'tuninsair', 1500, 'fuufyy', 40, '5.png'),
(23, 'sfax', 'tunis', 'tunis', '2019-12-21', 'tuninsair', 1700, 'hffyfy', 30, '5.png'),
(24, 'sfax', 'tunis', 'tunis', '2019-12-28', 'cksk', 1500, 'jfyfyfyf', 30, '7.png'),
(25, 'sousse', 'tunis', 'sousse', '2019-12-20', 'tuninsair', 200, 'voyage', 25, '8.png'),
(26, 'bizert', 'tunis', 'bizert', '2019-12-28', 'tuninsair', 300, 'vol', 40, '8.png'),
(27, 'nabeul', 'carthage', 'nabeul', '2019-12-22', 'tuninsair', 600, 'beau', 90, '1.png'),
(28, 'hammamt', 'bizert', 'hammamet', '2019-12-23', 'tuninsair', 800, 'belle', 80, '5.png'),
(29, 'mahdia', 'tunis', 'mahdia', '2019-12-31', 'tuninsair', 90, 'kslhlh', 50, '3.png'),
(30, 'monastir', 'tunis', 'monastir', '2019-12-18', 'tuninsair', 999, 'bien', 42, '2.png');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `sender_name` varchar(40) NOT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `voyid` int(20) NOT NULL DEFAULT '0',
  `image` varchar(50) NOT NULL DEFAULT 'profil_defaut.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `sender_name`, `datec`, `voyid`, `image`) VALUES
(1, 'hayfa', 'hahaha', '2019-12-06 05:54:27', 0, 'profil_defaut.png'),
(21, 'i miss tunisia', 'hend', '2019-12-07 10:39:39', 0, 'profil_defaut.png'),
(22, 'hello', 'hafsa', '2019-12-07 10:49:23', 0, 'profil_defaut.png'),
(24, 'ahahhaa', 'hayfa', '2019-12-07 11:14:37', 0, 'profil_defaut.png'),
(27, 'hello guys <3 ', 'hend', '2019-12-07 11:16:50', 0, 'profil_defaut.png'),
(44, 'dd', 'dorra', '2019-12-08 10:50:46', 0, 'profil_defaut.png'),
(56, 'hahhaahahahahahaahhahahhaahahah', 'firas', '2019-12-10 12:22:44', 0, 'profil_defaut.png'),
(65, 'ahaha', 'hayfa', '2019-12-10 16:48:41', 1, 'profil_defaut.png'),
(71, 'ddddd', 'ahhaha', '2019-12-11 07:58:45', 0, 'profil_defaut.png'),
(73, 'd', 'd', '2019-12-11 08:00:25', 0, 'profil_defaut.png'),
(107, 'aahah', 'hafsa', '2019-12-11 11:21:16', 0, 'profil_defaut.png'),
(115, 'hahha', 'chedli', '2019-12-11 11:21:16', 0, 'profil_defaut.png'),
(117, 'Harry potter\r\n', 'alya', '2019-12-12 11:34:29', 0, 'profil_defaut.png'),
(118, 'lol', 'wiem', '2019-12-12 11:34:52', 0, 'profil_defaut.png'),
(119, 'lool', 'hela', '2019-12-12 11:37:26', 0, 'profil_defaut.png'),
(120, 'hello', 'youssef', '2019-12-12 13:16:42', 0, 'profil_defaut.png'),
(121, 'hello', 'madame', '2019-12-13 08:59:06', 0, 'profil_defaut.png');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `created_at`) VALUES
('cus_HFuUHfVKCw9uOt', 'Youssef', 'Rakrouki', 'youssef.rakrouki@esprit.tn', '2020-05-11 00:34:42'),
('cus_HN33SM5uda8hkT', 'Youssef', 'Rakrouki', 'youssef.rakrouki@esprit.tn', '2020-05-30 01:53:47'),
('cus_HN34KYWI1Ij7wK', 'Youssef', 'Rakrouki', 'yrakrouki98@gmail.com', '2020-05-30 01:54:26'),
('cus_HN36x9mlFh5iDl', 'Youssef', 'Rakrouki', 'qtmailingtest2@gmail.com', '2020-05-30 01:56:24'),
('cus_HN38zy57LK8dnk', 'Youssef', 'Rakrouki', 'yrakrouki98@gmail.com', '2020-05-30 01:58:35'),
('cus_HN3Cpjw0XovxKp', 'Youssef', 'Rakrouki', 'yrakrouki98@gmail.com', '2020-05-30 02:03:06'),
('cus_HN3EuG3ExJgfzC', 'Youssef', 'Rakrouki', 'yrakrouki98@gmail.com', '2020-05-30 02:04:34');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `idH` int(10) NOT NULL,
  `nomHotel` varchar(255) NOT NULL,
  `nbEtoils` int(1) NOT NULL,
  `nbChambre` int(11) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `note` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`idH`, `nomHotel`, `nbEtoils`, `nbChambre`, `photo`, `description`, `adresse`, `note`) VALUES
(1, 'hotel beja', 7, 0, '3.png', 'hotel', 'Hotel La Maison Blanche, Avenue Mohamed V, Tunis', 10),
(2, 'hotel ariana', 3, 5000, '4.png', 'sqdfsfsfs ', 'qsd qsd qsd qsd ', 10),
(5, 'srsr', 5, 500, '4.png', 'sdfsd', 'etert', 12),
(34, 'hotel touzir', 5, 8000, '3.png', 'dsfsdfs', 'dfgdfgdf ', 10),
(505, 'hotel test55', 10, 9826, '6.png', 'fkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfg', 'dsf sdf sdf sdf', 5);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(10) NOT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `pourcentage` int(2) NOT NULL,
  `idH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `date_d`, `date_f`, `titre`, `description`, `pourcentage`, `idH`) VALUES
(1, '2019-12-04', '2019-12-18', 'PROMOTION D\'HIVER', 'sqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqdddd', 10, 1),
(185, '2019-12-26', '2019-12-10', 'PROMOTION X-MAS', 'azeazeaze', 30, 2),
(597, '2019-12-03', '2019-12-19', 'HJUU', 'GHHHG', 40, 34);

-- --------------------------------------------------------

--
-- Structure de la table `reservationVol`
--

CREATE TABLE `reservationVol` (
  `idR` int(10) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `idVol` int(10) NOT NULL,
  `valid` int(3) NOT NULL,
  `dateReservation` date NOT NULL,
  `prix` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservationVol`
--

INSERT INTO `reservationVol` (`idR`, `cin`, `idVol`, `valid`, `dateReservation`, `prix`) VALUES
(12, '07238394', 20, 1, '2019-12-05', 150),
(34, '07238394', 20, 0, '2019-12-12', 150),
(36, '07238394', 20, 0, '2019-12-13', 150),
(37, '07238394', 20, 0, '2019-12-13', 150),
(39, '07238394', 21, 0, '2019-12-13', 100),
(41, '07238394', 20, 0, '2019-12-13', 150);

-- --------------------------------------------------------

--
-- Structure de la table `reservationVoy`
--

CREATE TABLE `reservationVoy` (
  `idR` int(10) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `idVo` int(11) NOT NULL,
  `valid` int(3) NOT NULL,
  `dateReservation` date NOT NULL,
  `prix` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservationVoy`
--

INSERT INTO `reservationVoy` (`idR`, `cin`, `idVo`, `valid`, `dateReservation`, `prix`) VALUES
(4, '07238394', 3, 1, '2019-12-06', 250),
(5, '07238394', 3, 1, '2019-12-06', 250),
(6, '07238394', 2, 1, '2019-12-06', 300);

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `product`, `amount`, `currency`, `status`, `created_at`) VALUES
('ch_1GhOfOByS8ysoYxRh01AgbUT', 'cus_HFuUHfVKCw9uOt', 'payement en ligne', '10000', 'usd', 'succeeded', '2020-05-11 00:34:42'),
('ch_1GoIxKByS8ysoYxRjf7fi4O3', 'cus_HN33SM5uda8hkT', 'payement en ligne', '10000', 'usd', 'succeeded', '2020-05-30 01:53:47'),
('ch_1GoIxxByS8ysoYxRQ5zIbSAd', 'cus_HN34KYWI1Ij7wK', 'payement en ligne', '10000', 'usd', 'succeeded', '2020-05-30 01:54:26'),
('ch_1GoIzsByS8ysoYxRjvDLojt5', 'cus_HN36x9mlFh5iDl', 'payement en ligne', '10000', 'usd', 'succeeded', '2020-05-30 01:56:24'),
('ch_1GoJ1yByS8ysoYxRsmbmxXiZ', 'cus_HN38zy57LK8dnk', 'payement en ligne', '10000', 'usd', 'succeeded', '2020-05-30 01:58:35'),
('ch_1GoJ6LByS8ysoYxRj1BEhlR6', 'cus_HN3Cpjw0XovxKp', 'payement en ligne', '10000', 'usd', 'succeeded', '2020-05-30 02:03:06'),
('ch_1GoJ7mByS8ysoYxRa87NyRfW', 'cus_HN3EuG3ExJgfzC', 'payement en ligne', '10000', 'usd', 'succeeded', '2020-05-30 02:04:34');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'Ahmed', 'rim.douss@esprit.tn', '123'),
(2, 'Amina', 'amina@esprit.tn', 'bbb');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `cin` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numTel` int(8) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`cin`, `nom`, `prenom`, `email`, `numTel`, `userName`, `mdp`) VALUES
('07238394', 'YOUSSEF', 'RAKROUKI', 'youssef.rakrouki@esprit.tn', 92705635, 'YOUSSEFRAK', 'BBBBBBB'),
('07239483', 'ISMAIL', 'SOUISSI', 'ismailsouissi33@gmail.com', 25231871, 'ISMAILOO', '123456'),
('08238888', 'AHMED', 'AHMED', 'AHMED@CC.COM', 90099009, 'AHMED06', '1122'),
('11113333', 'YOUSSEF', 'RAKdsd', 'hamzus1992@yy.com', 88888, 'AAA', 'ZZZZ'),
('1233', 'YOUSSEF', 'RAKROUKI', 'youssef.rakrouki@esprit.tn', 92705635, '	YOUSSEFRAK', 'BBBBBBB'),
('23232323', 'AHMED', 'AHMED', 'milo_99@live.fr', 92705635, 'YOUSSEFRAK', 'AA');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `idVol` int(10) NOT NULL,
  `airline` varchar(255) NOT NULL,
  `lieu_a` varchar(255) NOT NULL,
  `lieu_d` varchar(255) NOT NULL,
  `date_d` date NOT NULL,
  `date_r` date NOT NULL,
  `heure_d` int(10) NOT NULL,
  `heure_r` int(10) NOT NULL,
  `prixVol` int(8) NOT NULL,
  `nbPlace` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`idVol`, `airline`, `lieu_a`, `lieu_d`, `date_d`, `date_r`, `heure_d`, `heure_r`, `prixVol`, `nbPlace`) VALUES
(20, 'turkish airline', 'turkish', 'tunis', '2019-11-22', '2019-11-23', 15, 18, 150, 10),
(21, 'turkish airline', 'turkish', 'tunis', '2019-12-07', '2019-12-31', 2, 4, 100, 30);

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE `vols` (
  `idVol` int(255) NOT NULL,
  `airline` varchar(255) NOT NULL,
  `lieu_d` varchar(255) NOT NULL,
  `lieu_a` varchar(255) NOT NULL,
  `date_d` date NOT NULL,
  `date_r` date NOT NULL,
  `heure_d` int(10) NOT NULL,
  `heure_r` int(10) NOT NULL,
  `prixVol` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`idVol`, `airline`, `lieu_d`, `lieu_a`, `date_d`, `date_r`, `heure_d`, `heure_r`, `prixVol`) VALUES
(55, 'tunisair', 'tunis', 'france', '2019-12-04', '2019-12-08', 4, 8, 1500),
(56, 'tunisair', 'paris', 'tunis', '2019-12-26', '2019-12-31', 2, 3, 2000);

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `idVo` int(11) NOT NULL,
  `airline` varchar(100) NOT NULL,
  `lieu_aller` varchar(100) NOT NULL,
  `lieu_retour` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `nom_hotel` varchar(100) NOT NULL,
  `prix` float NOT NULL,
  `date_aller` date NOT NULL,
  `date_retour` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `views` int(100) NOT NULL DEFAULT '0',
  `voy_places` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`idVo`, `airline`, `lieu_aller`, `lieu_retour`, `description`, `nom_hotel`, `prix`, `date_aller`, `date_retour`, `image`, `views`, `voy_places`) VALUES
(1, 'tunisair', 'tuniiss', 'school', 'voyage France a tunis aet merry chrstmas et je vous aime tous merci mes amsis piur  tout ce que vous avez fait pour nous hahaha', 'ddszddd', 1550, '2019-11-28', '2019-11-01', '2.png', 62, 49),
(2, 'tunisair', 'france', 'tunis', 'take care ', 'dd', 1000, '2019-11-29', '2019-11-01', '3.png', 121, 12),
(3, 'tunisair', 'tunis', 'spainN', 'aaa', 'st christopher', 500, '2019-12-27', '2019-12-31', '1.png', 10, 20),
(5, 'ahaha', 'maroc', 'tunisie', 'bonjour tout le monde , happy new year , happy day , happy birthday , ahahah hello this is a new website and i would like to tell you', 'jjjj', 200, '2019-12-15', '2019-12-24', '1.png', 21, 20);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`typeC`,`prix`),
  ADD UNIQUE KEY `typeC` (`typeC`),
  ADD UNIQUE KEY `idCh` (`idCh`),
  ADD KEY `idH` (`idH`);

--
-- Index pour la table `circuit`
--
ALTER TABLE `circuit`
  ADD PRIMARY KEY (`idCircuit`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`idH`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idH_2` (`idH`),
  ADD KEY `idH` (`idH`);

--
-- Index pour la table `reservationVol`
--
ALTER TABLE `reservationVol`
  ADD PRIMARY KEY (`idR`),
  ADD KEY `cin` (`cin`),
  ADD KEY `idVol` (`idVol`);

--
-- Index pour la table `reservationVoy`
--
ALTER TABLE `reservationVoy`
  ADD PRIMARY KEY (`idR`),
  ADD KEY `cin` (`cin`),
  ADD KEY `idVo` (`idVo`);

--
-- Index pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`idVol`);

--
-- Index pour la table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`idVol`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`idVo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `idH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT pour la table `reservationVol`
--
ALTER TABLE `reservationVol`
  MODIFY `idR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `reservationVoy`
--
ALTER TABLE `reservationVoy`
  MODIFY `idR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `vol`
--
ALTER TABLE `vol`
  MODIFY `idVol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `idVol` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `idVo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `relation3` FOREIGN KEY (`idH`) REFERENCES `hotel` (`idH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`idH`) REFERENCES `hotel` (`idH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservationVol`
--
ALTER TABLE `reservationVol`
  ADD CONSTRAINT `cin` FOREIGN KEY (`cin`) REFERENCES `utilisateur` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idVol` FOREIGN KEY (`idVol`) REFERENCES `vol` (`idVol`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
