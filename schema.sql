create database inventiolite;
use inventiolite;

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
	nombre varchar(50),
	cargo text,
	creado_el datetime
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
	cargo text,
	salario decimal(10,2),
	formapago varchar(20),
	fecha_nac date,
	email varchar(30)
);


create table PLA_TIG_TIPO_INGRESO(
	id int not null auto_increment primary key,
	tipoingreso text,
	creado_el datetime
);

create table PLA_INN_INGRESOS(
	id int not null auto_increment primary key,
	descripcion text,
	creado_el datetime
);


CREATE TABLE `PLA_INN_INGRESOS` (
  `INN_CODCIA` int(11) NOT NULL,
  `INN_CODTPL` smallint(6) NOT NULL,
  `INN_CODPLA` int(11) NOT NULL,
  `INN_CODEMP` int(11) NOT NULL,
  `INN_CODTIG` smallint(6) NOT NULL,
  `INN_VALOR` float NOT NULL,
  `INN_DIAS` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `PLA_VAC_VACACION` (
  `VAC_CODCIA` int(11) NOT NULL,
  `VAC_CODEMP` int(11) NOT NULL,
  `VAC_PERIODO` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `VAC_DESDE` datetime NOT NULL,
  `VAC_HASTA` datetime NOT NULL,
  `VAC_PERIODO_ANT` decimal(10,2) NOT NULL,
  `VAC_DIAS` decimal(10,2) NOT NULL,
  `VAC_GOZADOS` decimal(10,2) NOT NULL,
  `VAC_FECHA_PAGO_PRIMA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `PLA_LIE_LIQUIDACION_EMP` (
  `LIE_CODCIA` int(11) NOT NULL,
  `LIE_CODEMP` int(11) NOT NULL,
  `LIE_FECHA_INGRESO` datetime NOT NULL,
  `LIE_FECHA_RETIRO` datetime NOT NULL,
  `LIE_OBSERVACION` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LIE_CODTPL` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `PLA_PPL_PARAM_PLANI` (
  `PPL_CODCIA` int(11) NOT NULL,
  `PPL_CODTPL` smallint(6) NOT NULL,
  `PPL_CODPLA` int(11) NOT NULL,
  `PPL_FECHA_INI` datetime NOT NULL,
  `PPL_FECHA_FIN` datetime NOT NULL,
  `PPL_FECHA_PAGO` datetime NOT NULL,
  `PPL_ESTADO` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `PPL_FRECUENCIA` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `PPL_MES_CONT` smallint(6) NOT NULL,
  `PPL_ANIO_CONT` smallint(6) DEFAULT NULL,
  `PPL_FECHA_CORTE` datetime DEFAULT NULL,
  `ppl_codpla_ini` int(11) DEFAULT NULL,
  `ppl_codpla_fin` int(11) DEFAULT NULL,
  `ppl_comentario` varchar(8000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `PLA_REN_RENTA` (
  `REN_CODEMP` int(11) NOT NULL,
  `REN_MES_CONT` smallint(6) NOT NULL,
  `REN_ANIO_CONT` smallint(6) NOT NULL,
  `REN_NIT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REN_NOMBRE_NIT` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REN_INGRESO_AFECTO` float DEFAULT NULL,
  `REN_DESCUENTO` float DEFAULT NULL,
  `REN_CODCIA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `PLA_TDC_TIPO_DESCUENTO` (
  `TDC_CODCIA` int(11) NOT NULL,
  `TDC_CODIGO` smallint(6) NOT NULL,
  `TDC_DESCRIPCION` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;







ALTER TABLE `PLA_DSS_DESCUENTOS`
  ADD PRIMARY KEY (`DSS_CODCIA`,`DSS_CODTPL`,`DSS_CODPLA`,`DSS_CODEMP`,`DSS_CODTDC`);

--
-- Indexes for table `PLA_EMP_EMPLEADO`
--
ALTER TABLE `PLA_EMP_EMPLEADO`
  ADD PRIMARY KEY (`EMP_CODIGO`);

--
-- Indexes for table `PLA_INN_INGRESOS`
--
ALTER TABLE `PLA_INN_INGRESOS`
  ADD PRIMARY KEY (`INN_CODCIA`,`INN_CODTPL`,`INN_CODPLA`,`INN_CODEMP`,`INN_CODTIG`);

--
-- Indexes for table `PLA_LIE_LIQUIDACION_EMP`
--
ALTER TABLE `PLA_LIE_LIQUIDACION_EMP`
  ADD PRIMARY KEY (`LIE_CODEMP`,`LIE_FECHA_RETIRO`);

--
-- Indexes for table `PLA_PPL_PARAM_PLANI`
--
ALTER TABLE `PLA_PPL_PARAM_PLANI`
  ADD PRIMARY KEY (`PPL_CODCIA`,`PPL_CODTPL`,`PPL_CODPLA`);

--
-- Indexes for table `PLA_REN_RENTA`
--
ALTER TABLE `PLA_REN_RENTA`
  ADD PRIMARY KEY (`REN_CODEMP`,`REN_MES_CONT`,`REN_ANIO_CONT`);

--
-- Indexes for table `PLA_TDC_TIPO_DESCUENTO`
--
ALTER TABLE `PLA_TDC_TIPO_DESCUENTO`
  ADD PRIMARY KEY (`TDC_CODCIA`,`TDC_CODIGO`);

--
-- Indexes for table `PLA_TIG_TIPO_INGRESO`
--
ALTER TABLE `PLA_TIG_TIPO_INGRESO`
  ADD PRIMARY KEY (`TIG_CODCIA`,`TIG_CODIGO`);

ALTER TABLE `PLA_TPL_TIPO_PLANILLA`
  ADD PRIMARY KEY (`TPL_CODCIA`,`TPL_CODIGO`);


ALTER TABLE `PLA_VAC_VACACION`
  ADD PRIMARY KEY (`VAC_CODCIA`,`VAC_CODEMP`,`VAC_PERIODO`);

ALTER TABLE `PLA_REN_RENTA`
  ADD CONSTRAINT `PLA_REN_RENTA_ibfk_1` FOREIGN KEY (`REN_CODEMP`) REFERENCES `PLA_EMP_EMPLEADO` (`EMP_CODIGO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--CREATE TABLE `PLA_DSS_DESCUENTOS` (
 -- `DSS_CODCIA` int(11) NOT NULL,
 -- `DSS_CODTPL` smallint(6) NOT NULL,
 -- `DSS_CODPLA` int(11) NOT NULL,
 -- `DSS_CODEMP` int(11) NOT NULL,
--  `DSS_CODTDC` smallint(6) NOT NULL,
--  `DSS_VALOR` float NOT NULL,
 -- `DSS_VALOR_PATRONAL` float NOT NULL,
  --`DSS_INGRESO_AFECTO` float NOT NULL,
  --`DSS_DIAS_DESCUENTO` double NOT NULL
--) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--CREATE TABLE `PLA_EMP_EMPLEADO` (
 -- `EMP_CODCIA` int not null auto_increment primary key,
 -- `EMP_CODIGO` int(11) NOT NULL,
 -- `EMP_CODTIP` smallint(6) DEFAULT NULL,
 -- `EMP_DIRECCION` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  -- `EMP_APELLIDOS_NOMBRES` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  -- `EMP_TELEFONO` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  -- `EMP_LUGAR_NAC` smallint(6) DEFAULT NULL,
  -- `EMP_NACIONALIDAD` smallint(6) DEFAULT NULL,
  -- `EMP_FECHA_NAC` datetime DEFAULT NULL,
  -- `EMP_SEXO` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
 --  `EMP_PROFESION` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
 -- --  `EMP_ESTADO` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
 --  `EMP_ESTADO_CIVIL` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
 --  `EMP_FECHA_INGRESO` datetime DEFAULT NULL,
  -- `EMP_FECHA_RETIRO` datetime DEFAULT NULL,
  -- `EMP_CODTPL` smallint(6) DEFAULT NULL,
  -- `EMP_TIPO_CONTRATO` smallint(6) DEFAULT NULL,
  -- `EMP_FORMA_PAGO` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  -- `EMP_CODPLZ` int(11) DEFAULT NULL,
  -- `EMP_EXP_SALARIO` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  -- `EMP_SALARIO` float DEFAULT NULL,
  -- `EMP_EDAD` smallint(6) DEFAULT NULL,
   --`EMP_EMAIL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
 --) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--CREATE TABLE `PLA_TIG_TIPO_INGRESO` (
-- `TIG_CODCIA` int(11) NOT NULL,
 -- `TIG_CODIGO` smallint(6) NOT NULL,
  --`TIG_DESCRIPCION` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
--) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--CREATE TABLE `PLA_TPL_TIPO_PLANILLA` (
 -- `TPL_CODCIA` int(11) NOT NULL,
 -- `TPL_CODIGO` smallint(6) NOT NULL,
 -- `TPL_DESCRIPCION` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 -- `TPL_TIPO` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
 -- `TPL_APLICACION` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
 -- `TPL_TOTAL_PERIODOS` smallint(6) NOT NULL
--) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


