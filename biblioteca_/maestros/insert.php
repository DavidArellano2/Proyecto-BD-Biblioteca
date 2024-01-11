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
include("../conexion.php");
$conexion = conexion();

$Codigo = $_POST['Codigo'];
$Nombre = $_POST['Nombre'];
$Carrera = $_POST['Carrera'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$GradoEst = $_POST['GradoEst'];



$sql = "INSERT INTO maestro (id, Codigo, Nombre, Carrera, Email, Telefono, GradoEst) 
        VALUES ('auto', '$Codigo', '$Nombre', '$Carrera', '$Email', '$Telefono', '$GradoEst')";

if($conexion->query($sql) === true){
    ?>
    <script>window.location.href = "/biblioteca/maestros/alumno-add.php?add=true";</script>
    <?php
}
else{
    die("Error query".$conexion->error);
}
?>