/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.33-MariaDB : Database - data_mhs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`data_mhs` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `data_mhs`;

/*Table structure for table `agama` */

DROP TABLE IF EXISTS `agama`;

CREATE TABLE `agama` (
  `id_agama` int(11) DEFAULT NULL,
  `agama_nama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `agama` */

insert  into `agama`(`id_agama`,`agama_nama`) values 
(1,'Islam'),
(2,'Kristen '),
(3,'Hindu'),
(4,'Buddha');

/*Table structure for table `gender` */

DROP TABLE IF EXISTS `gender`;

CREATE TABLE `gender` (
  `id_gender` varchar(5) DEFAULT NULL,
  `jenis_gender` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gender` */

insert  into `gender`(`id_gender`,`jenis_gender`) values 
('1','Laki - Laki'),
('2','Perempuan');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`nama`,`username`,`password`) values 
('alif','lif','lif'),
('siang',NULL,'malam'),
('pagi','siang','malam');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(15) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tmp_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_agama` varchar(10) DEFAULT NULL,
  `id_gender` varchar(15) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id_mhs`,`npm`,`nama`,`tmp_lahir`,`tgl_lahir`,`id_agama`,`id_gender`,`alamat`) values 
(1,'065117136','alif','bgr','2019-05-12','islam','laki-laki','bgr'),
(2,'065117001','bahrul','jakarta','1999-01-02','islam','laki-laki','bogor'),
(3,'065117122','sigit','bogor','1999-01-02','islam','laki-laki','surabaya'),
(4,'0651188','Cita Suci Saputri','Sukabumi','1999-01-12','islam','Perempuan','Sukabumi'),
(5,'065117188','Cita','Sukabumi','1999-01-12','islam','perempuan','');

/*Table structure for table `presaka` */

DROP TABLE IF EXISTS `presaka`;

CREATE TABLE `presaka` (
  `id_presaka` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(15) DEFAULT NULL,
  `jenis_prestasi` text,
  PRIMARY KEY (`id_presaka`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `presaka` */

insert  into `presaka`(`id_presaka`,`npm`,`jenis_prestasi`) values 
(1,'065117136','juara 1'),
(2,'065117122','mahasiswa terbaik');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
