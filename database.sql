-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: embedded_db
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `temp_statistics`
--

DROP TABLE IF EXISTS `temp_statistics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `temp_statistics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `devicename` varchar(45) NOT NULL,
  `temperature` float NOT NULL,
  `added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='this is a table for colletciong human sensor data\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_statistics`
--

LOCK TABLES `temp_statistics` WRITE;
/*!40000 ALTER TABLE `temp_statistics` DISABLE KEYS */;
INSERT INTO `temp_statistics` VALUES (1,'device-01',36,'2022-10-14 12:31:54'),(2,'device-01',37.5,'2022-10-14 12:31:54'),(3,'device-01',39,'2022-10-14 12:31:54'),(4,'device-02',39,'2022-10-14 12:31:54'),(5,'device-02',37.5,'2022-10-14 12:31:54'),(6,'device-02',36,'2022-10-14 12:31:54'),(7,'device-03',36,'2022-10-14 12:31:54'),(8,'device-03',39,'2022-10-14 12:31:54'),(9,'device-03',37.5,'2022-10-14 12:31:54'),(10,'device-04',40,'2022-10-15 17:53:23'),(11,'device-04',42,'2022-10-15 17:53:23'),(12,'device-04',37.5,'2022-10-15 17:53:23');
/*!40000 ALTER TABLE `temp_statistics` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-15 18:39:02
