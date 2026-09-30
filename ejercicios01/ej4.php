<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $seisseguidos=0;
    $totalnumeros=0;
    $inicio=microtime(true);
    while ($seisseguidos<3){
    $num=random_int(1,10);
    $totalnumeros++;
    if ($num==6){
        $seisseguidos++;
    }else {
        $seisseguidos=0;
    }
    }
    $final=microtime(true);
    $tiempototal=($final-$inicio)*1000;
    echo "Han salido tres seises seguidos tras generar ".$totalnumeros." numeros en ".$tiempototal." milisegundos";

    
    ?>
</body>
</html>