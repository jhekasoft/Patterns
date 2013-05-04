<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Abstract Factory (alternative)</title>
</head>
<body>

<?php

include 'AbstractFactoryAlternative.php';

$externalManager = new AbstractFactoryAlternative\ExcelExternalManager();
//$externalManager = new AbstractFactoryAlternative\CSVExternalManager();

echo $externalManager->getHeaderText() . '<br>';
echo '<hr>';

$exportResult = $externalManager->make('exporter')->export();
echo $exportResult . '<br>';

$importResult = $externalManager->make('importer')->import();
echo $importResult . '<br>';

echo '<hr>';
echo $externalManager->getFooterText() . '<br>';
?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
