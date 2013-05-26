<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Command</title>
</head>
<body>

<?php

include 'Command.php';

$light = new Light();
$radio = new Radio();
 
$lightOnComand = new LightOnComand($light);
$lightOffComand = new LightOffComand($light);
 
$radioOnComand = new RadioOnComand($radio);
$radioOffComand = new RadioOffComand($radio);
 
$rm = new RemoteControl();
 
$rm->setComand($lightOnComand);
$rm->executeComand();
$rm->undoComand();
 
$rm->setComand($radioOnComand);
$rm->executeComand();
$rm->undoComand();

?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
