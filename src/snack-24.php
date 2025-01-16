<?php
$students = [
    [
        "name" => "Luca",
        "subjects" => [
            "Math" => 7,
            "English" => 8,
            "History" => 5
        ]
    ],
    [
        "name" => "Maria",
        "subjects" => [
            "Math" => 5,
            "English" => 6,
            "History" => 7
        ]
    ],
    [
        "name" => "Giovanni",
        "subjects" => [
            "Math" => 9,
            "English" => 7,
            "History" => 8
        ]
    ]
];

function calculateAverageGrades($students) {
    $result = [];
    foreach ($students as $student) {
        $averageVote = array_sum($student['subjects']) / count($student['subjects']);
        $roundedVote = round($averageVote, 0);
        
        if ($roundedVote > 6) {
            $result[] = [
                "name" => $student["name"],
                "averageVote" => $roundedVote
            ];
        }
    }

    return $result;
}

var_dump(calculateAverageGrades($students));