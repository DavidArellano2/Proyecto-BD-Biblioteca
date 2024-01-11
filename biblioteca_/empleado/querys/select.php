<?php 
function registros(){
//importamos la conexion
include("./../conexion.php");
$conexion = conexion();

//generamos la peticion a la BD
$sql = "SELECT * FROM empleado";
$datos = $conexion->query($sql);

//Hacemos validacion 

if($datos->num_rows > 0){
   while($row = $datos->fetch_assoc()){
      $id = $row['id'];
      $nss = $row['NSS'];
      $domicilio = $row['Domicilio'];
      $tel = $row['Telefono'];
      $nombre = $row['Nombre'];
      $fecha_nac = $row['FechaNacimiento'];
      $fecha_tra = $row['FechaInicioTrabajo'];
      $rol = $row['rol'];
      echo("
      <div class='content'>
        <div>$id</div>
        <div>$nss</div>
        <div>$domicilio</div>
        <div>$tel</div>
        <div>$nombre</div>
        <div>$fecha_nac</div>
        <div>$fecha_tra</div>
        <div>$rol</div>
      </div>
      ");
   }
}
}
?>