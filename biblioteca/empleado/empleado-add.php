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
                <h2>INSERTA NUEVO EMPLEADO</h2>
                <form action="insert.php" method="post" class="formulario">
                    <input type="text" name="nss" value="" placeholder="NSS">
                    <input type="text" name="domicilio" value="" placeholder="domicilio">
                    <input type="text" name="telefono" value="" placeholder="Telefono">
                    <input type="text" name="nombre" value="" placeholder="nombre">
                    <input type="text" name="fecha_nac" value="" placeholder=" Fecha naciemineto: 01-10-2021">
                    <input type="text" name="fecha_tra" value="" placeholder="Fecha de inicio: 01-10-2021">
                    <input type="text" name="pass" value="" placeholder="Password">
                    <input type="text" name="rol" value="" placeholder="empleado">
                    <input type="submit" name="" value="Ingresar">
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

