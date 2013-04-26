<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Patterns</title>
</head>
<body>
    
<?php

abstract class Tile {
    abstract function getWealthFactor();
}

class Plains extends Tile {
    
private $wealthfactor = 2;
    
    function getWealthFactor() {
        return $this->wealthfactor;
    }
}

abstract class TileDecorator extends Tile {
    
protected $tile;

    function __construct( Tile $tile ) {
        $this->tile = $tile;
    }
}

class DiamondDecorator extends TileDecorator {
    function getWealthFactor() {
        return $this->tile->getWealthFactor()+2;
    }
}

class PollutionDecorator extends TileDecorator {
    function getWealthFactor() {
        return $this->tile->getWealthFactor()-4;
    }
}

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
