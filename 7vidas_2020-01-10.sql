# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.25)
# Database: 7vidas
# Generation Time: 2020-01-10 23:40:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id`, `categoria`)
VALUES
	(1,'televisores y pantallas'),
	(2,'blu ray'),
	(3,'cámaras fotográficas'),
	(4,'videojuegos'),
	(5,'smartphones'),
	(6,'tabletas electrónicas'),
	(7,'computadoras'),
	(9,'proyector de video'),
	(11,'estereos y minicomponentes'),
	(12,'teatro en casa'),
	(13,'autoestéreos'),
	(14,'Instrumentos de cuerrda'),
	(15,'teclados'),
	(16,'amplificadores');

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table estado
# ------------------------------------------------------------

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `estado` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;

INSERT INTO `estado` (`id`, `estado`)
VALUES
	(01,'Bueno'),
	(02,'Regular'),
	(03,'Malo');

/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table evidencias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `evidencias`;

CREATE TABLE `evidencias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table marcas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `marcas`;

CREATE TABLE `marcas` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `cat` int(6) DEFAULT NULL,
  `marca` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;

INSERT INTO `marcas` (`id`, `cat`, `marca`)
VALUES
	(1,1,'Akai'),
	(2,1,'Durabrand'),
	(3,1,'Hisense'),
	(4,1,'Jensen'),
	(5,1,'Kodak'),
	(6,1,'Mastertech'),
	(7,1,'Nec'),
	(8,1,'Philips'),
	(9,1,'RCA'),
	(10,1,'Sanyo'),
	(11,1,'Tekno'),
	(12,1,'Vizio'),
	(13,1,'Asus'),
	(14,1,'Emerson'),
	(15,1,'Hitachi'),
	(16,1,'JVC'),
	(17,1,'LG'),
	(18,1,'Mitsui'),
	(19,1,'Panasonic'),
	(20,1,'Pioneer'),
	(21,1,'Samsung'),
	(22,1,'Sharp'),
	(23,1,'Telstar'),
	(24,1,'Vsonic'),
	(25,1,'Daewoo'),
	(26,1,'Haier'),
	(27,1,'Hkpro'),
	(28,1,'Kingsley'),
	(29,1,'Makena'),
	(30,1,'Naoki'),
	(31,1,'Parker'),
	(32,1,'Polaroid'),
	(33,1,'Sansui'),
	(34,1,'Sony'),
	(35,1,'Toshiba'),
	(36,1,'Zenith'),
	(37,2,'Sony'),
	(38,2,'Continental'),
	(39,2,'Kenwood'),
	(40,2,'Magnavox'),
	(41,2,'Mitsui'),
	(42,2,'Naoki'),
	(43,2,'Philips'),
	(44,2,'Samsung'),
	(45,2,'Telstar'),
	(46,2,'Audiovox'),
	(47,2,'Jensen'),
	(48,2,'LG'),
	(49,2,'Mastertech'),
	(50,2,'Nakazaki'),
	(51,2,'Panasonic'),
	(52,2,'RCA'),
	(53,2,'Sharp'),
	(54,2,'Vsonic'),
	(55,3,'Canon'),
	(56,3,'Nikon'),
	(57,3,'Sony'),
	(58,3,'Olympus'),
	(59,5,'Sony'),
	(60,5,'iPhone'),
	(61,5,'Blu'),
	(62,5,'HTC'),
	(63,5,'Lanix'),
	(64,5,'LG'),
	(65,5,'Nyx'),
	(66,5,'Pantech'),
	(67,5,'Rinno'),
	(68,5,'Acer'),
	(69,5,'Asus'),
	(70,5,'Doppio'),
	(71,5,'Huawei'),
	(72,5,'Lava'),
	(73,5,'M4tel'),
	(74,5,'Oppo'),
	(75,5,'PCD'),
	(76,5,'Samsung'),
	(77,5,'Alcatel'),
	(78,5,'Azumi'),
	(79,5,'Hisense'),
	(80,5,'Kodak'),
	(81,5,'Lenovo'),
	(82,5,'Motorola'),
	(83,5,'Panasonic'),
	(84,5,'Polaroid'),
	(85,5,'Senwa'),
	(86,4,'Xbox One S'),
	(87,4,'Playstation 3'),
	(88,4,'Nintendo 3DS'),
	(89,4,'Xbox One'),
	(90,4,'Wii U'),
	(91,4,'Nintendo Classic'),
	(92,4,'Playstation 4'),
	(93,4,'Wii'),
	(94,6,'Acer'),
	(95,6,'Azpen'),
	(96,6,'Ematic'),
	(97,6,'Inco'),
	(98,6,'Lenovo'),
	(99,6,'Nvidia'),
	(100,6,'Sakar'),
	(101,6,'Vak'),
	(102,6,'Alcatel'),
	(103,6,'Dell'),
	(104,6,'HP'),
	(105,6,'iView'),
	(106,6,'LG'),
	(107,6,'Oem'),
	(108,6,'Samsung'),
	(109,6,'Zuum'),
	(110,6,'Apple'),
	(111,6,'Disney'),
	(112,6,'HTC'),
	(113,6,'Kindle'),
	(114,6,'Microsoft'),
	(115,6,'Panasonic'),
	(116,6,'TechPad'),
	(117,7,'Lanix'),
	(118,7,'Acer'),
	(119,7,'Asus'),
	(120,7,'Dell'),
	(121,7,'HP'),
	(122,7,'Lenovo'),
	(123,7,'Apple Mac'),
	(124,7,'Samsung'),
	(125,7,'Gateway'),
	(129,7,'Compaq'),
	(133,7,'Benq'),
	(137,9,'Acer'),
	(138,9,'Canon'),
	(139,9,'Hitachi'),
	(140,9,'Panasonic'),
	(141,9,'Sharp'),
	(142,9,'Benq'),
	(143,9,'Epson'),
	(144,9,'Mitsubishi'),
	(145,9,'Sanyo'),
	(146,9,'Sony'),
	(147,10,'HP'),
	(148,10,'Canon'),
	(149,10,'Kodak'),
	(150,10,'Ricoh'),
	(151,10,'Xerox'),
	(152,10,'Brother'),
	(153,10,'Epson'),
	(154,10,'Lexmark'),
	(155,10,'Samsung'),
	(156,11,'Daewoo'),
	(157,11,'JVC'),
	(158,11,'Onkyo'),
	(159,11,'Philips'),
	(160,11,'RCA'),
	(161,11,'Sharp'),
	(162,11,'Telstar'),
	(163,11,'Bose'),
	(164,11,'LG '),
	(165,11,'Panasonic '),
	(166,11,'Pioneer '),
	(167,11,'Samsung '),
	(168,11,'Sony '),
	(169,11,'Yamaha '),
	(170,12,'Bose '),
	(171,12,'JVC '),
	(172,12,'Panasonic '),
	(173,12,'RCA '),
	(174,12,'Sonos '),
	(175,12,'Boston Acoustics '),
	(176,12,'LG '),
	(177,12,'Philips '),
	(178,12,'Samsung '),
	(179,12,'Sony '),
	(180,12,'Daewoo '),
	(181,12,'Marantz '),
	(182,12,'Pioneer '),
	(183,12,'Sharp '),
	(184,12,'Yamaha '),
	(185,13,'Alpine '),
	(186,13,'JVC '),
	(187,13,'LG '),
	(188,13,'Pioneer '),
	(189,13,'Sony '),
	(190,13,'Audiovox '),
	(191,13,'Kenwood '),
	(192,13,'Panasonic '),
	(193,13,'RCA '),
	(194,14,'Yamaha '),
	(195,14,'Gibson '),
	(196,14,'Ovation '),
	(197,14,'Playmate '),
	(198,14,'Squire '),
	(199,14,'Epiphone '),
	(200,14,'Ibanez '),
	(201,14,'Palmer '),
	(202,14,'Roland '),
	(203,14,'Washburn '),
	(204,14,'Fender '),
	(205,14,'Kaiser '),
	(206,14,'Peavey '),
	(207,14,'Sakura '),
	(208,15,'Yamaha'),
	(209,15,'casio'),
	(210,15,'roland'),
	(211,16,'Great '),
	(212,16,'Peavey '),
	(213,16,'Yamaha '),
	(214,16,'Marshall '),
	(215,16,'Roland '),
	(216,16,'Bose '),
	(217,16,'Mega '),
	(218,16,'Smarbo ');

/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table referencias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `referencias`;

CREATE TABLE `referencias` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(6) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `url` text,
  `nuevo` int(1) DEFAULT NULL,
  `querystring` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `referencias` WRITE;
/*!40000 ALTER TABLE `referencias` DISABLE KEYS */;

INSERT INTO `referencias` (`id`, `cat_id`, `nombre`, `url`, `nuevo`, `querystring`, `created_at`, `updated_at`)
VALUES
	(1,8,'Abasteo','https://www.abasteo.mx/index.php?cl=search&searchparam=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(2,7,'Abasteo','https://www.abasteo.mx/index.php?cl=search&searchparam=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(3,1,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(4,2,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(5,3,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(6,4,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(7,5,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(8,6,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(9,7,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(10,8,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(11,9,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(12,11,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(13,12,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(14,13,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(15,14,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(16,15,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(17,16,'Amazon Mexico','https://www.amazon.com.mx/s?k=%%mca%%+%%mdl%%+%%vrs%%',0,NULL,NULL,NULL),
	(18,5,'AT&T Mexico','https://www.att.com.mx/tienda/catalogsearch/result/?q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(19,1,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(20,2,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(21,3,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(22,4,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(23,5,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(24,6,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(25,7,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(26,8,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(27,9,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(28,11,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(29,12,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(30,13,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(31,14,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(32,15,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(33,16,'Best Buy Mexico','https://www.bestbuy.com.mx/c/buscar-best-buy/buscar?query=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(34,14,'Casa Veerkamp','https://veerkamponline.com/search?q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(35,1,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(36,2,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(37,3,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(38,4,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(39,5,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(40,6,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(41,7,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(42,8,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(43,9,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(44,11,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(45,12,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(46,13,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(47,14,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(48,15,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(49,16,'Chedraui','https://www.chedraui.com.mx/search?text=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(50,1,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(51,2,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(52,3,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(53,4,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(54,5,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(55,6,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(56,7,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(57,8,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(58,9,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(59,11,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(60,12,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(61,13,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(62,15,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(63,16,'Claro Shop','https://www.claroshop.com/buscador/%%mca%%+%%mdl%%+%%vrs%%/1/',1,NULL,NULL,NULL),
	(64,1,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(65,2,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(66,3,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(67,4,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(68,5,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(69,6,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(70,7,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(71,8,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(72,9,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(73,11,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(74,12,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(75,13,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(76,14,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(77,15,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(78,16,'Comercial Mexicana','https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=false&ver=mislistas&succFmt=100&criterio=%%mca%%+%%mdl%%+%%vrs%%#/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(79,1,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(80,2,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(81,3,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(82,4,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(83,5,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(84,6,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(85,7,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(86,8,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(87,9,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(88,11,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(89,12,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(90,13,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(91,14,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(92,15,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(93,16,'Coppel','https://www.coppel.com/SearchDisplay?categoryId=&storeId=12761&catalogId=10001&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=12&searchTerm=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(94,1,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(95,2,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(96,3,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(97,4,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(98,5,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(99,6,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(100,7,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(101,8,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(102,9,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(103,11,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(104,12,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(105,13,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(106,14,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(107,15,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(108,16,'Costco','https://www.costco.com.mx/search/?text=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(109,7,'Cyberpuerta','https://www.cyberpuerta.mx/index.php?cl=search&searchparam=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(110,8,'Cyberpuerta','https://www.cyberpuerta.mx/index.php?cl=search&searchparam=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(111,1,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(112,2,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(113,3,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(114,4,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(115,5,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(116,6,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(117,7,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(118,8,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(119,9,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(120,11,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(121,12,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(122,13,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(123,14,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(124,15,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(125,16,'Elektra','https://www.elektra.com.mx/%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(126,1,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(127,2,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(128,3,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(129,4,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(130,5,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(131,6,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(132,7,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(133,8,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(134,9,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(135,11,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(136,12,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(137,13,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(138,14,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(139,15,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(140,16,'Famsa','https://www.famsa.com/busqueda/?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(141,4,'Game Planet','https://gameplanet.com/catalogsearch/result/?q=%%mca%%%20%%mdl%%%20%%vrs%%&mode=list&order=popularidad',1,NULL,NULL,NULL),
	(142,14,'Holcausto Music','https://holocaustomusic.com/search?type=product&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(143,14,'Libher Music','https://libhermusic.com/?subcats=Y&pcode_from_q=Y&pshort=Y&pfull=Y&pname=Y&pkeywords=Y&search_performed=Y&q=%%mca%%+%%mdl%%+%%vrs%%&dispatch=products.search',1,NULL,NULL,NULL),
	(144,1,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(145,2,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(146,3,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(147,4,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(148,5,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(149,6,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(150,7,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(151,8,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(152,9,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(153,11,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(154,12,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(155,13,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(156,14,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(157,15,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(158,16,'Linio','https://www.linio.com.mx/search?scroll=&q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(159,1,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(160,2,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(161,3,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(162,4,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(163,5,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(164,6,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(165,7,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(166,8,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(167,9,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(168,11,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(169,12,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(170,13,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(171,14,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(172,15,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(173,16,'Liverpool','https://www.liverpool.com.mx/tienda?s=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(174,5,'Movistar México','https://tienda.movistar.com.mx/catalogsearch/result/?q=%%mca%%+%%mdl%%+%%vrs%%',1,NULL,NULL,NULL),
	(175,5,'Telcel','https://www.telcel.com/content/telcel/buscador.f_text=%%mca%%%20%%mdl%%%20%%vrs%%.html',1,NULL,NULL,NULL),
	(176,1,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(177,2,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(178,3,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(179,4,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(180,5,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(181,6,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(182,7,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(183,8,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(184,9,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(185,11,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(186,12,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(187,13,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(188,14,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(189,15,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(190,16,'Walmart México ','https://www.walmart.com.mx/productos?Ntt=%%mca%%%20%%mdl%%%20%%vrs%%',1,NULL,NULL,NULL),
	(191,1,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(192,2,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(193,3,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(194,4,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(195,5,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(196,6,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(197,7,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(198,8,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(199,9,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(200,11,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(201,12,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(202,13,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(203,14,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(204,15,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(205,16,'Mercado libre','https://listado.mercadolibre.com.mx/%%mca%%-%%mdl%%-%%vrs%%#D[A:%%mca%%%20%%mdl%%%20%%vrs%%]',0,NULL,NULL,NULL),
	(206,1,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(207,2,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(208,3,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(209,4,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(210,5,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(211,6,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(212,7,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(213,8,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(214,9,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(215,11,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(216,12,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(217,13,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(218,14,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(219,15,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL),
	(220,16,'Ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=%%mca%%+%%mdl%%+%%vrs%%&_sacat=0',0,NULL,NULL,NULL);

/*!40000 ALTER TABLE `referencias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table subcategorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `subcategorias`;

CREATE TABLE `subcategorias` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_cat` int(6) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `subcategorias` WRITE;
/*!40000 ALTER TABLE `subcategorias` DISABLE KEYS */;

INSERT INTO `subcategorias` (`id`, `id_cat`, `nombre`)
VALUES
	(1,11,'Modulares gama baja'),
	(2,11,'Modulares gama alta (NFC)'),
	(3,11,'Grabadoras'),
	(4,11,'Bocinas con bluetooth y recargables'),
	(5,13,'Autoestéreos'),
	(6,11,'Audífonos'),
	(7,12,'Teatro en casa'),
	(8,1,'Pantlla Led no Smart TV'),
	(9,1,'Smart TV'),
	(10,1,'Smart TV UHD 4K'),
	(11,6,'Android'),
	(12,6,'Apple'),
	(13,5,'Android'),
	(14,5,'Apple'),
	(15,4,'Consolas'),
	(16,4,'Juegos originales'),
	(17,7,'Laptop'),
	(18,7,'Desktop'),
	(19,9,'Proyector'),
	(20,3,'Profesionales'),
	(21,14,'Guitarras / Bajos'),
	(22,15,'Teclado electrónico'),
	(23,2,'bluray player'),
	(24,16,'De Guitarra / Bajo');

/*!40000 ALTER TABLE `subcategorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Elvis Presley','elvis@mail.com',NULL,'$2y$10$FUZzkSa5YSb5Xn82LaQBs.sxMrCGYUcCZys3BA2deer.i.P362M9u',NULL,'2019-10-22 00:29:44','2019-10-22 00:29:44'),
	(2,'Juan Perez','juan@mail.com',NULL,'$2y$10$ekqf6qCZsTkT2k9ah/gjQ.E38i3IuQZkWRJIlodyZtr162X1294HO',NULL,'2019-12-30 21:07:24','2019-12-30 21:07:24');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table valuaciones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `valuaciones`;

CREATE TABLE `valuaciones` (
  `id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `marca` int(6) DEFAULT NULL,
  `modelo` varchar(200) DEFAULT NULL,
  `version` varchar(200) DEFAULT NULL,
  `categoria` int(6) DEFAULT NULL,
  `subcategoria` int(6) DEFAULT NULL,
  `ano` year(4) DEFAULT NULL,
  `estado` varchar(55) DEFAULT NULL,
  `nuevo` int(1) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `etapa` int(1) DEFAULT NULL,
  `valuador` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `valuaciones` WRITE;
/*!40000 ALTER TABLE `valuaciones` DISABLE KEYS */;

INSERT INTO `valuaciones` (`id`, `marca`, `modelo`, `version`, `categoria`, `subcategoria`, `ano`, `estado`, `nuevo`, `valor`, `etapa`, `valuador`, `created_at`, `updated_at`)
VALUES
	(000001,89,'ONE','32gb',4,4,NULL,'1',0,NULL,1,1,'2019-12-29 16:33:19','2019-12-29 16:33:19'),
	(000002,89,'ONE','32gb',4,4,NULL,'1',0,NULL,1,2,'2019-12-29 16:34:41','2019-12-29 16:34:41'),
	(000003,89,'ONE','32gb',4,4,NULL,'1',0,NULL,1,2,'2019-12-29 16:35:04','2019-12-29 16:35:04'),
	(000004,89,'ONE','32gb',4,4,NULL,'1',0,NULL,1,2,'2019-12-29 16:36:06','2019-12-29 16:36:06'),
	(000005,14,'csv','32\'',1,10,NULL,'1',0,NULL,1,1,'2019-12-29 16:45:49','2019-12-29 16:45:49'),
	(000006,187,'KWC-YYU','USB+bluethoot',13,5,'2017','3',0,NULL,1,1,'2019-12-30 17:34:20','2019-12-30 17:34:20'),
	(000007,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,1,'2019-12-30 17:36:32','2019-12-30 17:36:32'),
	(000008,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,1,'2019-12-30 17:37:43','2019-12-30 17:37:43'),
	(000009,187,'KWC-YYU','USB+bluethoot',13,5,'2017','3',0,NULL,1,1,'2019-12-30 17:40:46','2019-12-30 17:40:46'),
	(000010,187,'KWC-YYU','USB+bluethoot',13,5,'2017','1',0,NULL,1,2,'2019-12-30 17:41:01','2019-12-30 17:41:01'),
	(000011,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,2,'2019-12-30 17:42:36','2019-12-30 17:42:36'),
	(000012,187,'KWC-YYU','USB+bluethoot',13,5,'2017','1',0,NULL,1,2,'2019-12-30 17:45:16','2019-12-30 17:45:16'),
	(000013,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,2,'2019-12-30 17:46:04','2019-12-30 17:46:04'),
	(000014,187,'KWC-YYU','USB+bluethoot',13,5,'2017','1',0,NULL,1,1,'2019-12-30 17:46:14','2019-12-30 17:46:14'),
	(000015,187,'KWC-YYU','USB+bluethoot',13,5,'2017','1',0,NULL,1,1,'2019-12-30 17:46:58','2019-12-30 17:46:58'),
	(000016,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,1,'2019-12-30 17:49:39','2019-12-30 17:49:39'),
	(000017,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,2,'2019-12-30 17:50:13','2019-12-30 17:50:13'),
	(000018,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,1,'2019-12-30 17:50:29','2019-12-30 17:50:29'),
	(000019,187,'KWC-YYU','USB+bluethoot',13,5,'2017','3',0,NULL,1,2,'2019-12-30 17:50:46','2019-12-30 17:50:46'),
	(000020,187,'KWC-YYU','USB+bluethoot',13,5,'2017','1',0,NULL,1,1,'2019-12-30 17:53:18','2019-12-30 17:53:18'),
	(000021,187,'KWC-YYU','USB+bluethoot',13,5,'2017','3',0,NULL,1,1,'2019-12-30 17:53:57','2019-12-30 17:53:57'),
	(000022,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,2,'2019-12-30 17:54:40','2019-12-30 17:54:40'),
	(000023,187,'KWC-YYU','USB+bluethoot',13,5,'2017','2',0,NULL,1,1,'2019-12-30 17:55:12','2019-12-30 17:55:12'),
	(000024,10,'SVC-12','32\"',1,9,'2019','1',1,NULL,1,1,'2019-12-30 19:58:00','2019-12-30 19:58:00'),
	(000025,25,'ffrt454','50\'',1,8,'2018','2',0,NULL,1,2,'2019-12-30 21:13:41','2019-12-30 21:13:41'),
	(000026,195,'RDA-SSC','Nylon',14,21,'2018','1',1,NULL,1,2,'2019-12-30 23:39:59','2019-12-30 23:39:59'),
	(000027,60,'6 plus','128gb',5,14,'2017','3',0,NULL,1,2,'2019-12-30 23:45:27','2019-12-30 23:45:27'),
	(000028,60,'6 plus','128gb',5,14,'2017','3',0,NULL,1,2,'2019-12-30 23:51:58','2019-12-30 23:51:58'),
	(000029,122,'ThinkCentre','M720',7,18,'2020','1',1,NULL,1,1,'2020-01-08 01:02:31','2020-01-08 01:02:31'),
	(000030,122,'ThinkCentre','M720',7,18,'2020','1',1,NULL,1,1,'2020-01-08 01:04:24','2020-01-08 01:04:24'),
	(000031,122,'ThinkCentre','M720',7,18,'2020','1',1,NULL,1,1,'2020-01-08 01:05:16','2020-01-08 01:05:16');

/*!40000 ALTER TABLE `valuaciones` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
