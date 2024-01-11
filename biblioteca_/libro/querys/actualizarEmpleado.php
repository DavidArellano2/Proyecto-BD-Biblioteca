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
                <form action="actualizarEmpleadoFormulario.php" method="get" class="formulario">
                    <?php 
                        $id = isset($_GET["id"]);
                        $nss= isset($_GET["nss"]);
                        $tel= isset($_GET["telefono"]);
                        $nombre= isset($_GET["nombre"]);
                        //$domicilio = isset($_GET["domicilio"]);
                        $fechanac = isset($_GET["fechanac"]);
                        $fechainicio = isset($_GET["fechainicio"]);
                        $pass = isset($_GET["pass"]);
                        $rol = isset($_GET["rol"]);
                    ?>

                    <input type="text" name="id" value="<?php echo($_GET["id"]); ?>" placeholder="NSS" style="display:none;">
                    <input type="text" name="ISBN" value="<?php echo($_GET["ISBN"]); ?>" placeholder="NSS">
                    <input type="text" name="Titulo" value="<?php echo($_GET["Titulo"]); ?>" placeholder="Titulo">
                    <input type="text" name="Autor" value="<?php echo($_GET["Autor"]); ?>" placeholder="nombre">
                    <input type="text" name="Editorial" value="<?php echo($_GET["Editorial"]); ?>" placeholder=" Fecha naciemineto: 01-10-2021">
                    <input type="text" name="NumeroEjemplar" value="<?php echo($_GET["NumeroEjemplar"]); ?>" placeholder="Fecha de inicio: 01-10-2021">
                    <input type="text" name="anoPublicacion" value="<?php echo($_GET["anoPublicacion"]); ?>" placeholder="">
                    <input type="text" name="stock" value="<?php echo($_GET["stock"]); ?>" placeholder="">
                    <input type="submit" name="" value="Actualizar">
                </form>
                <?php 
                $error = isset($_GET['add']);
                if($error == true){
                    ?> 
                    <div class="secces">
                        <p>Libro agregado correctamente</p>
                    </div>
                    <?php 
                }
                else{

                }
                
            ?>
            </section>
        </main>
 
    </body>

