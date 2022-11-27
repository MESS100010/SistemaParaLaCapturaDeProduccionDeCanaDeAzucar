drop database caña;
create database caña;
use caña;

drop table usuario;
CREATE TABLE `caña`.`usuario` (
  `idUsuario` int auto_increment primary key,
  `Nombre` VARCHAR(45) NULL,
  `Ap` VARCHAR(45) NULL,
  `Am` VARCHAR(45) NULL,
  `Nivel` VARCHAR(45) NOT NULL,
  `Usuario` VARCHAR(45) NOT NULL,
  `Contrasena` VARCHAR(45) NOT NULL);
  
INSERT INTO `caña`.`usuario` (`idUsuario`, `Nombre`, `Ap`, `Am`, `Nivel`, `Usuario`, `Contrasena`) VALUES ('0', 'Lionel', 'Messi', 'Cuccitini', 'ADMIN', 'LM10', 'holahola');
INSERT INTO `caña`.`usuario` (`idUsuario`, `Nombre`, `Ap`, `Am`, `Nivel`, `Usuario`, `Contrasena`) VALUES ('0', 'Cristiano', 'Ronaldo', 'Dos Santos', 'jefe de campo', 'CR7', 'adiosadios');
INSERT INTO `caña`.`usuario` (`idUsuario`, `Nombre`, `Ap`, `Am`, `Nivel`, `Usuario`, `Contrasena`) VALUES ('0', 'vane', 'zagal', 'zagal', 'administrador', 'vane', 'vane123');
INSERT INTO `caña`.`usuario` (`idUsuario`, `Nombre`, `Ap`, `Am`, `Nivel`, `Usuario`, `Contrasena`) VALUES ('0', 'luis', 'diaz', 'lopez', 'ejidatario', 'luis', 'luis123');
INSERT INTO `caña`.`usuario` (`idUsuario`, `Nombre`, `Ap`, `Am`, `Nivel`, `Usuario`, `Contrasena`) VALUES ('0', 'juan', 'delgado', 'perez', 'jefe de campo', 'juan', 'juan123');

select * from usuario;

CREATE TABLE IF NOT EXISTS empleado(
idEmpleado int auto_increment primary key,
Matricula VARCHAR(45) NOT NULL,
Nom VARCHAR(45) NOT NULL,
Paterno VARCHAR(45) NOT NULL,
Materno VARCHAR(45) NOT NULL,
Sexo VARCHAR(45) NULL,
FecNac DATE NOT NULL,
Edo VARCHAR(45) NULL,
City VARCHAR(45) NULL,
Calle_ VARCHAR(45) NULL,
Tel VARCHAR(45) NOT NULL,
Correo VARCHAR(45) NOT NULL,
CP INT NULL,
Puesto VARCHAR(45) NOT NULL,
Salario FLOAT NOT NULL,
Fec_Contrato DATE NOT NULL);

INSERT INTO `caña`.`empleado` (`idEmpleado`, `Matricula`, `Nom`, `Paterno`, `Materno`, `Sexo`, `FecNac`, `Edo`, `City`, `Calle_`, `Tel`, `Correo`, `CP`, `Puesto`, `Salario`, `Fec_Contrato`) VALUES ('0', 'ABC10', 'Antoine', 'Griezman', 'Griezman', 'H', '1999-10-12', 'Morelos', 'Cuernavaca', 'Teopanzolco', '1234567', 'g@gmail.com', '123456', 'campesino', '1222', '2020-02-19');
INSERT INTO `caña`.`empleado` (`idEmpleado`, `Matricula`, `Nom`, `Paterno`, `Materno`, `Sexo`, `FecNac`, `Edo`, `City`, `Calle_`, `Tel`, `Correo`, `CP`, `Puesto`, `Salario`, `Fec_Contrato`) VALUES ('0', 'DEF11', 'Megan', 'Fox', 'Fox', 'M', '1999-10-12', 'Morelos', 'Jiutepec', 'Insurgentes', '2345678', 'm@gmail.com', '3456', 'secretaria', '9999', '2021-03-20');

select * from empleado;

drop table producto;
CREATE TABLE IF NOT EXISTS producto(
idProducto int auto_increment primary key,
Codigo VARCHAR(45) NOT NULL,
Categoria VARCHAR(45) NOT NULL,
Consistencia VARCHAR(45) NOT NULL,
Peso_Kg FLOAT NULL,
Peso_L FLOAT NULL,
Cantidad INT NOT NULL,
FechaVigencia DATE NOT NULL,
PrecioUnitario FLOAT NULL,
PrecioMayoreo FLOAT NULL,
Marca VARCHAR(45) NOT NULL);

INSERT INTO `caña`.`producto` (`idProducto`, `Codigo`, `Categoria`, `Consistencia`, `Peso_Kg`, `Peso_L` , `Cantidad`, `FechaVigencia`, `PrecioUnitario`, `PrecioMayoreo`, `Marca`) VALUES ('0', 'F01', 'fertilizante', 'liquido', '-', '10', '5', '2023-11-19', '590', '450', 'biojal');
INSERT INTO `caña`.`producto` (`idProducto`, `Codigo`, `Categoria`, `Consistencia`, `Peso_Kg`, `Peso_L` , `Cantidad`, `FechaVigencia`, `PrecioUnitario`, `PrecioMayoreo`, `Marca`) VALUES ('0', 'I01', 'insecticida', 'liquido', '-', '1', '51', '2023-10-25', '116', '100', 'urbacin-20');
INSERT INTO `caña`.`producto` (`idProducto`, `Codigo`, `Categoria`, `Consistencia`, `Peso_Kg`, `Peso_L` , `Cantidad`, `FechaVigencia`, `PrecioUnitario`, `PrecioMayoreo`, `Marca`) VALUES ('0', 'I02', 'insecticida', 'liquido', '-', '1', '68', '2023-02-02', '281', '200', 'vapodel');
INSERT INTO `caña`.`producto` (`idProducto`, `Codigo`, `Categoria`, `Consistencia`, `Peso_Kg`, `Peso_L` , `Cantidad`, `FechaVigencia`, `PrecioUnitario`, `PrecioMayoreo`, `Marca`) VALUES ('0', 'A10', 'pesticida', 'Liquido', '10', '-', '10', '2022-07-05', '200', '2000', 'Agricultex');
INSERT INTO `caña`.`producto` (`idProducto`, `Codigo`, `Categoria`, `Consistencia`, `Peso_Kg`, `Peso_L` , `Cantidad`, `FechaVigencia`, `PrecioUnitario`, `PrecioMayoreo`, `Marca`) VALUES ('0', 'A11', 'fertizante', 'Solido', '20', '-', '10', '2022-08-19', '250', '2500', 'Agricultex');

Select * from producto;

drop table actividad;
CREATE TABLE IF NOT EXISTS actividad(
idActividad int auto_increment primary key,
Codigo VARCHAR(45) NOT NULL,
Descr VARCHAR(45) NOT NULL,
Duracion INT NOT NULL,
Des_Producto VARCHAR(45) NULL,
Des_Empleado VARCHAR(45) NULL);

INSERT INTO `caña`.`actividad` (`idActividad`, `Codigo`, `Descr`, `Duracion`, `Des_Producto`, `Des_Empleado`) VALUES ('0', 'as10', 'arar suelo', '1', 'herramienta', 'peon');
INSERT INTO `caña`.`actividad` (`idActividad`, `Codigo`, `Descr`, `Duracion`, `Des_Producto`, `Des_Empleado`) VALUES ('0', 'ap20', 'aplicar pesticida', '1', 'pesticidas', 'aplicador');
INSERT INTO `caña`.`actividad` (`idActividad`, `Codigo`, `Descr`, `Duracion`, `Des_Producto`, `Des_Empleado`) VALUES ('0', 'ccc100', 'cosechar', '3', 'tractor', 'tractorista y peon');

Select * from actividad;

drop table campo;
CREATE TABLE IF NOT EXISTS campo(
idCampo  int auto_increment primary key,
Dueno varchar(25) not null,
Edo VARCHAR(45) null,
Municipio VARCHAR(45) NOT NULL,
Calle VARCHAR(45) NOT NULL,
NumLote INT NOT NULL,
Colonia VARCHAR(45) NOT NULL,
Area FLOAT NOT NULL,
Estado_ varchar(45));

INSERT INTO `caña`.`campo` (`idCampo`, `Dueno`, `Edo`, `Municipio`, `Calle`, `NumLote`, `Colonia`, `Area`, `Estado_`) VALUES ('0', 'pedro', 'Morelos', 'temixco', 'san juan', '18', 'guayaba', '508', 'ocupado');
INSERT INTO `caña`.`campo` (`idCampo`, `Dueno`, `Edo`, `Municipio`, `Calle`, `NumLote`, `Colonia`, `Area`, `Estado_`) VALUES ('0', 'fabiola', 'Guerrero', 'taxco', 'ojeda', '45', 'minero', '842.18', 'libre');
INSERT INTO `caña`.`campo` (`idCampo`, `Dueno`, `Edo`, `Municipio`, `Calle`, `NumLote`, `Colonia`, `Area`, `Estado_`) VALUES ('0', 'juan', 'Guerrero', 'acapulco', 'san pedro', '18', 'altamirano', '482.05', 'deshabilitado');

select * from campo;

drop table cultivo;
CREATE TABLE IF NOT EXISTS cultivo(
idCultivo int auto_increment primary key,
FechaI DATE NOT NULL,
FechaC DATE NULL,
idCampo int not null,
Notas VARCHAR(150) NULL,
Progreso VARCHAR(45) NOT NULL,
foreign key (idCampo) references campo(idCampo)
ON DELETE NO ACTION
ON UPDATE NO ACTION);

INSERT INTO `caña`.`cultivo` (`idCultivo`, `FechaI`, `FechaC`, `idCampo`, `Notas`, `Progreso`) VALUES ('0', '2022-10-19', '-', '1', 'retraso en plantación', 'iniciada');
INSERT INTO `caña`.`cultivo` (`idCultivo`, `FechaI`, `FechaC`, `idCampo`, `Notas`, `Progreso`) VALUES ('0', '2022-10-05', '-', '2', 'parcela sin plantación', 'iniciada');
INSERT INTO `caña`.`cultivo` (`idCultivo`, `FechaI`, `FechaC`, `idCampo`, `Notas`, `Progreso`) VALUES ('0', '2022-09-23', '-', '1', 'plaga en el cultivo', 'sembrado');

select * from cultivo;

create table Emp_Cult(
idEC int auto_increment primary key,
idCultivo int not null,
idEmpleado int not null,
foreign key (idCultivo) references cultivo(idCultivo),
foreign key (idEmpleado) references empleado(idEmpleado)
ON DELETE NO ACTION
ON UPDATE NO ACTION);

create table Prod_Act_Cult(
idPAC int auto_increment primary key,
idCultivo int not null,
idEmpleado int not null,
idActividad int not null,
foreign key (idCultivo) references cultivo(idCultivo),
foreign key (idEmpleado) references empleado(idEmpleado),
foreign key (idActividad) references actividad(idActividad)
ON DELETE NO ACTION
ON UPDATE NO ACTION);

create table Usuario_Cult(
idUC int auto_increment primary key,
idCultivo int not null,
idUsuario int not null,
foreign key (idCultivo) references cultivo(idCultivo),
foreign key (idUsuario) references usuario(idUsuario)
ON DELETE NO ACTION
ON UPDATE NO ACTION);