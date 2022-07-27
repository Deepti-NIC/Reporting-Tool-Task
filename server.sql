-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: server
-- ------------------------------------------------------
-- Server version	8.0.23

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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `subject` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `Edited_By` varchar(50) DEFAULT NULL,
  `Edited_On` datetime DEFAULT NULL,
  `visitor_ip` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES ('Webroom2','jlkj;l;','jlkjl',NULL,NULL,NULL),('Webroom3','jljlkjl','jnljl','jljlkjl','2021-12-08 17:32:20',''),('Others','jkjkjkjhkl','jkhkjl','jkjkjkjhkl','2021-12-08 17:32:57','::1'),('Webroom2','jkhjkhkl','nlklk','jkhjkhkl','2021-12-08 17:33:59',''),('Others','jklklj','jkhk','jklklj','2021-12-08 17:34:38','::1'),('Webroom2','bjhjkh','khk','bjhjkh','2021-12-08 17:35:18','::1'),('Webroom1','jkhjk','jkhkj','jkhjk','2021-12-08 17:37:13','::1'),('Subject1','jkhjk','kjhk','jkhjk','2021-12-08 17:38:11','::1'),('Subject4','nmbkj','jnlk','nmbkj','2021-12-08 17:39:43','::1');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `it_companies`
--

DROP TABLE IF EXISTS `it_companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it_companies` (
  `company_id` int unsigned NOT NULL AUTO_INCREMENT,
  `rank` int unsigned NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `industries` varchar(255) NOT NULL,
  `revenue` float(9,2) NOT NULL,
  `fiscal_year` year NOT NULL,
  `employees` int unsigned NOT NULL,
  `market_cap` float(9,2) NOT NULL,
  `headquarters` varchar(255) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it_companies`
--

LOCK TABLES `it_companies` WRITE;
/*!40000 ALTER TABLE `it_companies` DISABLE KEYS */;
INSERT INTO `it_companies` VALUES (1,1,'Samsung Electronics','Mobile Devices, Semiconductor, Personal Computing',212.68,2013,326000,137.91,'Seoul, South Korea'),(2,2,'Apple Inc.','Mobile Devices, Personal Computing, Consumer software',182.79,2014,98000,616.59,'Cupertino, CA, USA (Silicon Valley)'),(3,3,'Foxconn','OEM Component Manufacturing',132.07,2013,1290000,32.15,'New Taipei, Taiwan'),(4,4,'HP','Personal Computing and Servers, Consulting',111.45,2014,317500,65.30,'Palo Alto, CA, USA (Silicon Valley)'),(5,5,'IBM','Computing services, Mainframes',99.75,2013,433362,188.21,'Armonk, NY, USA'),(6,6,'Amazon.com','Internet Retailer, App Hosting',88.99,2014,154100,175.22,'Seattle, WA, USA'),(7,7,'Microsoft','Business computing',86.83,2014,128076,370.31,'Redmond, WA, USA'),(8,8,'Sony','Electronic Devices, Personal Computing',72.34,2014,146300,17.60,'Tokyo, Japan'),(9,9,'Panasonic','Electronics Devices & Components',70.83,2013,293742,22.70,'Osaka, Japan'),(10,10,'Google','Internet Advertising, Search Engine, Miscellaneous',59.82,2013,53546,396.24,'Mountain View, CA, USA (Silicon Valley)'),(11,11,'Dell','Personal Computers and Servers',56.94,2013,108800,22.97,'Austin, TX, USA'),(12,12,'Toshiba','Semiconductor, Consumer devices',56.20,2013,206087,17.67,'Tokyo, Japan'),(13,13,'LG Electronics','Personal Computer, Electronics',54.75,2013,38718,17.67,'Seoul, South Korea'),(14,14,'Intel','Semiconductor',52.70,2013,104700,168.48,'Santa Clara, CA, USA (Silicon Valley)');
/*!40000 ALTER TABLE `it_companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_details`
--

DROP TABLE IF EXISTS `server_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `server_details` (
  `Private_IP` varchar(100) NOT NULL,
  `Public_IP` varchar(100) DEFAULT NULL,
  `Project_Name` varchar(100) DEFAULT NULL,
  `Website_Name` varchar(100) DEFAULT NULL,
  `Designed_By` varchar(100) DEFAULT NULL,
  `Managed_By` varchar(100) DEFAULT NULL,
  `CUC` varchar(100) DEFAULT NULL,
  `VM` varchar(100) DEFAULT NULL,
  `OS` varchar(100) DEFAULT NULL,
  `VA` date DEFAULT NULL,
  `Server_Hardening` varchar(100) DEFAULT NULL,
  `Antivirus_Name` varchar(100) DEFAULT NULL,
  `SOC_Entry` varchar(100) DEFAULT NULL,
  `Warnings` varchar(100) DEFAULT NULL,
  `SSLEnd_Date` date DEFAULT NULL,
  `AuditStart_Date` date DEFAULT NULL,
  `AuditEnd_Date` date DEFAULT NULL,
  `Backup_Policy` varchar(100) DEFAULT NULL,
  `Bkp_Frequeny` varchar(100) DEFAULT NULL,
  `Bkp_Retention` varchar(100) DEFAULT NULL,
  `Bkp_Managedby` varchar(100) DEFAULT NULL,
  `sms` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `VM_Type` varchar(200) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `VM_Template` varchar(200) DEFAULT NULL,
  `Webserver` varchar(200) DEFAULT NULL,
  `DBase` varchar(200) DEFAULT NULL,
  `Ports` varchar(200) DEFAULT NULL,
  `Services` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Private_IP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server_details`
--

LOCK TABLES `server_details` WRITE;
/*!40000 ALTER TABLE `server_details` DISABLE KEYS */;
INSERT INTO `server_details` VALUES ('10.246.122.196','164.100.54.22','ITI Rozgar','https://itirozgar.dgt.gov.in','NIC Haryana','DGT','NCS01-20150602-00001282','10.246.122.196','Linux','2020-07-01','','','Yes','','2022-12-08','2020-07-07','2022-07-07','','Daily','Daily','NIC',NULL,NULL,'Cloud VM','Delhi','RHEL 7.8 with PostgreSQL 12.4','Apache','PostgreSQL','80,443','HTTPS'),('10.247.2.106,108','164.100.65.25','MSDE','msde.gov.in','NIC','Indusnet','NCS01-20150702-00001348','10.247.2.106','Linux','2022-02-28','yes','McAfee','Yes','None','2023-01-11','2022-02-07','2024-02-07','SR01-BKP-00001085','Daily','Weekly','NIC',NULL,NULL,'Cloud VM','Delhi','RHEL 7.7 with Apache 2.4.41 & php 7.4.2  ','Apache','MySQL','80,443','HTTPS'),('10.247.2.110,103,104,105','164.100.65.73','JSS','jss.gov.in','Netprophets','Netprophets','NCS01-20150702-00001348','10.247.2.110','Linux','2022-02-10','yes','McAfee','Yes','None','2022-10-21','2019-08-05','2021-08-05','SR01-BKP-00000622','Daily','Weekly','NIC',NULL,NULL,'Cloud VM','Delhi','CentOS 7 with Apache 2.4.41 and Tomcat 10.0.14',' JBOSS-WILDFLY-22','MySQL','80,443','HTTPS'),('10.247.2.111,112,113,114','164.100.65.119','Sankalp','https://sankalp.msde.gov.in/','Netprophets','Netprophets','NCS01-20150702-00001348','10.247.2.111','Linux','2022-02-10','yes','McAfee','Yes','None','2022-08-11','2020-02-15','2022-02-15','SR01-BKP-00001085','Daily','Weekly','NIC',NULL,NULL,'Cloud VM','Delhi','RHEL 7.7 with Apache Tomcat 9.0.33 & 8.5.53 ',' JBOSS-WILDFLY-22','MySQL','80,443','HTTPS'),('10.247.2.115','164.100.65.108','NCVET','https://ncvet.gov.in','NIC','NCVET','NCS01-20150702-00001348','10.247.2.115','Linux','2021-03-05','yes','McAfee','Yes','None','2022-10-29','2021-04-09','2023-04-09','SR01-BKP-00001869','Daily','Weekly','NIC',NULL,NULL,'Cloud VM','Delhi','RHEL 7.8 with Apache 2.4.43 & php 7.4.4','Apache','MySQL','80,443','HTTPS'),('10.247.246.109','164.100.68.103','NCVTMIS','https://www.ncvtmis.gov.in/','Wipro','DGT','NCS01-20180806-00003954','10.247.246.109','Windows','2021-04-26','yes','McAfee','Yes','None','2023-02-09','2020-04-22','2022-04-22','SR01-BKP-00000620','Daily','Daily','NIC',NULL,NULL,'Cloud VM','Delhi','window server 2016 Datacenter','IIS','SQL SERVER','80,443','HTTPS'),('10.247.3.87','164.100.94.241','NQR','nqr.gov.in','SilverTouch','NCVET','NCS01-20150702-00001348','10.247.3.87','Linux','2020-04-08','','','Yes','','2022-09-12','2020-02-13','2022-02-14','','Daily','Daily','NIC',NULL,NULL,'Cloud VM','Delhi','RHEL 7.7 with Apache 2.4.41 & php 7.4.2  ','Apache','PostgreSQL','80,443','HTTPS'),('10.249.156.109','164.100.117.142','DGT website','https://dgt.gov.in/','DGT','DGT','NCS01-20150602-00001282','10.249.156.109','windows','2021-09-04','','','Yes','','2022-12-08','2020-09-20','2022-09-20','','Daily','Daily','NIC',NULL,NULL,'Cloud VM','Delhi','Windows Server 2012 R2 Datacenter','IIS','MySQL','80,443','HTTPS'),('10.249.156.113,10.249.156.111,10.249.156.110','164.100.117.141','Bharatskills','https://bharatskills.gov.in/','DGT','DGT','NCS01-20150602-00001282','10.249.156.113,10.249.156.111,10.249.156.110','windows','2022-06-14','','','Yes','','2022-09-12','2020-06-09','2022-06-09','','Daily','Daily','NIC',NULL,NULL,'Cloud VM','Delhi','Windows Server 2012 R2 Datacenter','IIS','MySQL','80,443','HTTPS');
/*!40000 ALTER TABLE `server_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_students`
--

DROP TABLE IF EXISTS `tbl_students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_students` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_students`
--

LOCK TABLES `tbl_students` WRITE;
/*!40000 ALTER TABLE `tbl_students` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todo`
--

DROP TABLE IF EXISTS `todo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todo` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `team_member` varchar(100) DEFAULT NULL,
  `task_list` varchar(1000) DEFAULT NULL,
  `dated` date DEFAULT NULL,
  `days` int DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todo`
--

LOCK TABLES `todo` WRITE;
/*!40000 ALTER TABLE `todo` DISABLE KEYS */;
INSERT INTO `todo` VALUES (1,'Member1','Resolve Vulnerabilities of 10.247.2.107','2022-07-20',2),(2,'Member2','CPGrams 7.0 meeting with MSDE officers at 1pm','2022-07-20',1),(3,'Member3','Adding Visitor count on msde website','2022-07-20',3),(4,'Member2','Create trello account and check functionalities','2022-07-20',1),(5,'Member3','Find costing of adhar vault use from NIC','2022-07-20',3),(6,'Member3','Call and arrange meeting with vendors for NCVTMIS','2022-07-20',3),(7,'Member3','Approval of FARPS request for port 80 & 443','2022-07-20',3),(8,'Member1','Preparing excel sheet for NCVTMIS points from ppt shared','2022-07-20',2),(9,'Member1','Updating ppt of NCVTMIS for secretary,msde','2022-07-20',2),(10,'kjhk','jkhk','2022-07-22',1),(11,'jhkhk','jhkhl','2022-07-22',1),(12,',kj.','kjklhkhkl','2022-07-22',2),(13,'Member4','Task Demo ADD functio','2022-07-25',2),(14,'Member 4 ','abcd','2022-07-25',5);
/*!40000 ALTER TABLE `todo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_details` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES ('root','12345');
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vc_details`
--

DROP TABLE IF EXISTS `vc_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vc_details` (
  `VC_Mode` varchar(10) DEFAULT NULL,
  `VC_Id` varchar(20) DEFAULT NULL,
  `VC_Date` date DEFAULT NULL,
  `VC_STime` time DEFAULT NULL,
  `VC_ETime` time DEFAULT NULL,
  `Email_Sent` varchar(10) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `CName` varchar(50) DEFAULT NULL,
  `CDept` varchar(50) DEFAULT NULL,
  `CDesig` varchar(50) DEFAULT NULL,
  `CNumber` int unsigned DEFAULT NULL,
  `CEmail` varchar(50) DEFAULT NULL,
  `CEmailDated` date DEFAULT NULL,
  `CRemarks` varchar(100) DEFAULT NULL,
  `Edited_By` varchar(100) DEFAULT NULL,
  `Edited_On` datetime DEFAULT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vc_details`
--

LOCK TABLES `vc_details` WRITE;
/*!40000 ALTER TABLE `vc_details` DISABLE KEYS */;
INSERT INTO `vc_details` VALUES ('Webroom2','NULL','2021-09-21','11:40:00','13:40:00','No','Brainstorming session on entrepreneurship ecosystem - virtual meeting with State EDIs','ARUN NIMBEKAR','MSDE','US',919871235,'arun.nimbekar@gov.in','2021-09-15','DL-Skill development (Host Studio)VCID - 1346438 \r\nMoS Office','Admin','2022-07-22 14:58:55',43),('Webroom3','NULL','2021-11-10','10:00:00','16:00:00','No','Data Governance Quality Index (DGQI) of NITI Aayog','Parveen Kumar','MSDE','ASO',23465916,'parveen.verma90@gov.in','2021-10-29','DL-MOS-MSDE (Host Studio) \r\nDL-Skill development\r\nBharatVC','Admin','2022-02-15 10:43:33',44),('Reserve','1350435','2021-11-03','11:00:00','02:00:00','No','15th GB meeting of NIMI','Shiv Nandan','NIMI','SO',91,'shivn.kumar@gov.in','2021-11-01','webroom- MSDE2\r\nDL-Shastri Bhawan(HRD)','Admin','2022-02-15 11:10:02',45),('Webroom1','NULL','2021-12-13','16:00:00','00:00:00','No','Honorable PM will Chair Pragati VC Meeting','Abhishek meena','MSDE','US',98765443,'abhishek.meena88@gov.in','2021-12-01','Reserve VCID: 1347116','Admin','2022-02-15 16:40:53',46),('Webroom1','NULL','2022-01-20','11:00:00','00:00:00','No','2nd Meeting of the Project Governance Board (PGB) for the SANKALP Programme - under the Chairmanship of Honorable Minister for Skill Development and Entrepreneurship. ','Abhishek meena','Sankalp','US',91122334,'abhishek.meena88@gov.in','2022-02-01','DL-MOS-MSDE (Host Studio) \r\nDL-Skill development','Admin','2022-02-15 16:43:29',47),('Webroom1','1234','2022-02-16','11:15:00','13:30:00','No','The Hoarable MOS (PP) will be launching a special campaign for disposal of pending matters, for all Central Ministries and Departments','BVinod','MSDE','AD',9876552,'bvinod@nic.in','2022-02-09','Webroom-DARPG3@Desktop.vc.nic.in','Admin','2022-02-16 14:03:06',48),('Webroom1','2313','2022-02-17','11:00:00','00:00:00','Yes','Review meeting on \"Skill India- Media Branding and Advocacy\"','Harsh Vardhan Sharma','MSDE','Assistant Director',9126355,'harsh.vardhan@gov.in','2022-02-02','DL-MOS-MSDE (Host Studio)\r\nDL-Skill development\r\nDL-Minister-MSDE','Admin','2022-02-17 11:00:33',49);
/*!40000 ALTER TABLE `vc_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vc_studios`
--

DROP TABLE IF EXISTS `vc_studios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vc_studios` (
  `id` int DEFAULT NULL,
  `studio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vc_studios`
--

LOCK TABLES `vc_studios` WRITE;
/*!40000 ALTER TABLE `vc_studios` DISABLE KEYS */;
INSERT INTO `vc_studios` VALUES (1,'DL-SkillDevelopment'),(2,'Minister-MSDE'),(3,'MOS-MSDE'),(4,'PTI-MSDE'),(5,'SSB-MSDE'),(6,'SB-MSDE');
/*!40000 ALTER TABLE `vc_studios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `webcast_details`
--

DROP TABLE IF EXISTS `webcast_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `webcast_details` (
  `EventName` varchar(10) NOT NULL,
  `Dept` varchar(10) DEFAULT NULL,
  `Web_Date` date DEFAULT NULL,
  `Web_Time` time DEFAULT NULL,
  `duration` int DEFAULT NULL,
  `Edited_By` varchar(100) DEFAULT NULL,
  `Edited_On` datetime DEFAULT NULL,
  PRIMARY KEY (`EventName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `webcast_details`
--

LOCK TABLES `webcast_details` WRITE;
/*!40000 ALTER TABLE `webcast_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `webcast_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-27 11:27:45
