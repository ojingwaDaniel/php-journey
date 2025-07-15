<?php
$studentsData = [
"Daniel" => 89,
"Sarah" => 74,
"Ahmed" => 62,
"Peace" => 48,
"Joan" => 30,
];
$totalStudent = count($studentsData);
$totalScore = 0;

foreach($studentsData as $student => $score ){
    $grade = match (true) {
        $score >= 90  => "A",
        $score >= 75 => "B",
        $score >= 60 => "C",
        $score >= 50 => "D",
        $score >= 0 => "F",
        default => "Invalid Score",
    };
    $totalScore += $score;
    echo "$student : $score - Grade : $grade\n";
};
$classAverage = $totalScore / $totalStudent;
echo "Total Class Average : $classAverage \n";
