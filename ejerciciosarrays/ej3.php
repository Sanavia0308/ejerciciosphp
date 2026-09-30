<?php
$medios = [
    "EL PAIS" => "https://elpais.com/",
    "EL MUNDO" => "https://www.elmundo.es/",
    "MARCA" => "https://www.marca.com/",
    "AS" => "https://as.com/",
    "MUNDODEPORTIVO" => "https://www.mundodeportivo.com/"
];


$nombres = array_keys($medios);

$posicion = rand(0, 4);

$nombre_elegido = $nombres[$posicion];
$url_elegida = $medios[$nombre_elegido];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <p>El Medio recomendado es: <a href="<?php echo $url_elegida; ?>"><?php echo $nombre_elegido; ?></a></p>

</body>
</html>