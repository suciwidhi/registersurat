/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.16-MariaDB : Database - db_suratbaru
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_suratbaru` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_suratbaru`;

/*Table structure for table `ref_jenisreg` */

DROP TABLE IF EXISTS `ref_jenisreg`;

CREATE TABLE `ref_jenisreg` (
  `jenisreg_id` int(12) NOT NULL AUTO_INCREMENT,
  `jenisreg_jenis_surat` varchar(50) DEFAULT NULL COMMENT 'register surat masuk, register surat bupati, register surat wakil, register surat sekda',
  PRIMARY KEY (`jenisreg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ref_jenisreg` */

/*Table structure for table `ref_jenisundangan` */

DROP TABLE IF EXISTS `ref_jenisundangan`;

CREATE TABLE `ref_jenisundangan` (
  `jenisundangan_id` int(12) NOT NULL AUTO_INCREMENT,
  `jenisundangan_jenis_undangan` varchar(50) DEFAULT NULL COMMENT 'undangan sekda, undangan bupati, undangan wakil',
  PRIMARY KEY (`jenisundangan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ref_jenisundangan` */

/*Table structure for table `ref_register_surat` */

DROP TABLE IF EXISTS `ref_register_surat`;

CREATE TABLE `ref_register_surat` (
  `register_no_urut` int(12) NOT NULL AUTO_INCREMENT,
  `register_tanggal_masuk` date DEFAULT NULL,
  `register_asal_surat` varchar(50) DEFAULT NULL,
  `register_no_surat` varchar(50) DEFAULT NULL,
  `register_tanggal_surat` date DEFAULT NULL,
  `register_jenis_surat` varchar(50) DEFAULT NULL COMMENT 'register surat masuk, register surat bupati, register surat wakil, register surat sekda',
  `register_perihal` text DEFAULT NULL,
  `register_kode` varchar(100) DEFAULT NULL,
  `register_keterangan` text DEFAULT NULL,
  `register_upload_dokumen` text DEFAULT NULL,
  PRIMARY KEY (`register_no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ref_register_surat` */

/*Table structure for table `ref_tembusan` */

DROP TABLE IF EXISTS `ref_tembusan`;

CREATE TABLE `ref_tembusan` (
  `tembusan_no_urut` int(12) NOT NULL AUTO_INCREMENT,
  `tembusan_asal_surat` varchar(50) DEFAULT NULL,
  `tembusan_tanggal_surat` date DEFAULT NULL,
  `tembusan_no_surat` varchar(50) DEFAULT NULL,
  `tembusan_keterangan` text DEFAULT NULL,
  PRIMARY KEY (`tembusan_no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ref_tembusan` */

/*Table structure for table `ref_undangan` */

DROP TABLE IF EXISTS `ref_undangan`;

CREATE TABLE `ref_undangan` (
  `undangan_no_urut` int(12) NOT NULL AUTO_INCREMENT,
  `undangan_dari` varchar(50) DEFAULT NULL,
  `undangan_no_surat` varchar(50) DEFAULT NULL,
  `undangan_tanggal` date DEFAULT NULL,
  `undangan_jenis_undangan` varchar(50) DEFAULT NULL COMMENT 'undangan sekda, undangan bupati, undangan wakil',
  `undangan_uraian` text DEFAULT NULL,
  `undangan_keterangan` text DEFAULT NULL,
  `undangan_upload_dokumen` text DEFAULT NULL,
  PRIMARY KEY (`undangan_no_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ref_undangan` */

/*Table structure for table `ref_user` */

DROP TABLE IF EXISTS `ref_user`;

CREATE TABLE `ref_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_prev` tinyint(1) DEFAULT NULL COMMENT '1=admin, 2=operator',
  `user_login_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ref_user` */

insert  into `ref_user`(`user_id`,`user_username`,`user_password`,`user_prev`,`user_login_at`) values 
(1,'admin','$2y$10$jJdJqNrV68OMSmcjI28Ln.0VBCamKjP.uoEd59wz/6Gg4oVJjYY.6',1,'2021-01-20 04:33:29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
