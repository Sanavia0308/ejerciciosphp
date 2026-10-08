<?php
// Si la petición es GET, simplemente mostramos el formulario
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include 'captura.html';
    exit();
}

// Si la petición es POST, procesamos la información enviada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 1. Control de inyección de código (Sanitización)
    $nombre = htmlspecialchars($_POST['nombre'] ?? '', ENT_QUOTES, 'UTF-8');
    $alias  = htmlspecialchars($_POST['alias'] ?? '', ENT_QUOTES, 'UTF-8');
    $edad   = htmlspecialchars($_POST['edad'] ?? '', ENT_QUOTES, 'UTF-8');
    $magia  = htmlspecialchars($_POST['magia'] ?? 'No', ENT_QUOTES, 'UTF-8');

    // 2. Procesar el array de armas seleccionadas
    $armas = isset($_POST['armas']) ? $_POST['armas'] : [];
    $armas_texto = !empty($armas) ? implode(', ', array_map('htmlspecialchars', $armas)) : 'Ninguna';

    // 3. Procesar la imagen
    $ruta_imagen = 'calavera.png'; // Imagen por defecto
    $mensaje_imagen = '';
    $error_imagen = false;

    // Verificar si se ha intentado subir algún archivo
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] !== UPLOAD_ERR_NO_FILE) {
        $file = $_FILES['imagen'];

        // Comprobamos si hubo un error de subida genérico o por tamaño del cliente
        if ($file['error'] !== UPLOAD_ERR_OK) {
            $error_imagen = true;
            $mensaje_imagen = "Error al subir la imagen";
        } else {
            // Validación en el servidor: Tamaño máximo 10 KB (10240 bytes)
            $max_tamano = 10 * 1024;
            
            // Validación en el servidor: Tipo MIME o Extensión sea exclusivamente PNG
            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

            if ($file['size'] > $max_tamano) {
                $error_imagen = true;
                $mensaje_imagen = "Error al subir la imagen (Supera los 10 KB)";
            } elseif ($extension !== 'png') {
                $error_imagen = true;
                $mensaje_imagen = "Error al subir la imagen (Solo se permiten archivos PNG)";
            } else {
                // Si pasa las validaciones, movemos el archivo a la carpeta 'uploads/'
                $directorio_destino = 'uploads/';

                $nombre_archivo = time() . '_' . basename($file['name']);
                $destino_final = $directorio_destino . $nombre_archivo;

                if (move_uploaded_file($file['tmp_name'], $destino_final)) {
                    $ruta_imagen = $destino_final;
                    $mensaje_imagen = "Imagen subida:";
                } else {
                    $error_imagen = true;
                    $mensaje_imagen = "Error al subir la imagen";
                }
            }
        }
    } else {
        // No se seleccionó ninguna imagen
        $mensaje_imagen = "No se subió ninguna imagen.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Jugador</title>
    <style>
    /* Centra la tarjeta horizontal y verticalmente en la pantalla */
    body {
        background-color: #f4f4f4; /* O el color de fondo que prefieras */
        display: flex;
        justify-content: center; /* Centrado horizontal */
        align-items: center;     /* Centrado vertical */
        min-height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }

    /* Estilos de la tarjeta amarilla del personaje */
    .tarjeta {
        background-color: #ffff55;
        padding: 30px;
        border-radius: 15px;
        width: 100%;
        max-width: 550px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        box-sizing: border-box;
    }

    .info { 
        width: 60%; 
    }

    .imagen-box { 
        width: 35%; 
        text-align: center; 
    }

    .imagen-box img { 
        max-width: 100%; 
        border: 1px solid blue; 
        display: block;
        margin: 0 auto;
    }

    .error-texto { 
        color: red; 
        font-weight: bold; 
        margin-top: 5px; 
    }
</style>
</head>
<body>

<div class="tarjeta">
    <div class="info">
        <h2>Datos del Jugador</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Alias:</strong> <?php echo $alias; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?></p>
        <p><strong>Armas seleccionadas:</strong> <?php echo $armas_texto; ?></p>
        <p><strong>¿Practica artes mágicas?:</strong> <?php echo $magia; ?></p>
    </div>

    <div class="imagen-box">
        <p><strong><?php echo $mensaje_imagen; ?></strong></p>
        <img src="<?php echo $ruta_imagen; ?>" alt="Imagen del jugador">
        
        <?php if ($error_imagen): ?>
            <p class="error-texto">Error al subir la imagen</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>