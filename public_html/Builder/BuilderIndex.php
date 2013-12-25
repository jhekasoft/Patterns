<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Builder</title>
    <style>
        
        div[class^='barracks'],
        div[class^='stable'] {
            width: 237px;
            height: 150px;
            background: url(img/barracks.jpg) 0 0 no-repeat;
        }
        
        div[class^='stable'] {
            background-image: url(img/stables.jpg);
        }
        
        div.barracks-algeria,
        div.stable-algeria {
            background-position: -704px 0;
        }
        
        div.barracks-austria,
        div.stable-austria {
            background-position: -469px 0;
        }
        
        div.barracks-ukraine,
        div.stable-ukraine {
            background-position: -939px -297px;
        }
        
    </style>
</head>
<body>
<?php

require_once 'BuilderAbstract.php';
require_once 'BuilderConcrete.php';
require_once 'BuilderDirectorAbstract.php';
require_once 'BuilderDirector.php';
require_once 'BuilderProduct.php';

// создадим конкретные строители
$builderBarraksUkraine = new Builder_Concrete_barraksUkraine();
$builderBarraksAustria = new Builder_Concrete_barraksAustria();
$builderBarraksAlgeria = new Builder_Concrete_barraksAlgeria();
$builderStablesUkraine = new Builder_Concrete_stablesUkraine();

// создадим распорядителя для восточных наций
$directorEstern = new Builder_Director_Estern($builderBarraksAlgeria);
$directorEstern->create();

$productBarraksAlgeria = $builderBarraksAlgeria->getResult();
echo $productBarraksAlgeria->markup;

// создадим распорядителя для западных наций
$directorWestern = new Builder_Director_Western($builderBarraksAustria);
$directorWestern->create();

$productBarraksAustria = $builderBarraksAustria->getResult();
echo $productBarraksAustria->markup;

// Украина - непонятно кто мы :) создадим распорядителя для западных наций
$directorUkraine = new Builder_Director_Western($builderBarraksUkraine);
$directorUkraine->create();

$builderBarraksUkraine = $builderBarraksUkraine->getResult();
echo $builderBarraksUkraine->markup;

// поэкспериментируем - добавим конюшню
$directorUkraine->setBuilder($builderStablesUkraine);
$directorUkraine->create();

$productStablesUkraine = $builderStablesUkraine->getResult();
echo $productStablesUkraine->markup;

// php - язык со слабой типизацией
// php is loosely typed language, that*s why we can return Product from $director->construct()
// $product = $director->construct();
?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
