<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Cibo.php";
require_once __DIR__ . "/classes/Category.php";


$dog = new Category("cane","<i class=\"fa-solid fa-dog\"></i>");
$cat = new Category("Gatto","<i class=\"fa-solid fa-cat\"></i>");

$collare = new Product("https://www.thekill.it/4885-large_default/collare-cuoio-artigianale-marrone.jpg",12.50,"Collare",$dog);
$cibo =  new Food("https://www.modacani.it/prodotti/big/2153.jpg",21.45,"Croccantini",$cat);  
$cibo->setScadenza("10/11/2024");
$prodotti = [
    $collare,
    $cibo,
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP-OOP-2</title>
</head>
<body>
    <?php foreach($prodotti as $prodotto){?>
    <div class="card">
        <img src="<?php echo $prodotto->getImage();?>" alt="">
        <h2><?php echo $prodotto->getName();?></h2>
        <?php echo $prodotto->getCategory()->getIcon(); ?>
        <h3>Prezzo: <?php echo $prodotto->getPrice(); ?>€</h3>
        <?php if(method_exists($prodotto, "getScadenza")){ ?>
        <span>Scadenza: <?php echo $prodotto->getScadenza(); ?></span>
        <?php } ?>
    </div>
    <?php } ?>
</body>
</html>