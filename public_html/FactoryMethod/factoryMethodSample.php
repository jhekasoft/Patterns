<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Factory Method</title>
</head>
<body>

<?php

include 'FactoryMethod.php';

$externalManager = new FactoryMethod\ExcelExternalManager();
//$externalManager = new FactoryMethod\CSVExternalManager();

echo $externalManager->getHeaderText() . '<br>';
echo '<hr>';

$exportResult = $externalManager->getExporter()->export();
echo $exportResult . '<br>';

echo '<hr>';
echo $externalManager->getFooterText() . '<br>';
?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
