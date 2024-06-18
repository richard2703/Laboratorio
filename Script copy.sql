CREATE TABLE cat_lugares(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  PRIMARY KEY (id)
 );

CREATE TABLE lugares(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  cat_lugares_id bigint(20) unsigned NOT NULL,
  nombre varchar(255) NOT NULL,
  direccion varchar(255) NOT NULL,
  telefono varchar(255) DEFAULT NULL,
  correo varchar(255) DEFAULT NULL,
  encargado varchar(255) NOT NULL,
  telEncargado varchar(255) DEFAULT NULL,
  foraneo float DEFAULT NULL,
  PRIMARY KEY (id),
  CONSTRAINT FK_lugares_cat_lugares foreign key (cat_lugares_id) references cat_lugares(id)
 );

 CREATE TABLE examen_precio(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  examenId bigint(20) unsigned NOT NULL,
  tipoLugarId bigint(20) unsigned NOT NULL,
  precio float(10,2) null,
  PRIMARY KEY (id),
  CONSTRAINT FK_lugares_cat_examen_precio foreign key (tipoLugarId) references cat_lugares(id),
  CONSTRAINT FK_examenId_examen_precio foreign key (examenId) references examenes(id)
 );

 ///////////////////////////////////////////////////////////
CREATE TABLE `sucursales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `encargado` varchar(255) NOT NULL,
  `telEncargado` varchar(255) DEFAULT NULL,
  `foraneo` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
