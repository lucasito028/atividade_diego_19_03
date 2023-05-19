create database atv_diego;

use atv_diego;

create table aluno (
id int not null auto_increment,
cod int not null,
nome varchar(45) not null,
email varchar(45) not null,
primary key(id));

insert into aluno (cod, nome, email) values 
(12, "Jao Claudio", "teste@gmail.com"),
(13, "Klepao", "krepes@gmail.com"),
(14, "Zanni Pedra", "zan@gmail.com"),
(15, "Godinho", "paocomcarne@gmail.com"),
(16, "Pedro Pedrada", "teste@gmail.com")