<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Facade</title>
</head>
<body>

<?php
require_once 'Facade.php';

$smsService = new SmsService();
$result = $smsService->send(array('+380971231212', '+380503331122', '+380672334211'), 'Hello!');
echo $result;
?>


<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>