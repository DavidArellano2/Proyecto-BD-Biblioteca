<?php 
include("../../conexion.php");
$id = isset($_GET["id"]);
$nss= isset($_GET["nss"]);
$tel= isset($_GET["telefono"]);
$nombre= isset($_GET["nombre"]);
//$domicilio = isset($_GET["domicilio"]);
$fechanac = isset($_GET["fecha_nac"]);
$fechainicio = isset($_GET["fecha_tra"]);
$pass = isset($_GET["pass"]);
$rol = isset($_GET["rol"]);

$conexion = conexion();
//UPDATE `empleado` SET `Telefono` = '333285205' WHERE `empleado`.`id` = 7;

$sql = "UPDATE empleado SET NSS ='".$_GET["nss"]."',Telefono ='".$_GET["telefono"]."',Nombre ='".$_GET["nombre"]."',FechaNacimiento ='".$_GET["fecha_nac"]."',FechaInicioTrabajo ='".$_GET["fecha_tra"]."',pass ='".$_GET["pass"]."',rol ='".$_GET["rol"]."' where id ='".$_GET["id"]."'";
$datos = $conexion->query($sql);
echo($sql);
header("location:/biblioteca/empleado/actualizar.php");
?>