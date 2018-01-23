drop database clinic;
create database clinic;

create table clinic(
	id_clinic int auto_increment,
	name varchar(255),
	address varchar(255),
	main_MD varchar(255),
	phone_clinic varchar(255)
);

create table department(
	id_department int auto_increment,
	id_clinic int(255),
	zav varchar(255),
	phone_department varchar(255)
);

create table md(
	id_md int auto_increment,
    id_clinic int(255),
	id_department int(255),
	lastname varchar(255),
    born_year int,
    specialization varchar(255)
);



grant all privileges on *.* to daa@'localhost' identified by 'daa' with grant option;
grant all privileges on *.* to daa@'%' identified by 'daa' with grant option;