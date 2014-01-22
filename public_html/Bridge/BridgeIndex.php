<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bridge</title>
</head>
<body>

<?php
include 'Bridge.php';

$sms = new SmsMessage('Sms text. Hello Julia!', new SyncSendler());
$sms->send();

$sms = new SmsMessage('Sms text. Hello Julia!', new ASyncSendler());
$sms->send();

$email = new EmailMessage('Email text. Hello Julia!', new SyncSendler());
$email->send();

$email = new EmailMessage('Email text. Hello Julia!', new ASyncSendler());
$email->send();
?>
<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>
