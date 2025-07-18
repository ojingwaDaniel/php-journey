<?php 
declare(strict_types= 1);
function ProcessInput(int | float | string $input){
    return match (true) {
        is_int($input) => "Integer :  $input" . "\n",
        is_float($input) => "Float : $input" . "\n",
        is_string($input) => "String: " . strtoupper($input) . "\n",
        default => "Unkown Data Type"
    };  
}
$dataCollections = [1,2.4,"grow",3,5.6,"wisdom",5,7.8,"discipline"];
foreach ($dataCollections as $data){
    echo ProcessInput($data);
}