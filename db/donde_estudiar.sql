/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.29 : Database - donde_estudiar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `areas_interes` */

DROP TABLE IF EXISTS `areas_interes`;

CREATE TABLE `areas_interes` (
  `id_area_interes` int(32) NOT NULL AUTO_INCREMENT,
  `nombre_area_interes` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_area_interes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `areas_interes` */

/*Table structure for table `carreras` */

DROP TABLE IF EXISTS `carreras`;

CREATE TABLE `carreras` (
  `id_carrera` int(32) NOT NULL AUTO_INCREMENT,
  `nombre_carrera` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_carrera` text COLLATE utf8_spanish_ci,
  `incumbencias_carrera` text COLLATE utf8_spanish_ci,
  `plan_estudio_carrera` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_institucion` int(32) NOT NULL,
  `id_area_interes` int(32) NOT NULL,
  PRIMARY KEY (`id_carrera`),
  KEY `id_institucion` (`id_institucion`),
  KEY `fk_carreras_areas_interes1_idx` (`id_area_interes`),
  CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `instituciones` (`id_institucion`),
  CONSTRAINT `fk_carreras_areas_interes1` FOREIGN KEY (`id_area_interes`) REFERENCES `areas_interes` (`id_area_interes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `carreras` */

/*Table structure for table `instituciones` */

DROP TABLE IF EXISTS `instituciones`;

CREATE TABLE `instituciones` (
  `id_institucion` int(32) NOT NULL AUTO_INCREMENT,
  `nombre_institucion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `logo_institucion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion_institucion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_institucion` text COLLATE utf8_spanish_ci,
  `telefono_institucion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_institucion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `web_institucion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_institucion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `instituciones` */

insert  into `instituciones`(`id_institucion`,`nombre_institucion`,`logo_institucion`,`direccion_institucion`,`descripcion_institucion`,`telefono_institucion`,`email_institucion`,`web_institucion`) values (1,'Universidad Tecnologica Nacional','ellogo.png','Zeballos 1300','Alta facultad',NULL,NULL,NULL);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(32) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_institucion` int(32) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_usuarios_instituciones1_idx` (`id_institucion`),
  CONSTRAINT `fk_usuarios_instituciones1` FOREIGN KEY (`id_institucion`) REFERENCES `instituciones` (`id_institucion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `usuarios` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
