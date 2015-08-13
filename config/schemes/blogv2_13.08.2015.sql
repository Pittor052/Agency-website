-- MySQL dump 10.13  Distrib 5.6.25, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.6.25-0ubuntu0.15.04.1

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `msg` mediumtext NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES ('ssssssssssssssssssssssssssssssssssss','ssss@asdasd.com','general','sssssssssssssss',28),('test','karboratorr@gmail.com','orders','AAA',29);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content_manager`
--

DROP TABLE IF EXISTS `content_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_type` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `section` varchar(100) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `element_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `image_id_index` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_manager`
--

LOCK TABLES `content_manager` WRITE;
/*!40000 ALTER TABLE `content_manager` DISABLE KEYS */;
INSERT INTO `content_manager` VALUES (22,'home','EDIT - 2                                                           \r\n Lorem ipsum dolor sit amet, vide referrentur sit id, ea nam utroque incorrupte definitionem. Eam nusquam gloriatur ad, labores luptatum torquatos in pro, vix choro alienum prodesset an. Sit saepe semper euripidis te. Vim ut nostrud minimum, duo ad rebum putent. Has cu ferri evertitur, id nonumes recusabo percipitur eos, quo ad aperiam facilisi moderatius. Et praesent tincidunt dissentiet qui, iudicabit voluptatum no vim.\r\n\r\nUt facer electram vix, at veri quaerendum appellantur vim. Cu quo feugait forensibus, natum regione interpretaris his id, et eos vide saepe. Quo magna menandri intellegam te, quo ex ullum sanctus ponderum. No copiosae sapientem accommodare eum, in cum labores scripserit. Illum oporteat eu eam, nec te delenit tractatos, per consul detraxit eleifend cu.\r\n\r\nBonorum maluisset no usu, ius soluta timeam democritum ex. Velit minim reprimique ei nam. Cu quidam deserunt assueverit vis, ei eos diceret pericula. Salutatus principes qui ea, ad pro malis denique constituto. Nihil dictas aeterno no vis.\r\n\r\nPri ut meis putant voluptua. Id mei sale imperdiet. Saepe assueverit reformidans vis eu. Invenire elaboraret ut duo, usu debet pertinax assueverit ne.\r\n\r\nCum zril ocurreret consulatu no. Quo at vidit omnis, iuvaret fabulas oportere has id. Apeirian philosophia ea eam, has in tantas audire omittam, labitur accommodare qui ad. Sit no mucius pertinacia elaboraret, vix debitis cotidieque comprehensam at, semper option deterruisset no eum. Has te option persequeris, ut soluta dissentiet sea.                                                ','header',18,'left','text_box'),(23,'home','\n                    Pi4ku ti materinu','body',19,'center','slider'),(25,'home','\n                    Yaba-daba-Lorem ipsum dolor sit amet, vide referrentur sit id, ea nam utroque incorrupte definitionem. Eam nusquam gloriatur ad, labores luptatum torquatos in pro, vix choro alienum prodesset an. Sit saepe semper euripidis te. Vim ut nostrud minimum, duo ad rebum putent. Has cu ferri evertitur, id nonumes recusabo percipitur eos, quo ad aperiam facilisi moderatius. Et praesent tincidunt dissentiet qui, iudicabit voluptatum no vim.\n                              \n                              Ut facer electram vix, at veri quaerendum appellantur vim. Cu quo feugait forensibus, natum regione interpretaris his id, et eos vide saepe. Quo magna menandri intellegam te, quo ex ullum sanctus ponderum. No copiosae sapientem accommodare eum, in cum labores scripserit. Illum oporteat eu eam, nec te delenit tractatos, per consul detraxit eleifend cu.\n                              \n                              Bonorum maluisset no usu, ius soluta timeam democritum ex. Velit minim reprimique ei nam. Cu quidam deserunt assueverit vis, ei eos diceret pericula. Salutatus principes qui ea, ad pro malis denique constituto. Nihil dictas aeterno no vis.\n                              \n                              Pri ut meis putant voluptua. Id mei sale imperdiet. Saepe assueverit reformidans vis eu. Invenire elaboraret ut duo, usu debet pertinax assueverit ne.\n                              \n                              Cum zril ocurreret consulatu no. Quo at vidit omnis, iuvaret fabulas oportere has id. Apeirian philosophia ea eam, has in tantas audire omittam, labitur accommodare qui ad. Sit no mucius pertinacia elaboraret, vix debitis cotidieque comprehensam at, semper option deterruisset no eum. Has te option persequeris, ut soluta dissentiet sea.','header',21,'center','text_box'),(26,'home','\n                    Lorem ipsum dolor sit amet, vide referrentur sit id, ea nam utroque incorrupte definitionem. Eam nusquam gloriatur ad, labores luptatum torquatos in pro, vix choro alienum prodesset an. Sit saepe semper euripidis te. Vim ut nostrud minimum, duo ad rebum putent. Has cu ferri evertitur, id nonumes recusabo percipitur eos, quo ad aperiam facilisi moderatius. Et praesent tincidunt dissentiet qui, iudicabit voluptatum no vim.\n                    \n                    Ut facer electram vix, at veri quaerendum appellantur vim. Cu quo feugait forensibus, natum regione interpretaris his id, et eos vide saepe. Quo magna menandri intellegam te, quo ex ullum sanctus ponderum. No copiosae sapientem accommodare eum, in cum labores scripserit. Illum oporteat eu eam, nec te delenit tractatos, per consul detraxit eleifend cu.\n                    \n                    Bonorum maluisset no usu, ius soluta timeam democritum ex. Velit minim reprimique ei nam. Cu quidam deserunt assueverit vis, ei eos diceret pericula. Salutatus principes qui ea, ad pro malis denique constituto. Nihil dictas aeterno no vis.\n                    \n                    Pri ut meis putant voluptua. Id mei sale imperdiet. Saepe assueverit reformidans vis eu. Invenire elaboraret ut duo, usu debet pertinax assueverit ne.\n                    \n                    Cum zril ocurreret consulatu no. Quo at vidit omnis, iuvaret fabulas oportere has id. Apeirian philosophia ea eam, has in tantas audire omittam, labitur accommodare qui ad. Sit no mucius pertinacia elaboraret, vix debitis cotidieque comprehensam at, semper option deterruisset no eum. Has te option persequeris, ut soluta dissentiet sea. materino','body',22,'right','text_box'),(27,'All','\r\n                <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>','footer',NULL,'center','text_box'),(28,'All','\r\n                    <b>Phone:</b> +44 123 654321<br/>','footer',NULL,'center','text_box'),(29,'All','\r\n                    <b>Fax:</b> +44 123 654321<br/>','footer',NULL,'center','text_box'),(30,'All','<b>Email:</b><a href=\"mailto:getintoutch@yourcompanydomain.com\">getintoutch@yourcompanydomain.com</a>','footer',NULL,'center','text_box'),(32,'All','\r\n                     <a href=\"https://www.facebook.com/pages/%D0%9F%D0%90-%D0%91%D0%BE%D0%BB%D0%B0%D1%80/1448085492170894?fref=ts\"\r\n                        class=\"facebook\"></a>','footer',NULL,'right','text_box'),(33,'services','Service - 1\r\n\r\nLorem ipsum dolor sit amet, vide referrentur sit id, ea nam utroque incorrupte definitionem. Eam nusquam gloriatur ad, labores luptatum torquatos in pro, vix choro alienum prodesset an. Sit saepe semper euripidis te. Vim ut nostrud minimum, duo ad rebum putent. Has cu ferri evertitur, id nonumes recusabo percipitur eos, quo ad aperiam facilisi moderatius. Et praesent tincidunt dissentiet qui, iudicabit voluptatum no vim.\r\n\r\nUt facer electram vix, at veri quaerendum appellantur vim. Cu quo feugait forensibus, natum regione interpretaris his id, et eos vide saepe. Quo magna menandri intellegam te, quo ex ullum sanctus ponderum. No copiosae sapientem accommodare eum, in cum labores scripserit. Illum oporteat eu eam, nec te delenit tractatos, per consul detraxit eleifend cu.\r\n\r\nBonorum maluisset no usu, ius soluta timeam democritum ex. Velit minim reprimique ei nam. Cu quidam deserunt assueverit vis, ei eos diceret pericula. Salutatus principes qui ea, ad pro malis denique constituto. Nihil dictas aeterno no vis.\r\n\r\nPri ut meis putant voluptua. Id mei sale imperdiet. Saepe assueverit reformidans vis eu. Invenire elaboraret ut duo, usu debet pertinax assueverit ne.\r\n\r\nCum zril ocurreret consulatu no. Quo at vidit omnis, iuvaret fabulas oportere has id. Apeirian philosophia ea eam, has in tantas audire omittam, labitur accommodare qui ad. Sit no mucius pertinacia elaboraret, vix debitis cotidieque comprehensam at, semper option deterruisset no eum. Has te option persequeris, ut soluta dissentiet sea.','body',NULL,'center','text_box'),(35,'services','Service - 2\r\n                    Lorem ipsum dolor sit amet, vide referrentur sit id, ea nam utroque incorrupte definitionem. Eam nusquam gloriatur ad, labores luptatum torquatos in pro, vix choro alienum prodesset an. Sit saepe semper euripidis te. Vim ut nostrud minimum, duo ad rebum putent. Has cu ferri evertitur, id nonumes recusabo percipitur eos, quo ad aperiam facilisi moderatius. Et praesent tincidunt dissentiet qui, iudicabit voluptatum no vim. Ut facer electram vix, at veri quaerendum appellantur vim. Cu quo feugait forensibus, natum regione interpretaris his id, et eos vide saepe. Quo magna menandri intellegam te, quo ex ullum sanctus ponderum. No copiosae sapientem accommodare eum, in cum labores scripserit. Illum oporteat eu eam, nec te delenit tractatos, per consul detraxit eleifend cu. Bonorum maluisset no usu, ius soluta timeam democritum ex. Velit minim reprimique ei nam. Cu quidam deserunt assueverit vis, ei eos diceret pericula. Salutatus principes qui ea, ad pro malis denique constituto. Nihil dictas aeterno no vis. Pri ut meis putant voluptua. Id mei sale imperdiet. Saepe assueverit reformidans vis eu. Invenire elaboraret ut duo, usu debet pertinax assueverit ne. Cum zril ocurreret consulatu no. Quo at vidit omnis, iuvaret fabulas oportere has id. Apeirian philosophia ea eam, has in tantas audire omittam, labitur accommodare qui ad. Sit no mucius pertinacia elaboraret, vix debitis cotidieque comprehensam at, semper option deterruisset no eum. Has te option persequeris, ut soluta dissentiet sea.','body',NULL,'center','text_box'),(36,'about','\r\n                    About \r\n\r\nLorem ipsum dolor sit amet, vide referrentur sit id, ea nam utroque incorrupte definitionem. Eam nusquam gloriatur ad, labores luptatum torquatos in pro, vix choro alienum prodesset an. Sit saepe semper euripidis te. Vim ut nostrud minimum, duo ad rebum putent. Has cu ferri evertitur, id nonumes recusabo percipitur eos, quo ad aperiam facilisi moderatius. Et praesent tincidunt dissentiet qui, iudicabit voluptatum no vim.\r\n\r\nUt facer electram vix, at veri quaerendum appellantur vim. Cu quo feugait forensibus, natum regione interpretaris his id, et eos vide saepe. Quo magna menandri intellegam te, quo ex ullum sanctus ponderum. No copiosae sapientem accommodare eum, in cum labores scripserit. Illum oporteat eu eam, nec te delenit tractatos, per consul detraxit eleifend cu.\r\n\r\nBonorum maluisset no usu, ius soluta timeam democritum ex. Velit minim reprimique ei nam. Cu quidam deserunt assueverit vis, ei eos diceret pericula. Salutatus principes qui ea, ad pro malis denique constituto. Nihil dictas aeterno no vis.\r\n\r\nPri ut meis putant voluptua. Id mei sale imperdiet. Saepe assueverit reformidans vis eu. Invenire elaboraret ut duo, usu debet pertinax assueverit ne.\r\n\r\nCum zril ocurreret consulatu no. Quo at vidit omnis, iuvaret fabulas oportere has id. Apeirian philosophia ea eam, has in tantas audire omittam, labitur accommodare qui ad. Sit no mucius pertinacia elaboraret, vix debitis cotidieque comprehensam at, semper option deterruisset no eum. Has te option persequeris, ut soluta dissentiet sea.','body',NULL,'center','text_box'),(37,'home','<p><strong>Hello MadaR-FuckerS&nbsp;</strong><br />\r\n<br />\r\n<s>sssss</s></p>\r\n','header',22,'center','slider');
/*!40000 ALTER TABLE `content_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'/img/products/4/1439044450_Screenshot from 2015-08-06 21:13:29.png',NULL,4),(2,'/img/products/1/1439044474_mbuntu-default.jpg',NULL,1),(3,'/img/products/1/1439061912_mbuntu-default.jpg',44,1),(4,'/img/products/1/1439100640_mbuntu-default.jpg',NULL,1),(5,'/img/products/1/1439100662_0e978e1.jpg',NULL,1),(6,'/img/products/1/1439100974_0e978e1.jpg',45,1),(7,'/img/products/1/1439126164_67fbd528-f997-4146-a81d-ed5d138e8df1-original.jpeg',46,1),(18,'/img/products/pages/home/header/1439137869_Screenshot from 2015-08-06 20:52:19.png',NULL,NULL),(19,'/img/products/pages/home/body/1439138482_mbuntu-default.jpg',NULL,NULL),(21,'/img/products/pages/home/header/1439138528_0e978e1.jpg',NULL,NULL),(22,'/img/products/pages/home/header/1439464117_mbuntu-default.jpg',NULL,NULL);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_cat`
--

DROP TABLE IF EXISTS `gallery_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_cat`
--

LOCK TABLES `gallery_cat` WRITE;
/*!40000 ALTER TABLE `gallery_cat` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mailer`
--

DROP TABLE IF EXISTS `mailer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mailer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `imap` varchar(100) NOT NULL,
  `imap_port` int(11) NOT NULL,
  `smtp` varchar(100) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_encryption` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mailer`
--

LOCK TABLES `mailer` WRITE;
/*!40000 ALTER TABLE `mailer` DISABLE KEYS */;
INSERT INTO `mailer` VALUES (1,'karboratorr','maleopaa','imap.gmail.com',993,'smtp.gmail.com',465,'ssl',1);
/*!40000 ALTER TABLE `mailer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `type` int(11) DEFAULT NULL,
  `issue` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_ref`
--

DROP TABLE IF EXISTS `product_ref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_ref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_ref` (`ref`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_ref`
--

LOCK TABLES `product_ref` WRITE;
/*!40000 ALTER TABLE `product_ref` DISABLE KEYS */;
INSERT INTO `product_ref` VALUES (15,'ref#15',15),(16,'ref#16',16),(17,'ref#17',17),(18,'ref#18',18),(19,'ref#19',19),(20,'ref#20',20),(21,'ref#21',21),(22,'ref#22',22),(31,'ref#31',31),(32,'ref#32',32),(33,'ref#33',33),(34,'ref#34',34),(35,'ref#35',35),(36,'ref#36',36),(37,'ref#37',37),(38,'ref#38',38),(39,'ref#39',39),(40,'ref#40',40),(41,'ref#41',41),(42,'ref#42',42),(43,'ref#43',43),(44,'ref#44',44),(45,'ref#45',45),(46,'ref#46',46);
/*!40000 ALTER TABLE `product_ref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` varchar(20) NOT NULL,
  `available` tinyint(4) DEFAULT '1',
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (31,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(32,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(33,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(34,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(35,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(36,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(37,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(38,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(39,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(40,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(41,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(42,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(43,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(44,'wwwwww','wwwwwwwwwwwwww','11111',1,1),(45,'qqqq','tttttttttttttt','22222',1,1),(46,'ssss','ssssssssssssssss','222',1,1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'pittor@abv.bg','$2a$08$8jSfCnZeLJotRozO9sJ8fuR3QhLFwQ4bp4Gy87cZFX5BEHyGpEGbW'),(8,'karboratorr@gmail.com','$2a$08$8jSfCnZeLJotRozO9sJ8fuR3QhLFwQ4bp4Gy87cZFX5BEHyGpEGbW');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-13 18:56:56
