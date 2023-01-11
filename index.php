<?php
require_once __DIR__ . "/classes/Product.php";
// require_once __DIR__ . "/classes/cucce.php";
// require_once __DIR__ . "/classes/cibo.php";
// require_once __DIR__ . "/classes/giochi.php";

$prodotti = new Product("Prova",187.99 ,"ciao");
   

// 

// var_dump($prodotti);

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
 <?php echo $prodotti->getImage(); ?>
</body>
</html>