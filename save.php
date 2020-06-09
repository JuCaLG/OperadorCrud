<?php
include("conexion.php");

if(isset($_POST['save'])){
$nom = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$genero = $_POST['genero'];
$crup = $_POST['crup'];
$folio = $_POST['folio'];
$año = $_POST['año'];


  $query= "INSERT INTO operador(Nombre, ApellidoP, ApellidoM, Genero, Crup, Folio, año) VALUES ('$nom', '$app', '$apm',  '$genero', '$crup', $folio, $año)";

  $result = mysqli_query($conn,$query);
  echo "wert";
  if (!$result){
    die("Query failed");
  }else{

    header("Location: index.php");

  }

}
?>