-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5220
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para agenda
CREATE DATABASE IF NOT EXISTS `agenda` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `agenda`;

-- Volcando estructura para tabla agenda.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paterno` varchar(30) NOT NULL,
  `materno` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `fnac` date DEFAULT NULL,
  `donante` tinyint(4) DEFAULT NULL,
  `estadoc` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla agenda.personas: 2 rows
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`id`, `paterno`, `materno`, `nombre`, `dni`, `fnac`, `donante`, `estadoc`) VALUES
	(1, 'LÓPEZ', 'torres', 'miguel', '01234567', '2001-04-08', 1, 'C'),
	(3, 'Rios', 'Martínez', 'Oscar', '22334455', NULL, NULL, NULL);
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

-- Volcando estructura para tabla agenda.personas_log
CREATE TABLE IF NOT EXISTS `personas_log` (
  `idlog` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `paterno` varchar(30) NOT NULL,
  `materno` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `fnac` date DEFAULT NULL,
  `donante` tinyint(4) DEFAULT NULL,
  `estadoc` char(1) DEFAULT NULL,
  `fcambio` datetime DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(20) DEFAULT '',
  PRIMARY KEY (`idlog`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla agenda.personas_log: 1 rows
/*!40000 ALTER TABLE `personas_log` DISABLE KEYS */;
INSERT INTO `personas_log` (`idlog`, `id`, `paterno`, `materno`, `nombre`, `dni`, `fnac`, `donante`, `estadoc`, `fcambio`, `accion`) VALUES
	(1, 1, 'LÓPEZ', 'torres', 'césar', '01234567', '2001-04-08', 1, 'C', '2018-04-08 11:14:06', 'UPDATE');
/*!40000 ALTER TABLE `personas_log` ENABLE KEYS */;

-- Volcando estructura para disparador agenda.personas_before_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `personas_before_delete` BEFORE DELETE ON `personas` FOR EACH ROW BEGIN
INSERT INTO PERSONAS_log (id,paterno,materno,nombre,dni,fnac,donante,estadoc,fcambio,accion) 
values(old.id,old.paterno,old.materno,old.nombre,old.dni,old.fnac,old.donante,old.estadoc,current_timestamp,'DELETE');

END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador agenda.personas_before_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `personas_before_update` BEFORE UPDATE ON `personas` FOR EACH ROW BEGIN
INSERT INTO PERSONAS_log (id,paterno,materno,nombre,dni,fnac,donante,estadoc,fcambio,accion) 
values(old.id,old.paterno,old.materno,old.nombre,old.dni,old.fnac,old.donante,old.estadoc,current_timestamp,'UPDATE');
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
