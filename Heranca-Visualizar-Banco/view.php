<?php
session_start();
ob_start();
//Receber o id do usuário
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança-Visualizar-Banco</title>
</head>
<body>
    <a href="index.php">Listar</a>
    <a href="create.php">Cadastrar</a>
    <h1>Detalhes do  Usuário</h1>
    <hr>
    <?php
    if(isset($_SESSION['msg'])){
        unset($_SESSION['msg']);
    }
    //verifica se o id possui valor
    if(!empty($id)){

        //incluir os arquivos
        require './Conn.php';
        require './User.php';
        
        //instanciar a classe e criar objeto
        $viewUser = new User();
        $viewUser->id = $id; //enviando o id para a classe
        $valueUser = $viewUser->view();
        var_dump($valueUser);
        extract($valueUser); //extraio os values criando uma variavel com seu nome
        echo "ID do usuário: {$id}<br>";
        echo "Nome do usuário: {$nome}<br>";
        echo "Email do usuário: {$email}<br>";
        echo "data de cadastro:". date('d/m/Y H:i:s', strtotime($created)) ."<br>";
        if(!empty($modified)) echo "Ultima modificação de registro:" . date('d/m/Y H:i:s', strtotime($modified));
    }else{
        $_SESSION['msg'] = "<p style='color: red;'>Erro: Usuário não encontrado</p>";
        header("Location: index.php");
    }

    
   
    ?>
</body>
</html>