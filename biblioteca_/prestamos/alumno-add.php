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
                <img src="./img/statistics.png" class="img-empleado" alt="role">
                <div class="navigation">
                    <?php 
                        menuEmpleado();
                    ?>
                </div>
            </section>
            <section class="formulario-sec">
                <h2>Crear un nuevo prestamo</h2>
                <form action="insert.php" method="post" class="formulario">
                <select name="id_maestro">
                    <option value="NULL">Seleccione: Maestro</option>
                    <?php
                    $conexion = new mysqli("localhost", "root", "", "biblioteca");

                    $query = $conexion -> query ("SELECT * FROM maestro");
                    while ($valores = mysqli_fetch_array($query)) {
                        echo '<option value="'.$valores['id'].'">'.$valores['Nombre'].'</option>';
                    }
                    ?>
                </select>
                <select name="id_alumno">
                    <option value="NULL">Seleccione: Alumno</option>
                    <?php
                    $conexion = new mysqli("localhost", "root", "", "biblioteca");

                    $query = $conexion -> query ("SELECT * FROM alumno");
                    while ($valores = mysqli_fetch_array($query)) {
                        echo '<option value="'.$valores['id'].'">'.$valores['Nombre'].'</option>';
                    }
                    ?>
                </select>
                <select name="id_libro">
                    <option value="0">Seleccione: Libro</option>
                    <?php
                    $conexion = new mysqli("localhost", "root", "", "biblioteca");

                    $query = $conexion -> query ("SELECT * FROM libro WHERE stock > 0");
                    while ($valores = mysqli_fetch_array($query)) {
                        echo '<option value="'.$valores['id'].'">'.$valores['Titulo'].'</option>';
                    }
                    ?>
                </select>
                <label>Fecha Pretsamo</label>
                    <input type="date" name="fechaPrestamo" value="" >
                <label>Fecha Entrega</label>
                    <input type="date" name="fechaEntrega" value="" >
                    <input type="text" name="multa" value="" placeholder="multa: Este campo se autorellenara despues" disabled>
                    <input type="text" name="estatus" value="" placeholder="estatus: Prestado">
                    <input type="submit" name="" value="Crear">
                </form>
                <?php 
                $error = isset($_GET['add']);
                if($error == true){
                    ?> 
                    <div class="secces">
                        <p>Prestamo agregado correctamente</p>
                    </div>
                    <?php 
                }
                else{

                }
                
            ?>
            </section>
        </main>
 
    </body>

