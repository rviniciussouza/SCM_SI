# SCM SI

## Aplicação desenvolvida na disciplina SI no IFNMG.

### Começando

O primeiro passo é criar uma nova conexão no postgres, e substituir os parâmetros da conexão no arquivo init.php.

Acesse a pasta raiz do projeto e execute o seguinte comando

```
psql -U user -h localhost -a -f bd.sql
```

Esse comando vai criar o database, tabela e realizar registros de teste.
