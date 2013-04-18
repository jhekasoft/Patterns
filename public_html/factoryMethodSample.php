<?php

include 'FactoryMethod.php';

$externalManager = new CSVExternalManager();

echo $externalManager->getHeaderText() . '<br />';
echo '<hr />';

$exportResult = $externalManager->getExporter()->export();
echo $exportResult;

echo '<hr />';
echo $externalManager->getFooterText() . '<br />';