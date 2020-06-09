<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://kit.fontawesome.com/ca583de3be.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<style>
    
.center {
  margin: auto;
  width: 60%;
  padding: 30px;
}
.centerage {
  margin: auto;
  width: 18%;
  padding: 30px;
}

</style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">

  <div class="container">
    <a href="index.php" class="navbar-brand">CECI.com</a>
   
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" >Crud</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="agregar.php">AGREGAR</a>
          <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">EDITAR</a>
          <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">ELIMINAR</a>
          <a class="dropdown-item" href="listar.php">LISTAR</a>
          <a class="dropdown-item" href="index.php">INDEX</a>
        </div>
      </div>


   <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="login.php">Cerrar Secion</a>
          <a class="dropdown-item" href="#">Acerca de</a>
          <a class="dropdown-item" href="#">Autor</a>
        </div>
      </div>
  </div>
</nav>