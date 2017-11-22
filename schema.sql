create database pagosasi2;
use pagosasi2;

create table user(
	id int not null auto_increment primary key,
	name varchar(50),
	lastname varchar(50),
	username varchar(50),
	email varchar(255),
	password varchar(60),
	image varchar(255),
	is_active boolean not null default 1,
	is_admin boolean not null default 0,
	created_at datetime
);

insert into user(name,lastname,email,password,is_active,is_admin,created_at) value ("Administrador", "","admin","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad",1,1,NOW());


create table DESCUENTOS(
	id int not null auto_increment primary key,
	cod_empleado varchar(255),
	valor double,
	dias_descuento int,
	descripcion text,
	creado_el datetime
);


create table EMP_AREA(
	id int not null auto_increment primary key,
	nombre varchar(50)
);


create table EMP_EMPLEADO(   
	id int not null auto_increment primary key,
	nombre varchar(50),
	apellido varchar(50),
	direccion varchar (50),
	telefono int,
	sexo varchar(20),
	dui varchar (15),
	nit varchar (15),
	estado_civil varchar(20),
	tipo_contrato varchar(20),
	cargo varchar(40),
	salario decimal(10,2),
	formapago varchar(20),
	fecha_nac date,
	email varchar(30)
);

CREATE TABLE pagosempleado (
  id int(10) not null auto_increment primary key,
  empleado varchar(45),  
  salario decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  diastrabajo int(10) unsigned NOT NULL DEFAULT '0',
  horasextra int(10) unsigned  DEFAULT '0',
  indemniz decimal(10,2) unsigned DEFAULT '0',
  descuento int(10) unsigned  DEFAULT '0',
  adelantos decimal(10,2) unsigned DEFAULT '0.00',
  afp decimal(10,2) unsigned NOT NULL DEFAULT '0.06',
  seguro decimal(10,2) unsigned NOT NULL DEFAULT '0.03',
  creado_el datetime 
);

create table PLA_AGUINALDO(
	id int not null auto_increment primary key,
	empleado varchar(60),
  anios_laborados int,
	cantidad decimal(10,2)
);

create table PLA_CARGOS(
	id int not null auto_increment primary key,
	descripcion text,
	creado_el datetime
);

CREATE TABLE PLA_VAC_VACACION (
  id int not null auto_increment primary key,
  cod_emp int(11) NOT NULL,
  periodo varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  desde datetime NOT NULL,
  hasta datetime NOT NULL,
  num_dias decimal(10,2) NOT NULL,
  cant_pago decimal(10,2) NOT NULL
);

CREATE TABLE PLA_CONFIGURACIONES (
  id int not null auto_increment primary key,
  isss decimal(10,2) NOT NULL,
  afp decimal(10,2) NOT NULL
);

Create view v_empleado
AS SELECT id, concat_ws(' ', apellido, nombre) as persona, salario
FROM EMP_EMPLEADO;