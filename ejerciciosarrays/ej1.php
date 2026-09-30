
<?php 
$t1 = []; 
for ($i=0; $i < 20; $i++ ){
$num=random_int(1,10);
$t1[]= $num;
}    
function valor_mas_repetido(array $t1): int
{
    $masrepetido = 0;       
    $maxContador = 0;       
    for ($i = 0; $i < sizeof($t1); $i++) {
        $num = $t1[$i];
        $contador = 0;    
        for ($j = 0; $j < sizeof($t1); $j++) {
            if ($t1[$j] == $num) {
                $contador++;
            }
        }
        if ($contador > $maxContador) {
            $maxContador = $contador;
            $masrepetido = $num;
        }
    }
    return $masrepetido;
}
$mayor=max($t1);
$menor=min($t1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej1</title>
</head>
<body>
<table border="1">
    <tr>
        <?php foreach ($t1 as $numero): ?>
            <td><?php echo $numero; ?></td>
        <?php endforeach; ?>
    </tr>
</table>
<p>El numero mas alto del array es <?= $mayor?></p>
<p>El numero mas bajo del array es <?= $menor ?></p>
<p>El numero mas repetido es <?= valor_mas_repetido($t1)?></p>
</body>
</html>