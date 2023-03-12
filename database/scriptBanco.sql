CREATE TABLE TipoPerfil (
    id_tipo INT AUTO_INCREMENT,
    nome_tipo VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_tipo)
);

INSERT INTO TipoPerfil (nome_tipo) VALUES ("Administrador");
INSERT INTO TipoPerfil (nome_tipo) VALUES ("Usuário");

CREATE TABLE Cadastro (
    nome VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(30),
    data_nasc DATE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    id_tipo INT,
    PRIMARY KEY (email),
    FOREIGN KEY (id_tipo) REFERENCES TipoPerfil (id_tipo)

);

INSERT INTO Cadastro (nome, email, telefone, data_nasc, senha, id_tipo) VALUES ("ADM", "adm.ofc@gmail.com", "16988508074", "2004-01-01", "29bcc666111c0eee52bf5758c4d65d2f", 1);