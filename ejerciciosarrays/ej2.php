<?php 
$medios=["EL PAIS"=>"https://elpais.com/","EL MUNDO"=>"https://www.elmundo.es/","MARCA"=>"https://www.marca.com/",
"AS"=>"https://as.com/","MUNDODEPORTIVO"=>"https://www.mundodeportivo.com/"];
$nombres=array_keys($medios);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
</head>
<body>
    <list>
        <ul><a href=<?=$medios["EL PAIS"]?>><?=$nombres[0]?></a></ul>
        <ul><a href=<?=$medios["EL MUNDO"]?>><?=$nombres[1]?></a></ul>
        <ul><a href=<?=$medios["MARCA"]?>><?=$nombres[2]?></a></ul>
        <ul><a href=<?=$medios["AS"]?>><?=$nombres[3]?></a></ul>
        <ul><a href=<?=$medios["MUNDODEPORTIVO"]?>><?=$nombres[4]?></a></ul>
    </list>
    
</body>
</html>