CREATE TABLE usuario (
	pk_usuario int not null PRIMARY KEY AUTO_INCREMENT,
	email_usuario varchar(100),
	senha_usuario  varchar(500)
);

CREATE TABLE genero(
    pk_genero int not null PRIMARY KEY AUTO_INCREMENT,
	nome_genero varchar(100)
);

CREATE TABLE banda(
    pk_banda int not null PRIMARY KEY AUTO_INCREMENT,
	nome_banda varchar(100),
	fk_genero int not null,
	FOREIGN KEY (fk_genero) REFERENCES genero (pk_genero),
	numero_integrantes_banda int,
	ano_formacao_banda year,
    total_albuns_banda int
);

CREATE TABLE album(
    pk_album int not null PRIMARY KEY AUTO_INCREMENT,
	nome_album varchar(250),
	total_musica_album int,
	data_lancamento_album date,
	tempo_duracao_album time,
	fk_banda int not null,
	FOREIGN KEY (fk_banda) REFERENCES banda (pk_banda)
);


insert into genero(nome_genero) VALUES ("Rock");

insert into genero(nome_genero) VALUES ("Heavy metal");

insert into usuario (email_usuario,senha_usuario) VALUES ("felipevoigt1@hotmail.com","felipe")
