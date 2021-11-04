-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: RVS
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `ADMIN`
--

DROP TABLE IF EXISTS `ADMIN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ADMIN` (
  `user_name` varchar(16) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `Q1` varchar(64) DEFAULT NULL,
  `Q2` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ADMIN`
--

LOCK TABLES `ADMIN` WRITE;
/*!40000 ALTER TABLE `ADMIN` DISABLE KEYS */;
INSERT INTO `ADMIN` VALUES ('ADMIN','e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855','120036bcc7a919087390bf71360acbef9faf952c15c6d6f4a3e6254a90ec3c9a','fd35dd90a19469cb90c8dc82e0563fc96b91b3f00087666fde4794efe6dcebdc');
/*!40000 ALTER TABLE `ADMIN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `INSTRUMENTAL`
--

DROP TABLE IF EXISTS `INSTRUMENTAL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INSTRUMENTAL` (
  `ACU_USERNAME` varchar(30) NOT NULL,
  `I1` varchar(30) NOT NULL,
  `I2` varchar(30) NOT NULL,
  `I3` varchar(30) NOT NULL,
  `I4` varchar(30) NOT NULL,
  `I5` varchar(30) NOT NULL,
  `I6` varchar(30) NOT NULL,
  `I7` varchar(30) NOT NULL,
  `I8` varchar(30) NOT NULL,
  `I9` varchar(30) NOT NULL,
  `I10` varchar(30) NOT NULL,
  `I11` varchar(30) NOT NULL,
  `I12` varchar(30) NOT NULL,
  `I13` varchar(30) NOT NULL,
  `I14` varchar(30) NOT NULL,
  `I15` varchar(30) NOT NULL,
  `I16` varchar(30) NOT NULL,
  `I17` varchar(30) NOT NULL,
  `I18` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `ACU_USERNAME` (`ACU_USERNAME`),
  CONSTRAINT `INSTRUMENTAL_ibfk_1` FOREIGN KEY (`ACU_USERNAME`) REFERENCES `USER` (`ACU_USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `INSTRUMENTAL`
--

LOCK TABLES `INSTRUMENTAL` WRITE;
/*!40000 ALTER TABLE `INSTRUMENTAL` DISABLE KEYS */;
INSERT INTO `INSTRUMENTAL` VALUES ('test','Love','Cheerfulness','Ambition','Cleanliness','Self-Control','Capability','Courage','Politeness','Honesty','Imagination','Independence','Intellect','Broad-Mindedness','Logic','Obediance','Capability','Responsibility','Forgiveness','2018-11-20 07:19:36'),('lmw14a','Cheerfulness','Cleanliness','Courage','Love','Ambition','Self-Control','Forgiveness','Capability','Responsibility','Helpfulness','Obediance','Intellect','Politeness','Logic','Broad-Mindedness','Self-Control','Imagination','Honesty','2018-11-26 04:24:17'),('hghgh','Ambition','Cleanliness','Cheerfulness','Love','Self-Control','Capability','Courage','Politeness','Honesty','Imagination','Independence','Intellect','Broad-Mindedness','Logic','Obediance','Capability','Responsibility','Forgiveness','2018-12-03 15:26:24'),('jwp15b','Cheerfulness','Ambition','Love','Cleanliness','Self-Control','Capability','Courage','Politeness','Honesty','Imagination','Independence','Intellect','Broad-Mindedness','Logic','Obediance','Capability','Responsibility','Forgiveness','2018-12-07 03:16:32');
/*!40000 ALTER TABLE `INSTRUMENTAL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TERMINAL`
--

DROP TABLE IF EXISTS `TERMINAL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TERMINAL` (
  `ACU_USERNAME` varchar(30) NOT NULL,
  `T1` varchar(30) NOT NULL,
  `T2` varchar(30) NOT NULL,
  `T3` varchar(30) NOT NULL,
  `T4` varchar(30) NOT NULL,
  `T5` varchar(30) NOT NULL,
  `T6` varchar(30) NOT NULL,
  `T7` varchar(30) NOT NULL,
  `T8` varchar(30) NOT NULL,
  `T9` varchar(30) NOT NULL,
  `T10` varchar(30) NOT NULL,
  `T11` varchar(30) NOT NULL,
  `T12` varchar(30) NOT NULL,
  `T13` varchar(30) NOT NULL,
  `T14` varchar(30) NOT NULL,
  `T15` varchar(30) NOT NULL,
  `T16` varchar(30) NOT NULL,
  `T17` varchar(30) NOT NULL,
  `T18` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `ACU_USERNAME` (`ACU_USERNAME`),
  CONSTRAINT `TERMINAL_ibfk_1` FOREIGN KEY (`ACU_USERNAME`) REFERENCES `USER` (`ACU_USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TERMINAL`
--

LOCK TABLES `TERMINAL` WRITE;
/*!40000 ALTER TABLE `TERMINAL` DISABLE KEYS */;
INSERT INTO `TERMINAL` VALUES ('test','Happiness','True Friendship','Mature Love','Self-Respect','Inner Harmony','Equality','Freedom','Pleasure','Social Recogintion','Wisdom','Salvation','Family Security','National Security','A Sense of Accomplishment','A World of Beauty','Equality','A Comfortable Life','An Exciting Life','2018-11-20 07:19:34'),('lmw14a','A Sense of Accomplishment','A Comfortable Life','An Exciting Life','A World of Peace','A World of Beauty','Happiness','Mature Love','True Friendship','Self-Respect','National Security','Salvation','Family Security','Equality','Wisdom','Inner Harmony','Happiness','Freedom','Social Recogintion','2018-11-26 04:23:49'),('hghgh','Mature Love','Happiness','True Friendship','Self-Respect','Inner Harmony','Equality','Freedom','Pleasure','Social Recogintion','Wisdom','Salvation','Family Security','National Security','A Sense of Accomplishment','A World of Beauty','Equality','A Comfortable Life','An Exciting Life','2018-12-03 15:26:20'),('jwp15b','Freedom','Wisdom','True Friendship','Mature Love','Self-Respect','Happiness','Inner Harmony','Equality','Pleasure','Social Recogintion','Salvation','Family Security','National Security','A Sense of Accomplishment','A World of Beauty','Happiness','A Comfortable Life','An Exciting Life','2018-12-07 03:16:31');
/*!40000 ALTER TABLE `TERMINAL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER` (
  `ACU_USERNAME` varchar(30) NOT NULL,
  `FIRST_NAME` varchar(30) NOT NULL,
  `LAST_NAME` varchar(30) NOT NULL,
  `EMAIL_ADDRESS` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ACU_USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
INSERT INTO `USER` VALUES ('hghgh','ghghgh','ghg','ghgh','2018-12-03 15:26:13'),('jwp15b','Justin','Park','jwp15b','2018-12-07 03:16:22'),('lmw14a','Lauren','Walker','lmw14a@acu.edu','2018-11-26 04:23:05'),('test','test','test','test','2018-11-20 07:19:31');
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-06 23:54:44