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
                <img src="./img/libro.png" class="img-empleado" alt="role">
                <div class="navigation">
                    <?php 
                        menuEmpleado();
                    ?>
                </div>
            </section>
            <section class="formulario-sec">
                <h2>INSERTA NUEVO LIBRO</h2>
                <form action="insert.php" method="post" class="formulario">
                    <input type="text" name="ISBN" value="" placeholder="ISBN">
                    <input type="text" name="Titulo" value="" placeholder="Titulo">
                    <input type="text" name="Autor" value="" placeholder="Autor">
                    <input type="text" name="Editorial" value="" placeholder="Editorial">
                    <input type="text" name="NumeroEjemplar" value="" placeholder=" Numero ejemplar">
                    <input type="text" name="anoPublicacion" value="" placeholder="Año de publicacion">
                    <input type="text" name="stock" value="" placeholder="stock">
                    <input type="submit" name="" value="Insertar">
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

