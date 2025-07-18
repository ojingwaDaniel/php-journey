<?php
// types of string
$message = "Your'e doing well";
$singleQuote = 'Message $message';
$doubleQuote = "Message : $message\n";

$heredoc = <<<MESG
 multi line string
 variable : $message\n
MESG;

$nowdoc = <<<'MESG'
 multi line string
 variable : $message
MESG;
echo $singleQuote;
echo $doubleQuote;
echo $heredoc;
echo $nowdoc;



// string manipulation
$string = "Greetings my people";
echo $string[4] . "\n"; // 4th index of the string
echo $string[-1] . "\n"; // last index of the string

echo substr($string,0,4) . "\n";
echo substr($string, 5) . "\n";


echo strtoupper($string) . "\n";
echo strtolower($string) . "\n";
echo ucfirst(strtolower($string)). "\n";


$string .= " How are you guys doings\n";
echo $string;