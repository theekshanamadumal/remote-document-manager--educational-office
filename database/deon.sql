-- MySQL dump 10.13  Distrib 5.7.24, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: deon
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `adminpwrds`
--

DROP TABLE IF EXISTS `adminpwrds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminpwrds` (
  `ID` varchar(12) NOT NULL,
  `password1` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminpwrds`
--

LOCK TABLES `adminpwrds` WRITE;
/*!40000 ALTER TABLE `adminpwrds` DISABLE KEYS */;
/*!40000 ALTER TABLE `adminpwrds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `approvelist`
--

DROP TABLE IF EXISTS `approvelist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `approvelist` (
  `requestNo` int(20) NOT NULL,
  `ID` varchar(12) NOT NULL,
  PRIMARY KEY (`requestNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `approvelist`
--

LOCK TABLES `approvelist` WRITE;
/*!40000 ALTER TABLE `approvelist` DISABLE KEYS */;
/*!40000 ALTER TABLE `approvelist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passwords`
--

DROP TABLE IF EXISTS `passwords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passwords` (
  `ID` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passwords`
--

LOCK TABLES `passwords` WRITE;
/*!40000 ALTER TABLE `passwords` DISABLE KEYS */;
INSERT INTO `passwords` VALUES ('12121212','111'),('123456789v','111'),('4444444444V','111'),('971650834V','12'),('111111','45'),('787878','1221'),('456456','121212'),('78787878','122112'),('987654321','111'),('5959','59');
/*!40000 ALTER TABLE `passwords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requestslist`
--

DROP TABLE IF EXISTS `requestslist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requestslist` (
  `requestNo` int(20) NOT NULL,
  `requestId` int(10) NOT NULL,
  `userId` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new',
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`requestNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requestslist`
--

LOCK TABLES `requestslist` WRITE;
/*!40000 ALTER TABLE `requestslist` DISABLE KEYS */;
/*!40000 ALTER TABLE `requestslist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requesttypes`
--

DROP TABLE IF EXISTS `requesttypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requesttypes` (
  `requestId` int(10) NOT NULL,
  `principal` tinyint(1) DEFAULT NULL,
  `teacher` tinyint(1) DEFAULT NULL,
  `staff` tinyint(1) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`requestId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requesttypes`
--

LOCK TABLES `requesttypes` WRITE;
/*!40000 ALTER TABLE `requesttypes` DISABLE KEYS */;
/*!40000 ALTER TABLE `requesttypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userdetails` (
  `ID` varchar(12) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `school` varchar(100) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdetails`
--

LOCK TABLES `userdetails` WRITE;
/*!40000 ALTER TABLE `userdetails` DISABLE KEYS */;
INSERT INTO `userdetails` VALUES ('971650834V','theekshana','madumal','nikaweratiya','773137660','theekshana.18@cse.mrt.ac.lk','ST annes collage','teacher'),('4444444444V','saman','silva','padaviya','773137660','theekshanamadumal@gmail.com','ST annes collage','teacher'),('123456789v','m','n','nm','773137660','theekshana.1@cse.mrt.ac.lk','ST annes collage','teacher'),('111111','h','','j','456','ghfhf','ghfhgfh','Principal'),('444444','df','fd','dfdf','565656','hgfhfh','sfddfsfd','teacher'),('787878','q','','dddd','78888','qwqwqw','wqwqwq','teacher'),('456456','','','','45454545','','','teacher'),('78787878','','','','87878787','','','teacher'),('111222','','','','222111','','','teacher'),('987654321','sadun','gimhan','unagolla','','','unagolla MMV','teacher');
/*!40000 ALTER TABLE `userdetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-18  9:09:47
