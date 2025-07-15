<?php
$fruitBasket = [
    "Apple" => 4,
    "Orange" => 5,
    "Banana" => 6,
];
$totalFruits = 0;
foreach($fruitBasket as $fruit => $amount){
    echo "$fruit : $amount\n";
    $totalFruits += $amount;
}
 echo "Total Fruit Available : $totalFruits";




 // challenges
 $storeItems = [
    "Shirt" => 12,
    "Shoes" => 5,
    "Hat" => 2,
    "Gloves" => 0,
    "Socks" => 20,
];
$total = 0;
foreach($storeItems as $storeItem => $amount){
    if($amount >= 5){
        echo "$storeItem : $amount \n";
        $total += $amount;
    }
    
}
echo " Total Available Stock (>=5): $total";
//   login system
 $users = [
    "admin1" => ["password" => "adminpass", "role" => "admin"],
    "mod1" => ["password" => "modpass", "role" => "moderator"],
    "user1" => ["password" => "userpass", "role" => "user"],

];

$badAttempts = 0;
$maxAttempts = 3;

while ($badAttempts < $maxAttempts) {
    echo "Enter username: ";
    $username = trim(fgets(STDIN));
    echo "Enter password: ";
    $password = trim(fgets(STDIN));
    if (!array_key_exists($username, $users)|| $password != $users[$username]["password"] ) {
        $badAttempts++;
        echo "❌ Invalid login Attempts left: " .  ($maxAttempts - $badAttempts) . "\n";
        continue;
    }
    
    $role = $users[$username]["role"];
    $message = match ($role) {
        "admin" => "✅ Welcome Admin. You have full access 🔐",
        "moderator" => "✅ Welcome Moderator. You can manage users 🛠",
        "user" => "✅ Welcome User. Limited access granted 👤",
        default => "⚠️ Unknown role assigned.",
    };
    echo $message;
    break;
}
if($badAttempts == $maxAttempts) {
    echo "🚫 Maximum login attempts reached. Access denied.";
}
    