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
 
        $sql = "SELECT nm_socio FROM tb_socio";
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
            <h2 class="mb-4">Sócios</h2>
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
                            $sql = "SELECT * FROM tb_socio WHERE cod_socio = '$cod'"; //Prestar atenção aqui!!! Se der erro colocar "user id = ". $id;
                            $resultado = mysqli_query($con, $sql) or die ("Erro ao retornar o valor do banco de dados.");
                            echo "<form method='post' name='dados' action='indexSocios.php?acao=atualizar' onSubmit='return enviardados();'>";
                            echo "<table width='588' border='0' align='center'>";
    
                            while($registro = mysqli_fetch_array($resultado)){
                                echo "<tr>";
                                echo "<td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>Código:</font></td>";
                                echo "<td width='460'>";
                                echo " <input name='id' type='text' class='formbutton' id='id' size='52' maxlength='150' value=".$cod." readonly>";
                                echo "</td>";
                                echo "</tr>";
    
                                echo "<tr>";
                                echo "<td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>Nome completo:</font></td>";
                                echo "<td width='460'>";
                                echo " <input name='nome' type='text' class='formbutton' id='nome' size='52' maxlength='150' value=".$registro['nm_socio'].">";
                                echo "</td>";
                                echo "</tr>";
    
                                echo "<tr>";
                                echo "<td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>Data admissão:</font></td>";
                                echo "<td width='460'>";
                                echo " <input name='dataadmis' type='date' class='formbutton' id='dataadmis' size='52' maxlength='150' value=".$registro['dt_admissao_socio'].">";
                                echo "</td>";
                                echo "</tr>";
    
                                echo "<tr>";
                                echo "<td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>RG:</font></td>";
                                echo "<td width='460'>";
                                echo " <input name='rg' type='text' class='formbutton' id='rg' value=".$registro['nm_rg_socio'].">";
                                echo "</td>";
                                echo "</tr>";
        
                                echo "<tr>";
                                echo "<td><font face='Verdana, Arial, Helvetica, sans-serif'><font size='1'>Data de nascimento:</font></font></td>";
                                echo "<td rowspan='2'><font size='2'>";
                                echo " <input name='datanasc' type='date' class='formbutton' id='datanasc' value=".$registro['dt_nasc_socio'].">";
                                echo "</font>";
                                echo "</td>";
                                echo "</tr>";
    
                                echo "<tr><tr>";
                                echo "<td height='22'></td>";
                                echo "<td>";
                                echo "<input name='Submit' type='submit'  class='formobjects' value='Enviar dados'>";
                                echo "<input name='Reset' type='reset' class='formobjects' value='Redefinir'>";
                                echo "<button type='submit' formaction='indexSocios.php?acao=selecionar'>Selecionar</button>";
                                echo"</td>";
                                echo "</tr></th>";
                                echo"</form>";
                            }
    
                            echo "</table></form>";
                            mysqli_close($con);
                        break;

                        case 'atualizar':
                    
                            $id = $_POST['id'];
                            $nome = $_POST['nome'];
                            $dataadmis = $_POST['dataadmis'];
                            $rg = $_POST['rg'];
                            $datanasc = $_POST['datanasc'];
                    
                            $sql = "UPDATE tb_socio SET nm_socio = '" .$nome."', dt_admissao_socio = '".$dataadmis."', nm_rg_socio = '".$rg."', dt_nasc_socio = '".$datanasc."'WHERE cod_socio = '" .$id."'";
                    
                            if(!mysqli_query($con, $sql)){
                                die("Erro ao inserir os dados: ". mysqli_error($con, $sql));
                            }
                            else{
                                echo("<script>alert('Dados atualizados com sucesso.');</script>");
                            }
                            mysqli_close($con);
                            header("Location:indexSocios.php?acao=selecionar");
                            break;
    
                        case 'inserir':
                            $nome = $_POST['nome'];
                            $dataadmis = $_POST['dataadmis'];
                            $rg = $_POST['rg'];
                            $datanasc = $_POST['datanasc'];
                            $senha = $_POST['senha'];
                            $ddd = $_POST['ddd'];
                            $numero = $_POST['numero'];
                            $nmend = $_POST['nm_end'];
                            $cep = $_POST['cep_end'];
                            $bairro = $_POST['bairro_end'];
                            $cidade = $_POST['cidade_end'];
                            $estado = $_POST['estado_end'];
    
    
                            $sql = "INSERT INTO tb_socio (nm_socio, dt_admissao_socio, nm_rg_socio, dt_nasc_socio, senha_login) VALUES ('$nome','$dataadmis', '$rg', '$datanasc', '$senha')";
                            $sql2 = "INSERT INTO tb_telefone (cod_socio, ddd_telefone, num_telefone) VALUES (LAST_INSERT_ID(), '$ddd','$numero')";
                            $sql3 = "INSERT INTO tb_endereco (cod_socio, nm_end, cep_end, bairro_end, cidade_end, estado_end) VALUES (LAST_INSERT_ID(), '$nmend','$cep', '$bairro', '$cidade', '$estado')";
                            /*if (mysqli_query($con, $sql)) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                            }*/
    
                            if(!mysqli_query($con, $sql)){
                                die("Erro ao inserir os dados: ".mysqli_error($con));
                            } else if (!mysqli_query($con, $sql3)){
                                die("Erro ao inserir os dados: ".mysqli_error($con));
                            } 
                            else{
                               echo "<script>alert('Dados inseridos com sucesso!');</script>";
                            }
                            
                            mysqli_close($con);
                            header("Location:indexSocios.php?acao=selecionar");
                        break;

                        case 'deletar':
                            $id = $_GET['id'];
                    
                            $sql = "DELETE FROM tb_socio WHERE cod_socio = '" .$id."'";
                            $sql2 = "DELETE FROM tb_endereco WHERE cod_socio = '" .$id."'";


                            if(!mysqli_query($con, $sql2)){
                                die("Erro ao inserir os dados: ". mysqli_error($con));
                            }
                            else if(!mysqli_query($con, $sql)){
                                die("Erro ao inserir os dados: ". mysqli_error($con));
                            }
                            else{
                                echo("<script>alert('Dados deletados com sucesso.');</script>");
                            }
                            mysqli_close($con);
                            header("Location:indexSocios.php?acao=selecionar");
                            break;
    
                        case 'selecionar':
                            date_default_timezone_set('America/Sao_Paulo');
                            header("Content-type: text/html; charset=utf-8");
                            echo"<meta charset='UTF-8'>";
                            echo "<center><a href='indexSociosCadastrar.php'><img src='img/insert_crud.png' alt='Inserir' title='Inserir Registro' registro'></center><br/>";
                            echo "<center><table border=1>";
                            echo "<tr>";
                            echo "<th>CÓDIGO</th>";
                            echo "<th>NOME</th>";
                            echo "<th>DATA ADMISSÃO</th>";
                            echo "<th>RG</th>";
                            echo "<th>DATA NASCIMENTO</th>";
                            echo "<th>AÇÃO</th>";
                            echo "</tr>";
    
                            $sql = "SELECT * FROM tb_socio";
                            $resultado = mysqli_query($con, $sql) or die ("Erro ao retornar o valor do banco de dados.");
                                while ($registro = mysqli_fetch_array($resultado)){
                
                                $cod = $registro['cod_socio'];
                                $nome = $registro['nm_socio'];
                                $dataadmissao = $registro['dt_admissao_socio'];
                                $rg = $registro['nm_rg_socio'];
                                $datanascimento = $registro['dt_nasc_socio'];
                            
                                echo "<tr>";
                                echo "<td id='id' name='id' value=''>".$cod."</td>";
                                echo "<td>".$nome."</td>";
                                echo "<td>".date("d/m/Y",strtotime($dataadmissao))."</td>";
                                echo "<td>".$rg."</td>";
                                echo "<td>".date("d/m/Y",strtotime($datanascimento))."</td>";
                                echo "<td><a href='indexSocios.php?acao=deletar&id=$cod'><img src='img/delete_crud.png' alt='Deletar' title='Deletar' registro'>
                                <a href='indexSocios.php?acao=montar&id=$cod'><img src='img/delete_crud.png' alt='Montar' title='Montar' registro'>
                                <a href='indexSociosCadastrar.php'><img src='img/insert_crud.png' alt='Inserir' title='Inserir Registro' registro'></td>";
                                }
                                echo "</tr></table></center>";
                            break;
                            
                            default:
                            header("Location:indexLogou.php");
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