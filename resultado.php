
<?php

$resultado = array();

$arquivo = fopen('salvando.txt','r');

while(!feof($arquivo)){
    
   $registros = fgets($arquivo);
    $resultado[] = $registros;

}

fclose($arquivo);


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Resultados</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

        <div class="container">
            <a class="navbar-brand" href="resultado.php" ><img style="width:150px;" src="logo2.jpg" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-link " href="questionario.php">Voltar</a>
                <a class="nav-link" href="logoof.php">Sair</a>
            </div>

            </div>
        </div>
    </nav>

    </header>

<div class="container mt-4">    
      <div class="row">

        <div class="card-consultar-chamado ">
          <div class="card bg-dark text-success">
            <div class="card-header ">
                Todos os seus Resultados 
                <a href="deleta-registros.php" class="d-flex justify-content-end nav-link text-success" >Deleta Dados</a>
            </div>
            <? foreach($resultado as $resultados) {?>
             <?php

              $resultado_dados = explode('#',$resultados);
              if(count($resultado_dados)< 4 ){
                continue;
              }

              ?>
            <div class="card-body">
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h4 class="card-title">Seu resultados do teste</h5>
                  <p class="card-text">pergunta número 1 = <?=$resultado_dados[0]?> </p>
                  <p class="card-text">pergunta número 2 = <?=$resultado_dados[1]?> </p>
                  <p class="card-text">pergunta número 3 = <?=$resultado_dados[2]?> </p>
                  <p class="card-text">pergunta número 4 = <?=$resultado_dados[3]?> </p>

                </div>
              </div>
              </div>
              <? } ?>

                <div class="card-footer text-muted mt-3">
                <div class="d-grid gap-2 col-6 ">
                <a href="questionario.php"class="text-white btn btn-success ">Voltar</a>
                
              </div>
            </div>
          </div>
         </div>
       </div>
    </div>
</div>


</body>
</html>