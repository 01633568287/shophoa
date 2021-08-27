-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: shop_hoa
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

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
-- Current Database: `shop_hoa`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `shop_hoa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `shop_hoa`;

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `admin_password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_info`
--

LOCK TABLES `admin_info` WRITE;
/*!40000 ALTER TABLE `admin_info` DISABLE KEYS */;
INSERT INTO `admin_info` VALUES (1,'admin','admin@gmail.com','123456');
/*!40000 ALTER TABLE `admin_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Hào Hoa'),(2,'Quân Hoa'),(3,'Quang Hoa'),(4,'Hoa Hoa');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Hoa Sinh Nhật'),(2,'Lan Hồ Điệp'),(3,'Hoa Chúc Mừng'),(4,'Hoa Hồng');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code` (
  `code_id` int(100) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  PRIMARY KEY (`code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code`
--

LOCK TABLES `code` WRITE;
/*!40000 ALTER TABLE `code` DISABLE KEYS */;
/*!40000 ALTER TABLE `code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_info`
--

DROP TABLE IF EXISTS `email_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_info` (
  `email_id` int(100) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_info`
--

LOCK TABLES `email_info` WRITE;
/*!40000 ALTER TABLE `email_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `total` int(20) NOT NULL,
  `ship` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (113,'Hao','Trần','hao@gmail.com','Cầu giấy-Hà Nội','m','0966899059',7239999,30000,'2021-06-13 10:03:59','m'),(114,'Hao','Trần','hao@gmail.com','Cầu giấy-Hà Nội','m','0966899059',7239999,30000,'2021-06-13 10:04:51','m'),(144,'Nam','Nguyễn','nam3@gmail.com','235 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội','q','0966899000',3300000,30000,'2021-06-13 14:11:01','q'),(145,'Quân','Lưu','ekkott7@gmail.com','Vinh','v','0955666777',300000,30000,'2021-06-13 14:15:13','v'),(146,'Quang','Lê','quang@gmail.com','Vinh','j','0966899000',6000000,30000,'2021-06-13 14:25:44','j');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_detail`
--

DROP TABLE IF EXISTS `orders_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_detail` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `orders_id` int(100) NOT NULL,
  `product` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `thanhtien` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_detail`
--

LOCK TABLES `orders_detail` WRITE;
/*!40000 ALTER TABLE `orders_detail` DISABLE KEYS */;
INSERT INTO `orders_detail` VALUES (4,114,5,399999,1,7239999),(5,115,5,399999,1,7239999),(13,127,5,399999,1,399999),(14,128,5,399999,1,399999),(29,144,2,300000,11,3300000),(30,145,2,300000,1,300000),(31,146,2,300000,1,6000000);
/*!40000 ALTER TABLE `orders_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,4,1,'Hoa hồng đỏ',380000,'Do đặc thù sản phẩm làm thủ công nên hình ảnh thực tế sẽ có thay đổi ít nhiều do cảm nhận.\r\nHoa chỉ đảm bảo chất lượng tốt nhất tại Hà Nội.\r\nCác thành phố khác và tuyến huyện chỉ đạt chất lượng ở mức tương đối. Quý khách lưu ý khi đặt hoa đi các tuyến tỉnh, tuyến huyện.','1623203894_1621502056_pr4.png','hồng'),(2,1,3,'Hoa thủy tinh',300000,'Do đặc thù sản phẩm làm thủ công nên hình ảnh thực tế sẽ có thay đổi ít nhiều do cảm nhận.\r\nHoa chỉ đảm bảo chất lượng tốt nhất tại Hà Nội.\r\nCác thành phố khác và tuyến huyện chỉ đạt chất lượng ở mức tương đối. Quý khách lưu ý khi đặt hoa đi các tuyến tỉnh, tuyến huyện.','1623204076_1621502181_pr7.png','chúc mừng'),(3,4,4,'Hoa hồng',360000,'Do đặc thù sản phẩm làm thủ công nên hình ảnh thực tế sẽ có thay đổi ít nhiều do cảm nhận.\r\nHoa chỉ đảm bảo chất lượng tốt nhất tại Hà Nội.\r\nCác thành phố khác và tuyến huyện chỉ đạt chất lượng ở mức tương đối. Quý khách lưu ý khi đặt hoa đi các tuyến tỉnh, tuyến huyện.','1623204175_1621318224_pr2.png','hồng'),(4,4,3,'Hoa ban mai',380000,'Do đặc thù sản phẩm làm thủ công nên hình ảnh thực tế sẽ có thay đổi ít nhiều do cảm nhận.\r\nHoa chỉ đảm bảo chất lượng tốt nhất tại Hà Nội.\r\nCác thành phố khác và tuyến huyện chỉ đạt chất lượng ở mức tương đối. Quý khách lưu ý khi đặt hoa đi các tuyến tỉnh, tuyến huyện.','1623204297_pr12.png','chúc mừng'),(5,1,3,'Lan tỷ',399999,'Do đặc thù sản phẩm làm thủ công nên hình ảnh thực tế sẽ có thay đổi ít nhiều do cảm nhận.\r\nHoa chỉ đảm bảo chất lượng tốt nhất tại Hà Nội.\r\nCác thành phố khác và tuyến huyện chỉ đạt chất lượng ở mức tương đối. Quý khách lưu ý khi đặt hoa đi các tuyến tỉnh, tuyến huyện.','1623204374_pr6.png','Lan');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (1,'Hao','Trần','hao@gmail.com','12345','0966899059','Hà Nội','Cầu giấy-Hà Nội'),(3,'Quân','Lưu','ekkott7@gmail.com','4321','0955666777','Vinh','Vinh'),(4,'Quang','Lê','quang@gmail.com','456789','0966899000','An Giang','Vinh'),(8,'Nam','Nguyễn','nam3@gmail.com','444','0966899000','Hà Nội','235 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info_backup`
--

DROP TABLE IF EXISTS `user_info_backup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info_backup` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info_backup`
--

LOCK TABLES `user_info_backup` WRITE;
/*!40000 ALTER TABLE `user_info_backup` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_info_backup` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-13 14:36:43
