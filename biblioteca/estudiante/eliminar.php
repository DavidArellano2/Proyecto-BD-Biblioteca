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
                <img src="./img/graduated.png" class="img-empleado" alt="role">
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
                        <div>Codigo</div>
                        <div>Nombre</div>
                        <div>Carrera</div>
                        <div>Email</div>
                        <div>Telefono</div>
                        <div style="background:#f4f4f4;color:#000;">Accion</div>
                    </div>
                <?php
                include("../conexion.php");
                $conexion = conexion();

                //generamos la peticion a la BD
                $sql = "SELECT * FROM alumno";
                $datos = $conexion->query($sql);
                while($row = mysqli_fetch_object($datos)){
                    ?>
                    <div class="content">
                        <div><?php echo $row->id;?></div>
                        <div><?php echo $row->Codigo;?></div>
                        <div><?php echo $row->Nombre;?></div>
                        <div><?php echo $row->Carrera;?></div>
                        <div><?php echo $row->Email;?></div>
                        <div><?php echo $row->Telefono;?></div>
                        <div><a class="remove" href="/biblioteca/estudiante/querys/borrar.php?id=<?php echo $row->id;?>">X</a></div>
                    </div>
                    <?php } ?>
                </div>
            </section>
</main>
</body>
</html>