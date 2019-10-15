<?php require_once("controller/CompraController.php");

session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>


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
                <!-- <li class="breadcrumb-item"><a href="#">Biblioteca</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Dados</li>
            </ol>
        </nav>
        <!-- <a class="btn nova-compra btn-outline-dark" href="view/compra/cadastrar.php" role="button">Nova compra</a> -->
    </div>