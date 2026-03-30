<?php
$arquivo = 'clientes.json';

if (file_exists($arquivo)) {
    $clientes = json_decode(file_get_contents($arquivo), true) ?? [];
} else {
    $clientes = [];
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Clientes</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght=300;400;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">

<h1>Clientes Cadastrados</h1>

<table>
<tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Tipo</th>
</tr>

<?php foreach ($clientes as $index => $c): ?>
<tr>
    <td><?= $c['nome'] ?></td>
    <td><?= $c['email'] ?></td>
    <td><?= $c['telefone'] ?? '-' ?></td>
    <td>
        <?= isset($c['tipo_cliente']) 
            ? ($c['tipo_cliente'] == 'pf' ? 'PF' : 'PJ') 
            : '-' ?>
    </td>

    <td>
        <a href="excluir.php?id=<?= $index ?>" 
onclick="return confirm('Tem certeza que deseja excluir?')" 
class="btn-excluir">
Excluir
</a>
    </td>
</tr>
<?php endforeach; ?>    

</table>

<a href="index.php" class="btn-link">← Voltar</a>

</div>

</body>
</html>