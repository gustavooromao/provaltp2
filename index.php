<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Folha de Pagamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Folha de Pagamento</h1>

    <form method="post">
        <label>Nome do funcionário:</label>
        <input type="text" name="nome" required>

        <label>Salário bruto:</label>
        <input type="number" name="salario" step="0.01" required>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_POST) {

        $nome = $_POST['nome'];
        $salario = $_POST['salario'];

        $ir = $salario * 0.11;
        $inss = $salario * 0.08;
        $sindicato = $salario * 0.02;

        $salario_liquido = $salario - ($ir + $inss + $sindicato);

        echo "<div class='resultado'>";
        echo "<h2>Resultado</h2>";
        echo "<p><strong>Funcionário:</strong> $nome</p>";
        echo "<p><strong>Salário líquido:</strong> R$ " . number_format($salario_liquido, 2, ',', '.') . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>