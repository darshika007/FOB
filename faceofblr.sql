-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: face
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
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `file1` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vid` (`vid`),
  CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `profile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (11,4,'d2.jpg','The day'),(12,4,'c2.jpg','Then this'),(13,5,'c1.jpg','and this'),(14,6,'black.jpg','this also'),(15,6,'75.jpg','Venom'),(16,6,'eminem.jpg','Eminem'),(17,5,'ryan.jpeg','Deadpool'),(18,6,'11.jpg','New');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `judge`
--

DROP TABLE IF EXISTS `judge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `judge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file1` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `judge`
--

LOCK TABLES `judge` WRITE;
/*!40000 ALTER TABLE `judge` DISABLE KEYS */;
INSERT INTO `judge` VALUES (20,'nelson.jpg','Nelson Vasanth J','Founder & CEO'),(21,'anand.jpg','Anand B R','Co-founder & CSO');
/*!40000 ALTER TABLE `judge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file1` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (4,'mcc.jpg','MCC'),(5,'sjcc.jpg','SJCC'),(6,'jnc.jpg','JNC');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regis`
--

DROP TABLE IF EXISTS `regis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file1` varchar(100) NOT NULL,
  `file2` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `radio` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `drop1` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `talent` varchar(100) NOT NULL,
  `yourself` varchar(100) NOT NULL,
  `height` varchar(150) NOT NULL,
  `pwd` varchar(11) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regis`
--

LOCK TABLES `regis` WRITE;
/*!40000 ALTER TABLE `regis` DISABLE KEYS */;
INSERT INTO `regis` VALUES (3,'fa.png','twi.jpg','9874587458','Ragi','Bhatt','ragi@gmail.com',20,'50','Female','1997-12-12','CMRIT','https://www.google.com/','liuytr','kjhgfds','163','rag','selected'),(4,'eminem.jpg','ryan.jpeg','9874563218','Rasheed','Zain','rasheed@gmail.com',21,'46','Male','1997-11-14','lkuytre','https://www.facebook.com/','Dance','Dance','163','rasheed','approve'),(7,'c2.jpg','black.jpg','8978563265','Suhas','KS','suhas@suhas.com',21,'60','Male','1997-10-07','CRIST','NULL','NULL','NULL','165','NULL','selected');
/*!40000 ALTER TABLE `regis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `date` date NOT NULL,
  `day` varchar(100) NOT NULL,
  `venu` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES ('2018-11-07','Thursday','CRIST','55',10),('0044-04-04','pk','mecha','99',14),('2018-11-12','lkojhgf','lkuytre','jhugyte',15),('2018-11-12','Monday','SJCC','14:36',16);
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponser`
--

DROP TABLE IF EXISTS `sponser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file1` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponser`
--

LOCK TABLES `sponser` WRITE;
/*!40000 ALTER TABLE `sponser` DISABLE KEYS */;
INSERT INTO `sponser` VALUES (19,'go.png','Google'),(20,'fa.png','facebook'),(21,'twi.jpg','Twitter');
/*!40000 ALTER TABLE `sponser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vote`
--

DROP TABLE IF EXISTS `vote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vote`
--

LOCK TABLES `vote` WRITE;
/*!40000 ALTER TABLE `vote` DISABLE KEYS */;
INSERT INTO `vote` VALUES (1,'','megha','meghasrgowda043@gmail.com','9916266958'),(2,'','chandu','chandume09@hotmail.com','8880131222'),(3,'','mecha','meghacm95@gmail.com','8880131222'),(4,'chandu@m','barthi','b@r','9972654844'),(5,'m@chandu','xcfvg','A@A','1212121212'),(6,'Mecha@gamil.com','dfgsd','A@b','3316266958'),(7,'Mecha@gamil.com','cvb','l@l','1212121212'),(8,'R@B','me','ghj@ghj','3316266958'),(9,'sanj@gmail.com','sanjana','sanjana@gmail.com','9874552512'),(10,'ragi@gmail.com','Suhas','suhas@gmail.com','9874565874'),(11,'rasheed@gmail.com','Suraj','suraj@gmail.com','9857745452'),(12,'ragi@gmail.com','Sahil','sahil@gmail.com','9874587452'),(13,'suhas@suhas.com','Fask','kjhg@gmail.com','9874652145');
/*!40000 ALTER TABLE `vote` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-16 13:08:17
