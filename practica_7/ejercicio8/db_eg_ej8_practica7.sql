-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: eg_ej8_practica6
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `canciones`
--

DROP TABLE IF EXISTS `canciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `canciones` (
  `idCancion` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idCancion`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canciones`
--

LOCK TABLES `canciones` WRITE;
/*!40000 ALTER TABLE `canciones` DISABLE KEYS */;
INSERT INTO `canciones` VALUES (1,'Estoy Confundida'),(2,'Attaque 77'),(3,'Los Pericos'),(4,'Miranda!'),(5,'Coti ft. Paulina Rubio y Julieta Venegas'),(6,'Vilma Palma E Vampiros'),(7,'Los Cafres'),(8,'La Mosca Tsé'),(9,'G.I.T.'),(10,'A.N.I.M.A.L.'),(11,'Todos Tus Muertos'),(12,'No Te Va Gustar ft. Nicki Nicole'),(13,'Wos'),(14,'Catupecu Machu'),(15,'Los Twist'),(16,'Suéter'),(17,'Fricción'),(18,'Los Encargados'),(19,'Raúl Porchetto'),(20,'Raíces'),(21,'Alas'),(22,'Barbi Recanati ft. Paula Trama'),(23,'Juana Molina'),(24,'Tan Biónica'),(25,'Johny Tedesco'),(26,'Billy Cafaro'),(27,'Juan Carlos Baglietto'),(28,'Alejandro Lerner'),(29,'Ce Ce Cutaia'),(30,'PorSuiGieco'),(31,'Sabú'),(32,'Tormenta'),(33,'Gabriela'),(34,'Manal'),(35,'Almendra'),(36,'Los Gatos'),(37,'Bárbara Y Dick'),(38,'Los 4 Planetas'),(39,'Actitud María Marta'),(40,'El Otro Yo'),(41,'Peligrosos Gorriones'),(42,'El Mató A Un Policía Motorizado'),(43,'Las Blacanblus'),(44,'Caballeros De La Quema'),(45,'Ratones Paranoicos'),(46,'Memphis La Blusera'),(47,'Riff'),(48,'Pappo\'s Blues'),(49,'V8'),(50,'Éber Lobato ft. Alberto Anchart');
/*!40000 ALTER TABLE `canciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-25 23:47:41
