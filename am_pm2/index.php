<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
$currentDateTime=date('m/d/Y H:i:s');
$newDateTime = date('h:i A', strtotime($currentDateTime));
echo $newDateTime; 

?>