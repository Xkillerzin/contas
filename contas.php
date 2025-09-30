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
    <!-- Verifica o método da requisição

if ($_SERVER["REQUEST_METHOD"] == "POST") {


Esse if garante que o código só vai rodar se o formulário tiver sido enviado pelo método POST.

Assim, evita erro se alguém abrir a página direto sem mandar dados.

Pegando os dados do formulário

$numero = intval($_POST["numero"]);
$operacao = $_POST["operacao"];


$_POST["numero"] → pega o número digitado no formulário.

intval() → converte para inteiro, para garantir que é número.

$_POST["operacao"] → pega qual operação o usuário escolheu (adição ou subtração).

Título do resultado

echo "<h3>Resultado:</h3>";


Apenas mostra um título no navegador.

Laço de repetição

for ($i = 1; $i <= 10; $i++) {


Esse for repete 10 vezes, de 1 até 10.

Cada vez, faz a conta com o número digitado e o valor de $i.

Verificação da operação

if ($operacao == "adicao") {
    $resultado = $numero + $i;
    echo "$numero + $i = $resultado<br>";
} else {
    $resultado = $numero - $i;
    echo "$numero - $i = $resultado<br>";
}


Se o usuário escolheu adição, soma o número com $i.

Caso contrário, faz a subtração.

O echo imprime o cálculo no navegador em cada linha (<br>).

Final do PHP e início do HTML

}
?>
<!DOCTYPE html>


Fecha o PHP e começa o documento HTML.

Isso indica que o restante da página será estruturado em HTML (formulário, botões etc.). -->
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