drop database if exists adoptar_mascota;

create database adoptar_mascota;

use adoptar_mascota;

create table usuarios(
id smallint not null auto_increment,
nombre varchar(100) not null,
telefono varchar(20) not null,
ciudad varchar(30) not null,
email varchar(100) not null,
edad smallint not null,
genero varchar(9) not null,
adopciones smallint not null default 0,
constraint pk_usuarios_id primary key (id)
);

create table mascotas(
id smallint not null auto_increment,
tipo varchar(6) not null,
nombre varchar(20) not null,
edad smallint not null,
raza varchar(50) not null,
descripcion varchar(100) not null,
imagen varchar(25) not null,
adoptado boolean not null default 0,
id_usuario smallint,
constraint pk_mascotas_id primary key (id),
constraint fk_mascotas_id_usuario_usuarios_id foreign key (id_usuario) references usuarios (id) on delete restrict on update restrict
);
