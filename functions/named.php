<?php
function greet(string $name , $greeting = "Hi", bool $shout = false){
    $message = "$greeting $name";
    return $shout ? strtoupper($message) : $message;
}
echo greet("Praise") . "\n";
echo greet("Praise","Hey") . "\n";
echo greet("Praise","Hello",true) . "\n"; // postioning arugment



// named arugement
echo greet(name: "Sammy", shout: true);