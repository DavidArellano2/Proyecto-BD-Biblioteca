<!DOCTYPE html >
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


<html lang="en" dir="ltr">
    <head>
        <meta charset="uft-8">
        <title>BIBLIOTECA EQUIPO 3</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <section class="form-login">
            <h5>Iniciar Sesión Bilioteca</h5>
            <form action="login.php" method="post">
                <input class="controls" type="text" name="nombre" value="" placeholder="Ingrese su Usuario">
                <input class="controls" type="password" name="contraseña" value="" placeholder="Ingrese su Contraseña">
                <input class="buttons" type="submit" name="" value="Ingresar">
            </form>
            <p><a href="#">¿Olvidaste tu contraseña? </a></p>
            
        </section>
        
        <?php 
                $error = isset($_GET['error']);
                if($error == true){
                    ?> 
                    <div class="error">
                        <p>Error de ingreso</p>
                    </div>
                    <?php 
                }
                else{

                }
                
            ?>
    </body>















</html>