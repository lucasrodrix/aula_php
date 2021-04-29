<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
<p>Formulario para Inscrição de Competidores</p>
<form action="script.php" method="post">
    <?php
        $mensagemSucesso = isset($_SESSION['mensagemSucesso']) ? $_SESSION['mensagemSucesso'] : '';
        if(!empty($mensagemSucesso)){
            echo $mensagemSucesso;
        }
        $mensagemErro = isset($_SESSION['mensagemErro']) ? $_SESSION['mensagemErro'] : '';
        if(!empty($mensagemErro)){
            echo $mensagemErro;
        }
    ?>
    <p>Seu Nome: <input type="text" name="nome"/></p>
    <p>Sua Idade: <input type="text" name="idade"/></p>
    <p><input type="submit" value="Enviar Dados"/></p>
</form>
    
</body>
</html>