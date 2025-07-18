<?php
 function fractorial($num) {
    echo "$num\n";
    if($num <=1) return 1;
    return $num * fractorial($num -1);
 }
 echo fractorial(6);