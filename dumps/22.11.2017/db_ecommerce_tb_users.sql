CREATE DATABASE  IF NOT EXISTS `db_ecommerce` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_ecommerce`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_ecommerce
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idperson` int(11) NOT NULL,
  `deslogin` varchar(64) NOT NULL,
  `despassword` varchar(256) NOT NULL,
  `inadmin` tinyint(4) NOT NULL DEFAULT '0',
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`),
  KEY `FK_users_persons_idx` (`idperson`),
  CONSTRAINT `fk_users_persons` FOREIGN KEY (`idperson`) REFERENCES `tb_persons` (`idperson`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_users`
--

LOCK TABLES `tb_users` WRITE;
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` VALUES (1,1,'admin@hcode.com.br','$2y$12$JodPBn1VPihijUmByxwS/eaT/dCDN6V8t7ZwgAVL.DDoLAj3YpQUO',1,'2017-03-13 03:00:00'),(7,7,'suporte','$2y$12$HFjgUm/mk1RzTy4ZkJaZBe0Mc/BA2hQyoUckvm.lFa6TesjtNpiMe',1,'2017-03-15 16:10:27'),(8,8,'fdavidcunha','123',1,'2017-10-17 09:52:21'),(9,9,'dfc333@gmail.com','$2y$12$NOu41hEuC9dnFgKk60KXlO/laHBjhF7iR8DGnexTDQOyud.8a9WGi',1,'2017-11-06 10:51:32'),(10,10,'marcelo@gmail.com','$2y$12$YmgqFnUhECAt8zzpLzbtjunIJ3kT6qPHjhXyfNV0kbFKKNR06yNm6',1,'2017-11-06 11:34:23'),(11,11,'test@gmail.com','$2y$12$wpdhNlj5K2afcTI.yB2QVuIF3t2ZF52C2t6LoVNoG4U039PVU5PNC',1,'2017-11-07 10:12:25'),(12,12,'1','$2y$12$VrbKr6nFkKSguD.wjpsESuJDNF4uvxHxLK8eNVoo1m0ncCH60zqnm',0,'2017-11-09 17:14:03'),(13,13,'2','$2y$12$XPTZK89ntYbuLjW7XHrE7ObVBTzaMswbo5BFTRjuMyI5LxqdKQHJO',0,'2017-11-09 17:14:08'),(14,14,'3','$2y$12$s.AeifBa5C2qN1mh1YjT2OMH5Wu6/fhZj95DMlLb8Ec04qNYPXiXu',0,'2017-11-09 17:14:14'),(15,15,'4','$2y$12$QluGJsR9Ctb/sI65ih3xjOTNoGfoRyfIPiNu8fFTaV20EFoAe0lg2',0,'2017-11-09 17:14:20'),(16,16,'5','$2y$12$cU49fCX.LlXVuvrb2ABOLOqxxoWPQKUZ77oabCdZ0YP9bJ99k6uMG',0,'2017-11-09 17:14:29');
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-22 13:59:39
