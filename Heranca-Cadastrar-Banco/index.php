<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança-Listar-Banco</title>
</head>
<body>
    <a href="index.php">Listar</a>
    <a href="create.php">Cadastrar</a>
    <h1>Listar Usuário</h1>
    <hr>
    <?php
    if(isset($_SESSION['msg'])){
        var_dump($_SESSION['msg']);
        unset($_SESSION['msg']);
    }

    require './Conn.php';
    require './User.php';
    $listUsers = new User();
    $resultusers = $listUsers->list();

    foreach ($resultusers as $row_users) {
        extract($row_users);

        echo "ID: {$id}<br>";
        echo "nome: {$nome}<br>";
        echo "email: {$email}<br>";
        echo "<hr>";
    }
    ?>
</body>
</html>