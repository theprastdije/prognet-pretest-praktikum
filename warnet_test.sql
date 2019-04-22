/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - warnet_test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`warnet_test` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `warnet_test`;

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id_member` int(10) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(100) DEFAULT NULL,
  `alamat_member` varchar(200) DEFAULT NULL,
  `telp_member` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`id_member`,`nama_member`,`alamat_member`,`telp_member`) values 
(1,'Dije Prast','Jl. Yuk No. 69, Denpasar','081999112831'),
(2,'Mita Hasiani','Jl. Aja Jadian Kagak No. 9, Denpasar','087861989154'),
(4,'Dije','Jl. Jalan no. 1, Surabaya','081999313712');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
