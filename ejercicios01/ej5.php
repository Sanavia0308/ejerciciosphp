<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n1=random_int(1,9);
    $n2=random_int(1,9);
    echo "numero 1= ".$n1."<br>";
    echo "numero 2= ".$n2."<br>";
    $suma=$n1+$n2;
    $resta=$n1-$n2;
    $multiplicacion=$n1*$n2;
    $division=$n1/$n2;
    $resto=$n1%$n2;
    $potencia=$n1**$n2;
    ?>
    <table>
        <tr>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td><?php echo "$n1 + $n2"; ?></td>
            <td><?php echo $suma; ?></td>
        </tr>
        <tr>
            <td><?php echo "$n1 - $n2"; ?></td>
            <td><?php echo $resta; ?></td>
        </tr>
        <tr>
            <td><?php echo "$n1 * $n2"; ?></td>
            <td><?php echo $multiplicacion; ?></td>
        </tr>
        <tr>
            <td><?php echo "$n1 / $n2"; ?></td>
            <td><?php echo round($division, 2); ?></td>
        </tr>
        <tr>
            <td><?php echo "$n1 % $n2"; ?></td>
            <td><?php echo $resto; ?></td>
        </tr>
        <tr>
            <td><?php echo "$n1<sup>$n2</sup>"; ?></td>
            <td><?php echo $potencia; ?></td>
        </tr>
    </table>
</body>
</html>