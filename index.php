<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Jokenpo Boladão</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Squada+One&display=swap" rel="stylesheet">
    
</head>
<body>
    <h1>JOKENPO MT BRABO</h1>
    <div class="container">
      <form method="post" action="jokenpo.php">
        <label>
          <input type="radio" name="escolha" value="pedra" required>
          <span> Pedra </span>
        </label>
        <label>
          <input type="radio" name="escolha" value="papel">
          <span> Papel </span>
        </label>
        <label>
          <input type="radio" name="escolha" value="tesoura">
          <span> Tesoura </span>
        </label>
        <input type="submit" value="Jogar">
      </form>
    </div>
</body>
</html>
