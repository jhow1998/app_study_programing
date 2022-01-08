<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="body.css">
    <title>programing</title>
</head>
<body >

    <div class="container d-flex justify-content-center mt-5  text-white ">
    
    <div class="card bg-dark" style="width:19rem; ">

            <a href="index.php"><img src="logo2.jpg" style="" class="card-img-top  rounded mx-auto d-block bg-dark" alt="nossa logo"></a>
    
          <div class="card-body">
          <form action="validar_login.php" method="post">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Usuario:</label>
                  <input type="email" class="form-control" name="email">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha:</label>
                  <input type="password" class="form-control" name="senha">
                  </a>
                </div>

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro1') {?>

                      <div class="text-danger text-center mb-2">
                        coloque senha e usuario validos
                      </div>

                <? } ?>

                <? if(isset($_GET['login']) && $_GET['login'] =='erro2') {?>

                      <div class="text-danger text-center mb-2">
                        coloque seu email e senha novamente
                      </div>

                <? } ?>
              
                <div class="d-grid gap-2 col-8 mx-auto">
                  <button class="btn btn-success" type="submit">Enviar</button>
                </div>

                <div class="mt-2">
                  <span>Ainda não tem uma conta?</span>
                  <a href="" class=" ml-5 text-success "><span>criar uma </span></a>
                </div>

                

        </form>
          </div>
        </div>
    </div>
    
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>





