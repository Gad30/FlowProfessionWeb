<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Canción</title>
    <link rel="stylesheet" href="BaseWeb.css"> 
    <style>
        header img {
            width: 150px;
            height: auto; 
            margin-bottom: 10px;
        }
    </style>
    <header>
    <img src="Imagenes/logo2.png" alt="Flow Profession">
    <nav>
        <ul>
            <li><a href="Inicio.html">Inicio</a></li>
            <li><a href="CatalogoP.html">Catálogo</a></li>
            <li><a href="ArtistasP.html">Artistas</a></li>
            <li><a href="ContactoP.html">Contacto</a></li>
            <li><a href="TuMusica.html">Manda Tú Música</a></li>
        </ul>
    </nav>
</header>
</head>
<body>
    <?php
    // Verificar si los datos de la canción se han enviado mediante POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos de la canción y el artista
        $titulo = $_POST['titulo'];
        $artista = $_POST['artista'];

        // Mostrar el título de la canción y el nombre del artista
        echo "<h1>Título: $titulo</h1>";
        echo "<h2>Artista: $artista</h2>";

        // Mostrar el cover (imagen) de la canción
        if (isset($_FILES['cover']) && $_FILES['cover']['error'] == UPLOAD_ERR_OK) {
            $cover_nombre = $_FILES['cover']['name'];
            echo "<h3>Nombre del Cover: $cover_nombre</h3>";
        }

        // Mostrar el nombre del archivo de audio de la canción
        if (isset($_FILES['audio']) && $_FILES['audio']['error'] == UPLOAD_ERR_OK) {
            $audio_nombre = $_FILES['audio']['name'];
            echo "<h3>Nombre del Audio: $audio_nombre</h3>";
        }
    }
    ?>
    <footer>
    <p>&copy; 2024 Flow Profession. Todos los derechos reservados.</p>
</footer>
</body>
</html>
