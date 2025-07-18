<?php
// position of strings
$message = "Congratulation you  are now a beginner in php Development";
$beginnerPosition = strpos($message,"beginner");
echo "$beginnerPosition\n" ;


/// replace string
$intermidate = str_replace("beginner","intermidate", $message);
echo "$intermidate\n";


/// regular expresson (regex)
preg_match_all("/\w{8}/", $message, $matchedWords);
var_dump($matchedWords);


preg_match("/\w{4}/", $message, $matchedWords);
var_dump($matchedWords);