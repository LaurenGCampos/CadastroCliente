<?php
$arquivo = 'clientes.json';

if (file_exists($arquivo)) {
    $clientes = json_decode(file_get_contents($arquivo), true);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        unset($clientes[$id]);

        // reindexar array
        $clientes = array_values($clientes);

        file_put_contents($arquivo, json_encode($clientes, JSON_PRETTY_PRINT));
    }
}

header("Location: listar.php");
exit;
?>