<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Captura de datos</title>
</head>
<body>

    <main class="contenedor dive">
        <section class="tarjeta">
            <div class="encabezado">
                <div class="icono">&#128100;</div>
                <h1>Captura de datos personales</h1>
                <h2>Ingresa los datos que se te piden</h2>
                <p>Mi primera encuesta</p>
            </div>

            <form action="resultados.php" method="POST">
                
                <div class="campo">
                    <label for="nombre">&#128100; Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                </div>

                <div class="campo">
                    <label for="edad">&#128197; Edad</label>
                    <input type="number" id="edad" name="edad" placeholder="Ingresa tu edad" min="1" max="120" required>
                </div>

                <div class="campo">
                    <label for="ciudad">&#128205; Ciudad donde vives</label>
                    <input type="text" id="ciudad" name="ciudad" placeholder="Ingresa tu ciudad" required>
                </div>

                 <div class="campo">
                    <label for="pasatiempo">&#10084;&#65039;Pasatiempo favorito</label>
                    <input type="text" id="pasatiempo" name="pasatiempo" placeholder="Ingresa tu pasatiempo favorito" required>
                </div>

                <button type="submit" class="boton-enviar">&#128640; Enviar información</button>
                
            </form>
        </section>
    </main>

</body>
</html>