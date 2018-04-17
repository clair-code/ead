select * from teste;
INSERT INTO `syschaves`.`teste` (`id`, `nome`, `sobrenome`, `telefone`, `endereco`) VALUES ('1', 'JOAO', 'XXX', '1121', 'ADAS');
ALTER TABLE `syschaves`.`teste` MODIFY COLUMN `id` int(11) AUTO_INCREMENT;


CREATE TABLE usuario (
    id int NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    senha varchar(255) NOT NULL,
    nome varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE chaves (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(255),
    status boolean,
    PRIMARY KEY (id)
);

CREATE TABLE movimentacao (
    id int NOT NULL AUTO_INCREMENT,
    usuario_id int,
    chave_id int,
    observacao varchar(255),
    hora_retirada varchar(255),
    hora_devolucao varchar(255) ,
    data  varchar(255),
    PRIMARY KEY (id)
);

