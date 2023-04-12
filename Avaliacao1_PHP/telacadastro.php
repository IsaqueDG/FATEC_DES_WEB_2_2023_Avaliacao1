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
    <title>Tela de Cadastro</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="guarda_info.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="titulo">Titulo do livro:</label><br>
        <input type="text" id="titulo" name="titulo" value=""><br>
        <label for="volume">Volume:</label><br>
        <input type="numeric" id="volume" name="volume" value=""><br>
        <label for="autor">Autor:</label><br>
        <input type="numeric" id="autor" name="autor" value=""><br><br>
        <input type="submit" name="Enviar" value="Cadastrar"><br>
    </form>
</body>
</html>