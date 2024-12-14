-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: ScienceEvent
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Nephrologue','Nephrologue',NULL,'2024-12-14 16:04:05','2024-12-14 16:04:05'),(2,'Esthetique','Esthetique',NULL,'2024-12-14 16:04:38','2024-12-14 16:04:38'),(3,'Urologue','Urologue',NULL,'2024-12-14 16:05:02','2024-12-14 16:05:02'),(4,'Interniste','Interniste',NULL,'2024-12-14 16:05:42','2024-12-14 16:05:42'),(5,'Généraliste','Généraliste',NULL,'2024-12-14 16:06:16','2024-12-14 16:06:16'),(6,'Pediatre','Pediatre',NULL,'2024-12-14 15:20:41','2024-12-14 15:20:41');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_formation`
--

DROP TABLE IF EXISTS `category_formation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_formation` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `categories_id` int DEFAULT NULL,
  `formation_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_formation`
--

LOCK TABLES `category_formation` WRITE;
/*!40000 ALTER TABLE `category_formation` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_formation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'{}',1),(2,1,'name','text','Name',1,1,1,1,1,1,'{}',3),(3,1,'email','text','Email',1,1,1,1,1,1,'{}',4),(4,1,'password','password','Password',1,0,0,1,1,0,'{}',5),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'{}',6),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',7),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',9),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,'{}',2),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}',11),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',12),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,'{}',13),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',0,1,1,1,1,1,'{}',10),(22,4,'id','text','Id',1,0,0,0,0,0,'{}',1),(23,4,'name','text','Nom',0,1,1,1,1,1,'{}',3),(24,4,'email','text','E-mail',0,1,1,1,1,1,'{}',4),(25,4,'phone','text','Téléphone',0,1,1,1,1,1,'{}',5),(26,4,'bio','text_area','Biographie',0,0,1,1,1,1,'{}',6),(27,4,'created_at','timestamp','Created At',0,0,1,0,0,0,'{}',7),(28,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(29,4,'avatar','image','Photo',0,1,1,1,1,1,'{}',2),(30,5,'id','text','Id',1,0,0,0,0,0,'{}',1),(31,5,'title','text','Titre',0,1,1,1,1,1,'{}',2),(32,5,'cover','image','Couverture',0,0,1,1,1,1,'{}',3),(33,5,'date','timestamp','Date de la formation',0,1,1,1,1,1,'{}',4),(34,5,'price','hidden','Price',0,0,1,1,1,1,'{}',5),(35,5,'objective','text_area','Objectif',0,0,1,1,1,1,'{}',6),(36,5,'program','text_area','Programme',0,0,1,1,1,1,'{}',7),(37,5,'other_details','text','Other Details',0,0,1,1,1,1,'{}',8),(38,5,'location_training','code_editor','LIEU DE LA FORMATION',0,0,1,1,1,1,'{}',9),(39,5,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',10),(40,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',11),(41,5,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',12),(42,6,'id','text','Id',1,0,0,0,0,0,'{}',1),(43,6,'name','text','Name',0,1,1,1,1,1,'{}',2),(44,6,'specialite','text','Specialite',0,1,1,1,1,1,'{}',3),(45,6,'pays','text','Pays',0,0,1,1,1,1,'{}',4),(46,6,'telephone','text','Telephone',0,1,1,1,1,1,'{}',5),(47,6,'email','text','Email',0,0,1,1,1,1,'{}',6),(48,6,'tarifs','text','Tarifs',0,1,1,1,1,1,'{}',7),(49,6,'modes_de_payement','text','Modes De Payement',0,1,1,1,1,1,'{}',8),(50,6,'status_paymanet','select_dropdown','Status Paymanet',0,1,1,1,1,1,'{\"default\":\"option1\",\"options\":{\"option1\":\"En attente de confirmation\",\"option2\":\"Paiement confirm\\u00e9\"}}',9),(51,6,'formation','text','Formation',0,0,1,1,1,1,'{}',10),(52,6,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',11),(53,6,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',12),(54,7,'id','text','Id',1,0,0,0,0,0,'{}',1),(55,7,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',2),(56,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',3),(57,7,'deleted_at','timestamp','Deleted At',0,1,1,1,1,1,'{}',4),(58,8,'id','text','Id',1,0,0,0,0,0,'{}',1),(59,8,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',2),(60,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',3),(61,8,'deleted_at','timestamp','Deleted At',0,1,1,1,1,1,'{}',4),(62,1,'email_verified_at','timestamp','Email Verified At',0,1,1,1,1,1,'{}',8),(63,9,'id','text','Id',1,0,0,0,0,0,'{}',1),(64,9,'name','text','Name',0,1,1,1,1,1,'{}',2),(65,9,'brief','text_area','Brief',0,1,1,1,1,1,'{}',3),(66,9,'icon','text','Icon',0,0,1,1,1,1,'{\"description\":\"A helpful description text here for your future self.\"}',4),(67,5,'formation_hasone_doctor_relationship','relationship','Doctor',0,1,1,1,1,1,'{\"model\":\"App\\\\Doctor\",\"table\":\"doctors\",\"type\":\"belongsTo\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}',13),(68,5,'doctor_id','hidden','Doctor Id',0,1,1,1,1,1,'{}',13),(69,5,'category_id','hidden','Category Id',0,1,1,1,1,1,'{}',14),(70,5,'formation_belongstomany_category_relationship','relationship','categories',0,1,1,1,1,1,'{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category_formation\",\"pivot\":\"0\",\"taggable\":\"on\"}',15),(71,10,'id','text','Id',1,0,0,0,0,0,'{}',1),(72,10,'title','text','Title',0,1,1,1,1,1,'{}',2),(73,10,'price','number','Price',0,1,1,1,1,1,'{}',3),(74,10,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"1\",\"options\":{\"1\":\"Actif\",\"0\":\"Inactif\"}}',4),(75,10,'formation_id','text','Formation Id',0,1,1,1,1,1,'{}',5),(76,10,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',6),(77,10,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(78,10,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',8),(79,10,'pack_belongsto_formation_relationship','relationship','formations',0,1,1,1,1,1,'{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":null}',9);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2024-11-21 18:54:11','2024-11-22 15:32:15'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2024-11-21 18:54:11','2024-11-21 18:54:11'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2024-11-21 18:54:11','2024-11-21 18:54:11'),(4,'doctors','doctors','Doctor','Doctors',NULL,'App\\Doctor',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-11-22 12:41:57','2024-11-22 12:48:52'),(5,'formations','formations','Formation','Formations',NULL,'App\\Formation',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-11-22 13:07:33','2024-12-14 17:09:53'),(6,'orders','inscriptions','Inscription','Inscriptions',NULL,'App\\Order',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2024-11-22 14:33:19','2024-11-22 14:33:19'),(7,'resources','resources','Resource','Resources',NULL,'App\\Resource',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2024-11-22 14:41:22','2024-11-22 14:41:22'),(8,'comments','comments','Commentaire','Commentaires',NULL,'App\\Comment',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2024-11-22 14:42:23','2024-11-22 14:42:23'),(9,'categories','categories','Catégorie des formations','Catégories des formations',NULL,'App\\Category',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2024-12-14 15:57:07','2024-12-14 15:57:07'),(10,'packs','packs','Pack','Packs',NULL,'App\\Pack',NULL,NULL,NULL,1,0,NULL,'2024-12-14 17:33:37','2024-12-14 17:33:37');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (2,'Dr. CHROQUI Younes','example@gmail.com','0600000000','Médecin anesthésiste réanimateur\r\nDiplômé en auriculothérapie et en acupuncture scientifique','2024-11-22 12:50:39','2024-11-22 12:50:39','doctors/November2024/hNK1oytefoUyZQZiE8Uf.jpg'),(3,'Pr. Olivier HANON','example@gmail.com','0600000000','Médecin Gériatrie / gérontologie\r\n\r\nProfesseur à l’Université Paris-Descartes ; service de gériatrie – Hôpital Broca, AP-HP Paris','2024-11-22 12:51:19','2024-11-22 12:55:59','doctors/November2024/nvlmeCPaSdD6CXRLKql0.jpg'),(4,'Pr. Nadjib HAMMOUDI','example@gmail.com','0600000000','Cardiologue et expert en échocardiographie, Paris – France','2024-11-22 12:51:54','2024-11-22 12:51:54','doctors/November2024/AOfADl7z85dbRpG7p7fE.png'),(5,'Pr. Laurent Chiche','example@gmail.com','0600000000','– Professeur de chirurgie vasculaire : Assistance publique- hopitaux de paris\r\n– Chef du Service de Chirurgie Vasculaire et Endovasculaire : Faculté de médecine Sorbonne Université\r\n– Président : CIV-world congress\r\n– Centre Aortique Tertiaire. CHU Pitié-Salpêtrière','2024-11-22 12:56:33','2024-11-22 12:56:33','doctors/November2024/4WTp80LW581469fjkOml.jpeg');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formations`
--

DROP TABLE IF EXISTS `formations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` longtext COLLATE utf8mb4_unicode_ci,
  `program` longtext COLLATE utf8mb4_unicode_ci,
  `other_details` longtext COLLATE utf8mb4_unicode_ci,
  `location_training` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `doctor_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formations`
--

LOCK TABLES `formations` WRITE;
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;
INSERT INTO `formations` VALUES (1,'URGENCES AU CABINET (EN LIGNE)','formations/November2024/q4e8ZogCNlggsLLp7EsH.jpg',NULL,NULL,'Tout médecin, quelle que soit son lieu d’exercice ou sa spécialité, peut être confronté aux urgences.\r\nL’urgence surprend et il est attendu, tant d’un point de vue légal que d’un point de vue moral, que tous les médecins soient formés aux gestes d’urgence et sachent réagir devant une situation engageant le pronostic vital.\r\nLe médecin généraliste restera le premier maillon de la prise en charge des urgences médicales aussi bien ressenties que vitales, cependant ni sa formation de base ni son apprentissage sur le tas ne lui garantissent les compétences nécessaires pour gérer ces situations.\r\nLe programme comprendra des cours théoriques, des ateliers pratiques :','PROGRAMME\r\n\r\n>>Samedi\r\n\r\n09h00 :\r\n– Arrêt cardiaque\r\n– Choc anaphylactique\r\n– OAP et urgences hypertensives\r\n10h30 – 11h00 : Pause\r\n11h00 :\r\n– Ateliers pratique & Cas Cliniques\r\n13h00 – 14h00 : Pause\r\n14h00 :\r\n– Convulsion et coma\r\n– La douleur aigue intense usage de morphiniques\r\n– Les médicaments et la trousse d’urgence\r\n16h00 – 16h30 : Pause\r\n16h30 :\r\n– Ateliers pratique & Cas Cliniques\r\n\r\n>>Dimanche\r\n\r\n9h00 :\r\n– Oxygénation ventilation\r\n– Massage cardiaque externe et Défibrillateur\r\n– ECG opérationnel et urgences cardiologiques\r\n10h30 – 11h00 : Pause\r\n11h00 :\r\n– Ateliers pratique & Cas Cliniques',NULL,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26586.506912757377!2d-7.549152505849049!3d33.59717294320431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cc9b5ed39c01%3A0x4db6f1381ccf8d63!2zQcOvbiBTZWJhw6IsIENhc2FibGFuY2E!5e0!3m2!1sen!2sma!4v1732285411410!5m2!1sen!2sma\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','2024-11-22 14:23:52','2024-11-22 14:23:52',NULL,NULL,NULL);
/*!40000 ALTER TABLE `formations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','dashboard','#000000',NULL,1,'2024-11-21 18:54:12','2024-11-22 12:22:25','voyager.dashboard','null'),(2,1,'Media','','_self','device-tv-old','#000000',NULL,4,'2024-11-21 18:54:12','2024-11-22 12:23:23','voyager.media.index','null'),(3,1,'Users','','_self','user-check','#000000',NULL,3,'2024-11-21 18:54:12','2024-11-22 12:22:55','voyager.users.index','null'),(4,1,'Roles','','_self','user','#000000',NULL,2,'2024-11-21 18:54:12','2024-11-22 12:21:16','voyager.roles.index','null'),(5,1,'Tools','','_self','tools','#000000',NULL,11,'2024-11-21 18:54:12','2024-12-14 17:23:16',NULL,''),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2024-11-21 18:54:12','2024-11-22 09:08:36','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2024-11-21 18:54:12','2024-11-22 09:08:36','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2024-11-21 18:54:12','2024-11-22 09:08:36','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2024-11-21 18:54:12','2024-11-22 09:08:36','voyager.bread.index',NULL),(10,1,'Settings','','_self','adjustments','#000000',NULL,10,'2024-11-21 18:54:12','2024-12-14 17:23:16','voyager.settings.index','null'),(11,1,'Doctors','','_self','user-heart','#000000',NULL,5,'2024-11-22 12:41:57','2024-11-22 14:44:09','voyager.doctors.index','null'),(12,1,'Formations','','_self','certificate','#000000',18,2,'2024-11-22 13:07:33','2024-12-14 17:23:20','voyager.formations.index','null'),(13,1,'Inscriptions','','_self','currency-dollar','#000000',NULL,7,'2024-11-22 14:33:19','2024-12-14 17:23:16','voyager.inscriptions.index','null'),(15,1,'Resources','','_self','archive','#000000',NULL,8,'2024-11-22 14:41:22','2024-12-14 17:23:16','voyager.resources.index','null'),(16,1,'Commentaires','','_self','message','#000000',NULL,9,'2024-11-22 14:42:23','2024-12-14 17:23:16','voyager.comments.index','null'),(17,1,'Catégories','','_self','category-2','#000000',18,1,'2024-12-14 15:57:07','2024-12-14 17:23:20','voyager.categories.index','null'),(18,1,'Les formations','#','_self','certificate','#000000',NULL,6,'2024-12-14 17:22:57','2024-12-14 17:23:15',NULL,''),(19,1,'Packs','','_self',NULL,'#000000',18,3,'2024-12-14 17:33:37','2024-12-14 17:42:49','voyager.packs.index','null');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2024-11-21 18:54:12','2024-11-21 18:54:12');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarifs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modes_de_payement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_paymanet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Yassine','test','test','0600000000','yassine@gmail.com','150','Virement / Versement','option1','URGENCES AU CABINET (EN LIGNE)','2024-11-22 14:34:53','2024-11-22 14:34:53');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packs`
--

DROP TABLE IF EXISTS `packs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `packs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `formation_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packs`
--

LOCK TABLES `packs` WRITE;
/*!40000 ALTER TABLE `packs` DISABLE KEYS */;
INSERT INTO `packs` VALUES (1,'Pack inscription','6160',1,1,'2024-12-14 17:35:11','2024-12-14 17:35:11',NULL),(2,'Pack inscription + Hébérgement 2 nuits en chambre single','7000',1,1,'2024-12-14 17:36:01','2024-12-14 17:36:01',NULL),(3,'Pack inscription + Hébérgement 2 nuits en chambre double','6500',1,1,'2024-12-14 17:40:01','2024-12-14 17:40:01',NULL);
/*!40000 ALTER TABLE `packs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2024-11-21 18:54:12','2024-11-21 18:54:12'),(2,'browse_bread',NULL,'2024-11-21 18:54:12','2024-11-21 18:54:12'),(3,'browse_database',NULL,'2024-11-21 18:54:12','2024-11-21 18:54:12'),(4,'browse_media',NULL,'2024-11-21 18:54:12','2024-11-21 18:54:12'),(5,'browse_compass',NULL,'2024-11-21 18:54:12','2024-11-21 18:54:12'),(6,'browse_menus','menus','2024-11-21 18:54:12','2024-11-21 18:54:12'),(7,'read_menus','menus','2024-11-21 18:54:12','2024-11-21 18:54:12'),(8,'edit_menus','menus','2024-11-21 18:54:12','2024-11-21 18:54:12'),(9,'add_menus','menus','2024-11-21 18:54:12','2024-11-21 18:54:12'),(10,'delete_menus','menus','2024-11-21 18:54:12','2024-11-21 18:54:12'),(11,'browse_roles','roles','2024-11-21 18:54:12','2024-11-21 18:54:12'),(12,'read_roles','roles','2024-11-21 18:54:12','2024-11-21 18:54:12'),(13,'edit_roles','roles','2024-11-21 18:54:12','2024-11-21 18:54:12'),(14,'add_roles','roles','2024-11-21 18:54:12','2024-11-21 18:54:12'),(15,'delete_roles','roles','2024-11-21 18:54:12','2024-11-21 18:54:12'),(16,'browse_users','users','2024-11-21 18:54:12','2024-11-21 18:54:12'),(17,'read_users','users','2024-11-21 18:54:12','2024-11-21 18:54:12'),(18,'edit_users','users','2024-11-21 18:54:12','2024-11-21 18:54:12'),(19,'add_users','users','2024-11-21 18:54:12','2024-11-21 18:54:12'),(20,'delete_users','users','2024-11-21 18:54:12','2024-11-21 18:54:12'),(21,'browse_settings','settings','2024-11-21 18:54:12','2024-11-21 18:54:12'),(22,'read_settings','settings','2024-11-21 18:54:12','2024-11-21 18:54:12'),(23,'edit_settings','settings','2024-11-21 18:54:12','2024-11-21 18:54:12'),(24,'add_settings','settings','2024-11-21 18:54:12','2024-11-21 18:54:12'),(25,'delete_settings','settings','2024-11-21 18:54:12','2024-11-21 18:54:12'),(26,'browse_doctors','doctors','2024-11-22 12:41:57','2024-11-22 12:41:57'),(27,'read_doctors','doctors','2024-11-22 12:41:57','2024-11-22 12:41:57'),(28,'edit_doctors','doctors','2024-11-22 12:41:57','2024-11-22 12:41:57'),(29,'add_doctors','doctors','2024-11-22 12:41:57','2024-11-22 12:41:57'),(30,'delete_doctors','doctors','2024-11-22 12:41:57','2024-11-22 12:41:57'),(31,'browse_formations','formations','2024-11-22 13:07:33','2024-11-22 13:07:33'),(32,'read_formations','formations','2024-11-22 13:07:33','2024-11-22 13:07:33'),(33,'edit_formations','formations','2024-11-22 13:07:33','2024-11-22 13:07:33'),(34,'add_formations','formations','2024-11-22 13:07:33','2024-11-22 13:07:33'),(35,'delete_formations','formations','2024-11-22 13:07:33','2024-11-22 13:07:33'),(36,'browse_orders','orders','2024-11-22 14:33:19','2024-11-22 14:33:19'),(37,'read_orders','orders','2024-11-22 14:33:19','2024-11-22 14:33:19'),(38,'edit_orders','orders','2024-11-22 14:33:19','2024-11-22 14:33:19'),(39,'add_orders','orders','2024-11-22 14:33:19','2024-11-22 14:33:19'),(40,'delete_orders','orders','2024-11-22 14:33:19','2024-11-22 14:33:19'),(41,'browse_resources','resources','2024-11-22 14:41:22','2024-11-22 14:41:22'),(42,'read_resources','resources','2024-11-22 14:41:22','2024-11-22 14:41:22'),(43,'edit_resources','resources','2024-11-22 14:41:22','2024-11-22 14:41:22'),(44,'add_resources','resources','2024-11-22 14:41:22','2024-11-22 14:41:22'),(45,'delete_resources','resources','2024-11-22 14:41:22','2024-11-22 14:41:22'),(46,'browse_comments','comments','2024-11-22 14:42:23','2024-11-22 14:42:23'),(47,'read_comments','comments','2024-11-22 14:42:23','2024-11-22 14:42:23'),(48,'edit_comments','comments','2024-11-22 14:42:23','2024-11-22 14:42:23'),(49,'add_comments','comments','2024-11-22 14:42:23','2024-11-22 14:42:23'),(50,'delete_comments','comments','2024-11-22 14:42:23','2024-11-22 14:42:23'),(51,'browse_categories','categories','2024-12-14 15:57:07','2024-12-14 15:57:07'),(52,'read_categories','categories','2024-12-14 15:57:07','2024-12-14 15:57:07'),(53,'edit_categories','categories','2024-12-14 15:57:07','2024-12-14 15:57:07'),(54,'add_categories','categories','2024-12-14 15:57:07','2024-12-14 15:57:07'),(55,'delete_categories','categories','2024-12-14 15:57:07','2024-12-14 15:57:07'),(56,'browse_packs','packs','2024-12-14 17:33:37','2024-12-14 17:33:37'),(57,'read_packs','packs','2024-12-14 17:33:37','2024-12-14 17:33:37'),(58,'edit_packs','packs','2024-12-14 17:33:37','2024-12-14 17:33:37'),(59,'add_packs','packs','2024-12-14 17:33:37','2024-12-14 17:33:37'),(60,'delete_packs','packs','2024-12-14 17:33:37','2024-12-14 17:33:37');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resources` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resources`
--

LOCK TABLES `resources` WRITE;
/*!40000 ALTER TABLE `resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2024-11-21 18:54:12','2024-11-21 18:54:12'),(2,'user','Normal User','2024-11-21 18:54:12','2024-11-21 18:54:12');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','settings/November2024/K5zzpjzofLJzbKEW4C4T.png','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','ScienceEvent','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to ScienceEvent. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin'),(11,'virement.compte-name','Titulaire du compte','SCIENCE EVENTS',NULL,'text',6,'Virement'),(12,'virement.iban','IBAN','MA64 007 450 0015208000000049 97',NULL,'text',7,'Virement'),(13,'virement.swift','swift','BCMAMAMC',NULL,'text',8,'Virement'),(14,'virement.rib','RIB N°','007 450 0015208000000049 97',NULL,'text',9,'Virement');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@gmail.com','users/default.png',NULL,'$2y$10$MD5d4buhxpJM5Xdzkp8XMOQGAvMGOY86mwHHT7Z.J4AgHgDT1OITC',NULL,'{\"locale\":\"en\"}','2024-11-21 19:04:13','2024-12-12 10:21:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-14 17:54:33
