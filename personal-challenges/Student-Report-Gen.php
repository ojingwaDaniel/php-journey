<?php
$students = [
    ["name" => "Daniel Ojingwa", "email" => "daniel.o@gmail.com", "gpa" => 4.7],
    ["name" => "Sarah Bello", "email" => "sarahbello@email.com", "gpa" => 3.5],
    ["name" => "Emeka Johnson", "email" => "emeka.j@gmail.com", "gpa" => 4.1],
    ["name" => "Fatima Yusuf", "email" => "fyusuf@school.u", "gpa" => 2.9],
    ["name" => "Chinedu Obi", "email" => "cobi22@uni.edu", "gpa" => 3.0],
    ["name" => "Grace Alade", "email" => "gracealade@gmail.com", "gpa" => 4.6],
    ["name" => "Tolu Adebayo", "email" => "tadebayo99@yahoo.com", "gpa" => 3.8],
    ["name" => "Mary Udo", "email" => "maryudo@scholar.com", "gpa" => 2.4],
    ["name" => "Joshua Aliyu", "email" => "josh.aliyu@edu.org", "gpa" => 3.9],
    ["name" => "Ada Nwosu", "email" => "adan@campus.t", "gpa" => 4.3],
];
function Filter(array $studentsData, &$PassedStudent = [])
{
    foreach ($studentsData as $student) {
        if ($student["gpa"] < 3.0) {
            yield $student;
        } else  $PassedStudent[] = $student;
    }
}
$passed = [];
$emailPattern = "/^[a-zA-Z0-9.+%_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

$output = Filter($students, $passed);

foreach ($output  as $student) {
    $paddedGrade = str_pad($student["gpa"], 5, "-", STR_PAD_BOTH);
    if (preg_match($emailPattern, $student["email"])) {
        printf("❌Failed => Name : %s | Email : %s | GPA : %s\n", $student["name"], $student["email"], $paddedGrade);
    } else {
        printf("❌ Failed  => : Name : %s | Email : %s | GPA : %s\n", $student["name"], "Wrong Email Format: Go for correction",  $paddedGrade);
    }
};
echo "Name |Email|GPA\n";
foreach ($passed as $student) {
    $paddedGrade = str_pad($student["gpa"], 5, "-", STR_PAD_BOTH);


    if (preg_match($emailPattern, $student["email"])) {
        printf("✔ Passed => : Name : %s | Email : %s | GPA : %s\n", $student["name"], $student["email"], $paddedGrade);
    } else {
        printf("✔Passed  => : Name : %s | Email : %s | GPA : %s\n", $student["name"], "Wrong Email Format: Go for correction", $paddedGrade);
    }
    $csvFormat = implode("|", $student);
   
    echo "$csvFormat\n";
}
