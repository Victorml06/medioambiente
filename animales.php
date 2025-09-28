<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <header id="cabecera">
            <h1 id="titulo">PAGINA SOBRE MEDIO AMBIENTE</h1>
        </header>
        <nav>
            <ol>
                <li>
                    <a href="index.html">Inicio</a>
                </li>
                <li>
                    <a href="calentamientoglobal.html">Calentamiento Global</a>
                </li>
                <li>
                    <a href="animales.php">Como afecta a los animales</a>
                </li>
            </ol>
        </nav>
        
            <div>
                <marquee behavior="" direction="">
                    <img src="mono.png" alt="" class="marquee-img">
                    <img src="leon.png" alt="" class="marquee-img">
                    <img src="oso.png" alt="" class="marquee-img">
                </marquee>
            </div>
        
        
            <div class="contenedor1">
                <h3>Perdida de habitat:</h3>
                <p>
                    El cambio climático está transformando ecosistemas 
                    enteros, obligando a muchas especies a desplazarse o adaptarse rápidamente. 
                    Sin embargo, la velocidad del cambio dificulta su supervivencia, poniendo en riesgo la 
                    biodiversidad global.
                </p>
            </div>
            <div class="contenedor2">
                <h3>Escasez de alimento:</h3>
                <p>
                    El cambio climático altera cultivos y ecosistemas, reduciendo la disponibilidad de 
                    alimentos y poniendo en riesgo la seguridad alimentaria de millones de animales.
                </p>
            </div>
            <div class="contenedor3">
                <h3>Migración obligatoria:</h3>
                <p>
                    El cambio climático está desplazando a millones de personas. En 2022, 32,6 millones 
                    de personas se vieron obligadas a desplazarse, superando en un 41 % el promedio de 
                    los últimos diez años. De estos desplazados, el 70 % busca refugio en países vecinos,
                    prefiriendo permanecer lo más cerca posible de su hogar y su familia, ya sea para 
                    escapar de un conflicto o de una catástrofe natural.
                </p>
            </div>
        
        
            <div class="formulario">
                <h2>Formulario de información personal</h2>
                <form action="enviar.php" method="POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"><br><br>

                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido"><br><br>

                    <label for="edad">Edad:</label>
                    <input type="number" id="edad" name="edad"><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"><br><br>

                    <label for="fecha">Fecha de nacimiento:</label>
                    <input type="date" id="fecha" name="fecha"><br><br>

                    <label for="genero">Género:</label>
                    <select id="genero" name="genero">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select><br><br>

                    <label>¿Cuál es tu forma preferida de ayudar al medio ambiente?</label><br>
                    <input type="radio" id="reciclar" name="ayuda" value="reciclar">
                    <label for="reciclar">Reciclar</label><br>
                    <input type="radio" id="plantar" name="ayuda" value="plantar">
                    <label for="plantar">Plantar árboles</label><br>
                    <input type="radio" id="ahorrar" name="ayuda" value="ahorrar">
                    <label for="ahorrar">Ahorrar energía</label><br><br>

                    <label>Selecciona las acciones que ya realizas:</label><br>
                    <input type="checkbox" id="usarBolsas" name="acciones[]" value="usarBolsas">
                    <label for="usarBolsas">Uso bolsas reutilizables</label><br>
                    <input type="checkbox" id="transportepublico" name="acciones[]" value="transportepublico">
                    <label for="transportepublico">Uso transporte público</label><br>
                    <input type="checkbox" id="reducirAgua" name="acciones[]" value="reducirAgua">
                    <label for="reducirAgua">Reduzco el consumo de agua</label><br><br>

                    <input type="checkbox" id="terminos" name="terminos" value="aceptado" required>
                    <label for="terminos">Acepto los términos y condiciones</label><br><br>

                    <input type="submit" value="Enviar">
                </form>
            </div>
        
        
    </body>
    <footer >
        &copy; 2025 EVG. Todos los derechos reservados.
    </footer>
    <div>
        
    </div>
</html>
