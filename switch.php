<?php
//difference between switch and if statment
$size = "L";
switch($size){
    case "S":
    case "M":
        echo "Small size or Medium size\n";
        break;
    case "L":
    case "XL":
        echo "Large size or XL size\n";
        break;
    default:
        echo "Unknown Size\n";
        break;  
    
}
if ("M" == $size || "S" == $size) {
    echo "Small size or Medium size\n";
} else if ("L"== $size || "XL"== $size){
    echo "Large size or XL size\n";
}else{
    echo "Unknown Size\n";  
}

/// cases where switch statement can be useful
$badAttempts = 2;
switch($badAttempts){
    case 3:
        echo "Your'e blocked !\n";
    default:
     echo "Bad attempts detacted !\n";
}

$loginAttempts = 2;
switch ($loginAttempts){
    case 0:
        echo "“Fresh attempt. Be careful.”\n";
    break;
    case 1:
    case 2:
        echo "Warning! Too many wrong tries\n";
    break;
    case 3:
        echo "Final warning!\n";
     break;
     case 4:
        echo "Account Locked 🚫\n";
}
if($loginAttempts == 0){
    echo "“Fresh attempt. Be careful.”\n";
}elseif($loginAttempts == 1 || $loginAttempts == 2){   
    echo "Warning! Too many wrong tries\n";
}elseif($loginAttempts == 3){
    echo "Final warning!\n";
}elseif($loginAttempts == 4){
    echo "Account Locked 🚫\n";
}