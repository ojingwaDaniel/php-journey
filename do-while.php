<?php
do {
    $rolldice = rand(1, 6);
    echo "You rolled : $rolldice \n";
    if (6 == $rolldice) {
        echo "Congratulation you hit the jackpot!\n";
    }
    echo "Want to row again (y/n): ";
    $rollAgain = trim(fgets(STDIN));


} while ("y" == $rollAgain);



//challenge 1
do {
    echo " Enter a Number : ";
    $userInput = trim(fgets(STDIN));
    if($userInput > 10){
        echo "Thank you, you entered a valid number!";
        break;
    }

} while (true);


// challenge 2
$correctPassword = "gamer123";
$userAttempts = 0;
$maxAttempts = 3;
do{
    echo "Enter password: ";
    
    $userPassword = trim(fgets(STDIN));
    $userAttempts++;
    if($userPassword == $correctPassword){
        echo "Access granted ✅";
        break;
    }elseif($userAttempts == $maxAttempts){
        echo "Access denied ❌ Too many attempts\n";
        break;
    } else {
        echo "Access denied ❌ wrong password Attempts left : ". ($maxAttempts - $userAttempts) . " ". "try Again! \n";
    }
    

}while(true);