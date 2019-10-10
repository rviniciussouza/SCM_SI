<?php require_once("../controller/ProdutoController.php") ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Editar Produto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php $produto = $produtoController->getById($_GET['id']); ?>

    <div style="width: 500px" >

    <form method="post" action="../controller/ProdutoController.php?action=update" id="form">
        <input type="hidden" value="<?php echo $produto['id'] ?>" name="id" required />

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputId">ID</label>
                <input type="text" class="form-control" value="<?php echo $produto['id'] ?>"  id="inputId" name="id" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" value="<?php echo $produto['nome'] ?>" name="nome" id="inputNome" placeholder="Nome" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputValor">Valor</label>
                <input type="text" class="form-control" id="inputValor" value="<?php echo $produto['valor'] ?>" name="valor" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputQuantidade">Quantidade</label>
                <input type="text" class="form-control" id="inputQuantidade" name="quantidade" value="<?php echo $produto['quantidade'] ?>" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" >Editar</button>
    </form>

</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
