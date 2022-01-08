<?php
include_once ('validado.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>questionario-programado</title>
</head>
<body class="bg-white text-dark">
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

        <div class="container">
            <a class="navbar-brand" href="questionario.php" ><img style="width:150px;" src="logo2.jpg" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-link " href="index.php">Inicio</a>
                <a class="nav-link " href="resultado.php">Resultados</a>
                <a class="nav-link" href="logoof.php">Sair</a>
            </div>

            </div>
        </div>
    </nav>

    </header>

    <div class="container">
    <div>

    <div class="text-center">
         <h2 class="marginal">Questionario para programado php</h2>
    </div>
       
    <form action="salvando_resultado.php" method="post">
        
        <h6>Pergunta 1: Para quê a linguagem PHP é usada ?</h6>
        <input type="radio" value="certo" name="1"><span class="m-2">Pode criar, escrever, fechar arquivos do sistema </span ><br>
        <input type="radio" value="errado" name="1"><span class="m-2">Uma liguagem de marcação </span><br>
        <input type="radio" value="errado"  name="1"><span class="m-2">qual metodo usa no back end</span><br>
        <hr>
    

    
        <h6>Pergunta 2: Quantos objetos você pode criar em PHP ?</h6>
        <input type="radio" value="errado" name="2"><span class="m-2">Somente 10000</span><br>
        <input type="radio" value="errado" name="2"><span class="m-2">Somente 100</span><br>
        <input type="radio" value="certo" name="2"><span class="m-2">Não existe um limite </span><br>
        <hr>
    

    
        <h6>Pergunta 3: Quem criou o PHP?</h6>
        <input type="radio"value="certo" name="3"><span class="m-2">Rasmus Lerdorf</span><br>
        <input type="radio" value="errado" name="3"><span class="m-2">Patrick Naughton, Mike Sheridan, e James Gosling.</span><br>
        <input type="radio" value="errado" name="3"><span class="m-2">Netscape, Brendan Eich</span><br>
        <hr>
    

    
        <h6>Pergunta 4: Com qual linguagem de programação o PHP é semelhante?</h6>
        <input type="radio" value="errado" name="4"><span class="m-2">Pascal</span><br>
        <input type="radio"value="errado" name="4"><span class="m-2">Java,Javascript</span><br>
        <input type="radio"value="certo" name="4"><span class="m-2">Perl e C</span><br>
        <hr>

    <div class="card-footer text-muted mt-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-dark "> Enviar</button>
                </div>
    </div>
</form>
</body>
</html>