<?php

$titulos = ['Vossa Exelencia','Magnifico','Mr.','Supremo','O supremo magnifico senhor de todos aqueles que o temem'];
$qualidades = ['o mais bonito','gentil','todo poderoso'];
$nome = 'heitor';


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>ola <?php echo $titulos[rand(0,4)]." $nome, ".$qualidades[rand(0,2)];?></h2>
</body>
</html>

