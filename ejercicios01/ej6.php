<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #6d6363; 
            display: flex;
            justify-content: center;
            padding-top: 30px;
        }
        .contenedor {
            background-color: white;
            width: 280px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(21, 8, 8, 0.2);
        }
        .titulo {
            background-color: #130477;
            color: white;
            padding: 20px 10px;
            font-weight: bold;
            font-size: 18px;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fcfcfc;
        }
        table, th, td {
            border: 1px solid #545252;
        }
        th {
            padding: 8px;
            font-size: 14px;
            color: #555;
        }
        td {
            padding: 4px 8px;
            font-size: 14px;
            color: #555;
        }
        .operacion {
            text-align: left;
        }
        .resultado {
            text-align: right;
        }
    </style>
</head>
<body>
    <?php
    $num=random_int(1,9);
    ?>
    <div class="contenedor">
    <div class="titulo">
        TABLA DE<br>MULTIPLICAR
    </div>
    <table>
        <tr>
            <th colspan="2">Tabla del <?php echo $num; ?></th>
        </tr>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td class="operacion"><?php echo "$num x $i ="; ?></td>
                <td class="resultado"><?php echo $num * $i; ?></td>
            </tr>
        <?php endfor; 
        ?>
    </table>
</div>
</body>
</html>