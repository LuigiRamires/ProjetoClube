<!DOCTYPE html>
<html lang="en">
<head>
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
    <center style="margin: 5px;">
    <h1>Cadastro</h1>
    <hr/>
    <h3>Informações gerais</h3>
    <form action="indexSocios.php?acao=inserir" method="POST">
        Nome: <input type="text" name="nome" id="nome" style="margin-bottom: 10px;"><br/>
        Data admissão: <input type="date" name="dataadmis" id="dataadmis" style="margin-bottom: 10px;"><br/>
        RG: <input type="text" name="rg" id="rg" style="margin-bottom: 10px;"><br/>
        Data nascimento: <input type="date" name="datanasc" id="datanasc" style="margin-bottom: 10px;"><br/>
        Senha: <input type="password" name="senha" id="senha" style="margin-bottom: 10px;">
        <hr>
        <h3>Telefone</h3>
        DDD: <input type="text" name="ddd" id="ddd" style="margin-bottom: 10px;"><br/>
        Número: <input type="text" name="numero" id="numero" style="margin-bottom: 10px;"><br/>
        <hr>
        <h3>Endereço</h3>
        Nome do logradouro: <input type="text" name="nm_end" id="nm_end" style="margin-bottom: 10px;"><br/>
        CEP: <input type="text" name="cep_end" id="cep_end" style="margin-bottom: 10px;"><br/>
        Bairro: <input type="text" name="bairro_end" id="bairro_end" style="margin-bottom: 10px;"><br/>
        Cidade: <input type="text" name="cidade_end" id="cidade_end" style="margin-bottom: 10px;"><br/>
        Estado: <input type="text" name="estado_end" id="estado_end" style="margin-bottom: 10px;"><br/>
        <input type="submit"> 

    </form>
    </center>
    
</body>
</html>