<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Abstract Factory</title>
</head>
<body>

<?php

include 'AbstractFactory.php';

$externalManager = new AbstractFactory\ExcelExternalManager();
//$externalManager = new AbstractFactory\CSVExternalManager();

echo $externalManager->getHeaderText() . '<br>';
echo '<hr>';

$exportResult = $externalManager->getExporter()->export();
echo $exportResult . '<br>';

$importResult = $externalManager->getImporter()->import();
echo $importResult . '<br>';

echo '<hr>';
echo $externalManager->getFooterText() . '<br>';
?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
