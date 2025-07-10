<?php
// countdonw for tutorial //
$launchMssg = "Hurray the coin is live ";
for($i = 10;$i >0; $i-- ){
    echo $i .  "..";
    if(1 == $i){
        echo  $launchMssg . "🚀🚀";
    }
    sleep(1);
}



// code for number countdown//
echo "Counting Down : ";
for($i = 5; $i >0; $i-- ){
    echo $i;
    if($i > 1){
        echo ",";
    }

}

// for challenge
for ($num = 10; $num > 0; $num--){
    if($num % 2 == 0){
        echo $num . " is even\n";
    }else {
        echo $num . " is odd\n";
    }
}

for ($num = 1; $num <= 20; $num++) {
    if($num % 2 == 0){
        $message = $num . " is even";
    }else{
        $message = $num ." is odd";
    }
    if($num % 3 == 0){
        $message .= " and a multiple of 3";
    }
    echo $message . "\n";
}