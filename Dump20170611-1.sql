CREATE DATABASE  IF NOT EXISTS `registro` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `registro`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: registro
-- ------------------------------------------------------
-- Server version	5.6.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'willito','willy@hola.com','b91e0b7fb6b2041df3019e917cb66ee2',NULL),(2,'firulais','firu@gmail.com','98c98682b13b73370db4a15df010b89a',NULL),(3,'martincito','martin@hola.com','9d15f6abe9ad09179cd58060ce9d92ce',NULL),(4,'june1234','june@hola.com','757b852a99de4511263dbdb19bbfc3f5',NULL),(5,'july1234','july@hola.com','1a4aea3966fffaa68bb82dd37827d2a4',NULL),(6,'enero1234','enero@hola.com','6ccb93fc7f99ad3d27f2c959b2e89ecf',NULL),(7,'febrero1234','febrero@hola.com','62b748e02025b4207687d16185dea751','katyperry.jpg'),(8,'juandomingo','juandomingo@hola.com','c7f626ad40317f4dc7b295c6f04c850d',NULL),(9,'evaduarte','eva@hola.com','05876df4a97e230985e022d2d923b99d',NULL),(10,'katyperry','katy@hola.com','7e7c05f5ba2d86e797511dd4d770d124',NULL),(11,'katyperry','katy@hola.com','7e7c05f5ba2d86e797511dd4d770d124',NULL),(12,'katyperry','katy@hola.com','7e7c05f5ba2d86e797511dd4d770d124',NULL),(13,'roberta1','roberta@hola.com','a805f32cab53086dbfb572887584f12a','roberta1.jpg'),(14,'Maracaibo','mara@hola.com','d9b03774cd85a1acf440d291f5c780a1','/assets/img/avatars/Maracaibo.jpg'),(15,'obleademani','oblea@hola.com','71868d5ba832b4d3aba33e647a29b114',NULL),(16,'mantequilla','mante@hola.com','6f1c1b911b4ebe94f61a39a537cbfe90',NULL),(17,'marianito','marianito@hola.com','b3e4727d3455c818621096abe9e6fcba',NULL),(18,'federico','fede@hola.com','925b4c68435d1c1feaf05f526578ab16','/assets/img/avatars/federico.jpg'),(19,'jesucito','jesucito@hola.com','0e69e50e0273507e329d2140a2d1bd2f','/assets/img/avatars/jesucito.jpg'),(20,'lopecito','lopez@hola.com','b8f8c32388ee515dc16fb60f9a3824fa','/assets/img/avatars/lopecito.jpg'),(55,'firulais','firu@hola.com','$2y$10$hwufFZWPz1WjUyhJX4rQ5.B2Cc.5bOsMlEU87rMlNpPz127hI7p3K',NULL),(56,'pancho01','pancho@hola.com','$2y$10$y5JSNQ.pdueXy1MmyUBlEO5bN6I43sCOGcMUffO33Zs8L8Yrh5JqS',NULL),(57,'termomate','termo@hola.com','3eda5b6bcb3af9603909a48f02de1ca7','/assets/img/avatars/termomate.jpg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'registro'
--

--
-- Dumping routines for database 'registro'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-11 18:39:32
