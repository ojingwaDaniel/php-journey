<?php
echo "Here starts my journey of Php \n";

echo $userName = "Daniel Ojingwa\n";
echo "Hi " . $userName ."goodluck!\n";

$Tfare_perDay = 3000;
$workDays = 5;
$totalTfare_perWeek = "Total tFare Per week: " . $Tfare_perDay * $workDays . "\n";
echo $totalTfare_perWeek;


$isHungry = false;
echo "Hungry ? ";
echo $isHungry ? "Yes im hungry give me food" : "No im not hungry\n";