<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança-Listar-Banco</title>
</head>
<body>
    <?php
    require './Conn.php';
    require './ListUsers.php';
    $listUsers = new ListUsers();
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