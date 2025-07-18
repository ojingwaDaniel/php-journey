<?php 
 function add( int $a , int $b ) : int {
    return $a + $b;
 }
 var_dump(add(1,2 ), add(1,2) );



 $total= 0;
 function addTotal($value){
    global $total;
    $total += $value;
    return $total;
}
var_dump(addTotal(3), addTotal(3) );


function calculateBonus($score){
   return match (true) {
      $score >= 90 => 20,
      $score <= 70 => 10,
      default => 0,
   };
}
$finalScore = 10;
function sideEffect($a){
   global $finalScore;
   $finalScore += $a;
   return "your final score is $finalScore";

}
var_dump(calculateBonus(100) ,sideEffect(4));