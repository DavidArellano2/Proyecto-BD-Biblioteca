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
function conexion(){
    $conexion = new mysqli("localhost", "root", "", "biblioteca");
    if ($conexion->connect_errno) {
        die('Conexion fallida: '. $conexion->conect_error);
    }
    return $conexion;
}

$conexion = new mysqli("localhost", "root", "", "biblioteca");
    if ($conexion->connect_errno) {
        die('Conexion fallida: '. $conexion->conect_error);
    }

 /*$sql = "CREATE DATABASE biblioteca";
 if($conexion->query($sql) === true){
     echo("Base de datos conectada correctamente ");
 }   
 else{
     die("ERROR al crear base de datos: ". $conexion->error);
 }*/

/*$sql = "CREATE TABLE usuario(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    NSS varchar(15) not null,
    Domicilio varchar(50) not null,
    Telefono varchar(10) not null,
    Nombre varchar(40) not null,
    FechaNacimiento varchar(10) not null,
    FechaInicioTrabajo varchar(10) not null
)";*/
/*$sql = "INSERT INTO usuario (id, NSS, Domicilio, Telefono, Nombre, FechaNacimiento, FechaInicioTrabajo) 
        VALUES ('auto', '214792198', 'Calle hacienda calderon #1876', '33144007428', 'admin', '01-07-1999', '20-10-2021')";

if($conexion->query($sql) === true){
    echo("exito");
}
else{
    die("Error query".$conexion->error);
}*/
/*$sql = "ALTER TABLE empleado ADD rol VARCHAR(10);";
if($conexion->query($sql) === true){
    echo("exito");
}
else{
    die("Error query".$conexion->error);
}*/
?>