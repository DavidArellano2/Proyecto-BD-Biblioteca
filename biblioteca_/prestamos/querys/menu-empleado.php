<?php 
function menuEmpleado(){
    echo('
        <a href="/biblioteca/prestamos/registros.php"><div class="nav-item">Todos los registros</div></a>
        <a href="/biblioteca/prestamos/alumno-add.php"><div class="nav-item">Insertar</div></a>
        <a href="/biblioteca/prestamos/eliminar.php"><div class="nav-item">Eliminar</div></a>
        <a href="/biblioteca/prestamos/querys/multas.php"><div class="nav-item">Multas</div></a>
        <a href="/biblioteca/panel.html"><div class="nav-item">Regresar</div></a>
    ');
}
?>