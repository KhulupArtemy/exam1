drop database if exists db_variant1;
create database if not exists db_variant1;
use db_variant1;

create table sales(
	id int primary key auto_increment,
	fullname varchar(255),
	phone varchar(255),
    stanok varchar(255)
);

select * from sales