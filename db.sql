CREATE DATABASE IF NOT EXISTS bancotarefas;

use bancotarefas;

 CREATE TABLE IF NOT EXISTS priorities
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
	PRIMARY KEY(id)
	 
);


 CREATE TABLE IF NOT EXISTS statuss
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
	PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS activities
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    description VARCHAR(255),
    dateatime DATETIME,
    priority_id INT NOT NULL,
    status_id INT NOT NULL,
	PRIMARY KEY(id)
);


ALTER TABLE activities ADD CONSTRAINT fk_priorities FOREIGN KEY (priority_id) REFERENCES priorities(id);

ALTER TABLE activities ADD CONSTRAINT fk_statuss FOREIGN KEY (status_id) REFERENCES statuss(id);

ALTER DATABASE bancotarefas DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO priorities (name) VALUES
('Muito Alta'),
('Alta'),
('Média'),
('Baixa');

INSERT INTO statuss (name) VALUES
('A fazer'),
('Em execução'),
('Feita');