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
include('querys/select.php');
include('querys/menu-empleado.php');
?>
<!DOCTYPE html >
<html lang="en" dir="ltr">
    <head>
        <meta charset="uft-8">
        <title>BIBLIOTECA EQUIPO 3</title>
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
                    </div>
                <?php
                registros();
                ?>
                </div>
            </section>
        </main>
 
    </body>

