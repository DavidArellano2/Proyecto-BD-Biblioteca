<?php 
function registros(){
//importamos la conexion
include("./../conexion.php");
$conexion = conexion();

//generamos la peticion a la BD
$sql = "SELECT * FROM alumno";
$datos = $conexion->query($sql);

//Hacemos validacion 

if($datos->num_rows > 0){
   while($row = $datos->fetch_assoc()){
      $id = $row['id'];
      $Codigo = $row['Codigo'];
      $Nombre = $row['Nombre'];
      $Carrera = $row['Carrera'];
      $Email = $row['Email'];
      $Telefono = $row['Telefono'];
      echo("
      <div class='content'>
        <div id='id'>$id</div>
        <div>$Codigo</div>
        <div>$Nombre</div>
        <div>$Carrera</div>
        <div>$Email</div>
        <div>$Telefono</div>
      </div>
      ");
   }
}
}
?>