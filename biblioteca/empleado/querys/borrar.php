<?php 
    include("../../conexion.php");
    function delete($tblname,$field_id,$id){
        $conexion = conexion();
        $sql = "delete from ".$tblname." where ".$field_id."=".$id."";
        $datos = $conexion->query($sql);
    }

    $id = $_GET['id'];
    delete('empleado','id',$id);
    header("location:/biblioteca/empleado/eliminar.php");
?>