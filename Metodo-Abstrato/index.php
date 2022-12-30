<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Abstrata</title>
</head>
<body>
    <?php
        require './Cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';
        
        $chequeComum = new ChequeComum(307.37, "comum");
        $msgChequeComum = $chequeComum->calcularJuro();
        echo $msgChequeComum;

        $chequeEspecial = new ChequeEspecial(679.37, "especial");
        $msgChequeEspecial = $chequeEspecial->calcularJuro();
        echo $msgChequeEspecial
    ?>
</body>
</html>