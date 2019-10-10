CREATE TABLE Compra (
	codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_produto INT NOT NULL,
	nome VARCHAR(50) NOT NULL,
	fornecedor VARCHAR(50) NOT NULL,
	valor DECIMAL NOT NULL,
	data DATE NOT NULL,
	quantidade INT NOT NULL
);
