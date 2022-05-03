<?php
    require 'autoload.php';
    
    use App\Sistema\Usuario;
    use App\Sistema\Contato;

    $email = new Contato($_POST['email'], $_POST['endereco'], $_POST['cep'], $_POST['telefone']);
    $usuario = new Usuario($_POST['nome'], $_POST['senha']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>
<body>

<div class="mx-5 my-5">
<h1>Cadastro feito com sucesso.</h1>
<p>Seguem os dados de sua conta:</p>
<ul class="list-group">
    <li class="list-group-item">Primeiro nome: <?php echo $usuario->getNome(); ?></li> </li>
    <li class="list-group-item">Sobrenome: <?php echo $usuario->getSobrenome(); ?> </li>
    <li class="list-group-item">Usuário: <?php echo $email->getUsuario(); ?> </li>
    <li class="list-group-item">Senha: <?php echo $senha->getSenha(); ?> </li>
    <li class="list-group-item">Telefone: <?php echo $telefon->getTelefone(); ?> </li>
    <li class="list-group-item">Email: <?php echo $email->getEmail(); ?> </li>
    <li class="list-group-item">Endereço: <?php echo $endereco->getEndereco(), $cep->getCep(); ?> </li>
</ul>
</div>
</body>
</html>

