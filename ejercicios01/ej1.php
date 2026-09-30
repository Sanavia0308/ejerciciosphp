<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej01</title>
</head>
<body>
    <?php
    $num1 = random_int(1,10);
    $num2 = random_int(1,10);
    echo "Suma = ".$num1.'+'.$num2.' =' .$num1+$num2."<br>";
    echo "Resta = ".$num1.'-'.$num2.' =' .$num1-$num2."<br>";
    echo "Division = ".$num1.':'.$num2.' =' .$num1/$num2."<br>";
    echo "Multiplicacion = ".$num1.'x'.$num2.' =' .$num1*$num2."<br>";
    echo "Modulo = ".$num1.'%'.$num2.' =' .$num1%$num2."<br>";
    echo "Potencia = ".$num1.'**'.$num2.' =' .$num1**$num2."<br>";

    ?>
</body>
</html>