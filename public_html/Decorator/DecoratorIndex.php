<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Decorator</title>
</head>
<body>

<?php
require_once 'Decorator.php';

$tile = new Plains();
print 'Ценность начальная: '.$tile->getWealthFactor(); // 2
print '<br><br>';


$tile = new DiamondDecorator( new Plains() );
print 'Ценность c диамантами: '.$tile->getWealthFactor(); // 4
print '<br><br>';

$tile = new PollutionDecorator(
new DiamondDecorator( new Plains() ));
print 'Ценность с диамантами и загрезнением: '.$tile->getWealthFactor(); // 0
print '<br><br>';
?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
