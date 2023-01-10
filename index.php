<?php
require_once __DIR__ . "/cucce.php";
require_once __DIR__ . "/cibo.php";
require_once __DIR__ . "/giochi.php";

$prodotti= [
    new Cuccia("vidaXL","verde","187.99 €","105x123xH90 cm","legno di pino impregnato"),
    new Cuccia("Colonial","bianco","39,00€","65x80xH56 cm","PVC"),
    new Cuccia("Happilax","grigio","40,49€","55x40 cm","poliestere"),
    new Cibo("Cesar","Pollo,Verdure,Prezzemolo","11,21€","150 g"),
    new Cibo("Cesar","Agnello e Piselli in una salsa di erbe","12,49€","150 g"),
    new Cibo("Cesar","Manzo succoso,Pasta,Carote,Prezzemolo","13,50€","150 g"),
    new Giochi("Nilox","osso","10,50€","gomma"),
    new Giochi("Nilox","corda","6,78€","nilon"),

];

var_dump($prodotti);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
</head>
<body>
    <ul>
        <?php foreach($prodotti as $prodotto) { ?>
        <li><?php echo $prodotto->$brand; ?></li>

        <?php }?>    
    </ul>
</body>
</html>