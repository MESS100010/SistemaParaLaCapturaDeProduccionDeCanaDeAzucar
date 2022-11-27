drop database caña;
create database caña;
use caña;

CREATE TABLE `caña`.`usuario` (
  `idUsuario` int auto_increment primary key,
  `Nombre` VARCHAR(45) NULL,
  `Ap` VARCHAR(45) NULL,
  `Am` VARCHAR(45) NULL,
  `Nivel` VARCHAR(45) NOT NULL,
  `Usuario` VARCHAR(45) NOT NULL,
  `Contraseña` VARCHAR(45) NOT NULL);
  
INSERT INTO `caña`.`usuario` (`idUsuario`, `Nombre`, `Ap`, `Am`, `Nivel`, `Usuario`, `Contraseña`) VALUES ('0', 'Lionel', 'Messi', 'Cuccitini', 'ADMIN', 'LM10', 'holahola');
INSERT INTO `caña`.`usuario` (`idUsuario`, `Nombre`, `Ap`, `Am`, `Nivel`, `Usuario`, `Contraseña`) VALUES ('0', 'Cristiano', 'Ronaldo', 'Dos Santos', 'jefe de campo', 'CR7', 'adiosadios');
  
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

select * from usuario;
select * from empleado;
