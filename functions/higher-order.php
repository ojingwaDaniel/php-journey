<?php
$barcelonaPlayers = [
    ["name" => "Lewandowski", "position" => "Forward", "number" => 9],
    ["name" => "Pedri", "position" => "Midfielder", "number" => 8],
    ["name" => "Ter Stegen", "position" => "Goalkeeper", "number" => 1],
    ["name" => "Gavi", "position" => "Midfielder", "number" => 6],
    ["name" => "Frenkie de Jong", "position" => "Midfielder", "number" => 21],
    ["name" => "Raphinha", "position" => "Forward", "number" => 11],
    ["name" => "João Cancelo", "position" => "Defender", "number" => 2],
    ["name" => "Ronald Araújo", "position" => "Defender", "number" => 4],
    ["name" => "Jules Koundé", "position" => "Defender", "number" => 23],
    ["name" => "Alejandro Balde", "position" => "Defender", "number" => 3],
    ["name" => "Lamine Yamal", "position" => "Forward", "number" => 27],
    ["name" => "Andreas Christensen", "position" => "Defender", "number" => 15],
    ["name" => "Ferran Torres", "position" => "Forward", "number" => 7],
    ["name" => "Iñaki Peña", "position" => "Goalkeeper", "number" => 13],
    ["name" => "Oriol Romeu", "position" => "Midfielder", "number" => 18],
];
function createFilter(string $key,string $value) {
    return fn($item) => str_contains(  strtolower($item[$key]),strtolower($value)); // partial match to the key
    // return fn($item) => $item[$key] ===$value; exact value to the key 
}

var_dump(array_filter($barcelonaPlayers,createFilter("position","mid")));