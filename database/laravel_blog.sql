-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: laravel_blog
-- ------------------------------------------------------
-- Server version	5.5.34

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
-- Table structure for table `CATEGORY`
--

DROP TABLE IF EXISTS `CATEGORY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CATEGORY` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) DEFAULT NULL,
  `cat_desc` varchar(255) DEFAULT NULL,
  `cat_status_cd` varchar(3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CATEGORY`
--

LOCK TABLES `CATEGORY` WRITE;
/*!40000 ALTER TABLE `CATEGORY` DISABLE KEYS */;
INSERT INTO `CATEGORY` VALUES (1,'news','Technology news','ACT',NULL,NULL),(2,'motip','Mobile Tip','ACT',NULL,NULL),(3,'comtip','Computer Tip','ACT',NULL,NULL);
/*!40000 ALTER TABLE `CATEGORY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEDIA`
--

DROP TABLE IF EXISTS `MEDIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEDIA` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `med_name` varchar(255) DEFAULT NULL,
  `med_title` varchar(100) DEFAULT NULL,
  `med_desc` varchar(255) DEFAULT NULL,
  `med_link` tinytext,
  `med_status_cd` varchar(3) DEFAULT 'ACT',
  `met_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`med_id`),
  KEY `mediatype_id` (`met_id`),
  CONSTRAINT `m_mediatype_id` FOREIGN KEY (`met_id`) REFERENCES `media_type` (`met_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEDIA`
--

LOCK TABLES `MEDIA` WRITE;
/*!40000 ALTER TABLE `MEDIA` DISABLE KEYS */;
INSERT INTO `MEDIA` VALUES (5,'59ebadff0b88ee1e0694cd1d7533f828.png','image 1','This is my first image','/img/media/59ebadff0b88ee1e0694cd1d7533f828.png','DEL',NULL,'2015-09-13 15:45:32','2017-04-08 08:47:29'),(6,'b2df8410c5601bbf2962e4ee3624c447.png','image 3','My second image','/img/media/b2df8410c5601bbf2962e4ee3624c447.png','DEL',NULL,'2015-09-13 15:46:04','2017-04-08 08:47:29'),(7,'5bb0f8ce8fc05f4a911f40110e43f1e8.jpg','image 3','Third image','/img/media/5bb0f8ce8fc05f4a911f40110e43f1e8.jpg','DEL',NULL,'2015-09-13 16:29:23','2017-04-08 08:47:29'),(8,'a194a92d7171bc71e178752774cc9616.png','','','/img/media/a194a92d7171bc71e178752774cc9616.png','DEL',NULL,'2015-09-16 13:59:57','2017-04-08 08:47:29'),(9,'6774254e0cb4c2c82ec3e40ca4315df8.png','','','/img/media/6774254e0cb4c2c82ec3e40ca4315df8.png','DEL',NULL,'2015-09-16 14:47:54','2017-04-08 08:47:29'),(10,'3baac2dc569f3162a852a061206745a5.png','','','/img/media/3baac2dc569f3162a852a061206745a5.png','DEL',NULL,'2015-09-18 14:24:20','2017-04-08 08:47:29'),(11,'548453a2db398dcdab2b152e16a15941.png','','','/img/media/548453a2db398dcdab2b152e16a15941.png','DEL',NULL,'2015-09-18 14:31:39','2017-04-08 08:47:29'),(12,'9b042db50d6f1272d4953bc0e616c5bc.png','','','/img/media/9b042db50d6f1272d4953bc0e616c5bc.png','DEL',NULL,'2015-09-18 14:32:06','2017-04-08 08:47:29'),(13,'feab3511dfd90621c9f181be5ef6e7c8.png','','','/img/media/feab3511dfd90621c9f181be5ef6e7c8.png','DEL',NULL,'2015-09-18 14:33:46','2017-04-08 08:47:29'),(14,'cb4c42d9f48123a6b767fcceee9361c0.png','','','/img/media/cb4c42d9f48123a6b767fcceee9361c0.png','DEL',NULL,'2015-09-18 14:40:41','2017-04-08 08:47:29'),(15,'0d44ece5127193e7b7828f32fd526874.png','','','/img/media/0d44ece5127193e7b7828f32fd526874.png','DEL',NULL,'2015-09-18 14:41:28','2017-04-08 08:47:29'),(16,'adc0defb91b191ff6985050b4625bcc1.png','','','/img/media/adc0defb91b191ff6985050b4625bcc1.png','DEL',NULL,'2015-09-18 14:42:15','2017-04-08 08:47:29'),(17,'c545ca074bb08f46fab2c0f2e5786c22.jpg','','','/img/media/c545ca074bb08f46fab2c0f2e5786c22.jpg','DEL',NULL,'2015-09-18 14:42:41','2017-04-08 08:47:29'),(18,'a115e78949de684df206b90dc0450e64.png','','','/img/media/a115e78949de684df206b90dc0450e64.png','DEL',NULL,'2015-09-18 14:43:15','2017-04-08 08:47:29'),(19,'063d1d3237bfc4af608c9562cac18850.jpg','','','/img/media/063d1d3237bfc4af608c9562cac18850.jpg','DEL',NULL,'2015-09-18 14:43:47','2017-04-08 08:47:29'),(20,'13e5935c1bad60148e1e60b298b95eab.png','','','/img/media/13e5935c1bad60148e1e60b298b95eab.png','DEL',NULL,'2015-09-18 14:44:20','2017-04-08 08:47:29'),(21,'3523698e68d5fefc154bb6b672fef5f4.png','','','/img/media/3523698e68d5fefc154bb6b672fef5f4.png','DEL',NULL,'2015-09-18 14:44:36','2017-04-08 08:47:29'),(22,'5ffd19a6c14b5c92fb251f9d825a0b18.png','','','/img/media/5ffd19a6c14b5c92fb251f9d825a0b18.png','DEL',NULL,'2015-09-18 14:50:59','2017-04-08 08:47:29'),(23,'d7279cdbfdb39e1f7c761b7eeddcbcf3.png','','','/img/media/d7279cdbfdb39e1f7c761b7eeddcbcf3.png','DEL',NULL,'2015-09-18 14:53:57','2017-04-08 08:47:29'),(24,'32689f1a3da662d5dbd2de783ea6f71c.png','','','/img/media/32689f1a3da662d5dbd2de783ea6f71c.png','DEL',NULL,'2015-09-18 14:55:36','2017-04-08 08:47:29'),(25,'a4bd8c7994b43e1b4079a96533f451a8.png','','','/img/media/a4bd8c7994b43e1b4079a96533f451a8.png','DEL',NULL,'2015-09-18 14:55:54','2017-04-08 08:47:29'),(26,'b567f26e41daf0e35cf8794f7f60804a.png','','','/img/media/b567f26e41daf0e35cf8794f7f60804a.png','DEL',NULL,'2015-09-18 15:02:08','2017-04-08 08:47:29'),(27,'f85a63bfb3da6055b72d31a8485313c9.png','','','/img/media/f85a63bfb3da6055b72d31a8485313c9.png','DEL',NULL,'2015-09-18 15:02:59','2017-04-08 08:47:29'),(28,'08a69496b4cd20ec9f833341e519608e.png','','','/img/media/08a69496b4cd20ec9f833341e519608e.png','DEL',NULL,'2015-09-18 15:04:00','2017-04-08 08:47:29'),(29,'309502c288ea9b9b122ee33214dd96de.png','','','/img/media/309502c288ea9b9b122ee33214dd96de.png','DEL',NULL,'2015-09-18 15:05:25','2017-04-08 08:47:29'),(30,'6601846119bea2cdfd67ed9885c07d25.png','','','/img/media/6601846119bea2cdfd67ed9885c07d25.png','DEL',NULL,'2015-09-18 15:06:39','2017-04-08 08:47:29'),(31,'fa238a371144c2fc914c6874b545fbd0.png','','','/img/media/fa238a371144c2fc914c6874b545fbd0.png','DEL',NULL,'2015-09-18 15:06:51','2017-04-08 08:47:29'),(32,'85cc01a6e89b068f0d837ddff83419cb.jpg','','','/img/media/85cc01a6e89b068f0d837ddff83419cb.jpg','DEL',NULL,'2015-09-18 15:07:02','2017-04-08 08:47:29'),(33,'d92c44dbd1ea76ef6e0ba1efccab8f18.png',NULL,NULL,'/img/media/d92c44dbd1ea76ef6e0ba1efccab8f18.png','DEL',NULL,'2015-09-18 15:18:51','2017-04-08 08:47:29'),(34,'0d4b89c0296c9d714336bdac2d3d6ff9.png',NULL,NULL,'/img/media/0d4b89c0296c9d714336bdac2d3d6ff9.png','DEL',NULL,'2015-09-18 15:20:09','2017-04-08 08:47:29'),(35,'fcb93a9b7c42c42506c1ea83e981ce6b.png',NULL,NULL,'/img/media/fcb93a9b7c42c42506c1ea83e981ce6b.png','DEL',NULL,'2015-09-18 15:25:11','2017-04-08 08:47:29'),(36,'fcb93a9b7c42c42506c1ea83e981ce6b.png','fdasfdsa','fdsaffffff','/img/media/fcb93a9b7c42c42506c1ea83e981ce6b.png','DEL',NULL,'2015-09-18 15:32:27','2017-04-08 08:47:29'),(37,'4c0c8119106416f66ea121f023cbf70f.jpeg','','','http://laravel-blog.dev/img/media/4c0c8119106416f66ea121f023cbf70f.jpeg','DEL',NULL,'2017-04-09 05:26:23','2017-04-09 05:27:41'),(38,'815981f35b873986d8c8c45c829f5e5d.jpg','','','http://laravel-blog.dev/img/media/815981f35b873986d8c8c45c829f5e5d.jpg','DEL',NULL,'2017-04-09 05:28:10','2017-04-09 05:28:54'),(39,'6f4d93624d04f37ee3d84013de9d6426.jpeg','','','http://laravel-blog.dev/img/media/6f4d93624d04f37ee3d84013de9d6426.jpeg','DEL',NULL,'2017-04-09 05:38:15','2017-04-09 05:54:17'),(40,'3c4c1fb89f40718937360028f3a11a5b.jpg','','','http://laravel-blog.dev/img/media/3c4c1fb89f40718937360028f3a11a5b.jpg','DEL',NULL,'2017-04-09 05:40:22','2017-04-09 05:54:17'),(41,'f4df4e6b2ce0e2350b80b580b14bcf4e.jpeg','','','http://laravel-blog.dev/img/media/f4df4e6b2ce0e2350b80b580b14bcf4e.jpeg','DEL',NULL,'2017-04-09 05:42:03','2017-04-09 05:54:17'),(42,'a9c4d5e6928f1ab9f343836e2e2540e0.jpg','','','http://laravel-blog.dev/img/media/a9c4d5e6928f1ab9f343836e2e2540e0.jpg','DEL',NULL,'2017-04-09 05:46:57','2017-04-09 05:54:17'),(43,'6abac68bc1278019134ee19b01d965d7.jpeg','','','http://laravel-blog.dev/img/media/6abac68bc1278019134ee19b01d965d7.jpeg','DEL',NULL,'2017-04-09 05:50:05','2017-04-09 05:54:17'),(44,'c6de4bbc2f9e59deb40ff703a1eb771f.jpeg','','','http://laravel-blog.dev/img/media/c6de4bbc2f9e59deb40ff703a1eb771f.jpeg','DEL',NULL,'2017-04-09 05:50:29','2017-04-09 05:54:17'),(45,'a758148aa0122f7c76090845357982ee.jpg','','','http://laravel-blog.dev/img/media/a758148aa0122f7c76090845357982ee.jpg','DEL',NULL,'2017-04-09 05:52:41','2017-04-09 05:54:17'),(46,'0fb4f3646a3962f6f294ded650c8702c.jpeg','','','http://laravel-blog.dev/img/media/0fb4f3646a3962f6f294ded650c8702c.jpeg','DEL',NULL,'2017-04-09 05:53:58','2017-04-09 05:54:17'),(47,'59246160637b6b114d0144e5f0be0786.jpg','','','http://laravel-blog.dev/img/media/59246160637b6b114d0144e5f0be0786.jpg','DEL',NULL,'2017-04-09 05:57:28','2017-04-09 05:59:59'),(48,'792cf7ddbe3b4dba984245ed79e27da1.jpeg','','','http://laravel-blog.dev/img/media/792cf7ddbe3b4dba984245ed79e27da1.jpeg','DEL',NULL,'2017-04-09 05:58:07','2017-04-09 05:59:59'),(49,'38bfd09c5186b88f604623609b608183.jpeg','','','http://laravel-blog.dev/img/media/38bfd09c5186b88f604623609b608183.jpeg','DEL',NULL,'2017-04-09 05:59:11','2017-04-09 05:59:59'),(50,'41087bdd42839043d2df4a30b4016b42.jpeg','','','http://laravel-blog.dev/img/media/41087bdd42839043d2df4a30b4016b42.jpeg','DEL',NULL,'2017-04-09 05:59:29','2017-04-09 05:59:59'),(51,'6a8d4947401be7dd695d4be9994020ed.jpg','','','http://laravel-blog.dev/img/media/6a8d4947401be7dd695d4be9994020ed.jpg','ACT',NULL,'2017-04-09 06:13:44','2017-04-09 06:13:44');
/*!40000 ALTER TABLE `MEDIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEDIA_TYPE`
--

DROP TABLE IF EXISTS `MEDIA_TYPE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEDIA_TYPE` (
  `met_id` int(11) NOT NULL AUTO_INCREMENT,
  `met_name` varchar(100) NOT NULL,
  `met_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`met_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEDIA_TYPE`
--

LOCK TABLES `MEDIA_TYPE` WRITE;
/*!40000 ALTER TABLE `MEDIA_TYPE` DISABLE KEYS */;
INSERT INTO `MEDIA_TYPE` VALUES (1,'post','Post Media'),(2,'promotion','Promotion Media');
/*!40000 ALTER TABLE `MEDIA_TYPE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PAGE`
--

DROP TABLE IF EXISTS `PAGE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PAGE` (
  `pag_id` int(11) NOT NULL AUTO_INCREMENT,
  `pag_name` varchar(255) NOT NULL,
  `pag_filename` varchar(255) DEFAULT NULL,
  `pag_label` varchar(255) DEFAULT NULL,
  `pag_path` varchar(255) DEFAULT NULL,
  `pag_order` int(11) DEFAULT '1',
  `pag_desc` text,
  `pag_status_cd` varchar(3) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_category` tinyint(1) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keyword` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `pag_slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pag_id`),
  UNIQUE KEY `pag_name_UNIQUE` (`pag_name`),
  UNIQUE KEY `pag_filename_UNIQUE` (`pag_filename`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAGE`
--

LOCK TABLES `PAGE` WRITE;
/*!40000 ALTER TABLE `PAGE` DISABLE KEYS */;
INSERT INTO `PAGE` VALUES (5,'home','home.html',NULL,NULL,1,'Hellow home page.','ACT',NULL,NULL,NULL,NULL,NULL,'2015-09-12 09:16:01','2015-09-14 14:42:29',NULL),(6,'about','about.html',NULL,NULL,2,'Hello about page','ACT',NULL,NULL,NULL,NULL,NULL,'2015-09-12 09:20:18','2015-09-14 14:28:26',NULL);
/*!40000 ALTER TABLE `PAGE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PAGE_CATEGORY`
--

DROP TABLE IF EXISTS `PAGE_CATEGORY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PAGE_CATEGORY` (
  `pag_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`pag_id`,`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAGE_CATEGORY`
--

LOCK TABLES `PAGE_CATEGORY` WRITE;
/*!40000 ALTER TABLE `PAGE_CATEGORY` DISABLE KEYS */;
/*!40000 ALTER TABLE `PAGE_CATEGORY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PAGE_MEDIA`
--

DROP TABLE IF EXISTS `PAGE_MEDIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PAGE_MEDIA` (
  `pag_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  PRIMARY KEY (`pag_id`,`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAGE_MEDIA`
--

LOCK TABLES `PAGE_MEDIA` WRITE;
/*!40000 ALTER TABLE `PAGE_MEDIA` DISABLE KEYS */;
/*!40000 ALTER TABLE `PAGE_MEDIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `POST`
--

DROP TABLE IF EXISTS `POST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `POST` (
  `pos_id` int(11) NOT NULL AUTO_INCREMENT,
  `pos_name` varchar(255) DEFAULT NULL,
  `pos_filename` varchar(255) DEFAULT NULL,
  `pos_sum` text,
  `pos_desc` text,
  `pos_status_cd` varchar(3) DEFAULT NULL,
  `pag_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `pos_image` varchar(255) DEFAULT NULL,
  `pos_slug` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `POST`
--

LOCK TABLES `POST` WRITE;
/*!40000 ALTER TABLE `POST` DISABLE KEYS */;
INSERT INTO `POST` VALUES (1,'Post','post testing','<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"/img/media/6a8d4947401be7dd695d4be9994020ed.jpg\" style=\"height:120px; width:120px\" /></td>\r\n			<td>This is my first blog in this tutorial with any text to do សួស្តីអ្នកទាំងអស់គ្នុា</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n','<p><img alt=\"\" src=\"/img/media/6a8d4947401be7dd695d4be9994020ed.jpg\" style=\"height:330px; width:330px\" /></p>\r\n','ACT',NULL,1,'2015-09-14 13:16:43','2017-04-09 06:22:57','10d88f320f89e8bb3925f09efc417bc3.jpg','',NULL,2),(11,'dsadsa','SADSAdsa','<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"/img/media/5bb0f8ce8fc05f4a911f40110e43f1e8.jpg\" style=\"height:50px; width:50px\" /></td>\r\n			<td>This is my first blog in this tutorial with any text to do សួស្តីអ្នកទាំងអស់គ្នុា</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n','<p>FDSAFDSA&nbsp;<img alt=\"\" src=\"/img/media/b2df8410c5601bbf2962e4ee3624c447.png\" style=\"height:330px; width:330px\" /></p>\r\n','DEL',NULL,NULL,'2015-09-14 14:12:33','2017-04-08 08:13:34',NULL,NULL,NULL,NULL),(12,'New Post','new-post','<p><img alt=\"\" src=\"/img/media/6a8d4947401be7dd695d4be9994020ed.jpg\" style=\"float:left; height:120px; width:120px\" /></p>\r\n\r\n<p>We Are Specialised Designing And Programming Team Passionate About Web Design And Creatin Digital Ideas We Will Transfer Your Idea To A Digital Dream And Make Your Wish come True</p>\r\n','','ACT',NULL,1,'2015-09-15 13:17:32','2017-04-09 06:21:16','a5d70ca01d9149988c8a3461982fffe8.jpeg','',NULL,2);
/*!40000 ALTER TABLE `POST` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `POST_CATEGORY`
--

DROP TABLE IF EXISTS `POST_CATEGORY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `POST_CATEGORY` (
  `pos_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  UNIQUE KEY `pos_id_UNIQUE` (`pos_id`),
  UNIQUE KEY `cat_id_UNIQUE` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `POST_CATEGORY`
--

LOCK TABLES `POST_CATEGORY` WRITE;
/*!40000 ALTER TABLE `POST_CATEGORY` DISABLE KEYS */;
/*!40000 ALTER TABLE `POST_CATEGORY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `POST_MEDIA`
--

DROP TABLE IF EXISTS `POST_MEDIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `POST_MEDIA` (
  `pos_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  PRIMARY KEY (`pos_id`,`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `POST_MEDIA`
--

LOCK TABLES `POST_MEDIA` WRITE;
/*!40000 ALTER TABLE `POST_MEDIA` DISABLE KEYS */;
/*!40000 ALTER TABLE `POST_MEDIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ROLE`
--

DROP TABLE IF EXISTS `ROLE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ROLE` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_name` varchar(45) NOT NULL,
  `rol_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rol_id`),
  UNIQUE KEY `rol_name_UNIQUE` (`rol_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ROLE`
--

LOCK TABLES `ROLE` WRITE;
/*!40000 ALTER TABLE `ROLE` DISABLE KEYS */;
INSERT INTO `ROLE` VALUES (1,'admin','Administrator'),(2,'client','Client');
/*!40000 ALTER TABLE `ROLE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_name` varchar(100) NOT NULL,
  `usr_firstname` varchar(45) DEFAULT NULL,
  `usr_lastname` varchar(45) DEFAULT NULL,
  `usr_email` varchar(100) DEFAULT NULL,
  `usr_password` varchar(100) DEFAULT NULL,
  `usr_active_fg` tinyint(1) DEFAULT '0',
  `usr_pwd_change_fg` tinyint(1) DEFAULT NULL,
  `usr_access_token` varchar(45) DEFAULT NULL,
  `usr_reset_token` varchar(45) DEFAULT NULL,
  `usr_uuid` varchar(45) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `usr_last_login_dt` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`usr_id`),
  UNIQUE KEY `usr_name_UNIQUE` (`usr_name`),
  UNIQUE KEY `usr_email_UNIQUE` (`usr_email`),
  UNIQUE KEY `usr_password_UNIQUE` (`usr_password`),
  UNIQUE KEY `usr_status_UNIQUE` (`usr_active_fg`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
INSERT INTO `USER` VALUES (2,'sochea','Ty','Sochea','me.sochea@gmail.com','$2y$10$muD3qMlBgEnszkjufKDjy.xH9UBftadGnl5/h5VyaP.EgCVkyUGa6',1,NULL,'e8a551b6dce46a5a864c8eebce242be0','6627c4cef3d1e6c5bce6e17b32217ec4',NULL,1,'2017-05-20 02:16:28','2017-04-08 08:12:10','2017-05-20 02:16:28');
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

-- Dump completed on 2017-05-20  9:25:19
