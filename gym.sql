/*
SQLyog Community v13.1.0 (64 bit)
MySQL - 10.1.34-MariaDB : Database - gym
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gym` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gym`;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `estaruta` float NOT NULL,
  `peso(kg)` float NOT NULL,
  `telefono` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

insert  into `cliente`(`id_cliente`,`nombre`,`apellido`,`cedula`,`sexo`,`edad`,`estaruta`,`peso(kg)`,`telefono`) values 
(1,'juan','Perdomo','1004810783','m','18',1.74,60,'3155335987'),
(2,'angela','parra','1075340104','f','17',1.6,55,'3153008090'),
(3,'leo','franco','1075312101','m','32',1.67,66,'3176493920');

/*Table structure for table `planes` */

DROP TABLE IF EXISTS `planes`;

CREATE TABLE `planes` (
  `id_plan` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `pagar` decimal(10,0) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_plan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `planes` */

insert  into `planes`(`id_plan`,`nombre`,`pagar`,`descripcion`) values 
(1,'basico',30000,'rutinas sencillas'),
(2,'intermedio',40000,'rutinas + plan alimenticio'),
(3,'profesional',60000,'rutinas + plan alimenticio + ayudas instructor'),
(4,'basico',35000,'rutina sencilla nueva'),
(6,'full',70000,'todo');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`user`,`pass`,`rol`) values 
(2,'leo','321','cliente'),
(3,'diego','12345','cliente'),
(4,'jeff','1234','admin'),
(9,'breinerd','1075','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
