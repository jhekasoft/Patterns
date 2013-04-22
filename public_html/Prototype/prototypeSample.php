<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Prototype</title>
</head>
<body>

<?php

include 'Prototype.php';

$document = new DocumentPrototype(new BrowsedParagraph(), new BrowsedHeader(), new BrowsedLists());

$list = $document->getList();
$list->numeric(array('first','second', 'third'));

//$paragraph = $document->getParagraph();
//$paragraph->format('aaaaa');

$header = $document->getHeader();
$header->header_big('Test');

?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
