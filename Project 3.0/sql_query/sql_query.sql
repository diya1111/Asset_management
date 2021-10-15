/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 5.1.53-community-log : Database - atpl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`atpl` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `atpl`;

/*Table structure for table `assetissue` */

DROP TABLE IF EXISTS `assetissue`;

CREATE TABLE `assetissue` (
  `assetno` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `uid` int(20) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `noa` int(20) DEFAULT NULL,
  `date_issue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`assetno`),
  KEY `C13` (`aid`),
  KEY `C12` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `assetissue` */

insert  into `assetissue`(`assetno`,`aid`,`uid`,`uname`,`noa`,`date_issue`,`status`) values 
(1,2,2,'Riya',1,'2021-10-15 01:11:11','Issue_req'),
(2,3,3,'Phudem',1,'2021-10-15 01:11:14','Issued'),
(3,4,4,'Subham',1,'2021-10-15 01:11:22','Issue_req'),
(4,7,2,'Riya',1,'2021-10-15 01:11:27','Issue_req'),
(5,7,2,'Riya',1,'2021-10-15 01:11:27','Issue_req'),
(6,5,2,'Riya',1,'2021-10-15 01:11:30','Issue_req');

/*Table structure for table `assets` */

DROP TABLE IF EXISTS `assets`;

CREATE TABLE `assets` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `adop` date DEFAULT NULL,
  `atype` varchar(10) DEFAULT NULL,
  `availability` int(20) DEFAULT NULL,
  `original_cost` float DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `assets` */

insert  into `assets`(`aid`,`aname`,`adop`,`atype`,`availability`,`original_cost`) values 
(1,'Mouse','2021-05-08','hardware',40,200),
(2,'Keyboard','2021-05-16','hardware',40,600),
(3,'Chair','2021-08-16','hardware',20,500),
(4,'Table','2021-04-26','hardware',20,800),
(5,'Freshservice','2021-02-12','software',10,600),
(6,'Atera','2021-05-20','software',15,1200),
(7,'xAssets','2021-06-16','software',10,1500);

/*Table structure for table `captcha` */

DROP TABLE IF EXISTS `captcha`;

CREATE TABLE `captcha` (
  `NO` int(10) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  KEY `C12` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `captcha` */

insert  into `captcha`(`NO`,`uid`) values 
(5049,1),
(4903,2);

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `remark` varchar(40) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cid`),
  KEY `C12` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `complaints` */

insert  into `complaints`(`cid`,`uid`,`aid`,`name`,`email`,`remark`,`status`) values 
(1,2,7,'Riya','r@gmail.com','I want the xAssets software','Pending'),
(2,4,4,'Subham','s@gmail.com','I want to issue a table for work','Pending'),
(3,2,2,'Riya','r@gmail.com','I want to issue a keyboard','Pending');

/*Table structure for table `user_table` */

DROP TABLE IF EXISTS `user_table`;

CREATE TABLE `user_table` (
  `uid` int(10) NOT NULL,
  `uname` varchar(40) DEFAULT NULL,
  `pwd` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `utype` varchar(40) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `user_table` */

insert  into `user_table`(`uid`,`uname`,`pwd`,`email`,`utype`,`phone`,`photo`) values 
(1,'Diya','1111','d@gmail.com','admin','232323','diya.jpg'),
(2,'Riya','1111','r@gmail.com','client','454545','riya.jpg'),
(3,'Phudem','2222','p@gmail.com','client','565656','phudem.jpg'),
(4,'Subham','3333','s@gmail.com','client','676767','subham.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
