CREATE DATABASE NotiCidade;
USE NotiCidade;

CREATE TABLE IF NOT EXISTS Categoria_Noticia (
    id int auto_increment NOT NULL,
    nome varchar(30) NOT NULL,
    primary key (id)
);

CREATE TABLE IF NOT EXISTS Noticia (
    id int auto_increment NOT NULL,
    titulo text NOT NULL,
    manchete text NOT NULL,
    conteudo text NOT NULL,
    image_link text NOT NULL,
    data_post TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id_categoria int NOT NULL,
    primary key (id),
    foreign key (id_categoria) references Categoria_Noticia (id)
);

CREATE TABLE IF NOT EXISTS Usuarios (
    id int auto_increment NOT NULL,
    username varchar(80) NOT NULL,
    email varchar(150) NOT NULL,
    senha varchar(32) NOT NULL,
    primary key (id)
);