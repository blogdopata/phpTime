-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.14 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5272
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para php1_exam
CREATE DATABASE IF NOT EXISTS `php1_exam` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php1_exam`;

-- Volcando estructura para tabla php1_exam.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `cumple` date NOT NULL,
  `correo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla php1_exam.alumnos: 0 rows
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;

-- Volcando estructura para tabla php1_exam.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_curso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla php1_exam.cursos: 0 rows
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla php1_exam.matriculas
CREATE TABLE IF NOT EXISTS `matriculas` (
  `id_matricula` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nota1` decimal(10,2) DEFAULT '0.00',
  `nota2` decimal(10,2) DEFAULT '0.00',
  `nota3` decimal(10,2) DEFAULT '0.00',
  `nota4` decimal(10,2) DEFAULT '0.00',
  `promedio` decimal(10,2) DEFAULT '0.00',
  `notificado` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id_matricula`),
  UNIQUE KEY `id_alumno_id_curso` (`id_alumno`,`id_curso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla php1_exam.matriculas: 0 rows
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;

-- Volcando estructura para tabla php1_exam.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `activo` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla php1_exam.usuarios: 2 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `usuario`, `clave`, `activo`) VALUES
	(1, 'admin', 'admin', 1),
	(2, 'alumno', 'alumno', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para vista php1_exam.v_reporte_notas
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `v_reporte_notas` (
	`id_alumno` INT(11) NOT NULL,
	`alumno` VARCHAR(101) NULL COLLATE 'latin1_swedish_ci',
	`id_curso` INT(11) NULL,
	`curso` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`nota1` DECIMAL(10,2) NULL,
	`nota2` DECIMAL(10,2) NULL,
	`nota3` DECIMAL(10,2) NULL,
	`nota4` DECIMAL(10,2) NULL,
	`promedio` DECIMAL(10,2) NULL,
	`notificado` DECIMAL(10,2) NULL,
	`correo` VARCHAR(100) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista php1_exam.v_reporte_notas
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `v_reporte_notas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_reporte_notas` AS select `a`.`id_alumno` AS `id_alumno`,concat_ws(',',`a`.`apellidos`,`a`.`nombre`) AS `alumno`,`b`.`id_curso` AS `id_curso`,`c`.`nombre` AS `curso`,`b`.`nota1` AS `nota1`,`b`.`nota2` AS `nota2`,`b`.`nota3` AS `nota3`,`b`.`nota4` AS `nota4`,`b`.`promedio` AS `promedio`,`b`.`notificado` AS `notificado`,`a`.`correo` AS `correo` from ((`alumnos` `a` left join `matriculas` `b` on((`a`.`id_alumno` = `b`.`id_alumno`))) left join `cursos` `c` on((`b`.`id_curso` = `c`.`id_curso`)));

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
