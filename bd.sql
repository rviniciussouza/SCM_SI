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
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP baby Yoda', 'Funko', '2019-09-22', 100, 99.80, 777);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP Harry Potter', 'Funko', '2019-08-20', 100, 99.80, 778);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP Dumbledore', 'Funko', '2019-10-07', 100, 99.80, 776);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP Draco Malfoy', 'Funko', '2019-10-06', 100, 99.80, 775);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP Dobby', 'Funko', '2019-01-05', 100, 99.80, 779);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP Hermione', 'Funko', '2019-01-05', 100, 99.80, 771);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP Homem-Aranha', 'Funko', '2019-06-22', 100, 99.80, 772);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP Superman', 'Funko', '2019-06-22', 100, 99,80, 770);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Funko POP Katniss', 'Funko', '2019-11-22', 100, 99.00, 774);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Redmi NOTE 5 32GB', 'XIAOMI', '2019-09-22', 100, 999.00, 666);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Redmi NOTE 5 64GB', 'XIAOMI', '2019-05-05', 100, 1199.00, 669);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Redmi NOTE 6 64GB', 'XIAOMI', '2019-02-04', 100, 1299.00, 663);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Redmi NOTE 6 PRO 64 GB', 'XIAOMI', '2019-06-04', 100, 1399.90, 662);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Redmi NOTE 7 64GB', 'XIAOMI', '2019-07-09', 100, 1666.99, 661);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Redmi 7 64GB', 'XIAOMI', '2019-05-09', 100, 1585.00, 664);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('MI A3 124GB', 'XIAOMI', '2019-04-01', 100, 1800.00, 665);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('MI smart band 4', 'XIAOMI', '2019-03-30', 100, 259.00, 667);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('MI 8 Lite 64GB', 'XIAOMI', '2019-06-29', 100, 1999.00, 668);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Vincadores', 'NerdUniverse','2019-07-22', 100, 69.00, 555);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Rei Leão', 'NerdUniverse', '2019-02-15', 100, 69.00, 559);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Sonserina', 'NerdUniverse', '2019-04-12', 100, 59.00, 556);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Grifinoria', 'NerdUniverse', '2019-05-11', 100, 89.00, 553);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Corvinal', 'NerdUniverse', '2019-06-15', 100, 96.00, 552);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Lufa-Lufa', 'NerdUniverse', '2019-06-17', 100, 69.00, 551);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Flash', 'NerdUniverse', '2019-03-16', 100, 88.00, 554);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Arqueiro Verde', 'NerdUniverse', '2019-02-06', 100, 59.00, 557);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Demolidor', 'NerdUniverse', '2019-05-21', 100, 69.00, 558);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Camiseta Star Wars', 'NerdUniverse', '2019-05-22', 100, 69.00, 559);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro Areia Movediça', 'Saraiva', '2019-10-22', 100, 30.00, 889);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro Carry On', 'Saraiva', '2019-05-08', 100, 22.00, 886);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro 50 Tons de Cinza', 'Saraiva', '2019-04-22', 100, 14.00, 883);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro Jogos Vorazes', 'Saraiva', '2019-11-22', 100, 25.00, 881);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro Em Chamas', 'Saraiva', '2019-08-08', 100, 18.00, 882);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro Lua Nova', 'Saraiva', '2019-09-09', 100, 19.00, 884);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro Eclipse', 'Saraiva', '2019-08-12', 100, 45.00, 887);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro A Seleção', 'Saraiva', '2019-07-16', 100, 30.00, 888);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro A Elite', 'Saraiva', '2019-09-18', 100, 28.00, 885);
INSERT INTO Compra (nome, fornecedor, data, quantidade, valor, codproduto) VALUES ('Livro A Escolha', 'Saraiva', '2019-11-29', 100, 17.00, 880);
