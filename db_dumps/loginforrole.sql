-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: loginforrole
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `loginforrole`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `loginforrole` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `loginforrole`;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (1,'Control e Informatica'),(2,'Subestaciones y Lineas'),(3,'Proteccion y Medicion'),(4,'Administración');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrador'),(2,'usuarios');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `departamento_id` int(3) NOT NULL,
  `puesto` varchar(25) NOT NULL,
  `role_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_departamento` (`departamento_id`),
  KEY `fk_usuario_roles` (`role_id`),
  CONSTRAINT `fk_usuario_departamento` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (10,'xxx','$2y$10$qMDDMtIMsJ2nKga/exg4qudOhlDnBIodT','xxx',4,'xxx',1),(13,'aaa','$2y$10$6WtExke3Tl6aKV//DnhdOeZ214.zhPVsp','aaa',1,'aaa',1),(14,'zzz','$2y$10$QCVajrgBmLtB1nc3XYxzuuxBUbFahjHox','zzz',1,'zzz',2),(15,'ccc','$2y$10$p47XArKwitoCt.Z76iVCleoeyukH14eNHvXDH3Zzq0dxlaEHoFOGO','ccc',1,'ccc',1),(16,'vvv','$2y$10$RY0oxiNLSovw4BCrE0pb9.Ts/ysdU/G0KbKkTvkOMK8XQmn0VCQtq','vvv',1,'vvv',2),(17,'bbb','$2y$10$9lkhN4SEVeopiz2XoEI7We7g0nReZnR5rc.fU/agmN8PxG1keLaqG','bbb',1,'bbb',2),(18,'nnn','$2y$10$3.tTGkA4Acj5Lz/5WU/LSOkpIWvx0MhVvDIaSiMZwRlsf/2Da1up.','nnn',1,'nnn',2),(19,'sss','$2y$10$aXk30mklVdXKrPr1yI2DsudJMjCkV6rXmwtTerja2.KkAFkU0yNBy','sss',4,'sss',2),(20,'luis','$2y$10$F5ntEraLb11YCcKlsRXbne7Y9bpIRpMBI6eytVxlbpGNz3KNTdKxS','luis',1,'luis',1),(21,'juan','$2y$10$hgW5bs06t.1o/mrVg9Vg5evKCy/li6SF8Jlak8R7imWjmrIcVvpRm','juan',4,'juan',2),(22,'zzz','$2y$10$2LgOTh1qVfc.sH5CKMFpbu5rbmQYcxtsEsEoAdHgvkHXhgzvxJSXK','zzz',1,'zzz',1),(23,'depa1','$2y$10$TuzYrvMoJmsKuJrdnvAdVeTPjGqVoLXHsP7gU4RFNI667hN9DlyGO','depa1',1,'depa1',2),(24,'depa2','$2y$10$6Ikv6Pb5D6w8ZpBGanIGouA0voYDVWRXGdYL2yv6Hl6I/fcFlihAS','depa2',2,'depa2',2),(25,'depa3','$2y$10$bxaaPcsBx4KfIwry4SDYH.1SjI6ao4pThenO.npDrkleSpesQ7Xee','depa3',3,'depa3',2),(26,'depa4','$2y$10$nndLu22XlewWcIHOOuvF9.QC8IX20hwr57ks2f1SRzHOtqUaHk1c2','depa4',4,'depa4',2),(27,'admin','$2y$10$Go0o5/oywYNngbsVmb2QceSkwVaDY4cxcg7sjY2YvNjOa4PdpUgly','admin',1,'admin',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'loginforrole'
--

--
-- Dumping routines for database 'loginforrole'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-11-02  1:38:30
