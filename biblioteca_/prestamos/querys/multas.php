<?php
include("./../../conexion.php");
$conexion = conexion();

//generamos la peticion a la BD
$sql = "SELECT * FROM prestamo";
$datos = $conexion->query($sql);

//Hacemos validacion 

if($datos->num_rows > 0){
   while($row = $datos->fetch_assoc()){

      $id = $row['id'];
      $id_maestro = $row['id_maestro'];
      $id_alumno = $row['id_alumno'];
      $id_libro = $row['id_libro'];
      $fechaPrestamo = $row['fechaPrestamo'];
      $fechaEntrega = $row['fechaEntrega'];
      $multa = $row['multa'];
      $estatus = $row['estatus'];
      

      $sqlMulta = "UPDATE prestamo set multa = TIMESTAMPDIFF(DAY,'$fechaPrestamo', '$fechaEntrega') * 5 
                    WHERE TIMESTAMPDIFF(DAY,'$fechaPrestamo', '$fechaEntrega') > 7 AND id == $id ";


      $result = $conexion->query($sqlMulta);
      echo($sqlMulta);
      echo('<br>');

      
      ?>
    <script>window.location.href = "/biblioteca/prestamos/registros.php";</script>
    <?php

   }
}


////////////////
?>


