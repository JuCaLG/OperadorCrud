

<?php 

$user = "";
$pwd = "";

   if($_SERVER["REQUEST_METHOD"] == "POST"){

      include('conexion.php');

      $user = $_POST['user'];
      $pwd = $_POST['pwd'];

      if($conn){

         $user = mysqli_real_escape_string($conn,$_POST['user']);
         $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

         if(isset($_POST['ingresar'])){

            $sql = "SELECT user,pwd FROM usuarios WHERE user='$user' and pwd=$pwd";
            $error = 'El usuario o la contraseña son incorrecos';
            
         }else{
            echo 'no datos';
         }

              $result = mysqli_query($conn,$sql);
              
              $rowcount =mysqli_num_rows($result);
              
   

         if(!$rowcount){

            
            $_SESSION["error"] = 'Usuario o contraseña incorrecta';
           

         }else{
            header('Location: index.php');
         }


      }
      else{

         $error = 'Error: '. mysqli_connect_error();

      }

      mysqli_close($conn);

   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Secion</title>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="card card-container">
                      <div align="center">
                        <img id="profile-img" class="profile-img-card" src="recursos/img/tras1.png" />
         </div>
        <?php if(isset($_SESSION['error'])){?>
               <div class="alert alert-warning alert-dismissible show" role="alert">
                   <?= $_SESSION['error']?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>

        <?php } ?>

            
            <form class="form-signin" action="login.php" method="POST">
                <div class="form-group col-md-13"> 
                        <input name="user" id="user" class="form-control" placeholder="Correo" <?php echo htmlspecialchars($user); ?> required autofocus>
                  </div>      
                        
                     <div class="form-group col-md-13">     
                        <input name="pwd" id="pwd" class="form-control" placeholder="Contraseña" required<?php echo htmlspecialchars($pwd); ?>>
                     </div>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" name="ingresar" type="submit">Aceptar</button>
                </div>
            </form>
        </div>
    </div>