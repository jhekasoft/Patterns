<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Singleton</title>
</head>
<body>

<?php

include 'Singleton.php';

$singleton = Singleton::getInstance();

$singleton->setProperty('name', 'Bill');
$singleton->setProperty('age', 33);

echo $singleton->getProperty('name') . '<br>';
echo $singleton->getProperty('age');

echo '<hr>';

$singleton2 = Singleton::getInstance();
echo $singleton2->getProperty('name') . '<br>';
echo $singleton2->getProperty('age');

echo '<hr>';

$singleton3 = Singleton::getInstance();
$singleton->setProperty('name', 'Steve');
echo $singleton3->getProperty('name') . '<br>';
echo $singleton3->getProperty('age');
?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
