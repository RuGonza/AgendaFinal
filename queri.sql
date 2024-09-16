create database datos;

use datos;

create table usuarios(
    id int AUTO_INCREMENT,
    nombre varchar(55) not null,
    apellido varchar(55) not null,
    imagen varchar(255),
    usuarios varchar(255) not null,
    password varchar(255) not null,
    id_roles int unique,
    id_eventos int unique,
    primary key(id)
);
CREATE TABLE eventos (
    id INT AUTO_INCREMENT,
    nombre_apellido VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL,
    hora_inicio TIME,
    hora_fina TIME,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES usuarios (id_eventos) ON DELETE CASCADE
);
create table roles(
    id int AUTO_INCREMENT,
    nombre_rol varchar(255) not null.
    id_permisos int unique,
    primary key(id),
    FOREIGN key (id) REFERENCES usuarios(id_roles) ON DELETE CASCADE 

)
create table permisos(
    id int AUTO_INCREMENT,
    nombre_permiso varchar(255),
    primary key(id)
    FOREIGN key (id) REFERENCES roles (id_permisos) on DELETE CASCADE
)

create table Image(
    id int AUTO_INCREMENT,
    imagen varchar(255)
)
create table ajustes(
    id int AUTO_INCREMENT,
    texto text ,
    template boolean,
    logotipo varchar(255),
    icon varchar(255),
    primary key(id)
)