<?php include("conexion.php")?>
<?php include("includes/header.php")?>
<title>Listar</title>

<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>NOMBRE </th>
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
        <th>GENERO</th>
        <th>CRUP</th>
        <th>FOLIO</th>
        <th>AÑO</th>
        <th>ACCION</th>
      </tr>
    </thead>
        <tbody>
            <?php
            $query ="SELECT * FROM operador";
            $result = mysqli_query($conn,$query);
           

            while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo $row['Nombre']?></td>
              <td><?php echo $row['ApellidoP']?></td>
              <td><?php echo $row['ApellidoM']?></td>
              <td><?php echo $row['Genero']?></td>
              <td><?php echo $row['Crup']?></td>
              <td><?php echo $row['Folio']?></td>
              <td><?php echo $row['año']?></td>
              <td>
                <a href="editar.php?id=<?php echo $row['Folio']?>"> <i class="fas fa-marker"></i></a>
                <a href="eliminar.php?id=<?php echo $row['Folio']?>"> <i class="far fa-trash-alt"></i></a></a>
                
              </td>

            </tr>
<?php
            }
            ?>
        </tbody>
  </table>
</div>


<?php include("includes/footer.php")?>