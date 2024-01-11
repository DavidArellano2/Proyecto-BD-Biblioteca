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
include('querys/menu-empleado.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registros</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<main>
<section class="nav">
                <img src="./img/statistics.png" class="img-empleado" alt="role">
                <div class="navigation">
                    <?php
                        menuEmpleado();
                    ?>
                </div>
            </section>
            <section class="formulario-sec">
                <div class="content-row">
                    <div class="content" style="justify-content:center;background:#017bab;color:#fff;">
                        <div>ID</div>
                        <div>Maestro</div>
                        <div>Alumno</div>
                        <div>Libro</div>
                        <div>Fecha Prestamos</div>
                        <div>Fecha Entrega</div>
                        <div>estatus</div>
                        <div style="background:#f4f4f4;color:#000;">Accion</div>
                    </div>
                <?php
                include("../conexion.php");
                $conexion = conexion();

                //generamos la peticion a la BD
                $sql = "SELECT * FROM prestamo";
                $datos = $conexion->query($sql);
                while($row = mysqli_fetch_object($datos)){
                    ?>
                    <div class="content">
                        <div><?php echo $row->id;?></div>
                        <div><?php echo $row->id_maestro;?></div>
                        <div><?php echo $row->id_alumno;?></div>
                        <div><?php echo $row->id_libro;?></div>
                        <div><?php echo $row->fechaPrestamo;?></div>
                        <div><?php echo $row->fechaEntrega;?></div>
                        <div><?php echo $row->estatus;?></div>
                        <div><a class="remove" href="/biblioteca/prestamos/querys/borrar.php?id=<?php echo $row->id;?>">X</a></div>
                    </div>
                    <?php } ?>
                </div>
            </section>
</main>
</body>
</html>