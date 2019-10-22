<?php require_once("controller/CompraController.php");

session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

?>
<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  // we will fill this out next
  return "dbname=df4j5o5sohms3p host=ec2-174-129-252-228.compute-1.amazonaws.com port=5432 user=bbkylaoouxslnh password=9f1bbc8e5dcb80fd76e57bd51be799bc7f0ba54b4b8974ac3b1cb07d6e82933d sslmode=require";
  
}
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error.";
    exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Compras</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ad7b506960.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/SCM_SI/asset/css/style.css">
</head>

<body>

    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Operação realizada com sucesso!.
    </div>

    <div class="alert alert-danger" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Danger!</strong> Essa operação não pode ser realizada!.
    </div>

    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: 	#337ab7">
        <a class="navbar-brand" href="#"><i class="fas fa-dolly icon-brand"></i>SCM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="btn nova-compra btn-outline-light" href="view/compra/cadastrar.php" role="button">Nova compra</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/rviniciussouza/SCM_SI"><i class="fab fa-github"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="controller/LoginController.php?action=logout"><i class="fas fa-sign-out-alt"></i></a>
                </li>


            </ul>
        </div>
    </nav>


    <div class="title-page">
        <h3 style="align-self: center;">Compras</h3>
        <nav aria-label="breadcrumb" style="align-self: center; !important">
            <ol class="breadcrumb my-auto">
                <li class="breadcrumb-item active"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dados</li>
            </ol>
        </nav>
    </div>

    <div class="conteudo">



        <table id="data-table" class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome do produto</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>

                <?php $compraController->listar(); ?>

            </tbody>
        </table>
    </div>
</body>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="asset/javascript/index.js"></script>

</html>