<?php
// $number = 35;
// if($number > 50){
//     echo "Congratulation You Passed";
// }


// $examScore = null;
// if($examScore >= 70){
//     echo "A" ;
// } 
// elseif($examScore >=60){
//     echo "B";
// }
// elseif($examScore >=50){
//     echo "c'";
// }
// elseif($examScore >=40){
//     echo "D";
// }
// else{
//     echo "F";
// }


// nested comditional statement(Control Structure)
$num = 13;
if($num > 0){
    if($num % 2 == 0 ){
        print "\nPostive Even Number\n"  ;
    } else{
        print "\nPostive Odd Number\n";
    }

} else{
    print "\nIs a Negative Number\n";
}

$userName = "admin";
$password = "passwrd123";
if($userName == "admin" && $password == "password123"){
    print "You've Sucessfully logined ";
} else
    print "Wrong Details please try again";
