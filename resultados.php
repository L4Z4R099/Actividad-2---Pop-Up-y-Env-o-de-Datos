<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resultados de datos</title>
</head>
<body>

    <main class="contenedor dive2">
        <section class="tarjeta resultado">
            <div class="icono">&#9989;</div>

            <h1>Resultados</h1>
            <img src="Listo.jfif" alt="Imagen no disponioble" class="imagen-resultado">

            <div id="datos-recibidos">

                <?php 
                $nombre=$_POST['nombre']; 
                echo '<p><b>Nombre: </b>' . $nombre . '</p>';
                
                $edad=$_POST['edad']; 
                echo '<p><b>Edad: </b>' . $edad . '</p>';
                
                $ciudad=$_POST['ciudad']; 
                echo '<p><b>Ciudad: </b>' . $ciudad . '</p>';
                
                $pasatiempo=$_POST['pasatiempo']; 
                echo '<p><b>Pasatiempo: </b>' . $pasatiempo . '</p>';
                ?>

            </div>

            <h2>¡Bien hecho!</h2>

            <button onclick="Alert.render()" class="boton-resultado">&#128640; Regresar</button>
       
        </section>
    </main>

    <div id="popUpBox">
        <div class="icono-popup">&#128221;</div>
        <h2>¡Nuevo registro!</h2>
        <p>Los datos han sido procesados con éxito</p>
        <a href="index.php" style="text-decoration: none;">
        <button id="btnCerrarPopUp" class="boton-resultado">Aceptar e ingresar nuevo registro</button>
        </a>
    </div>

    <script src="app.js"></script>

</body>
</html>