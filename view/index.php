<?php require_once("../controller/CompraController.php") ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <form method="get" action="cadastrar_produto.php">
    <button type="submit" class="btn btn-primary" >Nova compra</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">nome</th>
                <th scope="col">fornecedor</th>
                <th scope="col">preco</th>
                <th scope="col">quantidade</th>                
                <th scope="col">data</th>
            </tr>
        </thead>
        <tbody>
        
            <?php $compraController->listar(); ?>

        </tbody>
    </table>

</body>

</html>