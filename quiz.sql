DROP  DATABASE IF  EXISTS quizUp;
CREATE DATABASE IF NOT EXISTS  quizUp; 
USE quizUp;
CREATE TABLE usuario(
	idUser INT PRIMARY KEY AUTO_INCREMENT,
	user VARCHAR (30) UNIQUE NOT NULL,
	email VARCHAR(50),
	senha VARCHAR (32) NOT NULL,
	img VARCHAR(27) default 'img/l.png',
	pontuacao INT(4) default 0
);
CREATE TABLE jogo(
	idJogo INT PRIMARY KEY AUTO_INCREMENT,
	area VARCHAR (30) NOT NULL,
	perguntas VARCHAR(30)
);
CREATE TABLE respostas(
	idRespostas INT PRIMARY KEY AUTO_INCREMENT,
	respostas longtext,
	vF INT(01),
	idJogo INT NOT NULL,
	FOREIGN KEY (idJogo) REFERENCES jogo(idJogo)
); 
