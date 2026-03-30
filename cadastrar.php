<?php
$cliente = [
    "nome" => $_POST['nome'] ?? '',
    "email" => $_POST['email'] ?? '',
    "telefone" => $_POST['telefone'] ?? '',
    "endereco" => $_POST['endereco'] ?? '',
    "tipo_cliente" => $_POST['tipo_cliente'] ?? '',
    "sexo" => $_POST['sexo'] ?? ''
];

$arquivo = 'clientes.json';

/* Se o arquivo existir, pega os dados */
if (file_exists($arquivo)) {
    $dados = json_decode(file_get_contents($arquivo), true);
} else {
    $dados = [];
}

/* Adiciona novo cliente */
$dados[] = $cliente;

/* Salva no JSON */
file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));

/* Redireciona */
header("Location: listar.php");
exit;
?>