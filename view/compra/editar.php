<?php require_once($_SERVER['DOCUMENT_ROOT']."SCM_SI/controller/CompraController.php") ?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Compras</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/SCM_SI/asset/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    </head>
<body>


<nav class="navbar navbar-light bg-light navbar-expand-lg ">
    <a class="navbar-brand" href="/SCM_SI">SCM</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <!-- <li class="nav-item">
                <a class="nav-link" href="view_selecoes.php">Seleções</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="view_atleta.php">Atletas</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="view_arbitro.php">Árbitro</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="get_relatorio.php">Relatório</a>
            </li> -->
        </ul>
    </div>
</nav>

    <div class = "title-page">
       <h3>Editar compra</h3>
        <a class="btn nova-compra btn-success" href="view/compra/cadastrar.php" role="button">Nova compra</a>
    </div>

    <div class="conteudo"> 

    <!-- <div style="width: 500px" > -->
    <?php $compra = $compraController->getById($_GET['codigo']); ?>

<form method="post" action="/../SCM_SI/controller/CompraController.php?action=update" id="form">
    <input type="hidden" value="<?php echo $compra['codigo'] ?>" name="codigo" required />

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNome">Nome</label>
            <input type="text" class="form-control" value="<?php echo $compra['nome'] ?>" name="nome" id="inputNome" placeholder="Nome" required>
        </div>

        <div class="form-group col-md-6">
            <label for="inputFornecedor">Fornecedor</label>
            <input type="text" class="form-control" value="<?php echo $compra['fornecedor'] ?>" name="fornecedor" id="inputFornecedor" placeholder="Forncedor" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputValor">Valor</label>
            <input type="text" class="form-control" id="inputValor" value="<?php echo $compra['valor'] ?>" name="valor" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputQuantidade">Quantidade</label>
            <input type="text" class="form-control" id="inputQuantidade" name="quantidade" value="<?php echo $compra['quantidade'] ?>" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" >Editar</button>
</form>

<!-- </div> -->
</div>
</body>

</html>
