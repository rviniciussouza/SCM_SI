# SCM SI

## Aplicação desenvolvida na disciplina SI no IFNMG.

### Começando

O primeiro passo é criar uma nova conexão no postgres, e substituir os parâmetros da conexão no arquivo init.php.

Acesse a pasta raiz do projeto e execute o seguinte comando

```
psql -U user -h localhost -a -f bd.sql
```

Esse comando vai criar o database, tabela e realizar registros de teste.



## API Ultimacompra

Para consumir nosso serviço que retorna a data da última compra de um determinado produto, é necessário enviar uma requisição via GET para o seguinte endereço: http://scm-si.herokuapp.com/service/ultimacompra.php/?codproduto=''&token=''

### Parâmetros
código do produto e o token do serviço que está realizando a requisição. 

### Retorno da requisição (JSON)

Se o código do produto e o token forem válidos, o sistema retorna o status da requisição e data da última compra.
Exemplo:
```php
{"status":"true","data":"1997-10-22"}
```
Se apenas o token for inválido, o sistema retorna a seguinte saída 
```php
{"status":false,"detalhes":"token invalido"}
```

Se apenas o codigo do produto for inválido, o sistema retorna a seguinte saída 
```php
{"status":false,"detalhes":"codigo do produto invalido"}
```
