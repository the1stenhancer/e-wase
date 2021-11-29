-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ewase
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-1

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
-- Table structure for table `do`
--

DROP TABLE IF EXISTS `do`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `do` (
  `period` timestamp NOT NULL DEFAULT current_timestamp(),
  `value` decimal(5,2) NOT NULL,
  PRIMARY KEY (`period`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `do`
--

LOCK TABLES `do` WRITE;
/*!40000 ALTER TABLE `do` DISABLE KEYS */;
INSERT INTO `do` VALUES ('2021-09-01 11:00:00',6.10),('2021-09-02 12:00:00',16.40),('2021-09-03 13:00:00',26.70),('2021-09-04 14:00:00',37.00),('2021-09-05 15:00:00',47.80),('2021-09-06 16:00:00',58.30),('2021-09-07 11:00:00',10.10),('2021-09-08 12:00:00',22.30),('2021-09-09 13:00:00',26.70),('2021-09-10 14:00:00',37.00),('2021-09-11 15:00:00',57.80),('2021-09-12 16:00:00',58.30);
/*!40000 ALTER TABLE `do` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec`
--

DROP TABLE IF EXISTS `ec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ec` (
  `period` timestamp NOT NULL DEFAULT current_timestamp(),
  `value` decimal(5,2) NOT NULL,
  PRIMARY KEY (`period`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec`
--

LOCK TABLES `ec` WRITE;
/*!40000 ALTER TABLE `ec` DISABLE KEYS */;
INSERT INTO `ec` VALUES ('2021-09-01 11:00:00',60.10),('2021-09-02 12:00:00',100.40),('2021-09-03 13:00:00',345.70),('2021-09-04 14:00:00',10.00),('2021-09-05 15:00:00',250.80),('2021-09-06 16:00:00',890.30),('2021-10-01 11:00:00',5.10),('2021-10-02 12:00:00',400.40),('2021-10-03 13:00:00',999.00),('2021-10-04 14:00:00',100.34),('2021-10-05 15:00:00',13.80),('2021-10-06 16:00:00',670.30);
/*!40000 ALTER TABLE `ec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ph`
--

DROP TABLE IF EXISTS `ph`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ph` (
  `period` timestamp NOT NULL DEFAULT current_timestamp(),
  `value` decimal(3,2) NOT NULL,
  PRIMARY KEY (`period`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ph`
--

LOCK TABLES `ph` WRITE;
/*!40000 ALTER TABLE `ph` DISABLE KEYS */;
INSERT INTO `ph` VALUES ('2021-09-01 11:00:00',6.10),('2021-09-02 12:00:00',6.40),('2021-09-03 13:00:00',6.70),('2021-09-04 14:00:00',7.00),('2021-09-05 15:00:00',7.80),('2021-09-06 16:00:00',8.30),('2021-10-01 09:00:00',6.31),('2021-10-02 10:00:00',6.34),('2021-10-03 11:00:00',6.57),('2021-10-04 12:00:00',7.40),('2021-10-05 15:00:00',7.30),('2021-10-06 12:15:21',5.20),('2021-10-06 16:00:00',8.30),('2021-10-06 16:30:00',9.20);
/*!40000 ALTER TABLE `ph` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tds`
--

DROP TABLE IF EXISTS `tds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tds` (
  `period` timestamp NOT NULL DEFAULT current_timestamp(),
  `value` decimal(5,2) NOT NULL,
  PRIMARY KEY (`period`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tds`
--

LOCK TABLES `tds` WRITE;
/*!40000 ALTER TABLE `tds` DISABLE KEYS */;
INSERT INTO `tds` VALUES ('2021-09-01 11:00:00',60.10),('2021-09-02 12:00:00',100.40),('2021-09-03 13:00:00',345.70),('2021-09-04 14:00:00',10.00),('2021-09-05 15:00:00',250.80),('2021-09-06 16:00:00',890.30),('2021-10-01 11:00:00',5.10),('2021-10-02 12:00:00',400.40),('2021-10-03 13:00:00',999.00),('2021-10-04 14:00:00',100.34),('2021-10-05 15:00:00',13.80),('2021-10-06 16:00:00',670.30);
/*!40000 ALTER TABLE `tds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp`
--

DROP TABLE IF EXISTS `temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp` (
  `period` timestamp NOT NULL DEFAULT current_timestamp(),
  `value` decimal(5,2) NOT NULL,
  PRIMARY KEY (`period`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp`
--

LOCK TABLES `temp` WRITE;
/*!40000 ALTER TABLE `temp` DISABLE KEYS */;
INSERT INTO `temp` VALUES ('2021-09-01 11:00:00',6.10),('2021-09-02 12:00:00',16.40),('2021-09-03 13:00:00',26.70),('2021-09-04 14:00:00',37.00),('2021-09-05 15:00:00',47.80),('2021-09-06 16:00:00',58.30),('2021-09-07 11:00:00',10.10),('2021-09-08 12:00:00',22.30),('2021-09-09 13:00:00',26.70),('2021-09-10 14:00:00',37.00),('2021-09-11 15:00:00',57.80),('2021-09-12 16:00:00',58.30);
/*!40000 ALTER TABLE `temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tur`
--

DROP TABLE IF EXISTS `tur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tur` (
  `period` timestamp NOT NULL DEFAULT current_timestamp(),
  `value` decimal(6,2) NOT NULL,
  PRIMARY KEY (`period`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tur`
--

LOCK TABLES `tur` WRITE;
/*!40000 ALTER TABLE `tur` DISABLE KEYS */;
INSERT INTO `tur` VALUES ('2021-09-01 11:00:00',600.10),('2021-09-02 12:00:00',600.40),('2021-09-03 13:00:00',645.70),('2021-09-04 14:00:00',700.00),('2021-09-05 15:00:00',721.80),('2021-09-06 16:00:00',890.30),('2021-10-01 11:00:00',500.10),('2021-10-02 12:00:00',602.40),('2021-10-03 13:00:00',745.70),('2021-10-04 14:00:00',1000.34),('2021-10-05 15:00:00',13.80),('2021-10-06 16:00:00',990.30);
/*!40000 ALTER TABLE `tur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vowt`
--

DROP TABLE IF EXISTS `vowt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vowt` (
  `period` timestamp NOT NULL DEFAULT current_timestamp(),
  `value` decimal(5,2) NOT NULL,
  PRIMARY KEY (`period`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vowt`
--

LOCK TABLES `vowt` WRITE;
/*!40000 ALTER TABLE `vowt` DISABLE KEYS */;
INSERT INTO `vowt` VALUES ('2021-09-01 11:00:00',60.10),('2021-09-02 12:00:00',100.40),('2021-09-03 13:00:00',345.70),('2021-09-04 14:00:00',10.00),('2021-09-05 15:00:00',250.80),('2021-09-06 16:00:00',890.30),('2021-10-07 11:00:00',5.10),('2021-10-08 12:00:00',400.40),('2021-10-09 13:00:00',999.00),('2021-10-10 14:00:00',100.34),('2021-10-11 15:00:00',13.80),('2021-10-12 16:00:00',670.30);
/*!40000 ALTER TABLE `vowt` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-23 11:01:36
