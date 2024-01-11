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
<!DOCTYPE html >

<html lang="en" dir="ltr">
    <head>
        <meta charset="uft-8">
        <title>Insertar Registro</title>
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
                <h2>INSERTA NUEVO MAESTRO</h2>
                <form action="insert.php" method="post" class="formulario">
                    <input type="text" name="Codigo" value="" placeholder="Codigo">
                    <input type="text" name="Nombre" value="" placeholder="Nombre">
                    <input type="text" name="Carrera" value="" placeholder="Carrera">
                    <input type="text" name="Email" value="" placeholder="Email">
                    <input type="text" name="Telefono" value="" placeholder=" Telefono">
                    <input type="text" name="GradoEst" value="" placeholder=" Grado de estudios">
                    <input type="submit" name="" value="Insertar">
                </form>
                <?php 
                $error = isset($_GET['add']);
                if($error == true){
                    ?> 
                    <div class="secces">
                        <p>Maestro agregado correctamente</p>
                    </div>
                    <?php 
                }
                else{

                }
                
            ?>
            </section>
        </main>
 
    </body>

