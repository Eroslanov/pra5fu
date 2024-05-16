<?php

function mostRecent(string $text): void
{

    $arr = explode(" ", $text);
    $result = array_count_values($arr);
    arsort($result);
    echo "Часто повторяющиеся слово: " . key($result);
}

$text = readline("Введите слова: ");
mostRecent($text);