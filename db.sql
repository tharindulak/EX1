create database ServiceStation;

create table Owner(
	id varchar(10),
	name varchar(30),
	gender varchar(10),
	address varchar(100),
	email varchar(50),
	nosVehicle int,
	contact varchar(11),
	CONSTRAINT PRIMARY KEY(id)
)ENGINE=INNODB;