<?php 
function menuEmpleado(){
    echo('
        <a href="/biblioteca/maestros/registros.php"><div class="nav-item">Todos los registros</div></a>
        <a href="/biblioteca/maestros/alumno-add.php"><div class="nav-item">Insertar</div></a>
        <a href="/biblioteca/maestros/eliminar.php"><div class="nav-item">Eliminar</div></a>
        <a href="/biblioteca/maestros/actualizar.php"><div class="nav-item">Actualizar</div></a>
        <a href="/biblioteca/panel.html"><div class="nav-item">Regresar</div></a>
    ');
}
?>