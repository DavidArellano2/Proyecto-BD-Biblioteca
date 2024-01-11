<?php
include("../../conexion.php");
    function delete($tblname,$field_id,$id){
        $conexion = conexion();
        $sql = "delete from ".$tblname." where ".$field_id."=".$id."";
        $datos = $conexion->query($sql);
    }

    

    //header("location:/biblioteca/empleado/actualizar.php");
?>
<?php
include('./menu-empleado.php');
?>
<!DOCTYPE html >

<html lang="en" dir="ltr">
    <head>
        <meta charset="uft-8">
        <title>Actualizando...</title>
        <link rel="stylesheet" href="../style.css">
        
    </head>
    <body>
        <main>
            <section class="nav">
                <img src="./../img/libro.png" class="img-empleado" alt="role">
                <div class="navigation">
                    <?php 
                        menuEmpleado();
                    ?>
                </div>
            </section>
            <section class="formulario-sec">
                <h2>ACTUALIZAR</h2>
                <form action="actualizarAlumnoFormulario.php" method="get" class="formulario">
                    <?php 
                        $id = isset($_GET["id"]);
                        $Codigo= isset($_GET["Codigo"]);
                        $tel= isset($_GET["Carrera"]);
                        $Carrera= isset($_GET["Carrera"]);
                        //$domicilio = isset($_GET["domicilio"]);
                        $Email = isset($_GET["Email"]);
                        $Telefono = isset($_GET["Telefono"]);
                    ?>

                    <input type="text" name="id" value="<?php echo($_GET["id"]); ?>" placeholder="Codigo" style="display:none;">
                    <input type="text" name="Codigo" value="<?php echo($_GET["Codigo"]); ?>" placeholder="Codigo">
                    <input type="text" name="Nombre" value="<?php echo($_GET["Nombre"]); ?>" placeholder="Nombre">
                    <input type="text" name="Carrera" value="<?php echo($_GET["Carrera"]); ?>" placeholder="Carrera">
                    <input type="text" name="Email" value="<?php echo($_GET["Email"]); ?>" placeholder=" Fecha naciemineto: 01-10-2021">
                    <input type="text" name="Telefono" value="<?php echo($_GET["Telefono"]); ?>" placeholder="Fecha de inicio: 01-10-2021">
                    <input type="submit" name="" value="Actualizar">
                </form>
                <?php 
                $error = isset($_GET['add']);
                if($error == true){
                    ?> 
                    <div class="secces">
                        <p>Empleado agregado correctamente</p>
                    </div>
                    <?php 
                }
                else{

                }
                
            ?>
            </section>
        </main>
 
    </body>

