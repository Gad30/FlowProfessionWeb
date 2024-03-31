<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $artista = $_POST['artista'];

    // Rutas para archivos de audio y cover
    $carpeta_audio = 'archivos/audio/';
    $carpeta_covers = 'archivos/covers/';

    // Verificar si las carpetas existen, si no, crearlas
    if (!file_exists($carpeta_audio)) {
        mkdir($carpeta_audio, 0777, true);
    }

    if (!file_exists($carpeta_covers)) {
        mkdir($carpeta_covers, 0777, true);
    }

    // Manejo de archivo de audio
    $audio_nombre = $_FILES['audio']['name'];
    $audio_tmp_name = $_FILES['audio']['tmp_name'];
    $audio_destino = $carpeta_audio . $audio_nombre;
    move_uploaded_file($audio_tmp_name, $audio_destino);

    // Manejo de archivo de imagen (cover)
    $cover_nombre = $_FILES['cover']['name'];
    $cover_tmp_name = $_FILES['cover']['tmp_name'];
    $cover_destino = $carpeta_covers . $cover_nombre;
    move_uploaded_file($cover_tmp_name, $cover_destino);

    // Aquí puedes guardar la información en la base de datos o hacer cualquier otro procesamiento necesario

    // Redireccionar al usuario a otra página después de haber subido los archivos
    header("Location: SubC1.html");
    exit();
} else {
    // Si el método de solicitud no es POST, redireccionar a la página de inicio
    header("Location: Inicio.html");
    exit();
}
?>
