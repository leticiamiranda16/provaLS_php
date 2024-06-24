<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadastro</title>
    <link rel="shortcut icon" href="../assets/afs-logo-aside.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body bg-body-tertiary>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="cadastrar-adm.php">Novo Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listar-adm.php">Listar Pessoas</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
      <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
  </li>
      </li>
    </ul>
  </div>
</nav>


    <div class="container mt-5">
        <div class="row aling-items-center">
            <div class="col-md-10 mx-auto col-lg-5 ">
            <p class="h2">Cadastre-se</p>
            <form action="salvar-adm.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Seu nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label>Seu email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Sua senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Cadastrar">  <a href="dash-adm.php"> 
            
        </div>
    
    </form>
               
            </div>
        </div>
    </div>

</body>