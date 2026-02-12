<?php

// Recebendo os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$contacto = $_POST['contacto'];
$produto = $_POST['produto'];

// Verificação da idade
if ($idade > 10) {
    $situacao = "Cliente com mais de 10 anos";
} else {
    $situacao = "Menor de idade";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dados do Cliente</title>
</head>
<body>

    <h2>Dados Recebidos</h2>

    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Idade:</strong> <?php echo $idade; ?></p>
    <p><strong>Contacto:</strong> <?php echo $contacto; ?></p>
    <p><strong>Produto Comprado:</strong> <?php echo $produto; ?></p>
    <p><strong>Situação:</strong> <?php echo $situacao; ?></p>

</body>
</html>
