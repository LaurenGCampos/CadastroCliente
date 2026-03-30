<?php
$arquivo = 'clientes.json';

if (file_exists($arquivo)) {
    $clientes = json_decode(file_get_contents($arquivo), true);
} else {
    $clientes = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Lista de Clientes</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1>Clientes Cadastrados</h1>
</header>

<main>

<a href="index.html">← Voltar</a>

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Tipo</th>
        <th>Sexo</th>
    </tr>

<?php foreach ($clientes as $c): ?>
<tr>
    <td><?= $c['nome'] ?></td>
    <td><?= $c['email'] ?></td>
    <td><?= $c['telefone'] ?></td>
    <td><?= $c['endereco'] ?></td>
    <td><?= $c['tipo_cliente'] == 'pf' ? 'Pessoa Física' : 'Pessoa Jurídica' ?></td>
    <td><?= ucfirst($c['sexo']) ?></td>
</tr>
<?php endforeach; ?>

</table>

</main>
</body>
</html>