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
                <img src="./img/user.png" class="img-empleado" alt="role">
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
                        <div>NSS</div>
                        <div>domicilio</div>
                        <div>Tel</div>
                        <div>Nombre</div>
                        <div>Fecha Nacimiento</div>
                        <div>Fecha Trabajo</div>
                        <div>Rol</div>
                        <div>Accion</div>
                    </div>
                <?php
                include("../conexion.php");
                $conexion = conexion();

                //generamos la peticion a la BD
                $sql = "SELECT * FROM empleado";
                $datos = $conexion->query($sql);
                while($row = mysqli_fetch_object($datos)){
                    ?>
                    <div class="content">
                    <div><?php echo $row->id;?></div>
                        <div><?php echo $row->NSS;?></div>
                        <div><?php echo $row->Domicilio;?></div>
                        <div><?php echo $row->Telefono;?></div>
                        <div><?php echo $row->Nombre;?></div>
                        <div><?php echo $row->FechaNacimiento;?></div>
                        <div><?php echo $row->FechaInicioTrabajo;?></div>
                        <div><?php echo $row->rol;?></div>
                        <div><a class="edit" 
                            href="/biblioteca/empleado/querys/actualizarEmpleado.php?id=<?php echo $row->id.'&nss='.$row->NSS.'&telefono='.$row->Telefono.'&nombre='.$row->Nombre.'&fechanac='.$row->FechaNacimiento.'&fechainicio='.$row->FechaInicioTrabajo.'&pass='.$row->pass.'&rol='.$row->rol;?>">
                        Editar</a></div>
                    </div>
                    <?php } ?>
                </div>
            </section>
</main>
</body>
</html>