<?php
declare(strict_types=1);
function sum(int ...$numbers){
    $total = 0;
    foreach($numbers as $number){
        $total += $number;
    }
    return $total;
}
$numbers = [1, 2, 3, 4, 5, 6,];
echo sum(...$numbers) . "\n";



// team list
function TeamRoster(string $team, string ...$players){
    echo "Team : $team\n Players : " . implode(",",$players);
}
echo TeamRoster("Barcelona","Yamal","raphinna","pedri","de jong","cubarsi"). "\n";
$realmadridPlayers = ["vini", "mphape", "guler", "arnod"];
echo TeamRoster("realmadrid", ...$realmadridPlayers) . "\n";
echo TeamRoster("laliga XI", "Yamal", "raphinna", "pedri", "de jong", "cubarsi",...$realmadridPlayers);