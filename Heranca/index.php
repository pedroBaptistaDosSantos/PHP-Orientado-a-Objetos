<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <?php 
        require './Cliente.php';
        require './ClientePessoaFisica.php';
        require './ClientePessoaJuridica.php';
        $cliente = new Cliente();
        $cliente->logradouro = "Avenida Tim Maia";
        $cliente->bairro = "Tijuca";
        $msg = $cliente->verEndereco();
        echo $msg;
        echo "<hr>";

        $clientePf = new ClientePessoaFisica();
        $clientePf->logradouro = "Rua das estrelas";
        $clientePf->bairro = "Luamar";
        $clientePf->nome = "Fabio";
        $clientePf->cpf = 12345678999;
        $msgPf = $clientePf->verInformacaoUsuario();
        echo $msgPf;
        echo "<hr>";

        $clientePj = new ClientePessoaJuridica();
        $clientePj->logradouro = "Rua dos Advogados";
        $clientePj->bairro = "Queijo suiço";
        $clientePj->nomeFantasia = "Soul Goodman";
        $clientePj->cnpj = 12345678999;
        $msgPj = $clientePj->verInformacaoEmpresa();
        echo $msgPj;
        echo "<hr>";

    ?>
</body>
</html>