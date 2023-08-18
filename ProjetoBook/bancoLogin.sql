-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: login
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'rafael','202cb962ac59075b964b07152d234b70','Rafael de Sousa Moura','2023-08-18 15:57:26'),(2,'vinicius','202cb962ac59075b964b07152d234b70','Vinicius','2023-08-18 15:57:37'),(3,'igor','202cb962ac59075b964b07152d234b70','Igor','2023-08-18 15:57:46'),(4,'ezequiel','202cb962ac59075b964b07152d234b70','Ezequiel','2023-08-18 15:57:56'),(5,'eduardo','202cb962ac59075b964b07152d234b70','Eduardo','2023-08-18 15:58:05'),(6,'joao','202cb962ac59075b964b07152d234b70','João','2023-08-18 15:58:14'),(7,'pedro','202cb962ac59075b964b07152d234b70','Pedro','2023-08-18 15:58:24'),(8,'pedro_1','202cb962ac59075b964b07152d234b70','Pedro','2023-08-18 15:58:30'),(9,'maria','202cb962ac59075b964b07152d234b70','Maria','2023-08-18 15:58:37'),(10,'maria1','202cb962ac59075b964b07152d234b70','Maria','2023-08-18 15:58:42'),(11,'celso','202cb962ac59075b964b07152d234b70','Celso','2023-08-18 15:59:01'),(12,'mario','202cb962ac59075b964b07152d234b70','Mario','2023-08-18 15:59:17'),(13,'messi_argentina','202cb962ac59075b964b07152d234b70','Messi','2023-08-18 15:59:25'),(14,'cristiano_ronaldo','202cb962ac59075b964b07152d234b70','Cristiano Ronaldo','2023-08-18 15:59:41'),(15,'jose_1','202cb962ac59075b964b07152d234b70','José','2023-08-18 16:00:12');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'login'
--

--
-- Dumping routines for database 'login'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-18 16:00:49
