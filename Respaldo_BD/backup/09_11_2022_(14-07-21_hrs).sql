SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS caña;

USE caña;

DROP TABLE IF EXISTS actividad;

CREATE TABLE `actividad` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(45) NOT NULL,
  `Descr` varchar(45) NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Des_Producto` varchar(45) DEFAULT NULL,
  `Des_Empleado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idActividad`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO actividad VALUES("2","ap20","aplicar pesticida","1","pesticidas","aplicador");
INSERT INTO actividad VALUES("3","ccc100","cosechar","3","tractor","tractorista y peon");
INSERT INTO actividad VALUES("4","defgw","wgwed","2","egwa","wgwg");



DROP TABLE IF EXISTS campo;

CREATE TABLE `campo` (
  `idCampo` int(11) NOT NULL AUTO_INCREMENT,
  `Dueno` varchar(25) NOT NULL,
  `Edo` varchar(45) DEFAULT NULL,
  `Municipio` varchar(45) NOT NULL,
  `Calle` varchar(45) NOT NULL,
  `NumLote` int(11) NOT NULL,
  `Colonia` varchar(45) NOT NULL,
  `Area` float NOT NULL,
  `Estado_` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCampo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO campo VALUES("1","pedro","Morelos","temixco","san juan","18","guayaba","508","ocupado");
INSERT INTO campo VALUES("2","fabiola","Guerrero","taxco","ojeda","45","minero","842.18","libre");



DROP TABLE IF EXISTS cultivo;

CREATE TABLE `cultivo` (
  `idCultivo` int(11) NOT NULL AUTO_INCREMENT,
  `FechaI` date NOT NULL,
  `FechaC` date DEFAULT NULL,
  `idCampo` int(11) NOT NULL,
  `Notas` varchar(150) DEFAULT NULL,
  `Progreso` varchar(45) NOT NULL,
  PRIMARY KEY (`idCultivo`),
  KEY `idCampo` (`idCampo`),
  CONSTRAINT `cultivo_ibfk_1` FOREIGN KEY (`idCampo`) REFERENCES `campo` (`idCampo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO cultivo VALUES("2","2022-10-05","0000-00-00","2","parcela sin plantación","iniciada");



DROP TABLE IF EXISTS emp_cult;

CREATE TABLE `emp_cult` (
  `idEC` int(11) NOT NULL AUTO_INCREMENT,
  `idCultivo` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idEC`),
  KEY `idCultivo` (`idCultivo`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `emp_cult_ibfk_1` FOREIGN KEY (`idCultivo`) REFERENCES `cultivo` (`idCultivo`),
  CONSTRAINT `emp_cult_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS empleado;

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `Matricula` varchar(45) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `Paterno` varchar(45) NOT NULL,
  `Materno` varchar(45) NOT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `FecNac` date NOT NULL,
  `Edo` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Calle_` varchar(45) DEFAULT NULL,
  `Tel` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `CP` int(11) DEFAULT NULL,
  `Puesto` varchar(45) NOT NULL,
  `Salario` float NOT NULL,
  `Fec_Contrato` date NOT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS prod_act_cult;

CREATE TABLE `prod_act_cult` (
  `idPAC` int(11) NOT NULL AUTO_INCREMENT,
  `idCultivo` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idActividad` int(11) NOT NULL,
  PRIMARY KEY (`idPAC`),
  KEY `idCultivo` (`idCultivo`),
  KEY `idEmpleado` (`idEmpleado`),
  KEY `idActividad` (`idActividad`),
  CONSTRAINT `prod_act_cult_ibfk_1` FOREIGN KEY (`idCultivo`) REFERENCES `cultivo` (`idCultivo`),
  CONSTRAINT `prod_act_cult_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`),
  CONSTRAINT `prod_act_cult_ibfk_3` FOREIGN KEY (`idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE IF EXISTS producto;

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(45) NOT NULL,
  `Categoria` varchar(45) NOT NULL,
  `Consistencia` varchar(45) NOT NULL,
  `Peso_Kg` float DEFAULT NULL,
  `Peso_L` float DEFAULT NULL,
  `Cantidad` int(11) NOT NULL,
  `FechaVigencia` date NOT NULL,
  `PrecioUnitario` float DEFAULT NULL,
  `PrecioMayoreo` float DEFAULT NULL,
  `Marca` varchar(45) NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO producto VALUES("4","A10","pesticida","Liquido","10","0","10","2022-07-05","200","2000","Agricultex");
INSERT INTO producto VALUES("5","A11","fertizante","Solido","20","0","10","2022-08-19","250","2500","Agricultex");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Ap` varchar(45) DEFAULT NULL,
  `Am` varchar(45) DEFAULT NULL,
  `Nivel` varchar(45) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `Contrasena` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO usuario VALUES("5","juan","delgado","perez","jefe de campo","juan","juan123");
INSERT INTO usuario VALUES("7","sd","dwd","wd","Administrador","fefe","wrfd");
INSERT INTO usuario VALUES("8","juan","alvarez","perez","Ejidatario","juan","bejkbd");



DROP TABLE IF EXISTS usuario_cult;

CREATE TABLE `usuario_cult` (
  `idUC` int(11) NOT NULL AUTO_INCREMENT,
  `idCultivo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUC`),
  KEY `idCultivo` (`idCultivo`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `usuario_cult_ibfk_1` FOREIGN KEY (`idCultivo`) REFERENCES `cultivo` (`idCultivo`),
  CONSTRAINT `usuario_cult_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




SET FOREIGN_KEY_CHECKS=1;