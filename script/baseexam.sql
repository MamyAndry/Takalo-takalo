create database takalo;

use takalo;

create table utilisateur(
    iduser int auto_increment primary key,
    nom varchar(40) not null,
    email varchar(50) not null,
    password varchar(50) not null,
    estadmin int not null
);

create table categorie (
    idCategorie int auto_increment primary key,
    nom varchar(40)
);

create table objet (
    idObjet int auto_increment primary key,
    idUtilisateur int not null,
    idCategorie int not null,
    nom varchar(40),
    description varchar(200),
    prix double not null,
    foreign key (idUtilisateur) REFERENCES utilisateur(iduser),
    foreign key (idCategorie) REFERENCES categorie(idCategorie)
);


create table echange(
    idechange int auto_increment primary key,
    idUser1 int not null,
    idUser2 int not null,
    idObjet1 int not null,
    idObjet2 int not null,
    etatechange int not null,
    dateechange datetime
);

create table photo (
    idObjet int,
    nom varchar(100)
);

insert into utilisateur values (null,'Kanto','kanto@gmail.com','kanto',1);
insert into utilisateur values (null,'Koto','koto@gmail.com','koto',0);
insert into utilisateur values (null,'Fy','fy@gmail.com','fy',0);

insert into categorie values (null,'Cat1');
insert into categorie values (null,'Cat2');
insert into categorie values (null,'Cat3');

