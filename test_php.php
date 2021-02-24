<?php
$d1 = new DateTime();
$d1->setTimezone(new DateTimZone($_POST['timezone']));
echo $d1->format($_POST['format']);
?>