<?php include("conexion.php");

    if(isset($_GET['id'])) {
      $id =$_GET['id'];
      $query="DELETE FROM operador WHERE Folio = $id";
      $result = mysqli_query($conn,$query);

      if(!$result){
        die("Query Failed");
      }else{
        header("Location:listar.php");
      }
      

    }
?>

