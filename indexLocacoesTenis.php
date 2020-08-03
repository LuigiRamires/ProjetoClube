<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $con = mysqli_connect("127.0.0.1", "root", "", "bd_clube") or die
        ("Sem conexão com o servidor");
        session_start();
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:index.php');
        }
 
        $sql = "SELECT nm_socio FROM tb_socio WHERE nm_rg_socio ='".$_SESSION['login']."'
 WHERE nm_rg_socio ='".$_SESSION['login']."'
";
        $resultado = mysqli_query($con, $sql) or die ("Erro ao retornar o valor do banco de dados.");
        while ($registro = mysqli_fetch_array($resultado)){
            
            $logado = $registro['nm_socio'];
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube SPEtec</title>
    <link rel="shortcut icon" href="img/club-logo.ico" />
    <link rel="stylesheet" href="style/styleLogou.css">
    <link rel="stylesheet" href="style/styleTabelas.scss">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(img/bg_1.jpg);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(images/logo.jpg);"></div>
                    <?php
                        echo"<h3>$logado</h3>";
                    ?>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="indexLogou.php"><span class="fa fa-home mr-3"></span> Início</a>
                </li>
                <li>
                    <a href="indexLocacoes.php"><span class="fas fa-glass-cheers mr-3"></span> Locações</a>
                </li>
                <li>
                    <a href="indexAulas.php"><span class="fas fa-running mr-3"></span> Aulas</a>
                </li>
                <li>
                    <a href="indexSocios.php?acao=selecionar"><span class="fa fa-cog mr-3"></span>Configurações</a>
                </li>
                <li>
                    <a href="sair.php"><span class="fa fa-sign-out mr-3"></span> Desconectar</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Quadras de tênis</h2>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tênis 01</h5>
                        <p class="card-text">Clique <a href="indexLocacoesTenis01.php?acao=selecionar">aqui</a> para obter as datas locadas.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Professor - Alexandro</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Tênis 02</h5>
                        <p class="card-text">Clique <a href="indexLocacoesTenis02.php?acao=selecionar">aqui</a> para obter as datas locadas.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Professor - Alexandro</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Tênis 03</h5>
                        <p class="card-text">Clique <a href="indexLocacoesTenis03.php?acao=selecionar">aqui</a> para obter as datas locadas.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Professor - Alexandro</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Tênis 04</h5>
                        <p class="card-text">Clique <a href="indexLocacoesTenis04.php?acao=selecionar">aqui</a> para obter as datas locadas.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Professor - Alexandro</small>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a31af2c148.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
        });
    </script>
    <script>
        (function ($) {

            "use strict";

            var fullHeight = function () {

                $('.js-fullheight').css('height', $(window).height());
                $(window).resize(function () {
                    $('.js-fullheight').css('height', $(window).height());
                });

            };
            fullHeight();

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        })(jQuery);

    </script>
</body>

</html>
<!--echo"Bem vindo $logado";-->