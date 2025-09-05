<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $operacao = $_POST["operacao"];

        echo "<h3>Resultado:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            if ($operacao == "adicao") {
                $resultado = $numero + $i;
                echo "$numero + $i = $resultado<br>";
            } else {
                $resultado = $numero - $i;
                echo "$numero - $i = $resultado<br>";
            }
        }
    }
    ?>
    <!DOCTYPE html>
<html>
<head>
    <title>Operações com Números</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        <label for="operacao">Escolha a operação:</label>
        <select name="operacao" id="operacao">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
    </form>