<?php
$secretWord = "password";
$guessattempts = 0;
$maxAttempts = 5;

while ($guessattempts < $maxAttempts) {
    echo "Guess the password to win the Lottery 😉: ";
    $user_guess = trim(fgets(STDIN));
    $guessattempts++;

    if ($user_guess == $secretWord) {
        echo "Congratulations! You cracked the jackpot 😎🤞\n";
        break;
    } elseif ($guessattempts == $maxAttempts) {
        echo "Sorry, you ran out of attempts 🤦‍♀️, the treasure remains Locked 🔐\n";
    } else {
        echo "Wrong! ❌ Attempts Left: " . ($maxAttempts - $guessattempts) . " — Try Again! You got this 🦾\n";
    }
}
