<?php
declare(strict_types= 1);
$studentsAvailable = null;
$studentsData = $studentsAvailable ?? "No student Data available";
var_dump(

    null == $studentsAvailable,
    null == 0,
    null == false,
    null == [],
    null == null,
    is_null($studentsAvailable),
    isset($studentsAvailable),
    $studentsData,
    empty($studentsAvailable)

);
/// null with functions
function studentDashboards(?string $name){ // you need to add ? to the arugment to accept null types as parameter 
    echo "\nWelcome to Campus " . ($name ?? "Unkown Name\n"); // ?? (if null display the following string)

}
studentDashboards("Todimu");
studentDashboards(null);
var_dump(
    array_filter([1, 2, null, [], ""])
);

/// challenge
function checkRegistrationStatus(?string $name ,?int $age){
    return match (true) {
        is_null($name) => "Name not provided\n",
        is_null($age) => "Age not provided\n",
        default => "Welcome $name, age $age\n"
    };
}
echo checkRegistrationStatus(null, 22);
echo checkRegistrationStatus("todi", null);
echo checkRegistrationStatus("todi",  22);
