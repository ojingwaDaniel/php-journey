<?php
// function GenerateRandNum($length){

//     for ($i = $length; $i  > 0; $i--) {
//         echo "Generating Number ...\n";

//         yield random_int(1,100);
//     }

// }
// foreach (GenerateRandNum(10) as $num) {
//     echo "Displaying Number... ";
//     echo "$num\n";
// }



/// making it return only even numbers

function GeneRandNum($length)
{
      $count = 0;
    $attempts = 0;
    while ($count < $length) {
        echo "Generating Number ...\n";
        $num = random_int(1, 100);
        if ($num % 2 == 0) {
            yield $num;
            $count++;
        }
    }
}
foreach (GeneRandNum(3) as $num) {
    echo "Displaying Number... ";
    echo "$num\n";
}
