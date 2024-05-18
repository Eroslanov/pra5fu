<?php

function caesarsCipher(string $text): string
{
  $array = array(
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
    'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
    'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
  );
  $newText = '';
  for ($i = 0; $i < strlen($text); $i++) {
    $char = $text[$i];
    if (ctype_upper($char)) {
      $index = array_search($char, $array);
      if ($index !== false) {
        $newText .= $array[$index + 6];
      } else {
        $newText .= $char;
      }
    } else {
      $newText .= $char;
    }
  }
  return $newText;
}

$userText = readline("Введите текст: ");
echo "Шифр: " . caesarsCipher($userText) . "\n";
