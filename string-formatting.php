<?php 
$studentName = "Todimu Ajimati";
$studentGrade = 4.8;
$studentEmail = "todimuAjimati@gmail.com";

// gives you control over how your data is displayed
printf("%s and his grade is %.1f contact email %s", $studentName, $studentGrade, $studentEmail);



//// csv format from file
$list = "shoe,jeans,trousers,watch,glasses,laptop,phone";
$listArray = explode(",", $list);
var_dump($listArray,implode(",", $listArray));



/// string padding
$stringpad = "Daniel";
echo str_pad($stringpad,10,"---", STR_PAD_BOTH) . "\n";



// string triming
$usersInput = "       Daniel Ojingwa    ";
echo $usersInput . "\n";
echo trim($usersInput);