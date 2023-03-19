<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <title>Jokenpo</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $escolha = $_POST['escolha'];
    $options = ['pedra', 'papel', 'tesoura'];
    $computador = $options[array_rand($options)];
    $resultado = "";
    $jogadas = "";

    if ($escolha == $computador) {
        $resultado = "Empatou legal mané";
        $jogadas = "Você jogou $escolha e o computador jogou $computador";

    } elseif (($escolha == 'papel' && $computador == 'pedra') ||
              ($escolha == 'pedra' && $computador == 'tesoura') ||
              ($escolha == 'tesoura' && $computador == 'papel')) {
        $resultado = "Boa mané, ganhou bonito";
        $jogadas = "Você jogou $escolha e o computador jogou $computador";

    } else {
        $resultado = "Perdeu mané kkkkkk";
        $jogadas = "Você jogou $escolha e o computador jogou $computador";
    }
}
    echo '<div class="resultado">' . $resultado . '</div>';
    echo '<div class="jogadas">' . $jogadas . '</div>';
?>

<div class="containertwo">
    <div>
        <a href="index.php">
            <button class="botao"> Jogar Novamente </button>
        </a>
    </div>
    <div class="gif">
        <img src="https://media.tenor.com/5AeBrrSXk34AAAAd/gato.gif">
    </div>
</div>
</body>

</html>
