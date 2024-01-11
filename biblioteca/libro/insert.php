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

$ISBN = $_POST['ISBN'];
$Titulo = $_POST['Titulo'];
$Autor = $_POST['Autor'];
$Editorial = $_POST['Editorial'];
$NumeroEjemplar = $_POST['NumeroEjemplar'];
$anoPublicacion = $_POST['anoPublicacion'];
$stock = $_POST['stock'];



$sql = "INSERT INTO libro (id, ISBN, Titulo, Autor, Editorial, NumeroEjemplar, anoPublicacion, stock) 
        VALUES ('auto', '$ISBN', '$Titulo', '$Autor', '$Editorial', '$NumeroEjemplar', '$anoPublicacion', '$stock')";

if($conexion->query($sql) === true){
    ?>
    <script>window.location.href = "/biblioteca/libro/libro-add.php?add=true";</script>
    <?php
}
else{
    die("Error query".$conexion->error);
}
?>