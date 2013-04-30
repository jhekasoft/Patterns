<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<?php include('allClass.php'); ?>
<?php $markers = array( new RegexpMarker( "/Пять/" ),
                        new MatchMarker( "Пять" ),
                        new MarkLogicMarker( '$input equals "Пять"' )
                );
foreach ( $markers as $marker ) { ?>
   <strong>
        <?php print get_class( $marker ); ?>
   </strong>
   <?php $question = new TextQuestion( "Сколько лучей у Кремлевской звезды?", $marker );
   foreach ( array( "Пять", "Четыре" ) as $response ) { ?>
    <div style="margin: 10px 0px 10px 50px;">
     <?php print "Ответ: $response: ";
      if ( $question->mark( $response ) ) {
         print "Правильно! <br />";
      } else {
         print "Неверно! <br />";
      } ?>
      </div>
  <?php } 
   
 } ?>
</html>