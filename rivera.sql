-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.3.7-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para information_schema

-- Volcando estructura de base de datos para rivera_tacos
CREATE DATABASE IF NOT EXISTS `rivera_tacos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rivera_tacos`;

-- Volcando estructura para tabla rivera_tacos.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.categorias: ~6 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
	(1, 'Tacos'),
	(2, 'Tortas\r\n'),
	(3, 'Tostadas'),
	(4, 'Quesadillas'),
	(5, 'Alambres'),
	(6, 'Bebidas');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(8) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido_pa` varchar(10) NOT NULL,
  `apellido_ma` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.cliente: ~0 rows (aproximadamente)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.cuenta
CREATE TABLE IF NOT EXISTS `cuenta` (
  `id_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `id_mesa` int(11) NOT NULL,
  `cliente` varchar(200) DEFAULT NULL,
  `mesero` varchar(200) DEFAULT NULL,
  `no_px` int(11) DEFAULT NULL,
  `des` float DEFAULT NULL,
  `iva` float DEFAULT NULL,
  `estado` varchar(100) DEFAULT 'Abierta',
  `total_cuenta` float DEFAULT NULL,
  PRIMARY KEY (`id_cuenta`),
  KEY `FK_cuenta_mesas` (`id_mesa`),
  CONSTRAINT `FK_cuenta_mesas` FOREIGN KEY (`id_mesa`) REFERENCES `mesas` (`id_mesa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.cuenta: ~8 rows (aproximadamente)
DELETE FROM `cuenta`;
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
INSERT INTO `cuenta` (`id_cuenta`, `id_mesa`, `cliente`, `mesero`, `no_px`, `des`, `iva`, `estado`, `total_cuenta`) VALUES
	(24, 1, 'Yo mero', 'root', 21, 0, 0, 'Cerrada', 0),
	(25, 2, 'Riben Van Perse', 'root', 10, 0, 0, 'Abierta', 0),
	(26, 3, 'Pelas', 'root', 33, 0, 0, 'Cerrada', 0),
	(27, 4, 'Elver', 'root', 32, 0, 0, 'Cerrada', 0),
	(28, 1, 'perro', 'root', 15, 0, 0, 'Cerrada', 0),
	(29, 1, 'Yo mero', 'root', 15, 0, 0, 'Cerrada', 0),
	(30, 4, 'Elver', 'root', 21, 0, 0, 'Cerrada', 0),
	(31, 1, 'juan', 'root', 2, 0, 0, 'Abierta', 0);
/*!40000 ALTER TABLE `cuenta` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.detalle_cuenta
CREATE TABLE IF NOT EXISTS `detalle_cuenta` (
  `id_detalle_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `id_cuenta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id_detalle_cuenta`),
  KEY `FK_detalle_cuenta_cuenta` (`id_cuenta`),
  KEY `FK_detalle_cuenta_productos` (`id_producto`),
  CONSTRAINT `FK_detalle_cuenta_cuenta` FOREIGN KEY (`id_cuenta`) REFERENCES `cuenta` (`id_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_detalle_cuenta_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.detalle_cuenta: ~0 rows (aproximadamente)
DELETE FROM `detalle_cuenta`;
/*!40000 ALTER TABLE `detalle_cuenta` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_cuenta` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.detalle_venta
CREATE TABLE IF NOT EXISTS `detalle_venta` (
  `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `producto` varchar(200) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id_detalle_venta`),
  KEY `FK__ventas` (`id_venta`),
  KEY `FK__productos` (`id_producto`),
  CONSTRAINT `FK__productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__ventas` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.detalle_venta: ~0 rows (aproximadamente)
DELETE FROM `detalle_venta`;
/*!40000 ALTER TABLE `detalle_venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_venta` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.domicilio
CREATE TABLE IF NOT EXISTS `domicilio` (
  `id_domicilio` int(11) NOT NULL,
  `cp` int(6) DEFAULT NULL,
  `colonia` varchar(15) DEFAULT NULL,
  `calle` varchar(15) DEFAULT NULL,
  `no_exterior` varchar(6) DEFAULT NULL,
  `no_interno` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id_domicilio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.domicilio: ~0 rows (aproximadamente)
DELETE FROM `domicilio`;
/*!40000 ALTER TABLE `domicilio` DISABLE KEYS */;
/*!40000 ALTER TABLE `domicilio` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `id_emp` int(8) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido_pa` varchar(10) NOT NULL,
  `apellido_ma` varchar(10) NOT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `id_puesto` int(8) NOT NULL,
  PRIMARY KEY (`id_emp`),
  KEY `FK_empleados_puestos` (`id_puesto`),
  CONSTRAINT `FK_empleados_puestos` FOREIGN KEY (`id_puesto`) REFERENCES `puestos` (`id_puesto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.empleados: ~0 rows (aproximadamente)
DELETE FROM `empleados`;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(3) NOT NULL AUTO_INCREMENT,
  `estado` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.estado: ~0 rows (aproximadamente)
DELETE FROM `estado`;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.imagenes
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `ruta` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.imagenes: ~0 rows (aproximadamente)
DELETE FROM `imagenes`;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.info_cliente
CREATE TABLE IF NOT EXISTS `info_cliente` (
  `id_cliente` int(8) DEFAULT NULL,
  `id_telefono` int(8) DEFAULT NULL,
  `id_estado` int(8) DEFAULT NULL,
  `id_municipio` int(8) DEFAULT NULL,
  `id_domicilio` int(8) DEFAULT NULL,
  KEY `FK_info_cliente_cliente` (`id_cliente`),
  KEY `FK_info_cliente_estado` (`id_estado`),
  KEY `FK_info_cliente_municipio` (`id_municipio`),
  KEY `FK_info_cliente_domicilio` (`id_domicilio`),
  KEY `FK_info_cliente_telefonos` (`id_telefono`),
  CONSTRAINT `FK_info_cliente_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_info_cliente_domicilio` FOREIGN KEY (`id_domicilio`) REFERENCES `domicilio` (`id_domicilio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_info_cliente_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_info_cliente_municipio` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_info_cliente_telefonos` FOREIGN KEY (`id_telefono`) REFERENCES `telefonos` (`id_telefono`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.info_cliente: ~0 rows (aproximadamente)
DELETE FROM `info_cliente`;
/*!40000 ALTER TABLE `info_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `info_cliente` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.info_empleado
CREATE TABLE IF NOT EXISTS `info_empleado` (
  `id_emp` int(8) NOT NULL,
  `id_estado` int(8) NOT NULL,
  `id_municipio` int(8) NOT NULL,
  `id_domicilio` int(8) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  KEY `FK_info_empleado_empleados` (`id_emp`),
  KEY `FK_info_empleado_estado` (`id_estado`),
  KEY `FK_info_empleado_municipio` (`id_municipio`),
  KEY `FK_info_empleado_domicilio` (`id_domicilio`),
  CONSTRAINT `FK_info_empleado_domicilio` FOREIGN KEY (`id_domicilio`) REFERENCES `domicilio` (`id_domicilio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_info_empleado_empleados` FOREIGN KEY (`id_emp`) REFERENCES `empleados` (`id_emp`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_info_empleado_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_info_empleado_municipio` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.info_empleado: ~0 rows (aproximadamente)
DELETE FROM `info_empleado`;
/*!40000 ALTER TABLE `info_empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `info_empleado` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.mesas
CREATE TABLE IF NOT EXISTS `mesas` (
  `id_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT NULL,
  `estado` varchar(200) DEFAULT 'Disponible',
  PRIMARY KEY (`id_mesa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.mesas: ~4 rows (aproximadamente)
DELETE FROM `mesas`;
/*!40000 ALTER TABLE `mesas` DISABLE KEYS */;
INSERT INTO `mesas` (`id_mesa`, `alias`, `estado`) VALUES
	(1, 'Entrada', 'Ocupada'),
	(2, 'Del fondo', 'Ocupada'),
	(3, NULL, 'Disponible'),
	(4, NULL, 'Disponible');
/*!40000 ALTER TABLE `mesas` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.municipio
CREATE TABLE IF NOT EXISTS `municipio` (
  `id_municipio` int(3) NOT NULL,
  `municipio` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_municipio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.municipio: ~0 rows (aproximadamente)
DELETE FROM `municipio`;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.mural
CREATE TABLE IF NOT EXISTS `mural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_noticia` varchar(200) DEFAULT NULL,
  `contenido` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.mural: ~0 rows (aproximadamente)
DELETE FROM `mural`;
/*!40000 ALTER TABLE `mural` DISABLE KEYS */;
/*!40000 ALTER TABLE `mural` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `costo` float NOT NULL DEFAULT 0,
  `iva` float DEFAULT NULL,
  `ganancia` float DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `descrip` varchar(200) DEFAULT NULL,
  `id_imagen` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `FK_productos_imagenes` (`id_imagen`),
  KEY `FK_productos_categorias` (`id_categoria`),
  CONSTRAINT `FK_productos_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_productos_imagenes` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.productos: ~44 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id_producto`, `nombre`, `costo`, `iva`, `ganancia`, `precio`, `id_categoria`, `descrip`, `id_imagen`) VALUES
	(1, 'Tacos al pastor', 7, 1.92, NULL, 10.08, 1, NULL, NULL),
	(2, 'Tacos de suadero', 7, 1.92, NULL, 10.08, 1, NULL, NULL),
	(3, 'Tacos de bisteck', 7, 1.92, NULL, 10.08, 1, NULL, NULL),
	(4, 'Tacos de longaniza', 7, 1.92, NULL, 10.08, 1, NULL, NULL),
	(5, 'Tacos de enchilada', 7, 1.92, NULL, 10.08, 1, NULL, NULL),
	(6, 'Tacos de costilla', 9, 2.4, NULL, 12.6, 1, NULL, NULL),
	(7, 'Tacos de chuleta', 9, 2.4, NULL, 12.6, 1, NULL, NULL),
	(8, 'Tacos de cecina', 9, 2.4, NULL, 12.6, 1, NULL, NULL),
	(9, 'Taco campechano', 9, 2.4, NULL, 12.6, 1, NULL, NULL),
	(10, 'Torta cubana', 30, 8.8, NULL, 46.2, 2, NULL, NULL),
	(11, 'Torta de costilla', 30, 8.8, NULL, 46.2, 2, NULL, NULL),
	(12, 'Torta de chuleta', 29, 8, NULL, 42, 2, NULL, NULL),
	(13, 'Torta de pastor', 28, 7.2, NULL, 37.8, 2, NULL, NULL),
	(14, 'Torta de chorizo', 28, 7.2, NULL, 37.8, 2, NULL, NULL),
	(15, 'Torta de jamon', 28, 7.2, NULL, 37.8, 2, NULL, NULL),
	(16, 'Torta de milanesa', 28, 7.2, NULL, 37.8, 2, NULL, NULL),
	(17, 'Torta de bisteck', 28, 7.2, NULL, 37.8, 2, NULL, NULL),
	(18, 'Torta de costilla', 28, 7.2, NULL, 37.8, 2, NULL, NULL),
	(19, 'Tostada de pata', 8, 2.4, NULL, 12.6, 3, NULL, NULL),
	(20, 'Tostada de tinga', 8, 2.4, NULL, 12.6, 3, NULL, NULL),
	(21, 'Quesadilla de tinga', 7, 1.92, NULL, 10.08, 4, NULL, NULL),
	(22, 'Quesadilla de queso', 7, 1.92, NULL, 10.08, 4, NULL, NULL),
	(23, 'Quesadilla de champiñones', 7, 1.92, NULL, 10.08, 4, NULL, NULL),
	(24, 'Quesadilla de rajas', 7, 1.92, NULL, 10.08, 4, NULL, NULL),
	(25, 'Quesadilla de longaniza', 7, 1.92, NULL, 10.08, 4, NULL, NULL),
	(26, 'Quesadilla de picadillo', 7, 1.92, NULL, 10.08, 4, NULL, NULL),
	(27, 'Quesadilla de zetas', 7, 1.92, NULL, 10.08, 4, NULL, NULL),
	(28, 'Alambre de arrachera', 70, 18.5, NULL, 96.6, 5, NULL, NULL),
	(29, 'Alambre vegetariano', 60, 16, NULL, 84, 5, NULL, NULL),
	(30, 'Alambre azteca', 58, 15.2, NULL, 79.8, 5, NULL, NULL),
	(31, 'Alambre ranchero ', 58, 15.2, NULL, 79.8, 5, NULL, NULL),
	(32, 'Alambre especial', 58, 15.2, NULL, 79.8, 5, NULL, NULL),
	(33, 'Alambre sarape', 58, 15.2, NULL, 79.8, 5, NULL, NULL),
	(34, 'Alambre no que no', 60, 16, NULL, 84, 5, NULL, NULL),
	(35, 'Alambre fortachon', 75, 17.6, NULL, 92.4, 5, NULL, NULL),
	(36, 'Coca cola', 6, 2.4, NULL, 12.6, 6, NULL, NULL),
	(37, 'Fanta', 6, 2.4, NULL, 12.6, 6, NULL, NULL),
	(38, 'Jugo de mango', 5, 1.92, NULL, 10.08, 6, NULL, NULL),
	(39, 'Jugo de guayaba', 5, 1.92, NULL, 10.08, 6, NULL, NULL),
	(40, 'Jugo de fresa', 5, 1.92, NULL, 10.08, 6, NULL, NULL),
	(41, 'Jugo de uva', 5, 1.92, NULL, 10.08, 6, NULL, NULL),
	(42, 'Jugo de manzana', 5, 1.92, NULL, 10.08, 6, NULL, NULL),
	(43, 'Agua de horchata 1L', 7, 4, NULL, 21, 6, NULL, NULL),
	(44, 'Agua de jamaica 1L', 7, 4, NULL, 21, 6, NULL, NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.puestos
CREATE TABLE IF NOT EXISTS `puestos` (
  `id_puesto` int(8) NOT NULL,
  `puesto` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.puestos: ~0 rows (aproximadamente)
DELETE FROM `puestos`;
/*!40000 ALTER TABLE `puestos` DISABLE KEYS */;
/*!40000 ALTER TABLE `puestos` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.telefonos
CREATE TABLE IF NOT EXISTS `telefonos` (
  `id_telefono` int(8) NOT NULL,
  `telefono_fijo` int(10) DEFAULT NULL,
  `celular` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_telefono`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.telefonos: ~0 rows (aproximadamente)
DELETE FROM `telefonos`;
/*!40000 ALTER TABLE `telefonos` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefonos` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(8) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nivel` varchar(200) NOT NULL DEFAULT 'usuario',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.usuarios: ~3 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `usuario`, `pass`, `nivel`) VALUES
	(1, 'root', '1234', 'root'),
	(2, 'admin', '333', 'admin'),
	(3, 'vend', '1234', 'ventas');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla rivera_tacos.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(8) NOT NULL AUTO_INCREMENT,
  `fecha_hora` datetime NOT NULL,
  `id_usuario` int(8) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `monto` float NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `FK_ventas_usuarios` (`id_usuario`),
  CONSTRAINT `FK_ventas_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rivera_tacos.ventas: ~0 rows (aproximadamente)
DELETE FROM `ventas`;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
