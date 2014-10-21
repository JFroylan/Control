/*
SQLyog Community v11.31 (64 bit)
MySQL - 5.5.16-log : Database - prueba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prueba` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `prueba`;

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `idmaestromateria` int(11) DEFAULT NULL,
  `idmaestro` int(11) DEFAULT NULL,
  `idmateria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

/*Table structure for table `maestros` */

DROP TABLE IF EXISTS `maestros`;

CREATE TABLE `maestros` (
  `idmaestro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apaterno` varchar(25) DEFAULT NULL,
  `amaterno` varchar(25) DEFAULT NULL,
  `idmateria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmaestro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `maestros` */

insert  into `maestros`(`idmaestro`,`nombre`,`apaterno`,`amaterno`,`idmateria`) values (1,'jose','rosales','romero',1),(2,'froylan','romero','rosales',1);

/*Table structure for table `materias` */

DROP TABLE IF EXISTS `materias`;

CREATE TABLE `materias` (
  `idmateria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `idmaestro` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmateria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `materias` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `a_p` varchar(25) DEFAULT NULL,
  `a_m` varchar(25) DEFAULT NULL,
  `nivel` varchar(10) DEFAULT NULL,
  `estatus` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`a_p`,`a_m`,`nivel`,`estatus`) values (1,'','','','1','0'),(2,'','','','','0'),(3,'FRoylan','froylan','froylan','1','1'),(4,'Froylan','Rosales','Romero','1','1'),(5,'Rosales','Romero','jose','2','1'),(6,'Evaristo','Romero','kajkasak','1','0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
