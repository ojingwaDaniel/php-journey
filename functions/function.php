<?php 
function dashboardMessage($username){
    return "Welcome $username ! Have a great user Experience\n";
}
echo dashboardMessage("Grace");



/// optional argument
function greetMessage($username,$time = "day"){
    return "Good $time $username\n";
} 
echo greetMessage("Bob","morning");