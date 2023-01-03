<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança-Cadastrar-Banco</title>
</head>
<body>
    <a href="index.php">Listar</a>
    <a href="create.php">Cadastrar</a>
    <h1>Cadastrar Usuário</h1>
    <hr>
    <?php
    require './Conn.php';
    require './User.php';
    
    //processando formulário
    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    if(!empty($formData['SendAddUser'])){
        var_dump($formData);
        $createUser = new User();
        $createUser->formData = $formData;
        $value = $createUser->create();

        if($value){
            $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso! </p>";
            header("Location: index.php");
        } 
        else echo "falha ao cadastrar usuário";
        
    }
    ?>
    <form name="CreateUser" method="POST" action="">
        <label>Nome </label>
        <input type="text" name="name" placeholder="nome completo" required> <br><br>
        <label>Email</label>
        <input type="email" name="email" placeholder="Melhor e-mail" required> <br><br>

        <input type="submit" value="Cadastrar" name="SendAddUser">
    </form>
</body>
</html>