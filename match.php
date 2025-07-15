<?php
echo "Enter a http status :  ";
$webStatus = trim(fgets(STDIN));
$displayMessg = match ($webStatus) {
    200,250,300 => "Sucess",
    400,404,500 => "404 Error ",
    default => "Unkown Status"
};
 echo $displayMessg;