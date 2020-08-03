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
            //header('location:index.php');
        }
 
        $sql = "SELECT nm_socio FROM tb_socio WHERE nm_rg_socio ='".$_SESSION['login']."'
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
            <h2 class="mb-4">Quadra de tênis 02</h2>
            <?php

                    $con = mysqli_connect("127.0.0.1", "root", "", "bd_clube") or die
                    ("Sem conexão com o servidor");
    
                    $acao = $_GET['acao'];
    
                    if(isset($_GET['id']))
                    {
                        $cod = $_GET['id'];
                    }
    
                    switch ($acao) {
                        case 'montar':
                            $sql = "SELECT a.cod_aluguel, a.cod_instalacao, i.nm_instalacao, i.vl_instalacao, a.dt_aluguel, s.nm_socio, s.cod_socio 
                            FROM tb_pagamento AS p 
                            INNER JOIN tb_aluguel AS a ON p.cod_aluguel = a.cod_aluguel
                            INNER JOIN tb_instalacao AS i ON a.cod_instalacao = i.cod_instalacao
                            INNER JOIN tb_socio AS s ON p.cod_socio = s.cod_socio
                            WHERE a.cod_aluguel = '$cod'"; //Prestar atenção aqui!!! Se der erro colocar "user id = ". $id;
                            $resultado = mysqli_query($con, $sql) or die ("Erro ao retornar o valor do banco de dados.");
                            echo "<form method='post' name='dados' action='indexLocacoesTenis02.php?acao=atualizar' onSubmit='return enviardados();'>";
                            echo "<table width='588' border='0' align='center'>";
    
                            while($registro = mysqli_fetch_array($resultado)){
                                echo "<tr>";
                                echo "<td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>Código do pagamento:</font></td>";
                                echo "<td width='460'>";
                                echo " <input name='id' type='text' class='formbutton' id='id' size='52' maxlength='150' value=".$cod." readonly>";
                                echo "</td>";
                                echo "</tr>";
    
                                echo "<tr>";
                                echo "<td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>Código da aula:</font></td>";
                                echo "<td width='460'>";
                                echo " <input name='data' type='date' class='formbutton' id='dataa' size='52' maxlength='150' value=".$registro['dt_aluguel'].">";
                                echo "</td>";
                                echo "</tr>";
    
                                echo "<tr>";
                                echo "<td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>Código sócio:</font></td>";
                                echo "<td width='460'>";
                                echo " <input name='codsocio' type='text' class='formbutton' id='codsocio' size='52' maxlength='150' value=".$registro['cod_socio'].">";
                                echo "</td>";
                                echo "</tr>";
    
                                echo "<tr><tr>";
                                echo "<td height='22'></td>";
                                echo "<td>";
                                echo "<input name='Submit' type='submit'  class='formobjects' value='Enviar dados'>";
                                echo "<input name='Reset' type='reset' class='formobjects' value='Redefinir'>";
                                echo "<button type='submit' formaction='indexLocacoesTenis02.php?acao=selecionar'>Selecionar</button>";
                                echo"</td>";
                                echo "</tr></th>";
                                echo"</form>";
                            }
    
                            echo "</table></form>";
                            mysqli_close($con);
                        break;

                        case 'atualizar':
                            $cod = $_POST['id'];
                            $data = $_POST['data'];
                            $socio = $_POST['codsocio'];
                    
                            $sql2 = "UPDATE tb_aluguel SET dt_aluguel = '$data' WHERE cod_aluguel = '$cod'";
                            $sql = "UPDATE tb_pagamento SET cod_socio = '$socio' WHERE cod_aluguel = '$cod'";
                    
                            if(!mysqli_query($con, $sql)){
                                die("Erro ao inserir os dados: ". mysqli_error($con));
                            }else if(!mysqli_query($con, $sql2)){
                                die("Erro ao inserir os dados: ". mysqli_error($con));
                            }
                            else{
                                echo("<script>alert('Dados atualizados com sucesso.');</script>");
                            }
                            mysqli_close($con);
                            header("Location:indexLocacoesTenis02.php?acao=selecionar");
                        break;
    
    
                        case 'inserir':
                            $dtaluguel = $_POST['dtaluguel'];
                            $socio = $_POST['codsocio'];
    
    
                            $sql = "INSERT INTO tb_aluguel (cod_instalacao, dt_aluguel) VALUES (2,'$dtaluguel')";
                            $sql2 = "INSERT INTO tb_pagamento (cod_aluguel, cod_socio) VALUES (LAST_INSERT_ID(), '$socio')";
                            if(!mysqli_query($con, $sql)){
                                die("Erro ao inserir os dados: ".mysqli_error($con));
                            } else if (!mysqli_query($con, $sql2)){
                                die("Erro ao inserir os dados: ".mysqli_error($con));
                            } 
                            else{
                               echo "<script>alert('Dados inseridos com sucesso!');</script>";
                            }
                            mysqli_close($con);
                            header("Location:indexLocacoesTenis02.php?acao=selecionar");
                        break;
    
                        case 'deletar':
    
                        $cod = $_GET['id'];
                        if(!mysqli_query($con, "DELETE FROM tb_pagamento WHERE cod_aluguel = $cod")){
                            die("Erro ao inserir os dados: ".mysqli_error($con));
                        }
                        else if (!mysqli_query($con, "DELETE FROM tb_aluguel WHERE cod_aluguel = $cod")){
                            die("Erro ao inserir os dados: ".mysqli_error($con));                
                        }
                        else{
                            echo "<script>alert('Dados inseridos com sucesso!');</script>";
                         }

                         mysqli_close($con);

    
                        header("Location:indexLocacoesTenis02.php?acao=selecionar");
                        break;
    
                        case 'selecionar':
                            date_default_timezone_set('America/Sao_Paulo');
                            header("Content-type: text/html; charset=utf-8");
                            echo"<meta charset='UTF-8'>";
                            echo "<center><a href='indexInsertTenis02.php'><img src='img/insert_crud.png' alt='Inserir' title='Inserir Registro' registro'></center><br/>";
                            echo "<center><table border=1>";
                            echo "<tr>";
                            echo "<th>CÓDIGO INSTALACAO</th>";
                            echo "<th>INSTALAÇAO</th>";
                            echo "<th>VALOR</th>";
                            echo "<th>DATA ALUGUEL</th>";
                            echo "<th>NOME SÓCIO</th>";
                            echo "<th>CÓDIGO SÓCIO</th>";
                            echo "<th>AÇÃO</th>";
                            echo "</tr>";
            
                            $sql = "SELECT a.cod_aluguel, a.cod_instalacao, i.nm_instalacao, i.vl_instalacao, a.dt_aluguel, s.nm_socio, s.cod_socio
                            FROM tb_pagamento AS p 
                            INNER JOIN tb_aluguel AS a ON p.cod_aluguel = a.cod_aluguel
                            INNER JOIN tb_instalacao AS i ON a.cod_instalacao = i.cod_instalacao
                            INNER JOIN tb_socio AS s ON p.cod_socio = s.cod_socio
                            WHERE a.cod_instalacao = 2";
                            $resultado = mysqli_query($con, $sql) or die ("Erro ao retornar o valor do banco de dados.");
                            while ($registro = mysqli_fetch_array($resultado)){
            
                                $codaluguel = $registro['cod_aluguel'];
                                $codinstalacao = $registro['cod_instalacao'];
                                $nomeinstalacao = $registro['nm_instalacao'];
                                $vlinstalacao = $registro['vl_instalacao'];
                                $dtaluguel = $registro['dt_aluguel'];
                                $nomesocio = $registro['nm_socio'];
                                $codsocio = $registro['cod_socio'];
                        
                                echo "<tr>";
                                echo "<td>".$codinstalacao."</td>";
                                echo "<td>".$nomeinstalacao."</td>";
                                echo "<td>".$vlinstalacao."</td>";
                                echo "<td>".date("d/m/Y",strtotime($dtaluguel))."</td>";
                                echo "<td>".$nomesocio."</td>";
                                echo "<td>".$codsocio."</td>";
                                echo "<td><a href='indexLocacoesTenis02.php?acao=deletar&id=$codaluguel'><img src='img/delete_crud.png' alt='Deletar' title='Deletar' registro'>
                                <a href='indexLocacoesTenis02.php?acao=montar&id=$codaluguel'><img src='img/update_crud.png' alt='Atualizar' title='Atualizar' registro'>
                                <a href='indexInsertTenis02.php'><img src='img/insert_crud.png' alt='Inserir' title='Inserir Registro' registro'></td>";
                            }
                            echo "</tr></table></center>";
                        break;
                            
                        default:
                        header("Location:indexLocacoesTenis02.php?acao=selecionar");
                        break;
                        }                    
            ?>
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