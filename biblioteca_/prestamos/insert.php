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

$id_maestro = $_POST['id_maestro'];
$id_alumno = $_POST['id_alumno'];
$id_libro = $_POST['id_libro'];
$fechaPrestamo = $_POST['fechaPrestamo'];
$fechaEntrega = $_POST['fechaEntrega'];
$multa = $_POST['multa'];
$estatus = $_POST['estatus'];

if($id_alumno == 'NULL'){
    $sql = "INSERT INTO prestamo (`id`, `id_maestro`, `id_alumno`, `id_libro`, `fechaPrestamo`, `fechaEntrega`, `multa`, `estatus`) 
        VALUES (NULL, '$id_maestro', NULL, '$id_libro', '$fechaPrestamo', '$fechaEntrega', NULL, '$estatus')";
}
else{
    $sql = "INSERT INTO prestamo (`id`, `id_maestro`, `id_alumno`, `id_libro`, `fechaPrestamo`, `fechaEntrega`, `multa`, `estatus`) 
        VALUES (NULL, NULL, '$id_alumno', '$id_libro', '$fechaPrestamo', '$fechaEntrega', NULL, '$estatus')";
}



/*$sql =  "INSERT INTO prestamo (`id`, `id_maestro`, `id_alumno`, `id_libro`, `fechaPrestamo`, `fechaEntrega`, `multa`, `estatus`) 
        VALUES (NULL, '1', NULL, '2', '2021-11-23', '2021-11-30', NULL, 'prestamo')";*/

if($conexion->query($sql) === true){
    //actualizar stock en libros

    /*$sql = "SELECT * FROM libro";
    $datos = $conexion->query($sql);
    if($datos->num_rows > 0){
        while($row = $datos->fetch_assoc()){
            $stock = $row['stock'];
        }
    }

    $sql = "UPDATE libro SET stock = '.$stock - 1.' WHERE id ='.$id_libro.' ";
    $datos = $conexion->query($sql);
    */

    ?>
    <script>window.location.href = "/biblioteca/prestamos/alumno-add.php?add=true";</script>
    <?php
}
else{
    die("Error query".$conexion->error);
}
?>