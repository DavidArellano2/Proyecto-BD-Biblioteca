<!-----
EQUIPO 3
CALENDARIO 2021B
SECCION D04

|||| Integrantes |||||
Guzman Mares Cesar Eduardo 214792198
Ibarra Castañeda Arturo 216753661  
Marcos Alberto Linares Perez 214792058
López Arellano Ricardo David 217136143

---->

<?php 
//importamos la conexion
include("conexion.php");
$conexion = conexion();

//Obtenemos los datos del FORM
$nombre = $_POST['nombre'];
$pass = $_POST['contraseña'];

//generamos la peticion a la BD
$sql = "SELECT * FROM empleado";
$datos = $conexion->query($sql);

//Hacemos validacion 
if($datos->num_rows > 0){
   while($row = $datos->fetch_assoc()){
      $user = $row['Nombre'];
      $passbd = $row['pass'];
      $rol = $row['rol'];
      if($rol == 'admin'){
         if($nombre == $user && $pass == $passbd){
            ?>
            <script>window.location.href = "/biblioteca/panel.html";</script>
            <?php
         }
         else{
             ?>
            <script>window.location.href = "/biblioteca/?error=true";</script>
            <?php
         }
      }
   }
}
?>