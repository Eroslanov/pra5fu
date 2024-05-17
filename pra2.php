<?php

function arrayUnique(array $arr): array
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] === $arr[$j]) {
                unset($arr[$j]);
            }
        }
    }
  
    return array_values($arr);
}

$inputArray = [56, 56, 56, 56, 67, 89, 67, 345, 345, 67, 34];
$uniqueArray = arrayUnique($inputArray);

echo "Массив в коде:\n";
print_r($inputArray);

echo "\nМассив без дубликатов:\n";
print_r($uniqueArray);

?>
