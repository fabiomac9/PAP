<?php
session_start();
require('connect.php');
if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
} else $cmd = 'home';
if (isset($_SESSION['type'])) {
    $type = $_SESSION['type'];
} else $type = 2;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FMAC BIKE</title>
    <link rel="icon de site" href="img/logotipo1.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>


   <!-- <h1 class="site-heading text-center text-white d-none d-lg-block">
    <a href="#" class="gallery-link"><img width="200" height="150" src="img/logotipo.png" alt="" class="img-responsive" /></a>
        <span class="site-heading-lower">descrisao asdaasmd</span>
    </h1>-->

    <!-- Navigation -->

    <?php
    switch ($type) {
        case 1: {
    ?>
                <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav mx-auto"> 
                                <li class="nav-item active px-lg-4">
                                    <a style="color: #FFFFFF;" class="nav-link text-uppercase text-expanded" href="index.php?cmd=produtos">Produtos do Site</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a style="color: #FFFFFF;" class="nav-link text-uppercase text-expanded" href="index.php?cmd=Utilizadores">Utilizadores</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a style="color: #FFFFFF;" class="nav-link text-uppercase text-expanded" href="index.php?cmd=TipoUtilizadores">Tipos de Utilizadores</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a style="color: #FFFFFF;" class="nav-link text-uppercase text-expanded" href="index.php?cmd=Produtos">Produtos</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a style="color: #FFFFFF;" class="nav-link text-uppercase text-expanded" href="index.php?cmd=TipoProdutos">Tipo de Produtos</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <?= isset($_SESSION['mail']) ? '<a style="color: #FFFFFF;" class="nav-link text-uppercase text-expanded" href="index.php?cmd=logout ">Logout</a>' : '<a class="nav-link text-uppercase text-expanded" data-toggle="modal" data-target="#exampleModal" href="#">entrar</a>' ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            <?php
                break;
            }
        case 2: {
            ?>
                <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#" img src="img/logotipo1.png"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item active px-lg-4">
                                    <a href="index.php" class="gallery-link"><img width="70" height="50" src="img/logotipo1.png" alt="" class="img-responsive" /></a>
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a style="color: #FFFFFF;" class="nav-link text-uppercase text-expanded" href="index.php?cmd=produtos">Produtos</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <?= isset($_SESSION['mail']) ? '<a class="nav-link text-uppercase text-expanded" href="index.php?cmd=logout "><font color="#FFFFFF">Logout</a>' : '<a class="nav-link text-uppercase text-expanded" data-toggle="modal" data-target="#exampleModal" href="#"><font color="#FFFFFF">Entrar</a>' ?>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <?= isset($_SESSION['mail']) ? '<a href="?cmd=carrinho" style="background-color: #720f19;color: black;border-color: #720f19;font-size: bold" class="btn btn-primary" ><b>Carrinho (<span class="total-count"></span>)</a> </a>' : "" ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

    <?php
                break;
            }
        case 3: {
            ?>
                <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#" img src="img/logotipo1.png"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item active px-lg-4">
                                    <a href="index.php" class="gallery-link"><img width="70" height="50" src="img/logotipo1.png" alt="" class="img-responsive" /></a>
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a style="color: #720f19;" class="nav-link text-uppercase text-expanded" href="index.php?cmd=produtos">GERENTE</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <?= isset($_SESSION['mail']) ? '<a class="nav-link text-uppercase text-expanded" href="index.php?cmd=logout "><font color="#720f19">Logout</a>' : '<a class="nav-link text-uppercase text-expanded" data-toggle="modal" data-target="#exampleModal" href="#"><font color="#720f19">Entrar</a>' ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

    <?php
                break;
            }
    }


    switch ($cmd) {
        case 'home': {
                require('home.php');
                break;
            }
        case 'carrinho': {
                require('carrinho.php');
                break;
            }
        case 'bicicletas': {
                require('bicicletas.php');
                break;
            }
        case 'products': {
                require('products.php');
                break;
            }
        case 'produtos': {
                require('produtos.php');
                break;
            }
        case 'acessorios': {
                require('acessorios.php');
                break;
            }
        case 'componentes': {
                require('componentes.php');
                break;
            }
        case 'Utilizadores': {
                require('api/api-users.php');
                break;
            }
        case 'editar-utilizador': {
                require('api/form-editarutilizador.php');
                break;
            }
        case 'editarutilizador': {
                require('api/api-editarutilizador.php');
                break;
            }
        case 'apagar-utilizador': {
                require('api/api-apagarutilizador.php');
                break;
            }
        case 'add-utilizadores': {
                require('api/form-addutilizadores.php');
                break;
            }
        case 'addutilizadores': {
                require('api/api-addutilizadores.php');
                break;
            }
        case 'TipoUtilizadores': {
                require('api/api-tipoutilizadores.php');
                break;
            }
        case 'editar-tipoutilizadores': {
                require('api/form-editartipoutilizadores.php');
                break;
            }
        case 'editartipoutilizadores': {
                require('api/api-editartipoutilizadores.php');
                break;
            }
        case 'apagar-tipoutilizadores': {
                require('api/api-apagartipoutilizador.php');
                break;
            }
        case 'add-tipoutilizadores': {
                require('api/form-addtipoutilizadores.php');
                break;
            }
        case 'addtipoutilizadores': {
                require('api/api-addtipoutilizadores.php');
                break;
            }
        case 'Produtos': {
                require('api/api-produtos.php');
                break;
            }
        case 'add-produto': {
                require('api/form-addproduto.php');
                break;
            }
        case 'addprodutos': {
                require('api/api-addproduto.php');
                break;
            }
        case 'apagar-produtos': {
                require('api/api-apagarproduto.php');
                break;
            }
        case 'editar-produto': {
                require('api/form-editarproduto.php');
                break;
            }
        case 'editarproduto': {
                require('api/api-editarproduto.php');
                break;
            }
        case 'TipoProdutos': {
                require('api/api-tipoprodutos.php');
                break;
            }
        case 'add-tipoprodutos': {
                require('api/form-addtipoprodutos.php');
                break;
            }
        case 'addtipoprodutos': {
                require('api/api-addtipoproduto.php');
                break;
            }
        case 'editar-tipoprodutos': {
                require('api/form-editartipoprodutos.php');
                break;
            }
        case 'editartipoprodutos': {
                require('api/api-editartipoprodutos.php');
                break;
            }
        case 'apagar-tipouprodutos': {
                require('api/api-apagartipouprodutos.php');
                break;
            }
        case 'entrar': {
                require('api/api-login.php');
                break;
            }
        case 'logout': {
                require('api/api-logout.php');
                break;
            }
        case 'registar': {
                require('api/form-registar.php');
                break;
            }
        case 'registo': {
                require('api/api-registar.php');
                break;
            }
    }
    ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #720f19;">Entrar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index.php?cmd=entrar" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="color: #720f19;">Email</label>
                            <input type="email" autocomplete="false" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="color: #720f19;">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                </div>
                <div class="modal-body">
                    <button style="background-color: white;border-color:#720f19;color:black" type="submit" class="btn btn-primary">Entrar</button>
                    <p style="color: black;">Ainda não tem conta?<a href="index.php?cmd=registar">Registe-se agora</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

<style>
    .footer{
    background-color: black;

}
</style>

    <footer class="footer text-center py-4">
            <img width="80" height="70" src="img/logotipo1.png">
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>