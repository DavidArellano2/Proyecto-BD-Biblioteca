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



$sql = "INSERT INTO alumno (id, Codigo, Nombre, Carrera, Email, Telefono) 
        VALUES ('auto', '$Codigo', '$Nombre', '$Carrera', '$Email', '$Telefono')";

if($conexion->query($sql) === true){
    ?>
    <script>window.location.href = "/biblioteca/estudiante/alumno-add.php?add=true";</script>
    <?php
}
else{
    die("Error query".$conexion->error);
}
?>