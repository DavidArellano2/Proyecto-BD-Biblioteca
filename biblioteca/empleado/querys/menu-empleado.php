<?php 
function menuEmpleado(){
    echo('
        <a href="/biblioteca/empleado/registros.php"><div class="nav-item">Todos los registros</div></a>
        <a href="/biblioteca/empleado/empleado-add.php"><div class="nav-item">Insertar</div></a>
        <a href="/biblioteca/empleado/eliminar.php"><div class="nav-item">Eliminar</div></a>
        <a href="/biblioteca/empleado/actualizar.php"><div class="nav-item">Actualizar</div></a>
        <a href="/biblioteca/panel.html"><div class="nav-item">Regresar</div></a>
    ');
}
?>