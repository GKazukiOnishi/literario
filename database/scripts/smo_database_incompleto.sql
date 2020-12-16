CREATE TABLE `usuario` (
	`nome` varchar(255) NOT NULL,
	`senha` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`prontuario` varchar(255) NOT NULL UNIQUE,
	`biografia` varchar(255) NOT NULL,
	`id_usuario` int(10) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_usuario`)
);

CREATE TABLE `area` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`nome` varchar(60) NOT NULL,
	`id_conteudo` int(60) NOT NULL,
	`nivel` int(2) NOT NULL,
	`icone` varchar(255) NOT NULL,
	`img` varchar(255) NOT NULL,
	`descricao` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `conteudo` (
	`id` int(10) NOT NULL,
	`id_usuario` int(10) NOT NULL
);

CREATE TABLE `professor` (
	`graduacao` varchar(255) NOT NULL,
	`id_professor` int(10) NOT NULL AUTO_INCREMENT,
	`id_usuario` int(10) NOT NULL,
	`biografia` varchar(100) NOT NULL,
	PRIMARY KEY (`id_professor`)
);

CREATE TABLE `aluno` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`id_professor` int(10) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `arquivo` (
	`id` int(10) NOT NULL,
	`id_area` int(10) NOT NULL,
	`caminho` varchar(255) NOT NULL,
	`extensao` varchar(10) NOT NULL,
	`nome` varchar(10) NOT NULL,
	`data_modificacao` DATE NOT NULL,
	`data_criacao` DATE NOT NULL,
	`tipo` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `exercicio` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`nome` varchar(70),
	`enunciado` TEXT(1500) NOT NULL,
	`cod_tipo` longtext(400) NOT NULL,
	`id_area` int(10) NOT NULL,
	`caminho` varchar(255),
	`tipo` varchar(255) NOT NULL,
	`id_arquivo` varchar(255),
	PRIMARY KEY (`id`)
);

CREATE TABLE `resolucao` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`resposta` TEXT(255) NOT NULL AUTO_INCREMENT,
	`id_exercicio` varchar(255) NOT NULL,
	`tipo` TEXT(255) NOT NULL,
	`id_arquivo` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `alternativa` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`id_exercicio` int(10) NOT NULL,
	`texto` TEXT(4000) NOT NULL,
	`ind_correto` BOOLEAN NOT NULL,
	`ordem` int(1) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `area` ADD CONSTRAINT `area_fk0` FOREIGN KEY (`id_conteudo`) REFERENCES `conteudo`(`id`);

ALTER TABLE `conteudo` ADD CONSTRAINT `conteudo_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `professor`(`id_professor`);

ALTER TABLE `professor` ADD CONSTRAINT `professor_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id_usuario`);

ALTER TABLE `aluno` ADD CONSTRAINT `aluno_fk0` FOREIGN KEY (`id_professor`) REFERENCES `professor`(`id_professor`);

ALTER TABLE `arquivo` ADD CONSTRAINT `arquivo_fk0` FOREIGN KEY (`id_area`) REFERENCES `area`(`id`);

ALTER TABLE `exercicio` ADD CONSTRAINT `exercicio_fk0` FOREIGN KEY (`cod_tipo`) REFERENCES `tipo_exercicio`(`cod`);

ALTER TABLE `exercicio` ADD CONSTRAINT `exercicio_fk1` FOREIGN KEY (`id_area`) REFERENCES `area`(`id`);

ALTER TABLE `exercicio` ADD CONSTRAINT `exercicio_fk2` FOREIGN KEY (`id_arquivo`) REFERENCES `arquivo`(`id`);

ALTER TABLE `resolucao` ADD CONSTRAINT `resolucao_fk0` FOREIGN KEY (`id_exercicio`) REFERENCES `exercicio`(`id`);

ALTER TABLE `resolucao` ADD CONSTRAINT `resolucao_fk1` FOREIGN KEY (`id_arquivo`) REFERENCES `arquivo`(`id`);

ALTER TABLE `alternativa` ADD CONSTRAINT `alternativa_fk0` FOREIGN KEY (`id_exercicio`) REFERENCES `exercicio`(`id`);

