/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - garnishee
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`garnishee` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `garnishee`;

/*Table structure for table `acos` */

DROP TABLE IF EXISTS `acos`;

CREATE TABLE `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

/*Data for the table `acos` */

insert  into `acos`(`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) values 
(1,NULL,NULL,NULL,'controllers',1,154),
(2,1,NULL,NULL,'Groups',2,15),
(3,2,NULL,NULL,'index',3,4),
(4,2,NULL,NULL,'view',5,6),
(5,2,NULL,NULL,'add',7,8),
(6,2,NULL,NULL,'edit',9,10),
(7,2,NULL,NULL,'delete',11,12),
(8,2,NULL,NULL,'isAuthorized',13,14),
(9,1,NULL,NULL,'Pages',16,21),
(10,9,NULL,NULL,'display',17,18),
(11,9,NULL,NULL,'isAuthorized',19,20),
(12,1,NULL,NULL,'Roles',22,35),
(13,12,NULL,NULL,'index',23,24),
(14,12,NULL,NULL,'view',25,26),
(15,12,NULL,NULL,'add',27,28),
(16,12,NULL,NULL,'edit',29,30),
(17,12,NULL,NULL,'delete',31,32),
(18,12,NULL,NULL,'isAuthorized',33,34),
(19,1,NULL,NULL,'Users',36,55),
(20,19,NULL,NULL,'index',37,38),
(21,19,NULL,NULL,'view',39,40),
(22,19,NULL,NULL,'add',41,42),
(23,19,NULL,NULL,'edit',43,44),
(24,19,NULL,NULL,'delete',45,46),
(25,19,NULL,NULL,'login',47,48),
(26,19,NULL,NULL,'logout',49,50),
(27,19,NULL,NULL,'adminHome',51,52),
(28,19,NULL,NULL,'isAuthorized',53,54),
(29,1,NULL,NULL,'Acl',56,57),
(30,1,NULL,NULL,'AclManager',58,79),
(31,30,NULL,NULL,'Acl',59,78),
(32,31,NULL,NULL,'index',60,61),
(33,31,NULL,NULL,'permissions',62,63),
(34,31,NULL,NULL,'updateAcos',64,65),
(35,31,NULL,NULL,'updateAros',66,67),
(36,31,NULL,NULL,'revokePerms',68,69),
(37,31,NULL,NULL,'drop',70,71),
(38,31,NULL,NULL,'defaults',72,73),
(39,31,NULL,NULL,'manageAro',74,75),
(40,31,NULL,NULL,'isAuthorized',76,77),
(41,1,NULL,NULL,'AdminLTE',80,81),
(42,1,NULL,NULL,'DebugKit',82,117),
(43,42,NULL,NULL,'Composer',83,86),
(44,43,NULL,NULL,'checkDependencies',84,85),
(45,42,NULL,NULL,'Dashboard',87,92),
(46,45,NULL,NULL,'index',88,89),
(47,45,NULL,NULL,'reset',90,91),
(48,42,NULL,NULL,'DebugKit',93,94),
(49,42,NULL,NULL,'MailPreview',95,102),
(50,49,NULL,NULL,'index',96,97),
(51,49,NULL,NULL,'sent',98,99),
(52,49,NULL,NULL,'email',100,101),
(53,42,NULL,NULL,'Panels',103,108),
(54,53,NULL,NULL,'index',104,105),
(55,53,NULL,NULL,'view',106,107),
(56,42,NULL,NULL,'Requests',109,112),
(57,56,NULL,NULL,'view',110,111),
(58,42,NULL,NULL,'Toolbar',113,116),
(59,58,NULL,NULL,'clearCache',114,115),
(60,1,NULL,NULL,'Documents',118,149),
(61,60,NULL,NULL,'Categories',119,134),
(62,61,NULL,NULL,'index',120,121),
(63,61,NULL,NULL,'add',122,123),
(64,61,NULL,NULL,'edit',124,125),
(65,61,NULL,NULL,'delete',126,127),
(66,61,NULL,NULL,'moveUp',128,129),
(67,61,NULL,NULL,'moveDown',130,131),
(68,61,NULL,NULL,'isAuthorized',132,133),
(69,60,NULL,NULL,'Documents',135,148),
(70,69,NULL,NULL,'index',136,137),
(71,69,NULL,NULL,'view',138,139),
(72,69,NULL,NULL,'add',140,141),
(73,69,NULL,NULL,'edit',142,143),
(74,69,NULL,NULL,'delete',144,145),
(75,69,NULL,NULL,'isAuthorized',146,147),
(76,1,NULL,NULL,'Markdown',150,151),
(77,1,NULL,NULL,'Migrations',152,153);

/*Table structure for table `aros` */

DROP TABLE IF EXISTS `aros`;

CREATE TABLE `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `aros` */

insert  into `aros`(`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) values 
(1,NULL,'Groups',1,NULL,1,6),
(2,1,'Roles',1,NULL,2,5),
(3,2,'Users',1,NULL,3,4);

/*Table structure for table `aros_acos` */

DROP TABLE IF EXISTS `aros_acos`;

CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `aros_acos` */

insert  into `aros_acos`(`id`,`aro_id`,`aco_id`,`_create`,`_read`,`_update`,`_delete`) values 
(1,3,1,'1','1','1','1');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `categories` */

/*Table structure for table `documents` */

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `documents` */

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`created`,`modified`) values 
(1,'Bank','2020-02-13 14:42:11','2020-02-13 14:42:11');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`group_id`,`name`,`created`,`modified`) values 
(1,1,'superadmin','2020-02-13 14:42:37','2020-02-13 14:42:37');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`group_id`,`role_id`,`username`,`password`,`email`,`created`,`modified`) values 
(1,1,1,'superadmin','$2y$10$TvII1jOBqlLSBE.xsu/98.tW//8XyDWVtvm7OUG8I2RhchBBF0KbO','superadmin@ubagroup.com','2020-02-13 14:43:28','2020-02-13 14:43:28');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
