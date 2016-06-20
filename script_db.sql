create database CRUD default character set utf8;

	create table secciones (id int(11) auto_increment not null primary key,
							nombre varchar(80) not null
							);

	create table estudiantes (id int(11) auto_increment not null primary key,
							nombre varchar(200) not null,
							edad int(11) not null,
							promedio double not null,
							imagen varchar(200) not null,
							id_seccion int(11) not null
							 );