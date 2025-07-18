<?php
$numbers = [1, 2, 3, 4, 5, 6];
$multiplier = 5;
$squared = array_map(function ($num) use($multiplier) {
    return $num * $multiplier;
}, $numbers);
var_dump(
    $numbers,
    $squared,
  
);
///  arrow function
$arrowWay = array_map(fn($num) => $num * $multiplier, $numbers);
var_dump(
    $arrowWay
);