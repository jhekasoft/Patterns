<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Abstract Factory</title>
</head>
<body>

<?php
require_once 'Strategy.php';
$markers = array( new RegexpMarker( "/Пять/" ),
                  new MatchMarker( "Пять" ),
                  new MarkLogicMarker( '$input equals "Пять"' )
           );
?>
<?php foreach ( $markers as $marker ) { ?>
    <?php
        $question = new TextQuestion( "Сколько лучей у Кремлевской звезды?", $marker );
    ?>

    <strong><?php print get_class( $marker ); ?></strong>

    <?php foreach ( array( "Пять", "Четыре" ) as $response ) { ?>
    <div style="margin: 10px 0px 10px 50px;">
    <?php
        print "Ответ: $response: ";
        if ( $question->mark( $response ) ) {
           print "Правильно! <br />";
        } else {
           print "Неверно! <br />";
        }
    ?>
    </div>
    <?php } ?>
<?php } ?>

<div style="margin-top: 40px;">&nbsp;</div>
<a href="../index.php">&larr; All patterns</a>

</body>
</html>