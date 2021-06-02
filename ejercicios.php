<?php


declare (strict_types=1);

function sumArray(): int {
    $input = [3, 6, 1, -5, 0, 4];

    return array_sum($input);
}

function findMax(array $array): int {
    return max($array);
} 

// return array_sum(array_column($people, 'age')/count($array));
function averageAge(array $array): float {
    $sum = 0;
    foreach($array as $person) {
        $sum+=$person['age'];
    };
    $totalAge = $sum / count($array);
    return $totalAge;
}

