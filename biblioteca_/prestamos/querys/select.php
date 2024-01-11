<?php 
function registros(){
//importamos la conexion
include("./../conexion.php");
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
      
     

      echo("
      <div class='content'>
        <div id='id'>$id</div>
        <div>$id_maestro</div>
        <div>$id_alumno</div>
        <div>$id_libro</div>
        <div>$fechaPrestamo</div>
        <div>$fechaEntrega</div>
        <div>$multa</div>
        <div>$estatus</div>
      </div>
      ");
   }
}
}
?>