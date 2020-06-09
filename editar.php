<?php include("conexion.php")?>
<?php include("includes/header.php")?>
<title>Editar</title>

<?php
  if(isset($_GET['id'])) {
      $id = $_GET['id'];
      $query = "SELECT * FROM operador WHERE Folio = $id";
      $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_array($result);
          $nom = $row['Nombre'];
          $app = $row['ApellidoP'];
          $apm = $row['ApellidoM'];
          $gen = $row['Genero'];
          $crup = $row['Crup'];
          $folio = $row['Folio'];
          $ano = $row['año'];
          
        }
  }

  
  if(isset($_POST['update'])){
    $id = $_GET['id'];
    $nom = $_POST['nombre'];
    $app = $_POST['app'];
    $apm = $_POST['apm'];
    $gen = $_POST['genero'];
    $crup = $_POST['crup'];
    $ano = $_POST['año'];

    $query ="UPDATE operador set Nombre = '$nom', ApellidoP = '$app', ApellidoM = '$apm', Genero = '$gen', Crup = '$crup', año= $ano WHERE Folio = $id";
    mysqli_query($conn,$query);
    header( "Location: index.php");
   


  }

?>

<div class="centerage" >

    <div class="form-group col-md-13"> 

      
          <form action="editar.php?id=<?php echo $row['Folio']; ?>"  method="POST">
            <div class="form-group">
              <input type="text" name="nombre" id="nombre" value="<?php echo $nom; ?>" calss="form-control" placeholder="NOMBRE" id="nombre" onchange="validacionDeNombre()" required autofocus>
            </div>

            <div class="form-group">
              <input type="text" name="app" value="<?php echo $app; ?>" calss="form-control" placeholder="APELLIDO PATERNO" id="apellidoP" onchange="validacionDeApellido()" required autofocus>
            </div>

            <div class="form-group">
              <input type="text" name="apm" value="<?php echo $apm; ?>" calss="form-control" placeholder="APELLIDO MATERNO" id="apellidoM" onchange="validacionDeApellido()" required autofocus>
            </div>

             <div class="form-group">
              <select name="genero" class="form-control form-control-sm" >
              <option>Genero</option>
              <option>Masculino</option>
              <option>Femenino</option>
              </select>
              </div>
          
            <div class="form-group">
              <input type="text" name="crup" value="<?php echo $crup; ?>" calss="form-control" placeholder="CRUP"  id="crup"  onchange="validacioncrup()" required autofocus>
            </div>
            <fieldset disabled>
            <div class="form-group">
              <input type="text" name="folio" value="<?php echo $folio; ?>" calss="form-control" placeholder="FOLIO DE LICENCIA" onminlength="1", maxlength="5" required autofocus>
            </div>
            </fieldset>

            <div class="form-group">
              <input type="text" name="año"  value="<?php echo $ano; ?>" calss="form-control" placeholder="AÑO DE VENCIMIENTO DE LICENCIA" onminlength="4", maxlength="4" required autofocus>
            </div>

            <input type="submit" class="btn btn-success btn-block" name="update" value="EDITAR">
          </form>

    </div>

</div>

<script type="text/javascript">
 
          var inputNombre = document.getElementById('nombre');
          function validacionDeNombre() {
                  if (inputNombre.value.charCodeAt(0) > 64 && inputNombre.value.charCodeAt(0) < 90) {
                      console.log('Es correcto');
                  } else { 
                      alert("Tu nombre debe comenzar con una letra mayúscula ");
                    }
           }
      
           var inputgenero = document.getElementById('genero');
          function validacionGenero() {
                  if (inputgenero.value.charCodeAt(0) > 64 && inputgenero.value.charCodeAt(0) < 90) {
                      console.log('Es correcto');
                  } else { 
                      alert("Tu genero debe comenzar con una letra mayúscula ");
                    }
           }
          
      
          var inputApellido = document.getElementById('apellidoP');
          function validacionDeApellido() {
                  if (inputApellido.value.charCodeAt(0) > 64 && inputApellido.value.charCodeAt(0) < 90) {
                      console.log('Es correcto');
                  } else { 
                      alert("Tu Apellido debe comenzar con una letra mayúscula ");
                    }
           }

           var inputApellido = document.getElementById('apellidoM');
          function validacionDeApellido() {
                  if (inputApellido.value.charCodeAt(0) > 64 && inputApellido.value.charCodeAt(0) < 90) {
                      console.log('Es correcto');
                  } else { 
                      alert("Tu Apellido debe comenzar con una letra mayúscula ");
                    }
           }

           var inputcrup = document.getElementById('crup');
          function validacioncrup() {
                  if (inputcrup.value.charCodeAt(0) > 64 && inputcrup.value.charCodeAt(0) < 90) {
                      console.log('Es correcto');
                  } else { 
                      alert("Todas las letras deben ser en mayúscula ");
                    }
           }
      
          </script>
      
      
          </script>

<?php include("includes/footer.php")?>