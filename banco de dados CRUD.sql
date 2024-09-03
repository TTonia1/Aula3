create database crud_system_tonia;
use crud_system_tonia;

CREATE TABLE usuario(
    id_crud INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE = InnoDB;
SELECT * FROM usuario;