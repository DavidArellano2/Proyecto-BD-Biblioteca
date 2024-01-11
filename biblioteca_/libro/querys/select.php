<?php 
function registros(){
//importamos la conexion
include("./../conexion.php");
$conexion = conexion();

//generamos la peticion a la BD
$sql = "SELECT * FROM libro";
$datos = $conexion->query($sql);

//Hacemos validacion 

if($datos->num_rows > 0){
   while($row = $datos->fetch_assoc()){
      $id = $row['id'];
      $ISBN = $row['ISBN'];
      $Titulo = $row['Titulo'];
      $Autor = $row['Autor'];
      $Editorial = $row['Editorial'];
      $NumeroEjemplar = $row['NumeroEjemplar'];
      $anoPublicacion = $row['anoPublicacion'];
      $stock = $row['stock'];
      echo("
      <div class='content'>
        <div>$id</div>
        <div>$ISBN</div>
        <div>$Titulo</div>
        <div>$Autor</div>
        <div>$Editorial</div>
        <div>$NumeroEjemplar</div>
        <div>$anoPublicacion</div>
        <div>$stock</div>
      </div>
      ");
   }
}
}
?>