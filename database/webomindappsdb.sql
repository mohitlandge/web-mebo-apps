-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: blog_db
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'mohitlandge@gmail.com',1,'2020-11-28 03:34:27','2020-11-28 03:34:27'),(2,'demo@gmail.com',2,'2020-11-28 03:42:25','2020-11-28 03:42:25'),(3,'wbefugeu',5,'2021-05-01 03:04:06','2021-05-01 03:04:06'),(6,'mohitlandge@gmail.com',5,'2021-05-01 03:06:48','2021-05-01 03:06:48'),(7,'mohit@geygfey.om',6,'2021-05-01 03:07:53','2021-05-01 03:07:53'),(8,'efuiefuegfue',7,'2021-05-01 03:12:27','2021-05-01 03:12:27'),(9,'beguyfegyu@gmail.com',6,'2021-05-01 03:14:35','2021-05-01 03:14:35'),(10,'gegygeyg@hefvhue.com',7,'2021-05-01 03:15:23','2021-05-01 03:15:23'),(11,'gdygeyugge',8,'2021-05-01 03:19:03','2021-05-01 03:19:03'),(12,'moguygydf@wgdv.com',8,'2021-05-01 03:22:13','2021-05-01 03:22:13'),(13,'eufeiugfiue',9,'2021-05-01 03:36:20','2021-05-01 03:36:20'),(14,'kjebuegfiu',9,'2021-05-01 03:37:08','2021-05-01 03:37:08'),(15,'kjebuegfiu',10,'2021-05-01 03:38:42','2021-05-01 03:38:42'),(16,'kuyefuyfeuyf',11,'2021-05-01 03:39:03','2021-05-01 03:39:03'),(17,'fbueygfuyegfyeugf',12,'2021-05-01 05:01:32','2021-05-01 05:01:32'),(18,'fbueygfuyegfyeugf',13,'2021-05-01 05:02:06','2021-05-01 05:02:06'),(19,'mohitlandge@gmail.com',14,'2021-05-01 05:07:59','2021-05-01 05:07:59'),(20,'mohitlandge@gmail.com',15,'2021-05-01 05:14:59','2021-05-01 05:14:59'),(21,'mohitlandge@gmail.com',16,'2021-05-01 05:16:00','2021-05-01 05:16:00'),(22,'1010',17,'2021-05-01 05:30:28','2021-05-01 05:30:28'),(23,'1111',18,'2021-05-01 05:31:55','2021-05-01 05:31:55'),(24,'nikita@gmail.com',10,'2021-05-01 07:44:11','2021-05-01 07:44:11'),(25,'nikita@gmail.com',11,'2021-05-01 07:45:46','2021-05-01 07:45:46'),(26,'nikita@gmail.com',12,'2021-05-01 07:48:07','2021-05-01 07:48:07');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `role_id` varchar(200) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `email_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `remember_token` varchar(1024) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (5,'admin','admin','1',6,6,6,'2021-05-01 03:06:48','2021-05-01 03:06:48',NULL,NULL,NULL),(6,'mohit','landge','1',9,9,9,'2021-05-01 03:14:35','2021-05-01 03:14:35',NULL,NULL,NULL),(7,'fegfeuyg','ygeyfgey','1',10,10,10,'2021-05-01 03:15:23','2021-05-01 03:15:23',NULL,NULL,NULL),(8,'admin1','admin1','1',11,11,11,'2021-05-01 03:19:03','2021-05-01 03:19:03',NULL,NULL,NULL),(9,'febegfiuegui','befefgiye','1',14,14,14,'2021-05-01 03:37:08','2021-05-01 03:37:08','$2y$10$DV1sogOHvrgLErbfheU0a.ZVdMZTNV1sS4wgojVvck7z/Y9ZONuO2',NULL,NULL),(10,'febegfiuegui','befefgiye','1',15,15,15,'2021-05-01 03:38:42','2021-05-01 03:38:42','$2y$10$8PdS2JnYjz8PQVtc7FN.LOgGHdsuG3DxcTEphoDRU6PtxMlZU5v7O',NULL,NULL),(11,'ndefuegui','heufgeiugfeiy','1',16,16,16,'2021-05-01 03:39:03','2021-05-01 03:39:03','$2y$10$gUnnF/kgug9AZE29p.QyG.IY58iV6FEi4J033AOfa6PiS20apZpzq',NULL,NULL),(12,'ugriurgiu','bfegfyegfye','1',17,17,17,'2021-05-01 05:01:32','2021-05-01 05:01:32','$2y$10$3xM0bleFB6FzekhJkhxlX.vkqq9t9BLx8Mg5pdplqKqu2qshhLsk6',NULL,NULL),(13,'ugriurgiu','bfegfyegfye','1',18,18,18,'2021-05-01 05:02:06','2021-05-01 05:02:06','$2y$10$R0KTqSfZJA/v3l3wM6qfjuTOjdI6MVBn1yDsrUQL2bQstLOzcZohO',NULL,NULL),(14,'mohit','Landge','1',19,19,19,'2021-05-01 05:07:59','2021-05-01 05:07:59','$2y$10$iMn8a6Va.2FgdNMe0oYdfet0B7XTDrlROsP6StneZF/zxM.dWvLQO',NULL,NULL),(15,'mohit','landge','1',20,20,20,'2021-05-01 05:14:59','2021-05-01 05:14:59','$2y$10$uzhKBolaoihl1vrGWVQDQeFgeOyjU1JDr0GSolnMVpICCMEtYDrhS',NULL,NULL),(16,'mohit','landge','1',21,21,21,'2021-05-01 05:16:00','2021-05-01 05:16:00','$2y$10$S7IYeZMp4lJ4Qr7iikxYi.sGSQuVsyR.f1LmfPoSftyOgWbeqi2Sm',NULL,NULL),(17,'1010','1010','1',22,NULL,22,'2021-05-01 05:30:28','2021-05-01 05:30:28','$2y$10$tD8.yoB0emHZjL9jQgcg0uUkbl6ksmEPv.GhkArS8NbUqtGIbFJ4a',NULL,'1010'),(18,'1111','1111','1',23,NULL,23,'2021-05-01 05:31:55','2021-05-01 07:39:28','7n5ODq7K',NULL,'mohitlandge@gmail.com');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (3,'efugefuyge',5,'2021-05-01 03:04:06','2021-05-01 08:34:06'),(6,'567465465',5,'2021-05-01 03:06:48','2021-05-01 08:36:48'),(7,'fbuegfiueg',6,'2021-05-01 03:07:53','2021-05-01 08:37:53'),(8,'fuiegfiuef',7,'2021-05-01 03:12:27','2021-05-01 08:42:27'),(9,'000000000',6,'2021-05-01 03:14:35','2021-05-01 08:44:35'),(10,'befiegfuye',7,'2021-05-01 03:15:23','2021-05-01 08:45:23'),(11,'eebufygeyu',8,'2021-05-01 03:19:03','2021-05-01 08:49:03'),(12,'4734873874',8,'2021-05-01 03:22:13','2021-05-01 08:52:13'),(13,'uegfieugfi',9,'2021-05-01 03:36:20','2021-05-01 09:06:20'),(14,'jebfhgefh',9,'2021-05-01 03:37:08','2021-05-01 09:07:08'),(15,'jebfhgefh',10,'2021-05-01 03:38:42','2021-05-01 09:08:42'),(16,'befgefeh',11,'2021-05-01 03:39:03','2021-05-01 09:09:03'),(17,'ebfjkgeiuf',12,'2021-05-01 05:01:32','2021-05-01 10:31:32'),(18,'ebfjkgeiuf',13,'2021-05-01 05:02:06','2021-05-01 10:32:06'),(19,'0084759836',14,'2021-05-01 05:07:59','2021-05-01 10:37:59'),(20,'9090909090',15,'2021-05-01 05:14:59','2021-05-01 10:44:59'),(21,'9090909090',16,'2021-05-01 05:16:00','2021-05-01 10:46:00'),(22,'1010',17,'2021-05-01 05:30:28','2021-05-01 11:00:28'),(23,'1111',18,'2021-05-01 05:31:55','2021-05-01 11:01:55'),(24,'8989898989',10,'2021-05-01 07:44:11','2021-05-01 13:14:11'),(25,'9090909909',11,'2021-05-01 07:45:46','2021-05-01 13:15:46'),(26,'90909090',12,'2021-05-01 07:48:07','2021-05-01 13:18:07');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (3,'wbefugeu',5,'2021-05-01 03:04:06','2021-05-01 03:04:06'),(6,'mohitlandge@gmail.com',5,'2021-05-01 03:06:48','2021-05-01 03:06:48'),(7,'mohit@geygfey.om',6,'2021-05-01 03:07:53','2021-05-01 03:07:53'),(8,'efuiefuegfue',7,'2021-05-01 03:12:27','2021-05-01 03:12:27'),(9,'beguyfegyu@gmail.com',6,'2021-05-01 03:14:35','2021-05-01 03:14:35'),(10,'gegygeyg@hefvhue.com',7,'2021-05-01 03:15:23','2021-05-01 03:15:23'),(11,'gdygeyugge',8,'2021-05-01 03:19:03','2021-05-01 03:19:03'),(12,'moguygydf@wgdv.com',8,'2021-05-01 03:22:13','2021-05-01 03:22:13'),(13,'eufeiugfiue',9,'2021-05-01 03:36:20','2021-05-01 03:36:20'),(14,'kjebuegfiu',9,'2021-05-01 03:37:08','2021-05-01 03:37:08'),(15,'kjebuegfiu',10,'2021-05-01 03:38:42','2021-05-01 03:38:42'),(16,'kuyefuyfeuyf',11,'2021-05-01 03:39:03','2021-05-01 03:39:03'),(17,'fbueygfuyegfyeugf',12,'2021-05-01 05:01:32','2021-05-01 05:01:32'),(18,'fbueygfuyegfyeugf',13,'2021-05-01 05:02:06','2021-05-01 05:02:06'),(19,'mohitlandge@gmail.com',14,'2021-05-01 05:07:59','2021-05-01 05:07:59'),(20,'mohitlandge@gmail.com',15,'2021-05-01 05:14:59','2021-05-01 05:14:59'),(21,'mohitlandge@gmail.com',16,'2021-05-01 05:16:00','2021-05-01 05:16:00');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
INSERT INTO `role_users` VALUES (5,5,2,'2021-05-01 03:04:06','2021-05-01 03:04:06'),(8,5,1,'2021-05-01 03:06:48','2021-05-01 03:06:48'),(9,6,2,'2021-05-01 03:07:53','2021-05-01 03:07:53'),(10,7,0,'2021-05-01 03:12:27','2021-05-01 03:12:27'),(11,6,1,'2021-05-01 03:14:35','2021-05-01 03:14:35'),(12,7,1,'2021-05-01 03:15:23','2021-05-01 03:15:23'),(13,8,1,'2021-05-01 03:19:03','2021-05-01 03:19:03'),(14,8,2,'2021-05-01 03:22:13','2021-05-01 03:22:13'),(15,9,2,'2021-05-01 03:36:20','2021-05-01 03:36:20'),(16,9,1,'2021-05-01 03:37:08','2021-05-01 03:37:08'),(17,10,1,'2021-05-01 03:38:42','2021-05-01 03:38:42'),(18,11,1,'2021-05-01 03:39:03','2021-05-01 03:39:03'),(19,12,1,'2021-05-01 05:01:32','2021-05-01 05:01:32'),(20,13,1,'2021-05-01 05:02:06','2021-05-01 05:02:06'),(21,14,1,'2021-05-01 05:07:59','2021-05-01 05:07:59'),(22,15,1,'2021-05-01 05:14:59','2021-05-01 05:14:59'),(23,16,1,'2021-05-01 05:16:00','2021-05-01 05:16:00'),(24,17,1,'2021-05-01 05:30:28','2021-05-01 05:30:28'),(25,18,1,'2021-05-01 05:31:55','2021-05-01 05:31:55'),(26,10,2,'2021-05-01 07:44:11','2021-05-01 07:44:11'),(27,11,2,'2021-05-01 07:45:46','2021-05-01 07:45:46'),(28,12,2,'2021-05-01 07:48:07','2021-05-01 07:48:07');
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin',NULL),(2,'User',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `role_id` varchar(200) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `email_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `remember_token` varchar(1024) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'efuhru','iuegrfiuge','2',3,3,3,'2021-05-01 03:04:06','2021-05-01 03:04:06',NULL,NULL,NULL),(6,'fweiufeiug','iueguiegfuig','2',7,7,7,'2021-05-01 03:07:53','2021-05-01 03:07:53',NULL,NULL,NULL),(7,NULL,NULL,'0',8,8,8,'2021-05-01 03:12:27','2021-05-01 03:12:27',NULL,NULL,NULL),(8,'user','user','2',12,12,12,'2021-05-01 03:22:13','2021-05-01 03:22:13','$2y$10$GrMBmf.xuIeJbp6BK1b7lejioJ6vhzguCA8vAV.5RQtdYw..I8lle',NULL,NULL),(9,'biefgeiygf','hiugrifrgfy','2',13,13,13,'2021-05-01 03:36:20','2021-05-01 03:36:20','$2y$10$6Or.s8C1LKDhpwCBHVDrFeEO/hf019gEgMbJfL.RZwWCUsAUYshnu',NULL,NULL),(12,'nikita','nikita','2',26,NULL,26,'2021-05-01 07:48:07','2021-05-01 07:48:07','nikita@123',NULL,'nikita@gmail.com');
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

-- Dump completed on 2021-05-01 18:50:48
