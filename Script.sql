CREATE TABLE roles (
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  guard_name varchar(255) NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY roles_name_guard_name_unique (name,guard_name)
);
INSERT INTO roles VALUES
(1,'Admin','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(2,'User','web','2022-07-25 20:54:16','2022-07-25 20:54:16');

CREATE TABLE permissions (
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  guard_name varchar(255) NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY permissions_name_guard_name_unique (name,guard_name)
);
INSERT INTO permissions VALUES
(1,'permission_index','web','2022-07-25 20:54:15','2022-07-25 20:54:15'),
(2,'permission_create','web','2022-07-25 20:54:15','2022-07-25 20:54:15'),
(3,'permission_show','web','2022-07-25 20:54:15','2022-07-25 20:54:15'),
(4,'permission_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(5,'permission_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(6,'role_index','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(7,'role_create','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(8,'role_show','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(9,'role_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(10,'role_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(11,'user_index','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(12,'user_create','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(13,'user_show','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(14,'user_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(15,'user_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(16,'examenes_index','web','2022-07-25 20:54:15','2022-07-25 20:54:15'),
(17,'examenes_create','web','2022-07-25 20:54:15','2022-07-25 20:54:15'),
(18,'examenes_show','web','2022-07-25 20:54:15','2022-07-25 20:54:15'),
(19,'examenes_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(20,'examenes_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(21,'parametros_index','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(22,'parametros_create','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(23,'parametros_show','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(24,'parametros_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(25,'parametros_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(26,'maquilas_index','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(27,'maquilas_create','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(28,'maquilas_show','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(29,'maquilas_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(30,'maquilas_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(31,'pacientes_index','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(32,'pacientes_create','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(33,'pacientes_show','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(34,'pacientes_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(35,'pacientes_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(36,'tickets_index','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(37,'tickets_create','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(38,'tickets_show','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(39,'tickets_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(40,'tickets_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(41,'resultados_index','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(42,'resultados_create','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(43,'resultados_show','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(44,'resultados_edit','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(45,'resultados_destroy','web','2022-07-25 20:54:16','2022-07-25 20:54:16'),
(46,'resultados_autorizar','web','2022-07-25 20:54:16','2022-07-25 20:54:16')
;

CREATE TABLE users (
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  email_verified_at timestamp NULL,
  password varchar(255) NOT NULL,
  two_factor_secret text DEFAULT NULL,
  two_factor_recovery_codes text DEFAULT NULL,
  remember_token varchar(100) DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  username varchar(255) null,
  PRIMARY KEY (id)
);
INSERT INTO `users` VALUES (1,'admin','a@a.com',NULL,'$2y$10$xchASRodwuYH58CYgTt3r.RWshZp3BzYMd6T7pg3ZNZxd4d3fXzUy',NULL,NULL,NULL,'2022-09-26 19:48:41','2022-09-26 19:48:41',NULL);


create  table model_has_permissions (
permission_id bigint(20) unsigned NOT NULL auto_increment,
model_type varchar(255) NOT NULL,
model_id bigint(20) unsigned NOT NULL,
PRIMARY KEY (permission_id,model_id,model_type),
KEY model_has_permissions_model_id_model_type_index (model_id,model_type),
CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES permissions (id) ON DELETE CASCADE
);

CREATE TABLE model_has_roles (
  role_id bigint(20) unsigned NOT NULL,
  model_type varchar(255) NOT NULL,
  model_id bigint(20) unsigned NOT NULL,
  PRIMARY KEY (role_id,model_id,model_type),
  KEY model_has_roles_model_id_model_type_index (model_id,model_type),
  CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES roles (id) ON DELETE cascade
);

INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1);


CREATE TABLE role_has_permissions (
  permission_id bigint(20) unsigned NOT NULL,
  role_id bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
);
INSERT INTO role_has_permissions VALUES
(1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),
(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),
(14,1),(15,1);

CREATE TABLE password_resets (
  email varchar(255) NOT NULL,
  token varchar(255) NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  KEY password_resets_email_index (email)
);

/*No creo que sirva para algo*/
create table failed_jobs(
id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
uuid varchar(255) NOT NULL,
connection text NOT NULL,
queue text NOT NULL,
payload longtext NOT NULL,
exception longtext NOT NULL,
failed_at timestamp NOT NULL DEFAULT current_timestamp(),
PRIMARY KEY (id),
UNIQUE KEY failed_jobs_uuid_unique (uuid)
);

CREATE TABLE parametros(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  tipo varchar(255) null,
  alto float(10,2) null,
  bajo float(10,2) null,
  medicion varchar(255),
  escrito varchar (255) null,
  referencia varchar(255) null,
  respuesta int null,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
 );

CREATE TABLE examenes(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  abreviacion varchar(255) NOT NULL,
  costo float(10,2) null,
  maquila float(10,2) null,
  leyenda text null ,
  metodologia varchar(255) NULL,
  muestra varchar (255) NULL,
  PRIMARY KEY (id)
);

CREATE TABLE examenParametro(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  examenes_id bigint(20) unsigned NOT NULL,
  parametros_id bigint(20) unsigned NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT FK_examenParametro_examenId foreign key (examenes_id) references examenes(id) on update cascade on delete cascade,
  CONSTRAINT FK_examenParametro_parametroId foreign key (parametros_id) references parametros(id) on update cascade on delete cascade
 );

CREATE TABLE pacientes (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    nacimiento DATE NOT NULL,
    telefono VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE maquilas (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(255)  NULL,
    correo VARCHAR(255)  NULL,
    encargado VARCHAR(255) NOT NULL,
    telEncargado VARCHAR(255)  NULL,
    foraneo float null,
    PRIMARY KEY (id)
);

CREATE TABLE tickets(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  paciente_id bigint(20) unsigned NOT NULL,
  maquila_id bigint(20) unsigned NULL,
  total float default 0 ,
  abono float default 0 ,
  doctor varchar(250),
  pass varchar(250),
  created_at datetime NULL,
  updated_at datetime NULL,
  PRIMARY KEY (id),
  CONSTRAINT FK_tickets_examenId foreign key (paciente_id) references pacientes(id) on update cascade on delete cascade,
  CONSTRAINT FK_tickets_maquilaId foreign key (maquila_id) references maquilas(id) on update cascade on delete cascade
 ); 

CREATE TABLE tomas(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  examenes_id bigint(20) unsigned NOT NULL,
  tickets_id bigint(20) unsigned NOT NULL,
  estatus int default 0,
  nota text null,
  comentario text null,
  PRIMARY KEY (id),
  CONSTRAINT FK_tomas_examenId foreign key (examenes_id) references examenes(id) on update cascade on delete cascade,
  CONSTRAINT FK_tomas_ticketid foreign key (tickets_id) references tickets(id) on update cascade on delete cascade
 );

CREATE TABLE resultados(
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  examenes_id bigint(20) unsigned NOT NULL,
  ticket_id bigint(20) unsigned NOT NULL,
  parametros_id bigint(20) unsigned NOT NULL,
  resultado varchar(255) not null,
  PRIMARY KEY (id),
  CONSTRAINT FK_resultados_examenId foreign key (examenes_id) references examenes(id) on update cascade on delete cascade,
  CONSTRAINT FK_resultados_ticketid foreign key (ticket_id) references tickets(id) on update cascade on delete cascade,
  CONSTRAINT FK_resultados_parametroId foreign key (parametros_id) references parametros(id) on update cascade on delete cascade
 );
