<?php


function EmailFormatter($input)
{
    $count = 0;
    while ($count < $input) {
        $num = random_int(1, 100);
        if ($num % 2 == 0) {
            printf("Found Even Number : %d\n", $num);
            yield $num;
            $count++;
        }
    }

}
$output = EmailFormatter(7);
$allEven = [];
echo "// All Even Numbers //";
foreach($output as $number){
    $padNum = str_pad($number,10,"-",STR_PAD_BOTH);
    echo "$padNum\n";
    $allEven[]= $number;
} 
$csv = implode(",",$allEven);
echo "CSV Format : $csv\n";
