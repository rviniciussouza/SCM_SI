<?php require_once("../controller/ProdutoController.php") ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Cadastrar Produto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div style="width: 500px" >

    <form method="post" action="../controller/ProdutoController.php?action=salvar" id="form">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputId">ID</label>
                <input type="text" class="form-control" id="inputId" name="id" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFornecedor">Fornecedor</label>
                <input type="text" class="form-control" id="inputFornecedor" name="fornecedor" required>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputValor">Valor</label>
                <input type="text" class="form-control" id="inputValor" name="valor" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputQuantidade">Quantidade</label>
                <input type="text" class="form-control" id="inputQuantidade" name="quantidade" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" >Cadastrar</button>    
    </form>

    </div>

</body>

</html> 