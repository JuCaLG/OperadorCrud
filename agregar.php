<?php include("conexion.php")?>
<?php include("includes/header.php")?>
<title>Agregar</title>

<div class="centerage" >
    <div class="form-group col-md-13">

          <form action="save.php" method="POST" id="prueba">
            <div class="form-group">
              <input type="text" name="nombre" calss="form-control" placeholder="NOMBRE" id="nombre" onchange="validacionDeNombre()" required> 
            </div>

            <div class="form-group">
              <input type="text" name="app" calss="form-control" placeholder="APELLIDO PATERNO" id="apellidoP"onchange="validacionDeApellido()" required>
            </div>

            <div class="form-group">
              <input type="text" name="apm" calss="form-control" placeholder="APELLIDO MATERNO" id="apellidoM"onchange="validacionDeApellido()" required>
            </div>

            
            
            <div class="form-group">
              <select name="genero" id="genero" class="form-control form-control-sm" >
              <option>Genero</option>
              <option>Masculino</option>
              <option>Femenino</option>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="crup" calss="form-control" placeholder="CRUP" id="crup"  onchange="validacioncrup()" required>   
            </div>

            <div class="form-group">
              <input type="text" name="folio" id="folio" calss="form-control" placeholder="FOLIO DE LICENCIA" onminlength="5", maxlength="5" onchange="validacionfolio()" required>   
            </div>

            <div class="form-group">
              <input type="text" name="año" id="anio" calss="form-control" placeholder="AÑO DE VENCIMIENTO DE LICENCIA"minlength="4", maxlength="4"onchange="validacionAnio()" required>
            </div>
          
               <div>
                <input type="submit" class="btn btn-success btn-block" name="save" id="save" value="GUARDAR">
               </div>  
               
               
          </form>
     </div>

</div>


<script>
$(document).ready(function () {
  $('#prueba').submit(function (event) {
    event.preventDefault();
    var msg = validar();
    if (msg == "") {
      $('#prueba').unbind('submit').submit()
    } else {
      alert(msg);
    }
  });
 
  function validar() {
    data = {
      nombre: $('#nombre').val(),
      apeP: $('#apellidoP').val(),
      apeM: $('#apellidoM').val(),
      genero: $('#genero').val(),
      crup: $('#crup').val(),
      anio: $('#anio').val(),
      folio: $('#folio').val()
    }
    var msg = '';
    if (!/^[a-zA-Z ]{1,64}$/.test(data.nombre)) {
      msg += "Nombre Erroneo<br>";
    }
    if (!/^[a-zA-Z ]{1,64}$/.test(data.apeP)) {
      msg += "Apeliido Paterno Erroneo<br>";
    }
    if (!/^[a-zA-Z ]{1,64}$/.test(data.apeM)) {
      msg += "Apeliido Materno Erroneo<br>";
    }
    if (!/^[Masculino]|[Femenino]$/.test(data.genero)) {
      msg += "Genero Erroneo<br>";
    }
    if (!/^[A-Z0-9]{1,18}$/.test(data.crup)) {
      msg += "Crup Erroneo<br>";
    }
    if (!/^[0-9]{4}$/.test(data.anio)) {
      msg += "Anio Erroneo<br>";
    }
    if (!/^[0-9]{4}$/.test(data.folio)) {
      msg += "Folio Erroneo<br>";
    }
    return msg;
  }

});

</script>

<?php include("includes/footer.php")?>
  
