<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Visitor</title>
</head>
<body>

<?php

include 'Visitor.php';

$shop = new Shop();
 
$shop->addItem(new Item("Monitor", 5500));
$shop->addItem(new Item("Keyboard", 250));
$shop->addItem(new Item("Mouse", 250));
$shop->addItem(new Item("Computer", 10000));
 
$manager = new Traverser($shop);
$manager->displayStat();

?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
