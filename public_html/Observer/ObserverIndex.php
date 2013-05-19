<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Observer</title>
</head>
<body>

<?php

include 'Observer.php';

$comment = new Comment();
$comment->attach(new Logger);
$comment->attach(new Mailer);
$comment->save();

?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
