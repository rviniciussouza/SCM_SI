CREATE DATABASE SI;

\c si;

CREATE TABLE Compra (
	codigo serial NOT NULL PRIMARY KEY,
	codproduto INT NOT NULL,
	nome VARCHAR(50) NOT NULL,
	fornecedor VARCHAR(50) NOT NULL,
	valor DECIMAL(10, 2) NOT NULL,
	data DATE NOT NULL,
	quantidade INT NOT NULL
);


INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('TV 4K', 'LG', '2019-10-22', 100, 2000.00, 4);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Smartphone K2', 'Motorola', '2019-10-21', 50, 800.00, 5);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Notebook Inspiron 4000', 'DELL', '2019-10-20', 200, 2500.00, 8);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Smart TV LED 40', 'Panasonic', '2019-10-22', 30, 2184.00, 11);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Impressona Multifuncional', 'HP', '2019-10-22', 100, 719.00, 15);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Fogão 4 bocas F04', 'Consult', '2019-10-22', 100, 539.00, 12);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Geladeira Frost Free', 'Brastemp', '2019-10-22', 100, 3329.00, 9);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Pen drive Twist 32 GB', 'Multilaser', '2019-10-22', 100, 30.00, 22);
