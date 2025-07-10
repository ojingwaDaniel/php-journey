<?php
$isGrowing = 1;
var_dump($isGrowing, $isGrowing==true,"testing-data-type");

$scoreSheets = [43, (int)"23","45.5",75];
$total = $scoreSheets[0] + $scoreSheets[1] + $scoreSheets[2] + $scoreSheets[3];
var_dump( $scoreSheets,$total);
echo "Total Score : $total \n";
echo "Total Score: " .  $total . "\n";