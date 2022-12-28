<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Listar</title>
</head>
<body>
    <?php
        //incluir o arquivo
        require './Usuarios.php';

        //Instanciando a classe
        //Criando o objeto $usuario
        $usuarios = new Usuarios();  
        //instanciar o método listar      
        $result_usuarios= $usuarios->listar();

        foreach ($result_usuarios as $row_usuario) {
            extract($row_usuario);
            echo "ID do usuário $id <br>";
            echo "Nome do usuário $nome <br>";
            echo "Email do usuário $email <br>";
            echo "<hr>";
        }

    ?>
</body>
</html>