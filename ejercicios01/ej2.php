<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=random_int(1,9);
    echo "numero generado  = ".$num."<br><br>";

    for ($i= 1; $i <= $num; $i++) {
        $color = ($i%2==0)? "red":"blue";
        $fila =  " ";
        for ($j= 1; $j <= $i; $j++) {
            $fila .= $i;
        }
        echo "<span style='color: $color;'>$fila</span><br>";
    }
    ?>
</body>
</html>