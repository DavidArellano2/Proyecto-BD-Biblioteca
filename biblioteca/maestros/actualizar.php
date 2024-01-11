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
<title>Actualizar Registros</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<main>
<section class="nav">
                <img src="./img/teacher.png" class="img-empleado" alt="role">
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
                        <div>Grado</div>
                        <div>Accion</div>
                    </div>
                <?php
                include("../conexion.php");
                $conexion = conexion();

                //generamos la peticion a la BD
                $sql = "SELECT * FROM maestro";
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
                        <div><?php echo $row->GradoEst;?></div>
                        <div><a class="edit" 
                            href="/biblioteca/maestros/querys/actualizarAlumno.php?id=<?php echo $row->id.'&Codigo='.$row->Codigo.'&Nombre='.$row->Nombre.'&Carrera='.$row->Carrera.'&Email='.$row->Email.'&Telefono='.$row->Telefono.'&GradoEst='.$row->GradoEst?>">
                        Editar</a></div>
                    </div>
                    <?php } ?>
                </div>
            </section>
</main>
</body>
</html>