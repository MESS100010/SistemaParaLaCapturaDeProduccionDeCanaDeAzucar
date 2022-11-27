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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO actividad VALUES("1","as10","arar suelo","1","herramienta","peon");
INSERT INTO actividad VALUES("2","ap20","aplicar pesticida","1","pesticidas","aplicador");
INSERT INTO actividad VALUES("3","ccc100","cosechar","3","tractor","tractorista y peon");



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
INSERT INTO campo VALUES("3","juan","Guerrero","acapulco","san pedro","18","altamirano","482.05","deshabilitado");



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

INSERT INTO cultivo VALUES("1","2022-10-19","0000-00-00","1","retraso en plantación","iniciada");
INSERT INTO cultivo VALUES("2","2022-10-05","0000-00-00","2","parcela sin plantación","iniciada");
INSERT INTO cultivo VALUES("3","2022-09-23","0000-00-00","1","plaga en el cultivo","sembrado");



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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO empleado VALUES("1","ABC10","Antoine","Griezman","Griezman","H","1999-10-12","Morelos","Cuernavaca","Teopanzolco","1234567","g@gmail.com","123456","campesino","1222","2020-02-19");
INSERT INTO empleado VALUES("2","DEF11","Megan","Fox","Fox","M","1999-10-12","Morelos","Jiutepec","Insurgentes","2345678","m@gmail.com","3456","secretaria","9999","2021-03-20");



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

INSERT INTO producto VALUES("1","F01","fertilizante","liquido","0","10","5","2023-11-19","590","450","biojal");
INSERT INTO producto VALUES("2","I01","insecticida","liquido","0","1","51","2023-10-25","116","100","urbacin-20");
INSERT INTO producto VALUES("3","I02","insecticida","liquido","0","1","68","2023-02-02","281","200","vapodel");
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO usuario VALUES("1","Lionel","Messi","Cuccitini","ADMIN","LM10","holahola");
INSERT INTO usuario VALUES("2","Cristiano","Ronaldo","Dos Santos","jefe de campo","CR7","adiosadios");
INSERT INTO usuario VALUES("3","vane","zagal","zagal","administrador","vane","vane123");
INSERT INTO usuario VALUES("4","luis","diaz","lopez","ejidatario","luis","luis123");
INSERT INTO usuario VALUES("5","juan","delgado","perez","jefe de campo","juan","juan123");
INSERT INTO usuario VALUES("6","juan","delgado","perez","jefe de campo","pedro","pedro123");



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