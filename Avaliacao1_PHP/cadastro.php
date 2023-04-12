<?php

    session_start();
    if($_SESSION['loggedin'] != true){
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Biblioteca</title>
</head>
<body>
    <a href="cadastro.php">Cadastrar livros</a>
    <a href="logout.php">Sair</a>
</body>
</html>