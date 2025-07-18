<?php
// $chelseaPlayers = ["Nkunku", "Enzo", "Jackson"];
// function announceSquad($clubName, ...$clubPlayers)
// {
//     $totalPlayers = count($clubPlayers);
//     return "CLUB: " . strtoupper($clubName) . "\n Players: " . implode(",",$clubPlayers) . "\n Total Players: $totalPlayers";
// }
// echo announceSquad("chelsea", ...$chelseaPlayers);


// challenege 
$barcelonaSquad = [
    "Ter Stegen",
    "Kounde",
    "Cubarsi",
    "Balde",
    "De Jong",
    "Pedri",
    "Gavi",
    "Gundogan",
    "Raphinha",
    "Yamal",
    "Lewandowski",
    "Ferran",
    "Romeu",
    "Christensen",
    "Cancelo"
];

function generateLineup($clubName, array $clubPlayers)
{
    echo "CLUB: " . strtoupper($clubName) . "\n\n";

    shuffle($clubPlayers);

    $startingLineUp = array_slice($clubPlayers, 0, 11);
    $bench = array_slice($clubPlayers, 11);
    sort($bench);
    $totalPlayers = count($clubPlayers);

    echo "🔵 Starting XI:\n";
    foreach ($startingLineUp as $player) {
        echo "- $player\n";
    }

    echo "\n🟡 Bench:\n";
    foreach ($bench as $player) {
        echo "- $player\n";
    }

    echo "\n👥 Total Squad Size: $totalPlayers\n";
}


generateLineup("Barcelona", $barcelonaSquad);


// generate couple of random numbers

function GenerateRandomNumber(int $input)
{
    $result = [];
    $attempts = 0;
    while (count($result) < $input) {
        $attempts++;
        echo "Looking for an even number...\n";
        $randNum = random_int(1, 100);
        if ($randNum % 2 == 0) {
            $result[] = $randNum;
            echo "found one : $randNum\n";
        }
    }
    return [
        "numbers" => $result,
        "attempts" => $attempts

    ];
}
$output = GenerateRandomNumber(7);
// var_dump($output);
echo "\nAll Even Numbers Found:\n";
foreach ($output["numbers"] as $number) {
    echo "$number\n";
}
echo "it took {$output["attempts"]} attempts\n";




