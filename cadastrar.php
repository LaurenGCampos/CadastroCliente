<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

/* Sanitização */
function limpar($dado) {
    return htmlspecialchars(trim($dado));
}

$cliente = [
    "nome" => limpar($_POST['nome'] ?? ''),
    "email" => limpar($_POST['email'] ?? ''),
    "telefone" => limpar($_POST['telefone'] ?? ''),
    "endereco" => limpar($_POST['endereco'] ?? ''),
    "tipo_cliente" => limpar($_POST['tipo_cliente'] ?? ''),
    "sexo" => limpar($_POST['sexo'] ?? '')
];

$arquivo = 'clientes.json';

/* Ler dados */
if (file_exists($arquivo)) {
    $dados = json_decode(file_get_contents($arquivo), true) ?? [];
} else {
    $dados = [];
}

/* Salvar */
$dados[] = $cliente;
file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));

/* Redirecionar */
header("Location: listar.php");
exit;
?>