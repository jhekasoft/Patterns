<?php

include 'Singleton.php';

$singleton = Singleton::getInstance();

$singleton->setProperty('name', 'MPHP is bad!');
$singleton->setProperty('age', 80);

echo $singleton->getProperty('name') . '<br>';
echo $singleton->getProperty('age');

echo '<hr>';

$singleton2 = Singleton::getInstance();
echo $singleton2->getProperty('name') . '<br>';
echo $singleton2->getProperty('age');

echo '<hr>';

$singleton3 = Singleton::getInstance();
$singleton->setProperty('name', 'MPHP is good! Revolution!');
echo $singleton3->getProperty('name') . '<br>';
echo $singleton3->getProperty('age');
