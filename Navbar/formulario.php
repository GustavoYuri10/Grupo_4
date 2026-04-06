
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <form action="principal.php" method="post">
 
<nav class="navbar" style="background-color: #e3f2fd;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NSL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="formulario.php">Nome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form2.php">Soma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form3.php">Média</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form4.php">Conversor graus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form5.php">Dobro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form6.php">Conversor dolar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  
    <pre>
            <label for="">Nome</label>
            <input type="text" name="nome" id="">

             <label for="">Telefone</label>
             <input type="text" name="telefone" id=""><br>
             <input type="submit" value="Enviar" class="btn btn-primary"><br> 
             <input type="reset" value="Limpar" class="btn btn-secondary">
             
    </form>
</body>
</html>



