-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 08 août 2019 à 10:26
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vglib`
--

-- --------------------------------------------------------

--
-- Structure de la table `contains`
--

DROP TABLE IF EXISTS `contains`;
CREATE TABLE IF NOT EXISTS `contains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `L_id` int(11) NOT NULL,
  `G_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `C_lists` (`L_id`),
  KEY `C_games` (`G_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contains`
--

INSERT INTO `contains` (`id`, `L_id`, `G_id`) VALUES
(33, 39, 8),
(35, 41, 44),
(36, 41, 12);

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `date` date DEFAULT NULL,
  `genre` varchar(45) NOT NULL,
  `editor` varchar(45) NOT NULL,
  `dev` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `cover` text NOT NULL,
  `video` text CHARACTER SET utf8mb4,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `name`, `date`, `genre`, `editor`, `dev`, `description`, `cover`, `video`) VALUES
(1, 'Divekick', '2013-08-20', 'Fighting Game', 'Iron Galaxy', 'Iron Galaxy', 'Divekick is a 2D competitive fighting game originally developed by One True Game Studios, an independent collective made up of a group of competitive gamers. A demo of the game was showcased at several competitive events, and after a positive reaction, the group created a Kickstarter campaign to fund the creation of a full version for release on Microsoft Windows.[1] The Kickstarter project was canceled after it was announced that developer Iron Galaxy Studios had agreed to co-develop and release the game.[2] The name \"Divekick\" is a reference to a common mechanic in many fighting games in which some characters can jump in the air and do a diving kick with a sudden increase in momentum. In fighting games, dive kicks are usually very powerful, abusable tactics. The gameplay in Divekick revolves entirely around this mechanic. The game was released for PlayStation 3, PlayStation Vita, and Microsoft Windows via Steam Greenlight on August 20, 2013 in English-speaking regions.[3] The game was released in Japan on September 17, 2014.[4] A major balance update to the game, titled Divekick: Addition Edition, was released in April 2014, and a port of the game for PlayStation 4 and Xbox One, titled Divekick: Addition Edition +, was released on October 7, 2014.', 'https://bit.ly/2yhYMYy', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/JFvZFLsaXaI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Dragon Ball FighterZ', '2018-01-26', 'Fighting Game', 'Bandai Namco Entertainment', 'Arc System Works', 'Dragon Ball FighterZ est un jeu de combat 2D développé par Arc System Works et édité par Bandai Namco. Cette nouvelle adaptation de la franchise Dragon Ball met en scène les personnages iconiques de la série dans des affrontements explosifs en 3 versus 3', 'https://bit.ly/2YrynSx', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/IW8iG0Bqd3Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Street Fighter 5', '2016-02-16', 'Fighting Game', 'Capcom', 'Capcom', 'Street Fighter V est un jeu vidéo de combat de la série Street Fighter développé et édité par Capcom, sorti le 16 février 2016 sur PlayStation 4 et Microsoft Windows.', 'https://bit.ly/2OmGRuG', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/JfgOKaAoyjc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'Overwatch', '2016-05-24', 'FPS', 'Blizzard Entertainment', 'Blizzard Entertainment', 'Overwatch est un jeu vidéo de tir en vue subjective, en équipes, en ligne, développé et publié par Blizzard Entertainment. Le jeu a été annoncé le 7 novembre 2014 à la BlizzCon, et a été commercialisé le 24 mai 2016 sur Windows, PlayStation 4 et Xbox One.', 'https://bit.ly/2YAYQBD', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/pwFu8kEsUW4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'The Legend of Zelda: Breath of the Wild', '2017-03-03', 'Adventure', 'Nintendo', 'Nintendo', 'The Legend of Zelda: Breath of the Wild (ou simplement Breath of the Wild, parfois abrégé BotW) est un jeu d\'action-aventure développé par la division Nintendo EPD, assisté par Monolith Soft et publié par Nintendo le 3 mars 2017 sur Nintendo Switch lors du lancement de la console, ainsi que sur Wii U dont il est dernier jeu produit par Nintendo. C\'est le dix-huitième jeu de la franchise The Legend of Zelda.\r\n\r\nDans un monde ouvert, Breath of the Wild propose d\'incarner Link, amnésique, qui est réveillé après un long sommeil d\'une centaine d\'années par une mystérieuse voix qui le guide pour éliminer Ganon, le Fléau, et restaurer la paix dans le royaume d\'Hyrule. Comme dans le premier jeu Zelda, sorti en 1986, le joueur reçoit peu d\'instructions et peut librement explorer le monde ouvert, en remplissant différentes tâches s\'il le souhaite. Ces tâches consistent à résoudre des quêtes secondaires ainsi que des énigmes, pour obtenir des récompenses.\r\n\r\nUn des objectifs majeurs de cet épisode fixé par l\'équipe de développement est de repenser les conventions de la série. Le jeu propose ainsi de nouvelles mécaniques de gameplay avec l\'implémentation d\'un moteur physique complet pour la gestion des objets et de l\'environnement, des visuels en haute définition ainsi que des voix-off pour les personnages principaux. Le monde de Breath of the Wild n\'est pas structuré et a été conçu pour récompenser l\'expérimentation. L\'histoire peut ainsi être complétée d\'une manière non linéaire.\r\n\r\nÀ sa sortie, le jeu est encensé par la critique. Malgré quelques faiblesses techniques et des visuels en deçà de ceux des jeux des consoles concurrentes, il est ovationné pour sa direction artistique, la démesure de son monde ouvert et de son contenu, la qualité des musiques et l\'ingéniosité des énigmes. Le jeu reçoit différentes récompenses en 2016 et 2017, dont le prix du jeu de l\'année aux Game Awards 2017. Au 31 décembre 2018, le jeu s\'est écoulé à 13,3 millions d\'exemplaires, avec 11,7 millions sur Nintendo Switch et 1,6 million sur Wii U, faisant de lui le jeu le plus vendu de la série. Une suite directe est annoncée pendant l\'E3 2019.', 'https://bit.ly/32X8c9O', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/zw47_q9wbBE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'Rocket League', '2015-07-07', 'Course', 'Psyonix', 'Psyonix', 'Rocket League est un jeu vidéo de sport développé par Psyonix3, sorti en juillet 2015 sur Windows et sur PlayStation 4, en février 2016 sur Xbox One, en septembre 2016 sur Linux et Mac et en novembre 2017 sur Nintendo Switch.', 'https://bit.ly/1NHpsUx', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/0VE0zjlbD60\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, 'Borderlands', '2009-10-20', 'Shooter Looter', '2K Games', 'Gearbox Software', 'Borderlands est un jeu vidéo mélangeant RPG et tir à la première personne développé par Gearbox Software pour l\'éditeur américain 2K Games. Il est sorti sur PlayStation 3, Xbox 360 et Windows en octobre 2009.\r\n\r\nIl possède quatre contenus additionnels téléchargeables : The Zombie Island Of Dr. Ned, Émeute dans l\'Underdome de Mad Moxxi, L\'Armurerie secrète du Général Knoxx et Nouvelle Révolution.', 'https://bit.ly/2ZiK9jy', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/rZKESnSABHg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'Kill la Kill The Game: IF', '2019-07-26', 'Fighting Game', 'Arc System Works', 'A+ Games', 'Kill la Kill The Game: IF is an upcoming arena battle-action fighting video game being developed by APLUS and published by Arc System Works; releasing in July 25, 2019 on the Playstation 4, Nintendo Switch, and PC via Steam.', 'https://bit.ly/2K3s3M4', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/500ksnsOKII\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'Guilty Gear Xrd -SIGN-', '2015-06-03', 'Fighting Game', 'Arc System Works', 'Arc System Works', 'Guilty Gear Xrd -SIGN- is the 15th entry of the Guilty Gear series which was announced at the 2013 Arc System Works Festival. It is the first Guilty Gear fighting game that uses cell-shaded 3D animations instead of sprites; as such, the characters undergo some changes in design. Daisuke Ishiwatari confirmed that the characters, effects, and backgrounds are all rendered in full 3D. The game is built on the Unreal Engine 3 and runs on Sega\'s RingEdge 2 Multi (ALL Net P-ras MULTI) arcade hardware.[1] The game was released for PlayStation 3 and PlayStation 4 release on December 4th, 2014 in Japan, December 16th in the US and on June 3, 2015 in Europe[2]. It was also released worldwide on Steam on December 9, 2015.', 'https://bit.ly/2ZesRUT', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/NKGPhKu3jNg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'Skullgirls', '2013-08-23', 'Fighting Game', 'Marvelous', 'Lab Zero Games', 'Skullgirls est un jeu de combat dynamique en 2D où vous contrôlez de féroces combattants dans un univers Dark Deco extraordinaire. Doté d’un tout nouveau système de combat qui mettra les amateurs de jeu de combat au défi tout en permettant aux néophytes de s’amuser, Skullgirls est un jeu de baston arcade classique à l’allure moderne, aux graphismes dessinés à la main et en haute définition. C’est un challenge unique, bourré d\'action avec ses combos incroyables et une histoire accrocheuse.', 'https://bit.ly/2SK2Mu9', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/jxLZEdDfR_g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(11, 'Tekken 7', '2017-06-01', 'Fighting Game', 'Bandai Namco', 'Bandai Namco', 'Découvrez le final épique de l\'histoire du clan Mishima ainsi que les raisons qui poussent ses membres à livrer leur incessant combat. Animé par le moteur Unreal Engine 4, TEKKEN 7 comprend d\'époustouflants combats cinématiques scénarisés et d\'intenses duels à vivre avec vos amis ou vos rivaux à travers des mécaniques de combat innovantes.\r\n\r\nAmour, vengeance, fierté. Tout le monde a une raison de se battre. Nos valeurs nous définissent en tant qu\'humains, quelles que soient nos forces ou nos faiblesses. Aucune motivation n\'est mauvaise, seule compte la voie que nous choisissons.\r\n\r\nAllez plus loin sur la voie du guerrier en achetant séparément le Season Pass de TEKKEN 7, et obtenez l\'accès à du contenu supplémentaire incroyable.', 'https://bit.ly/2K8JAT0', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/zzCD-vXE1Ac\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, 'Ultra Street Fighter 4', '2014-08-07', 'Fighting Game', 'Capcom', 'Capcom', 'Le plus grand jeu de combat franchit une nouvelle étape avec Ultra Street Fighter IV. Dans la tradition d’excellence pour laquelle la série est connue, cinq nouveaux personnages et six niveaux ont été ajoutés pour encore plus de combats généralisés, un gameplay rééquilibré et des modes originaux pour couronner le tout. \r\n\r\nEn guise de bonus supplémentaire, vous pouvez profiter de tous les costumes téléchargeables inédits ! Procurez-vous Ultra !', 'https://bit.ly/2yiuTHC', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/7PLznJC1uEY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(13, 'My little Pony: Fighting is magic', NULL, 'Fighting Game', '-', 'Mane6', 'My Little Pony: Fighting is Magic was an upcoming fan-made fighting game inspired by the animated television series My Little Pony Friendship is Magic.[1][2] It was under development by a team of nine volunteers who call themselves Mane6.[3][4] Being of a fan-made nature, this game was neither licensed nor endorsed by Hasbro.\r\n\r\nThough the game will no longer be developed based on the My Little Pony characters, the Mane6 team (with some membership changes) has reused the core gameplay elements they devised, with new non-copyrighted characters provided by artist Lauren Faust, the original creative lead on the Friendship is Magic series.[5] In August 2015, the game was relaunched under the title Them\'s Fightin\' Herds.[6] Them\'s Fightin\' Herds was submitted for crowdfunding through Indiegogo and surpassed its funding goal before the set deadline of October 22, 2015.', 'https://bit.ly/2Gxt0Lz', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/WrRXKGfxRjw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(14, 'UNDER NIGHT IN-BIRTH EXE:LATE[ST]', '2018-08-21', 'Fighting Game', 'Arc System Works', 'FRENCH-BREAD', 'Since time immemorial, the organization “Night Blade” has acted as guardians in what is known as the “Hollow Night”. While resting from her eternal labors in a nondescript town that the Princess of the Night Blade, Linne, meets a young boy named Hyde, who is in possession of the fabled sword of destiny that she has been searching far and wide for.\r\nIn the Hollow Night, monsters called Voids feed upon the power that manifests there, while those known as In-births use that same power for their own ends. While investigating the reason behind the sudden increase in the numbers of both Voids and In-births in the Hollow Night, Linne hears of an evil plot being hatched by someone calling themselves “Paradox”. This person turns out to be none other than Hilda, the leader of a shadowy organization known as “Amnesia”.\r\n\r\nVowing to stop “Paradox” before her nefarious plans come to fruition, Linne heads off into the Night. Unbeknownst to her, the young boy she encountered, Hyde, follows behind her with a desperate need to know who, and what, she is.\r\nAnd thus, the story of the Hollow Night and In-births begins–-', 'https://bit.ly/2ZfmVLh', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/1KRCFCoUgbA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(15, 'Persona 4 Arena Ultimax', '2014-11-21', 'Fighting Game', 'Atlus', 'Arc System Works', 'Persona 4 Arena Ultimax[b] is a fighting video game developed by Arc System Works and Atlus. It is the direct sequel to the 2012 game, Persona 4 Arena, which is itself a follow-up to the role-playing game, Persona 4. The game was originally released in Japanese arcades in November 2013, and was released worldwide for the PlayStation 3 and Xbox 360 in 2014.[5][6][7][8][7] Unlike the previous game, it features no region locking.  Set shortly after the events of Persona 4 Arena, the story focuses on the two protagonists groups, The Investigation Team and the Kirijo Group, who are trapped in a dimension known as the Dark Hour where they encounter doppelgangers known as Shadows. As the story progresses, the cast meets apparent culprit behind this, a teenager known as Sho Minazuki. While retaining gameplay elements from Persona 4 Arena, now the player can directly choose each character\'s Shadow that change the gameplay elements. The game was well received by video game publications.', 'https://bit.ly/30YDqM8', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/uhD8P7_llf0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(16, 'Ultimate Marvel VS. Capcom 3', '2017-03-07', 'Fighting Game', 'Capcom', 'Capcom', 'Marvel et Capcom se sont associés pour vous proposer les combats en équipe à 3 contre 3 les plus intenses qui soient avec Ultimate Marvel vs. Capcom 3. Ce nouveau titre regorge de fonctionnalités et propose notamment tous les contenus téléchargeables précédents ainsi que Marvel vs. Capcom: Official Complete Works. Faites votre choix parmi certains des personnages les plus emblématiques de Marvel et Capcom, puis personnalisez votre équipe grâce au mode \"Héros et Hérauts\". Une fois vos compétences affûtées, jouez en ligne pour affronter des joueurs du monde entier et découvrir qui est le meilleur combattant de l\'univers.', 'https://bit.ly/2Y4FO70', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/DfuYRxhphvc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(44, 'Super Smash Bros. Ultimate', '2018-12-07', 'Fighting Game', 'Nintendo', 'Sora Ltd.', 'Super Smash Bros. Ultimate est un jeu vidÃ©o de combat et de plates-formes dÃ©veloppÃ© par Sora Ltd. et Bandai Namco et Ã©ditÃ© par Nintendo. Il s\'agit du cinquiÃ¨me Ã©pisode de la sÃ©rie Super Smash Bros.. AnnoncÃ© lors du Nintendo Direct du 8 mars 2018, il est sorti mondialement le 7 dÃ©cembre 2018 exclusivement sur Nintendo Switch.', 'https://s3.dexerto.com/thumbnails/_thumbnailLarge/nintendo-switch-super-smash-bros-ultimate-dlc-characters-leaked-surprising-nintendo-direct.jpg', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/uHRwMmwbFnA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(45, 'GAROU: MARK OF THE WOLVES', '1999-11-11', 'Fighting Game', 'SNK', 'SNK', 'Garou: Mark of the Wolves est un jeu de combat en 2D dÃ©veloppÃ© par SNK et sorti sur Neo-Geo MVS et Neo-Geo AES en 1999 (NGM / NGH 253)1,2,3. Le jeu fut rÃ©Ã©ditÃ© sur Dreamcast et PlayStation 2. HuitiÃ¨me et dernier Ã©pisode de la sÃ©rie Fatal Fury et l\'un des derniers jeux de SNK avant son rachat, Garou: Mark of the Wolves est considÃ©rÃ© comme l\'un des plus grands jeux du genre.', 'https://fanatical.imgix.net/product/original/7b688580-2679-4367-9ecc-69a4814aaaf5.jpeg?auto=compress,format&w=400&fit=fillmax', '<iframe width=\"1200\" height=\"675\" src=\"https://www.youtube.com/embed/AuGTd_rVLEc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Structure de la table `lists`
--

DROP TABLE IF EXISTS `lists`;
CREATE TABLE IF NOT EXISTS `lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `U_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `C_userlists` (`U_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lists`
--

INSERT INTO `lists` (`id`, `name`, `U_id`) VALUES
(38, 'Games to buy', 1),
(39, 'Versus Fighting', 1),
(41, 'Games I own', 3),
(42, 'Solo games', 1),
(43, 'Racing games', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` text NOT NULL,
  `mdp` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `mail`, `mdp`) VALUES
(1, 'admin@admin.com', '9fd7246b70d33a443e1e534ab6865bdd'),
(2, 'test@test.test', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'thiswebsiteis@wesome', '8d78dfb5f8b6e64ad8f947e3bc4411cb');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `C_games` FOREIGN KEY (`G_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `C_lists` FOREIGN KEY (`L_id`) REFERENCES `lists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `lists`
--
ALTER TABLE `lists`
  ADD CONSTRAINT `C_userlists` FOREIGN KEY (`U_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
