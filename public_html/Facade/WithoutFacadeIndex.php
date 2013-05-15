<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Facade</title>
</head>
<body>

<?php
require_once 'SuperSms.php';

$sender = new SuperSmsSender('test', '121212', 'test');
$controlSum = $sender->generateControlSum('2323', 'test', 'test');
$phonebook = new SuperSmsPhonebook();
$phonebook->addNumber('+380971231212');
$phonebook->addNumber('+380503331122');
$phonebook->addNumber('+380672334211');
$result = $sender->send($phonebook, 'Hello!', $controlSum);

echo $result;
?>


<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>