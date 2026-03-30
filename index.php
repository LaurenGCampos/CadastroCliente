<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Clientes</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght=300;400;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">

    <h1>Cadastro de Clientes</h1>

    <form action="cadastrar.php" method="POST">

        <input type="text" name="nome" placeholder="Nome" required>

        <input type="email" name="email" placeholder="E-mail" required>

        <input type="text" name="telefone" placeholder="Telefone">

        <input type="text" name="endereco" placeholder="Endereço">

        <select name="tipo_cliente" required>
            <option value="">Tipo de Cliente</option>
            <option value="pf">Pessoa Física</option>
            <option value="pj">Pessoa Jurídica</option>
        </select>

        <div class="radio-group">
            <label><input type="radio" name="sexo" value="masculino" required> Masculino</label>
            <label><input type="radio" name="sexo" value="feminino"> Feminino</label>
        </div>

        <button type="submit">Cadastrar</button>

    </form>

    <a href="listar.php" class="btn-link">Ver Clientes</a>

</div>

</body>
</html>