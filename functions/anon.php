<?php
$numbers = [1,2,3,4,5,6,7,8,9];
$squared = array_map(fn ($num) => $num * $num, $numbers);
print_r ($squared);
echo "$squared";


/// eternal variables with annon function
$remarks = "Im proud of you";
$message = function ($name) use(&$remarks) {
    $remarks = "Welldone";
    echo "$remarks $name ";
};

echo $message("Danny");
echo "$remarks\n";
// you need to add use function to be able use external variable in annon function
//to be able to change the variable you need to add & 