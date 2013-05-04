<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Patterns</title>
</head>
<body>
<?php

require_once 'CompositeUnit.php';
require_once 'CompositeSoldier.php';
require_once 'CompositeTank.php';
require_once 'CompositeArtillery.php';
require_once 'CompositeArmy.php';

// создадим по юниту
$soldier = new Soldier();
$artillery = new Artillery();
$tank = new Tank();

$soldier->addUnit( new Tank );

// создадим взвод танков
$platoonTank = new Army();

$platoonTank->addUnit( new Tank );
$platoonTank->addUnit( new Tank );
$platoonTank->addUnit( new Tank );
$platoonTank->addUnit( new Tank );

// создадим взвод солдат
$platoonSoldier = new Army();

$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );
$platoonSoldier->addUnit( new Soldier );

// создадим взвод пушек
$platoonArtillery = new Army();

$platoonArtillery->addUnit( new Artillery );
$platoonArtillery->addUnit( new Artillery );
$platoonArtillery->addUnit( new Artillery );

// создадим красную армию
$redArmy = new Army();

$redArmy->addUnit( $platoonArtillery );
$redArmy->addUnit( $platoonTank );
$redArmy->addUnit( $platoonSoldier );

echo 'сила одного солдата:&nbsp;&nbsp;&nbsp;&nbsp;' . $soldier->power() .'<br/><br/>';
echo 'сила одной пушки:&nbsp;&nbsp;&nbsp;&nbsp;' . $artillery->power() .'<br/><br/>';
echo 'сила одного танка:&nbsp;&nbsp;&nbsp;&nbsp;' . $tank->power() .'<br/><br/>';
echo 'сила взвода солдат:&nbsp;&nbsp;&nbsp;&nbsp;' . $platoonSoldier->power() .'<br/><br/>';
echo 'сила взвода артиллерии:&nbsp;&nbsp;&nbsp;&nbsp;' . $platoonArtillery->power() .'<br/><br/>';
echo 'сила взвода танков:&nbsp;&nbsp;&nbsp;&nbsp;' . $platoonTank->power() .'<br/><br/>';
echo 'сила Красной Армии:&nbsp;&nbsp;&nbsp;&nbsp;' . $redArmy->power().'<br/><br/>';

echo '<br/><br/><br/><br/><br/>';

// манипуляции с войсками

$redArmy->addUnit( $tank );
$redArmy->addUnit( $tank );
$redArmy->addUnit( $tank );
$redArmy->addUnit( $tank );
$redArmy->addUnit( $tank );
$redArmy->addUnit( $tank );

$reserve = new Army();

$redArmy->removeUnit( $platoonArtillery );
$redArmy->removeUnit( $tank );
$redArmy->removeUnit( $tank );
$redArmy->removeUnit( $tank );

$reserve->addUnit( $platoonArtillery );
$reserve->addUnit( $tank );
$reserve->addUnit( $tank );
$reserve->addUnit( $tank );

echo 'сила Красной Армии после манипуляций:&nbsp;&nbsp;&nbsp;&nbsp;' . $redArmy->power().'<br/><br/>';
echo 'сила Резервных войск после манипуляций:&nbsp;&nbsp;&nbsp;&nbsp;' . $reserve->power().'<br/><br/>';

?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
