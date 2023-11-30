CREATE DATABASE IF NOT EXISTS CRUD;
USE CRUD;
CREATE TABLE `usuarios`(
	`id` int(11) not null auto_increment,
    `nombre` VARCHAR (200) text not null,
    `telefono` varchar(15) not null,
    `correo` VARCHAR (200) text not null,
    `password` varchar(25) not null,
    `fecha registro` datetime not null default current_timestamp on update current_timestamp, 
    PRIMARY KEY(`id`)
) ENGINE=InnoDB;
    