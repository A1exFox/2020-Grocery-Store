/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: grocery_store
-- ------------------------------------------------------
-- Server version	11.7.2-MariaDB-ubu2404

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `wfm_categories`
--

DROP TABLE IF EXISTS `wfm_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `wfm_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wfm_categories`
--

LOCK TABLES `wfm_categories` WRITE;
/*!40000 ALTER TABLE `wfm_categories` DISABLE KEYS */;
INSERT INTO `wfm_categories` VALUES
(1,'Apple','apple'),
(2,'Asus','asus'),
(3,'Nokia','nokia'),
(4,'Samsung','samsung'),
(5,'Sony','sony');
/*!40000 ALTER TABLE `wfm_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wfm_countries`
--

DROP TABLE IF EXISTS `wfm_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `wfm_countries` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wfm_countries`
--

LOCK TABLES `wfm_countries` WRITE;
/*!40000 ALTER TABLE `wfm_countries` DISABLE KEYS */;
INSERT INTO `wfm_countries` VALUES
('AU','Australia',24016400,0),
('BR','Brazil',205722000,0),
('CA','Canada',35985751,0),
('CN','China',1375210000,0),
('DE','Germany',81459000,1),
('FR','France',64513242,1),
('GB','United Kingdom',65097000,0),
('IN','India',1285400000,0),
('RU','Russia',146519759,0),
('US','United States',322976000,0);
/*!40000 ALTER TABLE `wfm_countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wfm_products`
--

DROP TABLE IF EXISTS `wfm_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `wfm_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wfm_products`
--

LOCK TABLES `wfm_products` WRITE;
/*!40000 ALTER TABLE `wfm_products` DISABLE KEYS */;
INSERT INTO `wfm_products` VALUES
(1,'Apple iPhone XS Max 64GB (Silver) Dual SIM',1,1100),
(2,'iPhone 7 Plus 128Gb Black',1,600),
(3,'Apple iPhone SE 32gb Gold Neverlock',1,400),
(4,'Мобильный телефон Asus ZenFone Live 2GB/32GB (ZB501KL-4A053A) DualSim Navy Black',2,120),
(5,'Мобильный телефон Nokia 3.1 Plus Dual Sim 3/32GB TA-1104 Baltic',3,150),
(6,'Мобильный телефон Nokia 7 Plus Dual Sim Black',3,280),
(7,'Мобильный телефон Samsung Galaxy S10 8/128 GB Black (SM-G973FZKDSEK)',4,1000),
(8,'Мобильный телефон Samsung Galaxy A30 4/64GB Blue (SM-A305FZBOSEK)',4,220),
(9,'Мобильный телефон Samsung Galaxy S9 Plus 64GB Titanium Gray',4,800),
(10,'Мобильный телефон Samsung Galaxy Note 9 6/128GB Midnight Black',4,850);
/*!40000 ALTER TABLE `wfm_products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-06-15 12:08:26
