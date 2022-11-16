-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 11 nov. 2022 à 22:08
-- Version du serveur : 8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location_velos`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `addresse` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `credit_card` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Détails des clients.';

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `addresse`, `phone`, `credit_card`) VALUES
(2, 'Sharon Ebert DVM', '944 Mac Knolls Suite 220\nAliciachester, NE 88710', '1361514567', '6011453986079759'),
(3, 'Elnora Bradtke', '160 Maurice Key\nJuliaborough, NE 81727-2171', '6857553999', '5494175978535779'),
(4, 'Aletha Wilderman', '3329 Elyse Junction\nSouth Khalilchester, OH 79895', '5063493638', '5133480833726968'),
(5, 'Mavis Gleason DDS', '310 Marcelina Views\nNew Misty, OR 60309', '4036657525', '4916669768185769'),
(6, 'Mrs. Stacy Turcotte', '5227 Dickinson Road Suite 078\nNorth Michaelview, AL 46734', '4926816275', '4916270474938988'),
(7, 'Gregorio Oberbrunner DVM', '583 Oceane Hills\nWest Birdieborough, TX 51716', '1729349957', '4024007131687986'),
(8, 'Ms. Alycia McKenzie', '95101 Batz Flat\nAurelietown, TN 14368', '4937666388', '5492791051753987'),
(9, 'Brady Hoppe DVM', '88189 Erdman Haven Apt. 655\nEmmieville, NH 30248-4487', '1315758795', '5493831208577899'),
(10, 'Mrs. Aditya Heaney Jr.', '6324 Russ Expressway Suite 987\nBrekketown, MD 86200-2101', '0737780685', '6011416682353655'),
(11, 'Madisyn McDermott', '008 Tina Knoll\nNorth Eduardo, OH 91040-0744', '6009215677', '4539610416324767'),
(12, 'Johnny Kertzmann', '301 Mitchell Highway Apt. 912\nArielfort, HI 84450', '1971734357', '4069131644299966'),
(13, 'Ephraim Lowe', '374 Haylie Wells\nNitzschetown, UT 06652-8570', '1517069679', '5304349355606887'),
(14, 'Willis Gerlach DVM', '76357 Weimann Drive\nBergetown, FL 03329', '5573045419', '5235183699427976'),
(15, 'Mrs. Naomi Bosco', '638 Keebler Manor Apt. 896\nDeeside, RI 36625', '5242334049', '3719604115270575'),
(16, 'Laurence Prohaska', '7230 Windler Haven Apt. 343\nJacintoport, CO 03251-2291', '0112402387', '5344011631801675'),
(17, 'Prof. Breana Block', '841 Candida Fields Apt. 295\nWest Juddshire, IL 31241', '8014896389', '4485022604670787'),
(18, 'Hilario Schultz IV', '121 Amalia Forge Apt. 836\nNorth Giuseppe, FL 48566-1826', '5663228858', '5298720691337689'),
(19, 'David Gislason', '294 O\'Hara Row\nLake Ramonmouth, AZ 61899', '0917230725', '4024007110669967'),
(20, 'Jennifer Marvin', '868 Walker Station Apt. 768\nLake Seamus, KY 78471', '0366326598', '6011699184534866'),
(21, 'Noel Leffler', '9756 Meaghan Point\nLake Aliza, CT 16102-1786', '6019832358', '5442912971118766'),
(22, 'Efrain Shields', '138 Dana Heights Apt. 281\nNorth Theastad, IA 19325', '2550652708', '4485564459066558'),
(23, 'Dr. Lorna Powlowski', '0864 Danny Circles\nMcKenzieside, NY 33776', '2737313586', '4916513931059778'),
(24, 'Prof. Helmer Block IV', '59000 Giles Ridge\nWest Benedict, UT 67584-0717', '1145481545', '6011059944114975'),
(25, 'Gardner Kozey', '9302 Kihn Plains Apt. 390\nNew Isac, MT 88315', '1570559438', '4929816773716769'),
(26, 'Sam Zieme', '98303 Clark Squares Suite 521\nHaagfurt, NE 26100', '6470818439', '4539997192609888'),
(27, 'Camille Grady', '7676 Lesch Lodge Apt. 679\nNorth Ivahmouth, IA 91514', '1190171759', '5451015967739756'),
(28, 'Jess Dickinson', '78904 Davin Lakes Suite 201\nMckenzietown, RI 88175', '0001862836', '4481801333276687'),
(29, 'Elliott Strosin PhD', '340 Gwen Inlet\nRossietown, OH 05602-7759', '1032806396', '4024007147572598'),
(30, 'Dr. Dino Armstrong', '116 Kuphal Garden Suite 742\nHoegerstad, KS 63514', '8103152906', '5307834145720695'),
(31, 'Tom Medhurst', '90239 Waelchi Hill\nRolfsonchester, RI 61795', '2078821585', '4532961161118775'),
(32, 'Dock Larkin', '0533 Joanne Station\nAntonettaberg, OH 35205', '1102101195', '5393201349098577'),
(33, 'Miss Palma Bednar', '6761 Hane Lodge\nSouth Kattie, WA 03303', '7023158909', '5301845280130666'),
(34, 'Mikel Hudson', '72400 Morar Harbor Suite 653\nWest Katarinaside, KY 94336-2458', '5958881128', '4916886073151759'),
(35, 'Mr. Sonny Stokes', '3787 Rylan Turnpike Apt. 731\nLowetown, NJ 61906-8246', '1297426718', '4485158038770669'),
(36, 'Harley Reichel', '2214 Swift View Apt. 652\nLake Saraifort, ID 55468-4540', '4033117748', '4929203475387798'),
(37, 'Mrs. Kathleen Kozey I', '4545 Marguerite Summit\nSouth Hayley, IN 75086', '4800919946', '6011444507376589'),
(38, 'Liza Lehner I', '679 Batz Island\nOdellfurt, FL 92255', '4117662806', '5522736443646789'),
(39, 'Vena Murphy Jr.', '81991 Klein Villages Suite 004\nKovacekville, MS 13331', '3638156317', '5473395630883559'),
(40, 'Miss Lily Christiansen', '485 Eloisa Estate\nPort Zoilahaven, AR 03016-8792', '9130276506', '5220248186518558'),
(41, 'Ezra Mills', '27205 Brennon Turnpike\nGerardshire, MI 39021', '1537489705', '5142643558608877'),
(42, 'Cassie Bergnaum', '055 Gleichner Isle Apt. 276\nEast Wilhelm, DE 27381', '1384830657', '5509347437526988'),
(43, 'Peter Dickens', '75857 Rylee Knolls Apt. 651\nMayertville, LA 25968-6511', '1793701035', '4916126663734769'),
(44, 'Caroline Will', '19817 Hickle Meadows Apt. 881\nLake Emmetbury, WI 05759-3370', '6266062667', '4916286895959966'),
(45, 'Jovan Stehr', '7039 Robbie Parks\nDareside, WI 00861-5900', '1563376985', '4716854352886687'),
(46, 'Aron Cummerata', '50737 Zieme Track Apt. 367\nBaileyland, WV 63136-0688', '0074114276', '5392932288863575'),
(47, 'Prof. Joshua Feeney III', '6211 Rosemarie Trail Apt. 761\nPort Travismouth, MO 88513', '0746088068', '4929507916482995'),
(48, 'Mr. Gayle Bartoletti', '877 Heller Flat Suite 133\nEast Alek, CA 39160-1383', '5369922389', '5407667645517579'),
(49, 'Lourdes Ortiz', '9348 Mohamed Locks\nLelahfurt, AL 89730-2049', '9342795627', '3481613060868876'),
(50, 'Laurianne Emard', '8813 Ahmed Pass\nBarrowsbury, LA 62299', '3277106595', '5414584932326986'),
(51, 'Alberto Greenfelder IV', '34114 Doyle Port\nGaylordside, ID 58473-5936', '7081316368', '5515954985596577'),
(52, 'Johnpaul Leuschke II', '80713 Urban Lights Suite 958\nMargretberg, CO 01113', '1627785025', '5563822251926995'),
(53, 'Prof. Elijah Baumbach', '7730 Hulda Spring Suite 269\nSouth Dorothea, IL 97709', '5138137205', '4518853048112869'),
(54, 'Angelina Deckow', '9686 Spinka Mills Apt. 460\nMaiyafurt, WI 34738', '0526876426', '6011548285091956'),
(55, 'Ms. Margie Kris', '7107 Runolfsdottir Alley\nBoyerchester, IN 72971-1765', '4415509745', '5417764395098698'),
(56, 'Luther Kilback IV', '81201 Arvel Island\nKohlerchester, MI 84890-9809', '0521083357', '5511377379376968'),
(57, 'Onie Crooks', '38489 Macejkovic Oval Apt. 893\nWest Curtistown, AL 18883', '9234351898', '4532061871361869'),
(58, 'Margaret Kling', '77769 Christiansen Rue Apt. 083\nAmayaberg, OK 89557', '8021698268', '5209577038973596'),
(59, 'Lorine Blanda III', '7068 Gusikowski Branch Suite 025\nSchmelerfort, WY 63981-7445', '7177854737', '5296682303931575'),
(60, 'Angela Pfannerstill', '251 Joy Burgs Suite 478\nSouth Reyestown, MT 43696-7279', '9129452808', '5321814644217978'),
(61, 'Miss Dorris Brown I', '95591 Abdullah Neck\nLonnyside, WI 14842', '4689150748', '4532966747750969'),
(62, 'Grace Raynor', '8932 Brook Stravenue Suite 498\nWest Arthurborough, WY 38084-8901', '1071878815', '4539668252149685'),
(63, 'Dr. Rocio Glover DDS', '89186 Anna Brooks Suite 513\nEast Raphaelfurt, WA 85536-0572', '3290504397', '5357890253070559'),
(64, 'Isabella Gutkowski', '709 Hudson Shoals\nEast Jaleel, NY 12657-6400', '0235734626', '5460634613132888'),
(65, 'Prof. Marcelina Christiansen', '454 Precious Dale\nPort Marvin, GA 66451-4299', '0132770328', '6011429689920756'),
(66, 'Mr. Joesph Hodkiewicz I', '330 Gerlach Island Suite 699\nNew Jacques, ID 86357-0425', '1072740416', '5434009654053586'),
(67, 'Herman Schmitt', '0886 Cassandra Overpass Apt. 478\nJohnstonchester, AZ 57698', '9564698768', '4485959861848558'),
(68, 'Eleanore Marks III', '7203 Douglas Hill Suite 237\nWittingland, MD 08178', '1547528615', '4485819292723585'),
(69, 'Mr. Roger Jaskolski DDS', '11585 Kihn View\nLake Brendaborough, MD 25034', '5674359237', '5139833604632695'),
(70, 'Alden Littel', '919 Adriel Pine Suite 273\nNew Yesenia, KS 69976', '9310540599', '5593457717403957'),
(71, 'Lauren Connelly', '99388 Robel Branch Suite 939\nNew Fae, OH 60198-0656', '9124369306', '3706260714282695'),
(72, 'Yasmine Barrows', '63720 Rutherford Row\nStantonshire, MN 02264-7645', '0606202827', '3433873566729669'),
(73, 'Colby O\'Connell', '836 Mueller Station\nPort Ofelia, OK 08639-5960', '5803692778', '3483759474460876'),
(74, 'Velma Miller DDS', '3430 Darion Parkway Apt. 492\nNew Tabitha, NC 26253', '0332799229', '5286346918728985'),
(75, 'Novella Hills V', '4566 Hoeger Loaf Suite 032\nWest Hardyburgh, IA 43587', '4928812086', '5319051172540598'),
(76, 'Idell Vandervort', '61687 Block Skyway\nPort Saige, ID 09665', '2632293338', '4916578284262769'),
(77, 'Willa Jacobs', '58320 Bergnaum Cliffs Apt. 141\nSouth Mae, OR 44802-8576', '0961910595', '5592645075667777'),
(78, 'Prof. Kaelyn Hamill', '6756 Mitchell Spur Suite 677\nYostside, OR 92856', '9818601977', '3464091544382675'),
(79, 'Florine Nolan', '946 Deshawn Extension Suite 644\nWuckertshire, NJ 24692-4205', '1218941548', '5354602514978786'),
(80, 'Shemar Kuhlman', '026 Delphia Highway Apt. 687\nIsaiahbury, VT 21224-5936', '1302349299', '4916077762809997'),
(81, 'Keyshawn Denesik', '987 Wyman Fork Apt. 964\nNorth Alvis, MO 69317-2198', '1822817837', '4716336221784867'),
(82, 'Gia Marvin', '3572 Goyette Pine Suite 400\nNew Leola, OH 82715-2330', '4249926429', '4556833721289797'),
(83, 'Dejon Upton', '953 Dayana Avenue Suite 106\nNorth Codyside, FL 90252-5683', '1853231037', '6011664798284699'),
(84, 'Nelda VonRueden', '3299 Nikolaus Estate Suite 726\nLake Dylanberg, OH 92616-0967', '1750067796', '5544703021617565'),
(85, 'Prof. Devante Jaskolski DDS', '18154 Denesik Oval Suite 004\nEast Quentinborough, VA 39641-7732', '2970903566', '5404936807851767'),
(86, 'Tyrese Toy', '14917 Santos Ports Suite 013\nPabloland, WY 21643', '7787003115', '5346874695323977'),
(87, 'Mr. Rowland Crist', '116 Dicki Valley Suite 902\nVeumborough, NC 09230', '2169487326', '5131075367939955'),
(88, 'Josh Stoltenberg', '49656 Robel Union Apt. 061\nReaganport, SD 64400', '4956724189', '5326527354237987'),
(89, 'Gilda Waters', '05550 Cormier Green\nPort Loy, ME 88611-3357', '9552734166', '3732851979305688'),
(90, 'Vella Feeney', '19950 Schamberger Rue\nEast Neoma, KS 61578-3982', '1710545767', '4539859147987866'),
(91, 'Devyn Streich', '31458 Leffler Streets\nKochchester, WV 80721', '1880830495', '4485778933977955'),
(92, 'Christiana Zieme', '011 Davis Fort Apt. 832\nKeeblerchester, AL 07721', '5291059287', '4485380964990685'),
(93, 'Carley Lakin', '707 Roob Rue Apt. 511\nMarvinhaven, AL 98127-6277', '1588710917', '4485979078201996'),
(94, 'Ebony Fritsch', '6833 Maybell Bypass\nObiefort, OH 04246-6774', '9382584795', '4532134154180896'),
(95, 'Maybell Fahey', '60395 Lyric Turnpike Apt. 710\nPort Katlynside, FL 82753', '0975219516', '4539949986502899'),
(96, 'Mallory Rolfson', '7441 Zackery Fort Suite 247\nEast Noahville, CO 40980', '8027303479', '5487468594759999'),
(97, 'Lyla Hahn', '09868 Raynor Stream Suite 661\nHeathcoteshire, SC 11775', '1397945817', '4929144828242768'),
(98, 'Stephon Braun III', '45027 Frederique Prairie Suite 820\nNikkiland, HI 41420', '1107245435', '5314929622064586'),
(99, 'Pansy Blanda', '0457 Torp Green\nDurganburgh, PA 56485-7281', '7189228408', '4929377022877969'),
(100, 'Alda Abbott', '056 Funk River\nWest Stellafort, IA 06373', '1435582327', '4556577103174689'),
(101, 'borel', '94 rue jacque', '4183658542', '1254368921'),
(102, 'borel', '94 rue jacque', '4183658542', '1254368921'),
(103, 'borel', '94 rue jacque', '4183658542', '1254368921'),
(104, 'borel', '94 rue jacque', '4183658542', '1254368921'),
(105, 'borel', '94 rue jacque', '4183658542', '1254368921'),
(106, 'Giovanni', '94 rue jacque', '4183658542', '1254368921'),
(107, 'philip', '97 jean lesage', '5421532629', '421-125-2365');

-- --------------------------------------------------------

--
-- Structure de la table `rentals`
--

CREATE TABLE `rentals` (
  `id` int UNSIGNED NOT NULL,
  `velo_id` int UNSIGNED NOT NULL,
  `client_id` int UNSIGNED NOT NULL,
  `return_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Informations sur les locations d''items.';

--
-- Déchargement des données de la table `rentals`
--

INSERT INTO `rentals` (`id`, `velo_id`, `client_id`, `return_date`) VALUES
(5, 5, 5, NULL),
(6, 6, 6, '2022-10-23'),
(15, 5, 15, NULL),
(16, 6, 16, '2022-10-24'),
(25, 5, 25, NULL),
(26, 6, 26, NULL),
(35, 5, 35, NULL),
(36, 6, 36, '2022-10-26'),
(45, 5, 45, NULL),
(46, 6, 46, NULL),
(55, 5, 55, NULL),
(56, 6, 56, NULL),
(65, 5, 65, NULL),
(66, 6, 66, NULL),
(75, 5, 75, NULL),
(76, 6, 76, '2022-10-27'),
(85, 5, 85, NULL),
(86, 6, 86, '2022-10-28'),
(95, 5, 95, NULL),
(96, 6, 96, '2022-10-29'),
(106, 11, 17, NULL),
(107, 10, 16, NULL),
(108, 10, 16, NULL),
(109, 9, 3, NULL),
(110, 4, 3, NULL),
(111, 7, 12, NULL),
(112, 8, 3, '2022-10-22'),
(114, 5, 2, '2022-10-22'),
(115, 14, 3, '2022-10-26');

-- --------------------------------------------------------

--
-- Structure de la table `velots`
--

CREATE TABLE `velots` (
  `id` int UNSIGNED NOT NULL,
  `hauteur` double(6,2) UNSIGNED ZEROFILL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `prix` double(6,2) UNSIGNED ZEROFILL DEFAULT NULL,
  `available` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Détails sur les vélots à louer';

--
-- Déchargement des données de la table `velots`
--

INSERT INTO `velots` (`id`, `hauteur`, `type`, `prix`, `available`) VALUES
(2, 037.31, 'nisi', 458.36, 1),
(3, 040.81, 'voluptas', 334.27, 1),
(4, 044.67, 'ipsam', 997.33, 1),
(5, 033.66, 'dolores', 515.48, 1),
(6, 034.86, 'sint', 1367.14, 1),
(7, 044.36, 'nostrum', 703.59, 1),
(8, 039.66, 'optio', 1678.74, 1),
(9, 036.43, 'sed', 1710.74, 1),
(10, 035.17, 'molestias', 591.78, 1),
(11, 000.95, 'BMX', 2500.00, 1),
(14, 000.95, 'Vans235', 2500.00, 1),
(15, 011.00, 'Vans235', 2500.00, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK2_client_id` (`client_id`),
  ADD KEY `FK1_velot_id` (`velo_id`) USING BTREE;

--
-- Index pour la table `velots`
--
ALTER TABLE `velots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT pour la table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pour la table `velots`
--
ALTER TABLE `velots`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `FK1_velot_id` FOREIGN KEY (`velo_id`) REFERENCES `velots` (`id`),
  ADD CONSTRAINT `FK2_client_id` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
