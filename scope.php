<?php
$generalQuote = "Practice makes prefect"; // global variable
function Quote(){
    global $generalQuote; // global keyword used to acess global variable 
    $modifiedQuote = "the mistake you make from practising is what makes you prefect"; // local variable
    echo "$generalQuote : i agree with you but is not detailed enough i perfer \n $modifiedQuote\n";

}
echo Quote();   


// static variable
function countDays(){
     static $day = 0; // static variable saves or retain its values between mutipel function calls
    $day++ ;
    echo "Congratulation youve made it still Day $day\n";
}
countDays();
countDays();
countDays();
countDays();