<?php //php 7.0.8
$string="This a random String for an example.Space   between    me";
echo $string;
echo "\nAfter Removing Spaces : \n";
$string = preg_replace('/\s+/', '', $string);
echo $string;
?>
