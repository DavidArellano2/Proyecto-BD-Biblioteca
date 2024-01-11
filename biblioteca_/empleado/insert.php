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

$nss = $_POST['nss'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$nombre = $_POST['nombre'];
$fecha_nac = $_POST['fecha_nac'];
$fecha_tra = $_POST['fecha_tra'];
$pass = $_POST['pass'];
$rol = $_POST['rol'];


$sql = "INSERT INTO empleado (id, NSS, Domicilio, Telefono, Nombre, FechaNacimiento, FechaInicioTrabajo, pass, rol) 
        VALUES ('auto', '$nss', '$domicilio', '$telefono', '$nombre', '$fecha_nac', '$fecha_tra', '$pass', '$rol')";

if($conexion->query($sql) === true){
    ?>
    <script>window.location.href = "/biblioteca/empleado/empleado-add.php?add=true";</script>
    <?php
}
else{
    die("Error query".$conexion->error);
}
?>