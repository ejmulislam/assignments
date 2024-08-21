<?php

// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($str) {
    $vowelCount = 0;
    $vowels = 'aeiouAEIOU';
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        if (strpos($vowels, $str[$i]) !== false) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Process each string in the array
foreach ($strings as $str) {
    $vowelCount = countVowels($str);
    $reversedStr = reverseString($str);
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}
