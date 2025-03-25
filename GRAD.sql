-- Adminer 4.8.1 MySQL 10.5.19-MariaDB-0+deb11u2 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Contact`;
CREATE TABLE `Contact` (
  `Nom` char(100) NOT NULL,
  `Prenom` char(100) NOT NULL,
  `CP` int(100) NOT NULL,
  `Adresse` text NOT NULL,
  `Email` text NOT NULL,
  `Telephone` int(100) NOT NULL,
  `LeMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Contact` (`Nom`, `Prenom`, `CP`, `Adresse`, `Email`, `Telephone`, `LeMessage`) VALUES
('$nom',	'$prenom',	33000,	'$adresse',	'$email',	123456789,	'$lemessage'),
('Chagneau',	'thomas',	33240,	'11 rue de la paix',	'thomas.chagneau@lycee-elie-vinet.org',	665440358,	'Je veux une véranda'),
('Dupont',	'William',	78000,	'25 rue des courgettes',	'adressemail@gmail.com',	123456789,	'Jaimerais un garage'),
('Mustang',	'Roy',	78000,	'Paris',	'roymustang@gmail.com',	269857420,	''),
('test',	'test',	81000,	'Tarn',	'test.test@gmail.com',	123456978,	'le message est long exprés pour faire un test dans ma base SQL et dans le tableau de la BD HTML'),
('test',	'test',	81000,	'Tarn',	'test.test@gmail.com',	123456978,	'le message est long exprés pour faire un test dans ma base SQL et dans le tableau de la BD HTML'),
('Bernard',	'Baptiste',	17500,	'allas',	'bernard.baptsite@lycee-elie-vinet.org',	645781293,	'je veux une pergola'),
('Bernard',	'Baptiste',	17500,	'allas',	'bernard.baptsite@lycee-elie-vinet.org',	645781293,	'je veux une pergola');

DROP TABLE IF EXISTS `Panier`;
CREATE TABLE `Panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit` text NOT NULL,
  `prix` float NOT NULL,
  `nombre` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Panier` (`id`, `produit`, `prix`, `nombre`) VALUES
(85,	'lames thermopins',	15,	1),
(86,	'Accoya',	9,	1),
(87,	'lames thermopins',	15,	1),
(88,	'lames thermopins',	15,	1);

DROP TABLE IF EXISTS `Produits`;
CREATE TABLE `Produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` text NOT NULL,
  `description` text NOT NULL,
  `image_prod` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Produits` (`id`, `nom_produit`, `description`, `image_prod`) VALUES
(1,	'Lames thermopins',	'Le pin modifié thermiquement ne nécessite pas un traitement chimique supplémentaire et fait état d\'une remarquable stabilité. La combinaison avec le Clip JuAn est parfaite. De qualité Saw-falling grade A-B, avec en moyenne 2 à 5 noeuds au mètre linéaire, il affiche une allure résolument rustique. Le thermopin est d\'une densité faible: son pouvoir isolant sera d\'autant plus important. La stabilité liée au traitement thermique garantit une tenue bien plus longue des produits de finition. Nous recommandons fortement l\'application d\'une huile pour préserver la couleur du bois. ',	'.'),
(2,	'Lames Accoya',	'Imaginez un bois solide, récolté dans une foet à croissance et à renouvellement rapides, qui n\'aurait aucune toxicité, aucune variation dimensionnelle et d\'une durabilité supérieure à celle des meilleures essences tropicales. Si l\'on accepte ou si l\'on recherche le grisaillement traditionnel du bois, l\'Accoya n\'a besoin d\'aucun traitement particulier. En revanche, ce bois se prête particulièrement bien à à l\'application d\'une huile teintée. En effet, à l\'inverse de tous les autres bois, la stabilité du support induit ici le triplement de la durée de vie de n\'importe quel produit de finition. ',	'.'),
(3,	'Le bois Kebony ',	'Un matériau révolutionnaire Le Kebony est beaucoup plus stable que le bois massif traditionnel. Sa couleur chaude brun-rouge s’apparente à celle des essences tropicales, et évoluera vers une patine argentée qui lui gardera toute sa noblesse. Même sans aucune forme d’entretien, la longévité du Kebonyest impressionnante.La société Kebony a été lauréate de nombreux et prestigieux prix pour ses innovations au service de la préservation de la ressource bois dans le cadre d’une démarche respectueuse de l’environnement. ',	'\r\n.'),
(4,	'Le Douglas',	'Grâce à un profilage expert et à une mise en œuvre particulière de la technologie Grad, le Douglas présente une résistance naturelle et une pérennité accrues. Après un passage en séchoir, le bois est soigneusement raboté, et combiné à son faible retrait radial, il devient idéal pour une fixation aisée avec le système innovant du clip JuAn®. Conformément à la norme régissant les platelages extérieurs en bois (DTU 51-4), ces améliorations dans la conception des lames garantissent leur capacité à répondre efficacement aux sollicitations de la classe 4. ',	'.');

DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` text NOT NULL,
  `motdepasse` text NOT NULL,
  `role` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `User` (`id`, `identifiant`, `motdepasse`, `role`) VALUES
(15,	'paul',	'098f6bcd4621d373cade4e832627b4f6',	'Utilisateur'),
(16,	'test',	'098f6bcd4621d373cade4e832627b4f6',	'Utilisateur');

-- 2023-12-15 10:56:32
