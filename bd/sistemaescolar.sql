CREATE DATABASE SISTEMAESCOLAR_2D2;
USE SISTEMAESCOLAR_2D2;

CREATE TABLE ALUNOS(
MATRICULA INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
NOME VARCHAR(80) NOT NULL,
SEXO VARCHAR(15) NOT NULL,
EMAIL VARCHAR(100) NOT NULL,
ENDERECO VARCHAR(150) NOT NULL,
TELEFONE CHAR(15) NOT NULL,
SENHA VARCHAR(150) NOT NULL
)ENGINE=INNODB;

select * from alunos;